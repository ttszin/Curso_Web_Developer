<?php
    //é uma classe que só pode ser herdada
    abstract class teste{

        public function func1(){
            echo 'chamando funcao 1';
        }

        abstract function func2();

    }

    class Principal2{
        public static function outroMetodoEstatico(){
            echo 'Meu outro método';
        }
    }

    class Principal extends teste{
        public function func2(){
            echo 'Father é fogo';
        }
        
        public static function metodoestatico(){
            echo 'metodo estatico';
        }

        public function funcao(){
            self::metodoestatico();
            echo '<hr />';
            Principal2::outroMetodoEstatico();
        }
    }

    //$principal = new Principal;

    //$principal->func1();


    $principal = new Principal;

    $principal->funcao();

    
?>