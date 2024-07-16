<?php

function cohabit_homepage_customize($wp_customize){
    ////////////////////  Home Page  ////////////////////

	// -------------- Intro Text Section --------------
	$wp_customize->add_section('cohabit-homePage-intro-section', array(
		'title' => "Intro Section (Cohabit)",
		'priority' => 160,
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
		'priority' => 165,
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
		'priority' => 170,
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
		'priority' => 175,
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
}

add_action('customize_register', 'cohabit_homepage_customize');