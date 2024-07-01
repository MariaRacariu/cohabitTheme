<?php
/*
Template Name: Custom Template for How Cohabit Works
*/

get_header(); 
?>
<div>
    <div class="mainContainer">
        <div class="contactFormContainer">
            <h2 class="introHeading">Get in touch with us</h2>
            <p>amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
            <?php echo do_shortcode('[wpforms id="90"]'); ?>
            <div class="linksContainer">
                <div>
                    <a href="mailto:hello@cohabit.se" class="formLinks"><i class="fa-solid fa-envelope fa-xl"></i><p class="linkText secondFont">hello@cohabit.se</p></a>
                </div>
                <div>
                    <a href="tel:+46 7123 456 487" class="formLinks"><i class="fa-solid fa-phone fa-xl"></i><p class="linkText secondFont">07123 456 487</p></a>
                    <p class="phoneContactInfo">Mon-Fri 08.00 - 17.00 CET</p>
                </div>
            </div>
        </div>
        <div class="contactImageContainer">
            <div>            
                <img src="<?php echo get_theme_file_uri( 'assets/images/contactPageImage.jpg' ); ?>"" alt="" class="contactImage">
            </div>
        </div>
    </div>
</div>


<?php
get_footer(); 
?>