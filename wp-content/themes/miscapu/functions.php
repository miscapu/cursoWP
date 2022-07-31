<?php

function miscapu_load_scripts()
{
	wp_enqueue_style( 'miscapu-style', get_stylesheet_uri(), array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'miscapu_load_scripts' );