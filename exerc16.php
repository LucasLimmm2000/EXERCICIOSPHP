<?php
declare(strict_types=1);

/*
Crie um array de 1 a 20 e, em três variáveis separadas: ﬁltre os pares com
array_filter , multiplique cada um por 2 com array_map , e some tudo com array_reduce .
*/
function pares(int $valor) : bool {
    return $valor % 2 == 0;
}

function dobro(int $valor): int {
    return $valor * 2;
}

$valores = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12 ,13 ,14, 15, 16, 17, 18, 19, 20);

echo "pares:\n\n" . 
print_r(array_filter($valores, "pares"), true ) .
"\n\nmultiplicados por 2:\n\n" .
print_r(array_map("dobro", $valores), true);

?>