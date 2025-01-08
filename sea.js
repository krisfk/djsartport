$(function(){

    $('.gender-a').click(function(){

        $('.gender-a').removeClass('active');
        $(this).addClass('active');

        var idx=$(this).parent('li').index();

        if(idx==0)
        {
            $('.find-gender').val('男');
        }

        if(idx==1)
        {
            $('.find-gender').val('女');
        }

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
        var form_wts = $('.form-wts').val();
        var find_gender = $('.find-gender').val();
    })


})