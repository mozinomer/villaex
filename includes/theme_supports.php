<?php 
// registering the nav menu

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'logo-menu' => __( 'Logo Menu' ),
      'web-des' => __( 'Web Designing Services' ),
      'sm-ser' => __( 'Social Meida Services' ),
      'web-dev-ser' => __( 'Web Development Services' ),
      'digital-ser' => __( 'Digital Marketing Services' ),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );
