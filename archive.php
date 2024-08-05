<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="wrapper">
    <div class="archiveContainer">
    <?php

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        'post_type' => 'customerexperiences',
        'posts_per_page' => 8,
        'order' => 'DEC',
        'paged' => $paged,
    );

    $custom_archive = new WP_Query($args);

    if( $custom_archive -> have_posts()){
        while( $custom_archive -> have_posts()){
            $custom_archive -> the_post();
                ?>
                <div class="userStoryContainer">
                    <div class="imageContainer">
                        <?php the_post_thumbnail('medium', array( 'class' => 'profileImage' )); ?>
                    </div>
                    <div class="textContainer">
                        <h1 class="cardTitle"><?php the_title(); ?></h1>

                        <div class="infoTextContainer">
                        <p><?php the_excerpt(); ?></p>
                        </div>
                        <div class="readMoreButtonContainer">
                            <a href="<?php the_permalink() ?>" class="readMoreButton">Read more</a>
                        </div>
                    </div>
                </div>
        <?php
        }
    }else{
        echo "<p>No posts found</p>";
    }
    ?>
    </div>
</div>
<div class="paginationContainer">
    <?php
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __('« Previous', 'textdomain'),
        'next_text' => __('Next »', 'textdomain'),
    ));
    ?>
</div>

<?php get_footer(); ?>