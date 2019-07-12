<?php

function portafolio() {

    $labels = array(
        'name'                  => _x( 'Portafolios', 'Post Type General Name', 'rochoa' ),
        'singular_name'         => _x( 'Portafolio', 'Post Type Singular Name', 'rochoa' ),
        'menu_name'             => __( 'Portafolio', 'rochoa' ),
        'name_admin_bar'        => __( 'Portafolio', 'rochoa' ),
        'archives'              => __( 'Archivo de Portafolio', 'rochoa' ),
        'attributes'            => __( 'Atributos de Portafolio', 'rochoa' ),
        'parent_item_colon'     => __( 'Portafolio Padre:', 'rochoa' ),
        'all_items'             => __( 'Todos los Items', 'rochoa' ),
        'add_new_item'          => __( 'Agregar Nuevo Item', 'rochoa' ),
        'add_new'               => __( 'Agregar Nuevo', 'rochoa' ),
        'new_item'              => __( 'Nuevo Item', 'rochoa' ),
        'edit_item'             => __( 'Editar Item', 'rochoa' ),
        'update_item'           => __( 'Actualizar Item', 'rochoa' ),
        'view_item'             => __( 'Ver Item', 'rochoa' ),
        'view_items'            => __( 'Ver Portafolio', 'rochoa' ),
        'search_items'          => __( 'Buscar en Portafolio', 'rochoa' ),
        'not_found'             => __( 'No hay Resultados', 'rochoa' ),
        'not_found_in_trash'    => __( 'No hay Resultados en la Papelera', 'rochoa' ),
        'featured_image'        => __( 'Imagen Destacada', 'rochoa' ),
        'set_featured_image'    => __( 'Colocar Imagen Destacada', 'rochoa' ),
        'remove_featured_image' => __( 'Remover Imagen Destacada', 'rochoa' ),
        'use_featured_image'    => __( 'Usar como Imagen Destacada', 'rochoa' ),
        'insert_into_item'      => __( 'Insertar dentro de Item', 'rochoa' ),
        'uploaded_to_this_item' => __( 'Cargado a este item', 'rochoa' ),
        'items_list'            => __( 'Listado del Portafolio', 'rochoa' ),
        'items_list_navigation' => __( 'Navegación de Listado del Portafolio', 'rochoa' ),
        'filter_items_list'     => __( 'Filtro de Listado del Portafolio', 'rochoa' ),
    );
    $args = array(
        'label'                 => __( 'Portafolio', 'rochoa' ),
        'description'           => __( 'Portafolio de Desarrollos', 'rochoa' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'custom-fields', ),
        'taxonomies'            => array( 'custom_portafolio' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-testimonial',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'portafolio', $args );

}
add_action( 'init', 'portafolio', 0 );
