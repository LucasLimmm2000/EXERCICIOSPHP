<?php
declare(strict_types=1);
/*
Classiﬁque uma idade ﬁxa em "criança", "adolescente" ou "adulto" com if/elseif/
else , e escreva um segundo exemplo simples de 2 saídas usando o ternário curto ( ?: ).
*/
echo "digite a idade:\n";
$valores  = trim(fgets(STDIN));
echo "\n\n";
if((((int) $valores)) < 12) echo "criança";
elseif (((int) $valores) >= 12 && (int) $valores < 18 ) echo "adolescente";
else echo "adulto\n";

/* Aplicação do operador ternário em três opção */
echo "\n\n";
$resultado = $valores < 12 ? "criança" : ($valores > 18 ? "adulto" :  "adolescente");
echo "$resultado";
?>