<?php get_header();?>

<div class="mainContent">
    <div class="mainHeadingContainer">
        <h1 class="mainHeading"><?php the_title(); ?></h1>
    </div>
    <div class="mainContent">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>