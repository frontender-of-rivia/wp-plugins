<?php


Class Friends_Page
{
    public function __construct(){
        add_action( 'admin_menu', [$this, 'make_friends_page'] );
    }

    public function make_friends_page(){
        add_menu_page(
            'Друзья',
            'Мои друзья',
            'edit_others_posts',
            'friends_page',
            'friends_page_render',
            'dashicons-buddicons-buddypress-logo',
            999
        );

        function friends_page_render(){
            require_once PLUGIN_DIR . 'admin/templates/friends-page-template.php';
        }
    }
}

$friends_page = new Friends_Page();