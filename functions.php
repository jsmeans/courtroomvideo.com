<?php 

function theme_styles(){

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );

}


function theme_js() {

	wp_enqueue_script ( 'stickup', get_template_directory_uri() . '/js/stickup.js', array(jquery), '', true );


}
add_action('wp_enqueue_scripts' , 'theme_js');

add_action('wp_enqueue_scripts' , 'theme_styles');

add_theme_support('menus');


?>