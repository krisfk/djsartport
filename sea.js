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
        // alert(find_gender)

        $.post("https://djsartport.com/wp-json/api/search-wts",
              {
                wts: form_wts,
                find_gender:find_gender
              },

              function(found,status){

            
                // alert(found);
                  if(found)
                    {
                        $('.msg ,.info-block-1').fadeOut(0);
                        console.log(found);
                    }
                    else{
                        $('.msg').fadeIn(200);
                    }
                    
              });
            
              
            


    })


})


function draw_bottle()
{

}