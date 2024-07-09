<?php get_header(); ?>

<!-- ////////////////////  Hero Section How cohabit works  //////////////////// -->
<div class="introContainer">
    <h1 class="introHeading"><?php echo get_theme_mod('cohabit-hcw-hero-heading'); ?></h1>
    <img src="<?php echo esc_url(get_theme_mod('cohabit-hcw-hero-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-hcw-hero-image')),'_wp_attachment_image_alt', true) ?>" class="introImage">
</div>

<!-- ////////////////////  Steps Section How cohabit works  //////////////////// -->
<div class="stepsContainer">
    <!-- Step One -->
    <div class="stepContainer">
        <div class="imageContainer">
            <img src="<?php echo esc_url(get_theme_mod('cohabit-hcw-stepOne-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-hcw-stepOne-image')),'_wp_attachment_image_alt', true) ?>" class="stepImage">
        </div>
        <div class="stepTextContainer">
            <h2><?php echo get_theme_mod('cohabit-hcw-stepOne-heading'); ?></h2>
            <?php echo wpautop(get_theme_mod('cohabit-hcw-stepOne-text')); ?>
        </div>
    </div>
    <!-- Step Two -->
    <div class="stepContainer">
        <div class="imageContainer">
            <img src="<?php echo esc_url(get_theme_mod('cohabit-hcw-stepTwo-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-hcw-stepTwo-image')),'_wp_attachment_image_alt', true) ?>" class="stepImage">
        </div>
        <div class="stepTextContainer">
            <h2><?php echo get_theme_mod('cohabit-hcw-stepTwo-heading'); ?></h2>
            <?php echo wpautop(get_theme_mod('cohabit-hcw-stepTwo-text')); ?>
        </div>
    </div>
    <!-- Step Three -->
    <div class="stepContainer">
        <div class="imageContainer">
            <img src="<?php echo esc_url(get_theme_mod('cohabit-hcw-stepThree-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-hcw-stepThree-image')),'_wp_attachment_image_alt', true) ?>" class="stepImage">
        </div>
        <div class="stepTextContainer">
            <h2><?php echo get_theme_mod('cohabit-hcw-stepThree-heading'); ?></h2>
            <?php echo wpautop(get_theme_mod('cohabit-hcw-stepThree-text')); ?>
        </div>
    </div>
    <!-- Step Four -->
    <div class="stepContainer">
        <div class="imageContainer">
            <img src="<?php echo esc_url(get_theme_mod('cohabit-hcw-stepFour-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-hcw-stepFour-image')),'_wp_attachment_image_alt', true) ?>" class="stepImage">
        </div>
        <div class="stepTextContainer">
            <h2><?php echo get_theme_mod('cohabit-hcw-stepFour-heading'); ?></h2>
            <?php echo wpautop(get_theme_mod('cohabit-hcw-stepFour-text')); ?>
        </div>
    </div>
    <!-- Info Step 5 -->
    <div class="lastStepContainer">
        <div>
            <h2><?php echo get_theme_mod('cohabit-hcw-stepFive-heading'); ?></h2>
            <?php echo wpautop(get_theme_mod('cohabit-hcw-stepFive-text')); ?>
        </div>
    </div>
</div>

<!-- ////////////////////  FAQ Section How cohabit works  //////////////////// -->
<div class="faqAllContainer" id="faq">
    <h2 class="faqTitle"><?php echo get_theme_mod('cohabit-faq-heading'); ?></h2>

    <?php
       
        $args = array(
            'post_type' => 'faq',
            'order' => 'ASC',
            'tax_query' => array(
                'taxonomy' => 'category',
                'field'    => 'slug', 
            ),
        );

        $faq = new WP_Query($args);

        if($faq -> have_posts()){
            while($faq -> have_posts()){
                $faq -> the_post();
                
                ?>
                <div class="faqSectionButton">
                    <div class="faqHeadingContainer">
                        <h3><?php the_title();?></h3>
                        <i class="fa-solid fa-caret-down fa-2x"></i>
                    </div>
                    <div class="faqQAContainer">
                        <?php the_content(); ?>
                    </div>
                </div>
               
                <?php
            }
        }

       
    ?>
</div>

<?php get_footer(); ?>