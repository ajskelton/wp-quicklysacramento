<?php 

/******************************************************************/
/* Define Constants */
/******************************************************************/
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/img');


/******************************************************************/
/* Menus */
/******************************************************************/
function register_my_menus(){
	register_nav_menus(array(
		'main-menu' => __('Main Menu', 'quickly-framework')
	));
}

add_action('init', 'register_my_menus');




/******************************************************************/
/* Load Footer Sidebar */
/******************************************************************/
if ( function_exists('register_sidebar') )
{
	register_sidebar( array(
		'name'          => 'Special Announcements',
		'id' 			=> 'special-announcements',
		'description' 	=> 'The horizontal section above the footer widgets',
		'before_title' 	=> '<h2>',
		'after_titile' 	=> '</h2>'
		)
	);

	register_sidebar( array(
		'name' 			=> 'Footer 1',
		'id'			=> 'footer-1',
		'description' 	=> 'The first footer widget'
		)
	); 

	register_sidebar( array(
		'name' 			=> 'Footer 2',
		'id'			=> 'footer-2',
		'description' 	=> 'The second footer widget'
		)
	); 

	register_sidebar( array(
		'name' 			=> 'Footer 3',
		'id'			=> 'footer-3',
		'description' 	=> 'The third footer widget'
		)
	); 
}



/******************************************************************/
/* enqueue styles */
/******************************************************************/
function theme_js(){
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.9.1.min.js', false, '1.9.1');

	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', array('jQuery'), '1.1', true);
}
add_action('wp_enqueue_scripts', 'theme_js');




/******************************************************************/
/* Add Post Thumbnail Support */
/******************************************************************/

add_theme_support( 'post-thumbnails' ); 

?>
