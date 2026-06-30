<!-- 
  REQUIRED DEPENDENCIES:
  1. Sora Font: <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">
  2. Swiper CSS: <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  3. Swiper JS: <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  4. GSAP: <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  5. ScrollTrigger: <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
-->

<style>
/* --- Standalone Track Record Styles (White Theme) --- */
.track-section { 
    background: #ffffff; 
    padding: 20px 0;
    color: #0f172a;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.section-header.center {
    text-align: center;
    margin-bottom: 48px;
}

.section-label {
    display: inline-block;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #249038;
    margin-bottom: 12px;
}

.section-title {
    font-family: 'Sora', sans-serif;
    font-size: 2.5rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0;
}

.track-grid { 
    display: grid; 
    grid-template-columns: repeat(4, 1fr); 
    gap: 16px; 
    margin-bottom: 48px; 
}

@media (max-width: 991px) {
    .track-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 576px) {
    .track-grid { grid-template-columns: 1fr; }
}

.track-card {
    text-align: center; 
    padding: 32px 16px;
    background: #f8fafc; 
    border: 1px solid #e2e8f0; 
    border-radius: 12px;
    transition: all 0.3s ease;
}

.track-card:hover { 
    border-color: #249038; 
    transform: translateY(-4px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
}

.track-num { 
    display: block; 
    font-family: 'Sora', sans-serif; 
    font-size: 2.5rem; 
    font-weight: 800; 
    color: #0f172a; 
    line-height: 1; 
}

.track-label { 
    font-size: 0.85rem; 
    color: #64748b; 
    margin-top: 8px; 
    display: block; 
}

.track-sub { 
    text-align: center; 
    font-size: 0.85rem; 
    color: #94a3b8; 
    margin-bottom: 24px; 
    letter-spacing: 0.05em; 
    text-transform: uppercase; 
}

.js-enabled .reveal-up {
    opacity: 0;
    transform: translateY(30px);
}

/* Marquee styles for placement page */
.marquee-container {
    width: 100%;
    overflow: hidden;
    white-space: nowrap;
    position: relative;
}
.marquee-container::before, .marquee-container::after {
    content: '';
    position: absolute;
    top: 0;
    width: 120px;
    height: 100%;
    z-index: 2;
    pointer-events: none;
}
.marquee-container::before {
    left: 0;
    background: linear-gradient(to right, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
}
.marquee-container::after {
    right: 0;
    background: linear-gradient(to left, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
}
.marquee-content {
    display: inline-flex;
    gap: 16px;
    animation: marquee-scroll 25s linear infinite;
    padding: 5px 0;
}
.marquee-item {
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #e5e7eb;
    border-radius: 50px;
    padding: 6px 16px;
    background: #ffffff;
    box-shadow: 0 4px 10px rgba(0,0,0,0.02);
}
.marquee-item img {
    height: 30px;
    width: auto;
    max-width: 120px;
    object-fit: contain;
    opacity: 1;
    transition: all 0.3s ease;
}
@keyframes marquee-scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(calc(-50% - 8px)); }
}
</style>

<!-- Add this script at the top to detect JS/GSAP -->
<script>
    if (typeof gsap !== 'undefined') {
        document.documentElement.classList.add('js-enabled');
    }
</script>

<!-- Track Record Section -->
<section class="section track-section" id="placement">
    <div class="container">
        <div class="section-header center">
            <!-- <span class="section-label reveal-up">Our Track Record</span> -->
            <h2 class="section-title reveal-up">We've Done This <span class="text-accent">Before</span></h2>
        </div>
        <div class="track-grid reveal-up">
            <div class="track-card">
                <span class="track-num text-accent"><span data-count="500" class="text-accent">500</span>+</span>
                <span class="track-label">Students Trained</span>
            </div>
            <div class="track-card">
                <span class="track-num text-accent">₹<span data-count="22" class="text-accent">22</span>L+</span>
                <span class="track-label">Avg. Salary Package</span>
            </div>
            <div class="track-card">
                <span class="track-num text-accent">₹<span data-count="45" class="text-accent">45</span>L</span>
                <span class="track-label">Highest Salary Package</span>
            </div>
            <div class="track-card">
                <span class="track-num text-accent"><span data-count="96" class="text-accent">96</span>%</span>
                <span class="track-label">Placement Rate</span>
            </div>
        </div>
    </div>
      <div class="marquee-container">
      <div class="marquee-content">
        <div class="marquee-item"><img src="assets/images/accord-logo.webp" alt="Accord"></div>
        <div class="marquee-item"><img src="assets/images/fortis-logo.webp" alt="Fortis"></div>
        <div class="marquee-item"><img src="assets/images/lif-care-logo.webp" alt="Life Care"></div>
        <div class="marquee-item"><img src="assets/images/metro-logo.webp" alt="Metro Hospital"></div>
        <div class="marquee-item"><img src="assets/images/apollo-logo.webp" alt="Apollo"></div>
        <div class="marquee-item"><img src="assets/images/max-logo.webp" alt="Max Healthcare"></div>
        
        <!-- Duplicates for seamless loop -->
        <div class="marquee-item"><img src="assets/images/accord-logo.webp" alt="Accord"></div>
        <div class="marquee-item"><img src="assets/images/fortis-logo.webp" alt="Fortis"></div>
        <div class="marquee-item"><img src="assets/images/lif-care-logo.webp" alt="Life Care"></div>
        <div class="marquee-item"><img src="assets/images/metro-logo.webp" alt="Metro Hospital"></div>
        <div class="marquee-item"><img src="assets/images/apollo-logo.webp" alt="Apollo"></div>
        <div class="marquee-item"><img src="assets/images/max-logo.webp" alt="Max Healthcare"></div>

        <div class="marquee-item"><img src="assets/images/accord-logo.webp" alt="Accord"></div>
        <div class="marquee-item"><img src="assets/images/fortis-logo.webp" alt="Fortis"></div>
        <div class="marquee-item"><img src="assets/images/lif-care-logo.webp" alt="Life Care"></div>
        <div class="marquee-item"><img src="assets/images/metro-logo.webp" alt="Metro Hospital"></div>
        <div class="marquee-item"><img src="assets/images/apollo-logo.webp" alt="Apollo"></div>
        <div class="marquee-item"><img src="assets/images/max-logo.webp" alt="Max Healthcare"></div>

        <div class="marquee-item"><img src="assets/images/accord-logo.webp" alt="Accord"></div>
        <div class="marquee-item"><img src="assets/images/fortis-logo.webp" alt="Fortis"></div>
        <div class="marquee-item"><img src="assets/images/lif-care-logo.webp" alt="Life Care"></div>
        <div class="marquee-item"><img src="assets/images/metro-logo.webp" alt="Metro Hospital"></div>
        <div class="marquee-item"><img src="assets/images/apollo-logo.webp" alt="Apollo"></div>
        <div class="marquee-item"><img src="assets/images/max-logo.webp" alt="Max Healthcare"></div>
      </div>
    </div>
</section>

<script>
(function () {
    'use strict';

    const hasGSAP = typeof gsap !== 'undefined';
    const hasScrollTrigger = typeof ScrollTrigger !== 'undefined';
    const placementSection = document.getElementById('placement');

    function animateCounter(el, target) {
        // First set to 0 for animation
        el.textContent = '0';
        
        if (hasGSAP) {
            const obj = { val: 0 };
            gsap.to(obj, {
                val: target,
                duration: 1.8,
                ease: 'power2.out',
                onUpdate: () => { el.textContent = Math.round(obj.val); },
            });
            return;
        }

        const start = performance.now();
        const duration = 1800;

        function step(timestamp) {
            const progress = Math.min(1, (timestamp - start) / duration);
            el.textContent = Math.round(progress * target);
            if (progress < 1) requestAnimationFrame(step);
        }

        requestAnimationFrame(step);
    }

    function initCounters() {
        if (!placementSection) return;

        const counters = Array.from(placementSection.querySelectorAll('[data-count]'));
        if (!counters.length) return;

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                const el = entry.target;
                const target = parseInt(el.dataset.count, 10) || 0;
                animateCounter(el, target);
                obs.unobserve(el);
            });
        }, { threshold: 0.4 });

        counters.forEach((el) => {
            if (hasGSAP && hasScrollTrigger) {
                ScrollTrigger.create({
                    trigger: el,
                    start: 'top 92%',
                    once: true,
                    onEnter: () => {
                        const target = parseInt(el.dataset.count, 10) || 0;
                        animateCounter(el, target);
                    },
                });
            } else {
                observer.observe(el);
            }
        });
    }

    function initReveals() {
        if (!placementSection) return;
        const revealEls = Array.from(placementSection.querySelectorAll('.reveal-up'));
        if (!revealEls.length) return;

        if (hasGSAP && hasScrollTrigger) {
            gsap.registerPlugin(ScrollTrigger);
            revealEls.forEach((el) => {
                gsap.to(el, {
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 90%',
                        toggleActions: 'play none none none',
                    },
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    ease: 'power3.out',
                });
            });
        } else {
            revealEls.forEach((el) => {
                el.style.opacity = '1';
                el.style.transform = 'none';
            });
        }
    }

    function initPlacementSection() {
        initReveals();
        initCounters();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPlacementSection);
    } else {
        initPlacementSection();
    }
})();
</script>
