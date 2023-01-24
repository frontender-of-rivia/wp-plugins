<?php

Class Create_Database
{
    public function __construct(){
        global $wpdb;
        // create society_users table
        $wpdb->query( "CREATE TABLE IF NOT EXISTS `plugins`.`society_users` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(45) NOT NULL,
            PRIMARY KEY (`id`));" );
        // create society_friends table
        $wpdb->query( "CREATE TABLE IF NOT EXISTS `plugins`.`society_friends` (
            `id` INT NOT NULL,
            `user` VARCHAR(45) NOT NULL,
            `his_friend` VARCHAR(45) NOT NULL,
            PRIMARY KEY (`id`));
        ");
    }
}

$create_database = new Create_Database();