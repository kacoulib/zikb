<?php
	add_theme_support('menu');
	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
	function my_jquery_enqueue() {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
	   wp_enqueue_script('jquery');
	}
function edit_admin_menus() {
    global $menu;
}
add_action( 'admin_menu', 'edit_admin_menus' );
echo 'ouinon';
if (is_admin()) {
	require_once('inc/cpt/skills.php');
}