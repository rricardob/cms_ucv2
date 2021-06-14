<?php
declare(strict_types=1);

namespace App\Entity\post;


class Post{
    private int $id_post;
    private string $titulo_post;
    private string $fechareg_post;
    private int $id_usuario;
    private string $descripcion_post;
    private string $imagen_post;
    private int $id_categoriaPost;
    private int $peso_post;
    private int $estado_post;
    private string $subtitulo_post;

    /**
     * @return int
     */
    public function getIdPost(): int
    {
        return $this->id_post;
    }

    /**
     * @param int $id_post
     */
    public function setIdPost(int $id_post): void
    {
        $this->id_post = $id_post;
    }

    /**
     * @return string
     */
    public function getTituloPost(): string
    {
        return $this->titulo_post;
    }

    /**
     * @param string $titulo_post
     */
    public function setTituloPost(string $titulo_post): void
    {
        $this->titulo_post = $titulo_post;
    }

    /**
     * @return string
     */
    public function getFecharegPost(): string
    {
        return $this->fechareg_post;
    }

    /**
     * @param string $fechareg_post
     */
    public function setFecharegPost(string $fechareg_post): void
    {
        $this->fechareg_post = $fechareg_post;
    }

    /**
     * @return int
     */
    public function getIdUsuario(): int
    {
        return $this->id_usuario;
    }

    /**
     * @param int $id_usuario
     */
    public function setIdUsuario(int $id_usuario): void
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return string
     */
    public function getDescripcionPost(): string
    {
        return $this->descripcion_post;
    }

    /**
     * @param string $descripcion_post
     */
    public function setDescripcionPost(string $descripcion_post): void
    {
        $this->descripcion_post = $descripcion_post;
    }

    /**
     * @return string
     */
    public function getImagenPost(): string
    {
        return $this->imagen_post;
    }

    /**
     * @param string $imagen_post
     */
    public function setImagenPost(string $imagen_post): void
    {
        $this->imagen_post = $imagen_post;
    }

    /**
     * @return int
     */
    public function getIdCategoriaPost(): int
    {
        return $this->id_categoriaPost;
    }

    /**
     * @param int $id_categoriaPost
     */
    public function setIdCategoriaPost(int $id_categoriaPost): void
    {
        $this->id_categoriaPost = $id_categoriaPost;
    }

    /**
     * @return int
     */
    public function getPesoPost(): int
    {
        return $this->peso_post;
    }

    /**
     * @param int $peso_post
     */
    public function setPesoPost(int $peso_post): void
    {
        $this->peso_post = $peso_post;
    }

    /**
     * @return int
     */
    public function getEstadoPost(): int
    {
        return $this->estado_post;
    }

    /**
     * @param int $estado_post
     */
    public function setEstadoPost(int $estado_post): void
    {
        $this->estado_post = $estado_post;
    }

    /**
     * @return string
     */
    public function getSubtituloPost(): string
    {
        return $this->subtitulo_post;
    }

    /**
     * @param string $subtitulo_post
     */
    public function setSubtituloPost(string $subtitulo_post): void
    {
        $this->subtitulo_post = $subtitulo_post;
    }


}