<?php
/*
 * Plugin Name: Full plugin
 * Description: this is full plugin
 * Version: 1.0
 * Author: manirmp,
 * Author URI: www.manirmp.ir
 */


define('PLUGIN_DIR',plugin_dir_path(__FILE__));
define('PLUGIN_URL',plugin_dir_url(__FILE__));
define('PLUGIN_INC',PLUGIN_DIR.'/inc/');
define('PLUGIN_TMP',PLUGIN_DIR.'/template/');

function test_plugin_activation(){} // when plugin in activation
function test_plugin_deactivation(){} // when plugin in deactivation
register_activation_hook(__FILE__,'test_plugin_activation');
register_deactivation_hook(__FILE__,'test_plugin_deactivation');

if(is_admin()){
    include PLUGIN_INC.'/admin/menu.php';
}