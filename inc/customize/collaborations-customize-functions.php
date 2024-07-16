<?php
function cohabit_collaborations_customize($wp_customize){
    // -------------- Intro Text Section --------------
	$wp_customize->add_section('cohabit-collaborations-intro-section', array(
		'title' => "Intro Section (Cohabit)",
		'priority' => 160,
	));

    // Headline
    $wp_customize->add_setting('cohabit-collaborations-intro-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-collaborations-intro-title-control', array(
        'label' => "Headline",
        'section' => "cohabit-collaborations-intro-section",
        'settings' => "cohabit-collaborations-intro-title",
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // Under Text
    $wp_customize->add_setting('cohabit-collaborations-intro-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-collaborations-intro-text-control', array(
        'label' => "Text",
        'section' => "cohabit-collaborations-intro-section",
        'settings' => "cohabit-collaborations-intro-text",
        'type' => 'textarea',
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // Button text
    $wp_customize->add_setting('cohabit-collaborations-button-name');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-collaborations-button-name-control', array(
        'label' => "Button Name",
        'section' => "cohabit-collaborations-intro-section",
        'settings' => "cohabit-collaborations-button-name",
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // Button Link
    $wp_customize->add_setting('cohabit-collaborations-button-link');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-collaborations-button-link-control', array(
        'label' => "Button Link",
        'section' => "cohabit-collaborations-intro-section",
        'settings' => "cohabit-collaborations-button-link",
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // -------------- Usps Section --------------
    $wp_customize->add_panel('cohabit-collaborations-usps-panel', array(
        'title' => "USPs (Cohabit)",
        'priority' => 165,
    ));

    // USP 1 Section
    $wp_customize->add_section('cohabit-usp-1-section', array(
        'title' => "USP One",
        'panel' => "cohabit-collaborations-usps-panel"
    ));

    // USP 1 Image
    $wp_customize->add_setting('cohabit-usp-1-image', array(
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cohabit-usp-1-image-control', array(
        'label' => 'Image',
        'section' => 'cohabit-usp-1-section',
        'settings' => 'cohabit-usp-1-image',
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // USP 1 Title
    $wp_customize->add_setting('cohabit-usp-1-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-usp-1-title-control', array(
        'label' => "Title",
        'section' => "cohabit-usp-1-section",
        'settings' => "cohabit-usp-1-title",
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // USP 1 Text
    $wp_customize->add_setting('cohabit-usp-1-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-usp-1-text-control', array(
        'label' => "Text",
        'section' => "cohabit-usp-1-section",
        'settings' => "cohabit-usp-1-text",
        'type' => 'textarea',
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // USP 2 Section
    $wp_customize->add_section('cohabit-usp-2-section', array(
        'title' => "USP Two",
        'panel' => "cohabit-collaborations-usps-panel"
    ));

    // USP 2 Image
    $wp_customize->add_setting('cohabit-usp-2-image', array(
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cohabit-usp-2-image-control', array(
        'label' => 'Image',
        'section' => 'cohabit-usp-2-section',
        'settings' => 'cohabit-usp-2-image',
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // USP 2 Title
    $wp_customize->add_setting('cohabit-usp-2-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-usp-2-title-control', array(
        'label' => "Title",
        'section' => "cohabit-usp-2-section",
        'settings' => "cohabit-usp-2-title",
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // USP 2 Text
    $wp_customize->add_setting('cohabit-usp-2-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-usp-2-text-control', array(
        'label' => "Text",
        'section' => "cohabit-usp-2-section",
        'settings' => "cohabit-usp-2-text",
        'type' => 'textarea',
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // USP 3 Section
    $wp_customize->add_section('cohabit-usp-3-section', array(
        'title' => "USP Three",
        'panel' => "cohabit-collaborations-usps-panel"
    ));

    // USP 3 Image
    $wp_customize->add_setting('cohabit-usp-3-image', array(
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cohabit-usp-3-image-control', array(
        'label' => 'Image',
        'section' => 'cohabit-usp-3-section',
        'settings' => 'cohabit-usp-3-image',
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // USP 3 Title
    $wp_customize->add_setting('cohabit-usp-3-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-usp-3-title-control', array(
        'label' => "Title",
        'section' => "cohabit-usp-3-section",
        'settings' => "cohabit-usp-3-title",
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // USP 3 Text
    $wp_customize->add_setting('cohabit-usp-3-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-usp-3-text-control', array(
        'label' => "Text",
        'section' => "cohabit-usp-3-section",
        'settings' => "cohabit-usp-3-text",
        'type' => 'textarea',
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // -------------- Company review Section --------------
    $wp_customize->add_section('cohabit-company-review-section', array(
        'title' => "Company review (Cohabit)",
        'priority' => 170,
    ));

    // Image
    $wp_customize->add_setting('cohabit-company-review-image', array(
        'transport' => 'refresh',
    ));
        
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cohabit-company-review-image-control', array(
        'label' => 'Image',
        'section' => 'cohabit-company-review-section',
        'settings' => 'cohabit-company-review-image',
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // Quote
    $wp_customize->add_setting('cohabit-company-review-quote');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-company-review-quote-control', array(
        'label' => "Quote",
        'section' => "cohabit-company-review-section",
        'settings' => "cohabit-company-review-quote",
        'type' => 'textarea',
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // Position
    $wp_customize->add_setting('cohabit-company-review-position');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-company-review-position-control', array(
        'label' => "Position text",
        'section' => "cohabit-company-review-section",
        'settings' => "cohabit-company-review-position",
        'type' => 'textarea',
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // Company Logo
    $wp_customize->add_setting('cohabit-company-review-image-logo', array(
        'transport' => 'refresh',
    ));
        
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cohabit-company-review-image-logo-control', array(
        'label' => 'Logo Image',
        'section' => 'cohabit-company-review-section',
        'settings' => 'cohabit-company-review-image-logo',
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));

    // -------------- News Section --------------
    $wp_customize->add_section('cohabit-spotlight-section', array(
        'title' => "News posts (Cohabit)",
        'priority' => 175,
    ));

    // Title
    $wp_customize->add_setting('cohabit-spotlight-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-spotlight-title-control', array(
        'label' => "Title",
        'section' => "cohabit-spotlight-section",
        'settings' => "cohabit-spotlight-title",
        'active_callback' => function(){
                return is_page('Collaborations');
        }
    )));
}

add_action('customize_register', 'cohabit_collaborations_customize');