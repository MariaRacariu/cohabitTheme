<?php
$customerReviews = new WP_Query([
    'post_type' => 'customer_reviews',
    'posts_per_page' =>20,
]);

if($customerReviews->have_posts()){
    while($customerReviews->have_posts()){
        $customerReviews->the_post();
        the_title();
        the_content();
    }
}
?>