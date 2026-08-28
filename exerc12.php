<?php
declare(strict_types=1);
/*
Escreva function formatarPreco($valor) que recebe um float e devolve formatado
em real (ex.: 1234.5 → "R$ 1.234,50") usando number_format .
*/
$valor = "1243.52";
echo 'R$'.str_replace(".",",", $valor);


?>