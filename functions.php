<?php 


require_once dirname( __File__ ) . '/includes/scripts.php';
require_once dirname( __File__ ) . '/includes/options.php';
require_once dirname( __File__ ) . '/includes/theme_supports.php';


// adding services post_type

add_theme_support('post-thumbnails');
add_post_type_support( 'Services', 'thumbnail' );    
// Our custom post type function
function create_posttype() {
 
    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Services' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'supports' => array( 'title', 'editor',  'exerpts' )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
add_theme_support('post-thumbnails');
add_post_type_support( 'services', 'thumbnail' ); 

function wpcodex_add_excerpt_support_for_post() {
    add_post_type_support( 'services', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_post' );
