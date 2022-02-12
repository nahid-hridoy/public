<?php
function authenticatecon_bootstrapping() {
load_theme_textdomain("authenticatecon");
add_theme_support( 'post-thumbnails' );
add_theme_support("title-tag");
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
}
add_action("after_setup_theme","authenticatecon_bootstrapping");


function authenticatecon_assets() {

    wp_enqueue_style( 'authenticatecon-responsive-main', get_template_directory_uri() . '/assets/css/responsive.css',false,'','all');
    wp_enqueue_style( 'authenticatecon-style', get_stylesheet_uri() );

    wp_enqueue_script( 'authenticatecon-modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array ( 'jquery' ), NULL, true);
    wp_enqueue_script( 'authenticatecon-main-main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), NULL , true);

}

add_action( 'wp_enqueue_scripts', 'authenticatecon_assets');
