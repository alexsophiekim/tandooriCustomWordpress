<?php
function addCustomThemeFiles_tandoori(){
    wp_enqueue_style('bootstrapCSStandoori', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customCSStandoori', get_template_directory_uri() . '/assets/css/style.css', array(), '0.0.2', 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapJStandoori', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('customJStandoori', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '0.0.1', true);
};
add_action('wp_enqueue_scripts', 'addCustomThemeFiles_tandoori');


function tandooriLogo() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'tandooriLogo' );


function addCustomMenus_tandoori(){
  add_theme_support('menus');
  register_nav_menus( array(
    'top_nav' => __('Top Menu'),
    'foot_nav' => __('Footer Menu'),
    'side_nav' => __('Side Menu')
  ));
}

add_action('after_setup_theme', 'addCustomMenus_tandoori');

register_default_headers(array(
    'defaultImage' => array(
        'url' => get_template_directory_uri() . '/assets/images/topImg.jpg',
        'thumbnail_url' => get_template_directory_uri() . '/assets/images/topImg.jpg',
        'description' => __('The default image for the custom header.', 'customTandoori')
    )
));
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
$customHeaderDefaults = array(
    'width' => 1280,
	  'height' => 720,
    'default-image' => get_template_directory_uri() . '/assets/images/topImg.jpg'
);
add_theme_support('custom-header', $customHeaderDefaults);
add_theme_support('wp-block-styles');
