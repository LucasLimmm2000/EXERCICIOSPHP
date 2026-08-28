<?php
declare(strict_types=1);
/*
Escreva function saudacao(string $nome, string $saudacao = "Olá") , chame com e
sem o segundo argumento, e depois chame usando argumento nomeado ( saudacao(nome:
"Ana") )
*/

function saudacao(string $nome, string $saudacao = "Olá") {
    echo  "$nome $saudacao";
}

function saudacao_correct(string $nome  = "Lucas", string $saudacao = "Olá") {
    echo  "$nome $saudacao";
}

#saudacao(); // retorna erro pois $nome não é um argumento nomeado
saudacao_correct();