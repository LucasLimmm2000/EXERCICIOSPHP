<?php
declare(strict_types=1);

/*
Crie a interface Notificavel com notificar(string $msg): bool , e duas classes
diferentes que a implementam.
*/


/*A interface ela serve como um molde */
interface Notificavel {
    
    public function notificar(string $msg) : bool;

}

class classe1 implements notificavel {

    public function __construct(
        public string $name,
        public string $toque
    ){}
    
    public function notificar(string $msg) : bool {
        // regra de negocio qualquer
        echo "implementacao1";
    }

}

class classe2 implements notificavel {

    public function __construct(
        public string $name,
        public string $toque
    ) {}

    public function notificar(string $msg) : bool {
        //regra de negocio qualquer 
        echo "implementacao2";
    }
}


//Basta instanciar agora 
?>