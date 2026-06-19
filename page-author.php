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
        grid-template-columns: 6fr 6fr;
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
        aspect-ratio: 4/5;
        width: 100%;
        max-width: 100%;
    }

    .nancy-hero-image {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        object-position: center top;
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
                    <img class="nancy-hero-image" src="<?php echo esc_url(get_theme_mod('nancy_profile_image_v2', get_stylesheet_directory_uri() . '/images/nancy-profile-v2.jpg')); ?>" alt="Nancy Muchiri - Meet Nancy">
                </div>
                
                <!-- Social Connect Links -->
                <div class="nancy-social-list">
                    <!-- Facebook Link -->
                    <a class="nancy-social-link" href="<?php echo esc_url(get_theme_mod('nancy_facebook_url', 'https://www.facebook.com/everydaymindfulmoments/')); ?>" target="_blank" title="Facebook">
                        <svg viewBox="0 0 24 24"><path d="M9 8H7v3h2v9h4v-9h3.6l.4-3h-4V6.5C13 5.7 13.3 5 14.5 5H17V1.1c-.4-.1-1.9-.3-3.6-.3C9.8.8 9 3.2 9 6.2V8z"/></svg>
                    </a>
                    <!-- TikTok Link -->
                    <a class="nancy-social-link" href="<?php echo esc_url(get_theme_mod('nancy_tiktok_url', 'https://www.tiktok.com/@ayomifybooktok')); ?>" target="_blank" title="TikTok">
                        <svg viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.02 1.59 4.23.94 1.16 2.27 1.95 3.73 2.23v3.83c-1.39-.01-2.77-.38-3.99-1.09-.6-.35-1.14-.79-1.61-1.3-.08 2.94-.04 5.88-.04 8.81-.03 2.14-.66 4.3-1.91 6.01-1.57 2.18-4.14 3.59-6.85 3.79-2.96.22-6.07-.86-7.85-3.25-1.89-2.52-2.13-6.12-.66-8.87 1.34-2.55 4.14-4.22 7.07-4.24v3.91c-1.33.02-2.69.57-3.51 1.63-.99 1.25-.97 3.22.07 4.41.97 1.15 2.65 1.51 3.96.84.88-.44 1.45-1.32 1.56-2.3.06-2.51.02-5.02.04-7.53v-12.2z"/></svg>
                    </a>
                    <!-- Instagram Link -->
                    <a class="nancy-social-link" href="<?php echo esc_url(get_theme_mod('nancy_instagram_url', 'https://www.instagram.com/everydaymindfulmoments/')); ?>" target="_blank" title="Instagram">
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

            </div>
        </section>

    </div>
</div>

<?php get_footer(); ?>
