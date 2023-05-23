<?php
//En esta clase se va a realizar los scripts de query de la tabla usuario

require_once '../config/Conexion.php';
require_once 'classUsuario.php';

 class DaoUsuario extends Conexion {

  
            //sobreescribir el constructor  y el destructor 

            public function __construct(){
                parent::__construct();
            }

            public function __destruct(){
                parent::__destruct();
            }


            // vamos a crear los query de insertar y consultar usuario 


            public function insertarUsuario($usuario){
                $nombre = $usuario->getNombre();
                $email = $usuario -> getEmail();
                $contra = $usuario -> getContra();
                $nivelAccs = $usuario -> getNivelAcceso();
                $limiteLibro = $usuario -> getLimiteLibro();
                
                 $query =  "INSERT INTO usuarios (nombre,email,password,nivel_acceso,limite_libros)  VALUES ('$nombre','$email','$contra','$nivelAccs',$limiteLibro)";

                $this->db->query($query);
            }

             public function obtenerPorUsuario($usuario){
                 $user = $usuario->getNombre();
                 $user_escaped = $this->db->real_escape_string($user);
                 $query = "SELECT id, nombre, email, password, nivel_acceso, limite_libros FROM usuarios WHERE nombre = '$user_escaped'";
                 $result = $this->db->query($query);
                 if(!$result){
                    throw new Exception("Error al realizar la consulta: " . $this->db->error);
                 }
                 $var = $result->fetch_assoc();
                 return $var;
             }




 }

?>