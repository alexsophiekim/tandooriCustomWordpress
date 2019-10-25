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
