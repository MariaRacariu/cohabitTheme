<?php get_header(); ?>

<!-- ////////////////////  Intro Section Homepage  //////////////////// -->
<div class="heroContainer">
    <div>
        <h1 class="heroHeading"><?php echo get_theme_mod('cohabit-intro-heading'); ?></h1>
    </div>
    <div>
        <p class="heroText"><?php echo get_theme_mod('cohabit-intro-text'); ?></p>
    </div>
    <div class="heroButtonContainer">
        <a class="heroButton" href="<?php echo get_theme_mod('cohabit-intro-button-link'); ?>"><?php echo get_theme_mod('cohabit-intro-button-text'); ?></a>
    </div>  
</div>

<!-- ////////////////////  USPs Section Homepage  //////////////////// -->
<div class="uspsSliderContainer">
    <div class="uspsSlider">
        <div class="slide">
            <div class="imageContainer">
                <img src="<?php echo esc_url(get_theme_mod('cohabit-usps-slideOne-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-usps-slideOne-image')),'_wp_attachment_image_alt', true) ?>" class="sliderImage">
            </div>
            <h2><?php echo get_theme_mod('cohabit-usps-imageOne-heading'); ?></h2>
            <p><?php echo get_theme_mod('cohabit-usps-imageOne-text'); ?></p>
        </div>
        <div class="slide">
            <div class="imageContainer">
                <img src="<?php echo esc_url(get_theme_mod('cohabit-usps-slideTwo-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-usps-slideTwo-image')),'_wp_attachment_image_alt', true) ?>" class="sliderImage">
            </div>
            <h2><?php echo get_theme_mod('cohabit-usps-imageTwo-heading'); ?></h2>
            <p><?php echo get_theme_mod('cohabit-usps-imageTwo-text'); ?></p>
        </div>
        <div class="slide">
            <div class="imageContainer">
                <img src="<?php echo esc_url(get_theme_mod('cohabit-usps-slideThree-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-usps-slideThree-image')),'_wp_attachment_image_alt', true) ?>" class="sliderImage">
            </div>
            <h2><?php echo get_theme_mod('cohabit-usps-imageThree-heading'); ?></h2>
            <p><?php echo get_theme_mod('cohabit-usps-imageThree-text'); ?></p>
        </div>
    </div>
</div>

<!-- ////////////////////  Moving in Section Homepage  //////////////////// -->
<div class="movingInfoShadow">
    <div class="movingInfoContainer">
        <div class="movingInfoTextContainer">
            <div>
                <div>
                    <h2 class="movingInfoHeading"><?php echo get_theme_mod('cohabit-post-info-heading'); ?></h2>
                    <div class="movingInfoParagraph">
                        <?php echo wpautop(get_theme_mod('cohabit-post-info-text')); ?>
                    </div>
                </div>
                <div class="movingInfoButtonContainer">
                    <a href="<?php echo get_theme_mod('cohabit-post-info-button-link'); ?>" class="movingInfoButton"><?php echo get_theme_mod('cohabit-post-info-button-name'); ?></a>
                </div>
            </div>
        </div>
        <div class="movingInfoImageContainer">
            <img src="<?php echo esc_url(get_theme_mod('cohabit-post-info-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-usps-slideOne-image')),'_wp_attachment_image_alt', true) ?>">
        </div>
    </div>
</div>

<!-- ////////////////////  Customer Reviews Section Homepage  //////////////////// -->
<div class="customerReviewsContainer">
    <div>
        <h3 class="customerReviewsTitle"><?php echo get_theme_mod('cohabit-customer-reviews-heading'); ?></h3>
    </div>

    <div class="sliderContainer">
        <div class="reviewSlider">
        <?php
        $args = array(
            'post_type' => 'testimonial',
            'order' => 'ASC',
        );

        $customerReviews = new WP_Query($args);

        if($customerReviews->have_posts()){
            while($customerReviews->have_posts()){
                $customerReviews->the_post();
                ?>
                    <div class="sliderCard">
                        <div class="userInfoContainer">
                            <div>
                                <?php
                                if(has_post_thumbnail()){
                                    the_post_thumbnail('medium', array( 'class' => 'customerReviewsImage' ));
                                }else{
                                    echo '<img src ="' . get_theme_file_uri('assets/images/unknown.svg').'" class="customerReviewsImage">';
                                }
                                
                                ?>
                            </div>
                            <div>
                                <h4 class="customerReviewName"><?php the_title(); ?></h4>
                                <?php 
                                $location_field = get_post_custom();
                                            
                                if(isset($location_field['Location'])){
                                    echo "<p class='customerReviewLocation'>" . $location_field['Location'][0] . "</p>";
                                }
                                            
                                ?>
                            </div>
                        </div>
                        <div class="starsRatingContainer">
                            <?php 
                            $starRating_field = get_post_custom();
                                        
                            if(isset($starRating_field['Stars'])){
                                if($starRating_field['Stars'][0] == 5){
                                    echo '<img src ="' . get_theme_file_uri('assets/images/5star.png').'" class="starsRating">';
                                    
                                }else{
                                    echo "<p class='starsRating'>" . $starRating_field['Stars'][0] . "</p>";
                                }
                            }
                                        
                            ?>
                        </div>
                        <div class="reviewText">
                            <?php the_content(); ?>
                        </div>
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