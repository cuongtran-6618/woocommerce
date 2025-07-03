<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage tutor-elearning
 * @since tutor-elearning 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since tutor-elearning 1.0
	 *
	 * @return void
	 */
	function tutor_elearning_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'tutor-elearning-border',
				'label' => esc_html__( 'Borders', 'tutor-elearning' ),
			)
		);

		
	}
	add_action( 'init', 'tutor_elearning_register_block_styles' );
}