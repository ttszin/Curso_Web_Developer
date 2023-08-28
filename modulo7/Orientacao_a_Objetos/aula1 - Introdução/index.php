<?php
    class Pessoa{
        //Objeto pessoa
        
        // private deixa o método acessível somente nessa classe
        private $nome = 'Matheus';
        private $idade = '22';
        private $peso = '130';
        // O $this é usado para chamar outra função privada dentro da classe
        public function crescer (){
            $this->comer();
            echo 'estou crescendo';
        }

        private function comer(){
            echo 'estou comendo ';
        }
    }

    //Instanciar
    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();
  

?>