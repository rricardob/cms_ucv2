<?php


namespace App\Entity\admin;


class Administrador
{
    public $usuario;
    public $pass;

    public function __construct($usuario, $pas){
        $this->usuario = $usuario;
        $this->pass = $pas;
    }

    public function getUser(){
        return $this->usuario ." ".$this->pass;
    }

}