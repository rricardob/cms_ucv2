<?php
declare(strict_types=1);

namespace App\helper;

class View{

    public static function loadView(string $vista, array $datos = []): void{
        if (file_exists("../public/{$vista}.php")){
            require_once("../public/{$vista}.php");
        }else{
            die("La vista no existe");
        }
    }

}