<?php

//---------add custom post type Vehicule---------------

function cptui_register_my_cpts() {
	
	/**
	 * Post Type: Véhicules.
	 */
	
	$labels = [
		"name" => __( "Véhicules" ),
		"singular_name" => __( "Véhicule" ),
	];
	
	$args = [
		"label" => __( "Véhicules" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "vehicules", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-car",
		"supports" => [ "title", "editor", "thumbnail" ],
		"taxonomies" => [ "category" ],
		"show_in_graphql" => false,
	];
	
	register_post_type( "vehicules", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


//---------add custom Fields for Vehicule posts---------------

			if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_62fe4ec3a13ff',
	'title' => 'Informations du Véhicule',
	'fields' => array(
		array(
			'key' => 'field_62fe4f2e37366',
			'label' => 'Réservoir',
			'name' => 'reservoir',
			'type' => 'number',
			'instructions' => 'capacité en litres du réservoir',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'p.ex 80',
			'prepend' => '',
			'append' => 'L',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_62fe508237367',
			'label' => 'Type de boîte à vitesse',
			'name' => 'type_de_boite_a_vitesse',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Electric' => 'Electric',
				'Manual' => 'Manual',
				'Automatic' => 'Automatic',
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_62fe513a9b19a',
			'label' => 'Nbre de places',
			'name' => 'nbre_de_places',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'People',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_62fe51939b19b',
			'label' => 'Prix',
			'name' => 'prix',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '$',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_62fe52159b19c',
			'label' => 'Prix soldé',
			'name' => 'prix_solde',
			'type' => 'number',
			'instructions' => 'Si le produit est en solde, indiquez le prix initial dans ce champ.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '$',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_62fe4ed037365',
			'label' => 'Favoris ?',
			'name' => 'favoris',
			'type' => 'true_false',
			'instructions' => 'peut-on mettre le véhicule dans ses favoris?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'autoriser le favoris',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'vehicules',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

endif;		


//-----------add theme support-------------------
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

//-----------add theme support-------------------

//post thumbnail
add_theme_support( 'post-thumbnails' );

//custom logo
add_theme_support( 'custom-logo', array(
	'height' => 480,
    'width'  => 720,
	) );
	
	
//-----------add MENU-------------------
	
	function custom_header_menu() {
		register_nav_menu('header_menu',__( 'HeaderMenu' ));
	}
add_action( 'init', 'custom_header_menu' );