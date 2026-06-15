<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
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
  
  <!-- Announcement Ticker -->
  <div class="ticker-bar">
    <div class="ticker-track">
      <span>Curriculum by Top Industry Experts</span>
      <span class="ticker-dot"></span>
      <span>NAAC  Graded Institution Partner</span>
      <span class="ticker-dot"></span>
      <span>Next Intake Closes 15 July</span>
      <span class="ticker-dot"></span>
      <span>Only 30 Seats for 2026 Batch</span>
      <span class="ticker-dot"></span>
      <span>Curriculum by Top Healthcre Experts</span>
      <span class="ticker-dot"></span>
      <span>NAAC  Graded Institution Partner</span>
      <span class="ticker-dot"></span>
     <span>Next Intake Closes 15 July</span>
      <span class="ticker-dot"></span>
      <span>Only 30 Seats for 2026 Batch</span>
      <span class="ticker-dot"></span>
      <span>Admissions Open 2026 Cohort</span>
      <span class="ticker-dot"></span>
    </div>
  </div>

  <!-- Header / Navbar -->
  <header class="navbar" id="navbar">
    <div class="container nav-container">
      <a href="#" class="logo">
        <span class="logo-img"><img src="assets/images/cbc.logo.png" alt="Career Buddy Tech Logo" /></span>
        <span style=" font-size:1.5rem; color:yellow " class="logo-text-accent">Career Buddy College<sup class="logo-sup">+</sup></span>
      </a>
      
      <nav class="nav-links" id="navLinks">
        <a href="#programs" class="nav-link">Programs</a>
        <a href="#curriculum" class="nav-link">Curriculum</a>
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
          Bsc in <span class="text-accent-yellow" style="color: #e8e008;">Nursing</span> +<br>
          <span class="text-accent-yellow" style="color: #e8e008;">German Career Track</span>
        </h1>
        <p class="hero-sub">
          4-year nursing degree programs. Learn, lead, and care with the expertise needed to thrive in modern healthcare.
        </p>



        <div class="hero-actions">
          <a href="#apply" class="btn btn-primary">Apply for the 2026 cohort</a>
          <a href="#programs" class="btn btn-outline-hero">Explore Programs</a>
        </div>

        <span class="seats-badge">Only 30 seats — 2026 Batch</span>
      </div>

      <!-- Hero Right Image & Badges -->
      <div class="hero-right">
        <div class="hero-image-wrapper">
          <div class="hero-person-img">
            <img src="assets/images/hero.png" alt="Students learning technology" />
          </div>
          
          <div class="hero-float-badge badge-top-right">
            <strong><span data-count="500">500</span>+</strong>
            <span>Students Placed</span>
          </div>
          <div class="hero-float-badge badge-mid-left">
            <strong>₹<span data-count="18">22</span>L+</strong>
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
        <a href="#admission" class="anchor-pill">Admission Process</a>
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
      ['src' => 'assets/images/singapore-flag.jpeg', 'alt' => 'Singapore'],
  ];
  ?>

  <!-- Curriculum Section -->
  
  <style>
    

    * { box-sizing: border-box; }
    /* html { scroll-behavior: smooth; -webkit-font-smoothing: antialiased; }
    body {
      margin: 0;
      padding: 0;
      font-family: var(--font);
      background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
      color: var(--text);
      line-height: 1.6;
      overflow-x: hidden;
    } */
    a { text-decoration: none; color: inherit; }
    img { display: block; max-width: 100%; }
    ul { list-style: none; margin: 0; padding: 0; }

    .container {
      width: min(1300px, calc(100% - 32px));
      margin: 0 auto;
    }

    .section {
      padding:40px 0;
      background: #ffffff;
    }
    .section-header { margin-bottom: 56px; text-align: center; }
    .section-label {
      display: inline-block; font-size: 0.75rem; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase; color: #4ade80; margin-bottom: 14px;
    }
    .section-title {
      font-family: var(--font-display); font-size: clamp(1.85rem, 4vw, 3rem); font-weight: 800; line-height: 1.1; color: var(--white); margin-bottom: 16px;
    }
    .gradient-text {
      background: linear-gradient(90deg, rgba(36,144,56,1) 0%, rgba(87,199,133,1) 50%, rgba(237,221,83,1) 100%);
      -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
    }

    .curriculum-section {
      --cur-ease-bounce: cubic-bezier(0.175, 0.885, 0.32, 1.275);
      --cur-white-05: rgba(15, 23, 42, 0.05);
      --cur-white-10: rgba(15, 23, 42, 0.1);
      --cur-white-40: rgba(15, 23, 42, 0.4);
      --cur-white-50: rgba(15, 23, 42, 0.5);
      --cur-white-75: rgba(15, 23, 42, 0.75);
      --cur-white-80: rgba(15, 23, 42, 0.8);
      --cur-white-85: rgba(15, 23, 42, 0.85);
      --cur-sticky-top: calc(var(--nav-h) + var(--ticker-h));
      --cur-stack-base: 16px;
      --cur-stack-step: 24px;
      background: #ffffff;
      color: #111827;
      padding: 72px 0;
    }

    .cur-nav-list li:nth-child(1), .card-purple, .metric-purple, .semester-purple, .bullet-purple { --t-accent: #a78bfa; --t-accent-sem: #c4b5fd; --t-rgb: 139, 92, 246; --t-nav-rgb: 167, 139, 250; --t-pill-rgb: 167, 139, 250; --t-card-border: rgba(167, 139, 250, 0.25); --t-card-from: rgba(20, 15, 35, 0.97); --t-card-to: rgba(12, 8, 25, 0.97); --t-card-shadow: rgba(167, 139, 250, 0.06); }
    .cur-nav-list li:nth-child(2), .card-cyan, .metric-cyan, .semester-cyan, .bullet-cyan { --t-accent: #22d3ee; --t-accent-sem: #67e8f9; --t-rgb: 6, 182, 212; --t-nav-rgb: 34, 211, 238; --t-pill-rgb: 6, 182, 212; --t-card-border: rgba(34, 211, 238, 0.25); --t-card-from: rgba(8, 25, 35, 0.97); --t-card-to: rgba(5, 15, 22, 0.97); --t-card-shadow: rgba(34, 211, 238, 0.06); }
    .cur-nav-list li:nth-child(3), .card-green, .metric-green, .semester-green, .bullet-green { --t-accent: #4ade80; --t-accent-sem: #86efac; --t-rgb: 34, 197, 94; --t-nav-rgb: 74, 222, 128; --t-pill-rgb: 34, 197, 94; --t-card-border: rgba(74, 222, 128, 0.25); --t-card-from: rgba(8, 35, 18, 0.97); --t-card-to: rgba(5, 22, 10, 0.97); --t-card-shadow: rgba(74, 222, 128, 0.06); }
    .cur-nav-list li:nth-child(4), .card-orange, .metric-orange, .semester-orange, .bullet-orange { --t-accent: #fb923c; --t-accent-sem: #fdba74; --t-rgb: 249, 115, 22; --t-nav-rgb: 251, 146, 60; --t-pill-rgb: 249, 115, 22; --t-card-border: rgba(251, 146, 60, 0.25); --t-card-from: rgba(35, 20, 8, 0.97); --t-card-to: rgba(22, 12, 5, 0.97); --t-card-shadow: rgba(251, 146, 60, 0.06); }

    .container--curriculum { max-width: 1450px; }
    .curriculum-layout { display: grid; grid-template-columns: 280px 1fr; gap: 60px; align-items: start; }
    .curriculum-cards-stack { position: relative; padding-bottom: 10vh; }
    .curriculum-header { margin-bottom: 48px; }
    .curriculum-path-badge {
      display: inline-block; font-size: 9px; font-weight: 700; letter-spacing: 0.35em; text-transform: uppercase; color: #475569; padding: 8px 16px; background: #f8fafc; border: 1px solid #e5e7eb; border-radius: 100px; margin-bottom: 18px;
    }

    .curriculum-sidebar { position: sticky; top: 100px; padding: 24px 0; z-index: 10; }
    .cur-nav-list { display: flex; flex-direction: column; gap: 20px; }
    .curriculum-section .cur-nav-link { display: flex; flex-direction: column; padding: 16px 20px 16px 50px; color: var(--cur-white-40); font-weight: 700; border-radius: 12px; transition: all 0.3s var(--cur-ease-bounce); position: relative; cursor: pointer; }
    .curriculum-section .cur-nav-link::before { content: ''; position: absolute; left: 20px; top: 50%; transform: translateY(-50%); width: 12px; height: 12px; border-radius: 50%; background: var(--cur-white-10); transition: all 0.3s ease; }
    .cur-nav-num { display: inline-flex; align-items: center; justify-content: center; width: auto; min-width: 86px; height: auto; padding: 8px 10px; border-radius: 999px; font-size: 12px; font-weight: 800; background: var(--cur-white-10); color: var(--cur-white-50); margin-bottom: 8px; flex-shrink: 0; white-space: nowrap; }
    .cur-nav-title { font-size: 18px; color: inherit; line-height: 1.2;display: flex; justify-content:flex-start;gap: 10px; }
    .curriculum-section .cur-nav-link:hover { color: #111827; background: #f8fafc; transform: translateX(10px); }
    .curriculum-section .cur-nav-link.active { color: #111827; background: #f1f5f9; }
    .cur-nav-list li .cur-nav-num { background: rgba(var(--t-nav-rgb), 0.2); color: #000; }
    .curriculum-section .cur-nav-link.active .cur-nav-title { color: #0f766e; }
    .cur-nav-list li .cur-nav-link.active::before { background: #10b981; box-shadow: 0 0 15px rgba(16, 185, 129, 0.35); }

    .curriculum-card { position: sticky; top: calc(100px + var(--cur-stack-base) + var(--cur-stack-step) * var(--stack-index)); z-index: 1; background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border-radius: 20px; padding: 28px; margin-bottom: 20px; border: 1px solid rgba(148, 163, 184, 0.25); box-shadow: 0 18px 40px rgba(15, 23, 42, 0.08); color: #0f172a; transition: transform 0.4s var(--cur-ease-bounce), border-color 0.4s ease, box-shadow 0.4s ease; will-change: transform; }
    .curriculum-card:hover { transform: translateY(-5px); }
    .curriculum-card.card-purple, .curriculum-card.card-cyan, .curriculum-card.card-green, .curriculum-card.card-orange, .curriculum-card.card-white { border-color: rgba(148, 163, 184, 0.35); background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); box-shadow: 0 18px 40px rgba(15, 23, 42, 0.08); color: #0f172a; }
    .curriculum-card .curriculum-year-num { color: #0a0a0a; opacity: 1; }
    .curriculum-card .curriculum-card-header h3 { color: #0f172a; }
    .curriculum-card .curriculum-card-subtitle { color: #475569; }
    .curriculum-card .curriculum-course-item { color: #334155; }
    .curriculum-card .curriculum-bottom-tag { background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0; }
    .curriculum-card .curriculum-semester-box { background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); }

    #curriculum #year1 { --stack-index: 0; }
    #curriculum #year2 { --stack-index: 1; }
    #curriculum #year3 { --stack-index: 2; }
    #curriculum #year4 { --stack-index: 3; }

    .curriculum-card-body { display: block; max-height: 440px; overflow-y: auto; padding-right: 10px; }
    .curriculum-card-body::-webkit-scrollbar { width: 5px; }
    .curriculum-card-body::-webkit-scrollbar-track { background: var(--cur-white-05); }
    .curriculum-card-body::-webkit-scrollbar-thumb { background: var(--cur-white-10); border-radius: 10px; }

    .curriculum-card-header { display: grid; grid-template-columns: 1fr auto; grid-template-rows: auto auto; gap: 16px; margin-bottom: 32px; align-items: start; position: relative; }
    .curriculum-title-row { grid-column: 1 / 2; grid-row: 1 / 2; display: flex; align-items: center; gap: 16px; }
    .curriculum-country-flag { position: absolute; top: 0; right: 0; width: 60px; height: auto; object-fit: contain; }
    .curriculum-card-subtitle { grid-column: 1 / -1; grid-row: 2 / 3; font-size: 15px; color: var(--cur-white-75); line-height: 1.6; margin: 0; }
    .curriculum-card-header h3 { font-family: var(--font-display); font-size: 32px; font-weight: 800; margin: 0; color: #111827; }
    .card-purple h3, .card-cyan h3, .card-green h3, .card-orange h3 { text-shadow: 0 0 30px rgba(var(--t-rgb), 0.4); }
    .curriculum-year-num { width: auto; min-width: 96px; height: auto; padding: 10px 14px; display: flex; align-items: center; justify-content: center; font-family: var(--font-display); font-size: 22px; font-weight: 800; border-radius: 12px; flex-shrink: 0; transition: transform 0.3s var(--cur-ease-bounce); white-space: nowrap; }
    .curriculum-card:hover .curriculum-year-num { transform: scale(1.1); }
    .curriculum-card .curriculum-year-num { background: linear-gradient(135deg, #eef2ff, #f8fafc); color: #111827; text-shadow: none; border: 1px solid #e5e7eb; }

    .curriculum-semesters { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 24px; align-items: stretch; }
    .curriculum-semester-box { background: #ffffff; border-radius: 14px; padding: 16px; transition: background 0.3s ease, transform 0.3s ease; display: flex; flex-direction: column; border: 1px solid #eef2f7; }
    .curriculum-semester-box .curriculum-course-list { flex: 1; }
    .curriculum-semester-box img { width: 100%; height: 100%; object-fit: cover; border-radius: 8px; margin-top: auto; }
    .curriculum-semester-box:hover { background: #f8fafc; transform: translateY(-2px); }
    .curriculum-semester-tag { display: inline-flex; align-items: center; padding: 6px 16px; border-radius: 20px; font-size: 14px; font-weight: 700; margin-bottom: 14px; margin-right: 8px; }
    .semester-purple, .semester-cyan, .semester-green, .semester-orange { background: #f1f5f9; color: #334155; text-shadow: none; border: 1px solid #e5e7eb; }
    .semester-dark { background: #1e293b; color: #ffffff; border: 1px solid #334155; }
    .curriculum-course-list { display: flex; flex-direction: column; gap: 10px; }
    .curriculum-course-item { padding: 6px 0; font-size: 13.5px; color: #334155; display: flex; align-items: flex-start; gap: 10px; transition: transform 0.2s ease, color 0.2s ease; }
    .curriculum-course-item:hover { transform: translateX(6px); color: #111827; }
    .curriculum-section [class^="bullet-"] { width: 12px; height: 12px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; }
    .bullet-purple, .bullet-cyan, .bullet-green, .bullet-orange { background: #10b981; box-shadow: none; }
    .bullet-yellow { background: #fbbf24; box-shadow: 0 0 10px rgba(251,191,36,0.8); }
    .bullet-pink { background: #f472b6; box-shadow: 0 0 10px rgba(244,114,182,0.8); }

    .curriculum-bottom-tags { display: flex; gap: 20px; flex-wrap: wrap; padding: 16px 32px; background: #f8fafc; border: 1px solid #e5e7eb; border-radius: 16px; justify-content: center; margin-top: 24px; }
    .curriculum-bottom-tag { display: flex; align-items: center; gap: 8px; font-size: 15px; color: #334155; transition: transform 0.2s ease, color 0.2s ease; }
    .curriculum-bottom-tag:hover { transform: translateY(-3px); color: #111827; }
    .curriculum-tag-dot { width: 8px; height: 8px; border-radius: 50%; }
    .tag-dot-purple { background: #a855f7; }
    .tag-dot-cyan { background: #06b6d4; }
    .tag-dot-emerald { background: #10b981; }
    .tag-dot-amber { background: #f59e0b; }

    @media (max-width: 991.98px) {
      .curriculum-layout { grid-template-columns: minmax(0, 1fr); gap: 0; }
      .curriculum-sidebar { position: sticky; top: 0; padding: 10px 0; background: rgba(6, 6, 16, 0.96); backdrop-filter: blur(20px); border-bottom: 1px solid rgba(255,255,255,0.07); margin-bottom: 0; }
      .cur-nav-list { flex-direction: row; gap: 10px; overflow-x: auto; padding: 4px 16px 10px; scrollbar-width: none; }
      .cur-nav-list::-webkit-scrollbar { display: none; }
      .curriculum-section .cur-nav-link { flex-shrink: 0; flex-direction: row; gap: 8px; align-items: center; padding: 8px 16px; border-radius: 100px; white-space: nowrap; min-height: 44px; transform: none !important; border: 1px solid var(--cur-white-10); background: rgba(255,255,255,0.04); }
      .curriculum-section .cur-nav-link::before { position: static; transform: none; width: 8px; height: 8px; }
      .cur-nav-num { margin-bottom: 0; }
      .cur-nav-title { font-size: 14px; color:white;}
      .cur-nav-list li .cur-nav-link.active { background: rgba(var(--t-pill-rgb), 0.2); border-color: rgba(var(--t-pill-rgb), 0.5); color: #ffffff; }
      .cur-nav-list li .cur-nav-link.active .cur-nav-num { background: rgba(255,255,255,0.25); color: #ffffff; }
      .cur-nav-list li .cur-nav-link.active .cur-nav-title { color: #ffffff; }
      .curriculum-card { margin-bottom: 16px; }
      .curriculum-semesters { display: flex; flex-wrap: nowrap; gap: 16px; overflow-x: auto; padding-bottom: 8px; scrollbar-width: none; }
      .curriculum-semesters::-webkit-scrollbar { display: none; }
      .curriculum-semester-box { flex: 0 0 45%; min-width: 300px; }
    }

    @media (max-width: 767.98px) {
      .curriculum-card { padding: 20px 16px; margin-bottom: 14px; }
      .curriculum-card-header { grid-template-columns: 1fr; grid-template-rows: auto auto auto; gap: 12px; margin-bottom: 20px; }
      .curriculum-title-row { grid-column: 1 / -1; grid-row: 1 / 2; }
      .curriculum-card-subtitle { grid-row: 2 / 3; font-size: 13px; }
      .curriculum-year-num { min-width: 84px; padding: 8px 12px; font-size: 18px; border-radius: 10px; }
      .curriculum-card-header h3 { font-size: 15px; }
      .curriculum-semesters { gap: 12px; margin-bottom: 16px; }
      .curriculum-semester-box { padding: 14px; border-radius: 12px; flex: 0 0 88%; min-width: 88%; max-width: 88%; width: 88%; }
      .curriculum-semester-tag { font-size: 13px; padding: 6px 14px; margin-bottom: 12px; }
      .curriculum-course-item { font-size: 13px; padding: 4px 0; }
      .curriculum-bottom-tags { padding: 14px 16px; gap: 12px; margin-top: 18px; border-radius: 14px; }
      .curriculum-bottom-tag { font-size: 13px; }
      .year-4-flg{display: none;}
      .curriculum-sidebar{display:none;}
    }
  </style>

   <main class="section curriculum-section" id="curriculum">
    <div class="container container--curriculum">
      <div class="section-header">
        <span class="curriculum-path-badge">Curriculum Path</span>
        <h2 class="section-title">Your Global<span class="gradient-text"> Learning Journey</span></h2>
      </div>

      <div class="curriculum-layout">
        <nav class="curriculum-sidebar" aria-label="Curriculum years">
          <ul class="cur-nav-list">
            <li><a href="#year1" data-target="year1" class="cur-nav-link active"><span class="cur-nav-num">1st Year</span><span class="cur-nav-title">Dubai Track <img src="assets/images/flag-ae.svg" alt="UAE flag" style="width: 20px;"/></span></a></li>
            <li><a href="#year2" data-target="year2" class="cur-nav-link"><span class="cur-nav-num">2nd Year</span><span class="cur-nav-title">China Track <img src="assets/images/flag-cn.svg" alt="UAE flag" style="width: 20px; height:15px; margin-top:3px"/></span></a></li>
            <li><a href="#year3" data-target="year3" class="cur-nav-link"><span class="cur-nav-num">3rd Year</span><span class="cur-nav-title">Singapore Track <img src="assets/images/singapore-flag.jpeg" alt="UAE flag" style="width: 20px;height:15px; margin-top:3px"/></span></a></li>
            <li><a href="#year4" data-target="year4" class="cur-nav-link"><span class="cur-nav-num">4th Year</span><span class="cur-nav-title">Japan/Germany Career Track <img src="assets/images/jp-flag.jpg" alt="UAE flag" style="width: 20px;height:15px; margin-top:3px"/> <img src="assets/images/flag-de.svg" alt="UAE flag" style="width: 20px;height:15px; margin-top:3px"/></span></a></li>
          </ul>
        </nav>

        <div class="curriculum-cards-stack">
          <section id="year1" class="curriculum-card card-purple">
            <div class="curriculum-card-header">
              <img class="curriculum-country-flag" src="assets/images/flag-ae.svg" alt="UAE flag" />
              <div class="curriculum-title-row"><span class="curriculum-year-num" aria-hidden="true">1st Year</span><h3>Dubai Track</h3></div>
              <p class="curriculum-card-subtitle">Dubai track is the specially designed health care study & practice tour for Nursing & Physiotherpay students offering a unique opportunity to explore Dubai's world-class health care eco-system, Modern medical facilities & International health care practices.</p>
            </div>
            <div class="curriculum-card-body">
              <div class="curriculum-semesters">
                <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-purple">Program Outcome</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-purple" aria-hidden="true"></span>Hospital & healthcare facility visits</li><li class="curriculum-course-item"><span class="bullet-cyan" aria-hidden="true"></span>Understanding International health care standards & patient care practices</li><li class="curriculum-course-item"><span class="bullet-pink" aria-hidden="true"></span>Professional learning sessions</li>
              <li class="curriculum-course-item"><span class="bullet-pink" aria-hidden="true"></span>Guidance on health care licensing pathways in the UAE</li>
            </ul></div>
                <div class="curriculum-semester-box"><img src="assets/images/dubai-design.jpeg"></div>
              </div>
              <div class="curriculum-bottom-tags"><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-purple"></span>International Exposure</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-cyan"></span>Multi-cultural health care environment</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-emerald"></span>Interaction with UAE health care professionals</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-amber"></span>Certifications</span></div>
            </div>
          </section>

          <section id="year2" class="curriculum-card card-cyan">
            <div class="curriculum-card-header">
              <img class="curriculum-country-flag" src="assets/images/flag-cn.svg" alt="China flag" />
              <div class="curriculum-title-row"><span class="curriculum-year-num" aria-hidden="true">2nd Year</span><h3>China Track</h3></div>
              <p class="curriculum-card-subtitle">The China track is a speically designed study & practice tour for Nursing & Physiotherapy students, offering an exciting opportunity to experience how Artificial Intelligence(AI) is transforming health care in one of the world's leading technology & innovation hubs.</p>
            </div>
            <div class="curriculum-card-body">
              <div class="curriculum-semesters">
                <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-cyan">Program Outcome</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-cyan"></span>Learning how AI assist in diagnosis, patient monitoring, & treatment planning</li><li class="curriculum-course-item"><span class="bullet-purple"></span>Visits to advanced health care institutions & innovation centers</li><li class="curriculum-course-item"><span class="bullet-green"></span>Introduction to robotic rehabilitation systems</li><li class="curriculum-course-item"><span class="bullet-pink"></span>Experienced Chinese culture, Education & tehnological advancement</li></ul></div>
                <div class="curriculum-semester-box"><img src="assets/images/china.jpg"></div>
              </div>
          </section>

          <section id="year3" class="curriculum-card card-white">
            <div class="curriculum-card-header">
              <img class="curriculum-country-flag" src="assets/images/singapore-flag.jpeg" alt="Japan flag" />
              <div class="curriculum-title-row"><span class="curriculum-year-num" aria-hidden="true">3rd Year</span><h3>Singapore Track</h3></div>
              <p class="curriculum-card-subtitle">The Singapore track is a specially designed health care study & practice tour for students offering an opportunity to experience a high health care standards, excellent preparation outcomes, advanced medical infrastructure & strong emphasis on preventive care, making it an ideal destination for future health care professionals.</p>  
            </div>
            <div class="curriculum-card-body">
              <div class="curriculum-semesters">
                <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-dark">Program Outcome</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-green"></span>Understanding Singapore's health care delivery model</li><li class="curriculum-course-item"><span class="bullet-pink"></span>Learning evidence-based clinical practices</li><li class="curriculum-course-item"><span class="bullet-purple"></span>Understanding digital health & electronic medical records</li><li class="curriculum-course-item"><span class="bullet-orange"></span>Exposure to community & preventive health care programs</li><li class="curriculum-course-item"><span class="bullet-yellow"></span>Understanding elderly care & rehabilitation services in Singapore</li></ul></div>
                <div class="curriculum-semester-box"><img src="assets/images/nursing.png"></div>
              </div>
          </section>

          <section id="year4" class="curriculum-card card-orange">
            <div class="curriculum-card-header">
              <img class="curriculum-country-flag year-4-flg" src="assets/images/jp-flag.jpg" alt="Japan flag" style="right: 80px;" />
              <img class="curriculum-country-flag year-4-flg" src="assets/images/flag-de.svg" alt="Germany flag" style="right: 10px;"/>
              <div class="curriculum-title-row"><span class="curriculum-year-num" aria-hidden="true">4th Year</span><h3>Germany/Japan Career Track</h3></div>
              <p class="curriculum-card-subtitle">The Japan/Germany career track is a specialised placement-driven program designed for nursing & physiotherapy students who aspire to build succedful careers in Germany or Japan.<br>
            Unlike a study tour, this is long-term career development pathway that prepares students through language training, International health care orientation, interview preparation, certification support, & placement assistance.</p>
            </div>
            <div class="curriculum-card-body">
              <div class="curriculum-semesters">
                <div class="curriculum-semester-box"><div class="curriculum-semester-tag semester-orange">Program Details</div><ul class="curriculum-course-list"><li class="curriculum-course-item"><span class="bullet-orange"></span>International career planning</li><li class="curriculum-course-item"><span class="bullet-yellow"></span>German language training</li>
              <li class="curriculum-course-item"><span class="bullet-orange"></span>Japanese language training</li>
              <li class="curriculum-course-item"><span class="bullet-yellow"></span>English & IELTS preparation</li>
              <li class="curriculum-course-item"><span class="bullet-orange"></span>AR/VR classes for advanced health care training purpose</li>
              <li class="curriculum-course-item"><span class="bullet-yellow"></span>Mock examinations & practice sessions</li>
            </ul></div>
                <div class="curriculum-semester-box"><img src="assets/images/germany.webp"></div>
              </div>
              <div class="curriculum-bottom-tags"><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-amber"></span>Global placement assistance</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-emerald"></span>Health care workforce preparation</span><span class="curriculum-bottom-tag"><span class="curriculum-tag-dot tag-dot-cyan"></span>language training & certification supports</span>
            </div>
          </section>
        </div>
      </div>
    </div>
  </main>

  <script>
    (function () {
      const section = document.getElementById('curriculum');
      if (!section) return;

      const navLinks = section.querySelectorAll('.cur-nav-link');
      const cards = section.querySelectorAll('.curriculum-card');

      function setActive(cardId) {
        navLinks.forEach((link) => {
          link.classList.toggle('active', link.dataset.target === cardId);
        });
      }

      function updateActiveFromScroll() {
        const trigger = window.innerHeight * 0.35;
        let activeId = cards[0]?.id || null;

        for (let i = cards.length - 1; i >= 0; i--) {
          const card = cards[i];
          const rect = card.getBoundingClientRect();
          if (rect.top <= trigger) {
            activeId = card.id;
            break;
          }
        }

        setActive(activeId);
      }

      navLinks.forEach((link) => {
        link.addEventListener('click', (e) => {
          e.preventDefault();
          const target = document.getElementById(link.dataset.target);
          if (!target) return;
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          setActive(target.id);
        });
      });

      cards.forEach((card) => {
        card.addEventListener('click', (e) => {
          if (e.target.closest('a, button')) return;
          setActive(card.id);
        });
      });

      updateActiveFromScroll();
      window.addEventListener('scroll', updateActiveFromScroll, { passive: true });
      window.addEventListener('resize', updateActiveFromScroll, { passive: true });
    })();
  </script>
<!-- AI Trends vs Traditional Education -->
    <section id="ai-trends" class="section">
        <div class="container" style="max-width: 1600px;">
            <div class="section-header center reveal-up">
                <span class="section-label">THE WORLD OF HEALTHCARE IS CHANGING</span>
                <h2 class="section-title">Why Not <span class="gradient-text">Normal  Nursing or Physiotherapy?</span></h2>
                <p class="section-desc mt-3">The job market of 2030 won't look like 2019's. Here's what's happening.</p>
            </div>

            <!-- Trend Cards Grid -->
            <div class="ai-trends-grid">
                <!-- Trend 1 -->
                <div class="reveal-up">
                    <div class="trend-card">
                        <div class="chart-placeholder">
                            <canvas id="chart1"></canvas>
                        </div>
                        <h4>Global Salary Comparison</h4>
                        <p>Nurses in Germany and Japan earn significantly more than in India. <span class="text-purple-400">Germany/Japan: ₹2.5L - 4L/mo vs India: ₹20K - 35K/mo</span></p>
                    </div>
                </div>

                <!-- Trend 2 -->
                <div class="reveal-up">
                    <div class="trend-card">
                        <div class="chart-placeholder">
                            <canvas id="chart2"></canvas>
                        </div>
                        <h4>Rising Demand in Germany</h4>
                        <p>The requirement for qualified nurses in Germany is growing exponentially. <span class="text-yellow-400">Estimated 500,000+ vacancies by 2030</span></p>
                    </div>
                </div>

                <!-- Trend 3 -->
                <div class="reveal-up">
                    <div class="trend-card">
                        <div class="chart-placeholder">
                            <canvas id="chart3"></canvas>
                        </div>
                        <h4>Global Healthcare Vacancies</h4>
                        <p>Japan and Germany are facing acute shortages of healthcare professionals. <span class="text-green-400">International pathways → Guaranteed Global Career</span></p>
                    </div>
                </div>

                <!-- Trend 4 -->
                <div class="reveal-up">
                    <div class="trend-card">
                        <div class="chart-placeholder">
                            <canvas id="chart4"></canvas>
                        </div>
                        <h4>Career Progression Gap</h4>
                        <p><span class="text-green-400">Global Track: 10x higher savings potential</span> compared to traditional local practice. Secure your future globally.</p>
                    </div>
                </div>
            </div>

            <!-- Comparison Cards -->
            <div class="ai-trends-grid">
                <!-- Zenith AI -->
                <div class="reveal-up">
                    <div class="comparison-card ai-card">
                        <div class="comparison-header ai-header">
                            <h4>Career Buddy College <span class="red" style="color: red;">+</span></h4>
                        </div>
                        <ul class="comparison-list">
                            <li class="comparison-item">
                                <span class="check-icon">✓</span>
                                <span>Curriculum by global healthcare professionals.</span>
                            </li>
                            <li class="comparison-item">
                                <span class="check-icon">✓</span>
                                <span>Global Health care exposure from year 1</span>
                            </li>
                            <li class="comparison-item">
                                <span class="check-icon">✓</span>
                                <span>4 different countries healthcare ecosystem exposure.</span>
                            </li>
                            <li class="comparison-item">
                                <span class="check-icon">✓</span>
                                <span>AR/VR classes for modern medical practices virtually</span>
                            </li>
                            <li class="comparison-item">
                                <span class="check-icon">✓</span>
                                <span>Japanese/German-language training programs.</span>
                            </li>
                            <li class="comparison-item">
                                <span class="check-icon">✓</span>
                                <span>Graduate with global healthcare portfolio + network + skills</span>
                            </li>
                            
                        </ul>
                    </div>
                </div>

                <!-- Traditional Bsc Nursing  -->
                <div class="reveal-up">
                    <div class="comparison-card traditional-card">
                        <div class="comparison-header traditional-header">
                            <h4>Traditional Nursing / Physiotherapy</h4>
                        </div>
                        <ul class="comparison-list">
                            <li class="comparison-item">
                                <span class="cross-icon">⚠</span>
                                <span>Outdated curriculum updated every 10-15 years</span>
                            </li>
                            <li class="comparison-item">
                                <span class="cross-icon">⚠</span>
                                <span>No Global exposure in total course duration</span>
                            </li>
                            <li class="comparison-item">
                                <span class="cross-icon">⚠</span>
                                <span>Theory heavy, exam-focused</span>
                            </li>
                            <li class="comparison-item">
                                <span class="cross-icon">⚠</span>
                                <span>Struggle to get 1 Internship in final year</span>
                            </li>
                            <li class="comparison-item">
                                <span class="cross-icon">⚠</span>
                                <span>Graduate with CGPA, hope for placement</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
      // --- AI Trends Charts ---
function initAITrendsCharts() {
    // Chart 1: Monthly Salary Comparison
    const ctx1 = document.getElementById('chart1');
    if (ctx1) {
        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['India', 'Japan', 'Germany'],
                datasets: [{
                    label: 'Avg. Monthly Salary (INR)',
                    data: [28000, 260000, 320000],
                    backgroundColor: ['rgba(255, 255, 255, 0.2)', '#22d3ee', '#a78bfa'],
                    borderColor: ['rgba(255, 255, 255, 0.5)', '#22d3ee', '#a78bfa'],
                    borderWidth: 1,
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: { duration: 2000, easing: 'easeOutQuart' },
                plugins: { legend: { display: false } },
                scales: {
                    x: { grid: { display: false }, ticks: { color: 'rgba(255,255,255,0.7)' } },
                    y: { grid: { color: 'rgba(255,255,255,0.05)' }, ticks: { color: 'rgba(255,255,255,0.5)' } }
                }
            }
        });
    }
    
    // Chart 2: Rising Demand in Germany
    const ctx2 = document.getElementById('chart2');
    if (ctx2) {
        new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['2022', '2024', '2026', '2028', '2030'],
                datasets: [{
                    label: 'Nursing Vacancies',
                    data: [180000, 260000, 340000, 420000, 500000],
                    borderColor: '#fbbf24',
                    backgroundColor: 'rgba(251, 191, 36, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#fbbf24'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: { duration: 2000, easing: 'easeOutQuart' },
                plugins: { legend: { display: false } },
                scales: {
                    x: { grid: { display: false }, ticks: { color: 'rgba(255,255,255,0.7)' } },
                    y: { grid: { color: 'rgba(255,255,255,0.05)' }, ticks: { color: 'rgba(255,255,255,0.5)' } }
                }
            }
        });
    }
    
    // Chart 3: Global Vacancy Comparison
    const ctx3 = document.getElementById('chart3');
    if (ctx3) {
        new Chart(ctx3, {
            type: 'doughnut',
            data: {
                labels: ['Germany', 'Japan', 'Other EU'],
                datasets: [{
                    data: [45, 35, 20],
                    backgroundColor: ['#a78bfa', '#22d3ee', 'rgba(255, 255, 255, 0.1)'],
                    borderWidth: 0,
                    hoverOffset: 15
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%',
                plugins: { 
                    legend: { 
                        position: 'bottom',
                        labels: { color: 'rgba(255,255,255,0.8)', padding: 12, font: { size: 10 } } 
                    } 
                }
            }
        });
    }
    
    // Chart 4: Career Savings Potential
    const ctx4 = document.getElementById('chart4');
    if (ctx4) {
        new Chart(ctx4, {
            type: 'line',
            data: {
                labels: ['Yr 1', 'Yr 2', 'Yr 3', 'Yr 4', 'Yr 5'],
                datasets: [
                    { 
                        label: 'Global Track (Savings)', 
                        data: [12, 30, 55, 85, 120], 
                        borderColor: '#4ade80', 
                        borderWidth: 3, 
                        fill: false, 
                        tension: 0.4 
                    },
                    { 
                        label: 'Local Track (Savings)', 
                        data: [1, 2.5, 4.5, 7, 10], 
                        borderColor: 'rgba(255,255,255,0.3)', 
                        borderWidth: 2, 
                        borderDash: [5, 5], 
                        fill: false 
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { 
                    legend: { 
                        position: 'top',
                        labels: { color: 'rgba(255,255,255,0.7)', font: { size: 9 }, padding: 8 } 
                    } 
                },
                scales: {
                    x: { grid: { display: false }, ticks: { color: 'rgba(255,255,255,0.5)' } },
                    y: { grid: { color: 'rgba(255,255,255,0.05)' }, ticks: { color: 'rgba(255,255,255,0.5)' } }
                }
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    // Initialize charts when section comes into view
    const aiTrendsSection = document.getElementById('ai-trends');
    if (aiTrendsSection) {
        const chartObserver = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                initAITrendsCharts();
                chartObserver.unobserve(aiTrendsSection);
            }
        }, { threshold: 0.2 });
        chartObserver.observe(aiTrendsSection);
    }
});
      </script>
  <!-- Featured Programs -->
  <section class="section programs-section" id="programs">
      <div class="container">
          <div class="section-header">
              <span class="section-label reveal-up">Featured Programs</span>
              <h2 class="section-title reveal-up">Choose Your Path to the <span class="text-accent">Top 1%</span></h2>
              <p class="section-desc reveal-up text-center">Three Global Healthcare-aligned undergraduated programs designed to make you Global Healthcare job-ready from day one.</p>
          </div>

          <div class="programs-slider-wrap" style="position: relative;">
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
                          <div class="metric-item"><strong>18.50 Lakhs</strong><span>Fees</span></div>
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
                              <li>Minimum 50% aggregate marks in PCB</li>
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
                          <div class="metric-item"><strong>₹11.50 Lakhs</strong><span>Fees</span></div>
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
                              <li>Minimum 50% aggregate marks</li>
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
                          <div class="metric-item"><strong>₹12.50 Lakhs</strong><span>Fees</span></div>
                          <div class="metric-divider"></div>
                          <div class="metric-item"><strong>₹20-40 LPA</strong><span>Avg. Package</span></div>
                          <div class="metric-divider"></div>
                          <div class="metric-item"><strong>80+</strong><span>Global Hiring Partners</span></div>
                      </div>
                      <ul class="program-tags">
                          <li>Dubai Clinical Exposure Pathway</li>
                          <li>China AI & Smart Rehabilitation</li>
                          <li>Australia Career Track Preparation</li>
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
              
              <!-- Swiper Navigation Arrows (Desktop) -->
              <div class="swiper-button-prev programs-button-prev"></div>
              <div class="swiper-button-next programs-button-next"></div>
          </div>
      </div>
  </section>


  <!-- Campus -->

  <section class="section campus-section" id="campus">
        <div class="container">
            <div class="campus-grid">
                <div class="campus-info reveal-up">
                    <span class="section-label">Your degree is awarded by</span>
                    <h2 class="section-title">Partner Institution<br><span class="text-muted">NAAC Grade</span></h2>
                    <p class="section-desc">A recognized university with modern infrastructure. Don't miss out on the full college experience.</p>
                    <div class="campus-stats">
                        <div class="campus-stat"><strong>YES</strong><span>IAP</span></div>|
                        <div class="campus-stat"><strong>Yes</strong><span>INC</span></div>|
                        <div class="campus-stat"><strong>Yes</strong><span>State Govt Approved</span></div>|
                        <div class="campus-stat"><strong>Yes</strong><span>Govt Degree</span></div>
                        
                    </div>
                </div>
                <div class="campus-gallery reveal-up">
                    <div class="swiper campus-swiper">
                        <div class="swiper-wrapper">
                             <div class="swiper-slide"><img src="assets/images/7.webp" alt="Campus-Lab" loading="lazy"></div>
                            <div class="swiper-slide"><img src="assets/images/lab-2.jpg" alt="Campus-Lab" loading="lazy"></div>
                            <div class="swiper-slide"><img src="assets/images/1.webp" alt="Campus-Lab" loading="lazy"></div>
                            <div class="swiper-slide"><img src="assets/images/lab-3.jpg" alt="Campus-Lab" loading="lazy"></div>
                            <div class="swiper-slide"><img src="assets/images/lab-4.jpg" alt="Campus-Lab" loading="lazy"></div>
                            <div class="swiper-slide"><img src="assets/images/4.webp" alt="Campus-Lab" loading="lazy"></div>
                            <div class="swiper-slide"><img src="assets/images/lab-8.jpg" alt="Campus-Lab" loading="lazy"></div>
                            <div class="swiper-slide"><img src="assets/images/lab-6.jpg" alt="Campus-Lab" loading="lazy"></div>
                            <div class="swiper-slide"><img src="assets/images/lab-13.jpg" alt="Campus-Lab" loading="lazy"></div>
                            <div class="swiper-slide"><img src="assets/images/lab-15.jpg" alt="Campus-Lab" loading="lazy"></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <!-- Why Choose Us -->
  <section class="section why-section" id="why-us">
    <div class="container">
      <div class="section-header center">
        <span class="section-label reveal-up">Why Career Buddy College</span>
        <h2 class="section-title reveal-up" style="color:#000;">Healthcare Education <span class="text-accent">Reimagined for Today's Age</span></h2>
      </div>
      <div class="why-grid">
        <div class="why-card reveal-up">
          <div class="why-num">01</div>
          <h3>Industry Aligned Curriculum as per Global Standard</h3>
          <p>Curriculum designed by global healthcare experts, updated to match international standards and latest industry practices.</p>
        </div>
        <div class="why-card reveal-up">
          <div class="why-num">02</div>
          <h3>Live Global Healthcare Exposure</h3>
          <p>Get hands-on experience in international hospitals across Dubai, China, Japan, and Germany from year one.</p>
        </div>
        <div class="why-card reveal-up">
          <div class="why-num">03</div>
          <h3>1:1 Mentor Support</h3>
          <p>Personal guidance from experienced healthcare professionals and mentors with weekly one-on-one sessions.</p>
        </div>
        <div class="why-card reveal-up">
          <div class="why-num">04</div>
          <h3>Abroad Placement Assistance</h3>
          <p>Dedicated career services for international placements, including interview prep and direct referrals to 100+ global partners.</p>
        </div>
        <div class="why-card reveal-up">
          <div class="why-num">05</div>
          <h3>Multiple Country Visit Opportunity</h3>
          <p>Experience healthcare systems across 4 different countries with structured international visits and clinical rotations.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Admission Process -->
 <?php require 'admission.php'; ?>
  

  <!-- FAQ -->
  <section class="section faq-section" id="faq" >
    <div class="container">
      <div class="section-header center">
        <span class="section-label reveal-up">FAQ</span>
        <h2 class="section-title reveal-up">Frequently Asked Questions</h2>
      </div>
      <div class="faq-list reveal-up">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false"><span>What are the eligibility criteria for BSc Nursing?</span><span class="faq-icon">+</span></button>
          <div class="faq-answer"><p>10+2 (12th) pass with Physics, Chemistry, Biology & English, minimum 50% aggregate marks in PCB. Age: 17–35 years as on 31 December of the admission year.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false"><span>What is the Global Track in BSc Nursing?</span><span class="faq-icon">+</span></button>
          <div class="faq-answer"><p>The Global Track includes real practice in Dubai, China, Singapore,Japan/Germany hospitals, AI in Healthcare practice in China, German language classes, IELTS preparation, and international clinical practice.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false"><span>What international placements are available?</span><span class="faq-icon">+</span></button>
          <div class="faq-answer"><p>We have 100+ global hiring partners with placements in Germany, Japan, Dubai, and other countries, with average packages ranging from ₹18–35 LPA.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form -->
    <main class="cta-page-shell">
    <section class="cta-contact-section" id="contact">
      <div class="cta-container">
        <div class="cta-contact-grid">
          <article class="cta-contact-info cta-reveal-up">
            <span class="cta-section-label">Get In Touch</span>
            <h2 class="cta-section-title">Ready to Join the <span class="text-accent">2026 Cohort?</span></h2>
            <p class="cta-section-desc">Take the first step. Our admissions team is ready to guide you through the process.</p>

            <div class="cta-contact-details">
              <div class="cta-contact-item">
                <span>📧</span>
                <div>
                  <strong>Email</strong>
                  <span>admissions@careerbuddycollege.com</span>
                </div>
              </div>
              <div class="cta-contact-item">
                <span>📞</span>
                <div>
                  <strong>Phone</strong>
                  <span>+91 7456000100</span>
                </div>
              </div>
              <div class="cta-contact-item">
                <span>📍</span>
                <div>
                  <strong>Campus</strong>
                  <span>Chakrata Road, Jhajra, Dehradun, Uttarakhand, 248007</span>
                </div>
              </div>
            </div>
          </article>

          <div class="cta-contact-form cta-reveal-up" id="apply">
            <span id="ee-form-36">
              <script src="https://eeconfigstaticfiles.blob.core.windows.net/staticfiles/applyadmission.gnc/ee-form-widget/form-36/widget.js"></script>
            </span>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- External JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
<!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="#" class="logo"><span class="logo-mark"><img src="assets/images/cbc.logo.png" alt="Career Buddy College Logo"></span><span class="logo-text" style="color: #e8e008;">Career Buddy College<sup class="logo-sup">+</sup></span></a>
                    <p>Empowering the next generation of tech innovators with premium, industry-ready education.</p>
                    
                </div>
                <div class="footer-links-wrapper">
                    <div class="footer-links"><h4>Programs</h4><a href="#programs">Bsc Nursing</a><a href="#programs">Physiotherapy</a><a href="#programs">GNM</a><a href="#apply">Apply Now</a></div>
                    <div class="footer-links"><h4>Company</h4><a href="#why-us">About</a><a href="#testimonials">Stories</a><a href="#faq">FAQ</a></div>
                    <div class="footer-links"><h4>Legal</h4><a href="#">Privacy</a><a href="#">Terms</a></div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Career Buddy College. All rights reserved.</p>
                <p class="text-center"><sup class="logo-sup">+</sup> Career Buddy College Training & Placement Career Centres LLP ("Career Buddy College") is NOT a university, college, higher education institution, or degree-granting body within the meaning of the UGC Act, 1956. CBC is NOT an Allied and Healthcare Institution within the meaning of the NCAHP Act, 2021.
CBC does not award any degree or higher education qualification, and offers no degree-granting programme of its own.
CBC does not operate any off-campus centre, study centre, extension centre, or franchisee campus of any university.
Where a university or a programme is listed on CBC website, CBC acts as the industry partner appointed by that university/college. These services are rendered directly to the university/college; the academic relationship — admission, curriculum, examinations, and award of the credential — is solely between the university/college and the student.</p>
<p>What CBC provides is the industry-facing layer: industry-aligned content development, skill laboratory infrastructure support, clinical and hospitality internships through our network of employer partners, career counselling, and placement support. Admissions, academic records, curriculum, and examinations are administered solely by the university/college. CBC supports the career-readiness components delivered to, and on behalf of, that university/college. CBC has no authority or influence over, and cannot give any guarantee as to, the validity or approval status of any university/college or any programme. Always refer to the official website of the University/college, the UGC, or the relevant council for verification.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>