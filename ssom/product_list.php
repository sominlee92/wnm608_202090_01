<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html>

<head>
	<title>PPC : SHOP </title>
   
   <?php include "parts/meta.php" ?>

</head>




<body>

  <?php include "parts/navbar.php" ?>

  <div class="view-window" style="background-image:url(img/background.png)">
        
  <h2> CLOTHES</h2>

 </div>




   <div class="container">


        <div class="product-list">


          <ul>
             <?php

            $conn = makeConn();

            $result = @$conn->query("SELECT * FROM product");
            if($conn->errno) die($conn->error);

            while($row = $result->fetch_object()) {
               echo "<li>$row->name</li>";
            }

            ?>

          </ul>



        <div class="grid gap">


            <div class="col-xs-6 col-md-12 col-xl-6">


              <a href="product_item.php?id=1">

                  <div class="card hard">

                    <img src="img/bag.jpg" width="100%">

                    <p class="itemtitle"> Product Name</p>
                    <p class="itemprice"> Product Price</p>
    

                  </div>
              </a>



              <a href="product_item.php?id=3">
                
                  <div class="card hard">

                    <img src="img/bag.jpg" width="100%">

                    <p class="itemtitle">kanken Mini Backpack</p>
                    <p class="itemprice">$ 80.00</p>
    

                  </div>

              </a>

              <a href="product_item.php?id=5">

                <div class="card hard">

                    <img src="img/bag.jpg" width="100%">

                    <p class="itemtitle">kanken Mini Backpack</p>
                    <p class="itemprice">$ 80.00</p>

                </div>
              </a>



            </div>

            <div class="col-xs-6 col-md-12 col-xl-6">

                <a href="product_item.php?id=2">
                  <div class="card hard">

                    <img src="img/bag.jpg" width="100%">

                    <p class="itemtitle">kanken Mini Backpack</p>
                    <p class="itemprice">$ 80.00</p>
    

                  </div>
                </a>

                <a href="product_item.php?id=4">

                 <div class="card hard">

                    <img src="img/bag.jpg" width="100%">

                    <p class="itemtitle">kanken Mini Backpack</p>
                    <p class="itemprice">$ 80.00</p>
    

                  </div>   
                </a>
             <a href="product_item.php?id=6">
                <div class="card hard">

                  <img src="img/bag.jpg" width="100%">

                    <p class="itemtitle">kanken Mini Backpack</p>
                    <p class="itemprice">$ 80.00</p>
    

                </div>                 
             </a>


            </div>





       </div>

       </div>
   </div>


      <?php include "parts/footer.php" ?>


</body>
</html>
