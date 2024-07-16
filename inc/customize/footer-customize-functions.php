<?php

function cohabit_footer_customize($wp_customize){
    ////////////////////  Footer  ////////////////////

	$wp_customize->add_panel('cohabit-footer-panel', array(
		'title' => "Footer (Cohabit)",
        'priority' => 199,
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

add_action('customize_register', 'cohabit_footer_customize');