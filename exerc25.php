<?php
declare(strict_types=1);
/*
Crie a classe Produto com propriedades tipadas, construtor, um método
aplicarDesconto(float $percentual): void , e visibilidades diferentes (uma private , uma
protected , uma public ).
*/
class Produto {
    public string $nome;
    public float $valor;
    private float $desconto_atual;

    public function __construct(string $nome, float $valor )  {
        $this->nome = $nome;
        $this->valor = $valor;
    }
    
    private function atualizarDesconto(float $valor) : void {
        $this->desconto_atual = $valor;
    }

    public  function aplicarDesconto(float $desconto) : float {
        //não usei programação defensiva , o certo era validar o valor passado como argumento
        $this->atualizarDesconto($desconto); //funções da mesma classe tem que usar a diretiva $this também 
        return $this->valor * (1 - ($desconto)/ 100 );
    }

    // poderia colocar uma protected, mas não coloquei porque essa finalidade ai seria só para entender esse conceito de heranca 
    // e os acessos de propriedades da classe nos filhos, notacao apenas para eu nao esquecer 
}

$abacaxi = new Produto("abacaxi", 20,00);
echo $abacaxi->aplicarDesconto(10);
echo "\n\n";

?>