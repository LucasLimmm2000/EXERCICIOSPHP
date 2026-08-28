<?php
require_once 'vendor/autoload.php';
/*
Crie src/Servico/Autenticador.php com namespace App\Servico; e uma classe
simples, e um index.php que faz use App\Servico\Autenticador; e instancia a classe. Se
tiver Composer, repita com composer init e autoload PSR-4 em vez de require manual.
*/
use App\Servico\Autenticator;
$teste = new Autenticator("lucas", "25");
echo $teste->getName();

?>

/*
O composer faz o mapeamento dos namespaces para os diretorios reais, usando o composer ele carrega automaticamente todas as classes 
usamos o use para renomear o nome das funcoes, legibilidade do codigo, nota: App\\ no composer \ é caractere de escapa para apresentar a barra invertida

*/