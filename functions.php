<?php
// Enqueue all styles and scripts here
function cohabit_enqueue_scripts(){
    wp_deregister_script('jquery');

    // Register Styles
    wp_register_style('howCohabitWorksStylesheet', get_template_directory_uri(). '/assets/css/howCohabitWorks.css', array('stylesheet'), 'all');
    wp_register_style('aboutPageStylesheet', get_template_directory_uri(). '/assets/css/about.css', array('stylesheet'), 'all');
    wp_register_style('singlePage', get_template_directory_uri(). '/assets/css/singlePost.css', 'all');
    wp_register_style('archive', get_template_directory_uri(). '/assets/css/archive.css', 'all');
    wp_register_style('slickStylesheet', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', '1.8.1', 'all');
    wp_register_style('slickStylesheetTheme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css', '1.8.1', 'all');
    wp_register_style('homepageStyleSheet', get_template_directory_uri(). '/assets/css/homepage.css', 'all');
    wp_register_style('contactStyleSheet', get_template_directory_uri(). '/assets/css/contact.css', 'all');
    wp_register_style('collaborationsStyleSheet', get_template_directory_uri(). '/assets/css/collaborations.css', 'all');
    
    //Register Scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/javascript/main.js', [], filemtime(get_template_directory(). '/assets/javascript/main.js'), true);
    wp_register_script('how-Cohabit-Works', get_template_directory_uri() . '/assets/javascript/howCohabitWorks.js', [], filemtime(get_template_directory(). '/assets/javascript/howCohabitWorks.js'), true);
    wp_register_script('aboutJS', get_template_directory_uri() . '/assets/javascript/about.js', [], filemtime(get_template_directory(). '/assets/javascript/about.js'), true);
    wp_register_script('slickJS', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', '1.8.1', true);
	wp_register_script('collaborationsJS', get_template_directory_uri() . '/assets/javascript/collaborations.js', [], filemtime(get_template_directory(). '/assets/javascript/collaborations.js'), true);


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

	if(is_page('Collaborations')){
		// Scripts
		wp_enqueue_script('slickJS');
		wp_enqueue_script('collaborationsJS');

		// Style
		wp_enqueue_style('slickStylesheet');
        wp_enqueue_style('slickStylesheetTheme');
		wp_enqueue_style('collaborationsStyleSheet');
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
        'footer menu one' => 'Footer Navigation',
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
		'menu_position' => 4,
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
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'customerexperiences', $args );

}
add_action( 'init', 'create_customerexperiences_cpt', 0 );

// Register Custom Post Type Cohabit News
function create_cohabitnews_cpt() {

	$labels = array(
		'name' => _x( 'Cohabit News', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Cohabit News', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Cohabit News', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Cohabit News', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Cohabit News Archives', 'textdomain' ),
		'attributes' => __( 'Cohabit News Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Cohabit News:', 'textdomain' ),
		'all_items' => __( 'All Cohabit News', 'textdomain' ),
		'add_new_item' => __( 'Add New Cohabit News', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Cohabit News', 'textdomain' ),
		'edit_item' => __( 'Edit Cohabit News', 'textdomain' ),
		'update_item' => __( 'Update Cohabit News', 'textdomain' ),
		'view_item' => __( 'View Cohabit News', 'textdomain' ),
		'view_items' => __( 'View Cohabit News', 'textdomain' ),
		'search_items' => __( 'Search Cohabit News', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Cohabit News', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Cohabit News', 'textdomain' ),
		'items_list' => __( 'Cohabit News list', 'textdomain' ),
		'items_list_navigation' => __( 'Cohabit News list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Cohabit News list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Cohabit News', 'textdomain' ),
		'description' => __( 'All events/news from Cohabit that will be displayed on the collaborations page', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-site-alt',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 6,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'cohabitnews', $args );

}
add_action( 'init', 'create_cohabitnews_cpt', 0 );

// Register Custom Post Type FAQ
function create_faq_cpt() {

	$labels = array(
		'name' => _x( 'FAQs', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'FAQ', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'FAQs', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'FAQ', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'FAQ Archives', 'textdomain' ),
		'attributes' => __( 'FAQ Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent FAQ:', 'textdomain' ),
		'all_items' => __( 'All Custom Posts', 'textdomain' ),
		'add_new_item' => __( 'Add New FAQ', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New FAQ', 'textdomain' ),
		'edit_item' => __( 'Edit FAQ', 'textdomain' ),
		'update_item' => __( 'Update FAQ', 'textdomain' ),
		'view_item' => __( 'View FAQ', 'textdomain' ),
		'view_items' => __( 'View Custom Posts', 'textdomain' ),
		'search_items' => __( 'Search FAQ', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into FAQ', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'textdomain' ),
		'items_list' => __( 'Custom Posts list', 'textdomain' ),
		'items_list_navigation' => __( 'Custom Posts list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Custom Posts list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'FAQ', 'textdomain' ),
		'description' => __( 'Frequently asked questions', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-feedback',
		'supports' => array('title', 'editor', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 7,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'faq', $args );

}
add_action( 'init', 'create_faq_cpt', 0 );

// Register Custom Post Type Footer Icon
function create_footericon_cpt() {

	$labels = array(
		'name' => _x( 'Footer Icons', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Footer Icon', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Footer Icons', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Footer Icon', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Footer Icon Archives', 'textdomain' ),
		'attributes' => __( 'Footer Icon Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Footer Icon:', 'textdomain' ),
		'all_items' => __( 'All Footer Icons', 'textdomain' ),
		'add_new_item' => __( 'Add New Footer Icon', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Footer Icon', 'textdomain' ),
		'edit_item' => __( 'Edit Footer Icon', 'textdomain' ),
		'update_item' => __( 'Update Footer Icon', 'textdomain' ),
		'view_item' => __( 'View Footer Icon', 'textdomain' ),
		'view_items' => __( 'View Footer Icons', 'textdomain' ),
		'search_items' => __( 'Search Footer Icon', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Footer Icon', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Footer Icon', 'textdomain' ),
		'items_list' => __( 'Footer Icons list', 'textdomain' ),
		'items_list_navigation' => __( 'Footer Icons list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Footer Icons list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Footer Icon', 'textdomain' ),
		'description' => __( 'The company icons in the footer', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-image',
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 8,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'footericon', $args );

}
add_action( 'init', 'create_footericon_cpt', 0 );

// Register Custom Post Type Timeline
function create_timeline_cpt() {

	$labels = array(
		'name' => _x( 'Timeline', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Timeline', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Timeline', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Timeline', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Timeline Archives', 'textdomain' ),
		'attributes' => __( 'Timeline Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Timeline:', 'textdomain' ),
		'all_items' => __( 'All Custom Posts', 'textdomain' ),
		'add_new_item' => __( 'Add New Timeline', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Timeline', 'textdomain' ),
		'edit_item' => __( 'Edit Timeline', 'textdomain' ),
		'update_item' => __( 'Update Timeline', 'textdomain' ),
		'view_item' => __( 'View Timeline', 'textdomain' ),
		'view_items' => __( 'View Custom Posts', 'textdomain' ),
		'search_items' => __( 'Search Timeline', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Timeline', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Timeline', 'textdomain' ),
		'items_list' => __( 'Custom Posts list', 'textdomain' ),
		'items_list_navigation' => __( 'Custom Posts list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Custom Posts list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Timeline', 'textdomain' ),
		'description' => __( 'The cohabit timeline', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-hourglass',
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'timeline', $args );

}
add_action( 'init', 'create_timeline_cpt', 0 );

// Homepage customize functions
require_once get_template_directory() . '/inc/customize/homepage-customize-functions.php';

// How cohabit works customize functions
require_once get_template_directory() . '/inc/customize/how-cohabit-works-customize-functions.php';

// About
require_once get_template_directory() . '/inc/customize/about-customize-functions.php';

// Collaborations
require_once get_template_directory() . '/inc/customize/collaborations-customize-functions.php';

// Contact
require_once get_template_directory() . '/inc/customize/contact-customize-functions.php';

// Footer
require_once get_template_directory() . '/inc/customize/footer-customize-functions.php';