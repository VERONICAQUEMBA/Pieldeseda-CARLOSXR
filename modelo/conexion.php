<?php
    class Conexion{
        public function get_conexion(){

            //usuario
           $user ="root";
           //contraseña
            $pass ="123";
            //servidor
            $host ="172.17.9.37";
            //nombre de la base de datos
            $db   ="mydb";
            
            $conexion = new PDO("mysql:host=$host;dbname=$db;",$user, $pass);
            return $conexion;
        }
    }

?>