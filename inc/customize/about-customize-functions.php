<?php

function cohabit_about_customize($wp_customize){
    ////////////////////  About  ////////////////////
    $wp_customize->add_panel('cohabit-intro-post-panel', array(
        'title' => "Intro Post (Cohabit)",
        'priority' => 160,
    ));

    // -------------- Intro Text Section  --------------
    $wp_customize->add_section('cohabit-intro-post-text-section', array(
        'title' => "Intro Post Title & Text",
        'panel' => "cohabit-intro-post-panel"
    ));

    // Title & Text
    $wp_customize->add_setting('cohabit-intro-post-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-intro-post-title-control', array(
        'label' => "Title",
        'section' => "cohabit-intro-post-text-section",
        'settings' => "cohabit-intro-post-title",
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    $wp_customize->add_setting('cohabit-intro-post-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-intro-post-text-control', array(
        'label' => "Text",
        'section' => "cohabit-intro-post-text-section",
        'settings' => "cohabit-intro-post-text",
        'type' => 'textarea',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // -------------- Intro Button Section  --------------
    $wp_customize->add_section('cohabit-intro-post-button-section', array(
        'title' => "Intro Post Button",
        'panel' => "cohabit-intro-post-panel"
    ));

    // Button Title
    $wp_customize->add_setting('cohabit-intro-post-button-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-intro-post-button-title-control', array(
        'label' => "Button title",
        'section' => "cohabit-intro-post-button-section",
        'settings' => "cohabit-intro-post-button-title",
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Button Link
    $wp_customize->add_setting('cohabit-intro-post-button-link');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-intro-post-button-link-control', array(
        'label'     => "Button Link",
        'section'   => "cohabit-intro-post-button-section",
        'settings'  => "cohabit-intro-post-button-link",
        'type'      => 'textarea',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // -------------- Intro image Section  --------------
    $wp_customize->add_section('cohabit-intro-post-image-section', array(
        'title' => "Intro Post Image",
        'panel' => "cohabit-intro-post-panel"
    ));

    // Image
    $wp_customize->add_setting('cohabit-intro-post-image', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cohabit-intro-post-image-control', array(
        'label' => 'Image',
        'section' => 'cohabit-intro-post-image-section',
        'settings' => 'cohabit-intro-post-image',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // -------------- Drop down 1 Section  --------------
    $wp_customize->add_section('cohabit-intro-post-dropdownOne-section', array(
        'title' => "Intro Post Dropdown 1",
        'panel' => "cohabit-intro-post-panel"
    ));

    // Title
    $wp_customize->add_setting('cohabit-intro-post-dropdownOne-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-intro-post-dropdownOne-title-control', array(
        'label' => "Dropdown Title",
        'section' => "cohabit-intro-post-dropdownOne-section",
        'settings' => "cohabit-intro-post-dropdownOne-title",
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Content
    $wp_customize->add_setting('cohabit-intro-post-dropdownOne-content');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-intro-post-dropdownOne-content-control', array(
        'label' => "Dropdown Content",
        'section' => "cohabit-intro-post-dropdownOne-section",
        'settings' => "cohabit-intro-post-dropdownOne-content",
        'type' => 'textarea',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // -------------- Drop down 2 Section  --------------
    $wp_customize->add_section('cohabit-intro-post-dropdownTwo-section', array(
        'title' => "Intro Post Dropdown 2",
        'panel' => "cohabit-intro-post-panel"
    ));

    // Title
    $wp_customize->add_setting('cohabit-intro-post-dropdownTwo-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-intro-post-dropdownTwo-title-control', array(
        'label' => "Dropdown Title",
        'section' => "cohabit-intro-post-dropdownTwo-section",
        'settings' => "cohabit-intro-post-dropdownTwo-title",
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Content
    $wp_customize->add_setting('cohabit-intro-post-dropdownTwo-content');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-intro-post-dropdownTwo-content-control', array(
        'label' => "Dropdown Content",
        'section' => "cohabit-intro-post-dropdownTwo-section",
        'settings' => "cohabit-intro-post-dropdownTwo-content",
        'type' => 'textarea',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // -------------- About Section Report --------------
    $wp_customize->add_panel('cohabit-report-panel', array(
        'title' => "Sustainability Report (Cohabit)",
        'priority' => 165,
    ));

    // Title & Content Section
    $wp_customize->add_section('cohabit-report-content-section', array(
        'title' => "Title & Content",
        'panel' => "cohabit-report-panel"
    ));

    // Title
    $wp_customize->add_setting('cohabit-report-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-title-control', array(
        'label' => "Title",
        'section' => "cohabit-report-content-section",
        'settings' => "cohabit-report-title",
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Content
    $wp_customize->add_setting('cohabit-report-content');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-content-control', array(
        'label' => "Content",
        'section' => "cohabit-report-content-section",
        'settings' => "cohabit-report-content",
        'type' => 'textarea',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Button Section
    $wp_customize->add_section('cohabit-report-button-section', array(
        'title' => "Button",
        'panel' => "cohabit-report-panel"
    ));

    // Button Title
    $wp_customize->add_setting('cohabit-report-button-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-button-title-control', array(
        'label' => "Button Title",
        'section' => "cohabit-report-button-section",
        'settings' => "cohabit-report-button-title",
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Button Link
    $wp_customize->add_setting('cohabit-report-button-link');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-button-link-control', array(
        'label' => "Button Link",
        'section' => "cohabit-report-button-section",
        'settings' => "cohabit-report-button-link",
        'type' => 'textarea',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Image Section
    $wp_customize->add_section('cohabit-report-image-section', array(
        'title' => "Image",
        'panel' => "cohabit-report-panel"
    ));

    // Image
    $wp_customize->add_setting('cohabit-report-image', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cohabit-report-image-control', array(
        'label' => 'Image',
        'section' => 'cohabit-report-image-section',
        'settings' => 'cohabit-report-image',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // History Title
    $wp_customize->add_section('cohabit-report-title-section', array(
        'title' => "History Title",
        'panel' => "cohabit-report-panel"
    ));

    // Title
    $wp_customize->add_setting('cohabit-report-history-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-title-control', array(
        'label' => "History Title",
        'section' => "cohabit-report-title-section",
        'settings' => "cohabit-report-history-title",
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Slot 1
    $wp_customize->add_section('cohabit-report-slotOne-section', array(
        'title' => "Report History Slot 1",
        'panel' => "cohabit-report-panel"
    ));

    // Slot 1 Title
    $wp_customize->add_setting('cohabit-report-slotOne-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-slotOne-title-control', array(
        'label' => "Title",
        'section' => "cohabit-report-slotOne-section",
        'settings' => "cohabit-report-slotOne-title",
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Slot 1 Link
    $wp_customize->add_setting('cohabit-report-slotOne-link');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-slotOne-link-control', array(
        'label' => "Link",
        'section' => "cohabit-report-slotOne-section",
        'settings' => "cohabit-report-slotOne-link",
        'type' => 'textarea',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Slot 1 Display
    $wp_customize->add_setting('cohabit-report-slotOne-display', array(
        'default' => 'No'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-slotOne-display-control', array(
        'label' => "Display section?",
        'section' => "cohabit-report-slotOne-section",
        'settings' => "cohabit-report-slotOne-display",
        'type' => 'select',
        'choices' => array('No' => 'No', 'Yes' => 'Yes'),
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Slot 2
    $wp_customize->add_section('cohabit-report-slotTwo-section', array(
        'title' => "Report History Slot 2",
        'panel' => "cohabit-report-panel"
    ));

    // Slot 2 Title
    $wp_customize->add_setting('cohabit-report-slotTwo-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-slotTwo-title-control', array(
        'label' => "Title",
        'section' => "cohabit-report-slotTwo-section",
        'settings' => "cohabit-report-slotTwo-title",
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Slot 2 Link
    $wp_customize->add_setting('cohabit-report-slotTwo-link');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-slotTwo-link-control', array(
        'label' => "Link",
        'section' => "cohabit-report-slotTwo-section",
        'settings' => "cohabit-report-slotTwo-link",
        'type' => 'textarea',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Slot 2 Display
    $wp_customize->add_setting('cohabit-report-slotTwo-display', array(
        'default' => 'No'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-slotTwo-display-control', array(
        'label' => "Display section?",
        'section' => "cohabit-report-slotTwo-section",
        'settings' => "cohabit-report-slotTwo-display",
        'type' => 'select',
        'choices' => array('No' => 'No', 'Yes' => 'Yes'),
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Slot 3
    $wp_customize->add_section('cohabit-report-slotThree-section', array(
        'title' => "Report History Slot 3",
        'panel' => "cohabit-report-panel"
    ));

    // Slot 3 Title
    $wp_customize->add_setting('cohabit-report-slotThree-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-slotThree-title-control', array(
        'label' => "Title",
        'section' => "cohabit-report-slotThree-section",
        'settings' => "cohabit-report-slotThree-title",
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Slot 3 Link
    $wp_customize->add_setting('cohabit-report-slotThree-link');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-slotThree-link-control', array(
        'label' => "Link",
        'section' => "cohabit-report-slotThree-section",
        'settings' => "cohabit-report-slotThree-link",
        'type' => 'textarea',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Slot 3 Display
    $wp_customize->add_setting('cohabit-report-slotThree-display', array(
        'default' => 'No'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-slotThree-display-control', array(
        'label' => "Display section?",
        'section' => "cohabit-report-slotThree-section",
        'settings' => "cohabit-report-slotThree-display",
        'type' => 'select',
        'choices' => array('No' => 'No', 'Yes' => 'Yes'),
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Slot 4
    $wp_customize->add_section('cohabit-report-slotFour-section', array(
        'title' => "Report History Slot 4",
        'panel' => "cohabit-report-panel"
    ));

    // Slot 4 Title
    $wp_customize->add_setting('cohabit-report-slotFour-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-slotFour-title-control', array(
        'label' => "Title",
        'section' => "cohabit-report-slotFour-section",
        'settings' => "cohabit-report-slotFour-title",
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Slot 4 Link
    $wp_customize->add_setting('cohabit-report-slotFour-link');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-slotFour-link-control', array(
        'label' => "Link",
        'section' => "cohabit-report-slotFour-section",
        'settings' => "cohabit-report-slotFour-link",
        'type' => 'textarea',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Slot 4 Display
    $wp_customize->add_setting('cohabit-report-slotFour-display', array(
        'default' => 'No'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-report-slotFour-display-control', array(
        'label' => "Display section?",
        'section' => "cohabit-report-slotFour-section",
        'settings' => "cohabit-report-slotFour-display",
        'type' => 'select',
        'choices' => array('No' => 'No', 'Yes' => 'Yes'),
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // -------------- Timeline slider Section --------------
    $wp_customize->add_section('cohabit-timeline-slider-section', array(
        'title' => "Timeline Slider (Cohabit)",
        'priority' => 170,
    ));

    // Title
    $wp_customize->add_setting('cohabit-timeline-slider-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-timeline-slider-title-control', array(
        'label' => "Title",
        'section' => "cohabit-timeline-slider-section",
        'settings' => "cohabit-timeline-slider-title",
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // -------------- Our Story Section --------------
    $wp_customize->add_section('cohabit-story-section', array(
        'title' => "Cohabit Story (Cohabit)",
        'priority' => 175,
    ));

    // Title
    $wp_customize->add_setting('cohabit-story-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-story-title-control', array(
        'label' => "Title",
        'section' => "cohabit-story-section",
        'settings' => "cohabit-story-title",
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Image
    $wp_customize->add_setting('cohabit-story-image', array(
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cohabit-story-image-control', array(
        'label' => 'Image',
        'section' => 'cohabit-story-section',
        'settings' => 'cohabit-story-image',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Image caption
    $wp_customize->add_setting('cohabit-story-image-caption');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-story-image-caption-control', array(
        'label' => "Image Caption",
        'section' => "cohabit-story-section",
        'settings' => "cohabit-story-image-caption",
        'type' => 'textarea',
        'active_callback' => function(){
            return is_page('About');
        }
    )));

    // Content
    $wp_customize->add_setting('cohabit-story-content');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cohabit-story-content-control', array(
        'label' => "Content",
        'section' => "cohabit-story-section",
        'settings' => "cohabit-story-content",
        'type' => 'textarea',
        'active_callback' => function(){
            return is_page('About');
        }
    )));
}

add_action('customize_register', 'cohabit_about_customize');