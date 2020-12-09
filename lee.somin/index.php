<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


?><!DOCTYPE html>
<html>

<head>
	
   <title>Pinky Promise Club</title>
   
   <?php include "parts/meta.php" ?>

</head>




<body>



   <?php include "parts/navbar.php" ?>







   <!-- .container>article#article$.article*4>h2{Article $}+div.article-body>p*4>lorem50 -->

 <div class="view-window" style="background-image:url(img/image01.jpg)"></div>


   <div class="container">
      




         <article id="article1" class="article flex-stretch">


            <div class="article-body">


             <h2> &#10084; Welcome to Pinky Promise Club &#10084; </h2>


               <p> Pinky Promise Club is the place that sells your favorite color Pink. We find out and bring everything pink in the world to you. Do what makes you pink.</p>

            </div>

         </article>

   </div>





   <div class="container">


           
           
         <div class="article-body">
         <h2> &#10083; Our Favorite</h2>

            <div class="grid gap">
 
            <?php

            echo array_reduce(
               MYSQLIQuery("
                  SELECT *
                  FROM product
                  ORDER BY date_create DESC
                  LIMIT 3
               "),
               'makeProductList'
            );

            ?>
          </div>
              
         </div>
   </div>


 <div class="view-window" style="background-image:url(img/image02.jpg)"></div>



   </div>



  <?php include "parts/footer.php" ?>



</body>
</html>