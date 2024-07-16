<?php get_header(); ?>

<!-- ////////////////////  Intro Section About  //////////////////// -->
<div class="introContainer" id="drivingCircularity">
    <div class="introWrapper">
        <div class="leftWrapper">
            <div class="textIntroWrapper">
                <h1 class="introHeading"><?php echo get_theme_mod('cohabit-intro-post-title'); ?></h1>
                <?php echo wpautop(get_theme_mod('cohabit-intro-post-text')); ?>
                <div class="introLinkButtonWrapper">
                    <a href="<?php echo get_theme_mod('cohabit-intro-post-button-link'); ?>" class="linkButton" target="_blank"><?php echo get_theme_mod('cohabit-intro-post-button-title'); ?></a>
                </div>
            </div>
            <div class="faqAllContainer">
                <div class="faqSectionButton">
                    <div class="faqHeadingContainer">
                        <h2><?php echo get_theme_mod('cohabit-intro-post-dropdownOne-title'); ?></h2>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="faqQAContainer">
                        <div>
                            <?php echo wpautop(get_theme_mod('cohabit-intro-post-dropdownOne-content')); ?>
                        </div>
                    </div>
                </div>
                <div class="faqSectionButton">
                    <div class="faqHeadingContainer">
                        <h2><?php echo get_theme_mod('cohabit-intro-post-dropdownTwo-title'); ?></h2>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="faqQAContainer">
                        <div>
                            <?php echo wpautop(get_theme_mod('cohabit-intro-post-dropdownTwo-content')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="imageContainer">
            <img src="<?php echo esc_url(get_theme_mod('cohabit-intro-post-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-intro-post-image')),'_wp_attachment_image_alt', true) ?>" class="aboutIntroImage">
        </div>
    </div>
</div>


<!-- ////////////////////  Sustainability Report Section About  //////////////////// -->
<div class="reportContainer" id="sustainabilityReport">
    <div class="reportWrapper">
        <div class="reportImageContainer">
            <img src="<?php echo esc_url(get_theme_mod('cohabit-report-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-report-image')),'_wp_attachment_image_alt', true) ?>">
        </div>
        <div class="reportTextContainer">
            <h2><?php echo get_theme_mod('cohabit-report-title'); ?></h2>
            <?php echo wpautop(get_theme_mod('cohabit-report-content')); ?>            
            <a href="<?php echo get_theme_mod('cohabit-report-button-link'); ?>" class="tealButton"><?php echo get_theme_mod('cohabit-report-button-title'); ?></a>
            <div class="historyOfReportsContainer">
                <h3><?php echo get_theme_mod('cohabit-report-history-title'); ?></h3>

                <?php if(get_theme_mod('cohabit-report-slotOne-display') == "Yes"){ ?>
                    <a href="<?php echo get_theme_mod('cohabit-report-slotOne-link'); ?>"><?php echo get_theme_mod('cohabit-report-slotOne-title'); ?></a>
                <?php } ?>
                
                <?php if(get_theme_mod('cohabit-report-slotTwo-display') == "Yes"){ ?>
                    <a href="<?php echo get_theme_mod('cohabit-report-slotTwo-link'); ?>"><?php echo get_theme_mod('cohabit-report-slotTwo-title'); ?></a>
                <?php } ?>

                <?php if(get_theme_mod('cohabit-report-slotThree-display') == "Yes"){ ?>
                    <a href="<?php echo get_theme_mod('cohabit-report-slotThree-link'); ?>"><?php echo get_theme_mod('cohabit-report-slotThree-title'); ?></a>
                <?php } ?>

                <?php if(get_theme_mod('cohabit-report-slotFour-display') == "Yes"){ ?>
                    <a href="<?php echo get_theme_mod('cohabit-report-slotFour-link'); ?>"><?php echo get_theme_mod('cohabit-report-slotFour-title'); ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- ////////////////////  Time Line Slider Section About  //////////////////// -->
<div class="timelineSliderContainer">
    <div>
        <div class="timelineSliderHeading">
            <h2><?php echo get_theme_mod('cohabit-timeline-slider-title'); ?></h2>
        </div>
        <div class="timeline-slider">
            <?php 
            $args = array(
                'post_type' => 'timeline',
                'order' => 'DEC',
            );

            $timeline = new WP_Query($args);

            if($timeline -> have_posts()){
                while($timeline -> have_posts()){
                    $timeline -> the_post();
                    ?>
                        <div>
                            <div class="timelineImageContainer">
                                <div>
                                    <?php the_post_thumbnail('large', array('class' => 'testImage')); ?>
                                </div>
                            </div>
                            <div class="timelineInfoContainer">
                                <div>
                                    <div>
                                        <?php
                                         $date_field = get_post_custom();
                                            
                                         if(isset($date_field['date'])){
                                             echo "<p>" . $date_field['date'][0] . "</p>";
                                         }
                                        ?>
                                    </div>
                                    <div>
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    <?php
                }
            }
            ?>
        </div>
        <!-- Progress bar -->
        <div class="progressBarContainer">
            <div class="slider-progress">
                <span></span>
            </div>
        </div>
     </div>
</div>

<!-- ////////////////////  Our Story Section About  //////////////////// -->
<div class="ourStoryContainer" id="ourStory">
    <div>
        <h2 class="ourStoryHeading"><?php echo get_theme_mod('cohabit-story-title'); ?></h2>
    </div>
    <div class="ourStoryWrapper">
        <div class="ourStoryImageContainer">
            <img src="<?php echo esc_url(get_theme_mod('cohabit-story-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-story-image')),'_wp_attachment_image_alt', true) ?>">
            <div class="textUnderImageContainer">
                <?php echo wpautop(get_theme_mod('cohabit-story-image-caption')); ?>
            </div>
        </div>
        <div class="ourStoryTextContainer">
            <?php echo wpautop(get_theme_mod('cohabit-story-content')); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>