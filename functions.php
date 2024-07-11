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
        'footer menu one' => 'Footer Navigation One',
		'footer menu two' => 'Footer Navigation Two'
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



// Customize page
function cohabit_edit($wp_customize){
	////////////////////  Home Page  ////////////////////

	// -------------- Intro Text Section --------------
	$wp_customize->add_section('cohabit-homePage-intro-section', array(
		'title' => "Intro Section (Cohabit)",
	));

	// Headline
	$wp_customize->add_setting('cohabit-intro-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-intro-heading-control', array(
		'label' => "Headline",
		'section' => "cohabit-homePage-intro-section",
		'settings' => "cohabit-intro-heading",
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Under Text
	$wp_customize->add_setting('cohabit-intro-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-intro-text-control', array(
		'label' => "Under text",
		'section' => "cohabit-homePage-intro-section",
		'settings' => "cohabit-intro-text",
		'type' => 'textarea',
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Button Link & Text
	$wp_customize->add_setting('cohabit-intro-button-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-intro-button-text-control', array(
		'label' => "Button name",
		'section' => "cohabit-homePage-intro-section",
		'settings' => "cohabit-intro-button-text",
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	$wp_customize->add_setting('cohabit-intro-button-link');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-intro-button-link-control', array(
		'label' => "Button Link",
		'section' => "cohabit-homePage-intro-section",
		'settings' => "cohabit-intro-button-link",
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// -------------- USPs Section --------------
	$wp_customize->add_panel('cohabit-homePage-USPs-panel', array(
		'title' => "USPs (Cohabit)",
	));

	// Slide 1 Section
	$wp_customize->add_section('cohabit-homePage-USPs-slide1-section', array(
		'title' => "Slide 1",
		'panel' => "cohabit-homePage-USPs-panel",
	));

	// Slide 1 Image
	$wp_customize->add_setting('cohabit-usps-slideOne-image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cohabit-usps-slideOne-image-control', array(
		'label' => "Image",
		'section' => "cohabit-homePage-USPs-slide1-section",
		'settings' => "cohabit-usps-slideOne-image",
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Slide 1 Heading
	$wp_customize->add_setting('cohabit-usps-imageOne-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-usps-imageOne-heading-control', array(
		'label' => "Heading",
		'section' => "cohabit-homePage-USPs-slide1-section",
		'settings' => "cohabit-usps-imageOne-heading",
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Slide 1 Text
	$wp_customize->add_setting('cohabit-usps-imageOne-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-usps-imageOne-text-control', array(
		'label' => "Text",
		'section' => "cohabit-homePage-USPs-slide1-section",
		'settings' => "cohabit-usps-imageOne-text",
		'type' => 'textarea',
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Slide 2 Section
	$wp_customize->add_section('cohabit-homePage-USPs-slide2-section', array(
		'title' => "Slide 2",
		'panel' => "cohabit-homePage-USPs-panel",
	));

	// Slide 2 Image
	$wp_customize->add_setting('cohabit-usps-slideTwo-image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cohabit-usps-slideTwo-image-control', array(
		'label' => "Image",
		'section' => "cohabit-homePage-USPs-slide2-section",
		'settings' => "cohabit-usps-slideTwo-image",
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Slide 2 Heading
	$wp_customize->add_setting('cohabit-usps-imageTwo-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-usps-imageTwo-heading-control', array(
		'label' => "Heading",
		'section' => "cohabit-homePage-USPs-slide2-section",
		'settings' => "cohabit-usps-imageTwo-heading",
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Slide 2 Text
	$wp_customize->add_setting('cohabit-usps-imageTwo-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-usps-imageTwo-text-control', array(
		'label' => "Text",
		'section' => "cohabit-homePage-USPs-slide2-section",
		'settings' => "cohabit-usps-imageTwo-text",
		'type' => 'textarea',
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Slide 3 Section
	$wp_customize->add_section('cohabit-homePage-USPs-slide3-section', array(
		'title' => "Slide 3",
		'panel' => "cohabit-homePage-USPs-panel",
	));


	// Slide 3 Image
	$wp_customize->add_setting('cohabit-usps-slideThree-image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cohabit-usps-slideThree-image-control', array(
		'label' => "Image",
		'section' => "cohabit-homePage-USPs-slide3-section",
		'settings' => "cohabit-usps-slideThree-image",
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Slide 3 Heading
	$wp_customize->add_setting('cohabit-usps-imageThree-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-usps-imageThree-heading-control', array(
		'label' => "Heading",
		'section' => "cohabit-homePage-USPs-slide3-section",
		'settings' => "cohabit-usps-imageThree-heading",
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Slide 3 Text
	$wp_customize->add_setting('cohabit-usps-imageThree-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-usps-imageThree-text-control', array(
		'label' => "Text",
		'section' => "cohabit-homePage-USPs-slide3-section",
		'settings' => "cohabit-usps-imageThree-text",
		'type' => 'textarea',
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// -------------- Post Info Section --------------
	$wp_customize->add_section('cohabit-post-info-section', array(
		'title' => "Post Info (Cohabit)",
	));

	// Image
	$wp_customize->add_setting('cohabit-post-info-image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cohabit-post-info-image-control', array(
		'label' => "Image",
		'section' => "cohabit-post-info-section",
		'settings' => "cohabit-post-info-image",
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Heading
	$wp_customize->add_setting('cohabit-post-info-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-post-info-heading-control', array(
		'label' => "Heading",
		'section' => "cohabit-post-info-section",
		'settings' => "cohabit-post-info-heading",
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Text
	$wp_customize->add_setting('cohabit-post-info-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-post-info-text-control', array(
		'label' => "Text",
		'section' => "cohabit-post-info-section",
		'settings' => "cohabit-post-info-text",
		'type' => 'textarea',
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Button Name
	$wp_customize->add_setting('cohabit-post-info-button-name');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-post-info-button-name-control', array(
		'label' => "Button Name",
		'section' => "cohabit-post-info-section",
		'settings' => "cohabit-post-info-button-name",
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// Button Link
	$wp_customize->add_setting('cohabit-post-info-button-link');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-post-info-button-link-control', array(
		'label' => "Button URL",
		'section' => "cohabit-post-info-section",
		'settings' => "cohabit-post-info-button-link",
		'type' => 'textarea',
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	// -------------- Customer Reviews Section --------------
	$wp_customize->add_section('cohabit-customer-reviews-section', array(
		'title' => "Customer Reviews (Cohabit)",
	));

	// Heading
	$wp_customize->add_setting('cohabit-customer-reviews-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-customer-reviews-heading-control', array(
		'label' => "Heading",
		'section' => "cohabit-customer-reviews-section",
		'settings' => "cohabit-customer-reviews-heading",
		'active_callback' => function(){
			return is_page('Cohabit');
		}
	)));

	////////////////////  How Cohabit Works Page  ////////////////////

	// -------------- Hero Section --------------
	$wp_customize->add_section('cohabit-hcw-hero-section', array(
		'title' => "Hero (Cohabit)",
	));

	// Heading
	$wp_customize->add_setting('cohabit-hcw-hero-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-hcw-hero-heading-control', array(
		'label' => "Title",
		'section' => "cohabit-hcw-hero-section",
		'settings' => "cohabit-hcw-hero-heading",
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// Image
	$wp_customize->add_setting('cohabit-hcw-hero-image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cohabit-hcw-hero-image-control', array(
		'label' => "Image",
		'section' => "cohabit-hcw-hero-section",
		'settings' => "cohabit-hcw-hero-image",
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// -------------- Steps Section --------------
	$wp_customize->add_panel('cohabit-hcw-steps-panel', array(
		'title' => "The steps (Cohabit)",
	));

	// Step 1 Section
	$wp_customize->add_section('cohabit-hcw-stepOne-section', array(
		'title' => "Step 1",
		'panel' => "cohabit-hcw-steps-panel",
	));

	// Step 1 Image
	$wp_customize->add_setting('cohabit-hcw-stepOne-image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cohabit-hcw-stepOne-image-control', array(
		'label' => "Image",
		'section' => "cohabit-hcw-stepOne-section",
		'settings' => "cohabit-hcw-stepOne-image",
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// Step 1 Heading
	$wp_customize->add_setting('cohabit-hcw-stepOne-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-hcw-stepOne-heading-control', array(
		'label' => "Title",
		'section' => "cohabit-hcw-stepOne-section",
		'settings' => "cohabit-hcw-stepOne-heading",
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// Step 1 Text
	$wp_customize->add_setting('cohabit-hcw-stepOne-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-hcw-stepOne-text-control', array(
		'label' => "Content",
		'section' => "cohabit-hcw-stepOne-section",
		'settings' => "cohabit-hcw-stepOne-text",
		'type' => 'textarea',
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));


	// Step 2 Section
	$wp_customize->add_section('cohabit-hcw-stepTwo-section', array(
		'title' => "Step 2",
		'panel' => "cohabit-hcw-steps-panel",
	));

	// Step 2 Image
	$wp_customize->add_setting('cohabit-hcw-stepTwo-image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cohabit-hcw-stepTwo-image-control', array(
		'label' => "Image",
		'section' => "cohabit-hcw-stepTwo-section",
		'settings' => "cohabit-hcw-stepTwo-image",
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// Step 2 Heading
	$wp_customize->add_setting('cohabit-hcw-stepTwo-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-hcw-stepTwo-heading-control', array(
		'label' => "Title",
		'section' => "cohabit-hcw-stepTwo-section",
		'settings' => "cohabit-hcw-stepTwo-heading",
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// Step 2 Text
	$wp_customize->add_setting('cohabit-hcw-stepTwo-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-hcw-stepTwo-text-control', array(
		'label' => "Content",
		'section' => "cohabit-hcw-stepTwo-section",
		'settings' => "cohabit-hcw-stepTwo-text",
		'type' => 'textarea',
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// Step 3 Section
	$wp_customize->add_section('cohabit-hcw-stepThree-section', array(
		'title' => "Step 3",
		'panel' => "cohabit-hcw-steps-panel",
	));

	// Step 3 Image
	$wp_customize->add_setting('cohabit-hcw-stepThree-image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cohabit-hcw-stepThree-image-control', array(
		'label' => "Image",
		'section' => "cohabit-hcw-stepThree-section",
		'settings' => "cohabit-hcw-stepThree-image",
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// Step 3 Heading
	$wp_customize->add_setting('cohabit-hcw-stepThree-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-hcw-stepThree-heading-control', array(
		'label' => "Title",
		'section' => "cohabit-hcw-stepThree-section",
		'settings' => "cohabit-hcw-stepThree-heading",
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// Step 3 Text
	$wp_customize->add_setting('cohabit-hcw-stepThree-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-hcw-stepThree-text-control', array(
		'label' => "Content",
		'section' => "cohabit-hcw-stepThree-section",
		'settings' => "cohabit-hcw-stepThree-text",
		'type' => 'textarea',
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// Step 4 Section
	$wp_customize->add_section('cohabit-hcw-stepFour-section', array(
		'title' => "Step 4",
		'panel' => "cohabit-hcw-steps-panel",
	));

	// Step 4 Image
	$wp_customize->add_setting('cohabit-hcw-stepFour-image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cohabit-hcw-stepFour-image-control', array(
		'label' => "Image",
		'section' => "cohabit-hcw-stepFour-section",
		'settings' => "cohabit-hcw-stepFour-image",
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// Step 4 Heading
	$wp_customize->add_setting('cohabit-hcw-stepFour-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-hcw-stepFour-heading-control', array(
		'label' => "Title",
		'section' => "cohabit-hcw-stepFour-section",
		'settings' => "cohabit-hcw-stepFour-heading",
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// Step 4 Text
	$wp_customize->add_setting('cohabit-hcw-stepFour-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-hcw-stepFour-text-control', array(
		'label' => "Content",
		'section' => "cohabit-hcw-stepFour-section",
		'settings' => "cohabit-hcw-stepFour-text",
		'type' => 'textarea',
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// Step 5 Section
	$wp_customize->add_section('cohabit-hcw-stepFive-section', array(
		'title' => "Extra Step 5",
		'panel' => "cohabit-hcw-steps-panel",
	));

	// Step 5 Heading
	$wp_customize->add_setting('cohabit-hcw-stepFive-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-hcw-stepFive-heading-control', array(
		'label' => "Title",
		'section' => "cohabit-hcw-stepFive-section",
		'settings' => "cohabit-hcw-stepFive-heading",
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// Step 5 Text
	$wp_customize->add_setting('cohabit-hcw-stepFive-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-hcw-stepFive-text-control', array(
		'label' => "Content",
		'section' => "cohabit-hcw-stepFive-section",
		'settings' => "cohabit-hcw-stepFive-text",
		'type' => 'textarea',
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	// -------------- FAQ Section --------------
	$wp_customize->add_section('cohabit-faq-section', array(
		'title' => "FAQ (Cohabit)"
	));

	// Title
	$wp_customize->add_setting('cohabit-faq-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-faq-heading-control', array(
		'label' => "Title",
		'section' => "cohabit-faq-section",
		'settings' => "cohabit-faq-heading",
		'active_callback' => function(){
			return is_page('How Cohabit Works');
		}
	)));

	////////////////////  Contact Page  ////////////////////
	$wp_customize->add_panel('cohabit-contact-page-panel', array(
		'title' => "Contact (Cohabit)",
	));
	
	// -------------- Contact form Section --------------
	$wp_customize->add_section('cohabit-contact-form-section', array(
		'title' => "Contact Form",
		'panel' => "cohabit-contact-page-panel"
	));

	// Contact form title
	$wp_customize->add_setting('cohabit-contact-form-heading');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-contact-form-heading-control', array(
		'label' => "Contact form Title",
		'section' => "cohabit-contact-form-section",
		'settings' => "cohabit-contact-form-heading",
		'active_callback' => function(){
			return is_page('Contact');
		}
	)));

	// Contact form text
	$wp_customize->add_setting('cohabit-contact-form-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-contact-form-text-control', array(
		'label' => "Contact form Text",
		'section' => "cohabit-contact-form-section",
		'settings' => "cohabit-contact-form-text",
		'active_callback' => function(){
			return is_page('Contact');
		}
	)));

	// Contact form

	$wp_customize->add_setting('cohabit-contact-form-id');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-contact-form-id-control', array(
		'label' => "Contact form ID",
		'section' => "cohabit-contact-form-section",
		'settings' => "cohabit-contact-form-id",
		'active_callback' => function(){
			return is_page('Contact');
		}
	)));

	// -------------- Contact Image Section --------------
	$wp_customize->add_section('cohabit-contact-image-section', array(
		'title' => "Contact Image",
		'panel' => "cohabit-contact-page-panel"
	));

	$wp_customize->add_setting('cohabit-contact-image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cohabit-contact-image-control', array(
		'label' => 'Image',
		'section' => 'cohabit-contact-image-section',
		'settings' => 'cohabit-contact-image',
		'active_callback' => function(){
			return is_page('Contact');
		}
	)));

	// -------------- Contact Information Section --------------
	$wp_customize->add_section('cohabit-contact-info-section', array(
		'title' => "Contact Information",
		'panel' => "cohabit-contact-page-panel"
	));

	// Email
	$wp_customize->add_setting('cohabit-contact-info-email');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-contact-info-email-control', array(
		'label' => "Email",
		'section' => "cohabit-contact-info-section",
		'settings' => "cohabit-contact-info-email",
		'active_callback' => function(){
			return is_page('Contact');
		}
	)));

	// Email icon
	$wp_customize->add_setting('cohabit-contact-info-email-icon');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-contact-info-email-icon-control', array(
		'label' => "Email Icon",
		'section' => "cohabit-contact-info-section",
		'settings' => "cohabit-contact-info-email-icon",
		'active_callback' => function(){
			return is_page('Contact');
		}
	)));

	// Phone number
	$wp_customize->add_setting('cohabit-contact-info-phone');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-contact-info-phone-control', array(
		'label' => "Phone Number",
		'section' => "cohabit-contact-info-section",
		'settings' => "cohabit-contact-info-phone",
		'active_callback' => function(){
			return is_page('Contact');
		}
	)));

	// Phone Number Icon
	$wp_customize->add_setting('cohabit-contact-info-phone-icon');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-contact-info-phone-icon-control', array(
		'label' => "Phone Number Icon",
		'section' => "cohabit-contact-info-section",
		'settings' => "cohabit-contact-info-phone-icon",
		'active_callback' => function(){
			return is_page('Contact');
		}
	)));

	// Information Text
	$wp_customize->add_setting('cohabit-contact-info-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-contact-info-text-control', array(
		'label' => "Contact info Text",
		'section' => "cohabit-contact-info-section",
		'settings' => "cohabit-contact-info-text",
		'active_callback' => function(){
			return is_page('Contact');
		}
	)));

	////////////////////  Footer  ////////////////////

	$wp_customize->add_panel('cohabit-footer-panel', array(
		'title' => "Footer (Cohabit)",
	));

	// -------------- Copyright text Section --------------
	$wp_customize->add_section('cohabit-footer-copyright-text-section', array(
		'title' => "Copyright Text",
		'panel' => "cohabit-footer-panel"
	));

	// Copyright text
	$wp_customize->add_setting('cohabit-copyright-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-copyright-text-control', array(
		'label' => "Copyright Text",
		'section' => "cohabit-footer-copyright-text-section",
		'settings' => "cohabit-copyright-text",
	)));

	// -------------- Social media links Section --------------
	$wp_customize->add_section('cohabit-social-media-links-section', array(
		'title' => "Social media links",
		'panel' => "cohabit-footer-panel"
	));

	// Social media link 1
	$wp_customize->add_setting('cohabit-social-media-linkOne-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-social-media-linkOne-text-control', array(
		'label' => "Social media Link 1",
		'section' => "cohabit-social-media-links-section",
		'settings' => "cohabit-social-media-linkOne-text",
	)));

	// Social media icon 1
	$wp_customize->add_setting('cohabit-social-media-iconOne-icon');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-social-media-iconOne-text-control', array(
		'label' => "Social media Icon 1",
		'section' => "cohabit-social-media-links-section",
		'settings' => "cohabit-social-media-iconOne-icon",
	)));

	// Social media link 2
	$wp_customize->add_setting('cohabit-social-media-linkTwo-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-social-media-linkTwo-text-control', array(
		'label' => "Social media Link 2",
		'section' => "cohabit-social-media-links-section",
		'settings' => "cohabit-social-media-linkTwo-text",
	)));

	// Social media icon 2
	$wp_customize->add_setting('cohabit-social-media-iconTwo-icon');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-social-media-iconTwo-text-control', array(
		'label' => "Social media Icon 2",
		'section' => "cohabit-social-media-links-section",
		'settings' => "cohabit-social-media-iconTwo-icon",
	)));

	// Social media link 3
	$wp_customize->add_setting('cohabit-social-media-linkThree-text');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-social-media-linkThree-text-control', array(
		'label' => "Social media Link 3",
		'section' => "cohabit-social-media-links-section",
		'settings' => "cohabit-social-media-linkThree-text",
	)));

	// Social media icon 3
	$wp_customize->add_setting('cohabit-social-media-iconThree-icon');

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-social-media-iconThree-text-control', array(
		'label' => "Social media Icon 3",
		'section' => "cohabit-social-media-links-section",
		'settings' => "cohabit-social-media-iconThree-icon",
	)));

}

add_action('customize_register', 'cohabit_edit');