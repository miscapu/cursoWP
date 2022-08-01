<?php

function miscapu_load_scripts()
{
	// wp_get_theme()->get('Version')
	wp_enqueue_style( 'miscapu-style', get_stylesheet_uri(), array(), filemtime(
		get_template_directory() .'/style.css' ), 'all' );
	// Add Google fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'miscapu_load_scripts' );