<?php get_header(); ?>

<!-- ////////////////////  Intro Section Collaborations  //////////////////// -->
<div class="introContainer">
    <div>
        <h1 class="introHeading"><?php echo get_theme_mod('cohabit-collaborations-intro-title'); ?></h1>
    </div>
    <div>
        <p class="introText"><?php echo get_theme_mod('cohabit-collaborations-intro-text'); ?></p>
    </div>
    <div class="introButtonContainer">
        <a href="<?php echo get_theme_mod('cohabit-collaborations-button-link'); ?>" class="introButton"><?php echo get_theme_mod('cohabit-collaborations-button-name'); ?></a>
    </div>
</div>

<!-- ////////////////////  USPs Section Collaborations  //////////////////// -->
<div class="sliderContainer">
    <div class="collaborationsSlider">
        <div>
            <div class="imageContainer">
                <img src="<?php echo esc_url(get_theme_mod('cohabit-usp-1-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-usp-1-image')),'_wp_attachment_image_alt', true) ?>" class="sliderImage">
            </div>
            <h2><?php echo get_theme_mod('cohabit-usp-1-title'); ?></h2>
            <p><?php echo get_theme_mod('cohabit-usp-1-text'); ?></p>
        </div>
        <div>
            <div class="imageContainer">
                <img src="<?php echo esc_url(get_theme_mod('cohabit-usp-2-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-usp-2-image')),'_wp_attachment_image_alt', true) ?>" class="sliderImage">
            </div>
            <h2><?php echo get_theme_mod('cohabit-usp-2-title'); ?></h2>
            <p><?php echo get_theme_mod('cohabit-usp-2-text'); ?></p>
        </div>
        <div>
            <div class="imageContainer">
                <img src="<?php echo esc_url(get_theme_mod('cohabit-usp-3-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-usp-3-image')),'_wp_attachment_image_alt', true) ?>" class="sliderImage">
            </div>
            <h2><?php echo get_theme_mod('cohabit-usp-3-title'); ?></h2>
            <p><?php echo get_theme_mod('cohabit-usp-3-text'); ?></p>
        </div>
    </div>
</div>

<!-- ////////////////////  Company Review Section Collaborations  //////////////////// -->
<div class="quoteContainer">
    <div class="companyReviewContainer">
        <div>
            <img src="<?php echo esc_url(get_theme_mod('cohabit-company-review-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-company-review-image')),'_wp_attachment_image_alt', true) ?>" class="reviewImage">
        </div>
        <div>
            <div class="companyQuoteContainer">
                <p class="companyQuote"><?php echo get_theme_mod('cohabit-company-review-quote'); ?></p>
            </div>
           <div class="reviewInfoContainer">
                <p><?php echo get_theme_mod('cohabit-company-review-position'); ?></p>
           </div>
           <div class="companyLogoContainer">
                <img src="<?php echo esc_url(get_theme_mod('cohabit-company-review-image-logo')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-company-review-image-logo')),'_wp_attachment_image_alt', true) ?>">
           </div>
        </div>
    </div>
</div>

<!-- //////////////////// Cohabit News Slider Section Collaborations  //////////////////// -->
<div>
    <div class="newsContainer">
        <div>
            <h2 class="newsSectionHeading"><?php echo get_theme_mod('cohabit-spotlight-title'); ?></h2>
        </div>
        <div class="cohabitNewsSlider">
        <?php
        $args = array(
                'post_type' => 'cohabitnews',
                'order' => 'DEC',
        );

        $news = new WP_Query($args);

        if($news -> have_posts()){
            while($news -> have_posts()){
                $news -> the_post();
                ?>
                <div class="newsSlideCard">
                    <div class="newsImageContainer"><?php the_post_thumbnail(); ?></div>
                    <div class="newsCardHeading"><h3><?php the_title(); ?></h3></div>
                    <div class="newsCardDate"><?php the_date(); ?></div>
                    <div class="newsContentContainer"><?php the_content(); ?></div>
                </div>
                <?php
            }
        }else{
            echo "<p>No posts found</p>";
        }
        ?>
        </div>
    </div>
</div>

<?php include get_theme_file_path('/inc/footer-icons.php'); ?>
<?php get_footer(); ?>