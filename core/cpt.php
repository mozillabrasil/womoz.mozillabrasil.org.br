<?php

// Register Custom Post Type Projetos
function womoz_projects_post_type() {

	$labels = array(
		'name'                => _x( 'Projetos', 'Post Type General Name', 'womoz' ),
		'singular_name'       => _x( 'Projeto', 'Post Type Singular Name', 'womoz' ),
		'menu_name'           => __( 'Projetos', 'womoz' ),
		'parent_item_colon'   => __( 'Projeto Parente:', 'womoz' ),
		'all_items'           => __( 'Todos os projetos', 'womoz' ),
		'view_item'           => __( 'Visualizar projeto', 'womoz' ),
		'add_new_item'        => __( 'Adicionar novo projeto', 'womoz' ),
		'add_new'             => __( 'Adicionar novo', 'womoz' ),
		'edit_item'           => __( 'Editar projeto', 'womoz' ),
		'update_item'         => __( 'Atualizar projeto', 'womoz' ),
		'search_items'        => __( 'Pesquisar projeto', 'womoz' ),
		'not_found'           => __( 'Nenhum projeto encontrado', 'womoz' ),
		'not_found_in_trash'  => __( 'Nenhum projeto encontrado na Lixeira', 'womoz' ),
	);

	$args = array(
		'label'               => __( 'projetos', 'womoz' ),
		'description'         => __( 'Projetos do WoMoz', 'womoz' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 25,
		'menu_icon'           => 'dashicons-media-code',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type( 'projetos', $args );
}
add_action( 'init', 'womoz_projects_post_type', 0 );

// Register Custom Post Type Grupo
function womoz_group_post_type() {

	$labels = array(
		'name'                => _x( 'Voluntárias', 'Post Type General Name', 'womoz' ),
		'singular_name'       => _x( 'Voluntária', 'Post Type Singular Name', 'womoz' ),
		'menu_name'           => __( 'Voluntárias', 'womoz' ),
		'parent_item_colon'   => __( 'Voluntária Parente:', 'womoz' ),
		'all_items'           => __( 'Todos as voluntárias', 'womoz' ),
		'view_item'           => __( 'Visualizar voluntária', 'womoz' ),
		'add_new_item'        => __( 'Adicionar nova voluntária', 'womoz' ),
		'add_new'             => __( 'Adicionar nova', 'womoz' ),
		'edit_item'           => __( 'Editar voluntária', 'womoz' ),
		'update_item'         => __( 'Atualizar voluntária', 'womoz' ),
		'search_items'        => __( 'Pesquisar voluntária', 'womoz' ),
		'not_found'           => __( 'Nenhuma voluntária encontrada', 'womoz' ),
		'not_found_in_trash'  => __( 'Nenhuma voluntária encontrada na Lixeira', 'womoz' ),
	);

	$args = array(
		'label'               => __( 'voluntárias', 'womoz' ),
		'description'         => __( 'Voluntárias do WoMoz', 'womoz' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 25,
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);

	register_post_type( 'voluntarias', $args );
}
add_action( 'init', 'womoz_group_post_type', 0 );