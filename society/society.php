<?php
/*
Plugin Name: society
Plugin URI: society
Description: Краткое описание плагина society.
Version: 1.0
Author: Yuri
Author URI: society
*/
    
// константы
define( "PLUGIN_DIR", plugin_dir_path( __FILE__ ) );


// хуки при активации и диактивации плагина
function society_activate(){
    require 'includes/class-society-activate.php';
    society_activate::activator();
}

function society_deactivate(){
    require 'includes/class-society-deactivate.php';
    society_deactivate::deactivator();
}

register_activation_hook(__FILE__, 'society_activate');
register_deactivation_hook(__FILE__, 'society_deactivate');



// импорт основного класса и запуск плагина
require_once 'includes/class-society.php';

function run_plugin(){
    $plugin = new society();
    $plugin->run();
}

run_plugin();

?>