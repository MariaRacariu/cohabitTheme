<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="wrapper">
    <div class="archiveContainer">
    <?php

    if(have_posts()){
        while(have_posts()){
            the_post();
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

<?php get_footer(); ?>