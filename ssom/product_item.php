<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = MYSQLIQuery("SELECT * FROM product WHERE id = {$_GET['id']}")[0];

$thumbs = explode(",",$product->image_other);

$thumbs_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='/images/store/$o'>";
});

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Store: <?= $product->name ?></title>

   <?php include "parts/meta.php" ?>
</head>




<body>
   
   <?php include "parts/navbar.php" ?>

   <div class="margin-box "> </div>
   <div class="container">
      <div class="grid gap">
         <div class="col-xs-12 col-md-7">

            <div class="card soft">
               <div class="image-main">
                  <img src="/img/store/<?= $product->image_thumb ?>" alt="">
               </div>
               <div class="image-thumbs">
                  <?= $thumbs_elements ?>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-md-5">
            <form class="card soft flat" method="post" action="product_actions.php?action=add-to-cart">
               <input type="hidden" name="product-id" value="<?= $product->id ?>">
               <div class="card-section">
                  <h2><?= $product->name ?></h2>
                  <div>&dollar;<?= $product->price ?></div>
               </div>
               <div class="card-section">
                  <div class="form-control">
                     
                     <label for="product-amount" class="form-label">Amount</label>
                     <div class="form-select">
                        <select name="product-amount" id="product-amount">
                           <!-- option[value=$]*10>{$} -->
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-control">
                     
                     <label for="product-color" class="form-label">Color</label>
                     <div class="form-select">
                        <select name="product-color" id="product-color">
                           <option value="red">Red</option>
                           <option value="green">Green</option>
                           <option value="blue">Blue</option>
                        </select>
                     </div>
                  </div>

                  <div class="form-control">
                     <input type="submit" class="form-button" value="Add To Cart">
                  </div>

               </div>
            </form>
         </div>
      </div>
      <div class="card soft medium">
         <p><?= $product->description ?></p>
      </div>
      
         <h2>Related Products</h2>

         <div class="grid gap">
           
            <?php

            echo array_reduce(
               MYSQLIQuery("
                  SELECT *
                  FROM product
                  WHERE id in (4,6,8)
               "),
               'makeProductList'
            );

            ?>
         </div>
   </div>

</body>
</html>
	<!-- <div class="container" id="select">


         <div class="card light">
		<div class="space"></div>

            <div class="grid">

               <div class="col-xs-12 col-md-6">

                  <div class="select margin">

                  <img src="img/phonecase.png" width="100%">

                  </div>

               </div>

               <div class="col-xs-12 col-md-1">
               </div>


               <div class="col-xs-12 col-md-5">

                  <h4>valfre</h3>
                  <h2> SIRENITA IPHONE CASE </h2>

                  <h3>$ 28.00</h3>



               
                  <div class="form-select">
                  
                     <h5> Size</h5>

                     <select>

                        <option>7/8</option>
                        <option>7+/8+</option>

                        <option>XS/X</option>
                        <option>11</option>
                        <option>11 Pro</option>
                        <option>11 Pro Max</option>


                     </select>

                  </div>

                  <div class="add">
                     <a href="cart.php"><button class="button button4">Add Cart</button></a>
               
                    <a href="checkout.php"><button class="button button5">Buy Now</button></a>
                  </div>

                  <hr>

                  <h4>Product Description :</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               </div>
            </div>
         
         </div>

      </div> -->


