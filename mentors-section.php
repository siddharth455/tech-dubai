<?php
/**
 * mentors-section.php
 * Homepage "Meet Your Mentors" teaser.
 * Include this in index.php, e.g. right after the "Why Choose Us" section
 * and before the Admission Process section:
 *
 *   <?php require 'mentors-section.php'; ?>
 *
 * Also add to the navbar / anchor pills:
 *   <a href="#mentors" class="nav-link">Mentors</a>
 *   <a href="#mentors" class="anchor-pill">Mentors</a>
 */

// Featured mentors on the homepage teaser (subset — full roster lives in mentors.php).
// track values: dubai | china | singapore | japan-germany  (drives card color + links to mentors.php filter)
$featuredMentors = [
    [
        'name'        => 'Dr. Anjali Menon',
        'designation' => 'RN, MSN — Lead Clinical Mentor, Dubai Track',
        'photo'       => 'assets/images/mentors/anjali-menon.jpg',
        'specialty'   => '12+ yrs in UAE hospital systems & patient care standards',
        'track'       => 'dubai',
    ],
    [
        'name'        => 'Wei Zhang',
        'designation' => 'PT, DPT — AI & Rehabilitation Mentor, China Track',
        'photo'       => 'assets/images/mentors/wei-zhang.jpg',
        'specialty'   => 'Specialist in AI-assisted diagnosis & robotic rehab',
        'track'       => 'china',
    ],
    [
        'name'        => 'Sarah Lim',
        'designation' => 'RN, BSN — Digital Health Mentor, Singapore Track',
        'photo'       => 'assets/images/mentors/sarah-lim.jpg',
        'specialty'   => 'Expert in EMR systems & preventive care programs',
        'track'       => 'singapore',
    ],
    [
        'name'        => 'Lukas Hoffmann',
        'designation' => 'Career Coach — Germany/Japan Placement Track',
        'photo'       => 'assets/images/mentors/lukas-hoffmann.jpg',
        'specialty'   => '200+ students placed in German & Japanese hospitals',
        'track'       => 'japan-germany',
    ],
];

$trackLabel = [
    'dubai'         => 'Dubai Track',
    'china'         => 'China Track',
    'singapore'     => 'Singapore Track',
    'japan-germany' => 'Germany/Japan Track',
];
?>

<style>
.mnt-teaser { padding: 72px 0; background: #f8fafc; }
.mnt-teaser .section-header { margin-bottom: 44px; }
.mnt-teaser-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}
.mnt-teaser-card {
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 18px;
    padding: 24px 20px;
    text-align: center;
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
}
.mnt-teaser-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 18px 34px rgba(15, 23, 42, 0.08);
}
.mnt-teaser-photo {
    width: 84px; height: 84px; border-radius: 50%;
    margin: 0 auto 16px; object-fit: cover;
    border: 3px solid #f1f5f9;
}
.mnt-teaser-card[data-track="dubai"]         { border-top: 3px solid #a78bfa; }
.mnt-teaser-card[data-track="china"]         { border-top: 3px solid #22d3ee; }
.mnt-teaser-card[data-track="singapore"]     { border-top: 3px solid #4ade80; }
.mnt-teaser-card[data-track="japan-germany"] { border-top: 3px solid #fb923c; }
.mnt-teaser-name { font-family: 'Sora', sans-serif; font-size: 1.05rem; font-weight: 700; color: #111827; margin: 0 0 4px; }
.mnt-teaser-role { font-size: 0.78rem; color: #6b7280; margin: 0 0 10px; line-height: 1.4; min-height: 34px; }
.mnt-teaser-spec { font-size: 0.75rem; color: #475569; margin: 0 0 14px; line-height: 1.4; }
.mnt-teaser-track-tag {
    display: inline-block; font-size: 0.68rem; font-weight: 700; letter-spacing: 0.06em;
    text-transform: uppercase; color: #7c3aed; background: rgba(124,58,237,0.08);
    padding: 4px 10px; border-radius: 999px; margin-bottom: 14px;
}
.mnt-teaser-cta-row { text-align: center; margin-top: 40px; }

@media (max-width: 991.98px) {
    .mnt-teaser-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 575.98px) {
    .mnt-teaser-grid { grid-template-columns: 1fr; }
}
</style>

<section class="mnt-teaser" id="mentors">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">Learn From The Best</span>
            <h2 class="section-title" style="color:#000;">Meet Your <span class="gradient-text">Mentors</span></h2>
            <p class="section-desc text-center">
                Real practitioners from Dubai, China, Singapore, Germany & Japan — guiding you 1:1, not just teaching from a textbook.
            </p>
        </div>

        <div class="mnt-teaser-grid">
            <?php foreach ($featuredMentors as $mentor): ?>
                <div class="mnt-teaser-card" data-track="<?= htmlspecialchars($mentor['track']) ?>">
                    <img
                        class="mnt-teaser-photo"
                        src="<?= htmlspecialchars($mentor['photo']) ?>"
                        alt="<?= htmlspecialchars($mentor['name']) ?>"
                        loading="lazy"
                        width="84" height="84"
                    />
                    <span class="mnt-teaser-track-tag"><?= htmlspecialchars($trackLabel[$mentor['track']] ?? '') ?></span>
                    <h3 class="mnt-teaser-name"><?= htmlspecialchars($mentor['name']) ?></h3>
                    <p class="mnt-teaser-role"><?= htmlspecialchars($mentor['designation']) ?></p>
                    <p class="mnt-teaser-spec"><?= htmlspecialchars($mentor['specialty']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="mnt-teaser-cta-row">
            <a href="mentors.php#booking" class="btn btn-primary magnetic-btn">Book a Free 1:1 Session</a>
            <a href="mentors.php" class="btn btn-ghost magnetic-btn" style="margin-left:12px;">View All Mentors</a>
        </div>
    </div>
</section>