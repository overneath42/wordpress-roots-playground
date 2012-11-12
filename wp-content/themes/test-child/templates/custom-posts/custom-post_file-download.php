<?php

add_action( 'init', 'create_file_download' );

function create_file_download() {

	$labels = array(
		'name' => 'File Downloads',
		'singular_name' => 'File Download',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New File Download',
		'edit' => 'Edit',
		'edit_item' => 'Edit File Download',
		'new_item' => 'New File Download',
		'view' => 'View',
		'view_item' => 'View File Download',
		'search_items' => 'Search File Downloads',
		'not_found' => 'No File Downloads found',
		'not_found_in_trash' => 'No File Downloads found in Trash',
		'parent' => 'Parent File Download'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_position' => 10,
		'supports' => array( 'title', 'excerpt', 'custom-fields' ),
		'taxonomies' => array( '' ),
		'has_archive' => false
	);

	register_post_type('file_download', $args);
}

?>