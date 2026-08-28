<?php
declare(strict_types=1);

namespace App\Servico;

class Autenticator{
    public string $nome;
    public string $idade;
    
    public function __construct(string $nome, string $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getName() : string{ return $this->nome; }
    public function getage() : string { return $this->idade; }


}


?>