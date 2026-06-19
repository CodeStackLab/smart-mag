<?php
/**
 * Template Name: The Second Bloom Book
 */
get_header(); 
?>

<!-- Import Premium Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    /* Custom premium namespace style system for Book Page */
    .nancy-author-page {
        --nancy-bg: #FAF6F0;
        --nancy-card-bg: #FFFFFF;
        --nancy-accent: #C87A53;
        --nancy-accent-hover: #A05936;
        --nancy-sage: #5A7065;
        --nancy-text: #2F2E2C;
        --nancy-muted: #6B6661;
        --nancy-border: #EFEBE5;
        --nancy-font-serif: 'Playfair Display', Georgia, serif;
        --nancy-font-sans: 'Inter', -apple-system, sans-serif;
        
        font-family: var(--nancy-font-sans);
        color: var(--nancy-text);
        background-color: var(--nancy-bg);
        line-height: 1.8;
        padding: 20px 0;
    }

    .nancy-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    .nancy-section {
        margin-bottom: 80px;
    }

    /* Buttons */
    .nancy-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 16px 36px;
        background: var(--nancy-accent);
        color: #fff !important;
        font-weight: 600;
        border-radius: 30px;
        text-decoration: none !important;
        transition: all 0.3s ease;
        box-shadow: 0 10px 25px rgba(200, 122, 83, 0.15);
        border: none;
        cursor: pointer;
    }

    .nancy-btn:hover {
        background: var(--nancy-accent-hover);
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(200, 122, 83, 0.25);
    }

    /* Book Section */
    .nancy-book-section {
        display: grid;
        grid-template-columns: 0.8fr 1.2fr;
        gap: 50px;
        align-items: start;
        background: var(--nancy-card-bg);
        border-radius: 24px;
        padding: 60px;
        border: 1px solid var(--nancy-border);
    }

    .nancy-book-left {
        position: -webkit-sticky;
        position: sticky;
        top: 40px;
        text-align: center;
    }

    .nancy-book-cover {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 5px 15px 35px rgba(0, 0, 0, 0.15);
        transition: transform 0.4s ease;
        max-height: 480px;
    }

    .nancy-book-cover:hover {
        transform: translateY(-5px) rotate(-1deg);
    }

    .nancy-book-details h2 {
        font-family: var(--nancy-font-serif);
        font-size: 2.4rem;
        margin-top: 0;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .nancy-book-tagline {
        font-size: 1.15rem;
        color: var(--nancy-accent);
        font-weight: 600;
        margin-bottom: 25px;
    }

    .nancy-book-details h3 {
        font-family: var(--nancy-font-serif);
        font-size: 1.45rem;
        margin-top: 30px;
        margin-bottom: 15px;
        color: var(--nancy-text);
        border-bottom: 1px solid var(--nancy-border);
        padding-bottom: 5px;
    }

    .nancy-book-details p {
        font-size: 1.05rem;
        margin-bottom: 20px;
        text-align: justify;
    }

    /* Mission Box */
    .nancy-mission-box {
        background: var(--nancy-bg);
        border-left: 5px solid var(--nancy-accent);
        padding: 40px;
        border-radius: 0 20px 20px 0;
        margin: 50px 0;
    }

    .nancy-mission-box h3 {
        font-family: var(--nancy-font-serif);
        font-size: 1.6rem;
        margin-top: 0;
        margin-bottom: 15px;
        color: var(--nancy-accent);
    }

    .nancy-mission-box p {
        font-size: 1.1rem;
        margin-bottom: 15px;
        line-height: 1.7;
    }

    .nancy-mission-box p:last-child {
        margin-bottom: 0;
    }

    /* Letter Card */
    .nancy-letter-card {
        background: var(--nancy-card-bg);
        border: 1px dashed var(--nancy-accent);
        border-radius: 20px;
        padding: 50px;
        max-width: 800px;
        margin: 80px auto;
        position: relative;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.01);
    }

    .nancy-letter-card h3 {
        font-family: var(--nancy-font-serif);
        font-size: 1.8rem;
        margin-top: 0;
        margin-bottom: 25px;
        text-align: center;
        color: var(--nancy-accent);
    }

    .nancy-letter-card p {
        font-size: 1.1rem;
        margin-bottom: 15px;
    }

    .nancy-signature {
        font-family: var(--nancy-font-serif);
        font-style: italic;
        font-size: 1.6rem;
        text-align: right;
        margin-top: 35px;
        font-weight: 700;
        color: var(--nancy-accent);
    }

    /* Video Player */
    .nancy-video-section {
        text-align: center;
        background: var(--nancy-card-bg);
        border-radius: 24px;
        padding: 60px;
        border: 1px solid var(--nancy-border);
    }

    .nancy-video-section h2 {
        font-family: var(--nancy-font-serif);
        font-size: 2.2rem;
        margin-top: 0;
        margin-bottom: 10px;
    }

    .nancy-video-subtitle {
        font-size: 1.1rem;
        color: var(--nancy-muted);
        margin-bottom: 30px;
    }

    .nancy-video-wrapper {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        background: #000;
    }

    .nancy-video-wrapper video {
        width: 100%;
        display: block;
    }

    .nancy-video-play-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(200, 122, 83, 0.85);
        color: #fff;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
    }

    .nancy-video-play-overlay:hover {
        background: rgba(160, 89, 54, 0.95);
        transform: translate(-50%, -50%) scale(1.1);
    }

    .nancy-video-play-overlay svg {
        width: 35px;
        height: 35px;
        fill: currentColor;
        margin-left: 5px;
    }

    .nancy-video-play-overlay.hidden {
        opacity: 0;
        pointer-events: none;
    }

    .nancy-video-controls {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 25px;
        flex-wrap: wrap;
    }

    .nancy-vid-btn {
        padding: 10px 24px;
        border-radius: 25px;
        border: 1px solid var(--nancy-border);
        background: var(--nancy-card-bg);
        color: var(--nancy-text);
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .nancy-vid-btn:hover {
        background: var(--nancy-accent);
        color: #fff;
        border-color: var(--nancy-accent);
    }

    /* Testimonials */
    .nancy-reviews-section h2 {
        font-family: var(--nancy-font-serif);
        font-size: 2.4rem;
        text-align: center;
        margin-top: 0;
        margin-bottom: 40px;
    }

    .nancy-reviews-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 30px;
    }

    .nancy-review-card {
        background: var(--nancy-card-bg);
        border-radius: 20px;
        padding: 35px;
        border: 1px solid var(--nancy-border);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        transition: all 0.3s ease;
    }

    .nancy-review-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(212, 140, 112, 0.06);
    }

    .nancy-stars {
        color: #F5A623;
        font-size: 1.2rem;
        margin-bottom: 15px;
    }

    .nancy-review-card blockquote {
        font-size: 1.05rem;
        color: var(--nancy-muted);
        font-style: italic;
        margin: 0 0 20px 0;
        line-height: 1.6;
        border: none;
        padding: 0;
    }

    .nancy-review-card cite {
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--nancy-text);
        font-style: normal;
        display: block;
    }

    /* Mobile Specific Layout Classes */
    .nancy-mobile-title {
        display: none;
    }
    
    .nancy-desktop-title {
        display: block;
    }

    /* Responsive Queries */
    @media (max-width: 991px) {
        .nancy-mobile-title {
            display: block;
            margin-bottom: 25px;
            text-align: center;
        }
        
        .nancy-desktop-title {
            display: none;
        }

        .nancy-book-section {
            grid-template-columns: 1fr;
            padding: 40px;
            gap: 40px;
        }
        
        .nancy-book-left {
            position: static;
            text-align: center;
        }

        .nancy-book-cover-wrap {
            max-width: 300px;
            margin: 0 auto 10px auto;
        }

        .nancy-mission-box {
            border-radius: 20px;
            border-left: none;
            border-top: 5px solid var(--nancy-accent);
            padding: 30px;
            margin: 40px 0;
        }
    }

    @media (max-width: 576px) {
        .nancy-container {
            padding: 30px 15px;
        }

        .nancy-book-section {
            padding: 30px 20px;
        }
        
        .nancy-letter-card {
            padding: 30px 20px;
            margin: 50px auto;
        }
        
        .nancy-video-section {
            padding: 30px 20px;
        }

        .nancy-book-details h2 {
            font-size: 2rem;
        }

        .nancy-book-cover-wrap {
            max-width: 250px;
        }
    }
</style>

<div class="nancy-author-page">
    <div class="nancy-container">

        <!-- BOOK SHOWCASE SECTION -->
        <section id="the-second-bloom" class="nancy-section nancy-book-section">
            
            <!-- Mobile Title (Visible only on max-width 991px) -->
            <div class="nancy-mobile-title">
                <h2>The Second Bloom</h2>
                <div class="nancy-book-tagline">Helping Women Reclaim Their Power, Purpose, and Joy Through Midlife and Perimenopause</div>
            </div>

            <div class="nancy-book-left">
                <div class="nancy-book-cover-wrap">
                    <img class="nancy-book-cover" src="<?php echo esc_url(get_theme_mod('nancy_book_cover', get_stylesheet_directory_uri() . '/images/book-cover.jpg')); ?>" alt="The Second Bloom - Book Cover by Nancy Muchiri">
                </div>
            </div>
            <div class="nancy-book-details">
                <div class="nancy-desktop-title">
                    <h2>The Second Bloom</h2>
                    <div class="nancy-book-tagline">Helping Women Reclaim Their Power, Purpose, and Joy Through Midlife and Perimenopause</div>
                </div>
                
                <h3>Welcome</h3>
                <p>There comes a moment in a woman's life when everything begins to change.</p>
                <p>The body changes. The children grow up. Relationships evolve. Careers shift. Priorities become clearer.</p>
                <p>And somewhere in the midst of it all, many women find themselves asking a question they never expected:</p>
                <p><strong>Who am I now?</strong></p>
                <p>Midlife is not an ending. It is a turning point—a powerful invitation to rediscover who you are beyond the roles, responsibilities, and expectations that have shaped your life.</p>
                <p>It is the season where wisdom deepens, priorities become clearer, and women finally give themselves permission to become the person they were always meant to be.</p>
                <p>That is the heart behind my work.</p>
                <p>I am passionate about helping women navigate perimenopause, prepare for menopause, embrace healthy aging, reclaim their confidence, and create lives filled with purpose, wellness, and joy.</p>

                <h3>My Story</h3>
                <p>Like many women entering midlife, I began noticing changes that I wasn't fully prepared for.</p>
                <p>The changes were subtle at first—shifts in energy, emotions, sleep, and the way I experienced everyday life. As I learned more, I discovered that I was entering perimenopause, the natural transition leading to menopause.</p>
                <p>What surprised me most was not just the physical changes, but how little many women know about this stage of life until they are living it.</p>
                <p>I found myself searching for answers, seeking information, and having conversations with other women who were experiencing similar questions and concerns.</p>
                <p>The more I learned, the more I realized that countless women are navigating this transition without the support, education, and open dialogue they deserve.</p>
                <p>That realization became the inspiration for The Second Bloom.</p>
                <p>I may not have reached menopause yet, but I am walking this journey alongside millions of women who are navigating the changes of midlife, preparing for what's ahead, and discovering new possibilities for growth, wellness, and self-discovery.</p>
                <p>This book is written from a place of curiosity, research, compassion, and a deep desire to help women feel informed, empowered, and less alone.</p>

                <h3>Why I Wrote The Second Bloom</h3>
                <p>I wrote this book for every woman who has ever felt invisible.</p>
                <p>For every woman who has questioned her worth because her body was changing.</p>
                <p>For every woman who felt unprepared for menopause and overwhelmed by the physical and emotional shifts it brought.</p>
                <p>For every woman who has spent years caring for everyone else and suddenly realized it was time to care for herself.</p>
                <p>I wanted women to know they are not alone.</p>
                <p>I wanted them to understand that midlife is not a season of decline but a season of rediscovery.</p>

                <h3>The Second Bloom Philosophy</h3>
                <p>I believe every woman deserves a second bloom.</p>
                <p>Not because she has lost herself.</p>
                <p>But because she is evolving.</p>
                <p>The second bloom is about embracing change rather than fearing it.</p>
                <p>It is about choosing growth instead of limitation.</p>
                <p>It is about recognizing that your wisdom, resilience, and life experiences have prepared you for a future that can be even more meaningful than your past.</p>
                <p>The second bloom is not about becoming someone new.</p>
                <p>It is about becoming more fully yourself.</p>

                <div style="margin-top: 35px; display: flex; gap: 15px; flex-wrap: wrap;">
                    <a class="nancy-btn" href="https://www.amazon.com/Second-Bloom-Midlife-Identity-Yourself-ebook/dp/B0GZKWPYG2/ref=sr_1_1?cvid=1U5QJ5MYOO0FC&dib=eyJ2IjoiMSJ9.Qv6-slpKtRj2Rq9qm9jDOQ.VGyMrvF9iTYYtaD7hS61ARX9hEjYuRa_ZIhQkehX6Ow&dib_tag=se&keywords=second+bloom+nancy+muchiri&qid=1778422929&sprefix=second+bloom+nancy+muchiri%2Caps%2C138&sr=8-1#averageCustomerReviewsAnchor" target="_blank">
                        Buy on Amazon ↗
                    </a>
                    <a class="nancy-btn" href="https://staging-325b-nanmuchiri-ugebv.wpcomstaging.com/wp-content/uploads/2026/06/STEADY-THE-SECOND-BLOOM-FORMATTED-Paperback-2-2-PUBLISHED-LAST-COPY-PDF-SAVED-HUNE-2026-1-2.docx" target="_blank" download>
                        Download PDF ⬇
                    </a>
                </div>
            </div>
        </section>

        <!-- CORE MISSION SECTION -->
        <section class="nancy-section nancy-mission-box">
            <h3>My Mission</h3>
            <p>My mission is to change the conversation around menopause and midlife.</p>
            <p>For too long, women have navigated these transitions in silence.</p>
            <p>Women deserve education.</p>
            <p>Women deserve support.</p>
            <p>Women deserve honest conversations about what happens during perimenopause, menopause, and beyond.</p>
            <p>Most importantly, women deserve to know that this stage of life does not diminish their value—it can reveal their strength.</p>
        </section>

        <!-- VIDEO SECTION -->
        <section class="nancy-section nancy-video-section">
            <h2>The Second Bloom Story</h2>
            <div class="nancy-video-subtitle">Watch the inspiring trailer about reclaiming midlife, wellness, and self-love</div>
            
            <div class="nancy-video-wrapper" id="nancyVideoWrap">
                <video id="nancyBookVideo" playsinline preload="metadata" controls>
                    <source src="https://videos.files.wordpress.com/McJnkqel/second-bloom.mov" type="video/quicktime" />
                    <source src="https://videos.files.wordpress.com/McJnkqel/second-bloom.mov" type="video/mp4" />
                    Your browser does not support video playback.
                </video>
                <div class="nancy-video-play-overlay" id="nancyPlayOverlay">
                    <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                </div>
            </div>
            
            <div class="nancy-video-controls" style="margin-top: 25px;">
                <a class="nancy-vid-btn" href="https://videos.files.wordpress.com/McJnkqel/second-bloom.mov" download="second-bloom.mov">⬇ Download Video</a>
            </div>
        </section>

        <!-- PERSONAL MESSAGE LETTER -->
        <section class="nancy-section nancy-letter-card">
            <h3>A Personal Message to You</h3>
            <p>If you are navigating perimenopause, questioning your next steps, or wondering whether your best years are behind you, I want you to hear this:</p>
            <p><strong>You are not fading.</strong></p>
            <p><strong>You are not losing yourself.</strong></p>
            <p><strong>You are not running out of time.</strong></p>
            <p>You are entering a season of wisdom, clarity, courage, and possibility.</p>
            <p>Your story is still being written.</p>
            <p>Your purpose still matters.</p>
            <p>Your dreams are still valid.</p>
            <p>And your second bloom may be the most beautiful chapter yet.</p>
            <p>Welcome to the journey.</p>
            
            <div class="nancy-signature">With love,<br>Nancy Muchiri</div>
        </section>

        <!-- TESTIMONIALS SECTION -->
        <section class="nancy-section nancy-reviews-section">
            <h2>What Readers Are Saying</h2>
            <div class="nancy-reviews-grid">
                <div class="nancy-review-card">
                    <div class="nancy-stars">★★★★★</div>
                    <blockquote>"Wise, warm, and deeply empowering. Absolutely worth every page."</blockquote>
                    <cite>— Flo</cite>
                </div>
                <div class="nancy-review-card">
                    <div class="nancy-stars">★★★★★</div>
                    <blockquote>"A beautiful book with an even better point of view."</blockquote>
                    <cite>— Suzie</cite>
                </div>
                <div class="nancy-review-card">
                    <div class="nancy-stars">★★★★★</div>
                    <blockquote>"Inspirational… the perfect Mother's Day treat."</blockquote>
                    <cite>— George</cite>
                </div>
                <div class="nancy-review-card">
                    <div class="nancy-stars">★★★★★</div>
                    <blockquote>"Emotional, honest, and incredibly relatable. Every woman navigating change should read this."</blockquote>
                    <cite>— Kindle Customer</cite>
                </div>
            </div>
        </section>

    </div>
</div>

<script>
    // Video player functionality
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('nancyBookVideo');
        const overlay = document.getElementById('nancyPlayOverlay');

        if (video && overlay) {
            overlay.addEventListener('click', function() {
                video.play().then(() => {
                    overlay.classList.add('hidden');
                }).catch(error => {
                    console.error('Video play failed:', error);
                });
            });

            // Keep overlay hidden while playing, show when paused/ended
            video.addEventListener('play', () => {
                overlay.classList.add('hidden');
            });
            video.addEventListener('pause', () => {
                overlay.classList.remove('hidden');
            });
            video.addEventListener('ended', () => {
                overlay.classList.remove('hidden');
            });
        }
    });
</script>

<?php get_footer(); ?>
