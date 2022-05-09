<?php

if (!defined('CONFIG_PATH')) {
    define('CONFIG_PATH', '../config/');
}


require_once(CONFIG_PATH . "config.php");
class Conexion {
    public static function getConnection(){
        $connector = new mysqli(HOST, USER, PASSWORD, DB);
        if(mysqli_connect_errno()){
            echo "Error conectando a la base de datos";
        }
        return $connector;
    }
}
?>