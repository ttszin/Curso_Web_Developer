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
    <div class="menu-warper">
        <div class="box-usuario">
            <?php
                if($_SESSION['img'] == ''){
            ?>
            <div class="avatar-usuario">
                <i class="fa fa-user"></i>
            </div><!--avatar-usuario-->
            <?php } else {?>
                <div class="imagem-usuario">
                    <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>">
                </div><!--avatar-usuario-->
            <?php }?>
            <div class="nome-usuario">
                <p><?php echo $_SESSION['nome'];?></p>
                <p><?php echo confereCargos($_SESSION['cargo']); ?></p>
            </div><!--nome-usuario-->
        </div><!--box-usuario-->
        <div class="items-menu">
            <h2>Cadastro</h2>
            <a <?php selecionadoMenu('cadastrar-depoimento');?> href="<?php echo INCLUDE_PATH_PAINEL ?>">Cadastrar Depoimento</a>
            <a <?php selecionadoMenu('cadastrar-servico');?> href="">Cadastrar Serviço</a>
            <a <?php selecionadoMenu('cadastrar-slides');?> href="">Cadastrar Slides</a>
            <h2>Gestão</h2>
            <a <?php selecionadoMenu('listar-depoimentos');?> href="">Listar Depoimentos</a>
            <a <?php selecionadoMenu('listar-servicos');?> href="">Listar Serviços</a>
            <a <?php selecionadoMenu('listar-slides');?> href="">Listar Slides</a>
            <h2>Administração do Painel</h2>
            <a <?php selecionadoMenu('editar-usuario');?> href="<?php echo INCLUDE_PATH_PAINEL?>editar-usuario">Editar Usuário</a>
            <a <?php selecionadoMenu('adicionar-usuario');?> <?php verificaPermissaoMenu(2);?> href="<?php echo INCLUDE_PATH_PAINEL?>adicionar-usuario">Adicionar Usuários</a>
            <h2>Configuração Geral</h2>
            <a <?php selecionadoMenu('editar-site');?> href="">Editar Site</a>
        </div><!--items-menu-->
    </div><!--menu-wrapper-->
</div><!--menu-->

<header>
    <div class="center">
        <div class="menu-btn">
            <i class="fa fa-bars"></i>
        </div><!--menu-btn-->

        <div class="loggout">
            <a href="<?php echo INCLUDE_PATH_PAINEL ?> "><i class="fa fa-home" aria-hidden="true"></i><span> Página Inicial</span></a>
            
            <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout "><span>Sair </span><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </div><!--loggout-->
    </div><!--center-->
    <div class="clear"></div>
</header>

<div class="content">

    <?php Painel::carregarPagina(); ?>

</div><!--content-->

<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js "></script>
</body>
</html>