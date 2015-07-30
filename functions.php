<?php

if ( ! function_exists( 'programpal_setup' ) ) :
	function programpal_setup() {

		// Enable support for Post Thumbnails on posts and pages
		add_theme_support( 'post-thumbnails' );

		// Register menus
		register_nav_menus( array(
			'primary' => __( 'Primary Navigation', 'programpal' )
		) );

		// Switch default element to use HTML5
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );

		// Enable title tags
		add_theme_support( 'title-tag' );

		wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/css/editor.css');

	}
endif; // programpal_setup
add_action( 'after_setup_theme', 'programpal_setup' );

// Set up custom styles for editor
require_once(TEMPLATEPATH . '/functions/editor-styles.php');

?>
