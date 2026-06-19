<?php
/**
 * Template Name: Author Profile / Meet Nancy
 */
get_header(); 
?>

<style>
    .author-profile-container {
        max-width: 1100px;
        margin: 60px auto;
        padding: 0 20px;
        font-family: 'Inter', sans-serif;
    }
    .author-hero {
        display: flex;
        align-items: center;
        gap: 40px;
        background: #fdfbf9;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        flex-wrap: wrap;
    }
    .author-image {
        flex: 1;
        min-width: 300px;
        border-radius: 15px;
        overflow: hidden;
    }
    .author-image img {
        width: 100%;
        height: auto;
        display: block;
    }
    .author-details {
        flex: 2;
        min-width: 300px;
    }
    .author-details h1 {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 20px;
        font-weight: 700;
    }
    .author-details p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 30px;
    }
    .author-social-links {
        display: flex;
        gap: 15px;
        margin-bottom: 40px;
    }
    .author-social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        background: #333;
        color: #fff;
        border-radius: 50%;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .author-social-links a:hover {
        background: #e64a19;
        transform: translateY(-3px);
    }
    .book-section {
        margin-top: 60px;
        text-align: center;
        padding: 50px;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    .book-section h2 {
        font-size: 2.2rem;
        margin-bottom: 20px;
        color: #333;
    }
    .book-section .book-content {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
        flex-wrap: wrap;
        margin-top: 40px;
    }
    .book-cover {
        max-width: 300px;
        border-radius: 10px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }
    .btn {
        display: inline-block;
        padding: 15px 35px;
        background: #e64a19;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        border-radius: 30px;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }
    .btn:hover {
        background: #bf360c;
        color: #fff;
    }
    .video-container {
        margin-top: 60px;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    .video-container iframe {
        width: 100%;
        height: 500px;
        border: none;
    }
    @media (max-width: 768px) {
        .author-hero {
            padding: 30px;
            text-align: center;
        }
        .author-social-links {
            justify-content: center;
        }
        .book-section {
            padding: 30px;
        }
        .video-container iframe {
            height: 300px;
        }
    }
</style>

<div class="author-profile-container">
    
    <div class="author-hero">
        <div class="author-image">
            <!-- Using a high quality placeholder until actual image from kit is linked -->
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=800&q=80" alt="Nancy - Everyday Mindful Moments">
        </div>
        <div class="author-details">
            <h1>Meet Nancy</h1>
            <p>Nancy is the creator of <strong>Everyday Mindful Moments</strong>, a lifestyle and wellness platform focused on mindfulness and intentional living. She enjoys traveling, creating inspirational content, and spending time with family and friends. Her mission is to inspire others to bloom in every stage of their lives.</p>
            
            <div class="author-social-links">
                <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://www.tiktok.com/@ayomifybooktok/video/7638167898967608583" target="_blank" title="TikTok"><i class="fa fa-tiktok"></i>🎵</a>
                <a href="https://everydaymindfulmoments.blog/" title="Blog"><i class="fa fa-globe"></i>🌐</a>
            </div>
            
            <a href="#the-second-bloom" class="btn">Discover My Book</a>
        </div>
    </div>

    <div id="the-second-bloom" class="book-section">
        <h2>The Second Bloom</h2>
        <p>A journey of reinvention, midlife discovery, and embracing the beauty of starting anew.</p>
        
        <div class="book-content">
            <!-- Placeholder for book cover from the kit -->
            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&w=600&q=80" alt="The Second Bloom Book Cover" class="book-cover">
            
            <div>
                <a href="https://everydaymindfulmoments.blog/the-second-bloom/" target="_blank" class="btn">Learn More & Watch Video</a>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
