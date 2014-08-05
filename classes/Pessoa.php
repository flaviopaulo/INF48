<?php
abstract class Pessoa{
    private $mail;   //Somente a classe
    protected $nome;//Classe e Sub
    private $cpf;   //Somente a classe Pessoa
    private $senha;


    //Encapsulamento
    public function setCpf($cpf)
    {
        if(is_numeric($cpf))
            $this->cpf = $cpf;
        else
            $this->cpf = null;
    }
    
    public function getCpf()
    {
        return $this->cpf;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
        
    }
    public function setMail($email)
    {
        $this->mail = $email;
    
    }
    
    public function getMail()
    {
        return $this->mail;
    }
     public function setSenha($senha)
     {
         $this->senha=$senha;
     }
     public function getSenha()
     {       
             return md5($this->senha);
     }
     
     abstract public function trabalhar();

    
}
