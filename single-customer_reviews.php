<?php
get_header(); // Include the header

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title( '<h1>', '</h1>' );
        the_content();
    endwhile;
else :
    echo '<p>No content found</p>';
endif;

get_footer(); // Include the footer
