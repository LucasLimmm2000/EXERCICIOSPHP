<?php
declare(strict_types=1);
/*
Declare uma variável de cada tipo escalar (string, int, ﬂoat, bool) e use var_dump() em
cada uma; depois troque para gettype() e compare.
*/

//dentro do php existe cerca de 9 tipos vou fazer apenas para quatro

$valor = "valor qualquer";
$numero = 15;
$valorbool = true;
$numerofloat = 15.5;

foreach ($GLOBALS as $chave => $v) {
    

    echo ' variavel: ' . $chave;
    echo ' valor :'; 
    var_dump($v); 
    echo ' O tipo é : ' . gettype($v);

}
?>

