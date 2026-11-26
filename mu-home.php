<?php
/*
 * Homepage sections modelled on the mastersunion.org homepage (layout + behaviour),
 * filled with Career Buddy College+ content and the existing CBC colour theme.
 *
 * DEMO MEDIA: videos/thumbnails are free Pexels stock clips (pexels.com/license), hot-linked.
 * Swap any URL in the $mu arrays below for your own file (e.g. 'assets/videos/campus.mp4').
 * Items marked "Student Name" are placeholders: replace with real students before going live.
 *
 * Usage: require_once 'mu-home.php'; then mu_section('hero'), mu_section('bento') ... where needed.
 */

function mu_vid($id, $file)  { return 'https://videos.pexels.com/video-files/' . $id . '/' . $id . '-' . $file . '.mp4'; }
function mu_thumb($id, $w = 640) { return 'https://images.pexels.com/videos/' . $id . '/pexels-photo-' . $id . '.jpeg?auto=compress&cs=tinysrgb&w=' . $w; }
function mu_e($s) { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); }

$mu = [
    'hero_bg'     => mu_vid('6129925', 'hd_1280_720_30fps'),
    'campus_film' => ['src' => mu_vid('6130037', 'hd_1280_720_30fps'), 'poster' => mu_thumb('6130037', 1280)],
    'graduation'  => ['src' => mu_vid('7945183', 'hd_1280_720_25fps'), 'poster' => mu_thumb('7945191', 1000)],
    // Campus reel on Cloudinary (public_id GNC/videos/global-website-video). q_auto = lighter preview, so_1 = poster frame
    'campus_reel' => [
        'src'    => 'https://res.cloudinary.com/nvouvdja/video/upload/q_auto/v1795156324/GNC/videos/global-website-video.mp4',
        'full'   => 'https://res.cloudinary.com/nvouvdja/video/upload/v1795156324/GNC/videos/global-website-video.mp4',
        'poster' => 'https://res.cloudinary.com/nvouvdja/video/upload/so_1,q_auto,w_1280/v1795156324/GNC/videos/global-website-video.jpg',
    ],
    'classroom'   => ['src' => mu_vid('6129937', 'hd_1280_720_30fps'), 'poster' => mu_thumb('6129937', 1000)],
];

$muFlags = [
    'ae' => ['assets/images/flag-ae.svg', 'UAE'],
    'cn' => ['assets/images/flag-cn.svg', 'China'],
    'sg' => ['assets/images/singapore-flag.jpeg', 'Singapore'],
    'jp' => ['assets/images/jp-flag.jpg', 'Japan'],
    'de' => ['assets/images/flag-de.svg', 'Germany'],
];

$muLogos = [
    ['assets/images/apollo-logo.webp', 'Apollo'],
    ['assets/images/fortis-logo.webp', 'Fortis'],
    ['assets/images/max-logo.webp', 'Max Healthcare'],
    ['assets/images/accord-logo.webp', 'Accord'],
    ['assets/images/metro-logo.webp', 'Metro Hospital'],
    ['assets/images/lif-care-logo.webp', 'Life Care'],
];

$muPrograms = [
    [
        'cat' => 'nursing', 'chip' => 'Most Popular',
        'pre' => 'BSc in', 'name' => 'Nursing (Global Track)',
        'desc' => 'Master global healthcare practices with real practice in Dubai, China, Japan & Germany hospitals and international certifications built for top global healthcare roles.',
        'video' => mu_vid('6130120', 'hd_1280_720_30fps'), 'poster' => mu_thumb('6130120'),
        'info' => ['Format' => 'On Campus · Full Time', 'Eligibility' => '10+2 with PCB & English, min. 50% in PCB', 'Duration' => '4 Years', 'Fees' => '₹22.50 Lakhs'],
        'salary' => '₹18–35 LPA', 'partners' => '100+',
        'tags' => ['AI in Healthcare Practice in China', 'German Language Classes', 'International Clinical Practice', 'IELTS Classes'],
    ],
    [
        'cat' => 'nursing', 'chip' => '',
        'pre' => 'General Nursing &', 'name' => 'Midwifery — GNM (Global Track)',
        'desc' => 'Master global healthcare practices with real practice in Dubai, China, Japan/Germany hospitals and international certifications built for top global healthcare roles.',
        'video' => mu_vid('6130024', 'hd_1280_720_30fps'), 'poster' => mu_thumb('6130024'),
        'info' => ['Format' => 'On Campus · Full Time', 'Eligibility' => '10+2 in any stream, min. 50% aggregate', 'Duration' => '3 Years', 'Fees' => '₹14.50 Lakhs'],
        'salary' => '₹15–30 LPA', 'partners' => '100+',
        'tags' => ['International General Nursing Practices', 'Global Practice Exposure', 'German Language Classes', 'IELTS Classes'],
    ],
    [
        'cat' => 'physio', 'chip' => '',
        'pre' => 'Bachelor in', 'name' => 'Physiotherapy (Global Track)',
        'desc' => 'Master global physiotherapy practices with practice in Dubai, China, Japan/Germany hospitals and Australian global entrance examination preparation.',
        'video' => mu_vid('6130223', 'hd_1280_720_30fps'), 'poster' => mu_thumb('6130223'),
        'info' => ['Format' => 'On Campus · Full Time', 'Eligibility' => '10+2 with PCB & English, min. 50% in PCB', 'Duration' => '4 Years', 'Fees' => '₹18.50 Lakhs'],
        'salary' => '₹20–40 LPA', 'partners' => '80+',
        'tags' => ['Dubai Clinical Exposure Pathway', 'China AI & Smart Rehabilitation', 'Australia Career Track Preparation', 'German Language Training (A1–B2)'],
    ],
];

$muTracks = [
    [
        'year' => '1st Year', 'flags' => ['ae'], 'tag' => 'Dubai Track',
        'h' => 'Explore a World-Class', 'em' => 'Healthcare Ecosystem',
        'p' => "A healthcare study & practice tour to explore Dubai's modern medical facilities and international healthcare practices.",
        'list' => ['Hospital & healthcare facility visits', 'International standards & patient care practices', 'Guidance on UAE healthcare licensing pathways', 'Certifications'],
        'img' => 'assets/images/dubai-design.jpeg', 'video' => mu_vid('6130037', 'hd_1280_720_30fps'),
    ],
    [
        'year' => '2nd Year', 'flags' => ['cn'], 'tag' => 'China/Japan Track',
        'h' => 'See How AI Is', 'em' => 'Transforming Healthcare',
        'p' => "Experience AI-assisted diagnosis, patient monitoring and robotic rehabilitation in one of the world's leading innovation hubs.",
        'list' => ['AI in diagnosis, monitoring & treatment planning', 'Visits to advanced healthcare & innovation centres', 'Introduction to robotic rehabilitation systems', 'Chinese culture, education & technology'],
        'img' => 'assets/images/china.jpg', 'video' => mu_vid('6130223', 'hd_1280_720_30fps'),
    ],
    [
        'year' => '3rd Year', 'flags' => ['sg'], 'tag' => 'Singapore/Germany Track',
        'h' => 'Learn From One of the', 'em' => 'Best Health Systems',
        'p' => 'High standards, excellent patient outcomes, advanced infrastructure and a strong focus on preventive care.',
        'list' => ["Singapore's healthcare delivery model", 'Evidence-based clinical practice', 'Digital health & electronic medical records', 'Elderly care & rehabilitation services'],
        'img' => 'assets/images/nursing.png', 'video' => mu_vid('6130022', 'hd_1280_720_30fps'),
    ],
    [
        'year' => '4th Year', 'flags' => ['jp', 'de'], 'tag' => 'Japan / Germany Career Track',
        'h' => 'Launch Your', 'em' => 'Global Healthcare Career',
        'p' => 'A placement-driven pathway with language training, interview preparation, certification support and placement assistance.',
        'list' => ['German & Japanese language training', 'English & IELTS preparation', 'AR/VR classes for advanced healthcare training', 'Mock examinations & global placement assistance'],
        'img' => 'assets/images/germany.webp', 'video' => mu_vid('6998077', 'hd_1280_720_25fps'),
    ],
];

$muHandsOn = [
    [
        'tag' => 'Clinical Practice', 'h' => 'Train in Real', 'em' => 'Partner Hospitals',
        'p' => 'Practise patient care alongside professionals across <b>100+ healthcare partners</b> including Apollo, Fortis and Max.',
        'points' => ['Hospital & healthcare facility visits', 'Interaction with international professionals', 'Multi-cultural healthcare environment'],
        'video' => mu_vid('6130024', 'hd_1280_720_30fps'),
    ],
    [
        'tag' => 'Simulation Labs', 'h' => 'Learn Modern Medicine in', 'em' => 'AR/VR Labs',
        'p' => 'Build confidence before the ward with <b>AR/VR classes</b>, skill labs and robotic rehabilitation systems.',
        'points' => ['AR/VR classes for advanced healthcare training', 'Robotic rehabilitation on the China Track', 'Mock examinations & practice sessions'],
        'video' => mu_vid('6130223', 'hd_1280_720_30fps'),
    ],
    [
        'tag' => 'Language & Licensing', 'h' => 'Speak the Language of', 'em' => 'Global Healthcare',
        'p' => '<b>German, Japanese, English & IELTS</b> training is built into your degree — not bolted on after it.',
        'points' => ['German language training A1 → B2', 'Japanese language training', 'Guidance on international licensing pathways'],
        'video' => mu_vid('6998077', 'hd_1280_720_25fps'),
    ],
];

$muTalks = [
    ['title' => "Inside Germany's Nursing Pathway", 'p' => 'Masterclass on licensing, language levels and life as a nurse in Germany —', 'hl' => 'Global Careers Series', 'video' => mu_vid('5453574', 'hd_1280_720_25fps'), 'poster' => mu_thumb('5453574')],
    ['title' => 'How AI Is Changing Patient Care', 'p' => 'From diagnosis to robotic rehab: what future nurses & physios must know —', 'hl' => 'AI in Healthcare Series', 'video' => mu_vid('6130022', 'hd_1280_720_30fps'), 'poster' => mu_thumb('6130022')],
];

$muModel = [
    ['n' => '01', 'b' => 'Global Curriculum', 'l' => 'Designed by global healthcare experts and updated to international standards.',
     'cards' => [['assets/images/dubai-design.jpeg', 'Dubai Track', 'International care standards'], ['assets/images/china.jpg', 'China Track', 'AI in healthcare'], ['assets/images/nursing.png', 'Singapore Track', 'Evidence-based practice']]],
    ['n' => '02', 'b' => 'Clinical Exposure', 'l' => 'Hands-on practice in skill labs and international hospitals from year one.',
     'cards' => [['assets/images/lab-2.jpg', 'Skill Labs', 'Practice before the ward'], ['assets/images/lab-4.jpg', 'Simulation', 'AR/VR training'], ['assets/images/4.webp', 'Hospital Rotations', '100+ partners']]],
    ['n' => '03', 'b' => '1:1 Mentorship', 'l' => 'Weekly one-on-one sessions with experienced healthcare professionals.',
     'cards' => [['assets/images/germany.webp', 'Career Planning', 'Germany & Japan pathways'], ['assets/images/lab-13.jpg', 'Interview Prep', 'Mock interviews & exams'], ['assets/images/lab-15.jpg', 'Placement Support', 'Abroad placement assistance']]],
];

/* Faculty model — scroll-driven like $muModel. Each person: [photo, name, role, credential ('' hides the line)].
 * Language & Full-Time use real photos from assets/images/. Visiting Faculty is still PLACEHOLDER (Pexels stock) — replace before going live. */
function mu_fac_img($dir, $file) { return 'assets/images/' . rawurlencode($dir) . '/' . rawurlencode($file); } // folder/file names contain spaces and &
function mu_photo($id, $w = 480) { return 'https://images.pexels.com/photos/' . $id . '/pexels-photo-' . $id . '.jpeg?auto=compress&cs=tinysrgb&w=' . $w . '&h=' . round($w * 1.05) . '&fit=crop'; }
$muFaculty = [
    ['n' => '40', 'b' => 'Language & Global Exposure', 'l' => 'Certified language trainers and global-placement experts preparing you for Germany, Japan, Dubai & beyond.',
     'people' => [ // photos: assets/images/Language-&-Global-Exposure/
        [mu_fac_img('Language-&-Global-Exposure', 'Assistant-Professor-Navmi-Joshi.webp'),         'Navmi Joshi',         'Assistant Professor',     'Language & Global Exposure'],
        [mu_fac_img('Language-&-Global-Exposure', 'Assistant-Professor-Vandana.webp'),             'Vandana',             'Assistant Professor',     'Language & Global Exposure'],
        [mu_fac_img('Language-&-Global-Exposure', 'Assistant-Professor For German Language.webp'), 'Assistant Professor', 'German Language Faculty', 'Language & Global Exposure'], // name to be added later
     ]],
    ['n' => '40', 'b' => 'Full-Time Faculty', 'l' => 'Dedicated nursing and physiotherapy educators shaping your core clinical learning every day.',
     'people' => [ // photos: assets/images/full-time-faculty/
        [mu_fac_img('full-time-faculty', 'Dr. Aslam.webp'),                          'Dr. Aslam',     'Full-Time Faculty',   ''],
        [mu_fac_img('full-time-faculty', 'Dr.Lolita.webp'),                          'Dr. Lolita',    'Full-Time Faculty',   ''],
        [mu_fac_img('full-time-faculty', 'Assistant-Professor-Neha-Pant.webp'),      'Neha Pant',     'Assistant Professor', 'Full-Time Faculty'],
        [mu_fac_img('full-time-faculty', 'Assistant-Professor-Shyamli.webp'),        'Shyamli',       'Assistant Professor', 'Full-Time Faculty'],
        [mu_fac_img('full-time-faculty', 'Assistant Professor - Ashish-Kunwar.webp'), 'Ashish Kunwar', 'Assistant Professor', 'Full-Time Faculty'],
        [mu_fac_img('full-time-faculty', 'Assistant Professor - Tannu-Pathak.webp'),  'Tannu Pathak',  'Assistant Professor', 'Full-Time Faculty'],
     ]],
    ['n' => '20', 'b' => 'Visiting Faculty', 'l' => 'Senior clinicians and international experts from partner hospitals and universities abroad.',
     'people' => [
        [mu_photo('4173239'), 'Dr. Thomas Keller', 'Visiting Professor',     'University Hospital, Germany'],
        [mu_photo('3714743'), 'Dr. Aisha Rahman',  'Nursing Director',       'Leading Hospital, Dubai'],
        [mu_photo('6749778'), 'Dr. Mei Lin',       'Rehabilitation Expert',  'Smart Rehab Centre, China'],
        [mu_photo('5215024'), 'Dr. Sophie Tan',    'Digital Health Advisor', 'Healthcare Group, Singapore'],
     ]],
];

$muStories = [ // portrait clips for the "real hospital experiences" carousel
    ['8381577', 'sd_540_960_25fps'], ['6998327', 'sd_540_960_25fps'], ['6326780', 'sd_540_960_25fps'],
    ['7423717', 'sd_540_960_30fps'], ['7647626', 'sd_540_960_30fps'], ['8381580', 'sd_540_960_25fps'], ['7492159', 'sd_540_960_25fps'],
];

$muAlumni = [ // landscape clips for the coverflow
    ['7945191', 'hd_1280_720_25fps', 'BSc Nursing · Germany Track'],
    ['6130223', 'hd_1280_720_30fps', 'Physiotherapy · Australia Track'],
    ['5453574', 'hd_1280_720_25fps', 'GNM · Japan Track'],
    ['6998077', 'hd_1280_720_25fps', 'BSc Nursing · Dubai Track'],
    ['6130022', 'hd_1280_720_30fps', 'BSc Nursing · Singapore Track'],
    ['6130120', 'hd_1280_720_30fps', 'GNM · Germany Track'],
    ['7945183', 'hd_1280_720_25fps', 'BSc Nursing · Class of 2025'],
];

$muWall = [ // "What it's really like" marquee images (two columns)
    ['assets/images/7.webp', 'assets/images/lab-2.jpg', mu_thumb('8381577', 400), 'assets/images/1.webp', 'assets/images/lab-3.jpg', mu_thumb('6326780', 400)],
    [mu_thumb('6998327', 400), 'assets/images/lab-4.jpg', 'assets/images/4.webp', mu_thumb('7647626', 400), 'assets/images/lab-8.jpg', 'assets/images/lab-6.jpg'],
];

function mu_play_svg() { return '<svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"><path d="M8 5.5v13a1 1 0 0 0 1.53.85l10.2-6.5a1 1 0 0 0 0-1.7L9.53 4.65A1 1 0 0 0 8 5.5Z" fill="currentColor"/></svg>'; }
function mu_arrow_svg() { return '<svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'; }
function mu_nav($prefix, $label) {
    return '<div class="mu-navbtns"><button type="button" class="mu-navbtn ' . $prefix . '-prev" aria-label="Previous ' . $label . '"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path d="M15 5l-7 7 7 7" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>'
         . '<button type="button" class="mu-navbtn ' . $prefix . '-next" aria-label="Next ' . $label . '"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path d="M9 5l7 7-7 7" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button></div>';
}
function mu_flags($keys, $cls = 'mu-flag') {
    global $muFlags; $o = '';
    foreach ($keys as $k) { $o .= '<img class="' . $cls . '" src="' . mu_e($muFlags[$k][0]) . '" alt="' . mu_e($muFlags[$k][1]) . ' flag" width="28" height="19" loading="lazy">'; }
    return $o;
}
/* A thumbnail that opens the video popup */
function mu_media($poster, $video, $alt, $cls = '') {
    return '<button type="button" class="mu-media ' . $cls . '" data-video-modal="' . mu_e($video) . '" aria-label="Play video: ' . mu_e($alt) . '">'
         . '<img src="' . mu_e($poster) . '" alt="' . mu_e($alt) . '" loading="lazy" decoding="async">'
         . '<span class="mu-media-play">' . mu_play_svg() . '</span></button>';
}

function mu_section($name) {
    global $mu, $muFlags, $muLogos, $muPrograms, $muTracks, $muHandsOn, $muTalks, $muModel, $muFaculty, $muStories, $muAlumni, $muWall;

    switch ($name) {

/* =========================================================== 1. HERO */
case 'hero': ?>
  <div class="mu-hero-pin" data-hero-pin>
  <section class="mu-hero" id="hero">
    <video class="mu-hero-video" autoplay muted loop playsinline preload="auto" poster="assets/images/hero.png" aria-hidden="true">
      <source src="<?= mu_e($mu['hero_bg']) ?>" type="video/mp4">
    </video>
    <div class="mu-hero-shade"></div>
    <div class="mu-container mu-hero-inner">
      <h1 class="mu-hero-title">
        Learn by <br><em class="mu-hero-em">Caring<svg class="mu-squiggle" viewBox="0 0 300 30" preserveAspectRatio="none" aria-hidden="true"><defs><linearGradient id="muSq" x1="0" x2="1"><stop offset="0" stop-color="#249038"/><stop offset=".5" stop-color="#57c785"/><stop offset="1" stop-color="#eddd53"/></linearGradient></defs><path d="M4 18 C 30 2, 50 30, 76 16 S 122 4, 148 16 S 196 30, 222 14 S 270 6, 296 16" fill="none" stroke="url(#muSq)" stroke-width="6" stroke-linecap="round"/></svg></em>
        <span class="mu-sr">— BSc Nursing, GNM &amp; Physiotherapy with Germany, Japan &amp; Australia career tracks</span>
      </h1>
      <div class="mu-hero-rotator" aria-hidden="true">
        <span>BSc Nursing <b>+</b> <i>Germany / Japan Career Track</i></span>
        <span>Bachelor in Physiotherapy <b>+</b> <i>Australia / Germany Career Track</i></span>
        <span>GNM <b>+</b> <i>Japan / Germany Career Track</i></span>
      </div>
      <div class="mu-hero-actions">
        <a href="#apply" class="mu-btn mu-btn--white">Apply for the 2027 Cohort <span class="mu-btn-arrow"><?= mu_arrow_svg() ?></span></a>
      </div>
      <dl class="mu-hero-stats">
        <div><dt>Students Trained</dt><dd><span data-mu-count="500">500</span>+</dd></div>
        <div><dt>Avg. Package</dt><dd>₹<span data-mu-count="22">22</span>L+</dd></div>
        <div><dt>Highest Package</dt><dd>₹<span data-mu-count="45">45</span>L</dd></div>
        <div><dt>Placement Rate</dt><dd><span data-mu-count="96">96</span>%</dd></div>
      </dl>
      <div class="mu-hero-side">
        <aside class="mu-countdown mu-countdown--compact" data-deadline="2026-12-31T23:59:59+05:30" aria-label="Round 1 admission deadline">
          <div class="mu-cd-top">
            <span class="mu-cd-tag"><span class="mu-live-dot"></span>Round 01 Admissions</span>
            <span class="mu-cd-date">Till <b>31 Dec 2026</b></span>
          </div>
          <p class="mu-cd-title">Applications closing soon for <em>CBCAT</em> 2027-28</p>
          <div class="mu-cd-row">
            <div class="mu-cd-grid" role="timer" aria-live="off">
              <div><b data-cd="d">00</b><small>Days</small></div>
              <div><b data-cd="h">00</b><small>Hrs</small></div>
              <div><b data-cd="m">00</b><small>Min</small></div>
              <div><b data-cd="s">00</b><small>Sec</small></div>
            </div>
            <a href="#apply" class="mu-cd-apply" aria-label="Apply before the deadline"><?= mu_arrow_svg() ?></a>
          </div>
        </aside>
        <!-- Campus video: small card here, grows to fill the hero as you scroll (mastersunion.org style) -->
        <div class="mu-campus-slot">
          <div class="mu-campus" data-campus>
            <video class="mu-campus-video" autoplay muted loop playsinline preload="auto" poster="<?= mu_e($mu['campus_reel']['poster']) ?>" aria-label="Campus video">
              <source src="<?= mu_e($mu['campus_reel']['src']) ?>" type="video/mp4">
            </video>
            <span class="mu-campus-shade" aria-hidden="true"></span>
            <span class="mu-campus-label">Explore our campus</span>
            <button type="button" class="mu-campus-mute" data-campus-mute aria-label="Unmute video" aria-pressed="false">
              <svg class="mu-ico-muted" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path d="M11 5 6 9H2v6h4l5 4V5z" fill="currentColor"/><path d="m23 9-6 6m0-6 6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
              <svg class="mu-ico-sound" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path d="M11 5 6 9H2v6h4l5 4V5z" fill="currentColor"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07M19.07 4.93a10 10 0 0 1 0 14.14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            </button>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  </div>
<?php break;

/* =========================================================== 2. BENTO */
case 'bento': ?>
  <section class="mu-sec mu-dark" id="why-cbc">
    <div class="mu-container">
      <div class="mu-headblock">
        <h2 class="mu-h2">Why Career Buddy College<span class="mu-plus">+</span></h2>
        <p class="mu-lead">A data-backed approach to global healthcare education.</p>
      </div>
      <div class="mu-bento">
        <div class="mu-stat is-wide" style="--rows:13">
          <div><h3 class="mu-stat-num"><span data-mu-count="500">500</span>+</h3><p class="mu-stat-label">Students Trained</p><p class="mu-stat-text">in hands-on clinical practice</p></div>
          <div class="mu-stat-logos"><?php foreach (array_slice($muLogos, 0, 4) as $l): ?><span><img src="<?= mu_e($l[0]) ?>" alt="<?= mu_e($l[1]) ?>" loading="lazy"></span><?php endforeach; ?></div>
        </div>
        <div class="mu-stat" style="--rows:12">
          <div><h3 class="mu-stat-num">₹<span data-mu-count="22">22</span>L+</h3><p class="mu-stat-label">Average Package</p><p class="mu-stat-text">in global placements</p></div>
          <div class="mu-stat-flags"><?= mu_flags(['de', 'jp', 'ae', 'sg']) ?></div>
        </div>
        <div class="mu-stat" style="--rows:12">
          <div><h3 class="mu-stat-num">₹<span data-mu-count="45">45</span>L</h3><p class="mu-stat-label">Highest Package</p><p class="mu-stat-text">international placement offer</p></div>
          <div class="mu-stat-flags"><?= mu_flags(['de', 'jp']) ?></div>
        </div>
        <div class="mu-stat is-wide" style="--rows:16">
          <div><h3 class="mu-stat-num"><span data-mu-count="100">100</span>+</h3><p class="mu-stat-label">Global Hiring Partners</p><p class="mu-stat-text">hospitals &amp; healthcare networks</p></div>
          <div class="mu-stat-logos"><?php foreach ($muLogos as $l): ?><span><img src="<?= mu_e($l[0]) ?>" alt="<?= mu_e($l[1]) ?>" loading="lazy"></span><?php endforeach; ?></div>
        </div>
        <div class="mu-stat mu-stat--row is-wide" style="--rows:10;--cols:2">
          <div><h3 class="mu-stat-num"><span data-mu-count="5">5</span></h3><p class="mu-stat-label">Countries</p><p class="mu-stat-text">of healthcare exposure in one degree</p></div>
          <div class="mu-stat-countries"><?php foreach ($muFlags as $f): ?><span><img src="<?= mu_e($f[0]) ?>" alt="" loading="lazy"><?= mu_e($f[1]) ?></span><?php endforeach; ?></div>
        </div>
        <div class="mu-stat is-wide" style="--rows:9">
          <div><h3 class="mu-stat-num"><span data-mu-count="96">96</span>%</h3><p class="mu-stat-label">Placement Rate</p><p class="mu-stat-text">across our cohorts</p></div>
        </div>
        <div class="mu-stat is-wide" style="--rows:16">
          <div><h3 class="mu-stat-num"><span data-mu-count="4">4</span></h3><p class="mu-stat-label">International Tracks</p><p class="mu-stat-text">one in every year of study</p></div>
          <ul class="mu-stat-list">
            <li><?= mu_flags(['ae']) ?> Dubai</li><li><?= mu_flags(['cn']) ?> China</li><li><?= mu_flags(['sg']) ?> Singapore</li><li><?= mu_flags(['jp', 'de']) ?> Japan / Germany</li>
          </ul>
        </div>
        <div class="mu-stat is-wide" style="--rows:10;--cols:3">
          <div><h3 class="mu-stat-num">A1–B2</h3><p class="mu-stat-label">Language Training Built Into Your Degree</p></div>
          <div class="mu-stat-chips"><span>German A1</span><span>German A2</span><span>German B1</span><span>German B2</span><span>Japanese</span><span>English</span><span>IELTS</span></div>
        </div>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== 3. ADMISSIONS / TRACKS / CAMPUS TABS */
case 'events':
    $tabs = [
        'admissions' => ['label' => 'Admissions', 'cards' => [
            ['img' => 'assets/images/lab-2.jpg', 'tags' => ['On Campus', '4 Years'], 'title' => 'BSc in Nursing (Global Track)', 'status' => 'Applications Open · 2027 Cohort', 'link' => '#apply', 'cta' => 'Apply Now'],
            ['img' => 'assets/images/lab-4.jpg', 'tags' => ['On Campus', '3 Years'], 'title' => 'General Nursing & Midwifery (GNM)', 'status' => 'Applications Open · 2027 Cohort', 'link' => '#apply', 'cta' => 'Apply Now'],
            ['img' => 'assets/images/lab-8.jpg', 'tags' => ['On Campus', '4 Years'], 'title' => 'Bachelor in Physiotherapy (Global Track)', 'status' => 'Applications Open · 2027 Cohort', 'link' => '#apply', 'cta' => 'Apply Now'],
            ['img' => 'assets/images/7.webp', 'tags' => ['Online', '1:1'], 'title' => 'Book a Counselling Session', 'status' => 'Talk to our admissions team', 'link' => 'book-session.php', 'cta' => 'Book Now'],
        ]],
        'tracks' => ['label' => 'Global Tracks', 'cards' => [
            ['img' => 'assets/images/dubai-design.jpeg', 'tags' => ['1st Year', 'Study Tour'], 'title' => 'Dubai Healthcare Track', 'status' => 'International healthcare standards', 'link' => '#curriculum', 'cta' => 'View Track'],
            ['img' => 'assets/images/china.jpg', 'tags' => ['2nd Year', 'Study Tour'], 'title' => 'China — AI in Healthcare Track', 'status' => 'AI diagnosis & robotic rehab', 'link' => '#curriculum', 'cta' => 'View Track'],
            ['img' => 'assets/images/nursing.png', 'tags' => ['3rd Year', 'Study Tour'], 'title' => 'Singapore Healthcare Track', 'status' => 'Evidence-based clinical practice', 'link' => '#curriculum', 'cta' => 'View Track'],
            ['img' => 'assets/images/germany.webp', 'tags' => ['4th Year', 'Career Track'], 'title' => 'Japan / Germany Career Track', 'status' => 'Language, licensing & placement', 'link' => '#curriculum', 'cta' => 'View Track'],
        ]],
        'campus' => ['label' => 'Campus Life', 'cards' => [
            ['img' => 'assets/images/lab-3.jpg', 'tags' => ['Dehradun', 'Labs'], 'title' => 'Clinical Skill Labs', 'status' => 'Practise before the ward', 'link' => 'book-session.php', 'cta' => 'Book a Visit'],
            ['img' => 'assets/images/lab-6.jpg', 'tags' => ['Dehradun', 'AR/VR'], 'title' => 'Simulation & AR/VR Classes', 'status' => 'Modern medical practice, virtually', 'link' => 'book-session.php', 'cta' => 'Book a Visit'],
            ['img' => 'assets/images/1.webp', 'tags' => ['Dehradun', 'Campus'], 'title' => 'NAAC Graded Partner Campus', 'status' => 'Recognised by INC & IAP', 'link' => '#campus', 'cta' => 'Explore Campus'],
            ['img' => 'assets/images/lab-13.jpg', 'tags' => ['Mentors', 'Weekly'], 'title' => '1:1 Mentor Support', 'status' => 'Weekly one-on-one sessions', 'link' => 'book-session.php', 'cta' => 'Book a Session'],
        ]],
    ]; ?>
  <section class="mu-sec mu-events" id="admissions-strip">
    <div class="mu-container">
      <div class="mu-events-head">
        <ul class="mu-tabs mu-tabs--light" role="tablist">
          <?php $i = 0; foreach ($tabs as $k => $t): ?>
          <li><button type="button" role="tab" class="<?= $i === 0 ? 'is-active' : '' ?>" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>" data-tab-target="ev-<?= $k ?>"><?= mu_e($t['label']) ?></button></li>
          <?php $i++; endforeach; ?>
        </ul>
        <?= mu_nav('ev', 'cards') ?>
      </div>
      <?php $i = 0; foreach ($tabs as $k => $t): ?>
      <div class="mu-tabpane <?= $i === 0 ? 'is-active' : '' ?>" id="ev-<?= $k ?>" role="tabpanel">
        <div class="swiper mu-ev-swiper">
          <div class="swiper-wrapper">
            <?php foreach ($t['cards'] as $c): ?>
            <article class="swiper-slide mu-ev-card">
              <div class="mu-ev-img"><img src="<?= mu_e($c['img']) ?>" alt="" loading="lazy"></div>
              <div class="mu-ev-body">
                <div class="mu-ev-tags"><span class="is-dark"><?= mu_e($c['tags'][0]) ?></span><span><?= mu_e($c['tags'][1]) ?></span></div>
                <h3><?= mu_e($c['title']) ?></h3>
                <p class="mu-ev-status"><?= mu_e($c['status']) ?></p>
                <a href="<?= mu_e($c['link']) ?>" class="mu-ev-link"><?= mu_e($c['cta']) ?> <?= mu_arrow_svg() ?></a>
              </div>
            </article>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php $i++; endforeach; ?>
    </div>
  </section>
<?php break;

/* =========================================================== 4. OUR PROGRAMMES */
case 'programs': ?>
  <section class="mu-sec mu-dark mu-programs" id="programs">
    <div class="mu-container">
      <h2 class="mu-h2">Our <em class="mu-em">Programmes</em></h2>
      <div class="mu-pg-grid">
            <?php foreach ($muPrograms as $p): ?>
            <article class="mu-pg-card">
              <div class="mu-pg-chiprow"><?php if ($p['chip']): ?><span class="mu-pg-chip"><?= mu_e($p['chip']) ?></span><?php else: ?><span class="mu-pg-chip mu-pg-chip--muted"><?= $p['cat'] === 'physio' ? 'Physiotherapy' : 'Nursing' ?></span><?php endif; ?></div>
              <h3 class="mu-pg-title"><?= mu_e($p['pre']) ?> <br><b><?= mu_e($p['name']) ?></b></h3>
              <p class="mu-pg-desc"><?= mu_e($p['desc']) ?></p>
              <?= mu_media($p['poster'], $p['video'], $p['pre'] . ' ' . $p['name'], 'mu-pg-media') ?>
              <dl class="mu-pg-info">
                <?php /* short values first (2 per row), long ones full width, so every card lines up */
                $rows = [
                    ['Duration', $p['info']['Duration'], ''], ['Fees', $p['info']['Fees'], ''],
                    ['Avg. Package', $p['salary'], ''], ['Hiring Partners', $p['partners'] . ' global', ''],
                    ['Format', $p['info']['Format'], 'is-full'], ['Eligibility', $p['info']['Eligibility'], 'is-full'],
                ];
                foreach ($rows as $r): ?><div class="<?= $r[2] ?>"><dt><?= mu_e($r[0]) ?></dt><dd><?= mu_e($r[1]) ?></dd></div><?php endforeach; ?>
              </dl>
              <ul class="mu-pg-tags"><?php foreach ($p['tags'] as $t): ?><li><?= mu_e($t) ?></li><?php endforeach; ?></ul>
              <div class="mu-pg-flags"><span>Global exposure</span><?= mu_flags(array_keys($muFlags)) ?></div>
              <div class="mu-pg-actions">
                <a href="#curriculum" class="mu-btn mu-btn--outline">Explore Programme <span class="mu-btn-arrow"><?= mu_arrow_svg() ?></span></a>
                <a href="#apply" class="mu-btn mu-btn--white">Apply Now</a>
              </div>
            </article>
            <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== 5. LEARN GLOBALLY — sticky stacked cards */
case 'tracks': ?>
  <section class="mu-sec mu-dark mu-learn" id="curriculum">
    <div class="mu-container">
      <div class="mu-learn-head">
        <h2 class="mu-h2">Learn <em class="mu-em">'Globally'</em> <br>by Training in 5 Countries</h2>
        <nav class="mu-learn-rail" aria-label="Jump to year">
          <?php foreach ($muTracks as $i => $t): ?>
          <a href="#year<?= $i + 1 ?>" class="<?= $i === 0 ? 'is-active' : '' ?>"><?= mu_flags($t['flags'], 'mu-flag mu-flag--sm') ?><span><?= mu_e($t['year']) ?></span></a>
          <?php endforeach; ?>
        </nav>
      </div>
      <div class="mu-learn-stack">
        <?php foreach ($muTracks as $i => $t): ?>
        <article class="mu-learn-card" id="year<?= $i + 1 ?>" style="--i:<?= $i ?>">
          <?= mu_media($t['img'], $t['video'], $t['tag'], 'mu-learn-media') ?>
          <div class="mu-learn-body">
            <div class="mu-learn-tags"><span class="mu-chip-dark"><?= mu_e($t['year']) ?></span><span class="mu-chip-light"><?= mu_flags($t['flags'], 'mu-flag mu-flag--sm') ?><?= mu_e($t['tag']) ?></span></div>
            <h3><?= mu_e($t['h']) ?> <br><em><?= mu_e($t['em']) ?></em></h3>
            <p><?= mu_e($t['p']) ?></p>
            <ul class="mu-learn-list"><?php foreach ($t['list'] as $li): ?><li><?= mu_e($li) ?></li><?php endforeach; ?></ul>
            <a href="#apply" class="mu-btn mu-btn--dark">Apply for 2027 <span class="mu-btn-arrow"><?= mu_arrow_svg() ?></span></a>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== 6. HANDS-ON — scroll-synced sticky video */
case 'handson': ?>
  <section class="mu-sec mu-dark mu-impact" id="hands-on">
    <div class="mu-container">
      <h2 class="mu-h2 mu-impact-head">Hands-on Learning: <br><em class="mu-em">Practise, Simulate, Speak</em></h2>
      <div class="mu-impact-wrap">
        <div class="mu-impact-left">
          <?php foreach ($muHandsOn as $i => $b): ?>
          <div class="mu-impact-box<?= $i === 0 ? ' is-active' : '' ?>" data-impact="<?= $i ?>" data-tag="<?= mu_e($b['tag']) ?>">
            <span class="mu-impact-tag"><?= mu_e($b['tag']) ?></span>
            <h3><?= mu_e($b['h']) ?> <br><em><?= mu_e($b['em']) ?></em></h3>
            <p><?= $b['p'] ?></p>
            <ol class="mu-points"><?php foreach ($b['points'] as $n => $pt): ?><li><span><?= $n + 1 ?></span><?= mu_e($pt) ?></li><?php endforeach; ?></ol>
            <video class="lazy-video mu-impact-mobvid" data-src="<?= mu_e($b['video']) ?>" muted loop playsinline preload="none" aria-hidden="true"></video>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="mu-impact-right" aria-hidden="true">
          <div class="mu-impact-screen">
            <?php foreach ($muHandsOn as $i => $b): ?>
            <video class="lazy-video<?= $i === 0 ? ' is-active' : '' ?>" data-src="<?= mu_e($b['video']) ?>" data-impact-video="<?= $i ?>" muted loop playsinline preload="none"></video>
            <?php endforeach; ?>
            <div class="mu-impact-hud">
              <span class="mu-impact-label"><?= mu_e($muHandsOn[0]['tag']) ?></span>
              <span class="mu-impact-count"><b>01</b> / <?= sprintf('%02d', count($muHandsOn)) ?></span>
            </div>
            <div class="mu-impact-bars"><?php foreach ($muHandsOn as $i => $b): ?><i class="<?= $i === 0 ? 'is-active' : '' ?>"></i><?php endforeach; ?></div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== 7. THOUGHT LEADERSHIP */
case 'talks': ?>
  <section class="mu-sec mu-light mu-talks" id="masterclasses">
    <div class="mu-container">
      <div class="mu-talks-box">
        <div class="mu-headblock">
          <h2 class="mu-h2">Learn from <em class="mu-em">Global Healthcare Experts</em></h2>
          <p class="mu-lead">Our masterclasses bring practising nurses, physiotherapists and healthcare leaders from around the world into your classroom.</p>
        </div>
        <div class="mu-talks-grid">
          <?php foreach ($muTalks as $t): ?>
          <article class="mu-talk">
            <?= mu_media($t['poster'], $t['video'], $t['title']) ?>
            <h3><?= mu_e($t['title']) ?></h3>
            <p><?= mu_e($t['p']) ?> <b><?= mu_e($t['hl']) ?></b></p>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== 8. LEARNING MODEL — scroll-driven tabs */
case 'model': ?>
  <section class="mu-dark mu-model" id="learning-model" style="--steps:<?= count($muModel) ?>">
    <div class="mu-model-sticky">
      <div class="mu-container">
        <div class="mu-model-head">
          <h2 class="mu-h2">Learning Model at <br><em class="mu-em">Career Buddy College<span class="mu-plus">+</span></em></h2>
          <a href="#curriculum" class="mu-btn mu-btn--outline">View Curriculum <span class="mu-btn-arrow"><?= mu_arrow_svg() ?></span></a>
        </div>
        <div class="mu-model-body">
          <div class="mu-model-left">
            <div class="mu-model-line"><span></span></div>
            <?php foreach ($muModel as $i => $m): ?>
            <button type="button" class="mu-model-item<?= $i === 0 ? ' is-active' : '' ?>" data-model="<?= $i ?>">
              <span class="mu-model-num"><?= mu_e($m['n']) ?></span>
              <span class="mu-model-text"><b><?= mu_e($m['b']) ?></b><small><?= mu_e($m['l']) ?></small></span>
            </button>
            <?php endforeach; ?>
          </div>
          <div class="mu-model-right">
            <?php foreach ($muModel as $i => $m): ?>
            <div class="mu-model-panel<?= $i === 0 ? ' is-active' : '' ?>" data-model-panel="<?= $i ?>">
              <?php foreach ($m['cards'] as $c): ?>
              <figure class="mu-model-card"><img src="<?= mu_e($c[0]) ?>" alt="" loading="lazy"><figcaption><b><?= mu_e($c[1]) ?></b><span><?= mu_e($c[2]) ?></span></figcaption></figure>
              <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== 8b. FACULTY MODEL — scroll-driven tabs; 3 faculty shown, chevron slides to the rest */
case 'faculty': ?>
  <section class="mu-dark mu-model mu-model--faculty" id="faculty" style="--steps:<?= count($muFaculty) ?>">
    <div class="mu-model-sticky">
      <div class="mu-container">
        <div class="mu-model-head">
          <h2 class="mu-h2">Faculty Model at <em class="mu-em">Career Buddy College<span class="mu-plus">+</span></em></h2>
          <a href="mentors.php" class="mu-btn mu-btn--outline">View Faculty <span class="mu-btn-arrow"><?= mu_arrow_svg() ?></span></a>
        </div>
        <div class="mu-model-body">
          <div class="mu-model-left">
            <div class="mu-model-line"><span></span></div>
            <?php foreach ($muFaculty as $i => $f): ?>
            <button type="button" class="mu-model-item<?= $i === 0 ? ' is-active' : '' ?>" data-model="<?= $i ?>">
              <span class="mu-model-num"><?= mu_e($f['n']) ?></span>
              <span class="mu-model-text"><i class="mu-fac-pct">%</i><b><?= mu_e($f['b']) ?></b><small><?= mu_e($f['l']) ?></small></span>
            </button>
            <?php endforeach; ?>
          </div>
          <div class="mu-model-right">
            <?php foreach ($muFaculty as $i => $f): ?>
            <div class="mu-model-panel mu-fac-panel<?= $i === 0 ? ' is-active' : '' ?>" data-model-panel="<?= $i ?>">
              <div class="mu-fac-viewport" id="mu-fac-vp-<?= $i ?>">
                <?php $facShift = max(0, count($f['people']) - 3); /* chevron slides to the last 3 cards */ ?>
                <div class="mu-fac-track" style="--fac-shift:<?= $facShift ?>">
                  <?php foreach ($f['people'] as $k => $p): ?>
                  <figure class="mu-fac-card<?= $k >= 3 ? ' mu-fac-card--extra' : '' ?><?= $k < $facShift ? ' mu-fac-card--lead' : '' ?>">
                    <div class="mu-fac-photo"><img src="<?= mu_e($p[0]) ?>" alt="<?= mu_e($p[1]) ?>" loading="lazy" decoding="async"></div>
                    <figcaption><b><?= mu_e($p[1]) ?></b><?php if ($p[2] !== ''): ?><span><?= mu_e($p[2]) ?></span><?php endif; ?><?php if ($p[3] !== ''): ?><em><?= mu_e($p[3]) ?></em><?php endif; ?></figcaption>
                  </figure>
                  <?php endforeach; ?>
                </div>
              </div>
              <?php if (count($f['people']) > 3): ?>
              <button type="button" class="mu-fac-more" aria-controls="mu-fac-vp-<?= $i ?>" aria-expanded="false" aria-label="Show more <?= mu_e($f['b']) ?>">
                <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path d="M9 5l7 7-7 7" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
              <?php endif; ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== 9. INDUSTRY BANNER */
case 'industry': ?>
  <section class="mu-sec mu-dark mu-template">
    <div class="mu-container mu-template-wrap">
      <div>
        <h2 class="mu-h2">Hospitals Are <em class="mu-em">Your Classroom</em></h2>
        <p class="mu-lead">With 100+ healthcare partners across 5 countries, every year of your degree puts you where real care happens — because the best way to learn care is to give it.</p>
        <ul class="mu-checks">
          <li>Hospital rotations from year one</li>
          <li>International clinical practice abroad</li>
          <li>Certifications with every global track</li>
        </ul>
      </div>
      <?= mu_media($mu['classroom']['poster'], $mu['classroom']['src'], 'Hospitals are your classroom', 'mu-template-media') ?>
    </div>
  </section>
<?php break;

/* =========================================================== 10. FULL-BLEED "WATCH VIDEO" */
case 'film': ?>
  <section class="mu-film" id="campus-film">
    <div class="mu-film-sticky">
      <video class="lazy-video mu-film-bg" data-src="<?= mu_e($mu['campus_film']['src']) ?>" muted loop playsinline preload="none" aria-hidden="true"></video>
      <div class="mu-film-shade"></div>
      <div class="mu-container mu-film-inner">
        <h2 class="mu-h2">Our Students <br><em class="mu-em">in Real Hospitals</em></h2>
        <button type="button" class="mu-film-play" data-video-modal="<?= mu_e($mu['campus_film']['src']) ?>"><span><?= mu_play_svg() ?></span>Watch Video</button>
        <p class="mu-film-text">From skill labs in Dehradun to wards in Dubai — a day in the life of a Career Buddy College<span class="mu-plus">+</span> student.</p>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== 11. EXPERIENCES CAROUSEL (projects) */
case 'experiences':
    $exp = [ // [pexels id, file, caption, small line]
        ['8381577', 'sd_540_960_25fps', 'Anatomy Lab', 'Learn the body hands-on'],
        ['6998327', 'sd_540_960_25fps', 'Hospital Rounds', 'Real wards, real patients'],
        ['6326780', 'sd_540_960_25fps', 'Physio Studio', 'Rehab & movement therapy'],
        ['7647626', 'sd_540_960_30fps', 'Skill Labs', 'Practise before the ward'],
    ]; ?>
  <section class="mu-sec mu-light mu-exp" id="experiences">
    <div class="mu-container">
      <div class="mu-exp-head">
        <h2 class="mu-h2"><span class="mu-strike">Classrooms</span> <em class="mu-em">Real Clinical Experiences</em></h2>
        <div class="mu-exp-intro">
          <p class="mu-lead">From anatomy labs to physiotherapy studios and hospital rounds — a sneak peek into how Career Buddy College<span class="mu-plus">+</span> students learn by doing.</p>
          <a href="#testimonials" class="mu-btn mu-btn--dark">Hear Their Stories <span class="mu-btn-arrow"><?= mu_arrow_svg() ?></span></a>
        </div>
      </div>
      <div class="mu-exp-grid">
        <?php foreach ($exp as $i => $e): ?>
        <button type="button" class="mu-exp-card" data-video-modal="<?= mu_e(mu_vid($e[0], $e[1])) ?>" aria-label="Watch: <?= mu_e($e[2]) ?>">
          <img src="<?= mu_e(mu_thumb($e[0], 480)) ?>" alt="" loading="lazy">
          <video class="lazy-video" data-src="<?= mu_e(mu_vid($e[0], $e[1])) ?>" muted loop playsinline preload="none" aria-hidden="true"></video>
          <span class="mu-exp-num"><?= sprintf('%02d', $i + 1) ?></span>
          <span class="mu-exp-play"><?= mu_play_svg() ?></span>
          <span class="mu-exp-cap"><b><?= mu_e($e[2]) ?></b><small><?= mu_e($e[3]) ?></small></span>
        </button>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== 12. BREATHER — vertical marquee */
case 'breather': ?>
  <section class="mu-dark mu-breather" id="student-life">
    <div class="mu-container mu-breather-wrap">
      <div class="mu-breather-left">
        <h2 class="mu-h2">What It's Really Like at <br><em class="mu-em">Career Buddy College<span class="mu-plus">+</span></em></h2>
        <p class="mu-lead">See what students, mentors and clinical partners experience every day — in labs, hospitals and on international tracks.</p>
        <a href="#campus" class="mu-btn mu-btn--white">Explore Campus Life <span class="mu-btn-arrow"><?= mu_arrow_svg() ?></span></a>
      </div>
      <div class="mu-breather-right" aria-hidden="true">
        <?php foreach ($muWall as $ci => $col): ?>
        <div class="mu-marquee-col<?= $ci ? ' is-down' : '' ?>">
          <div class="mu-marquee-track">
            <?php for ($rep = 0; $rep < 2; $rep++): foreach ($col as $j => $src): ?>
            <figure class="mu-breather-card<?= ($j + $ci) % 2 ? ' is-short' : '' ?>"><img src="<?= mu_e($src) ?>" alt="" loading="lazy"></figure>
            <?php endforeach; endfor; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== 13. ALUMNI COVERFLOW */
case 'alumni': ?>
  <section class="mu-sec mu-black mu-alumni" id="testimonials">
    <div class="mu-container">
      <div class="mu-alumni-head">
        <h2 class="mu-h2">Hear Straight from <br><em class="mu-em">Our Students</em></h2>
        <?= mu_nav('al', 'stories') ?>
      </div>
    </div>
    <div class="swiper mu-alumni-swiper">
      <div class="swiper-wrapper">
        <?php foreach ($muAlumni as $a): ?>
        <div class="swiper-slide mu-alumni-slide">
          <button type="button" class="mu-alumni-card" data-video-modal="<?= mu_e(mu_vid($a[0], $a[1])) ?>" aria-label="Watch story: <?= mu_e($a[2]) ?>">
            <img src="<?= mu_e(mu_thumb($a[0], 800)) ?>" alt="" loading="lazy">
            <span class="mu-alumni-watch"><?= mu_play_svg() ?> Watch Video</span>
            <span class="mu-alumni-name"><b>Student Name</b><?= mu_e($a[2]) ?></span>
          </button>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== 14. CONVOCATION */
case 'convocation': ?>
  
<?php break;

/* =========================================================== 15. CAMPUS HUB */
case 'campus': ?>
  <section class="mu-sec mu-dark mu-hub" id="campus">
    <div class="mu-container">
      <h2 class="mu-h2">Learn at a <br><em class="mu-em">NAAC Graded Partner Institution</em></h2>
      <div class="mu-hub-row">
        <div class="mu-hub-left">
          <h3>Your Degree Is Awarded by a <em>Recognised University</em></h3>
          <p>Modern infrastructure, skill labs and a full college experience in Dehradun — with Government-recognised qualifications valid for higher studies and employment.</p>
          <ul class="mu-hub-recog">
            <li><img src="assets/images/INC.png" alt="" width="36" height="36"> Indian Nursing Council</li>
            <li><span><svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path d="M12 3v18M7 7c0-2 10-2 10 0s-10 3-10 5 10 3 10 5-10 2-10 0" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg></span> Indian Association of Physiotherapists</li>
            <li><span><svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path d="M2 9l10-5 10 5-10 5L2 9Zm4 2.2V16c0 1.5 2.7 3 6 3s6-1.5 6-3v-4.8M22 9v6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span> Government Recognised Degree</li>
          </ul>
        </div>
        <div class="mu-hub-center">
          <div class="swiper campus-swiper">
            <div class="swiper-wrapper">
              <?php foreach (['7.webp', 'lab-2.jpg', '1.webp', 'lab-3.jpg', 'lab-4.jpg', '4.webp', 'lab-8.jpg', 'lab-6.jpg', 'lab-13.jpg', 'lab-15.jpg'] as $img): ?>
              <div class="swiper-slide"><img src="assets/images/<?= $img ?>" alt="Career Buddy College+ campus lab" loading="lazy"></div>
              <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <nav class="mu-hub-links" aria-label="Explore">
          <a href="#programs">Explore Programmes <span><?= mu_arrow_svg() ?></span></a>
          <a href="#admission">Admission Process <span><?= mu_arrow_svg() ?></span></a>
          <a href="book-session.php">Book a Counselling Session <span><?= mu_arrow_svg() ?></span></a>
          <a href="https://ai.careerbuddycollege.com/">Ask AI Buddy <span><?= mu_arrow_svg() ?></span></a>
        </nav>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== 15b. VISIT THE CAMPUS — directions, QR, phone mockups, India map */
case 'visit':
    $dirUrl = 'https://www.google.com/maps/dir/?api=1&destination=' . rawurlencode('Chakrata Road, Jhajra, Dehradun, Uttarakhand 248007'); ?>
  <section class="mu-visit" id="visit">
    <div class="mu-container mu-visit-wrap">
      <div class="mu-visit-left">
        <img class="mu-visit-logo" src="assets/images/cbc.logo.png" alt="Career Buddy College+" width="64" height="64" loading="lazy">
        <h2 class="mu-visit-title">Visit <span>Career Buddy College<b class="mu-plus">+</b></span> Dehradun</h2>
        <p class="mu-visit-text">Come and see Career Buddy College<span class="mu-plus">+</span> for yourself. Our campus on Chakrata Road, Jhajra sits in the green foothills of Dehradun and is easy to reach from Delhi, Chandigarh and every major city in India. Walk through our skill labs and classrooms, and meet our admission counsellors in person.</p>

        <h3 class="mu-visit-sub">Scan or click to get directions to our campus</h3>
        <div class="mu-visit-actions">
          <div class="mu-visit-btns">
            <a class="mu-store-btn" href="<?= mu_e($dirUrl) ?>" target="_blank" rel="noopener">
              <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"><path d="M12 22s7-6.2 7-12a7 7 0 1 0-14 0c0 5.8 7 12 7 12Z" fill="#e8e008"/><circle cx="12" cy="10" r="2.6" fill="#07111f"/></svg>
              <span><small>Get directions on</small>Google Maps</span>
            </a>
            <a class="mu-store-btn" href="tel:+917456000100">
              <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2" fill="#fff"/></svg>
              <span><small>Book a campus visit</small>+91 74560 00100</span>
            </a>
          </div>
          <span class="mu-visit-or" aria-hidden="true">Or</span>
          <a class="mu-visit-qr" href="<?= mu_e($dirUrl) ?>" target="_blank" rel="noopener" aria-label="QR code: directions to campus on Google Maps">
            <span id="muQr" data-qr="<?= mu_e($dirUrl) ?>"></span>
          </a>
        </div>

        <div class="mu-phones" aria-hidden="true">
          <div class="mu-phone mu-phone--light">
            <div class="mu-phone-notch"></div>
            <div class="mu-phone-bar"><span>9:41</span><i></i></div>
            <div class="mu-phone-head"><img src="assets/images/cbc.logo.png" alt=""><em>Plan your visit</em></div>
            <img class="mu-phone-img" src="assets/images/1.webp" alt="" loading="lazy">
            <p class="mu-phone-row"><i class="is-pin"></i>Chakrata Rd, Jhajra, Dehradun, Uttarakhand 248007</p>
            <p class="mu-phone-row"><i class="is-call"></i>+91 74560 00100</p>
            <span class="mu-phone-cta">Get Directions</span>
          </div>
          <div class="mu-phone mu-phone--dark">
            <div class="mu-phone-notch"></div>
            <div class="mu-phone-hero" style="background-image:url('assets/images/7.webp')">
              <span class="mu-phone-pill">Admissions Open 2027</span>
              <b>Welcome to <br>Career Buddy College+</b>
            </div>
            <div class="mu-phone-tiles"><span>Skill Labs</span><span>AR/VR</span><span>Global Tracks</span><span>Mentors</span></div>
          </div>
        </div>
      </div>

      <div class="mu-visit-right">
        <div class="mu-map">
          <div class="mu-map-canvas">
            <img class="mu-map-img" src="assets/images/india-map.svg" alt="Map of India with Uttarakhand highlighted and Dehradun marked" width="612" height="696" loading="lazy">
            <span class="mu-map-pin" style="left:33.6%;top:24.4%"><i></i></span>
            <span class="mu-map-label" style="left:33.6%;top:24.4%">Dehradun</span>
          </div>
          <div class="mu-map-card">
            <small>Our Campus</small>
            <b>Career Buddy College<span class="mu-plus">+</span></b>
            <p>Chakrata Rd, Jhajra, Dehradun, Uttarakhand 248007</p>
            <a href="<?= mu_e($dirUrl) ?>" target="_blank" rel="noopener">Get directions <?= mu_arrow_svg() ?></a>
          </div>
          <p class="mu-map-credit">Map: <a href="https://github.com/VictorCazanave/svg-maps" target="_blank" rel="noopener">Victor Cazanave</a>, CC BY 4.0</p>
        </div>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== 16. EXPLORE LINKS */
case 'journey': ?>
  <section class="mu-sec mu-light mu-journey">
    <div class="mu-container">
      <h2 class="mu-h2 mu-journey-head">Explore <em class="mu-em">Career Buddy College<span class="mu-plus">+</span></em><span class="mu-dots">...</span></h2>
      <div class="mu-journey-box">
        <a href="#programs" class="mu-journey-btn">Programmes <?= mu_arrow_svg() ?></a>
        <a href="#curriculum" class="mu-journey-btn">Global Tracks <?= mu_arrow_svg() ?></a>
        <a href="book-session.php" class="mu-journey-btn">Book a Visit <?= mu_arrow_svg() ?></a>
        <a href="#apply" class="mu-journey-btn">Apply Now <?= mu_arrow_svg() ?></a>
      </div>
    </div>
  </section>
<?php break;

/* =========================================================== MOBILE STICKY CTA */
case 'mobilecta': ?>
  <div class="mu-mcta" id="muMobileCta" aria-hidden="true">
    <a href="tel:+917456000100" class="mu-mcta-call" tabindex="-1" aria-label="Call admissions"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg></a>
    <a href="book-session.php" class="mu-mcta-ghost" tabindex="-1">Book a Session</a>
    <a href="#apply" class="mu-mcta-main" tabindex="-1">Apply Now</a>
  </div>
<?php break;

/* =========================================================== VIDEO POPUP */
case 'modal': ?>
  <div class="video-modal" id="videoModal" role="dialog" aria-modal="true" aria-label="Video player" hidden>
    <div class="video-modal-backdrop" data-close></div>
    <div class="video-modal-dialog">
      <button type="button" class="video-modal-close" data-close aria-label="Close video">&times;</button>
      <video class="video-modal-player" controls playsinline preload="none"></video>
    </div>
  </div>
<?php break;
    }
}
