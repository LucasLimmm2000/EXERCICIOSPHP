<?php
declare(strict_types=1);
/*
Crie um array associativo com seus próprios dados (nome, idade, skills como array
aninhado) e imprima cada campo, incluindo o primeiro item de skills .
*/

function verificarDados(array $array){
    foreach($array as $chave => $valor){
        if($chave == "skills") foreach ($valor as $elAninhado) echo "\t$elAninhado\n";
        else echo "$chave > $valor\n\n"; // tomar cuidado pois voce nao pode iterar em um array como se fosse uma string
    }

}

$array_teste = [
    "nome" => "lucas paixão de lima costa",
    "idade" => 26,
    "skills" => ["ingles", "programacao", "arquitetura distribuida", "autodidata"]
    ];
    
verificarDados($array_teste);    


?>