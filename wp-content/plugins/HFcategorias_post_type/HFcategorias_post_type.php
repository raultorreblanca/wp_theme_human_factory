<?php
/*
    Plugin Name: Human Factory - Post Type
    Plugin URI: 
    Description: Añade categorias para mostrar los productos de la categoría
    Version: 1.0.0
    Author: Raúl Torreblanca
    Author URI: 
    Text Domain: humanfactory

*/
if(!defined('ABSPATH')) die();
    // Registrar Custom Post Type
function hfcatego_posttype() {

	$labels = array(
		'name'                  => _x( 'Categorias', 'Post Type General Name', 'humanfactory' ),
		'singular_name'         => _x( 'Categoria', 'Post Type Singular Name', 'humanfactory' ),
		'menu_name'             => __( 'Categorias', 'humanfactory' ),
		'name_admin_bar'        => __( 'Categoria', 'humanfactory' ),
		'archives'              => __( 'Archivo', 'humanfactory' ),
		'attributes'            => __( 'Atributos', 'humanfactory' ),
		'parent_item_colon'     => __( 'Categoria Padre', 'humanfactory' ),
		'all_items'             => __( 'Todas Las Categorias', 'humanfactory' ),
		'add_new_item'          => __( 'Agregar Categoria', 'humanfactory' ),
		'add_new'               => __( 'Agregar Categoria', 'humanfactory' ),
		'new_item'              => __( 'Nueva Categoria', 'humanfactory' ),
		'edit_item'             => __( 'Editar Categoria', 'humanfactory' ),
		'update_item'           => __( 'Actualizar Categoria', 'humanfactory' ),
		'view_item'             => __( 'Ver Categoria', 'humanfactory' ),
		'view_items'            => __( 'Ver Categorias', 'humanfactory' ),
		'search_items'          => __( 'Buscar Categoria', 'humanfactory' ),
		'not_found'             => __( 'No Encontrado', 'humanfactory' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'humanfactory' ),
		'featured_image'        => __( 'Imagen Destacada', 'humanfactory' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'humanfactory' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'humanfactory' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'humanfactory' ),
		'insert_into_item'      => __( 'Insertar en Categoria', 'humanfactory' ),
		'uploaded_to_this_item' => __( 'Agregado en Categoria', 'humanfactory' ),
		'items_list'            => __( 'Lista de Categorias', 'humanfactory' ),
		'items_list_navigation' => __( 'Navegación de Categorias', 'humanfactory' ),
		'filter_items_list'     => __( 'Filtrar Categorias', 'humanfactory' ),
	);
	$args = array(
		'label'                 => __( 'Categoria', 'humanfactory' ),
		'description'           => __( 'Categorias para el Sitio Web', 'humanfactory' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 21,
        'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'hfcategorias', $args );

}
add_action( 'init', 'hfcatego_posttype', 0 );
?>