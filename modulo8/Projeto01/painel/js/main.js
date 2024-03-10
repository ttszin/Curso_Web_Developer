$(function(){

    var open = true; //Menu está aberto
    var windowSize = $(window)[0].innerWidth;

    var tagetSizeMenu = (windowSize <= 400) ? 200 : 250;

    if(windowSize <= 768){
        $('.menu').css('width','0').css('padding','0');
        open = false; //Menu fechado quando a tela está pequena
    }

    $('.menu-btn').click(function(){
        if(open){
            //Menu está aberto, precisamos fechar e adaptar o conteúdo do painel
            // Sitema para fechar o menu
            $('.menu').animate({'width':'0','padding':'0'},function(){
                open = false;
            });
            $('.content,header').css('width','100%');
            $('.content,header').animate({'left':'0'},function(){
                open = false;
            });
        }else{
            //O menu está fechado
            $('.menu').css('display','block');
            $('.menu').animate({'width':tagetSizeMenu+'px','padding':'10px 0'},function(){
                open = true;
            });
            if(windowSize > 768)
                $('.content,header').css('width','calc(100% - 250px)');
                $('.content,header').animate({'left':targetSizeMenu+'px'},function(){
                open = true;
            });
        }
    })

    $(window).resize(function(){
        windowSize = $(window)[0],innerWidth;
        targetSizeMenu = (windowSize <= 400) ? 200:250;
        if(windowSize <= 768){
            $('.menu').css('width','0').css('padding','0');
            $('.content,header').css('width','100%').css('left','0');
            open = false;
        }else{
            $('.menu').animate({'width':targetSizeMenu+'px','padding':'10px 0'},function(){
                open = true;
            });

            $('.content,header').css('width','calc(100% - 250px)');
            $('.content,header').animate({'left':targetSizeMenu+'px'},function(){
                open = true;
            });
        }
        
    })

    $('[formato=data]').mask('99/99/9999');   // Define o formato da data como um padrão de máscara

    $('[actionBtn=delete').click(function(){
        var r = confirm("Deseja excluir o registro?");
        if (r == true){
            return true;
        }
        else{
            return false;
        }
    });
        
})