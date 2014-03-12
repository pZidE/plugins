<?php
	/*
	Plugin Name: the Dukes of Dice games plugin
	Description: Custom code for The Dukes of Dice games, not strictly theme-related
	Author: CPH digital
	Version: 1.0
	*/

	// Add a menu
	add_action( 'init', 'games_cpt' );
	add_action( 'init', 'games_add_new_image_size' );

	function games_add_new_image_size() {
		add_theme_support( 'post-thumbnails' ); // This feature enables post-thumbnail support for a theme  
    	add_image_size( 'game-size', 620, 310, true );
	}

	function games_cpt() {
		register_post_type( 'games', array(
			'labels' => array(
				'name' => 'Games',
				'singular_name' => 'Game',
				'add_new' => 'Add game',
				'add_new_item' => 'Add game',
				'edit_item' => 'Edit game',
				'new_item' => 'game',
				'view_item' => 'View game',
				'search_items' => 'Search game',
				'not_found' => 'No game found.',
				'not_found_in_trash' => 'No game found in trash.',
				'parent_item_colon' => null,
				'all_items' => 'All game',
				'menu_name' => 'Games',
				'name_admin_bar' => 'game game'
			),
			'description' => 'Create a game to the library.',
			'public' => true,
			'menu_position' => 4,
			'supports' => array( 
				'title', 
				'editor', 
				'custom-fields' 
			)
		));
	}