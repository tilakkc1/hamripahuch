<?php 
function video_post_meta() {
	$labels = array(
		'name'               => _x( 'Videos', 'post type general name', 'naya_karnali' ),
		'singular_name'      => _x( 'Video', 'post type singular name', 'naya_karnali' ),
		'menu_name'          => _x( 'Videos', 'admin menu', 'naya_karnali' ),
		'name_admin_bar'     => _x( 'Video', 'add new on admin bar', 'naya_karnali' ),
		'add_new'            => _x( 'Add New', 'Video', 'naya_karnali' ),
		'add_new_item'       => __( 'Add New', 'naya_karnali' ),
		'new_item'           => __( 'New Video', 'naya_karnali' ),
		'edit_item'          => __( 'Edit Video', 'naya_karnali' ),
		'view_item'          => __( 'View Videos', 'naya_karnali' ),
		'all_items'          => __( 'All Videos', 'naya_karnali' ),
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'naya_karnali' ),
		'menu_icon' => 'dashicons-format-video',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'naya_karnali' => 'video' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports' => array('title','editor','thumbnail','custom-fields')
	);

	register_post_type( 'video', $args );
	$labels = array(
		'name'              => _x( 'Video Categories', 'taxonomy general name', 'naya_karnali' ),
		'singular_name'     => _x( 'Video Category', 'taxonomy singular name', 'naya_karnali' ),
		'search_items'      => __( 'Search Video Categories', 'naya_karnali' ),
		'all_items'         => __( 'All Video Categories', 'naya_karnali' ),
		'parent_item'       => __( 'Parent Video Category', 'naya_karnali' ),
		'parent_item_colon' => __( 'Parent Video Category:', 'naya_karnali' ),
		'edit_item'         => __( 'Edit Video Category', 'naya_karnali' ),
		'update_item'       => __( 'Update Video Category', 'naya_karnali' ),
		'add_new_item'      => __( 'Add New Video Category', 'naya_karnali' ),
		'new_item_name'     => __( 'New Video Category Name', 'naya_karnali' ),
		'menu_name'         => __( 'Video Category', 'naya_karnali' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'video-content' ),
	);

	register_taxonomy( 'video-content', array( 'video' ), $args );
}

add_action( 'init', 'video_post_meta' );