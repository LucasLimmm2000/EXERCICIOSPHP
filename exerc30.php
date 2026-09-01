<?php
declare(strict_types=1);

/*
Escreva uma função que lança InvalidArgumentException se receber um número
negativo, e um try/catch/finally que captura, imprime a mensagem, e usa o finally pra
imprimir "processamento encerrado".

*/
function somaPositivos(int $v, int $v2){
    if( $v < 0 || $v2 < 0) throw new InvalidArgumentException("Error ao processar valores negativos" . PHP_EOL);
    return $v + $v2;
}
//throw é construção da linguagem, usado para lançar as excessoes
// new diretiva para instanciar , uma exceção é um objeto
try{
somaPositivos(-1, -2);

} catch(Exception $e){
    echo "\nerror:\n" . $e->getMessage();

} finally{
    echo "erro ao processar a soma";
}

?>