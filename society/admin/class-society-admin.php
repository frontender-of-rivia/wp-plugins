<?php

Class society_admin {

    public function __construct(){
        $this->admin_dependencies();
    }
 
    public function admin_dependencies(){
        require_once PLUGIN_DIR . '/admin/includes/class-user-init.php';
        require_once PLUGIN_DIR . '/admin/includes/class-friends-page.php';
        require_once PLUGIN_DIR . '/admin/includes/class-add-friends-page.php';
    }
}