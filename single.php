<?php get_header();?>

<div>
    <?php
    // If statement to check if thumbnail exists
    if ( has_post_thumbnail() ) {
        // if yes then output thumbnail with class img-fluid
        the_post_thumbnail('full', array( 'class' => 'image' ));
    }
    ?>
    <div>
        <h1><?php the_title(); ?></h1>
    </div>
</div>

<div>
    <div>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </div>
</div>

<?php get_footer(); ?>