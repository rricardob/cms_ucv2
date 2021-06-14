<?php

//require $_SERVER['DOCUMENT_ROOT'] . "/cms_ucv2/src/Repository/post/PostRepository.php";
require "{$_SERVER['DOCUMENT_ROOT']}/cms_ucv2/vendor/autoload.php";

use App\Impl\post\PostImpl;
/*use App\Repository\post\PostRepository;
$postRepository = new PostRepository();*/

$postImpl = new PostImpl();
//var_dump($postRepository);
//Comprobamos que el valor no venga vacío
if (isset($_POST['funcion']) && !empty($_POST['funcion'])) {
    $funcion = $_POST['funcion'];

    //En función del parámetro que nos llegue ejecutamos una función u otra
    switch ($funcion) {
        case 'getValoracionPost':
            $data = $postImpl->valoracionPost();
            echo json_encode($data);
            break;
        case 'getPostMasVistos':
            $data = $postImpl->postMasVistos();
            echo json_encode($data);
            break;
    }
}else{
    echo json_encode("data not found");
}