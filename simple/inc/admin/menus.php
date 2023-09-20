<?php 
function simple_plugin_admin_menu(){
    add_menu_page('primary_menu','primary_menu',
    'manage_options','simple_menu','simple_menu_callback');
}
function simple_menu_callback(){

}
add_action('admin_menu','simple_plugin_admin_menu');