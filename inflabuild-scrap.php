<?php
/*
* Plugin Name: InfraBuild Scrap
* Description: Custom post Scrap.
* Plugin URI: https://creastv.pl/
* Version: 1.0
* Author: ITHolding
* Author URI: https://creastv.pl/
* License: GPLv2 or later
* Text Domain: inb
*/

function inb_scrap_post_types() {

	$labels = array(
		'name'               => 'Złom',
		'singular_name'      => 'Złom',
		'menu_name'          => 'Złom',
		'name_admin_bar'     => 'Złom',
		'add_new'            => 'Dodaj',
		'add_new_item'       => 'Dodaj ',
		'new_item'           => 'Nowy ',
		'edit_item'          => 'Edytuj  ',
		'view_item'          => 'Zobacz  ',
		'all_items'          => 'Złom',
		'search_items'       => 'Szukaj',
		'parent_item_colon'  => 'Parent :',
		'not_found'          => 'Nie znaleziono',
		'not_found_in_trash' => 'Nie znaleziono',
		
	);
	$args = array( 
		'public' => true,
		'has_archive' => false,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'menu_icon'     => plugin_dir_url( __FILE__ ) . 'img/admin-ico.png',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => false,
		'publicly_queryable' => true,
		// 'rewrite' => array('slug' => 'case-study',  'with_front' => false,),
		"rewrite"             => array( "slug" => "klasy-zlomu", "with_front" => false ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
	);
    	register_post_type( 'klasy-zlomu', $args );

}
add_action( 'init', 'inb_scrap_post_types' );