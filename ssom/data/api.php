<?php

@include_once "../lib/php/functions.php";

function getRequires($props) {
   foreach($props as $prop) {
      if(!isset($_GET[$prop])) return false;
   }
   return true;
}


function makeStatement($type) {

   switch($type) {
      case "products_all":
         return MYSQLIQuery("SELECT *
            FROM `product`
            ORDER BY `date_create`
            LIMIT 12");
         break;


      case "product_by_id":
         if(!getRequires(['id'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `product`
            WHERE `id` = ".$_GET['id']);
         break;


      case "products_by_category":
         if(!getRequires(['category'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `product`
            WHERE `category` = '{$_GET['category']}'
            LIMIT 12
            ");
         break;


      case "price_above":
         if(!getRequires(['price'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `product`
            WHERE `price` > '{$_GET['price']}'
            ORDER BY price DESC
            LIMIT 12
            ");
         break;

      case "price_below":
         if(!getRequires(['price'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `product`
            WHERE `price` < '{$_GET['price']}'
            ORDER BY price DESC
            LIMIT 12
            ");
         break;



      case "search":
         if(!getRequires(['s'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `product`
            WHERE `name` LIKE '%{$_GET['s']}%'
            ORDER BY date_create DESC
            LIMIT 12
            ");
         break;





      default: return ["error"=>"No Matched Type"];
   }
}


if(isset($_GET['t'])) {
   echo json_encode(
      makeStatement($_GET['t']),
      JSON_UNESCAPED_UNICODE |
      JSON_NUMERIC_CHECK
   );
}
