<?php

/*
Plugin Name: 2022 Iran
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: manirmp
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/


define('PLUGIN_DIR',plugin_dir_path(__FILE__));
define('PLUGIN_URL',plugin_dir_url(__FILE__));

define('PLUGIN_INC',PLUGIN_DIR.'/inc/');
define('PLUGIN_TPL',PLUGIN_DIR.'/tpl/');

function test_plugin_activation(){}
function test_plugin_deactivation(){}

register_activation_hook(__FILE__,'test_plugin_activation');
register_deactivation_hook(__FILE__,'test_plugin_deactivation');

if(is_admin()){
    include PLUGIN_INC.'admin/menus.php';
}
function register_style() {
    wp_register_style('wp-main-style',PLUGIN_URL.'assets/css/main.css');
    wp_enqueue_style('wp-main-style');
}
add_action( 'wp_enqueue_scripts', 'register_style' );
add_action('admin_enqueue_scripts','register_style');