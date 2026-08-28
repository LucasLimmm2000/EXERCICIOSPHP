<?php
declare(strict_types=1);
/*
Crie um array multidimensional de usuários (id, nome) e use foreach pra imprimir
"ID: X — Nome: Y" de cada um.
*/
$valores = [
    ["id" => "153213512", "nome" => "lucas paixao"],
    ["id" => "153221321", "nome" => "renato ricardo"],
    ["id" => "153221321", "nome" => "joao ricardo"],
    ["id" => "1521152321", "nome" => "debora ricardo"],
    ];

foreach($valores as $v){
    foreach($v as $chave => $valor){
        echo "chave : $chave == > $valor";
    }    
    echo "\n";
}

?>
