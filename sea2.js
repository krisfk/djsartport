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


    $('.open-bottle-btn').click(function(){

        $(this).html('你打開了這個飄流瓶⋯⋯<br>和對方打招呼時記得保持禮貌=]');
        $(this).attr('class','opened-txt');

        $('.secret-div').animate({'opacity':'1'},200);
        
    })

    $('.b-btn').click(function(){
        $('.sea-lightbox').fadeIn(200);
        $('body,html').animate({
            scrollTop:0
          }),200;

    })

    // dataType: 'json'
    $('.submit-btn').click(function(){
        var form_wts = $('.form-wts').val();
        var find_gender = $('.find-gender').val();

    

        var formData = {
            form_wts: $(".form-wts").val(),
            find_gender: $(".find-gender").val()          
        };

        if(!find_gender)
            {
                alert('請先選擇想抽的對象性別。');
            }
            else
            {
                $('.submit-btn-div').html('請稍等..loading..⏳');

                $.ajax({
                    type: "POST",
                    url: "https://djsartport.com/wp-json/api/search-wts",
                    data: formData,
                    dataType: "text",
                    encode: true,
                  }).done(function (found) {
                
                            if(found =='0')
                            {
                                $('.msg').fadeIn(200);
                            }
                            else
                            {
                                $('.result-block').fadeIn(200);
        
                                $('.msg ,.info-block-1').fadeOut(0);
        
                                $('.result-bottle').fadeOut(0);
        
                                // alert(found);
                                if($(".find-gender").val()=='男')
                                    {
                                        $('.result-bottle-1').fadeIn(0);
                                        $('.result-bottle-1 .idx').html(found);
                                    }
                                
        
                                if($(".find-gender").val()=='女')
                                    {
                                        $('.result-bottle-2').fadeIn(0);
                                        $('.result-bottle-2 .idx').html(found);
                                    }
        
                                    $('.bottle-idx').html(found);


                                    window.location ="https://djsartport.com/sea_member/?p="+found+"&reader=51936670";        
                            }


        
                            
                    
                  }).fail(function (jqXHR, textStatus) {
                    console.log(jqXHR);
                    console.log(textStatus);
                });
            }

       
              
            


    })


})


function draw_bottle()
{

}