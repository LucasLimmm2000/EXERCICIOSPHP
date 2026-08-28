<?php
declare(strict_types=1);
/*
22 . Teste switch(0) com um case "abc": no PHP atual e veja se ainda "casa" (era um
bug clássico em versões antigas). Depois reescreva com match(0) e conﬁrme que não casa.
*/

switch(0) { /* no php 8 não converte quando é comparacao de valores numericos para string nao numerico por isso retorna false  */
    case "abc":
        echo "o bug ainda persiste\n"; break;
    default:
        echo "não persiste\n\n"; 

}
echo match(0) { /* O match retorna o valor */
    "abc" => "o bug persiste",
    0 =>  "não persiste",
};

?>