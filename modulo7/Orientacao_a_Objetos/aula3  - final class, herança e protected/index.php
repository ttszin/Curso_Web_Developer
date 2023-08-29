<?php

    //Quando uma classe é final ela não pode ser herdada, somente a classe final deve ter a tag final na frente 
    //A funcao com protected pode ser chamada por uma classe que herda, diferente da private
    class Filha{

        protected function funcaoTeste(){
            echo 'chamando funcao teste';
        }

        public function mostrarOla(){
            echo 'Ola mundo';
        }
    }

    class Pai extends Filha{

        public function mostrarOla(){
            echo 'nova funcao';
        }

        //com a palavra chave parent seguida de dois pontos, chamamos a função da classe herdada, mesmo nessa classe tendo uma função com o mesmo nome
        public function mostrarTchau(){
            parent::mostrarOla();
            echo 'Tchau Mundo';
            echo '<br />';
            $this->funcaoTeste();
        }
    }

    $pai = new Pai();

    $pai->mostrarTchau();

    $filha = new Filha;

    echo '<br />';
    $pai->mostrarOla();
    //$filha->mostrarOla();
?>