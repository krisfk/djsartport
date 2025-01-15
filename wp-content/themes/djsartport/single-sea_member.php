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
    <div class="container main-container g-0 position-relative">
    
    

    <div class="text-center">          


     <div class="info-group pt-5">


     <?php if( get_field('gender') =='男')
     {
      ?>
     
     <div class="result-bottle result-bottle-1"> 
                <img class="bottle-img mb-3" src="https://djsartport.com/blue-bottle.png" alt="">
                <div>男(<span class="idx"></span>)</div>
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
     <h5>稱呼</h5>
     <?php echo get_field('nickname');?>
     </div>


     <div class="info-group mt-3">
     <h5>性別</h5>
     <?php echo get_field('gender');?>
     </div>




     <div class="info-group mt-3">
     <h5>年齡</h5>
     <?php echo get_field('age');?>
     </div>



     <div class="info-group mt-3">
     <h5>高度(cm)</h5>
     <?php echo get_field('height');?>
     </div>




   
            </div>

    
    
 
 
 
     </div>


</body>
</html>