<?php
require_once '../Modelo/DaoUsuario.php';
require_once '../Modelo/classUsuario.php';


if(isset($_POST['usuario']) && isset($_POST['contra'])){
    $usuario=  $_POST['usuario'];
    $contra=  $_POST['contra'];

    $objtUsuario = new Usuario($usuario);
    $objtDaoUsuario = new DaoUsuario();
    $resultado =  $objtDaoUsuario->obtenerPorUsuario( $objtUsuario);

    if(isset($resultado)){
        if($resultado ["password"]===$contra){
            $message = "OK";
            $response = array("success"=>true,"message"=> $message);
            session_start();
            $_SESSION["UsuarioLogueado"] = $resultado ;
        }else {
            $message = "La contraseña es incorrecta";
            $response = array("success"=>false,"message"=> $message);
        }
    }else {
        $message = "Usuario no existe";
        $response = array("success"=>false,"message"=> $message);
    }


    echo  json_encode($response);
    



}