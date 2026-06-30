document.addEventListener('DOMContentLoaded', () => {
  const navbar = document.getElementById('navbar');
  const toggle = document.getElementById('navToggle');
  const navLinks = document.getElementById('navLinks');

  // Navbar scroll behavior
  window.addEventListener('scroll', () => {
    if (navbar) {
      navbar.classList.toggle('scrolled', window.scrollY > 20);
    }
  });

  // Mobile navigation toggle
  if (toggle && navLinks) {
    toggle.addEventListener('click', () => {
      navLinks.classList.toggle('open');
      toggle.classList.toggle('active');
    });
    
    // Close nav when clicking a link
    navLinks.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
      navLinks.classList.remove('open');
      toggle.classList.remove('active');
    }));
  }

  // Featured Programs carousel — one card per slide
  const programsSwiperEl = document.querySelector('.programs-swiper');
  if (programsSwiperEl && typeof Swiper !== 'undefined') {
    new Swiper('.programs-swiper', {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      autoplay: {
        delay: 9000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.programs-swiper .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.programs-button-next',
        prevEl: '.programs-button-prev',
      },
    });
  }

  // Campus Gallery carousel
  const campusSwiperEl = document.querySelector('.campus-swiper');
  if (campusSwiperEl && typeof Swiper !== 'undefined') {
    new Swiper('.campus-swiper', {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.campus-swiper .swiper-pagination',
        clickable: true,
      },
    });
  }

  // Reveal animations for all reveal-up elements
  const revealItems = document.querySelectorAll('.reveal-up, .cta-reveal-up');
  const revealObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  revealItems.forEach((item) => revealObserver.observe(item));

  // FAQ Accordion
  const faqQuestions = document.querySelectorAll('.faq-question');
  faqQuestions.forEach((question) => {
    question.addEventListener('click', () => {
      const faqItem = question.parentElement;
      const isActive = faqItem.classList.contains('active');

      // Close all other FAQ items
      document.querySelectorAll('.faq-item').forEach((item) => {
        item.classList.remove('active');
        const qBtn = item.querySelector('.faq-question');
        if (qBtn) {
          qBtn.setAttribute('aria-expanded', 'false');
        }
      });

      // Open clicked item if it wasn't active
      if (!isActive) {
        faqItem.classList.add('active');
        question.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // Countdown Timer
  const countdown = () => {
    const targetDate = new Date('July 15, 2026 00:00:00').getTime();
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance < 0) {
      document.getElementById('cdDays').textContent = '00';
      document.getElementById('cdHours').textContent = '00';
      document.getElementById('cdMins').textContent = '00';
      document.getElementById('cdSecs').textContent = '00';
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    const formatNum = (num) => num.toString().padStart(2, '0');

    document.getElementById('cdDays').textContent = formatNum(days);
    document.getElementById('cdHours').textContent = formatNum(hours);
    document.getElementById('cdMins').textContent = formatNum(minutes);
    document.getElementById('cdSecs').textContent = formatNum(seconds);
  };

  countdown();
  setInterval(countdown, 1000);

  // Hero Counter Animations
  const heroCounters = document.querySelectorAll('.hero-float-badge [data-count]');
  
  function animateHeroCounter(el, target) {
    if (typeof gsap !== 'undefined') {
      const obj = { val: 0 };
      el.textContent = '0';
      gsap.to(obj, {
        val: target,
        duration: 1.8,
        ease: 'power2.out',
        onUpdate: () => { el.textContent = Math.round(obj.val); },
      });
    } else {
      const start = performance.now();
      const duration = 1800;
      el.textContent = '0';
      
      function step(timestamp) {
        const progress = Math.min(1, (timestamp - start) / duration);
        el.textContent = Math.round(progress * target);
        if (progress < 1) requestAnimationFrame(step);
      }
      
      requestAnimationFrame(step);
    }
  }
  
  heroCounters.forEach((el) => {
    const target = parseInt(el.dataset.count, 10) || 0;
    
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
      ScrollTrigger.create({
        trigger: el,
        start: 'top 92%',
        once: true,
        onEnter: () => animateHeroCounter(el, target),
      });
    } else {
      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            animateHeroCounter(el, target);
            obs.unobserve(el);
          }
        });
      }, { threshold: 0.4 });
      
      observer.observe(el);
    }
  });
});


