$(function(){
    //Código java script aqui
    $('nav.mobile').click(function(){
        //O que vai acontecer quando clicarmos na nav.mobile
        var listaMenu = $('nav.mobile ul');
        /*
        

        if (listaMenu.is(':hidden') == true){
            listaMenu.fadeIn();
        }
        else{
            listaMenu.fadeOut();
        }
        */

        //Abrir ou fechar o menu
        listaMenu.slideToggle();

        /*
        //Abrir ou fechar sem efeitos
        if (listaMenu.is(':hidden') == true){
            //listaMenu.show();
            listaMenu.css('display','block')
        }
        else{
            //listaMenu.hide();
            listaMenu.css('display','none')
        }
        */
    })

})