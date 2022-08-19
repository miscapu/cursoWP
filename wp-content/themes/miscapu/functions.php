<?php

function miscapu_load_scripts()
{
	// wp_get_theme()->get('Version')
	wp_enqueue_style( 'miscapu-style', get_stylesheet_uri(), array(), filemtime(
		get_template_directory() .'/style.css' ), 'all' );
	// Add Google fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );

	// Add JS
    // get_template_directory_uri: identificador da página que leva até a página do tema
    wp_enqueue_script( 'dropdown', get_template_directory_uri().'/js/dropdown.js', array(), '1.0', true  );
}
add_action( 'wp_enqueue_scripts', 'miscapu_load_scripts' );


/**
 * @function miscapu_wpDev
 *
 */
function miscapu_wpdev()
{
	/**
	 * Register menu in our theme
	 * key=>value
	 */
	register_nav_menus(
		array(
			'miscapu_main_menu'     =>  'Main Menu',
			'miscapu_footer_menu'   =>  'Footer Menu',
		)
	);

	/**
	 * Add custom header
	 * @param array $args
	 * @var array $args
	 */
//	$args   =   array(
//		'width'     =>  1920,
//		'height'    =>  225,
//	);
	add_theme_support( 'custom-header', array(
		'height'    =>  225,
		'width'     =>  1920
	) );

}

/**
 * hook after_setup_theme
 */
add_action( 'after_setup_theme',  'miscapu_wpdev', 0 );