<?php
    include('Exemplo.class.php');
    //Instancia de objeto 
    $exemplo = new Exemplo();

    //$exemplo->var1 = 'ola'

    $exemplo->var2 = 'Matheus';

    $exemplo2 = new Exemplo();

    $exemplo2->var2 = 'Nathan';


    echo $exemplo->var2;
    echo '<br />';
    echo $exemplo2->var2;
?>