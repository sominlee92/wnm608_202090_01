<?php

include_once "lib/php/functions.php";

switch($_GET['action']) {
   case "add-to-cart":
      //print_p([$_GET,$_POST,$_SESSION]); 
      //$product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = ".$_POST['product-id'])[0];
      addToCart($_POST['product-id'],$_POST['product-amount']);
      header("location:product_added_to_cart.php?id={$_POST['product-id']}");
      break;

   default: die("Incorrect Action");
}