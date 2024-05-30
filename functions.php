<?php
// Enqueue all styles and scripts here
function cohabit_enqueue_scripts(){
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory(). '/style.css'),'all');
    wp_register_script('main-js', get_template_directory_uri() . '/assets/javascript/main.js', [], filemtime(get_template_directory(). '/assets/javascript/main.js'), true);
    wp_register_script('how-Cohabit-Works', get_template_directory_uri() . '/assets/javascript/howCohabitWorks.js', [], filemtime(get_template_directory(). '/assets/javascript/howCohabitWorks.js'), true);

    if(is_page('Cohabit')){
        wp_enqueue_script("main-js");
    }

    if(is_page('How Cohabit Works')){
        wp_enqueue_script("how-Cohabit-Works");
    }
}
add_action('wp_enqueue_scripts', 'cohabit_enqueue_scripts');

function cohabit_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-logo');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support('menus');
}
add_action('after_setup_theme', 'cohabit_theme_support');

//Navigation
function menus(){
    register_nav_menus (array(
        'primary menu' => 'Desktop Primary Menu',
        'footer menu' => 'Footer Menu',
    ));
}
 
add_action('after_setup_theme', 'menus');

// Post Type
function create_custom_postTypes(){
    register_post_type ('customer_reviews',
    array(
        'labels' => array(
            'name' => __('Customer Reviews'),
            'singular_name' => __('Customer Review'),
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        'supports' => array(
            'title',
            'editor',
            'author',
            'excerpt',
            'thumbnail',
            'custom-fields',
        )
    )
);
}
add_action('init', 'create_custom_postTypes');

// Taxonomy
function register_custom_taxonomy(){
    // Taxonomy for Customer Reviews
    $args = array(
        'labels' => array(
            'name' => _x('Customer Reviews', 'Customer Reviews'),
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
    );
    register_taxonomy('customer_reviews', 'cohabit_Customer_Reviews', $args);
}
add_action('init', 'register_custom_taxonomy');
?>