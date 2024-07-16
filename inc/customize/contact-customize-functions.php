<?php

function cohabit_contact_customize($wp_customize){
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
}

add_action('customize_register', 'cohabit_contact_customize');