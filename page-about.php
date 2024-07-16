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
        <div class="your-class">
            <div>
                <div class="timelineImageContainer">
                    <div>
                        <img src="<?php echo get_theme_file_uri( 'assets/images/test/image1.jpg' ); ?>" alt="" class="testImage">
                    </div>
                </div>
                <div class="timelineInfoContainer">
                    <div>
                        <div>
                            <p>July 2022</p>
                        </div>
                        <div>
                            <h3>Pilot Launch</h3>
                            <p>Cohabit officially launches its pilot in Malmö.</p>
                        </div>
                    </div>
                </div>    
            </div>
            <div>
                <div class="timelineImageContainer">
                    <div>
                        <img src="<?php echo get_theme_file_uri( 'assets/images/test/image2.jpg' ); ?>" alt="" class="testImage">
                    </div>
                </div>
                <div class="timelineInfoContainer">
                    <div>
                        <div>
                            <p>August 2022</p>
                        </div>
                        <div>
                            <h3>First Customer Arrive</h3>
                            <p>Cohabit delivers furniture bundles to its first customer in Malmö.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div> 
                <div class="timelineImageContainer">
                    <div>                
                        <img src="<?php echo get_theme_file_uri( 'assets/images/test/image3.jpg' ); ?>" alt="" class="testImage">
                    </div>
                </div>
                <div class="timelineInfoContainer">
                    <div>
                        <div>
                            <p>May 2023</p>
                        </div>
                        <div>
                            <h3>Venture Cup Finals</h3>
                            <p>Cohabit becomes a finalist in Venture Cup, Sweden's largest startup competition.</p>
                        </div>
                    </div>
                </div>       
            </div>
            <div> 
                <div class="timelineImageContainer">
                    <div>                
                        <img src="<?php echo get_theme_file_uri( 'assets/images/test/image3.jpg' ); ?>" alt="" class="testImage">
                    </div>
                </div>
                <div class="timelineInfoContainer">
                    <div>
                        <div>
                            <p>August 2023</p>
                        </div>
                        <div>
                            <h3>Lund Expansion</h3>
                            <p>Cohabit expands its operation and delivers to customers in Lund.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>   
                <div class="timelineImageContainer">
                    <div>
                        <img src="<?php echo get_theme_file_uri( 'assets/images/test/image3.jpg' ); ?>" alt="" class="testImage">
                    </div>
                </div>
                <div class="timelineInfoContainer">
                    <div>
                        <div>
                            <p>November 2023</p>
                        </div>
                        <div>
                            <h3>Vinnova Fund</h3>
                            <p>Cohabit receives the Innovative Impact Fund from Vinnova.</p>
                        </div>
                    </div>
                </div>
            </div>
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
        <h2 class="ourStoryHeading">Our Story</h2>
    </div>
    <div class="ourStoryWrapper">
        <div class="ourStoryImageContainer">
            <img src="<?php echo get_theme_file_uri( 'assets/images/cohabitGroup.jpg' ); ?>" alt="">
            <div class="textUnderImageContainer">
                <p>Vaish, Jed and Max – Co-founders of Cohabit</p>
                <p>Photo: Malin Palm</p>
            </div>
        </div>
        <div class="ourStoryTextContainer">
            <p>Cohabit is a circular furniture rental startup based in Malmö, Sweden.</p>
            <p>As  former international students, we have experienced first-hand the  challenges students face when it comes to furnishing their empty  apartments – and yes, it’s quite stressful!</p>
            <p>Launched  in 2022, Cohabit aims to make sustainable consumption convenient,  accessible, and affordable by providing pre-loved furniture for rent.  Initially intended as a project for our Social Entrepreneurship, Social Innovation, and Sustainability course,  we realized the potential for Cohabit, given the number of  international students who move to Sweden – and experience the same  problem – annually. </p>
            <p>Today, our services are available in Malmö  and Lund, and aim to expand to other major student cities in the near  future, so join the movement and choose circularity with Cohabit! </p>
        </div>
    </div>
</div>

<?php get_footer(); ?>