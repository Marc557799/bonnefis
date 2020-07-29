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


	if ( ! function_exists( 'wp_bootstrap_starter_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function wp_bootstrap_starter_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
	        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		$posted_on = sprintf(
			esc_html_x( 'Publié le %s', 'post date', 'wp-bootstrap-starter' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$byline = sprintf(
			esc_html_x( 'par %s', 'post author', 'wp-bootstrap-starter' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span> | <span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	    if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
	        echo ' | <span class="comments-link"><i class="fa fa-comments" aria-hidden="true"></i> ';
	        /* translators: %s: post title */
	        comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'wp-bootstrap-starter' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
	        echo '</span>';
	    }

	}
	endif;

 ?>
