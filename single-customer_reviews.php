<?php
get_header(); // Include the header
?>

<div class="mariaTest">
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>
        <div class="mainHeadingContainer">
            <?php
            the_title( '<h1 class="mainHeading">', '</h1>' );
            ?>
        </div>

        <div class="mainContent">
            <?php
            the_content();
            ?>
        </div>
        <?php
    endwhile;
else :
    echo '<p>No content found</p>';
endif;

get_footer(); // Include the footer
?>
</div>