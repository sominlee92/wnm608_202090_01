<!DOCTYPE html>
<html>

<head>
	<title>PPC : SHOP </title>
   
   <?php include "parts/meta.php" ?>

</head>




<body>

    <?php include "parts/navbar.php" ?>




 	<div class="container">
    	<div class="card soft">

        	<h2>Clothes</h2>
            
            <div class="grid gap">

        	<ul class="product-list">
            <!-- li*10>a[href='product_item.php?id=$']>{Product $} -->

           		<div class="col-xs-12 col-md-4">
					<li class="product-list"><a href="product_item.php?id=1">Product 1</a></li>
            		<li class="product-list"><a href="product_item.php?id=2">Product 2</a></li>

            	</div>

                <div class="col-xs-12 col-md-4">
            		<li class="product-list"><a href="product_item.php?id=3">Product 3</a></li>
            		<li class="product-list"><a href="product_item.php?id=4">Product 4</a></li>

            	</div>


            	 <div class="col-xs-12 col-md-4">

            		<li class="product-list"><a href="product_item.php?id=5">Product 5</a></li>
            		<li class="product-list"><a href="product_item.php?id=6">Product 6</a></li>

            	</div>


         	</ul>

         	</div>
      	</div>
   </div>

      <?php include "parts/footer.php" ?>


</body>
</html>
