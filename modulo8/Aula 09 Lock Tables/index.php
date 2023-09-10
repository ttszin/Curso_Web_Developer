<?php

    $pdo = new PDO('mysq:host=localhost;dbname=devweb','root','')

    $pdo->exec("LOCK TABLES `tb_admin.usuarios` WRITE");

    sleep(10);
?>