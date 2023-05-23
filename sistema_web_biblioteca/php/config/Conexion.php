<?php
    require_once "PropiedadesBD.php";


    class Conexion {

        protected $db;
        
        public function __construct(){
            $this->db = new mysqli("localhost" ,"root" , "root", "biblioteca","3306");
            if($this->db->connect_error ){
                 echo  "Conexión fallida: " . $this->db->connect_error;
            }

        }

        public function __destruct(){
            $this-> CloseDB();
        }


       public function CloseDB(){
        $this-> db->close();
        }
    }

?>