<?php

function custom_post_document() {
	$labels = array(
        'name' => 'Documents',
        'singular_name' => 'Document',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Document',
        'edit_item' => 'Edit Document',
        'new_item' => 'New Document',
        'all_items' => 'All Documents',
        'view_item' => 'View Document',
        'search_items' => 'Search Documents',
        'not_found' =>  'No documents found',
        'not_found_in_trash' => 'No documents found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Documents'
    );

	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => 'document',
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 10,
        'supports' => array( 'title', 'editor', 'author' )
		);

	register_post_type('document', $args);
}

add_action('init', 'custom_post_document');

?>