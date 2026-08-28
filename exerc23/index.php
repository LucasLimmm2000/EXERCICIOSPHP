<?php
declare(strict_types=1);
require_once 'config.php';
/*
Crie config.php (com uma constante) e index.php com require_once
'config.php' . Apague ou renomeie config.php e rode de novo pra ver o Fatal Error; troque
require_once por include e rode outra vez pra ver que agora é só Warning e o script
continua.
*/
echo "\n\ncheguei aqui\n\n";
echo valor;

/*
require_once interrompe  a execução do código, fatal error, o include gera um waning e continua com o fluxo do código
*/

?>