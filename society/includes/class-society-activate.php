<?php

class society_activate {

    static function activator(){
        require_once PLUGIN_DIR . 'includes/activate_classes/class-create-database.php';
        require_once PLUGIN_DIR . 'includes/activate_classes/class-user-register.php';
    }

}


?>