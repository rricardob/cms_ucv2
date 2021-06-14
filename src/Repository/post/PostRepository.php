<?php

namespace App\Repository\post;
//require "{$_SERVER['DOCUMENT_ROOT']}/cms_ucv2/config/DbProvider.php";
//require "{$_SERVER['DOCUMENT_ROOT']}/cms_ucv2/vendor/autoload.php";
use App\Entity\post\Post;
use Medoo\Medoo;
use Db\DbProvider;

class PostRepository
{

    public $database;

    public function __construct()
    {
        $this->database = DbProvider::getConnection();
    }

    public function getValoracionPost()
    {
        //global $database;

        return $this->database->select("post", [
            "[>]valoracionpost" => ["id_post" => "id_post"],
            "[>]categoriapost" => ["id_categoriaPost" => "id_categoriaPost"]
        ], [
            "categoriapost.nombre_categoriaPost",
            "valoracionpost.valoracion_valoracion",
            "valoracionpost.vistas_valoracion",
            "valoracionpost.fecha_valoracion"
        ], [
            "estado_categoriaPost" => 1,
            "estado_post" => 1,
            "fecha_valoracion[!]" => null
        ], [
            "ORDER" => [
                "valoracionpost.valoracion_valoracion" => "DESC"
            ]
        ]);
    }

    public function getPostMasVistos()
    {
        //global $database;

        return $this->database->select("post", [
            "[>]valoracionpost" => ["id_post" => "id_post"],
            "[>]categoriapost" => ["id_categoriaPost" => "id_categoriaPost"]
        ], [
            "categoriapost.nombre_categoriaPost",
            "valoracionpost.valoracion_valoracion",
            "valoracionpost.vistas_valoracion",
            "valoracionpost.fecha_valoracion",
            "post.titulo_post",
            "anio" => Medoo::raw("YEAR(<valoracionpost.fecha_valoracion>)")
        ], [
            "estado_categoriaPost" => 1,
            "estado_post" => 1,
            "fecha_valoracion[!]" => null,
            "valoracion_valoracion[>]" => 0
        ], [
            "ORDER" => [
                "valoracionpost.vistas_valoracion" => "DESC"
            ]
        ]);
    }

    public function getAll(){
        return $this->database->select("post", [
            "[>]usuario" => ["id_usuario" => "id_usuario"],
            "[>]categoriapost" => ["id_categoriaPost" => "id_categoriaPost"]
        ], [
            "post.id_post",
            "post.titulo_post",
            "post.fechareg_post",
            "post.id_usuario",
            "post.descripcion_post",
            "post.imagen_post",
            "post.peso_post",
            "post.estado_post",
            "post.subtitulo_post",
            "usuario.nom_usuario",
            "usuario.ape_usuario",
            "categoriaPost.nombre_categoriapost"
        ], [
            "ORDER" => [
                "post.fechareg_post" => "DESC",
            ],
        ]);
    }

    public function add(Post $model): void
    {

    }

}