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
  
  <main class="section curriculum-section" id="curriculum">
  <div class="container container--curriculum">
    <div class="section-header">
      <span class="curriculum-path-badge">Curriculum Path</span>
      <h2 class="section-title">Your Global<span class="gradient-text">Learning Journey</span></h2>
    </div>

    <div class="curriculum-layout">
      <nav class="curriculum-sidebar" aria-label="Curriculum years">
        <ul class="cur-nav-list">
          <li><a href="#year1" data-target="year1" class="cur-nav-link active"><span class="cur-nav-num">1st Year</span><span class="cur-nav-title">Dubai Track</span></a></li>
          <li><a href="#year2" data-target="year2" class="cur-nav-link"><span class="cur-nav-num">2nd Year</span><span class="cur-nav-title">China Track</span></a></li>
          <li><a href="#year3" data-target="year3" class="cur-nav-link"><span class="cur-nav-num">3rd Year</span><span class="cur-nav-title">JapanTrack</span></a></li>
          <li><a href="#year4" data-target="year4" class="cur-nav-link"><span class="cur-nav-num">4th Year</span><span class="cur-nav-title">Germany Track International</span></a></li>
        </ul>
      </nav>

      <div class="curriculum-cards-stack">
        <section id="year1" class="curriculum-card card-purple">
          <div class="curriculum-card-header">
            <span class="curriculum-country-flag" aria-label="UAE flag">🇦🇪</span>
            <div class="curriculum-title-row"><span class="curriculum-year-num" aria-hidden="true">1st Year</span><h3>Dubai Track</h3></div>
            <p class="curriculum-card-subtitle">Classroom + On Job Training — fast-track your healthcare career with hands-on skills and industry-ready certification.</p>
          </div>
          <div class="curriculum-card-body">
            <div class="curriculum-semesters">
              <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-purple">Program Details</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-purple" aria-hidden="true"></span>Classroom + On Job Training</li><li class="curriculum-course-item"><span class="bullet-cyan" aria-hidden="true"></span>Eligibility: 12th Pass</li><li class="curriculum-course-item"><span class="bullet-pink" aria-hidden="true"></span>Intake: Rolling Admissions</li></ul></div>
              <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-purple">Career Outcomes</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-green" aria-hidden="true"></span>Salary Range: ₹12,000 – ₹30,000/month</li><li class="curriculum-course-item"><span class="bullet-cyan" aria-hidden="true"></span>Industry-recognised skill certification</li><li class="curriculum-course-item"><span class="bullet-purple" aria-hidden="true"></span>Direct placement assistance on completion</li></ul></div>
            </div>
            <div class="curriculum-bottom-tags"><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-purple"></span>Healthcare</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-cyan"></span>Certification</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-emerald"></span>Placement</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-amber"></span>On-Job Training</span></div>
          </div>
        </section>

        <section id="year2" class="curriculum-card card-cyan">
          <div class="curriculum-card-header">
            <span class="curriculum-country-flag" aria-label="China flag">🇨🇳</span>
            <div class="curriculum-title-row"><span class="curriculum-year-num" aria-hidden="true">2nd Year</span><h3>China Track</h3></div>
            <p class="curriculum-card-subtitle">Full university degree with partnered University — specialise in allied health sciences with campus life, internships, and guaranteed career outcomes.</p>
          </div>
          <div class="curriculum-card-body">
            <div class="curriculum-semesters">
              <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-cyan">Specialisations</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-cyan"></span>Nursing (B.Sc)</li><li class="curriculum-course-item"><span class="bullet-purple"></span>Physiotherapy</li><li class="curriculum-course-item"><span class="bullet-green"></span>Occupational Therapy (OT)</li><li class="curriculum-course-item"><span class="bullet-pink"></span>Radiology &amp; Imaging</li><li class="curriculum-course-item"><span class="bullet-orange"></span>Optometry</li><li class="curriculum-course-item"><span class="bullet-yellow"></span>Audiology &amp; Speech Therapy</li><li class="curriculum-course-item"><span class="bullet-cyan"></span>Microbiology / Dialysis &amp; More</li></ul></div>
              <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-cyan">Program Highlights</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-green"></span>Cambridge Healthcare English</li><li class="curriculum-course-item"><span class="bullet-purple"></span>Personality Development</li><li class="curriculum-course-item"><span class="bullet-cyan"></span>Clinical Internships</li><li class="curriculum-course-item"><span class="bullet-pink"></span>Eligibility: 12th Pass with Biology</li><li class="curriculum-course-item"><span class="bullet-orange"></span>Pathway: Campus → Internship</li><li class="curriculum-course-item"><span class="bullet-green"></span>Intake: July 2026</li></ul></div>
            </div>
            <div class="curriculum-bottom-tags"><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-cyan"></span>Nursing</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-emerald"></span>Allied Health</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-purple"></span>Campus Life</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-amber"></span>Career</span></div>
          </div>
        </section>

        <section id="year3" class="curriculum-card card-white">
          <div class="curriculum-card-header">
            <span class="curriculum-country-flag" aria-label="Japan flag">🇯🇵</span>
            <div class="curriculum-title-row"><span class="curriculum-year-num" aria-hidden="true">3rd Year</span><h3>Japan Track</h3></div>
            <p class="curriculum-card-subtitle">Become a globally qualified nursing professional through international clinical exposure, AI-powered healthcare training, advanced certifications, and international placement opportunities.</p>
          </div>
          <div class="curriculum-card-body">
            <div class="curriculum-semesters">
              <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-dark">Year 1 – Dubai Pathway</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-green"></span>Clinical Practice Exposure</li><li class="curriculum-course-item"><span class="bullet-yellow"></span>Hospital Observation &amp; Training</li><li class="curriculum-course-item"><span class="bullet-purple"></span>Global Healthcare Standards</li></ul></div>
              <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-dark">Year 2 – China Pathway</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-pink"></span>AI in Healthcare Practice</li><li class="curriculum-course-item"><span class="bullet-cyan"></span>Smart Hospital Technologies</li><li class="curriculum-course-item"><span class="bullet-orange"></span>Healthcare Innovation Training</li></ul></div>
              <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-dark">Year 3 – Philippines Pathway</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-purple"></span>Advanced Life Support (ALS) Certification</li><li class="curriculum-course-item"><span class="bullet-green"></span>Emergency &amp; Critical Care Training</li><li class="curriculum-course-item"><span class="bullet-yellow"></span>International Clinical Skill Enhancement</li></ul></div>
              <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-dark">Year 4 – Germany Pathway</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-orange"></span>Placement Preparation Program</li><li class="curriculum-course-item"><span class="bullet-pink"></span>German Healthcare System Orientation</li><li class="curriculum-course-item"><span class="bullet-cyan"></span>Employment Support for Eligible Students</li></ul></div>
              <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-dark">Integrated Career Dev</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-green"></span>IELTS &amp; English Communication Training</li><li class="curriculum-course-item"><span class="bullet-purple"></span>German Language Training (A1 - B2 Levels)</li><li class="curriculum-course-item"><span class="bullet-pink"></span>Personality Dev &amp; Professional Grooming</li><li class="curriculum-course-item"><span class="bullet-yellow"></span>Interview Preparation &amp; Career Readiness</li></ul></div>
            </div>
            <div class="curriculum-bottom-tags"><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-purple"></span>Global Exposure</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-cyan"></span>Advanced Certifications</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-emerald"></span>Clinical Practice</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-amber"></span>Language Training</span></div>
          </div>
        </section>

        <section id="year4" class="curriculum-card card-orange">
          <div class="curriculum-card-header">
            <span class="curriculum-country-flag" aria-label="Germany flag">🇩🇪</span>
            <div class="curriculum-title-row"><span class="curriculum-year-num" aria-hidden="true">4th Year</span><h3>Germany Track</h3></div>
            <p class="curriculum-card-subtitle">Lead teams, launch startups, and work on the next generation of autonomous AI systems.</p>
          </div>
          <div class="curriculum-card-body">
            <div class="curriculum-semesters">
              <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-orange">Semester 7</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-orange"></span>Product Management for AI at Scale</li><li class="curriculum-course-item"><span class="bullet-green"></span>Scaling AI Systems (Infrastructure &amp; Cost)</li><li class="curriculum-course-item"><span class="bullet-purple"></span>Leadership &amp; Team Dynamics</li><li class="curriculum-course-item"><span class="bullet-pink"></span>Startup Incubation I</li><li class="curriculum-course-item"><span class="bullet-cyan"></span>Advanced Elective</li></ul></div>
              <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-orange">Semester 8</div><div class="curriculum-semester-tag semester-orange">+Final Launch</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-yellow"></span>Startup Incubation II (Demo Day)</li><li class="curriculum-course-item"><span class="bullet-orange"></span>Deployment &amp; Reliability Engineering</li><li class="curriculum-course-item"><span class="bullet-green"></span>Executive Communication &amp; Negotiation</li><li class="curriculum-course-item"><span class="bullet-purple"></span>Final Capstone Launch</li><li class="curriculum-course-item"><span class="bullet-pink"></span>Career Acceleration Program</li></ul></div>
            </div>
            <div class="curriculum-bottom-tags"><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-amber"></span>Leadership</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-emerald"></span>Startup</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-cyan"></span>Scale</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-purple"></span>Career</span></div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>


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