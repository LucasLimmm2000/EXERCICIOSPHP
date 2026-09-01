<?php
declare(strict_types=1);
/*
Crie um enum StatusPedido (backed, tipo string) com pelo menos 3 casos e um
método que devolve um rótulo legível pra cada caso usando match($this) . Teste from() ,
tryFrom() com valor inválido, e cases() .

*/
enum StatusPedido : string {
            case PENDENTE = 'pending';
            case ENVIADO = 'sended';
            case ENTREGUE = 'finished';

            public function label() : string{
                return match ($this) {
                     self::PENDENTE => "pedido ainda pendente" . PHP_EOL,
                     self::ENVIADO => "O pedido já foi enviado!" . PHP_EOL,
                     self::ENTREGUE => "O pedido já foi entregue" . PHP_EOL,
                };
            }
}

//cases() retorna todos os casos 
//tryfrom() verifica o case correspondente ao valor, se der mismatch retorna null
// from() verifica a case correspondente, se edr mismatch joga um error de valor 
// DIFERENCAS ENTRE $THIS E SELF
/*

self faz referencia a própria classe
$this faz referência ao objeto que a chamou

*/

$status = StatusPedido::PENDENTE;
echo $status->name; echo "\n";
echo $status->value; echo "\n";
echo $status->label();

?>