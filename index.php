<?php
// Main template file

get_header(); 
get_template_part('template-parts/frontPageHero');
get_template_part('template-parts/frontPageUSP');
get_template_part('template-parts/frontPageMovingInfo');
?>

<div class="logoSliderContainer">
    <div class="logoSlider">
        <div class="logosSliderTrack" id="logosSliderTrack">
            <div class="logoSlide"><img src="<?php echo get_theme_file_uri( 'assets/images/logos/1.png' ); ?>" alt=""></div>
            <div class="logoSlide"><img src="<?php echo get_theme_file_uri( 'assets/images/logos/2.png' ); ?>" alt=""></div>
            <div class="logoSlide"><img src="<?php echo get_theme_file_uri( 'assets/images/logos/3.png' ); ?>" alt=""></div>
            <div class="logoSlide"><img src="<?php echo get_theme_file_uri( 'assets/images/logos/4.png' ); ?>" alt=""></div>
            <div class="logoSlide"><img src="<?php echo get_theme_file_uri( 'assets/images/logos/5.png' ); ?>" alt=""></div>
            <div class="logoSlide"><img src="<?php echo get_theme_file_uri( 'assets/images/logos/6.png' ); ?>" alt=""></div>
            <div class="logoSlide"><img src="<?php echo get_theme_file_uri( 'assets/images/logos/7.png' ); ?>" alt=""></div>
            <div class="logoSlide"><img src="<?php echo get_theme_file_uri( 'assets/images/logos/8.png' ); ?>" alt=""></div>
            <div class="logoSlide"><img src="<?php echo get_theme_file_uri( 'assets/images/logos/9.png' ); ?>" alt=""></div>
            <div class="logoSlide"><img src="<?php echo get_theme_file_uri( 'assets/images/logos/10.png' ); ?>" alt=""></div>
            <div class="logoSlide"><img src="<?php echo get_theme_file_uri( 'assets/images/logos/11.png' ); ?>" alt=""></div>
        </div>
    </div>
</div>

<?php
get_footer(); 

?>