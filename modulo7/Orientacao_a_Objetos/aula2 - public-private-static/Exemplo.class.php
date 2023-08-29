<?php

    /**
    *Esta classe é de exemplo!
    */

    //Public funciona em qualquer lugar
    //Private funciona apenas dentro da classe

    class Exemplo
    {
        private $var1;
        public $var2;

        //public static $var3 = 'Estático';
        /*
        public function metodo(){

        }

        private function metodo2(){

        }
        

        public static function metodoEstatico(){
            echo 'metodo estatico';
        }

        private function metodo2(){
            echo 'dalemole';
        }
        */

        public function setVar1($var1){
            $this->var1 = $var1;
        }

        public function pegavar1(){
            return $this->var1;
        }
    }

?>
