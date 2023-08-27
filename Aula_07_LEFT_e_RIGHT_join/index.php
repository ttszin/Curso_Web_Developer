<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ACIMA COLOCA PARA APARECER OS ERROS QUE OCORREM NO SQL 
    $sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`");
    $sql->execute();
    $clientes = $sql->fetchAll();
    
  
    foreach ($clientes as $key => $value){

        echo $value['nome'];
        echo '<hr>';
    }


?>