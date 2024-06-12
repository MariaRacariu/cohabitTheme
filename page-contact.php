<?php
/*
Template Name: Custom Template for How Cohabit Works
*/

get_header(); 
?>
<div>
    <div class="mainContainer">
        <div class="contactFormContainer">
            <?php echo do_shortcode('[wpforms id="90"]'); ?>
        </div>
        <div class="contactInfoContainer">
            <h2 class="introHeading">Get in touch with us</h2>
            <p>amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
            <div class="linksContainer">
                <div>
                    <a href="mailto:hello@cohabit.se" class="formLinks"><i class="fa-solid fa-envelope fa-xl"></i><p class="linkText secondFont">hello@cohabit.se</p></a>
                </div>
                <div>
                    <a href="tel:+46 7123 456 487" class="formLinks"><i class="fa-solid fa-phone fa-xl"></i><p class="linkText secondFont">07123 456 487</p></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer(); 
?>