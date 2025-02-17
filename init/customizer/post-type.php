<?php
function video_post_meta()
{
	$labels = array(
		'name' => _x('Videos', 'post type general name', 'hamropahuch'),
		'singular_name' => _x('Video', 'post type singular name', 'hamropahuch'),
		'menu_name' => _x('Videos', 'admin menu', 'hamropahuch'),
		'name_admin_bar' => _x('Video', 'add new on admin bar', 'hamropahuch'),
		'add_new' => _x('Add New', 'Video', 'hamropahuch'),
		'add_new_item' => __('Add New', 'hamropahuch'),
		'new_item' => __('New Video', 'hamropahuch'),
		'edit_item' => __('Edit Video', 'hamropahuch'),
		'view_item' => __('View Videos', 'hamropahuch'),
		'all_items' => __('All Videos', 'hamropahuch'),
	);

	$args = array(
		'labels' => $labels,
		'description' => __('Description.', 'hamropahuch'),
		'menu_icon' => 'dashicons-format-video',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('hamropahuch' => 'video'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 4,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
	);

	register_post_type('video', $args);
	$labels = array(
		'name' => _x('Video Categories', 'taxonomy general name', 'hamropahuch'),
		'singular_name' => _x('Video Category', 'taxonomy singular name', 'hamropahuch'),
		'search_items' => __('Search Video Categories', 'hamropahuch'),
		'all_items' => __('All Video Categories', 'hamropahuch'),
		'parent_item' => __('Parent Video Category', 'hamropahuch'),
		'parent_item_colon' => __('Parent Video Category:', 'hamropahuch'),
		'edit_item' => __('Edit Video Category', 'hamropahuch'),
		'update_item' => __('Update Video Category', 'hamropahuch'),
		'add_new_item' => __('Add New Video Category', 'hamropahuch'),
		'new_item_name' => __('New Video Category Name', 'hamropahuch'),
		'menu_name' => __('Video Category', 'hamropahuch'),
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'video-content'),
	);

	register_taxonomy('video-content', array('video'), $args);
}

add_action('init', 'video_post_meta');