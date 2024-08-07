<?php
/*
Template Name: Contact
*/

get_header(); 
?>
<div>
    <div class="mainContainer">
        <div class="contactAndImageContainer">
            <div class="contactFormContainer">
                <h2 class="introHeading"><?php echo get_theme_mod('cohabit-contact-form-heading'); ?></h2>
                <?php echo wpautop(get_theme_mod('cohabit-contact-form-text')); ?>

                <?php echo do_shortcode(get_theme_mod('cohabit-contact-form-id')); ?>
            </div>
            <div class="contactImageContainer">
                <div>            
                    <img src="<?php echo esc_url(get_theme_mod('cohabit-contact-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-contact-image')),'_wp_attachment_image_alt', true) ?>" class="contactImage">
                </div>
            </div>
        </div>
        
        <div class="linksContainer">
            <div>
                <a href="mailto:<?php echo get_theme_mod('cohabit-contact-info-email'); ?>" class="formLinks"><i class="<?php echo get_theme_mod('cohabit-contact-info-email-icon'); ?>"></i><p class="linkText secondFont"><?php echo get_theme_mod('cohabit-contact-info-email'); ?></p></a>
            </div>
            <div>
                <a href="tel:<?php echo get_theme_mod('cohabit-contact-info-phone'); ?>" class="formLinks"><i class="<?php echo get_theme_mod('cohabit-contact-info-phone-icon'); ?>"></i><p class="linkText secondFont"><?php echo get_theme_mod('cohabit-contact-info-phone'); ?></p></a>
                <p class="phoneContactInfo"><?php echo get_theme_mod('cohabit-contact-info-text'); ?></p>
            </div>
        </div>
    </div>
</div>


<?php
get_footer(); 
?>