<?php
declare(strict_types=1);
/*
Verifique se uma string contém uma palavra usando if (strpos(...)) direto (sem
tratar) pra ver o bug quando a posição é 0 ; depois corrija com !== false e por fim
reescreva com str_contains() .
*/
$nome  = "Um nome qualquer ";
if (str_contains($nome, "Um")){
    echo "tem um valor dentro dele";
}
else echo "nao tem";
/*
O strpos ele retorna a posicao index da onde começa a palavra procurado, se começar no inicio ele retorna 0, 0 é falsy
para entramos na condicional devemos comparar com false estritamente !==
*/
?>