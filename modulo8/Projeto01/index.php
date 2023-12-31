<?php include('config.php');?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    <title>Projeto 01</title>
    <link href="<?php echo INCLUDE_PATH;?>estilo/style.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH;?>estilo/fontawesome/css/all.css" rel="stylesheet"><!--Adicionando o font awesome-->
</head>
<body>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch($url) {
            case 'depoimentos':
                echo '<target target="depoimentos"  />';
                break;
            case 'servicos':
                echo '<target target="servicos" />';
                break;
            
        }
    ?>
    <header>
        <div class="center">
        <div class="logo left">Logomarca</div>
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Depoimentos</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>                         
            </ul>
        </nav>
        <nav class="mobile right">
            <div class="botao-menu-mobile">
                <i class="fa-solid fa-bars"></i>
            </div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>Depoimentos">Depoimentos</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>                         
            </ul>
        </nav>
        <div class="clear"></div><!--clear-->
        </div><!--Center-->
    </header>

    <?php
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            //Podemos fazer o que quiser pois a página não existe
            if($url != 'depoimentos' && $url != 'servicos'){
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
        }
    ?>


    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed "';?>>
        <div class="center">
            <p>Todos os  direitos reservados
            </p>
        </div>
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <?php
        if($url == 'home' || $url == ''){
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php } ?>
    
    <?php
        if($url=='contato'){
    ?>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCkPoXzH5mTjtGOM-pDWgmWsQLgyNN9aes&callback=Function.prototype'></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php } ?>
    <!-- <script>
        $(function(){
            alert("Já me livrei do zika virus")
            console.log("Tamo aprendendo")
        })
    </script>  -->

</body>
</html>