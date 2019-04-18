<?php 

// adding stylesheet

function styleaddding_function()
{
    wp_enqueue_style('style',get_stylesheet_uri());

}
add_action('wp_enqueue_scripts','styleaddding_function');


add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );
