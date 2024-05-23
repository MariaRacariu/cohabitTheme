<?php
// Main template file

get_header(); 
get_template_part('template-parts/frontPageHero');
get_template_part('template-parts/frontPageUSP');
get_template_part('template-parts/frontPageMovingInfo');

?>



<div class="customerReviewsContainer">
    <div>
        <h3 class="customerReviewsTitle">What our customers say</h3>
    </div>

    <?php
    $customerReviews = new WP_Query([
        'post_type' => 'customer_reviews',
        'posts_per_page' => 3,
        'tax_query' => array(
            'taxonomy' => 'customer_reviews',
            'field' => 'slug',
            'terms' => 'customerreview',
        ),
    ]);
    ?>
    <div class="customerReviewsPostsContainer">
        <?php
        if($customerReviews->have_posts()){
            while($customerReviews->have_posts()){
                $customerReviews->the_post();
                ?>
            <div class="customerReviewPost">
                <div class="customerReviewHeightContainer">
                    <div class="customerReviewsInfoContainer">
                        <div>
                            <?php the_post_thumbnail('medium', array( 'class' => 'customerReviewsImage' )); ?>
                        </div>
                        <div class="customerReviewsNameInfo">
                            <h4 class="customerReviewTitle"><?php the_title(); ?></h4>

                            <?php $custom_field_value = get_post_custom();
                        
                                if(isset($custom_field_value['Location'])){
                                    echo "<p class='customerReviewLocation'>" . $custom_field_value['Location'][0] . "</p>";
                                }
                        
                            ?>
                        </div>
                    </div>
                    <div class="customerReviewImageContainer">
                        <img src="<?php echo get_theme_file_uri( 'assets/images/5star.png' ); ?>" alt="">
                    </div>
                    <div class="customerReviewContent">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <div class="customerReviewButtonContainer">
                    <a href="<?php the_permalink(); ?>" class="customerReviewReadMoreButton">Read more</a>
                </div>
            </div>
                <?php
            }
        }
        ?>
    </div>
</div>



<?php
get_template_part('template-parts/colaboratorsList');
get_footer(); 

?>