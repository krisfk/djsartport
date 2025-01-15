<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>緣份之海</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://djsartport.com/sea2.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://djsartport.com/sea.js"></script>
  </head>
  <style type="text/css"></style>
  <body>
    <div class="container main-container g-0 position-relative pt-4 pb-4">
    
    

    <div class="text-center">          

    <h1 class="">緣份之海：瓶(<?php echo get_the_ID();?>)</h1>

     <div class="info-group pt-5">


     <?php if( get_field('gender') =='男')
     {
      ?>
     
     <div class="result-bottle result-bottle-1"> 
                <img class="bottle-img mb-3" src="https://djsartport.com/blue-bottle.png" alt="">
            </div>
     <?php
     }

     else
     {
      ?>
     
     <div class="result-bottle result-bottle-2">
                <img class="bottle-img mb-3" src="https://djsartport.com/red-bottle.png" alt="">
            </div>
             
     <?php
     }
      ?>
         
            
         
          
     </div>


     <div class="info-group mt-3">
     <b>稱呼:</b>
     <?php echo get_field('nickname');?>
     </div>


     <div class="info-group mt-3">
     <b>性別:</b>
     <?php echo get_field('gender');?>
     </div>




     <div class="info-group mt-3">
     <b>年齡:</b>
     <?php echo get_field('age');?>
     </div>



     <div class="info-group mt-3">
     <b>高度(cm):</b>
     <?php echo get_field('height');?>
     </div>


     <div class="info-group mt-3">
     <b>職業:</b>
     <?php echo get_field('career');?>
     </div>


     <div class="info-group mt-3">
     <b>星座:</b>
     <?php echo get_field('zodiac');?>
     </div>

     <div class="info-group mt-3">
     <b>MBTI:</b>
     <?php echo get_field('mbti');?>
     </div>


     <div class="info-group mt-3">
     <b>擇偶條件:</b>
     <?php echo get_field('criteria');?>
     </div>

     <div class="info-group mt-3">
     <b>興趣:</b>
     <?php echo get_field('hobby');?>
     </div>


     <div class="info-group mt-3">
     <b>住邊區:</b>
     <?php echo get_field('live_where');?>
     </div>


     <div class="mt-3">
      <a href="javascript:void(0);" class="open-bottle-btn">打開瓶(<?php echo get_the_ID();?>)</a>
     </div>


     <div class="secret-div">
     <div class="info-group mt-0">
     <b>對你的心底話:</b>
     
     <?php echo get_field('first_say');?>
     </div>

     <div class="info-group mt-3">
     <b>IG:</b>
     <?php echo get_field('instagram');?>
     </div>

     <?php
     
     if(get_field('reveal_whatsapp')=='Y')
     {
      ?>
    
     <div class="info-group mt-3">
     <b>whatsapp:</b>
     <?php echo get_field('whatsapp');?>
     </div>

     <?php
     }

     ?>
     




     </div>







   
            </div>

    
    
 
 
 
     </div>


</body>
</html>