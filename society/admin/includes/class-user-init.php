<?php

Class User_Init {

    public function __construct(){
        add_action('admin_menu', [$this, 'login_init']);
    }

    public function login_init(){
        $current_user_login = get_userdata(1);
        $current_user_login = $current_user_login->user_login;
        set_query_var('user_login', $current_user_login);
    }
}

$user_init = new User_Init();