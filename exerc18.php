<?php
declare(strict_types=1);
/*
Escreva function ordenarPorIdade($usuarios) que ordena o array do exercício 14
(adicione um campo idade) usando usort com o operador spaceship ( <=> ).
*/
function related(array $a, array $b) : int {
    return $a["idade"] <=> $b["idade"];
}

$valores = [
    ["id" => "153213512", "nome" => "lucas paixao", "idade" => 15],
    ["id" => "153221321", "nome" => "renato ricardo", "idade" => 30],
    ["id" => "153221321", "nome" => "joao ricardo", "idade" => 23],
    ["id" => "1521152321", "nome" => "debora ricardo", "idade" => 20],
    ];

usort($valores, "related");
echo print_r($valores, true);

/*
usort não retorna apenas faz a modificação, usando uma função criada de comparacao
*/
?>