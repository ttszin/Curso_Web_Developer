<?php
    //é uma classe que só pode ser herdada
    abstract class teste(){

        public function func1(){
            echo 'chamando funcao 1';
        }

    }

    class Principal extends teste{

    }

    $principal = new Principal;

    $principal->func1();

?>