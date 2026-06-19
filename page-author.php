<?php
/**
 * Template Name: Author Profile / Meet Nancy
 */
get_header(); 
?>

<!-- Import Premium Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    /* Custom premium namespace style system for Author Page */
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

    /* Hero Layout - Large Left Image, Scrollable Right Biography */
    .nancy-hero {
        display: grid;
        grid-template-columns: 4.5fr 7.5fr;
        gap: 60px;
        align-items: start;
        background: var(--nancy-card-bg);
        border-radius: 24px;
        padding: 60px;
        box-shadow: 0 15px 45px rgba(212, 140, 112, 0.05);
        border: 1px solid var(--nancy-border);
    }

    .nancy-hero-left {
        position: -webkit-sticky;
        position: sticky;
        top: 40px;
    }

    .nancy-hero-image-wrap {
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .nancy-hero-image {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s ease;
    }

    .nancy-hero-image:hover {
        transform: scale(1.02);
    }

    .nancy-hero-details h1 {
        font-family: var(--nancy-font-serif);
        font-size: 3rem;
        font-weight: 700;
        color: var(--nancy-text);
        margin-top: 0;
        margin-bottom: 10px;
        line-height: 1.2;
    }

    .nancy-hero-subtitle {
        font-size: 1.05rem;
        font-weight: 600;
        color: var(--nancy-accent);
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 30px;
        border-bottom: 2px solid var(--nancy-bg);
        padding-bottom: 15px;
    }

    .nancy-hero-details p {
        font-size: 1.1rem;
        color: var(--nancy-text);
        margin-bottom: 20px;
        text-align: justify;
    }

    /* Social Icons Styles */
    .nancy-social-list {
        display: flex;
        gap: 15px;
        margin-bottom: 35px;
        justify-content: center;
    }

    .nancy-social-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: var(--nancy-bg);
        color: var(--nancy-accent);
        transition: all 0.3s ease;
        border: 1px solid var(--nancy-border);
        text-decoration: none !important;
    }

    .nancy-social-link:hover {
        background: var(--nancy-accent);
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(200, 122, 83, 0.2);
    }

    .nancy-social-link svg {
        width: 20px;
        height: 20px;
        fill: currentColor;
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

    /* Loves Sidebar (inside Hero Left) */
    .nancy-bio-sidebar {
        background: var(--nancy-bg);
        border-radius: 20px;
        padding: 30px;
        border: 1px solid var(--nancy-border);
        margin-top: 30px;
        text-align: left;
    }

    .nancy-bio-sidebar h3 {
        font-family: var(--nancy-font-serif);
        font-size: 1.4rem;
        margin-top: 0;
        margin-bottom: 20px;
        color: var(--nancy-accent);
    }

    .nancy-loves-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nancy-loves-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 12px;
        font-size: 0.98rem;
        color: var(--nancy-text);
        line-height: 1.6;
    }

    .nancy-loves-list li::before {
        content: "❀";
        position: absolute;
        left: 0;
        color: var(--nancy-accent);
        font-size: 1.1rem;
        top: -1px;
    }

    /* Quote Banner */
    .nancy-quote-banner {
        background: linear-gradient(135deg, var(--nancy-accent) 0%, var(--nancy-accent-hover) 100%);
        color: #fff;
        border-radius: 20px;
        padding: 40px;
        text-align: center;
        box-shadow: 0 15px 35px rgba(200, 122, 83, 0.15);
        margin: 40px 0;
    }

    .nancy-quote-banner blockquote {
        font-family: var(--nancy-font-serif);
        font-size: 1.6rem;
        font-style: italic;
        margin: 0;
        line-height: 1.6;
        border: none;
        padding: 0;
        color: #fff;
    }

    /* Book Section */
    .nancy-book-section {
        display: grid;
        grid-template-columns: 0.8fr 1.2fr;
        gap: 50px;
        align-items: center;
        background: var(--nancy-card-bg);
        border-radius: 24px;
        padding: 60px;
        border: 1px solid var(--nancy-border);
    }

    .nancy-book-cover-wrap {
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
        margin: 0;
        line-height: 1.7;
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
        margin-bottom: 20px;
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

    /* Responsive Queries */
    @media (max-width: 991px) {
        .nancy-hero {
            grid-template-columns: 1fr;
            padding: 40px;
            gap: 40px;
            text-align: center;
        }
        
        .nancy-hero-left {
            position: static;
        }
        
        .nancy-hero-image-wrap {
            max-width: 450px;
            margin: 0 auto 30px auto;
        }
        
        .nancy-social-list {
            justify-content: center;
        }
        
        .nancy-book-section {
            grid-template-columns: 1fr;
            padding: 40px;
            gap: 40px;
        }
        
        .nancy-book-cover-wrap {
            max-width: 260px;
            margin: 0 auto;
        }
    }

    @media (max-width: 576px) {
        .nancy-container {
            padding: 40px 15px;
        }
        
        .nancy-hero-details h1 {
            font-size: 2.2rem;
        }
        
        .nancy-quote-banner {
            padding: 30px 20px;
        }
        
        .nancy-quote-banner blockquote {
            font-size: 1.35rem;
        }
        
        .nancy-letter-card {
            padding: 30px 20px;
        }
        
        .nancy-video-section {
            padding: 30px 20px;
        }
        
        .nancy-bio-sidebar {
            padding: 30px 20px;
        }
    }
</style>

<div class="nancy-author-page">
    <div class="nancy-container">
        
        <!-- HERO & BIOGRAPHY COMBINED SECTION -->
        <section class="nancy-section nancy-hero">
            <!-- Left Sticky Sidebar containing Large Portrait Photo & Loves -->
            <div class="nancy-hero-left">
                <div class="nancy-hero-image-wrap">
                    <img class="nancy-hero-image" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/nancy-profile.jpg'); ?>" alt="Nancy Muchiri - Meet Nancy">
                </div>
                
                <!-- Social Connect Links -->
                <div class="nancy-social-list">
                    <!-- Facebook Link -->
                    <a class="nancy-social-link" href="https://www.facebook.com/everydaymindfulmoments/" target="_blank" title="Facebook">
                        <svg viewBox="0 0 24 24"><path d="M9 8H7v3h2v9h4v-9h3.6l.4-3h-4V6.5C13 5.7 13.3 5 14.5 5H17V1.1c-.4-.1-1.9-.3-3.6-.3C9.8.8 9 3.2 9 6.2V8z"/></svg>
                    </a>
                    <!-- TikTok Link -->
                    <a class="nancy-social-link" href="https://www.tiktok.com/@ayomifybooktok" target="_blank" title="TikTok">
                        <svg viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.02 1.59 4.23.94 1.16 2.27 1.95 3.73 2.23v3.83c-1.39-.01-2.77-.38-3.99-1.09-.6-.35-1.14-.79-1.61-1.3-.08 2.94-.04 5.88-.04 8.81-.03 2.14-.66 4.3-1.91 6.01-1.57 2.18-4.14 3.59-6.85 3.79-2.96.22-6.07-.86-7.85-3.25-1.89-2.52-2.13-6.12-.66-8.87 1.34-2.55 4.14-4.22 7.07-4.24v3.91c-1.33.02-2.69.57-3.51 1.63-.99 1.25-.97 3.22.07 4.41.97 1.15 2.65 1.51 3.96.84.88-.44 1.45-1.32 1.56-2.3.06-2.51.02-5.02.04-7.53v-12.2z"/></svg>
                    </a>
                    <!-- Instagram Link -->
                    <a class="nancy-social-link" href="https://www.instagram.com/everydaymindfulmoments/" target="_blank" title="Instagram">
                        <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                    </a>
                    <!-- Blog Home Icon -->
                    <a class="nancy-social-link" href="<?php echo esc_url(home_url('/')); ?>" title="Everyday Mindful Moments Blog">
                        <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </a>
                </div>

                <!-- A Few Things Nancy Loves -->
                <div class="nancy-bio-sidebar">
                    <h3>A Few Things Nancy Loves</h3>
                    <ul class="nancy-loves-list">
                        <li>Spending quality time with family and friends</li>
                        <li>Celebrating life's milestones and special moments</li>
                        <li>Traveling and experiencing different cultures</li>
                        <li>Encouraging and uplifting others</li>
                        <li>Lifelong learning and personal growth</li>
                        <li>Creating meaningful connections and memories</li>
                    </ul>
                    <p style="font-size: 0.92rem; font-style: italic; margin-top: 20px; color: var(--nancy-muted); line-height: 1.5; border-top: 1px dashed var(--nancy-border); padding-top: 15px;">
                        Nancy believes that life's richest blessings are found in the relationships we nurture, the lessons we learn, and the courage we find to keep growing through every season.
                    </p>
                </div>
            </div>

            <!-- Right Detail Biography -->
            <div class="nancy-hero-details">
                <h1>Meet Nancy Muchiri</h1>
                <div class="nancy-hero-subtitle">Author • Entrepreneur • Speaker • Advocate for Personal Growth</div>
                
                <p>Nancy Muchiri is an author, entrepreneur, and lifelong learner whose journey spans continents, cultures, and transformative life experiences.</p>
                <p>Born and raised in Kenya, Nancy pursued her higher education at St. Mary's University in Canada before continuing her academic and professional journey in the United States. She later earned her Bachelor's Degree from Rutgers Business School, combining her passion for education with a strong foundation in business and leadership.</p>
                <p>Throughout her life, Nancy has embraced change with courage and determination. From pursuing higher education abroad to balancing motherhood, career aspirations, and personal growth, she has learned that life's greatest transformations often emerge from its most challenging seasons.</p>
                <p>As a mother, Nancy treasures family above all else. She finds her greatest joy in spending time with her children, family, and friends, celebrating life's milestones, creating lasting memories, and nurturing meaningful relationships. Her experiences as a mother, daughter, friend, and professional have shaped the wisdom and perspective she shares through her writing.</p>
                <p>Nancy's debut book, <em>The Second Bloom: Midlife, Love, Identity, and the Courage to Choose Yourself Again</em>, was inspired by her own journey of self-discovery, resilience, and reinvention. Through heartfelt storytelling and honest reflection, she encourages women to embrace change, rediscover their identity, and recognize that it is never too late to pursue a life filled with purpose, joy, and authenticity.</p>
                <p>Today, Nancy is passionate about inspiring women to navigate life's transitions with confidence, resilience, and hope. Her message is simple but powerful:</p>
                
                <!-- Quote Banner inside Biography -->
                <div class="nancy-quote-banner">
                    <blockquote>"Your story is still being written. Every season offers a new opportunity to bloom."</blockquote>
                </div>

                <p>Whether through her writing, speaking engagements, or community involvement, Nancy's mission is to remind others that growth has no age limit, dreams never expire, and some of life's most beautiful chapters begin when we have the courage to start again.</p>

                <div style="margin-top: 35px; text-align: center;">
                    <a class="nancy-btn" href="#the-second-bloom">Discover Nancy's Book ↓</a>
                </div>
            </div>
        </section>

        <!-- BOOK SHOWCASE SECTION -->
        <section id="the-second-bloom" class="nancy-section nancy-book-section">
            <div class="nancy-book-cover-wrap">
                <img class="nancy-book-cover" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/book-cover.jpg'); ?>" alt="The Second Bloom - Book Cover by Nancy Muchiri">
            </div>
            <div class="nancy-book-details">
                <h2>The Second Bloom</h2>
                <div class="nancy-book-tagline">Helping Women Reclaim Their Power, Purpose, and Joy Through Midlife and Perimenopause</div>
                
                <h3>Welcome</h3>
                <p>There comes a moment in a woman's life when everything begins to change. The body changes. The children grow up. Relationships evolve. Careers shift. Priorities become clearer. And somewhere in the midst of it all, many women find themselves asking a question they never expected: <strong>Who am I now?</strong></p>
                <p>Midlife is not an ending. It is a turning point—a powerful invitation to rediscover who you are beyond the roles, responsibilities, and expectations that have shaped your life. It is the season where wisdom deepens, priorities become clearer, and women finally give themselves permission to become the person they were always meant to be.</p>
                <p>That is the heart behind my work. I am passionate about helping women navigate perimenopause, prepare for menopause, embrace healthy aging, reclaim their confidence, and create lives filled with purpose, wellness, and joy.</p>

                <h3>Why I Wrote The Second Bloom</h3>
                <p>I wrote this book for every woman who has ever felt invisible. For every woman who has questioned her worth because her body was changing. For every woman who felt unprepared for menopause and overwhelmed by the physical and emotional shifts it brought. For every woman who has spent years caring for everyone else and suddenly realized it was time to care for herself. I wanted women to know they are not alone. I wanted them to understand that midlife is not a season of decline but a season of rediscovery.</p>

                <h3>The Second Bloom Philosophy</h3>
                <p>I believe every woman deserves a second bloom. Not because she has lost herself, but because she is evolving. The second bloom is about embracing change rather than fearing it. It is about choosing growth instead of limitation. It is about recognizing that your wisdom, resilience, and life experiences have prepared you for a future that can be even more meaningful than your past. The second bloom is not about becoming someone new—it is about becoming more fully yourself.</p>

                <div style="margin-top: 35px;">
                    <a class="nancy-btn" href="https://www.amazon.com/Second-Bloom-Midlife-Identity-Yourself-ebook/dp/B0GZKWPYG2/ref=sr_1_1?cvid=1U5QJ5MYOO0FC&dib=eyJ2IjoiMSJ9.Qv6-slpKtRj2Rq9qm9jDOQ.VGyMrvF9iTYYtaD7hS61ARX9hEjYuRa_ZIhQkehX6Ow&dib_tag=se&keywords=second+bloom+nancy+muchiri&qid=1778422929&sprefix=second+bloom+nancy+muchiri%2Caps%2C138&sr=8-1#averageCustomerReviewsAnchor" target="_blank">
                        Buy on Amazon ↗
                    </a>
                </div>
            </div>
        </section>

        <!-- CORE MISSION SECTION -->
        <section class="nancy-section nancy-mission-box">
            <h3>My Mission</h3>
            <p>My mission is to change the conversation around menopause and midlife. For too long, women have navigated these transitions in silence. Women deserve education. Women deserve support. Women deserve honest conversations about what happens during perimenopause, menopause, and beyond. Most importantly, women deserve to know that this stage of life does not diminish their value—it can reveal their strength.</p>
        </section>

        <!-- VIDEO SECTION -->
        <section class="nancy-section nancy-video-section">
            <h2>The Second Bloom Story</h2>
            <div class="nancy-video-subtitle">Watch the inspiring trailer about reclaiming midlife, wellness, and self-love</div>
            
            <div class="nancy-video-wrapper">
                <video id="nancyBookVideo" playsinline preload="metadata" poster="https://i0.wp.com/everydaymindfulmoments.blog/wp-content/uploads/2026/06/The-second-bloom-new-page.jpg?resize=768%2C511&ssl=1">
                    <source src="https://videos.files.wordpress.com/McJnkqel/second-bloom.mov" type="video/quicktime" />
                    <source src="https://videos.files.wordpress.com/McJnkqel/second-bloom.mov" type="video/mp4" />
                    Your browser does not support video playback.
                </video>
            </div>
            
            <div class="nancy-video-controls">
                <button id="nancyPlayBtn" class="nancy-vid-btn" type="button">▶ Play Video</button>
                <button id="nancyMuteBtn" class="nancy-vid-btn" type="button">🔊 Mute</button>
                <a class="nancy-vid-btn" href="https://videos.files.wordpress.com/McJnkqel/second-bloom.mov" download="second-bloom.mov">⬇ Download Video</a>
            </div>
        </section>

        <!-- PERSONAL MESSAGE LETTER -->
        <section class="nancy-section nancy-letter-card">
            <h3>A Personal Message to You</h3>
            <p>If you are navigating perimenopause, questioning your next steps, or wondering whether your best years are behind you, I want you to hear this:</p>
            <p><strong>You are not fading. You are not losing yourself. You are not running out of time.</strong></p>
            <p>You are entering a season of wisdom, clarity, courage, and possibility. Your story is still being written. Your purpose still matters. Your dreams are still valid. And your second bloom may be the most beautiful chapter yet.</p>
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
        const playBtn = document.getElementById('nancyPlayBtn');
        const muteBtn = document.getElementById('nancyMuteBtn');

        if (video && playBtn) {
            playBtn.addEventListener('click', function() {
                if (video.paused || video.ended) {
                    video.play().then(() => {
                        playBtn.textContent = '⏸ Pause Video';
                    }).catch(error => {
                        console.error('Video play failed:', error);
                    });
                } else {
                    video.pause();
                    playBtn.textContent = '▶ Play Video';
                }
            });

            // Keep button in sync with native video controls
            video.addEventListener('play', () => {
                playBtn.textContent = '⏸ Pause Video';
            });
            video.addEventListener('pause', () => {
                playBtn.textContent = '▶ Play Video';
            });
            video.addEventListener('ended', () => {
                playBtn.textContent = '▶ Play Video';
            });
        }

        if (video && muteBtn) {
            muteBtn.addEventListener('click', function() {
                video.muted = !video.muted;
                if (video.muted) {
                    muteBtn.textContent = '🔇 Unmute';
                } else {
                    muteBtn.textContent = '🔊 Mute';
                }
            });
        }
    });
</script>

<?php get_footer(); ?>
