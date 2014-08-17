<?php
namespace Metropolitana;
class MetodoDinamico {
    private $codigo;
    private $nome;
    private $telefone;
    private $email;
    private static $endereco;

    public function __construct($cod=0,$nome='',$tel='',$email='')
    {
        $this->codigo = $cod;
        $this->nome = $nome;
        $this->telefone = $tel;
        $this->email = $email;
    }
    
    public function __call($name, $arguments)
    {
        $prefixo = strtolower(substr($name, 0,3));
        $propriedade = strtolower(substr($name, 3));
        
        if(isset($this->$propriedade)){
            switch ($prefixo) {
                case 'set':$this->$propriedade = current($arguments);
                    break;
                case 'get': return $this->$propriedade;
                default:
                    throw new Exception;
            }
            
        }
    }
    
    public static function __callStatic($name, $arguments)
    {
        $prefixo = strtolower(substr($name, 0, 3));
        $propriedade = strtolower(substr($name, 3));

        switch ($prefixo) {
            case 'set':self::$endereco[$propriedade] = current($arguments);
                break;
            case 'get': return self::$endereco[$propriedade];
        }
    }
}
