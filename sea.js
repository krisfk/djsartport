$(function(){

    $('.gender-a').click(function(){

        $('.gender-a').removeClass('active');
        $(this).addClass('active');
    })

    $('.close-btn-a').click(function(){
        $('.sea-lightbox').fadeOut(200);
    })

    $('.b-btn').click(function(){
        $('.sea-lightbox').fadeIn(200);
        $('body,html').animate({
            scrollTop:0
          });

    })

})