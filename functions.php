<?php

if (!defined('ABSPATH')) {
    exit;
}


function lumo_setup() {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 74,
			'width'       => 184,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Menus
	register_nav_menus( array(
		'header_menu'   => 'Header menu',
		'footer_menu' => 'Footer menu',
	));
}
add_action( 'after_setup_theme', 'lumo_setup' );

function lumo_enqueue_scripts() {
    wp_enqueue_style('lumo-theme-style', get_stylesheet_uri()); 
    wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() . '/dist/css/main.css',  array(), '1.0' );
    wp_enqueue_script('lumo-scripts', get_template_directory_uri() . '/dist/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'lumo_enqueue_scripts');