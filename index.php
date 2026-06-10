<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Career Buddy College+</title>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <!-- External CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  
  <!-- Header / Navbar -->
  <header class="navbar" id="navbar">
    <div class="container nav-container">
      <a href="#" class="logo">
        <span class="logo-img"><img src="assets/images/cbc.logo.png" alt="Career Buddy Tech Logo" /></span>
        <span style="color:#E8E008; font-size:1.5rem;">Career Buddy College<sup class="logo-sup">+</sup></span>
      </a>
      
      <nav class="nav-links" id="navLinks">
        <a href="#programs" class="nav-link">Programs</a>
        <a href="#curriculum" class="nav-link">Curriculum</a>
        <a href="#placement" class="nav-link">Placement</a>
        <a href="#mentors" class="nav-link">Mentors</a>
        <a href="#testimonials" class="nav-link">Stories</a>
        <a href="#faq" class="nav-link">FAQ</a>
      </nav>
      
      <a href="#apply" class="btn btn-primary btn-nav">Apply Now</a>
      <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero" id="hero">
    <canvas id="heroCanvas" class="hero-canvas"></canvas>
    
    <div class="container hero-grid">
      
      <!-- Hero Left Content -->
      <div class="hero-left">
        <p class="hero-eyebrow">Built and delivered with industry leaders</p>
        <h1 class="hero-title">
          Bsc in <span class="text-accent">Nursing</span> +<br>
          <span class="text-accent">German Career Track</span>
        </h1>
        <p class="hero-sub">
          4-year nursing degree programs. Learn, lead, and care with the expertise needed to thrive in modern healthcare.
        </p>



        <div class="hero-actions">
          <a href="#apply" class="btn btn-primary">Apply for the 2026 cohort</a>
          <a href="#programs" class="btn btn-outline-hero">Explore Programs</a>
        </div>

        <span class="seats-badge">Only 120 seats — 2026 Batch</span>
      </div>

      <!-- Hero Right Image & Badges -->
      <div class="hero-right">
        <div class="hero-image-wrapper">
          <div class="hero-person-img">
            <img src="assets/images/nursing.png" alt="Students learning technology" />
          </div>
          
          <div class="hero-float-badge badge-top-right">
            <strong><span data-count="500">500</span>+</strong>
            <span>Students Placed</span>
          </div>
          <div class="hero-float-badge badge-mid-left">
            <strong>₹<span data-count="18">18</span>L+</strong>
            <span>Avg Placement</span>
          </div>
          <div class="hero-float-badge badge-bottom-right">
            <strong>₹<span data-count="45">45</span>L</strong>
            <span>Highest Package</span>
          </div>
        </div>
      </div>
      
    </div>

    <!-- Anchor Pills -->
    <div class="anchor-pills">
      <div class="container anchor-pills-inner">
        <a href="#placement" class="anchor-pill">Placement</a>
        <a href="#programs" class="anchor-pill">Programs</a>
        <a href="#curriculum" class="anchor-pill">Curriculum</a>
        <a href="#experience" class="anchor-pill">Industry Integration</a>
        <a href="#mentors" class="anchor-pill">Mentors</a>
        <a href="#apply" class="anchor-pill">Admission Process</a>
      </div>
    </div>
  </section>

  <!-- Healthcare Partners Section -->
  <section class="partners-marquee-section">
    <div class="partners-header">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px; position: relative; top: 2px;">
        <path d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1v2H9V7zm0 4h1v2H9v-2zm0 4h1v2H9v-2zm4-8h1v2h-1V7zm0 4h1v2h-1v-2zm0 4h1v2h-1v-2z"></path>
      </svg>
      HEALTHCARE PARTNERS
    </div>
    <div class="marquee-container">
      <div class="marquee-content">
        <div class="marquee-item"><img src="assets/images/accord.svg" alt="Accord"></div>
        <div class="marquee-item"><img src="assets/images/fortis.svg" alt="Fortis"></div>
        <div class="marquee-item"><img src="assets/images/lifecare.svg" alt="Life Care"></div>
        <div class="marquee-item"><img src="assets/images/metro.svg" alt="Metro Hospital"></div>
        <div class="marquee-item"><img src="assets/images/apollo.svg" alt="Apollo"></div>
        <div class="marquee-item"><img src="assets/images/max.svg" alt="Max Healthcare"></div>
        
        <!-- Duplicates for seamless loop -->
        <div class="marquee-item"><img src="assets/images/accord.svg" alt="Accord"></div>
        <div class="marquee-item"><img src="assets/images/fortis.svg" alt="Fortis"></div>
        <div class="marquee-item"><img src="assets/images/lifecare.svg" alt="Life Care"></div>
        <div class="marquee-item"><img src="assets/images/metro.svg" alt="Metro Hospital"></div>
        <div class="marquee-item"><img src="assets/images/apollo.svg" alt="Apollo"></div>
        <div class="marquee-item"><img src="assets/images/max.svg" alt="Max Healthcare"></div>

        <div class="marquee-item"><img src="assets/images/accord.svg" alt="Accord"></div>
        <div class="marquee-item"><img src="assets/images/fortis.svg" alt="Fortis"></div>
        <div class="marquee-item"><img src="assets/images/lifecare.svg" alt="Life Care"></div>
        <div class="marquee-item"><img src="assets/images/metro.svg" alt="Metro Hospital"></div>
        <div class="marquee-item"><img src="assets/images/apollo.svg" alt="Apollo"></div>
        <div class="marquee-item"><img src="assets/images/max.svg" alt="Max Healthcare"></div>

        <div class="marquee-item"><img src="assets/images/accord.svg" alt="Accord"></div>
        <div class="marquee-item"><img src="assets/images/fortis.svg" alt="Fortis"></div>
        <div class="marquee-item"><img src="assets/images/lifecare.svg" alt="Life Care"></div>
        <div class="marquee-item"><img src="assets/images/metro.svg" alt="Metro Hospital"></div>
        <div class="marquee-item"><img src="assets/images/apollo.svg" alt="Apollo"></div>
        <div class="marquee-item"><img src="assets/images/max.svg" alt="Max Healthcare"></div>
      </div>
    </div>
  </section>

  <?php
  $programFlags = [
      ['src' => 'assets/images/flag-ae.svg', 'alt' => 'United Arab Emirates'],
      ['src' => 'assets/images/flag-cn.svg', 'alt' => 'China'],
      ['src' => 'assets/images/flag-de.svg', 'alt' => 'Germany'],
      ['src' => 'assets/images/flag-jp.svg', 'alt' => 'Japan'],
      ['src' => 'assets/images/flag-ph.svg', 'alt' => 'Philippines'],
  ];
  ?>

  <!-- Curriculum Section -->
  
  

  <!-- Featured Programs -->
  <section class="section programs-section" id="programs">
      <div class="container">
          <div class="section-header">
              <span class="section-label reveal-up">Featured Programs</span>
              <h2 class="section-title reveal-up">Choose Your Path to the <span class="text-accent">Top 1%</span></h2>
              <p class="section-desc reveal-up">Two industry-aligned undergraduate programs designed to make you job-ready from day one.</p>
          </div>

          <div class="swiper programs-swiper" style="padding-bottom: 50px;">
              <div class="swiper-wrapper">
                  <article class="program-card swiper-slide reveal-up" data-tilt>
                      <div class="program-ribbon">Most Popular</div>

                      <div class="program-card-shine"></div>
                      <div class="program-top">
                          <span class="program-badge">
                              Global Healthcare Ready
                              <?php foreach ($programFlags as $flag): ?>
                              <img class="flag-icon" src="<?= htmlspecialchars($flag['src']) ?>" alt="<?= htmlspecialchars($flag['alt']) ?>" width="20" height="14" loading="lazy" />
                              <?php endforeach; ?>
                          </span>
                          <span class="program-duration">4 Years · Full Time</span>
                      </div>
                      <h3 class="program-name">Bsc in Nursing (Global Track)</h3>
                      <p class="program-desc">Master Global Healthcare practices, Real practice in Dubai, China, Japan, Germany Hospitals, International certifications built for top global healthcare roles.</p>
                      <div class="program-metrics">
                          <div class="metric-item"><strong>20 Lakhs</strong><span>Fees</span></div>
                          <div class="metric-divider"></div>
                          <div class="metric-item"><strong>100+</strong><span>Global Hiring Partners</span></div>
                          <div class="metric-divider"></div>
                          <div class="metric-item"><strong>₹18–35 LPA</strong><span>Avg. Package</span></div>
                      </div>
                      <ul class="program-tags">
                          <li>AI in Health Care Practice in China</li>
                          <li>German Language Classes</li>
                          <li>International Clinical Practice</li>
                          <li>IELTS Classes</li>
                      </ul>
                      <div class="program-eligibility">
                          <span class="program-eligibility-label">Eligibility</span>
                          <ul class="program-eligibility-list">
                              <li>10+2 (12th) pass with Physics, Chemistry, Biology &amp; English</li>
                              <li>Minimum 45% aggregate marks in PCB</li>
                              <li>Age: 17–35 years as on 31 December of the admission year</li>
                          </ul>
                      </div>
                      <div class="program-actions">
                          <a href="#apply" class="btn btn-primary magnetic-btn">Apply Now</a>
                          <a href="#curriculum" class="btn btn-ghost magnetic-btn">View Curriculum</a>
                      </div>
                  </article>

                  <article class="program-card program-card--featured swiper-slide reveal-up" data-tilt>
                      <div class="program-card-shine"></div>
                      <div class="program-top">
                          <span class="program-badge">
                              Global Healthcare Ready
                              <?php foreach ($programFlags as $flag): ?>
                              <img class="flag-icon" src="<?= htmlspecialchars($flag['src']) ?>" alt="<?= htmlspecialchars($flag['alt']) ?>" width="20" height="14" loading="lazy" />
                              <?php endforeach; ?>
                          </span>
                          <span class="program-duration">3 Years · Full Time</span>
                      </div>
                      <h3 class="program-name">General Nursing and Midwifery (GNM) <br>(Global Track)</h3>
                      <p class="program-desc">Master Global Healthcare practices, Real practice in Dubai, China, Japan/Germany Hospitals, International certifications built for top global healthcare roles.</p>
                      <div class="program-metrics">
                          <div class="metric-item"><strong>₹10 Lakhs</strong><span>Fees</span></div>
                          <div class="metric-divider"></div>
                          <div class="metric-item"><strong>₹15-30 LPA</strong><span>Avg. Package</span></div>
                          <div class="metric-divider"></div>
                          <div class="metric-item"><strong>100+</strong><span>Global Hiring Partners</span></div>
                      </div>
                      <ul class="program-tags">
                          <li>International General Nursing Practices</li>
                          <li>Global Practice Exposure</li>
                          <li>German Language Classes</li>
                          <li>IELTS Classes</li>
                      </ul>
                      <div class="program-eligibility">
                          <span class="program-eligibility-label">Eligibility</span>
                          <ul class="program-eligibility-list">
                              <li>10+2 (12th) pass in any stream (Arts, Science or Commerce)</li>
                              <li>Minimum 40% aggregate marks</li>
                              <li>Age: 17–35 years as on 31 December of the admission year</li>
                          </ul>
                      </div>
                      <div class="program-actions">
                          <a href="#apply" class="btn btn-primary magnetic-btn">Apply Now</a>
                          <a href="#curriculum" class="btn btn-ghost magnetic-btn">View Curriculum</a>
                      </div>
                  </article>

                  <article class="program-card swiper-slide reveal-up" data-tilt>
                      <div class="program-card-shine"></div>
                      <div class="program-top">
                          <span class="program-badge">
                              Global Healthcare Ready
                              <?php foreach ($programFlags as $flag): ?>
                              <img class="flag-icon" src="<?= htmlspecialchars($flag['src']) ?>" alt="<?= htmlspecialchars($flag['alt']) ?>" width="20" height="14" loading="lazy" />
                              <?php endforeach; ?>
                          </span>
                          <span class="program-duration">4 Years · Full Time</span>
                      </div>
                      <h3 class="program-name">Bachelor in Physiotherapy <br>(Global Track)</h3>
                      <p class="program-desc">Master in Global Physiotherapy practices, practice in Dubai, China, Japan/Germany hospitals and Australian global entrance examination preparation built for global standard physiotherapy roles.</p>
                      <div class="program-metrics">
                          <div class="metric-item"><strong>₹15 Lakhs</strong><span>Fees</span></div>
                          <div class="metric-divider"></div>
                          <div class="metric-item"><strong>₹20-40 LPA</strong><span>Avg. Package</span></div>
                          <div class="metric-divider"></div>
                          <div class="metric-item"><strong>80+</strong><span>Global Hiring Partners</span></div>
                      </div>
                      <ul class="program-tags">
                          <li>Dubai Clinical Exposure Pathway</li>
                          <li>China AI & Smart Rehabilitation</li>
                          <li>Japan Advanced Rehabilitation</li>
                          <li>German Language Training (A1, A2, B1 & B2)</li>
                      </ul>
                      <div class="program-eligibility">
                          <span class="program-eligibility-label">Eligibility</span>
                          <ul class="program-eligibility-list">
                              <li>10+2 (12th) pass with Physics, Chemistry, Biology &amp; English</li>
                              <li>Minimum 50% aggregate marks in PCB</li>
                              <li>Age: 17–25 years as on 31 December of the admission year</li>
                          </ul>
                      </div>
                      <div class="program-actions">
                          <a href="#apply" class="btn btn-primary magnetic-btn">Apply Now</a>
                          <a href="#curriculum" class="btn btn-ghost magnetic-btn">View Curriculum</a>
                      </div>
                  </article>
              </div>
              <div class="swiper-pagination"></div>
          </div>
      </div>
  </section>

  <!-- External JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>
 <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="#" class="logo"><span class="logo-mark">CB</span><span class="logo-text">Career Buddy <em>Tech</em></span></a>
                    <p>Empowering the next generation of tech innovators with premium, industry-ready education.</p>
                </div>
                <div class="footer-links"><h4>Programs</h4><a href="#programs">CS/IT</a><a href="#programs">Tech & Business</a><a href="#apply">Apply Now</a></div>
                <div class="footer-links"><h4>Company</h4><a href="#why-us">About</a><a href="#testimonials">Stories</a><a href="#faq">FAQ</a></div>
                <div class="footer-links"><h4>Legal</h4><a href="#">Privacy</a><a href="#">Terms</a></div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Career Buddy Tech. All rights reserved.</p>
            </div>
        </div>
    </footer>