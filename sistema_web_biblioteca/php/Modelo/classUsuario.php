<?php
class Usuario {
    private $strNombre;
    private $strEmail;
    private $strPassword;
    private $strnivel_acceso;
    private $strlimiteLibros;



    public function __construct( $nombre = "",  $email = "",$contra="", $nivel_acceso = "" ,$limiteLibros="" ) {
        $this->strNombre = $nombre;
        $this->strEmail = $email;
        $this ->strPassword = $contra;
        $this->strnivel_acceso = $nivel_acceso;
        $this->strlimiteLibros = $limiteLibros;
    }

    // Getters y setters

    public function getNombre() {
        return $this->strNombre;
    }

    public function setNombre($nombre) {
        $this->strNombre = $nombre;
    }

    public function getEmail() {
        return $this->strEmail;
    }

    

    public function setEmail($email) {
        $this->strEmail = $email;
    }


    public function getContra() {
        return $this->strPassword;
    }


    public function getNivelAcceso() {
        return $this->strnivel_acceso;
    }

    
    public function getLimiteLibro() {
        return $this->strlimiteLibros;
    }




}


?>