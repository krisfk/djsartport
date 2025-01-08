$(function(){

    $('.gender-a').click(function(){

        $('.gender-a').removeClass('active');
        $(this).addClass('active');
    })

    $('.close-btn-a').click(function(){
        $('.lightbox').fadeOut(200);
    })

})