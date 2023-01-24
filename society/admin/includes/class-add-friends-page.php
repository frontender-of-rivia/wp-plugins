<?php


Class Add_Friends_Page
{
    public function __construct(){
        add_action( 'admin_menu', [$this, 'make_add_friends_page'] );
    }

    public function make_add_friends_page(){
        add_menu_page(
            'Добавить в друзья',
            'Добавить в друзья',
            'edit_others_posts',
            'add_friends_page',
            'add_friends_page_render',
            'dashicons-welcome-learn-more',
            999
        );

        function add_friends_page_render(){
            require_once PLUGIN_DIR . 'admin/templates/add-friends-template.php';
        }

    }

    public function friendship_collect(){
        global $wpdb;
    }
}

$add_friends_page = new Add_Friends_Page();