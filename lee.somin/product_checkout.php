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

     	<div class="card light">
         <h2>&#10022; Check-out &#10022;</h2>
      </div>

         <div>
          <h3> Fill in your information </h3>
         </div>

      <div class="card hard">


         <form>
               <div class="form-control">
                     <label for="example-1" class="form-label">First Name</label>
                     <input id="example-1" type="text" placeholder="Type First Name" class="form-input">
                  </div>

               <div class="form-control">
                  <label for="example-2" class="form-label">Last Name</label>
                  <input id="example-2" type="text" placeholder="Type Last Name" class="form-input">
               </div>

               <div class="form-control">
                  <label for="example-3" class="form-label">E-mail</label>
                  <input id="example-3" type="text" placeholder="Type E-mail" class="form-input">
               </div>


               <div class="form-control">
                  <label for="example-4" class="form-label"> Address </label>
                  <input id="example-4" type="text" placeholder="Type Adress" class="form-input">
               </div>


               <div class="form-control">
                  <label for="example-3" class="form-label">Phone</label>
                  <input id="example-3" type="text" placeholder="Type Phone number" class="form-input">
               </div>

               <div class="form-control">
                  <label for="example-4" class="form-label">Card Number</label>
                  <input id="example-4" type="password" placeholder="Type Card Number" class="form-input">
               </div>


         </form>

      </div>

         <div class="pay">
            <button class="button button3"><a href="product_actions.php?action=reset-cart">Pay</a></button>
               <button class="button button2"> <a href="./">Cancel</a></button>
            

         </div>

      </div>
   </div>

   <?php include "parts/footer.php" ?>


</body>
</html>
