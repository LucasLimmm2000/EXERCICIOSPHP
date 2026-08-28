<?php
declare(strict_types=1);
/*
Crie uma constante com define() e outra com const , imprima as duas e comente no
código por que const é preferível hoje
*/
define("variavel", 2);
echo variavel;

const variavelss = 5;
echo variavelss;

/*
por que usar o const em vez de define
pode ser usado dentro do corpo de classes
definido em tempo de compilacao
respeita namespace
*/
?>