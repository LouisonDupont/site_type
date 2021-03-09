<?php 

// fonctions 

function theme_scripts() {
	// CSS
	wp_register_style(
		'style',
		get_template_directory_uri() . '/style.css', // source
		array(), // deps = dépendances sous forme de tableau
		'1.0', // la version 
		false // in footer
	);
	wp_enqueue_style( 'style' );
	
	// JS
	wp_register_script(
		'main-js',
		get_template_directory_uri() . '/src/js/main.js',
		array(),
		'1.0',
		true
	);
	wp_enqueue_script( 'main-js' );
	
}
add_action('wp_enqueue_scripts', 'theme_scripts');

?>