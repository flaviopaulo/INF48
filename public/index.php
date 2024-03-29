<?php
header('Content-type: text/html;charset=utf-8');
use Metropolitana\AtributoDinamico;
use Metropolitana\MetodoDinamico;
use Metropolitana\Db\PdoMysql;
include_once '../library/Autoloader.php';
include_once '../library/SplClassLoader.php';
$loader = new SplClassLoader();
$loader->register();
//instância
$propriedade = new AtributoDinamico(null);
$db = new PdoMysql;

$metodo = new MetodoDinamico();
//variaveis
$codigo = 1;
$nome = 'Pedro';
$telefone = '22119954';
$email = 'pedro@lol.com';
//métodos mágicos {__set}
$propriedade->codigo=$codigo;
$propriedade->nome=$nome;
$propriedade->telefone=$telefone;
$propriedade->email=$email;
echo "{$propriedade->nome} {$propriedade->telefone} {$propriedade->email}<br>";


//métodos mágicos {__set}
$metodo->setCodigo($codigo);
$metodo->setNome($nome);
echo "{$metodo->getCodigo()} {$metodo->getNome()}<br>";
//métodos mágicos __calStatic
MetodoDinamico::setLocal('Brasil');
MetodoDinamico::setCidade('Marabá');
echo MetodoDinamico::getLocal();
echo "<br>";
echo MetodoDinamico::getCidade();

