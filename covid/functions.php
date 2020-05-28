<?php
add_action( 'wp_enqueue_scripts', 'covid_style' );
function covid_style() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );  
}

add_action( 'wp_enqueue_scripts', 'covid_scripts' );
function covid_scripts() {
	add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' ); 

	wp_enqueue_script( 'script-main', get_template_directory_uri() .'/js/script.js', array(jquery), null, true);
	wp_enqueue_script( 'script-arctic', get_template_directory_uri() .'/js/jquery.arcticmodal-0.3.min.js', array(jquery), null, true);
	wp_enqueue_script( 'script-slick', get_template_directory_uri() .'/js/libs/slick.js', array(jquery), null, true);
}


add_theme_support( 'menus' );


add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'Menu' => 'Меню в шапке'
	] );
} );

