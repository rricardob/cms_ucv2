<?php

namespace App\Impl\post;

use App\Entity\post\Post;
use App\Repository\post\PostRepository;
use App\Service\post\IPostService;

class PostImpl implements IPostService {

    private $postRepository;

    public function __construct(){
        $this->postRepository = new PostRepository();
    }

    public function valoracionPost(): array {
        return $this->postRepository->getValoracionPost();
    }

    public function postMasVistos(): array {
       return $this->postRepository->getPostMasVistos();
    }

    public function addPost(Post $model): void{
        $this->postRepository->add($model);
    }

    public function getAllPost(): array{
        return $this->postRepository->getAll();
    }
}