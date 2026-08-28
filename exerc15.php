<?php
declare(strict_types=1);
/*
No mesmo array de usuários, use array_column() pra extrair só os nomes.
*/
$valores = [
    ["id" => "153213512", "nome" => "lucas paixao"],
    ["id" => "153221321", "nome" => "renato ricardo"],
    ["id" => "153221321", "nome" => "joao ricardo"],
    ["id" => "1521152321", "nome" => "debora ricardo"],
    ];

$array_id = array_column($valores, "nome");
foreach($array_id as $nomes) echo "nome --> " . $nomes . "\n";

?>