<?php
/* add stylesheets */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); // id, link to css
	wp_enqueue_style( 'Bootstrap CSS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' ); 
	wp_register_script('Bootstrap js','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js');
	wp_enqueue_style( 'sass Screen', get_stylesheet_directory_uri() . '/stylesheets/screen.css' );
	wp_enqueue_style( 'sass Print', get_stylesheet_directory_uri() . '/stylesheets/print.css' ); 
} 
// no whitespace after the last line of php in this file.
?>
