<?php

include_once './Produto.php';

class Livro extends Produto{
    private $titulo;
    private $ISBN;
    
    public function setTitulo($title)
    {
        $this->titulo = $title;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setIsbn($isbn)
    {
        $this->ISBN = $isbn;
    }
    public function getIsbn()
    {
        return $this->ISBN;
    }
}

