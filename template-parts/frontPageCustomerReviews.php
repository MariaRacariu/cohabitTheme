<div class="customerReviewsContainer">
    <div class="customerReviewsRule">
        <div>
            <h3 class="customerReviewsTitle">What our customers say</h3>
        </div>

        <?php
        $customerReviews = new WP_Query([
            'post_type' => 'customer_reviews',
            'posts_per_page' => 3,
            'tax_query' => array(
                'taxonomy' => 'Customer Categories',
                'field' => 'slug',
                'terms' => 'stories',
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
                        <?php 
                        $postContent = get_the_content();
                        $postContentStripped = strip_tags($postContent);
                        $postContentTrimmed = trim($postContentStripped);

                        if(str_word_count($postContentTrimmed) == 0){
                            echo "";
                        }else{
                            ?><a href=" <?php the_permalink(); ?>" class="customerReviewReadMoreButton">Read more</a> <?php
                        }
                        ?>
                    </div>
                </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>