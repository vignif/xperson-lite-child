<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
?>


<?php
add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );
/**
 * Register and load font awesome CSS files using a CDN.
 */
function prefix_enqueue_awesome() {
	wp_enqueue_style(
		'font-awesome-5',
		'https://use.fontawesome.com/releases/v5.3.0/css/all.css',
		array(),
		'5.3.0'
	);
}

require_once( get_template_directory().'/ReduxCore/xperson-config.php' );	// theme options using Redux
?>
