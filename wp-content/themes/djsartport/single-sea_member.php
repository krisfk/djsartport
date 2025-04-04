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
    
    <?php
    
    $allow_readers=get_field('allow_readers');
    $allow_readers_arr = explode(",", $allow_readers);
    $reader_tel=$_GET['reader'];
    $allow=false;

    if($reader_tel!='51936670')
    {
      if(!$allow_readers)
      {
        ?>
        <h1>網址輸入錯誤⋯如有任何問題可whatsapp 51936670查詢。</h1>
       <?php
       exit;
      }

      if (in_array($reader_tel, $allow_readers_arr)) {
        $allow=true; 
      }
      else 
      {
        $allow=false;
        ?>
        <h1>網址輸入錯誤⋯如有任何問題可whatsapp 51936670查詢。</h1>
       <?php
       exit;
      }
    }



    ?>

    <div class="text-center">          


     <div class="info-group pt-3">


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


     <h1 class="">緣份之海：瓶(<?php echo get_the_ID();?>)</h1>

     
     <div class="info-group mt-2">
      <table class="mx-auto text-start">
        <tr><td class="pe-3"><b>稱呼: <?php echo get_field('nickname');?></b></td><td><b>性別:</b> <?php echo get_field('gender');?></td></tr>
    <tr>
<td>     <b>年齡:      <?php echo get_field('age');?>
</b>
</td>
<td>
<b>高度(cm):</b>       <?php echo get_field('height');?>
</td>
    </tr>

    <tr>
      <td>     <b>職業:</b> <?php echo get_field('career');?>
      </td>
      <td> 
      <b>星座:</b>      <?php echo get_field('zodiac');?>

    
      </td>
    </tr>
    <tr>
      <td>     <b>MBTI:</b>      <?php echo get_field('mbti');?>

      </td>
  <td></td></tr>
   
    </table>
     
     
     </div>


     <div class="info-group mt-2">
     <b>擇偶條件:</b> <br>
     <?php echo get_field('criteria');?>
     </div>
     <div class="info-group mt-2">
     <b>興趣:</b> <br>
     <?php echo get_field('hobby');?>
     </div>

     <div class="info-group mt-2">
     <b>住邊區:</b>
     <?php echo get_field('live_where');?>
     </div>

     <div class="mt-0">
      <a href="javascript:void(0);" class="open-bottle-btn">打開瓶(<?php echo get_the_ID();?>)</a>
     </div>


     <div class="secret-div">
     <div class="info-group mt-0">
     <b>對你的心底話:</b><br>
     
     <?php echo get_field('first_say');?>
     </div>

     <div class="info-group mt-2">
     <b>IG:</b>
     <?php echo get_field('instagram');?>
     </div>

     <?php
     
     if(get_field('reveal_whatsapp')=='Y')
     {
      ?>
    
     <div class="info-group mt-2">
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