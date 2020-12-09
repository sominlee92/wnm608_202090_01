<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
include_once "data/api.php";



setDefault('s','');
setDefault('t','products_all');
setDefault('orderby_direction','DESC');
setDefault('orderby','date_create');
setDefault('limit','12');





function makeSortOptions() {
   $options = [
      ["date_create","DESC","Latest Products"],
      ["date_create","ASC","Oldest Products"],
      ["price","DESC","Most Expensive"],
      ["price","ASC","Least Expensive"]
   ];
   foreach($options as [$orderby,$direction,$name]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['orderby']==$orderby && $_GET['orderby_direction']==$direction ? "selected" : "").">
      $name
      </option>
      ";
   }
}

function makeHiddenValues($arr1,$arr2) {
   foreach(array_merge($arr1,$arr2) as $k=>$v) {
      echo "<input type='hidden' name='$k' value='$v'>\n";
   }
}




$result = makeStatement($_GET['t']);
$products = isset($result['error']) ? [] : $result;



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
   <div class="margin-box"> </div>

      <form action="product_list.php" method="get" class="hotdog stack">

         <input type="search" name="s" placeholder="Search for a product"
         value="<?= @$_GET['s'] ?>">

         <?
         makeHiddenValues([
            "orderby"=>$_GET['orderby'],
            "orderby_direction"=>$_GET['orderby_direction'],
            "limit"=>$_GET['limit'],
            "t"=>"search"
         ],[]);
         ?>

         <button type="submit">Search</button>
      </form>

      <div class="display-flex" style="margin:1em 0">
         <div class="flex-none display-flex">
            
            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"all",
                  "t"=>"products_all"
               ]);
               ?>

               <input type="submit" value="all" class="form-button">
            </form>

            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"cosmetics",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="cosmetics" class="form-button">
            </form>


             <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"stationary",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="stationary" class="form-button">
            </form>

            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"toy",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="toy" class="form-button">
            </form>
         </div>
         
         <div class="flex-stretch"></div>
         

         <div class="flex-none">
            
            <form action="product_list.php" method="get">

               <?
               makeHiddenValues($_GET,[]);
               ?>
               <div class="form-select">
                  <select onchange="checkSort(this)">
                     <?=makeSortOptions()?>
                  </select>
               </div>

            </form>


         </div>

      </div>



        <div class="product-list">

          <div class="grid gap">
 
          <?php

         echo array_reduce(
            $products,
            'makeProductList'
         );

         ?>
          </div>




       </div>
   </div>

<div class="container">
   <div class="soft">
   <div class="margin-box "> </div>

   </div>

</div>

      <?php include "parts/footer.php" ?>


</body>
</html>