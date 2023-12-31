$(function(){
    var currentSlide = 0;

    var maxSlide = $('.banner-single').length - 1;

    var delay = 3;

    console.log(maxSlide)

    initSlider();
    changeSlide();

    function initSlider(){
        $('.banner-single').hide();
        $('.banner-single').eq(0).show();
        for(var i= 0; i < maxSlide+1; i++){
            var content = $('.bullets').html();
            if(i==0)
                content+='<span class="active-slider"></span>';
            else
                content+='<span></span>';
            $('.bullets').html(content);
        }
    }

    function changeSlide(){
        setInterval(function(){
            $('.banner-single').eq(currentSlide).fadeOut(2000);
            currentSlide++
            if(currentSlide > maxSlide){
                currentSlide = 0;
            }
            $('.banner-single').eq(currentSlide).fadeIn(2000,function(){
                console.log('Animação terminou !')
            });
            //Trocar bullets da navegação do slider!
            $('.bullets span').removeClass('active-slider')
            $('.bullets span').eq(currentSlide).addClass('active-slider');
        },delay * 1000);
    }

    $('body').on('click','.bullets span',function(){
        var currentBullet = $(this);
        $('.banner-single').eq(currentSlide).stop().fadeOut(1000);
        currentSlide = currentBullet.index();
        $('.banner-single').eq(currentSlide).stop().fadeIn(1000);
        $('.bullets span').removeClass('active-slider')
        currentBullet.addClass('active-slider');
    });
})