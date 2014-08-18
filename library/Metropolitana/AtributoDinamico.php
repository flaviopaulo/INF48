<?php
namespace Metropolitana;
class AtributoDinamico {
    
    private $data;
    public $cor;

    public function __construct($data) {
        $this->data = $data;
    }
    
    public function __set($name, $value) {
        $this->data[$name]=$value;
    }
    
    public function __get($name) {
        if(isset($this->data[$name])){
            return $this->data[$name];            
        }
        throw new Exception;
    }


}
