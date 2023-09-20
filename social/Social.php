<?php 
/*
    Plugin Name: Social controll plugin
    Description: A brief description of your plugin.
    Version: 1.0
    Author: Manirmp
    Author URI: www.manirmp .ir
*/
define('WF_DIR',plugin_dir_path(__FILE__));
define('WF_URL',plugin_dir_url(__FILE__));

define('WF_INC',WF_DIR."/inc/");
define('WF_TPL',WF_DIR."/template/");

if(is_admin()){ 
    include WF_INC.'/admin/menus.php';
}