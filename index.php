<?php    
require_once './Aluno.php';
$aluno1 = new Aluno();
$aluno1->setCpf(123456);
$aluno1->setMail("aluno@escola.com");
$aluno1->setSenha('123');
$aluno1->setNome('Fulano de Tall');

echo "Senha ".$aluno1->getSenha();
