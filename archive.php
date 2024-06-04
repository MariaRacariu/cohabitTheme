<?php
/*
Template Name: Archives
*/
get_header(); ?>


<div class="archiveContainer">
<?php

if(have_posts()){
    while(have_posts()){
        ?>

      
        <?php
        the_post();
        
        $postContent = get_the_content();
        $postContentStripped = strip_tags($postContent);
        $postContentTrimmed = trim($postContentStripped);

        if(str_word_count($postContentTrimmed) == 0){
            echo "";
        }else{
            ?>
            <div class="userStoryContainer">
                <div class="imageContainer">
                    <?php the_post_thumbnail('medium', array( 'class' => 'profileImage' )); ?>
                </div>

                <h1><?php the_title(); ?></h1>

                <?php 
                $custom_field_value = get_post_custom();
                                
                if(isset($custom_field_value['Location'])){
                    echo "<p class='customerReviewLocation'>" . $custom_field_value['Location'][0] . "</p>";
                }       
                ?>
                <div class="infoTextContainer">
                    <?php 
                    $custom_field_value = get_post_custom();
                                    
                    if(isset($custom_field_value['Info'])){
                        echo "<p class=''>" . $custom_field_value['Info'][0] . "</p>";
                    }       
                    ?>
                </div>
                <div class="readMoreButtonContainer">
                    <a href="<?php the_permalink() ?>" class="readMoreButton">Read more</a>
                </div>
            </div>
       <?php
        }  
    }
}
?>
</div>

<?php get_footer(); ?>