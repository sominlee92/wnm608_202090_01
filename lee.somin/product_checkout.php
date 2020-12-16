<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html>

<head>
   <title>PPC Product_item</title>
   
   <?php include "parts/meta.php" ?>

</head>



<body>

   <?php include "parts/navbar.php" ?>

	  <div class="margin-box "> </div>

	 <div class="container">
      <div class="margin-box "> </div>

     	<div class="card soft">
      <h2>Product Checkout</h2>


      <div>Fill in your information</div>
      <form>
      <input type="text" placeholder="Text" class="form-input">
      <input type="text" placeholder="Number" class="form-input">
      <input type="text" placeholder="Search" class="form-input">      
      <input type="text" placeholder="Password" class="form-input">    


   </form>

         <div class="pay">
            <button class="button button3"><a href="product_actions.php?action=reset-cart">Pay</a></button>
               <button class="button button2"> <a href="./">Cancel</a></button>
            

         </div>

      </div>
   </div>

   <?php include "parts/footer.php" ?>


</body>
</html>
