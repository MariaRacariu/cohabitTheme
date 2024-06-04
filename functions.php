<?php
// Enqueue all styles and scripts here
function cohabit_enqueue_scripts(){
    // Register Styles
    wp_register_style('howCohabitWorksStylesheet', get_template_directory_uri(). '/assets/css/howCohabitWorks.css', array('stylesheet'), 'all');
    wp_register_style('aboutPageStylesheet', get_template_directory_uri(). '/assets/css/about.css', array('stylesheet'), 'all');
    wp_register_style('singlePage', get_template_directory_uri(). '/assets/css/singlePost.css', 'all');
    wp_register_style('archive', get_template_directory_uri(). '/assets/css/archive.css', 'all');

    //Register Scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/javascript/main.js', [], filemtime(get_template_directory(). '/assets/javascript/main.js'), true);
    wp_register_script('how-Cohabit-Works', get_template_directory_uri() . '/assets/javascript/howCohabitWorks.js', [], filemtime(get_template_directory(). '/assets/javascript/howCohabitWorks.js'), true);
    wp_register_script('aboutJS', get_template_directory_uri() . '/assets/javascript/about.js', [], filemtime(get_template_directory(). '/assets/javascript/about.js'), true);

    // Enqueue Styles
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory(). '/style.css'),'all');

    // Enqueue Scripts
    wp_enqueue_script('navigation', get_template_directory_uri() . '/assets/javascript/navigation.js', [], filemtime(get_template_directory(). '/assets/javascript/navigation.js'), true);

    // Enqueue Registered Scripts and Styles
    if(is_page('Cohabit')){
        wp_enqueue_script("main-js");
    }

    if(is_page('How Cohabit Works')){
        wp_enqueue_script("how-Cohabit-Works");
        wp_enqueue_style('howCohabitWorksStylesheet');
    }

    if(is_page('About')){
        wp_enqueue_script('aboutJS');
        wp_enqueue_style('aboutPageStylesheet');
    }

    if(is_single()){
        wp_enqueue_style('singlePage');
    }

    if(is_archive()){
        wp_enqueue_style('archive');
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
                'name' => __('Customers Section'),
                'singular_name' => __('Customer Section'),
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
            'name' => _x('Customer Categories', 'Customer Categories'),
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
    );
    register_taxonomy('Customer Categories', 'customer_reviews', $args);
}
add_action('init', 'register_custom_taxonomy');
?>