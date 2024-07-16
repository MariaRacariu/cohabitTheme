<?php 

function cohabit_how_cohabit_works_customize($wp_customize){
    ////////////////////  How Cohabit Works Page  ////////////////////

	// -------------- Hero Section --------------
	$wp_customize->add_section('cohabit-hcw-hero-section', array(
		'title' => "Hero (Cohabit)",
		'priority' => 160,
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
		'priority' => 165,
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
		'title' => "FAQ (Cohabit)",
		'priority' => 170,
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
}

add_action('customize_register', 'cohabit_how_cohabit_works_customize');