<?php
declare(strict_types=1);
/*
Crie Contador com static function criar(): static { return new static(); } ; crie
ContadorEspecial extends Contador e conﬁrme que ContadorEspecial::criar() devolve
um ContadorEspecial (late static binding).
*/
Class Contador {
    public string $nome;

    public function __construct(string $nome){
        $this->nome = $nome;
    }
    static function criar(string $nome): static {
        return new static($nome);

    }

}

class ContadorEspecial extends Contador {
}

$contador = ContadorEspecial::criar("lucas");
echo $contador->nome;
// new static não tem definição enquanto o método é chamado é diferente do new self() que por definicao se refere a classe em que foi
// definida 

// static pode definir metodos que sao chamados sem precisar instanciar, variaveis que persistem mesmo depois da chamada da funcao
// e quando sozinha, refere a classe que fez a chamada. 
// logo: new static() ---> new ClasseEmquePossuioMetodo( )  nota: podemos passar argumentos para static()


?>