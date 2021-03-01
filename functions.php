<?php

function lnb_scripts() {
	
	// enqueue style
	wp_enqueue_style('theme-landingpage', get_stylesheet_uri() . '/css/style.css');
	
	/* // enqueue script
	wp_enqueue_script('lnb-script', get_template_directory_uri() .'/js/functions.js', array('jquery'), '20150825', true); */
	
}
add_action('wp_enqueue_scripts', 'lnb_scripts');

//adds the viewport meta tag to the header.php file
function add_viewport_meta_tag() {
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
 }

add_theme_support( "menus" );

// Create New Menu
If(function_exists("register_nav_menus")){
  register_nav_menus( array( $location => $description ) );
}

//This is to activate the featured image in Posts
if(function_exists("add_theme_support")){
    add_theme_support( 'post-thumbnails' );
}

if(function_exists('add_image_size')){
  add_image_size( 'featured', 400, 250, true );
  add_image_size( 'post-thumb', 125, 75, true );
}

function create_post_type(){
  register_post_type( 'post-type-slug-name', 
    array() 
  );
  
}


// Theme Widgets

if ( function_exists('register_sidebar') ) {
  register_sidebar( array(
    'name' => 'Footer Quote Widget',
    'id' => 'footer-quote-widget',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="footer__pillar-title">',
    'after_title' => '</h3>',
  ) );
  
  register_sidebar( array(
    'name' => 'Footer Logo Widget',
    'id' => 'footer-logo-widget',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
  
  register_sidebar( array(
    'name' => 'Footer Location Widget',
    'id' => 'footer-location-widget',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="footer__pillar-title">',
    'after_title' => '</h3>',
  ) );
}




//Prevents the <p> tag from getting automatically insterted
remove_filter('the_content', 'wpautop');

add_action( 'init', 'create_post_type' );