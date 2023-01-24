<?php

Class society{
    public function run(){
        $this->load_dependencies();
        $this->define_admin_hooks();
        $this->define_public_hooks();
    }

    public function load_dependencies(){
        require_once PLUGIN_DIR . '/admin/class-society-admin.php';
        require_once PLUGIN_DIR . '/public/class-society-public.php';
    }

    public function define_admin_hooks(){
        $plugin_admin = new society_admin();
    }

    public function define_public_hooks(){
        $plugin_public = new society_public();
    }


}