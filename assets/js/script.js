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
        delay: 6000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.programs-swiper .swiper-pagination',
        clickable: true,
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
});


