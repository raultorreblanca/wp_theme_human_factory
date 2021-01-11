<?php
//Registra un menú para la plantilla según se llame dentro de la plantilla, en este caso se llama 'superior'//
//https://developer.wordpress.org/reference/functions/register_nav_menus//
if(function_exists('register_nav_menus')){
    register_nav_menus(array('superior' => 'Menu superior'));
}
//agrega estilo determinado a el anclaje del menu navegación//
//https://developer.wordpress.org/reference/hooks/nav_menu_link_attributes//
add_filter('nav_menu_link_attributes', 'clase_menu', 10, 3);
function clase_menu($atts, $item, $args){
    $class= 'nav-link';
    $atts['class'] = $class;
    return $atts;
}
//Agregar imagen destacada//
//https://codex.wordpress.org/Post_Thumbnails#Example_of_functions.php//
if ( function_exists( 'add_theme_support' ) ) { 
    //funcion que genera un nombre para el thumbsnail (post-thumbnails) y así es cómo lo identifica en la página dónde se llame esta función//
    add_theme_support( 'post-thumbnails' );
}

//Agregar sidebar o widget
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s" my-3>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
?>