<?php

    $pdo = new PDO('mysq:host=localhost;dbname=devweb','root','')

    $pdo->prepare("SELECT * FROM `tb_admin.usuarios`" );

    $sql->execute();

    $usuarios = $sql->fetchAll();
    foreach ($usuarios as $key => $value){
        echo $value['nome'];
        echo '<hr>';
    }

?>