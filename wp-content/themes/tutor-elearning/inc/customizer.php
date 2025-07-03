<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage tutor-elearning
 * @since tutor-elearning 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tutor_elearning_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Tutor_Elearning_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Tutor Elearning Pro', 'tutor-elearning' ),
		'button_text'      => __( 'Upgrade Pro', 'tutor-elearning' ),
		'url'              => 'https://www.wpradiant.net/products/tutor-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'tutor_elearning_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function tutor_elearning_custom_control_scripts() {
	wp_enqueue_script( 'tutor-elearning-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'tutor-elearning-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'tutor_elearning_custom_control_scripts' );