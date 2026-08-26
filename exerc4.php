<?php
declare(strict_types=1);
/*
Refaça a função acima como function dobrar(int $x): int , adicione
declare(strict_types=1) no topo do arquivo e tente chamar com "5" . Anote o erro.
Escreva pelo menos 6 comparações com == que "enganam" ( 0 == "a" , "1" ==
"01" , null == false , [] == false etc.), imprima o resultado de cada uma, e repita as
mesmas comparações com === ao lado.
*/
function dobrar(int $x){
    return $x * 2 ;
}

echo "adicione um valor no input:";
$valor = trim(fgets(STDIN));
if (is_numeric($valor)) {
    $valor = (int) $valor;
    echo dobrar($valor) . PHP_EOL;
    }
else echo "valor digitado não é um número";

echo null == false;

echo "1" == "01";

echo "0" == "a";

echo [] == false;

?>