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
    });

    if($('target').length > 0){
        //O elemento existe, portanto precisamos dar o scroll em algum elemento
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({scrollTop:divScroll},700);
    }

    carregarDinamico();
    function carregarDinamico(){
        $('[realtime]').click(function(){   
            var pagina = $(this).attr('realtime');
            $('.container-principal').hide();
            $('.container-principal').load(INCLUDE_PATH+'pages/'+pagina+'.php');
            
            setTimeout(function(){
                initialize();
	            addMarker(-32.034100,-52.081060,'',"Minha casa",undefined,false);
            },1000);

            $('.container-principal').fadeIn(1000);
            console.log('opa')
            window.history.pushState('','',pagina);
            
            return false;
        })
    }


})