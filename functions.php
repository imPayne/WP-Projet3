<?php

add_image_size( 'section2ImageSize', 232, 170, array( "center", "center" ) );
add_image_size( 'section3ImageSize', 429, 165, array( "center", "center" ) );
add_image_size( 'section4ImageSize', 171, 171, array( "center", "center" ) );
add_image_size( 'section5ImageSize', 409, 230, array( "center", "center" ) );
add_image_size( 'section6ImageSize', 250, 50, array( "center", "center" ) );

// Ajouter un emplacement de menu
function theme_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal' => __( 'Menu Principal', 'text_domain' ),
    ) );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu', 0 );

?>
