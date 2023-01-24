<?php


Class testplugin_select {
    public function __construct(){
        add_action('init', [$this, 'select_posts']);
    }

    public function select_posts(){
        require_once TESTPLUGIN_PLUGIN_DIR . 'public/templates/select_posts.php';
    }
}

$testplugin_select = new testplugin_select();