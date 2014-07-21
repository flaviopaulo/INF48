<?php

$nome = "anos";
$idade = 2;
echo $idade + $nome;

if (true) {
    echo "verdade";
} elseif (true) {
    echo "Mentira";
}
$num = 10;

echo $num>10?"Maior":"Menor";
for($i=0;$i<10;$i++){
    echo "$i";
}
$i=20;
while ($i<10){
    echo $i--;
}
do{
    echo "Do";
}while (FALSE);
$dados[]=0;
$dados = array(1,2,3,4);
foreach ($dados as $valor){
    echo $valor;
}
