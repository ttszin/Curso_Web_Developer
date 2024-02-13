$(function(){

    var open = true; //Menu está aberto
    var windowSize = $(window)[0].innerWidth;

    var tagetSizeMenu = (windowSize <= 400) ? 200 : 300;

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
            $('.content,header').css({'width':'100%'})
            $('.content,header').animate({'left':'0'},function(){
                open = false;
            });
        }else{
            //O menu está fechado
            $('.menu').css({'display':'block'})
            $('.menu').animate({'width':tagetSizeMenu+'px','padding':'10px'},function(){
                open = true;
            });
            $('.content,header').css({'width':'calc(100% - 300px)'})
            $('.content,header').animate({'left':'300px'},function(){
                open = true;
            });
        }
    })
})