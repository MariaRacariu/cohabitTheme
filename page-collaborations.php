<?php
/*
Template Name: Custom Template for How Cohabit Works
*/

get_header(); 
?>

<!-- Intro part of page -->
<div class="introContainer">
    <div>
        <h1 class="introHeading">Co-create with <span class="highlight">Cohabit</span> </h1>
    </div>
    <div>
        <p class="introText">Cohabit aims to work with housing companies to provide tenants with a sustainable living experience.</p>
    </div>
    <div class="introButtonContainer">
        <a href="http://localhost/cohabit/contact/" class="introButton">Work with Cohabit</a>
    </div>
</div>

<!-- USPs Slider -->
<div class="sliderContainer">
    <div class="collaborationsSlider">
        <div>
            <div class="imageContainer">
                <img src="<?php echo get_theme_file_uri( 'assets/images/collaborationsImages/usps1.png' ); ?>" alt="" class="sliderImage">
            </div>
            <h2>No Upfront Costs</h2>
            <p>Cohabit handles delivery and maintenance of the furniture.</p>
        </div>
        <div>
            <div class="imageContainer">
                <img src="<?php echo get_theme_file_uri( 'assets/images/collaborationsImages/usps2.png' ); ?>" alt="" class="sliderImage">
            </div>
            <h2>Integrate Sustainability</h2>
            <p>Pre-loved furniture promotes green living and sustainable consumption.</p>
        </div>
        <div>
            <div class="imageContainer">
                <img src="<?php echo get_theme_file_uri( 'assets/images/collaborationsImages/usps3.png' ); ?>" alt="" class="sliderImage">
            </div>
            <h2>Competitive Advantage</h2>
            <p>A sustainably furnished apartment equals a happy tenant.</p>
        </div>
    </div>
</div>

<!-- Company Review -->
<div class="quoteContainer">
    <div class="companyReviewContainer">
        <div>
            <img src="<?php echo get_theme_file_uri( 'assets/images/collaborationsImages/heimstadenPeter.jpg' ); ?>" alt="" class="reviewImage">
        </div>
        <div>
            <div class="companyQuoteContainer">
                <p class="companyQuote">”Cohabit is ideal for our tenants looking for a sustainable, affordable, and convenient way to rent furniture during their stay in Malmö.”</p>
            </div>
           <div class="reviewInfoContainer">
                <p>Peter Johannson - Facility Manager of Heimstaden Studenthus</p>
                <!-- <p> </p> -->
           </div>
           <div class="companyLogoContainer">
                <img src="<?php echo get_theme_file_uri( 'assets/images/logos/8.png' ); ?>" alt="">
           </div>
        </div>
    </div>
</div>

<!-- Contact Form -->
<!-- <div class="contactContainer">
    <div class="contactInfoContainer">
        <div>
            <h2 class="contactInfoHeading">Co-create with <span class="companyHighlight">Cohabit</span></h2>
            <p class="contactInfoText">Get in touch with us and lets work towards a sustainable future</p>
        </div>
    </div>
    <div class="contactFormContainer">
        <div>
            <h3 class="contactFormTitle">Get started here</h3>
        </div>
        <div>
            
        </div>
    </div>
</div> -->

<!-- Cohabit News Slider -->
<div>
    <div class="newsContainer">
        <div>
            <h2 class="newsSectionHeading">Cohabit in spotlight</h2>
        </div>
        <div class="cohabitNewsSlider">
        <?php
        $args = array(
                'post_type' => 'cohabitnews',
                'order' => 'DEC',
        );

        $news = new WP_Query($args);

        if($news -> have_posts()){
            while($news -> have_posts()){
                $news -> the_post();
                ?>
                <div class="newsSlideCard">
                    <div class="newsImageContainer"><?php the_post_thumbnail(); ?></div>
                    <div class="newsCardHeading"><h3><?php the_title(); ?></h3></div>
                    <div class="newsCardDate"><?php the_date(); ?></div>
                    <div class="newsContentContainer"><?php the_content(); ?></div>
                </div>
                <?php
            }
        }
            ?>
        </div>
    </div>
</div>

<!-- Company Logos Slider -->
 <?php get_template_part('template-parts/colaboratorsList'); ?>
<?php
get_footer(); 
?>