<?php 
/*
    Plugin Name: Social controll plugin
    Description: A brief description of your plugin.
    Version: 1.0
    Author: Manirmp
    Author URI: www.manirmp .ir
*/
define('PLUGIN_DIR',plugin_dir_path(__FILE__));
define('PLUGIN_URL',plugin_dir_url(__FILE__));
define('PLUGIN_INC',PLUGIN_DIR."/inc/");
define('PLUGIN_TPL',PLUGIN_DIR."/template/");

if(is_admin()){ 
    include PLUGIN_INC.'/admin/menus.php';
}
function register_style() {
    wp_register_style('wp-main-style',PLUGIN_URL.'assets/css/main.css');
    wp_enqueue_style('wp-main-style');
}
add_action('wp_enqueue_scripts','register_style');
add_action('admin_enqueue_scripts','register_style');