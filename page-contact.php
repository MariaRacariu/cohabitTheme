<?php
/*
Template Name: Custom Template for How Cohabit Works
*/

get_header(); 
?>
<div>
    <div class="mainContainer">
        <div class="contactFormContainer">
            <h2 class="introHeading"><?php echo get_theme_mod('cohabit-contact-form-heading'); ?></h2>
            <?php echo wpautop(get_theme_mod('cohabit-contact-form-text')); ?>

            <?php echo do_shortcode(get_theme_mod('cohabit-contact-form-id')); ?>
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
        <div class="contactImageContainer">
            <div>            
                <img src="<?php echo esc_url(get_theme_mod('cohabit-contact-image')); ?>" class="contactImage">
            </div>
        </div>
    </div>
</div>


<?php
get_footer(); 
?>