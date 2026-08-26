<?php
declare(strict_types=0);
/*
Escreva function dobrar($x) sem tipos declarados e chame com um int, com a string
"5" e com um array. Anote o que acontece em cada chamada.
*/
$value = [1, 2 ,3 , 4 , 5, 6];
function dobrar($x) { return $valor = $x * 2; } 

#echo "Digite um valor :";
#$valor = trim(fgets(STDIN));
#var_dump($value);

foreach($value as $v) { echo "valor duplicado : " . dobrar($v); echo "\n"; } ;
?>

