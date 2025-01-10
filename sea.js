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

    // dataType: 'json'
    $('.submit-btn').click(function(){
        var form_wts = $('.form-wts').val();
        var find_gender = $('.find-gender').val();


        var formData = {
            form_wts: $(".form-wts").val(),
            find_gender: $(".find-gender").val()          
        };
      
          $.ajax({
            type: "POST",
            url: "https://djsartport.com/wp-json/api/search-wts",
            data: formData,
            dataType: "json",
            encode: true,
          }).done(function (data) {
            console.log(data);
          })
        //   .error(function(e){
        //     console.log(e);

        //   });


        // $.ajax({
        //     type: 'POST',
        //     url: 'https://djsartport.com/wp-json/api/search-wts',
        //     // contentType: 'application/json; charset=utf-8',

        //     // dataType: "json",
        //     // contentType: "application/json",
        //     data: {'wts': form_wts,'find_gender':find_gender},
        //     // dataType: 'text', //**** REMOVE THIS LINE ****//
        //     cache: false,
        //     success: function (found)
        //     {
        //         console.log('hello1');
        //         console.log(found);
        //             // if(found)
        //             // {
        //             //     $('.msg ,.info-block-1').fadeOut(0);
        //             // }
        //             // else{
        //             //     $('.msg').fadeIn(200);
        //             // }
        //     },
        //     error: function (error)
        //     {

        //         console.log('hello2');
        //         console.log(error);
        //         // just error callback
        //     }
        // });

        // alert(find_gender)

        // $.ajax({
        //     url: 'https://djsartport.com/wp-json/api/search-wts',
        //     type: 'POST',
        //     data: {wts: form_wts,find_gender:find_gender},
        //     // dataType: "json",
        //     // contentType: 'application/json',
        //     // data: 'json',
            // success: function (found)
            // {
            //         if(found)
            //         {
            //             $('.msg ,.info-block-1').fadeOut(0);
            //         }
            //         else{
            //             $('.msg').fadeIn(200);
            //         }
            // },
            // error: function (error)
            // {
            //     console.log(error);
            //     // just error callback
            // }
        // });



        // $.ajax("https://djsartport.com/wp-json/api/search-wts",
        //       {
        //         wts: form_wts,
        //         find_gender:123
        //       },

        //       function(found,status){

        //           if(found)
        //             {
        //                 $('.msg ,.info-block-1').fadeOut(0);
        //                 console.log(found);
        //             }
        //             else{
        //                 $('.msg').fadeIn(200);
        //             }
                    
        //       });
            
              
            


    })


})


function draw_bottle()
{

}