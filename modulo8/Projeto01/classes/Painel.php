<?php
    class Painel{
        public static function logado(){
            return isset($_SESSION['login']) ? true : false;
        }
        public static function loggout(){
            session_destroy();
            header('Location: '.INCLUDE_PATH_PAINEL);
        }

        //Função para carregar o painel se a url existir , se não volta para a página do painel
        public static function carregarPagina(){
            if(isset($_GET['url'])){
                $url = explode('/',$_GET['url']);
                if(file_exists('pages/'.$url[0].'.php')){
                    include('pages/'.$url[0].'.php');
                }else{
                    header('Location: ' .INCLUDE_PATH_PAINEL);      //Pode ser alterada para ir para uma página de erro
                }
            }else{
                //Página não existe!
                include('pages/home.php');
            }
        }
    }
?>