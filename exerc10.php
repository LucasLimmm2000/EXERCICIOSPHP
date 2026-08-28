<?php
declare(strict_types=1);
/*
Escreva function iniciais($nomeCompleto) que devolve as iniciais em maiúsculo (ex.:
"lucas paixão" → "L.P."), usando explode , alguma função de maiúscula e implode .
*/
function iniciais(&$nomecompleto) {
    $nome = explode(" ", $nomecompleto);
    $iniciais = [];
    foreach($nome as $n){
        $iniciais[] = strtoupper($n[0]);
    }
    $nome = implode(".", $iniciais) . ".";
    return $nome;
}

$nomecompleto = "lucas paixao de lima costa";
echo iniciais($nomecompleto);

?>