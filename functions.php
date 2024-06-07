<?php
// Enqueue all styles and scripts here
function cohabit_enqueue_scripts(){
    wp_deregister_script('jquery');

    // Register Styles
    wp_register_style('howCohabitWorksStylesheet', get_template_directory_uri(). '/assets/css/howCohabitWorks.css', array('stylesheet'), 'all');
    wp_register_style('aboutPageStylesheet', get_template_directory_uri(). '/assets/css/about.css', array('stylesheet'), 'all');
    wp_register_style('singlePage', get_template_directory_uri(). '/assets/css/singlePost.css', 'all');
    wp_register_style('archive', get_template_directory_uri(). '/assets/css/archive.css', 'all');
    wp_register_style ('slickStylesheet', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', '1.8.1', array('aboutPageStylesheet'), 'all');
    wp_register_style ('slickStylesheetTheme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css', '1.8.1', array('aboutPageStylesheet'), 'all');
    wp_register_style('homepageStyleSheet', get_template_directory_uri(). '/assets/css/homepage.css', 'all');
    wp_register_style('contactStyleSheet', get_template_directory_uri(). '/assets/css/contact.css', 'all');
    
    //Register Scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/javascript/main.js', [], filemtime(get_template_directory(). '/assets/javascript/main.js'), true);
    wp_register_script('how-Cohabit-Works', get_template_directory_uri() . '/assets/javascript/howCohabitWorks.js', [], filemtime(get_template_directory(). '/assets/javascript/howCohabitWorks.js'), true);
    wp_register_script('aboutJS', get_template_directory_uri() . '/assets/javascript/about.js', [], filemtime(get_template_directory(). '/assets/javascript/about.js'), true);
    wp_register_script('slickJS', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('aboutJS'), '1.8.1', true);

    // Enqueue Styles
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory(). '/style.css'),'all');

    // Enqueue Scripts
    wp_enqueue_script('navigation', get_template_directory_uri() . '/assets/javascript/navigation.js', [], filemtime(get_template_directory(). '/assets/javascript/navigation.js'), true);
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.js', '3.7.1', true);
	wp_enqueue_script ('fontAwesome', 'https://kit.fontawesome.com/251044f349.js', '6.0', true);

    // Enqueue Registered Scripts and Styles
    if(is_page('Cohabit')){
        // Scripts
        wp_enqueue_script('slickJS');
        wp_enqueue_script('main-js');

        // Styles
        wp_enqueue_style('slickStylesheet');
        wp_enqueue_style('slickStylesheetTheme');
        wp_enqueue_style('homepageStyleSheet');
       
    }

    if(is_page('How Cohabit Works')){
        // Scripts
        wp_enqueue_script("how-Cohabit-Works");

        // Styles
        wp_enqueue_style('howCohabitWorksStylesheet');
    }

    if(is_page('About')){      
        // Scripts
        wp_enqueue_script('slickJS');
        wp_enqueue_script('aboutJS');

        // Styles
        wp_enqueue_style('aboutPageStylesheet');
        wp_enqueue_style('slickStylesheet');
        wp_enqueue_style('slickStylesheetTheme');
    }

    if(is_single()){
        // Styles
        wp_enqueue_style('singlePage');
    }

    if(is_archive()){
        // Styles
        wp_enqueue_style('archive');
    }

	if(is_page('Contact')){
		// Style
		wp_enqueue_style('contactStyleSheet');
	}
}
add_action('wp_enqueue_scripts', 'cohabit_enqueue_scripts');

// Theme Support
function cohabit_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-logo');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support('menus');
}
add_action('after_setup_theme', 'cohabit_theme_support');

//Create Navigation
function menus(){
    register_nav_menus (array(
        'primary menu' => 'Desktop Primary Menu',
        'footer menu' => 'Footer Menu',
    ));
} 
add_action('after_setup_theme', 'menus');

// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Testimonial Archives', 'textdomain' ),
		'attributes' => __( 'Testimonial Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'textdomain' ),
		'all_items' => __( 'All Testimonials', 'textdomain' ),
		'add_new_item' => __( 'Add New Testimonial', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Testimonial', 'textdomain' ),
		'edit_item' => __( 'Edit Testimonial', 'textdomain' ),
		'update_item' => __( 'Update Testimonial', 'textdomain' ),
		'view_item' => __( 'View Testimonial', 'textdomain' ),
		'view_items' => __( 'View Testimonials', 'textdomain' ),
		'search_items' => __( 'Search Testimonial', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'textdomain' ),
		'items_list' => __( 'Testimonials list', 'textdomain' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Testimonials list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'textdomain' ),
		'description' => __( 'Customer Testimonials', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-quote',
		'supports' => array('title', 'editor', 'thumbnail', 'author', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => true,
		'exclude_from_search' => true,
		'show_in_rest' => false,
		'publicly_queryable' => false,
		'capability_type' => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );

// Register Custom Post Type Customer experiences
function create_customerexperiences_cpt() {

	$labels = array(
		'name' => _x( 'Customer experience', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Customer experiences', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Customer experience', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Customer experiences', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Customer experiences Archives', 'textdomain' ),
		'attributes' => __( 'Customer experiences Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Customer experiences:', 'textdomain' ),
		'all_items' => __( 'All Customer experience', 'textdomain' ),
		'add_new_item' => __( 'Add New Customer experiences', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Customer experiences', 'textdomain' ),
		'edit_item' => __( 'Edit Customer experiences', 'textdomain' ),
		'update_item' => __( 'Update Customer experiences', 'textdomain' ),
		'view_item' => __( 'View Customer experiences', 'textdomain' ),
		'view_items' => __( 'View Customer experience', 'textdomain' ),
		'search_items' => __( 'Search Customer experiences', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Customer experiences', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Customer experiences', 'textdomain' ),
		'items_list' => __( 'Customer experience list', 'textdomain' ),
		'items_list_navigation' => __( 'Customer experience list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Customer experience list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Customer experiences', 'textdomain' ),
		'description' => __( 'Customer experiences/stories about them', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-portfolio',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'page-attributes', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'customerexperiences', $args );

}
add_action( 'init', 'create_customerexperiences_cpt', 0 );

?>