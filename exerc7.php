<?php
declare(strict_types=1);
/*
Declare $x dentro de uma função e outra fora; tente acessar a de fora com global $x ,
depois remova o global e confirme o warning.
*/

$valor = 5;
function test_global(){
    global $valor;
    echo ' valor da variavel: ' . $valor;
}
test_global();
?>