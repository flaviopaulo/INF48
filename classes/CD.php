<?php
include_once './Produto.php';
class CD extends Produto{
    private $album;
    private $artista;
    
    public function setAlbum($album)
    {
        $this->album = $album;
    }
    public function getAlbum()
    {
        return $this->album;
    }
    public function setArtista($cantor)
    {
        $this->artista = $cantor;
    }
    public function getArtista()
    {
        return $this->artista;
    }
    
}
