<?php

add_shortcode('site_url', function () {return site_url();});

add_shortcode( 'company_phone', function () {
  return '123-456-7890';
} );

add_shortcode( 'company_address', function () {
  return '1234 Main St. <br />Cary NC 12345';
} );

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

// Theme Widgets

if ( function_exists('register_sidebar') ) {

  // Header Widgets

  register_sidebar( array(
    'name' => 'Header Logo Widget',
    'id' => 'header-logo-widget',
    'description' => 'Appears in the header area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="footer__pillar-title">',
    'after_title' => '</h3>',
  ) );

  // WCU Widgets

  register_sidebar( array(
    'name' => 'WCU Logo Widget',
    'id' => 'wcu-logo-widget',
    'description' => 'Appears in the why choose us area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="footer__pillar-title">',
    'after_title' => '</h3>',
  ) );

  register_sidebar( array(
    'name' => 'WCU List Widget',
    'id' => 'wcu-list-widget',
    'description' => 'Appears in the why choose us area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="footer__pillar-title">',
    'after_title' => '</h3>',
  ) );


  // Footer Widgets

  register_sidebar( array(
    'name' => 'Footer Logo Widget',
    'id' => 'footer-logo-widget',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
  
}




//Prevents the <p> tag from getting automatically insterted
remove_filter('the_content', 'wpautop');
