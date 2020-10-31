<?php

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Roles.
	 */

	$labels = [
		"name" => __( "Roles", "startup-goa" ),
		"singular_name" => __( "Role", "startup-goa" ),
		"menu_name" => __( "Roles", "startup-goa" ),
		"all_items" => __( "All Roles", "startup-goa" ),
		"edit_item" => __( "Edit Role", "startup-goa" ),
		"view_item" => __( "View Role", "startup-goa" ),
		"update_item" => __( "Update Role name", "startup-goa" ),
		"add_new_item" => __( "Add new Role", "startup-goa" ),
		"new_item_name" => __( "New Role name", "startup-goa" ),
		"parent_item" => __( "Parent Role", "startup-goa" ),
		"parent_item_colon" => __( "Parent Role:", "startup-goa" ),
		"search_items" => __( "Search Roles", "startup-goa" ),
		"popular_items" => __( "Popular Roles", "startup-goa" ),
		"separate_items_with_commas" => __( "Separate Roles with commas", "startup-goa" ),
		"add_or_remove_items" => __( "Add or remove Roles", "startup-goa" ),
		"choose_from_most_used" => __( "Choose from the most used Roles", "startup-goa" ),
		"not_found" => __( "No Roles found", "startup-goa" ),
		"no_terms" => __( "No Roles", "startup-goa" ),
		"items_list_navigation" => __( "Roles list navigation", "startup-goa" ),
		"items_list" => __( "Roles list", "startup-goa" ),
	];

	$args = [
		"label" => __( "Roles", "startup-goa" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'role', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "role",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "role", [ "people" ], $args );

	/**
	 * Taxonomy: Domains.
	 */

	$labels = [
		"name" => __( "Domains", "startup-goa" ),
		"singular_name" => __( "Domain", "startup-goa" ),
		"menu_name" => __( "Domains", "startup-goa" ),
		"all_items" => __( "All Domains", "startup-goa" ),
		"edit_item" => __( "Edit Domain", "startup-goa" ),
		"view_item" => __( "View Domain", "startup-goa" ),
		"update_item" => __( "Update Domain name", "startup-goa" ),
		"add_new_item" => __( "Add new Domain", "startup-goa" ),
		"new_item_name" => __( "New Domain name", "startup-goa" ),
		"parent_item" => __( "Parent Domain", "startup-goa" ),
		"parent_item_colon" => __( "Parent Domain:", "startup-goa" ),
		"search_items" => __( "Search Domains", "startup-goa" ),
		"popular_items" => __( "Popular Domains", "startup-goa" ),
		"separate_items_with_commas" => __( "Separate Domains with commas", "startup-goa" ),
		"add_or_remove_items" => __( "Add or remove Domains", "startup-goa" ),
		"choose_from_most_used" => __( "Choose from the most used Domains", "startup-goa" ),
		"not_found" => __( "No Domains found", "startup-goa" ),
		"no_terms" => __( "No Domains", "startup-goa" ),
		"items_list_navigation" => __( "Domains list navigation", "startup-goa" ),
		"items_list" => __( "Domains list", "startup-goa" ),
	];

	$args = [
		"label" => __( "Domains", "startup-goa" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'domain', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "domain",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "domain", [ "people" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
