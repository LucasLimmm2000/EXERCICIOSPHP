<?php
declare(strict_types=1);
/*
29 . Escreva function buscarUsuario(int $id): ?array que devolve null se não achar
(simule um array ﬁxo como "banco"), e function processar(int|string $valor) usando
union type. Teste os dois caminhos possíveis de cada uma.
*/

$valores = [
    ["id" => "153213512", "nome" => "lucas paixao"],
    ["id" => "153221321", "nome" => "renato ricardo"],
    ["id" => "153221321", "nome" => "joao ricardo"],
    ["id" => "1521152321", "nome" => "debora ricardo"],
    ];

/* O processar não é essencial, mesmo se usassemos no argumento ainda teriamos que validar qual tipo do id é armazenado no banco
só não causa incosistencia por que $v["id"] == $id é uma comparacao frouxa 
*/

function buscarUsuario(int $id): ?array {
    $id = (string) $id;    
    global $valores;
        foreach ($valores as $v)
            if ($v["id"] == $id) return $v;
}

echo print_r(buscarUsuario(153221321));

?>