<?php
/*
Plugin Name: Simple plugin
Description: A brief description of your plugin.
Version: 1.0
Author: Manirmp
Author URI: www.manirmp .ir
*/
define('PLUGIN_DIR',plugin_dir_path(__FILE__));
define('PLUGIN_URL',plugin_dir_url(__FILE__));
define('PLUGIN_INC',PLUGIN_DIR.'/inc/');
    function test_plugin_activation(){}
    function test_plugin_deactivation(){}
    register_activation_hook(__FILE__,'test_plugin_activation');
    register_deactivation_hook(__FILE__,'test_plugin_deactivation');
if(is_admin()){
    include PLUGIN_INC.'admin/menus.php';   
}else{
    include PLUGIN_INC.'user/menus.php';
}