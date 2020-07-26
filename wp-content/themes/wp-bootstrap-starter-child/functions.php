<?php
	 add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_child_enqueue_styles' );
	 function wp_bootstrap_starter_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 		  }

	/**
	 * Filter the except length to 20 words.
	 */
	function wpdocs_custom_excerpt_length( $length ) {
	    return 20;
	}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );




		// register a mobile menu
	function wdm_register_mobile_menu() {
	    add_theme_support( 'nav-menus' );
	    register_nav_menus( array('mobile-menu' => __( 'Mobile Menu', 'wdm' )) );
	}
	add_action( 'init', 'wdm_register_mobile_menu' );
	// load the JS file
	function wdm_mm_toggle_scripts() {
	    wp_enqueue_script( 'wdm-mm-toggle', get_stylesheet_directory_uri() . '/js/mobile-menu-toggle.js', array('jquery') );
	}
	add_action( 'wp_enqueue_scripts', 'wdm_mm_toggle_scripts' );

 ?>
