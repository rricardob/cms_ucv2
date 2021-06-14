<?php
//definir los metodos utilizados en otra clase, y deben ser publicos
interface AdminService{

    public function Login($user,$pass):bool;

}
