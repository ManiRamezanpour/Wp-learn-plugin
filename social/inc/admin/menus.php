<?php
function register_menu() {
    add_menu_page(
        'social-menu',
        'social-menu',
        'manage_options',
        'wp_api_admins',
        'wp_api_admins_callback'
    );
    add_submenu_page('wp_api_admins','add-social','add-social','manage_options','wp_apis_general',
    'wp_apis_general_page');
}
add_action('admin_menu','register_menu');
function wp_api_admins_callback (){
    if($isset[$_POST['saveSetting']]){
        var_dump($_POST);
    }
    include WF_TPL.'/admin/admin-form.php';
}
function wp_apis_general_page(){
    echo "test";
}
