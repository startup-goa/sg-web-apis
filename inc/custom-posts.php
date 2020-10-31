<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Events.
	 */

	$labels = [
		"name" => __( "Events", "startup-goa" ),
		"singular_name" => __( "event", "startup-goa" ),
	];

	$args = [
		"label" => __( "Events", "startup-goa" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "events", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-calendar-alt",
		"supports" => [ "title", "thumbnail" ],
	];

	register_post_type( "events", $args );

	/**
	 * Post Type: Spaces.
	 */

	$labels = [
		"name" => __( "Spaces", "startup-goa" ),
		"singular_name" => __( "space", "startup-goa" ),
	];

	$args = [
		"label" => __( "Spaces", "startup-goa" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "spaces", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-palmtree",
		"supports" => [ "title", "thumbnail" ],
	];

	register_post_type( "spaces", $args );

	/**
	 * Post Type: People.
	 */

	$labels = [
		"name" => __( "People", "startup-goa" ),
		"singular_name" => __( "Person", "startup-goa" ),
	];

	$args = [
		"label" => __( "People", "startup-goa" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "people", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-id",
		"supports" => [ "title", "thumbnail" ],
	];

	register_post_type( "people", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
