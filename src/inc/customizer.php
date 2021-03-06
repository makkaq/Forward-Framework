<?php
/**
 * Forward Theme Customizer
 *
 * @package Forward
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function forward_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	// Optionally disable individual customizer options.
	//
	// $wp_customize->remove_control('blogdescription');

	// Optionally disable customizer sections.
	//
	$wp_customize->remove_section('background_image');
	$wp_customize->remove_section('colors');
}
add_action( 'customize_register', 'forward_customize_register' );