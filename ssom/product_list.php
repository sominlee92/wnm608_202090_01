<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


?><!DOCTYPE html>
<html>

<head>

	<title> PPC : SHOP </title>
   
   <?php include "parts/meta.php" ?>

</head>




<body>

  <?php include "parts/navbar.php" ?>

  <div class="view-window" style="background-image:url(img/background.png)">
        
  <h2> Shop</h2>

 </div>




   <div class="container">


        <div class="product-list">

          <div class="grid gap">
 
            <?php

            echo array_reduce(
               MYSQLIQuery("
                  SELECT *
                  FROM product
                  ORDER BY date_create DESC
                  LIMIT 12
               "),
               'makeProductList'
            );

            ?>
          </div>




       </div>
   </div>


      <?php include "parts/footer.php" ?>


</body>
</html>
