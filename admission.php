<style>
    /* Force white background for admission section */
    .admsn-wrapper {
        background: #ffffff !important;
        color: #111827 !important;
        padding: 40px 20px;
    }

    .admsn-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .admsn-section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .admsn-section-label {
        display: inline-block;
        font-size: 0.75rem;
        font-weight: 800;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: #7c3aed;
        margin-bottom: 8px;
    }

    .admsn-section-title {
        font-family: 'Sora', sans-serif;
        font-size: 2.5rem;
        font-weight: 800;
        color: #111827 !important;
        margin-bottom: 12px;
    }

    .admsn-section-subtitle {
        color: #6b7280;
        font-size: 0.95rem;
    }

    .admsn-hero-card {
        background: linear-gradient(135deg, #f3e8ff 0%, #e0f2fe 100%);
        border-radius: 24px;
        padding: 32px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 32px;
        margin-bottom: 32px;
        border: 1px solid #e5e7eb;
    }

    .admsn-hero-left h2 {
        font-family: 'Sora', sans-serif;
        font-size: 1.8rem;
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 20px;
    }

    .admsn-hero-left p {
        color: #475569;
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 24px;
    }

    .admsn-zapt-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: rgba(124, 58, 237, 0.1);
        border: 1px solid rgba(124, 58, 237, 0.3);
        padding: 8px 16px;
        border-radius: 999px;
        font-size: 0.8rem;
        font-weight: 700;
        color: #7c3aed;
        margin-bottom: 20px;
    }

    .admsn-zapt-badge span {
        display: inline-block;
        width: 4px;
        height: 4px;
        background: #7c3aed;
        border-radius: 50%;
    }

    .admsn-hero-metrics {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }

    .admsn-metric-item {
        background: #1e293b;
        color: #ffffff;
        padding: 16px;
        border-radius: 12px;
    }

    .admsn-metric-item strong {
        display: block;
        font-size: 1.25rem;
        font-weight: 800;
        color: #22d3ee;
    }

    .admsn-metric-item span {
        font-size: 0.75rem;
        color: #9ca3af;
    }

    .admsn-hero-right {
        background: #0f172a;
        border-radius: 16px;
        padding: 20px;
    }

    .admsn-hero-right h4 {
        color: #ffffff;
        font-size: 0.95rem;
        font-weight: 700;
        margin-bottom: 16px;
    }

    .admsn-feature-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .admsn-feature-item {
        display: flex;
        gap: 12px;
        align-items: flex-start;
        background: rgba(255, 255, 255, 0.05);
        padding: 12px 16px;
        border-radius: 12px;
    }

    .admsn-feature-icon {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        color: #111827;
        flex-shrink: 0;
    }

    .admsn-feature-icon.admsn-purple { background: #a78bfa; }
    .admsn-feature-icon.admsn-cyan { background: #22d3ee; }
    .admsn-feature-icon.admsn-pink { background: #ec4899; }
    .admsn-feature-icon.admsn-green { background: #4ade80; }

    .admsn-feature-text strong {
        display: block;
        color: #ffffff;
        font-size: 0.9rem;
        margin-bottom: 2px;
    }

    .admsn-feature-text span {
        color: #9ca3af;
        font-size: 0.75rem;
    }

    .admsn-steps-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .admsn-step-card {
        background: #f3f4f6;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        padding: 20px;
        display: flex;
        gap: 16px;
        transition: all 0.3s ease;
    }

    .admsn-step-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .admsn-step-icon {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        color: #ffffff;
        flex-shrink: 0;
        font-size: 1.1rem;
    }

    .admsn-step-icon.admsn-one { background: linear-gradient(135deg, #a78bfa, #7c3aed); }
    .admsn-step-icon.admsn-two { background: linear-gradient(135deg, #22d3ee, #0ea5e9); }
    .admsn-step-icon.admsn-three { background: linear-gradient(135deg, #4ade80, #22c55e); }
    .admsn-step-icon.admsn-four { background: linear-gradient(135deg, #f97316, #ea580c); }

    .admsn-step-content h4 {
        font-size: 1rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 4px;
    }

    .admsn-step-content p {
        color: #475569;
        font-size: 0.85rem;
        margin-bottom: 6px;
    }

    .admsn-step-content span {
        font-size: 0.75rem;
        font-weight: 700;
    }

    .admsn-step-content span.admsn-purple { color: #7c3aed; }
    .admsn-step-content span.admsn-cyan { color: #0ea5e9; }
    .admsn-step-content span.admsn-green { color: #22c55e; }
    .admsn-step-content span.admsn-orange { color: #ea580c; }

    @media (max-width: 768px) {
        .admsn-hero-card {
            grid-template-columns: 1fr;
        }

        .admsn-steps-grid {
            grid-template-columns: 1fr;
        }

        .admsn-section-title {
            font-size: 2rem;
        }
    }
</style>

<div class="admsn-wrapper" id="admission">
    <div class="admsn-container">
        <div class="admsn-section-header">
            <div class="admsn-section-label">Your Path to <span class="logo-text" style="color: #e8e008;">Career Buddy College</span><sup class="logo-sup">+<sup></div>
            <h1 class="admsn-section-title">Admission Process</h1>
            <p class="admsn-section-subtitle">A simple 4-step journey from application to enrollment.</p>
        </div>

        <div class="admsn-hero-card">
            <div class="admsn-hero-left">
                <div class="admsn-zapt-badge">
                   CBC <span></span> CBC Aptitude Test
                </div>
                <h2>We Don't Care About Your NEET Rank</h2>
                <p>The CBCAT  isn't just another entrance test. It's designed to identify students with the aptitude and mindset for Healthcare Studies.</p>
                <div class="admsn-hero-metrics">
                    <div class="admsn-metric-item">
                        <strong>60 questions</strong>
                        <span>Test Details</span>
                    </div>
                    <div class="admsn-metric-item">
                        <strong>Online</strong>
                        <span>From Home</span>
                    </div>
                </div>
                 <p>
    <strong>Note:</strong> Students who have secured <strong>75% or above</strong> in their qualifying academic examination are eligible for <strong>direct admission</strong>. Students scoring below 75% are required to appear for the <strong>CBCAT</strong>. Final admission for these candidates will be based on their CBCAT performance followed by a personal interview.
</p> 
            </div>

            <div class="admsn-hero-right">
                <h4>CBCAT Test</h4>
                <div class="admsn-feature-list">
                    <div class="admsn-feature-item">
                        <div class="admsn-feature-icon admsn-purple">1</div>
                        <div class="admsn-feature-text">
                            <strong>Interest Mapping</strong>
                            <span>Identify subjects and career areas you enjoy most</span>
                        </div>
                    </div>
                    <div class="admsn-feature-item">
                        <div class="admsn-feature-icon admsn-cyan">2</div>
                        <div class="admsn-feature-text">
                            <strong>Aptitude Analysis</strong>
                            <span>Assess natural strengths and learning abilities</span>
                        </div>
                    </div>
                    <div class="admsn-feature-item">
                        <div class="admsn-feature-icon admsn-pink">3</div>
                        <div class="admsn-feature-text">
                            <strong>Personality Insights</strong>
                            <span>Understand your behavioral traits and preferences</span>
                        </div>
                    </div>
                    <div class="admsn-feature-item">
                        <div class="admsn-feature-icon admsn-green">4</div>
                        <div class="admsn-feature-text">
                            <strong>Career Recommendations</strong>
                            <span>Explore suitable academic streams and career paths</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="admsn-steps-grid">
            <div class="admsn-step-card">
                <div class="admsn-step-icon admsn-one">1</div>
                <div class="admsn-step-content">
                    <h4>Apply Online</h4>
                    <p>Fill out the application form with your details. Takes less than 5 minutes.</p>
                    <span class="admsn-purple">Applications Open</span>
                </div>
            </div>
            <div class="admsn-step-card">
                <div class="admsn-step-icon admsn-two">2</div>
                <div class="admsn-step-content">
                    <h4>Take the CBCAT Test</h4>
                    <p>Appear for our online Healthcare aptitude test from the comfort of your home.</p>
                    <span class="admsn-cyan">60 Minutes Online</span>
                </div>
            </div>
            <div class="admsn-step-card">
                <div class="admsn-step-icon admsn-three">3</div>
                <div class="admsn-step-content">
                    <h4>Personal Interview</h4>
                    <p>A conversation to understand your goals, passion for Healthcare, and fit for Career Buddy College.</p>
                    <span class="admsn-green">15-20 Minutes</span>
                </div>
            </div>
            <div class="admsn-step-card">
                <div class="admsn-step-icon admsn-four">4</div>
                <div class="admsn-step-content">
                    <h4>Get Your Offer</h4>
                    <p>Receive your admission offer. Confirm your seat!</p>
                    <span class="admsn-orange">Within 7 Days</span>
                </div>
            </div>
        </div>
    </div>
  
</div>

