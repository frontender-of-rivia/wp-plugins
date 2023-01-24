<?php


Class testplugin_query {

    public $room_id;
    public $room_interval;


    public function __construct(){
        $this->set_data();
        add_action('init', [$this, 'insert_order']);
    }

    public function set_data(){
        $this->room_id = $_POST['room_id'];
        $this->room_interval = $_POST['room_range'];
    }

    public function insert_order(){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && is_admin() === false){
            global $wpdb;
            $query = "INSERT INTO `ordered_rooms` (`id`, `room_id`, `room_interval`) VALUES (NULL, '$this->room_id', '$this->room_interval')";
            $wpdb->query( $wpdb->prepare( $query, 'Lorem ipsum...' ) );
        }
    }

}

$testplugin_query = new testplugin_query();