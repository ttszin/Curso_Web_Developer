<?php
    include('Exemplo.class.php');
    //Instancia de objeto 
    $exemplo = new Exemplo();
    $exemplo->setVar1('Matheus');
    echo $exemplo->pegavar1();
    //$exemplo->var1 = 'ola'
    //$exemplo->var2 = 'Matheus';
    echo '<hr />';
    $exemplo2 = new Exemplo();
    $exemplo2->setVar1('Nathan');
    echo $exemplo2->pegavar1();
    //$exemplo2->var2 = 'Nathan';

    /*
    echo $exemplo->var2;
    echo '<br />';
    echo $exemplo2->var2;
    */

    //A variável estática não pode ser instanciada, somente de outra maneira, caso contrário terá somente o valor designado
    //Exemplo::$var3 = 'Outra variavel';
    //echo Exemplo::$var3;

    Exemplo::metodoEstatico();
    

?>