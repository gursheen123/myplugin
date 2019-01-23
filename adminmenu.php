<?php //myplugin -Admin Menu


//exit if file called directly
if(! defined('ABSPATH'))  {

	exit;
}



function myplugin_add_sublevel_menu() {
	
	/*
	
	add_submenu_page(
		string   $parent_slug,
		string   $page_title,
		string   $menu_title,
		string   $capability,
		string   $menu_slug,
		callable $function = ''
	);
	
	*/
	
	add_submenu_page(
		'options-general.php',
		'myplugin Settings',
		'myplugin',
		'manage_options',
		'myplugin',
		'myplugin_display_settings_page'
	);
	
}
add_action( 'adminmenu', 'myplugin_add_sublevel_menu' );


