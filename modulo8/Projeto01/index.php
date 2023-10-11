<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    <title>Projeto 01</title>
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="estilo/fontawesome/css/all.css" rel="stylesheet"><!--Adicionando o font awesome-->
</head>
<body>
    <header>
        <div class="center">
        <div class="logo left">Logomarca</div>
        <nav class="desktop right">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Serviços</a></li>
                <li><a href="">Contato</a></li>                         
            </ul>
        </nav>
        <nav class="mobile right">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Serviços</a></li>
                <li><a href="">Contato</a></li>                         
            </ul>
        </nav>
        <div class="clear"></div><!--clear-->
        </div><!--Center-->
    </header>

    <section class="banner-principal">
        <div class="overlay"></div><!--overlay-->
        <div class="center">
        <form action="">
            <h2>Qual o seu melhor e-mail?</h2>
            <input type="email" name="email" required>
            <input type="submit" name="acao" value="Cadastrar!">
        </form>
        </div><!--center-->
    </section><!--banerprincipal-->

    <section class="decricao-autor">
        <div class="center">
        <div class="w50 left">
            <h2>Matheus T. Souza</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae augue velit. Sed urna massa, fringilla et est sed, dignissim semper nulla. Pellentesque habitan
            t morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sapien massa, pulvinar vel convallis commodo, tincidunt posuere dui. Ut at elit condimentum, 
            consectetur dolor at, ullamcorper purus. Praesent sit amet lorem commodo, pharetra arcu at, posuere lectus. Integer dignissim mollis odio, eu laoreet erat imperdiet in. Nunc
            sed eleifend turpis. Pellentesque orci augue, pretium ac mi dignissim, ultrices rutrum dolor. Sed ut massa sapien. Phasellus ultricies ullamcorper ultrices. Interdum et male
            suada fames ac ante ipsum primis in faucibus. Aenean purus nulla, efficitur vel ipsum in, iaculis mattis risus. Quisque pharetra lorem sodales pretium iaculis. Mauris magna es
            t, ultrices at pellentesque et, ultricies ullamcorper neque.
            </p>
        </div><!--w50-->
        <div class="w50 left">
            <!--Pegar imagem depois-->
            <img src="images/faquinhal.png" alt="" width="300" height="300">
        </div><!--w50-->
        <div class="clear"></div>
        </div><!--CENTER-->
    </section><!--Descricao autor -->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-epecialidade">
                <h3><i class="fa-brands fa-css3"></i></h3>
                <h3>CSS3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae augue velit. Sed urna massa, fringilla et est sed, dignissim semper nulla. Pellentesque habitan
                    t morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sapien massa, pulvinar vel convallis commodo, tincidunt posuere dui. Ut at elit condimentum, 
                    consectetur dolor at, ullamcorper purus. Praesent sit amet lorem commodo, pharetra arcu at, posuere lectus. Integer dignissim mollis odio, eu laoreet erat imperdiet in. Nunc
                    sed eleifend turpis. Pellentesque orci augue, pretium ac mi dignissim, ultrices rutrum dolor. Sed ut massa sapien. Phasellus ultricies ullamcorper ultrices. Interdum et male
                    suada fames ac ante ipsum primis in faucibus. Aenean purus nulla, efficitur vel ipsum in, iaculis mattis risus. Quisque pharetra lorem sodales pretium iaculis. Mauris magna es
                    t, ultrices at pellentesque et, ultricies ullamcorper neque.</p>
            </div><!--box especialidade-->
            <div class="w33 left box-epecialidade">
                <h3><i class="fa-brands fa-html5"></i></h3>
                <h3>HTML5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae augue velit. Sed urna massa, fringilla et est sed, dignissim semper nulla. Pellentesque habitan
                    t morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sapien massa, pulvinar vel convallis commodo, tincidunt posuere dui. Ut at elit condimentum, 
                    consectetur dolor at, ullamcorper purus. Praesent sit amet lorem commodo, pharetra arcu at, posuere lectus. Integer dignissim mollis odio, eu laoreet erat imperdiet in. Nunc
                    sed eleifend turpis. Pellentesque orci augue, pretium ac mi dignissim, ultrices rutrum dolor. Sed ut massa sapien. Phasellus ultricies ullamcorper ultrices. Interdum et male
                    suada fames ac ante ipsum primis in faucibus. Aenean purus nulla, efficitur vel ipsum in, iaculis mattis risus. Quisque pharetra lorem sodales pretium iaculis. Mauris magna es
                    t, ultrices at pellentesque et, ultricies ullamcorper neque.</p>
            </div><!--box especialidade-->
            <div class="w33 left box-epecialidade">
                <h3><i class="fa-brands fa-node-js"></i></h3>
                <h3>JavaScript</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae augue velit. Sed urna massa, fringilla et est sed, dignissim semper nulla. Pellentesque habitan
                    t morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sapien massa, pulvinar vel convallis commodo, tincidunt posuere dui. Ut at elit condimentum, 
                    consectetur dolor at, ullamcorper purus. Praesent sit amet lorem commodo, pharetra arcu at, posuere lectus. Integer dignissim mollis odio, eu laoreet erat imperdiet in. Nunc
                    sed eleifend turpis. Pellentesque orci augue, pretium ac mi dignissim, ultrices rutrum dolor. Sed ut massa sapien. Phasellus ultricies ullamcorper ultrices. Interdum et male
                    suada fames ac ante ipsum primis in faucibus. Aenean purus nulla, efficitur vel ipsum in, iaculis mattis risus. Quisque pharetra lorem sodales pretium iaculis. Mauris magna es
                    t, ultrices at pellentesque et, ultricies ullamcorper neque.</p>
            </div><!--box especialidade-->
        </div><!--Center-->
    </section>

    <section class="extras">
        <div class="center">
            <div class="w50 left">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae augue velit. Sed urna massa, fringilla et est sed, dignissim semper nulla. Pellentesque habitan
                        t morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sapien massa, pulvinar vel convallis commodo, tincidunt posuere dui. Ut at elit condimentum, 
                        consectetur dolor at, ullamcorper purus. Praesent sit amet lorem commodo, pharetra arcu at, posuere lectus. Integer dignissim mollis odio, eu laoreet erat imperdiet in. Nunc
                        sed eleifend turpis. Pellentesque orci augue, pretium ac mi dignissim, ultrices rutrum dolor.</p>
                        <p class="nome-autor">Lorem Ipsum</p>
                </div>
                <div class="depoimento-single">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae augue velit. Sed urna massa, fringilla et est sed, dignissim semper nulla. Pellentesque habitan
                        t morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sapien massa, pulvinar vel convallis commodo, tincidunt posuere dui. Ut at elit condimentum, 
                        consectetur dolor at, ullamcorper purus. Praesent sit amet lorem commodo, pharetra arcu at, posuere lectus. Integer dignissim mollis odio, eu laoreet erat imperdiet in. Nunc
                        sed eleifend turpis. Pellentesque orci augue, pretium ac mi dignissim, ultrices rutrum dolor.</p>
                        <p class="nome-autor">Lorem Ipsum</p>
                </div>
                <div class="depoimento-single">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae augue velit. Sed urna massa, fringilla et est sed, dignissim semper nulla. Pellentesque habitan
                        t morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sapien massa, pulvinar vel convallis commodo, tincidunt posuere dui. Ut at elit condimentum, 
                        consectetur dolor at, ullamcorper purus. Praesent sit amet lorem commodo, pharetra arcu at, posuere lectus. Integer dignissim mollis odio, eu laoreet erat imperdiet in. Nunc
                        sed eleifend turpis. Pellentesque orci augue, pretium ac mi dignissim, ultrices rutrum dolor.</p>
                        <p class="nome-autor">Lorem Ipsum</p>
                </div>
            </div><!--w50-->
            <div class="w50 left">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae augue velit. Sed urna massa, fringilla et est sed, dignissim semper nulla. Pellentesque habitan
                    t morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sapien massa, pulvinar vel convallis commodo, tincidunt posuere dui. Ut at elit condimentum, 
                    consectetur dolor at, ullamcorper purus. Praesent sit amet lorem commodo, pharetra arcu at, posuere lectus. Integer dignissim mollis odio, eu laoreet erat imperdiet in. Nunc
                    sed eleifend turpis. Pellentesque orci augue, pretium ac mi dignissim, ultrices rutrum dolor.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae augue velit. Sed urna massa, fringilla et est sed, dignissim semper nulla. Pellentesque habitan
                    t morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sapien massa, pulvinar vel convallis commodo, tincidunt posuere dui. Ut at elit condimentum, 
                    consectetur dolor at, ullamcorper purus. Praesent sit amet lorem commodo, pharetra arcu at, posuere lectus. Integer dignissim mollis odio, eu laoreet erat imperdiet in. Nunc
                    sed eleifend turpis. Pellentesque orci augue, pretium ac mi dignissim, ultrices rutrum dolor.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae augue velit. Sed urna massa, fringilla et est sed, dignissim semper nulla. Pellentesque habitan
                    t morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sapien massa, pulvinar vel convallis commodo, tincidunt posuere dui. Ut at elit condimentum, 
                    consectetur dolor at, ullamcorper purus. Praesent sit amet lorem commodo, pharetra arcu at, posuere lectus. Integer dignissim mollis odio, eu laoreet erat imperdiet in. Nunc
                    sed eleifend turpis. Pellentesque orci augue, pretium ac mi dignissim, ultrices rutrum dolor.</li>
                </ul>
                </div><!--Serviços-->
            </div><!--w50-->
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section>

    <footer>
        <div class="center">
            <p>Todos os  direitos reservadoa
            </p>
        </div>
    </footer>
</body>
</html>