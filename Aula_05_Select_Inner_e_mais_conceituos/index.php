<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    $sql = $pdo->prepare("SELECT `posts`.*,`categorias`. *,`posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`");

    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($info);
    echo '</pre>';

    /*
    foreach ($info as $key => $value) {
        echo 'Titulo: '.$value['título'];
        echo '<br />';
        echo 'Noticias: '.$value['conteudo'];
        echo '<hr>';
    }
    */

?>