<?php
// Main template file

get_header(); 
get_template_part('template-parts/frontPageHero');
get_template_part('template-parts/frontPageUSP');
get_template_part('template-parts/frontPageMovingInfo');

// get_template_part('template-parts/frontPageCustomerReviews');
?>
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
            <div>
                <div>
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
                        <h4><?php the_title(); ?></h4>
                        <?php 
                        $custom_field_value = get_post_custom();
                                    
                        if(isset($custom_field_value['Location'])){
                            echo "<p class='customerReviewLocation'>" . $custom_field_value['Location'][0] . "</p>";
                        }
                                    
                        ?>
                    </div>
                </div>
                
                
                
                <div>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <?php
    }
}
?>
</div>

<?php
get_template_part('template-parts/colaboratorsList');
get_footer(); 

?>