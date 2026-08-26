<?php
declare(strict_types=1);
/*
Escreva uma função sem parâmetros que usa uma variável static para contar quantas
vezes foi chamada, e chame ela 5 vezes seguidas.
*/

function staticcount() {
    static $value = 0;
    echo ++$value;
}

staticcount();
staticcount();
staticcount();
staticcount();
staticcount();
staticcount();

?>
