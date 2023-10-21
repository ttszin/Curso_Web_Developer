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
        //listaMenu.slideToggle();

   
        //Abrir ou fechar sem efeitos
        if (listaMenu.is(':hidden') == true){
            //listaMenu.show();


            //fa-solid fa-bars
            //fa-solid fa-xmark

            //var icone = $('.botao-menu-mobile i');
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-solid fa-bars');
            icone.addClass('fa-solid fa-xmark');
            listaMenu.slideToggle();
        }
        else{
            //listaMenu.hide();
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-solid fa-xmark');
            icone.addClass('fa-solid fa-bars');
            listaMenu.slideToggle();
        }
 
    })

})