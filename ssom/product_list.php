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
        
  <h2> SHOP</h2>

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





       </div>
   </div>


      <?php include "parts/footer.php" ?>


</body>
</html>
