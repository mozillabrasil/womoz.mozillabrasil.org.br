<?php

add_filter( 'rwmb_meta_boxes', 'womoz_register_meta_boxes' );

function womoz_register_meta_boxes( $meta_boxes ){
	$prefix = 'womoz_';

	// Pages
	$meta_boxes[] = array(
		'id' 					=> 'page',
		'title' 			=> __( 'Configurações da Página', 'womoz' ),
		'post_types'	=> array( 'page' ),
		'context' 		=> 'normal',
		'priority' 		=> 'high',
		'autosave' 		=> true,
		'fields' 			=> array(
			// Subtitle
			array(
				'name' 	=> __( 'Subtítulo da Página:', 'womoz' ),
				'id' 		=> "{$prefix}page_subtitle",
				'desc' 	=> __( 'Insira o subtítulo da página.', 'womoz' ),
				'type' 	=> 'text',
			),
			array(
				'name' 	=> __( 'Resumo da Página:', 'womoz' ),
				'id' 		=> "{$prefix}page_excerpt",
				'type' 	=> 'wysiwyg',
				'raw' => false,
				'options' => array(
					'textarea_rows' => 10,
					'teeny' => true,
					'media_buttons' => true,
				),
			)
		)
	);

	return $meta_boxes;
}