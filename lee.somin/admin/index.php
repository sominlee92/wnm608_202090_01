<?php

include "../lib/php/functions.php";
include "../parts/templates.php";
include "../data/api.php";




setDefault('orderby_direction','DESC');
setDefault('orderby','date_create');
setDefault('limit','12');
$products = makeStatement("products_admin_all",[]);


$empty_product = (object)[
   "name"=>"",
   "price"=>"",
   "category"=>"",
   "description"=>"",
   "quantity"=>"",
   "image_other"=>"",
   "image_thumb"=>"",
   "option1"=>"",
   "option2"=>"",
   "option3"=>""

];



switch(@$_GET['crud']) {
   case 'update':

      makeStatement("product_update",[
         $_POST['product-name'],
         $_POST['product-price'],
         $_POST['product-category'],
         $_POST['product-description'],
         $_POST['product-quantity'],
         $_POST['product-image_other'],
         $_POST['product-image_thumb'],
         $_POST['product-option1'],
         $_POST['product-option2'],
         $_POST['product-option3'],

         $_GET['id']
      ]);


      // $products[$_GET['id']]->name = $_POST['product-name'];
      // $products[$_GET['id']]->type = $_POST['product-type'];
      // $products[$_GET['id']]->email = $_POST['product-email'];
      // $products[$_GET['id']]->classes = explode(", ",$_POST['product-classes']);

      // file_put_contents($filename,json_encode($products));


      header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
      break;


   case 'create':
      $empty_product->name = $_POST['product-name'];
      $empty_product->type = $_POST['product-type'];
      $empty_product->email = $_POST['product-email'];
      $empty_product->classes = explode(", ",$_POST['product-classes']);


      $id = count($products);

      $products[] = $empty_product;

      file_put_contents($filename,json_encode($products));

      header("location:{$_SERVER['PHP_SELF']}?id=$id");
      break;


   case 'delete':
      array_splice($products,$_GET['id'],1);

      file_put_contents($filename,json_encode($products));

      header("location:{$_SERVER['PHP_SELF']}");
      break;
}




function showProductPage($product) {

//print_p($product);

$id = $_GET['id'];

$thumbs = explode(",",$product->image_other);

$thumbs_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='/aau/wnm608_202090_01/ssom/img/store/$o'>";
});


$addoredit = $id=='new' ? 'Add' : 'Edit';
$createorupdate = $id=='new' ? 'create' : 'update';



$productdata = $id=='new' ? '' : <<<HTML
<div class="card soft">
   <div class="display-flex">
      <h2 class="flex-stretch">$product->name</h2>
      <div>
         <a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete">
            <img src="/aau/wnm608_202090_01/ssom/img/trash.svg" class="icon">
         </a>
      </div>
   </div>
   <div>
      <strong>Category</strong>
      <span>$product->category</span>
   </div>
   <div>
      <strong>Price</strong>
      <span>&dollar;$product->price</span>
   </div>
   <div>
      <strong>Quantity</strong>
      <span>$product->quantity</span>
   </div>
   <div>
      <strong>Description</strong>
      <span>$product->description</span>
   </div>
   <div>
      <strong>Images</strong>
      <div class="image-thumbs"><img src='/aau/wnm608_202090_01/ssom/img/store/$product->image_thumb'></div>
      <div class="image-thumbs">$thumbs_elements</div>
   </div>
</div>
HTML;

echo <<<HTML
<div class="card medium soft">
<nav class="nav crumbs">
   <ul>
      <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
   </ul>
</nav>
</div>
<div class="grid gap">
   <div class="col-xs-12 col-md-4">$productdata</div>
   <div class="col-xs-12 col-md-8">
      <div class="card soft">
         

         <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&crud=$createorupdate">


            <h2>$addoredit Product</h2>
            <div class="form-control">
               <label for="product-name" class="form-label">Name</label>
               <input id="product-name" name="product-title" type="text" placeholder="Type product name" class="form-input" value="$product->name">
            </div>

            <div class="form-control">
               <label for="product-category" class="form-label">Category</label>
               <input id="product-category" name="product-category" type="text" placeholder="Type product category" class="form-input" value="$product->category">
            </div>
            <div class="form-control">
               <label for="product-price" class="form-label">Price</label>
               <input id="product-price" name="product-price" type="number" step="0.01" min="0" placeholder="Type product price" class="form-input" value="$product->price">
            </div>
            <div class="form-control">
               <label for="product-quantity" class="form-label">Quantity</label>
               <input id="product-quantity" name="product-quantity" type="text" placeholder="Type product quantity" class="form-input" value="$product->quantity">
            </div>
            <div class="form-control">
               <label for="product-description" class="form-label">Description</label>
               <textarea id="product-description" name="product-description" placeholder="Type product description" class="form-input">$product->description</textarea>
            </div>
            <div class="form-control">
               <label for="product-image_thumb" class="form-label">Image Thumb</label>
               <input id="product-image_thumb" name="product-image_thumb" type="text" placeholder="Type product image thumb" class="form-input" value="$product->image_thumb">
            </div>

            <div class="form-control">
               <label for="product-option1" class="form-label">Option 1</label>
               <input id="product-option1" name="product-option1" type="text" placeholder="Type product option1" class="form-input" value="$product->option1">
            </div>

              <div class="form-control">
               <label for="pproduct-option2" class="form-label">Option 2</label>
               <input id="product-option2" name="product-option2" type="text" placeholder="Type product option 2" class="form-input" value="$product->option2">
            </div>

              <div class="form-control">
               <label for="product-option3" class="form-label">Option 3</label>
               <input id="product-option3" name="product-option3" type="text" placeholder="Type product option 3" class="form-input" value="$product->option3">
            </div>
            
            <div class="form-control">
               <input class="form-button" type="submit" value="Save">
            </div>


         </form>

      </div>
   </div>
</div>
HTML;
}





?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Administrator</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>

   <header class="navbar">
      <div class="container display-flex">
         <div class="flex-none">
            <h1>Products Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <!-- nav.nav.flex-none>ul>li>a[href=#]>{List} -->
         <nav class="nav flex-none">
            <ul class="display-flex">

            <div class="nav-right">

               <li><a href="product_list.php">Store</a></li>

               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>


             </div>
            </ul>
         </nav>
      </div>
   </header>


   <div class="margin-box"> </div>

   <div class="container">

         <?php


         if(isset($_GET['id'])) {

            // ternary or conditional
            showProductPage(
               $_GET['id']=='new' ?
                  $empty_product :
                  array_find($products,function($o){
                     return $o->id==$_GET['id'];
                  })
            );

         } else {

         ?>
         <div class="card medium soft">
	
         <h1>Product List</h1>

         <div>
         <?php

         echo array_reduce($products,'makeAdminList');

         ?>
         </div>
         </div>
         <?php } ?>
   </div>
   
</body>
</html>