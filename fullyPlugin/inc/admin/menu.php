<?php
function add_admin_menus(){
    add_menu_page('plugin_controll','plugin_controll','manage_options', 'wp_api_admins',
        'wp_api_admins_callback');
    add_submenu_page('wp_api_admins','activation','activation','manage_options','wp_api_generall','wp_api_generall_page');
}
add_action('admin_menu','add_admin_menus');

function wp_api_admins_callback(){

    // check if plugin activation is true checkbox was checked
    if(isset($_POST['saveSetting'])) {
        $is_plugin_active = $_POST['pluginActivate'] ? 1 : 0;
        var_dump($is_plugin_active);
//       add_option('plugins_Activation',is); // add option
        update_option('plugins_Activation',$is_plugin_active); // if not created creat it
    }
    $current_plugin_status = get_option('plugins_Activation');

    include PLUGIN_TMP . '/admin/main.php';
}
function wp_api_generall_page(){
    include PLUGIN_TMP.'/user/user.php';
}