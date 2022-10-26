<?php
function baseTheme__registerCTA() {

	/**
	 * Post Type: CTA'S.
	 */

	$labels = array(
		"name" => __( "CTA'S", "frontporchsolutions" ),
		"singular_name" => __( "CTA", "frontporchsolutions" ),
	);

	$args = array(
		"label" => __( "CTA'S", "frontporchsolutions" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "cta", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-sticky",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "cta", $args );
}

add_action( 'init', 'baseTheme__registerCTA' );


if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5c477bfe34cd6',
		'title' => 'CTA Relationship',
		'fields' => array(
			array(
				'key' => 'field_5c477c1a96f88',
				'label' => 'Add this CTA to next Pages:',
				'name' => 'cta_relationship',
				'type' => 'relationship',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'page',
					1 => 'client',
					2 => 'post',
					3 => 'solution',
				),
				'taxonomy' => '',
				'filters' => array(
					0 => 'search',
					1 => 'post_type',
					2 => 'taxonomy',
				),
				'elements' => array(
					0 => 'featured_image',
				),
				'min' => '',
				'max' => '',
				'return_format' => 'id',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'cta',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => false,
	));
	
	endif;		