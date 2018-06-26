<?php
add_action( 'wp_enqueue_scripts', 'idyllic_enqueue_styles' );
function idyllic_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
	wp_redirect( home_url() );  
	exit();
	}
	


?>