<?php
declare(strict_types=1);

/*
Crie um trait ComTimestamp com um método que devolve a data atual, e use esse trait
em duas classes sem relação de herança entre si.
*/


//trait é uma forma de utilizar varios metodos e atributos de uma classe 

trait ComTimestamp {
    public function getTime() {
        echo date('d/m/Y');
    }
}

class relogio1 {
    use ComTimestamp;

    public function __construct(
        public string $name, 
        public string $age
        ){}
    
    public function getdate() {
        $this->getTime();
    }


    /* faz a mesma coisa para outra classe por exemplo usa a diretiva use  */
}
?>