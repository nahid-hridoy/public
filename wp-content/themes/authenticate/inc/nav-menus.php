<?php
function authenticate_register_menu() {
    register_nav_menus(
      array(
        'header-menu1' => __( 'Main/Header Menu' ),
        'header-menu2' => __( 'Secondary Menu' )
       )
     );
   }
add_action( 'init', 'authenticate_register_menu' );


add_filter( 'nav_menu_link_attributes', 'authenticate_menu_add_class', 10, 3 );
function authenticate_menu_add_class( $atts, $item, $args ) {
    $class = 'nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}
