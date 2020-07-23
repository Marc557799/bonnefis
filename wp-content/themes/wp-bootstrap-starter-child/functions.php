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
 ?>
