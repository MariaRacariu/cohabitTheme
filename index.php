<?php
// Main template file

get_header(); 
get_template_part('template-parts/frontPageHero');
get_template_part('template-parts/frontPageUSP');
get_template_part('template-parts/frontPageMovingInfo');

// get_template_part('template-parts/frontPageCustomerReviews');
?>
<div>
<div>
        <h3 class="customerReviewsTitle">What our customers say</h3>
    </div>

<div class="sliderContainer">
    <div class="reviewSlider">
    <?php
    $args = array(
        'post_type' => 'testimonial',
        'order' => 'ASC',
    );

    $customerReviews = new WP_Query($args);

    if($customerReviews->have_posts()){
        while($customerReviews->have_posts()){
            $customerReviews->the_post();
            ?>
                <div class="sliderCard">
                    <div class="userInfoContainer">
                        <div>
                            <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail('medium', array( 'class' => 'customerReviewsImage' ));
                            }else{
                                echo '<img src ="' . get_theme_file_uri('assets/images/unknown.svg').'" class="customerReviewsImage">';
                            }
                            
                            ?>
                        </div>
                        <div>
                            <h4 class="customerReviewName"><?php the_title(); ?></h4>
                            <?php 
                            $location_field = get_post_custom();
                                        
                            if(isset($location_field['Location'])){
                                echo "<p class='customerReviewLocation'>" . $location_field['Location'][0] . "</p>";
                            }
                                        
                            ?>
                        </div>
                    </div>
                    <div class="starsRatingContainer">
                        <?php 
                        $starRating_field = get_post_custom();
                                    
                        if(isset($starRating_field['Stars'])){
                            if($starRating_field['Stars'][0] == 5){
                                echo '<img src ="' . get_theme_file_uri('assets/images/5star.png').'" class="starsRating">';
                                
                            }else{
                                echo "<p class='starsRating'>" . $starRating_field['Stars'][0] . "</p>";
                            }
                        }
                                    
                        ?>
                    </div>
                    <div class="reviewText">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php
        }
    }
    ?>
    </div>
    
</div>
</div>

<?php
get_footer(); 

?>