<?php
// Main template file

get_header(); 
get_template_part('template-parts/frontPageHero');
get_template_part('template-parts/frontPageUSP');
get_template_part('template-parts/frontPageMovingInfo');
// Separate the reviews and stories
get_template_part('template-parts/frontPageCustomerReviews');
get_template_part('template-parts/colaboratorsList');
get_footer(); 

?>