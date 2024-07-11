<!-- ////////////////////  Footer Icon Section General  //////////////////// -->
<div>
    <div class="logosSlider">
    <?php
       
       $args = array(
           'post_type' => 'footericon',
           'order' => 'ASC',
       );

       $faq = new WP_Query($args);

        if($faq -> have_posts()){
            while($faq -> have_posts()){
                $faq -> the_post();

                $imageLink = get_post_custom();

                if(isset($imageLink['imageLink'])){
                    ?>

                    <div class="logoSlide">
                        <a href="<?php echo $imageLink['imageLink'][0] ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                
                    <?php    
                }
            }
        }
   ?>
    </div> 
</div>