<?php

function miscapu_load_scripts()
{
	// wp_get_theme()->get('Version')
	wp_enqueue_style( 'miscapu-style', get_stylesheet_uri(), array(), filemtime(
		get_template_directory() .'/style.css' ), 'all' );
}
add_action( 'wp_enqueue_scripts', 'miscapu_load_scripts' );