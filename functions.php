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