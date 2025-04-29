<?php
function create_team_post_type()
{
    register_post_type(
        'teams',
        array(
            'labels' => array(
                'name' => __('Team', 'hamropahuch'),
                'singular_name' => __('Team', 'hamropahuch'),
            ),
            'menu_position' => 5,
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
            'menu_icon' => 'dashicons-groups',
        )
    );
}
add_action('init', 'create_team_post_type');

function radio_programs() {
	$labels = array(
		'name'               => _x( 'Radio Program', 'post type general name', 'hamropahunch' ),
		'singular_name'      => _x( 'Radio Program', 'post type singular name', 'hamropahunch' ),
		'menu_name'          => _x( 'Radio Programs', 'admin menu', 'hamropahunch' ),
		'name_admin_bar'     => _x( 'Radio Program', 'add new on admin bar', 'hamropahunch' ),
		'add_new'            => _x( 'Add New', 'Radio Program', 'hamropahunch' ),
		'add_new_item'       => __( 'Add New', 'hamropahunch' ),
		'new_item'           => __( 'New Radio Program', 'hamropahunch' ),
		'edit_item'          => __( 'Edit Radio Program', 'hamropahunch' ),
		'view_item'          => __( 'View Radio Programs', 'hamropahunch' ),
		'all_items'          => __( 'All Radio Program', 'hamropahunch' ),
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'hamropahunch' ),
		'menu_icon' => 'dashicons-microphone',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'hamropahunch' => 'radio-programs' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports' => array('title','editor','thumbnail','custom-fields')
	);

	register_post_type( 'radio-programs', $args );
	$labels = array(
		'name'              => _x( 'Program Categories', 'taxonomy general name', 'hamropahunch' ),
		'singular_name'     => _x( 'Program Category', 'taxonomy singular name', 'hamropahunch' ),
		'search_items'      => __( 'Search Program Categories', 'hamropahunch' ),
		'all_items'         => __( 'All Program Categories', 'hamropahunch' ),
		'parent_item'       => __( 'Parent Program Category', 'hamropahunch' ),
		'parent_item_colon' => __( 'Parent Program Category:', 'hamropahunch' ),
		'edit_item'         => __( 'Edit Program Category', 'hamropahunch' ),
		'update_item'       => __( 'Update Program Category', 'hamropahunch' ),
		'add_new_item'      => __( 'Add New Program Category', 'hamropahunch' ),
		'new_item_name'     => __( 'New Program Category Name', 'hamropahunch' ),
		'menu_name'         => __( 'Program Category', 'hamropahunch' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'radio-programs' ),
	);

	register_taxonomy( 'radio-programs', array( 'radio-programs' ), $args );
}

add_action( 'init', 'radio_programs' );