<?php

    if(isset($_GET['loggout'])){
        Painel::loggout();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH;?>estilo/fontawesome/css/all.css" rel="stylesheet"><!--Adicionando o font awesome-->
    <title>Painel de Controle</title>
    <link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet"/>
</head>
<body>
<div class="menu">

</div>
<header>
    <div class="center">
        <div class="menu-btn">
            <i class="fa fa-bars"></i>
        </div>
        <div class="loggout">
            <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout "><span>Sair </span><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </div><!--loggout-->
    </div>
    <div class="clear"></div>
</header>
<div class="clear"></div>
</body>
</html>