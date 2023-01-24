<?php

Class User_Register
{
    public $user_login;

    public function __construct(){
       $this->check_login();
    }

    public function check_login(){
        // узнаём логин пользователя в wordpress
        $current_user_login = get_userdata(1);
        $current_user_login = $current_user_login->user_login;
        // проверяем есть ли человек с таким логином в базе данных
        global $wpdb;
        $check_result = $wpdb->get_results("SELECT `name` FROM plugins.society_users WHERE name='$current_user_login';");
        // если такого человека нет, регистрируем его
        if(!$check_result){
            $this->user_login = $current_user_login;
            $this->register_user();
        }

    }
    // регистрация пользователя
    public function register_user(){
        global $wpdb;
        $wpdb->query("INSERT INTO `plugins`.`society_users` (`name`) VALUES ('$this->user_login');");
    }

}

$user_register = new User_Register();