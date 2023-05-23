<?php
    require_once '../Modelo/DaoUsuario.php';

    require_once '../Modelo/classUsuario.php';

    $objtUsuario = new Usuario("edson","evilcahuaman@senati.pe","123456","profesor",3);

    $objtDaoUsuario = new DaoUsuario();

    $objtDaoUsuario->insertarUsuario($objtUsuario);




?>