<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
include_once "data/api.php";



setDefault('s','');
setDefault('orderby_direction','DESC');
setDefault('orderby','date_create');
setDefault('limit','12');




if(isset($_GET['t'])) {


//    $filename = "data/api.php?".http_build_query($_GET);
// echo $filename;
   // $result = file_get_json($filename);



   $result = makeStatement($_GET['t']);
   $products = isset($result['error']) ? [] : $result;



   // print_p($result);
   // die;
} else {
   $result = makeStatement('products_all');
   $products = isset($result['error']) ? [] : $result;
}


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

      <form action="product_list.php" method="get" class="hotdog stack">
         <input type="search" name="s" placeholder="Search for a product"
         value="<?= @$_GET['s'] ?>">

         <input type="hidden" name="orderby" value="<?=$_GET['orderby']?>">
         <input type="hidden" name="orderby_direction" value="<?=$_GET['orderby_direction']?>">
         <input type="hidden" name="limit" value="<?=$_GET['limit']?>">

         <input type="hidden" name="t" value="search">
         <button type="submit">Search</button>
      </form>

      <form action="product_list.php" method="get">
         <input type="hidden" name="s" value="<?=$_GET['s']?>">
         <input type="hidden" name="limit" value="<?=$_GET['limit']?>">

         <div class="form-select">
            <select onchange="checkSort(this)">
               <option data-orderby="date_create" data-direction="DESC">Latest Products</option>
               <option data-orderby="date_create" data-direction="ASC">Oldest Products</option>
            </select>
         </div>
         
      </form>


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


      <?php include "parts/footer.php" ?>


</body>
</html>