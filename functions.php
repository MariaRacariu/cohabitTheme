<?php
// Enqueue all styles and scripts here
function cohabit_enqueue_scripts(){
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory(). '/style.css'),'all');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/javascript/main.js', [], filemtime(get_template_directory(). '/assets/javascript/main.js'), true);
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

// function create_custom_post_types(){
//     // Custom Post Types Options for frontpage
//     register_post_type('cohabit-frontpage',
//         array(
//             'labels' => array(
//                 'name' => __( 'Homepage' ),
//                 'singular_name' => __( 'Homepage' )
//             ),
//             'public' => true,
//             'has_archive' => false,
//             'show_in_rest' => true,
//             'hierarchical' => true,
//             'supports' => array(
//                 'title',
//                 'editor',
//                 'thumbnail',
//                 'custom-fields'
//             ))
//     );
// }

// add_action( 'init', 'create_custom_post_types');

//Navigation
function menus(){
    register_nav_menus (array(
        'primary menu' => 'Desktop Primary Menu',
        'footer menu' => 'Footer Menu',
    ));
}
//Hooking up the function to init
add_action('init', 'menus');
?>