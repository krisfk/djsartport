$(function(){

    $('.gender-a').click(function(){

        $('.gender-a').removeClass('active');
        $(this).addClass('active');

        var idx=$(this).parent('li').index();
        alert(idx)


    })

    $('.close-btn-a').click(function(){
        $('.sea-lightbox').fadeOut(200);
    })

    $('.b-btn').click(function(){
        $('.sea-lightbox').fadeIn(200);
        $('body,html').animate({
            scrollTop:0
          }),200;

    })

    $('.submit-btn').click(function(){
        // var find_gender = $('').val();  
        var form_wts = $('.form-wts').val();
    })


})