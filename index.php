<?php
// Main template file

get_header(); 
get_template_part('template-parts/frontPageHero');
?>
<div class="frontPageInfoContainer" id="defaultContent">
    <div>
        <img src="<?php echo get_theme_file_uri( 'assets/images/FrontPageStepOne.svg' ); ?>" alt="">
        <h2>Convenient</h2>
        <p>Cohabit delivers your furniture into your apartment</p>
    </div>
    <div>
        <img src="<?php echo get_theme_file_uri( 'assets/images/FrontPageStepTwo.svg' ); ?>" alt="">
        <h2>Affordable</h2>
        <p>Our pre-loved packages start at 299sek/month</p>
    </div>
    <div>
        <img src="<?php echo get_theme_file_uri( 'assets/images/FrontPageStepThree.svg' ); ?>" alt="">
        <h2>Sustainable</h2>
        <p>Renting pre-loved furniture is more planet-friendly</p>
    </div>
</div>

<div class="slider" id="slider">
    <div class="slides">
        <div class="slide">
            <img src="<?php echo get_theme_file_uri( 'assets/images/FrontPageStepOne.svg' ); ?>" alt="">
            <h2>Convenient</h2>
            <p>Cohabit delivers your furniture into your apartment</p>
        </div>
        <div class="slide">
            <img src="<?php echo get_theme_file_uri( 'assets/images/FrontPageStepTwo.svg' ); ?>" alt="">
            <h2>Affordable</h2>
            <p>Our pre-loved packages start at 299sek/month</p>
        </div>
        <div class="slide">
            <img src="<?php echo get_theme_file_uri( 'assets/images/FrontPageStepThree.svg' ); ?>" alt="">
            <h2>Sustainable</h2>
            <p>Renting pre-loved furniture is more planet-friendly</p>
        </div>
    </div>
</div>


<?php
get_footer(); 

?>