<?php
namespace App\Service\post;

use App\Entity\post\Post;

interface IPostService{

    public function valoracionPost(): array;

    public function postMasVistos(): array;

    public function addPost(Post $model): void;

    public function getAllPost(): array;

}