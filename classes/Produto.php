<?php
abstract class Produto{
    private $codigo;
    private $valor;
    //setar
    public function setCodigo($cod)
    {
        $this->codigo = $cod;
    }
    //retornar
    public function getCodigo()
    {
        return $this->codigo;   
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    public function getValor()
    {
        return $this->valor;
    }
}

