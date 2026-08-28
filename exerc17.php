<?php
declare(strict_types=1);
/*
Reproduza o bug clássico do foreach por referência: percorra um array com
foreach ($arr as &$v) , faça um segundo foreach sem ter dado unset($v) antes, e mostre
o último elemento se corrompendo. Corrija com unset($v)
*/
$valor = array(1, 2, 3, 4, 5);
$valor2 = array(2,4,6,8,10 );
foreach($valor as &$v){
    echo "$v";
}
#unset($v); retira a referência

echo "\n\n";
foreach($valor2 as $v){
    $v += 3;
    echo "$v";
}
echo "\n\n$valor[4]";

/*
O que acontece é o seguinte o $v não é uma variavel normal, ela aponta para ultimo elemento do array valor
o que acontece que como não demos unset para retirar a referencia ao endereco de memoria alocado para o elemento do array valor
qualquer manipulacao que fizermos em $v vai sobrescrever o dado que está armazenado e que é apontado por $v, eferência à mesma variável ou posição
*/

?>
