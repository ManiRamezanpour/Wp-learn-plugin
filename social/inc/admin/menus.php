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

    if(isset($_POST['saveSetting'])){
        $instgram = $_POST['instgram'] ? 1: 0;
        $telegram = $_POST['telegram'] ? 1 : 0;
        $gmail = $_POST['gmail'] ? 1 : 0 ;
        update_option('social_instgram',$instgram);
        update_option('social_telegram',$telegram);
        update_option('social_gmail',$gmail);
    }
    $instgram_status = get_option('social_instgram');
    $telegram_status = get_option('social_telegram');
    $gmail_status = get_option('social_gmail');
    include PLUGIN_TPL.'/admin/main.php';
}
function wp_apis_general_page(){
    echo "test";
}
    