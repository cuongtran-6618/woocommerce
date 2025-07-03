<?php
/**
 * Tutor Elearning functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tutor-elearning
 * @since tutor-elearning 1.0
 */

if ( ! function_exists( 'tutor_elearning_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since tutor-elearning 1.0
	 *
	 * @return void
	 */
	function tutor_elearning_support() {

		load_theme_textdomain( 'tutor-elearning', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'tutor_elearning_support' );

if ( ! function_exists( 'tutor_elearning_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since tutor-elearning 1.0
	 *
	 * @return void
	 */
	function tutor_elearning_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'tutor-elearning-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style( 
			'tutor-elearning-animate-css',
			esc_url(get_template_directory_uri()).'/assets/css/animate.css' 
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'tutor-elearning-style' );

		wp_enqueue_style( 'dashicons' );

		wp_style_add_data( 'tutor-elearning-style', 'rtl', 'replace' );

		wp_enqueue_style('tutor-elearning-swiper-css',
		esc_url(get_template_directory_uri()) . '/assets/css/swiper-bundle.css',
		array()
		);
	}

endif;

/* Enqueue Custom Js */
function tutor_elearning_scripts() {

	wp_enqueue_script( 
		'tutor-elearning-custom', esc_url(get_template_directory_uri()) . '/assets/js/custom.js', 
		array('jquery') 
	);

	wp_enqueue_script( 
		'tutor-elearning-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', 
		array('jquery') 
	);

	wp_enqueue_script(
        'tutor-elearning-scroll-to-top', 
        esc_url(get_template_directory_uri()) . '/assets/js/scroll-to-top.js', 
        array(), 
        null, 
        true // Load in footer
    );

    wp_enqueue_script(
		'tutor-elearning-swiper-js',
		esc_url(get_template_directory_uri()) . '/assets/js/swiper-bundle.js',
		array(),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'tutor_elearning_scripts' );

add_action( 'wp_enqueue_scripts', 'tutor_elearning_styles' );

/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'appearance_page_tutor-elearning') return;

    wp_enqueue_script('admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', ['jquery'], null, true);
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_wordclever_nonce'), // Match this with PHP nonce check
        'redirectUrl' => admin_url('themes.php?page=tutor-elearning'),
    ]);
});

add_action('wp_ajax_check_wordclever_activation', function () {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
    $tutor_elearning_plugin_file = 'wordclever-ai-content-writer/wordclever.php';

    if (is_plugin_active($tutor_elearning_plugin_file)) {
        wp_send_json_success(['active' => true]);
    } else {
        wp_send_json_success(['active' => false]);
    }
});
add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );

function tutor_elearning_theme_setting() {

	// Add block patterns
	require get_template_directory() . '/inc/block-pattern.php';

	// Add block Style
	require get_template_directory() . '/inc/block-style.php';

	// TGM
	require get_template_directory() . '/inc/tgm/plugin-activation.php';

	// Add Customizer
	require get_template_directory() . '/inc/customizer.php';

	// Get Started
	require get_template_directory() . '/get-started/getstart.php';

	// Notice
	require get_template_directory() . '/get-started/notice.php';
}	
add_action('after_setup_theme', 'tutor_elearning_theme_setting');	