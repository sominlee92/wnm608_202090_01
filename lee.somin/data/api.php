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
            ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
            LIMIT {$_GET['limit']}");
         break;
      
      case "products_admin_all":
         return MYSQLIQuery("SELECT *
            FROM `product`
            ORDER BY date_create DESC");
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
            
            ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
            LIMIT {$_GET['limit']}
            ");
         break;


      case "price_above":
         if(!getRequires(['price'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `product`
            WHERE `price` > '{$_GET['price']}'
            ORDER BY `price` DESC
            LIMIT {$_GET['limit']}
            ");
         break;

      case "price_below":
         if(!getRequires(['price'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `product`
            WHERE `price` < '{$_GET['price']}'
            ORDER BY `price` ASC
            LIMIT {$_GET['limit']}
            ");
         break;






      case "search":
         if(!getRequires(['s'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `product`
            WHERE `name` LIKE '%{$_GET['s']}%'
            ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
            LIMIT {$_GET['limit']}
            ");
         break;





      case "product_insert":
         return MYSQLIQuery("INSERT INTO
            `product`
            (
               `name`,
               `price`,
               `category`,
               `description`,
               `quantity`,
               `image_main`,
               `image_other`,
               `image_thumb`,
               `date_create`,
               `date_modify`,
               `option_1`,
               `option_2`,
               `option_3`,

            )
            VALUES
            (
               '{$params[0]}',
               '{$params[1]}',
               '{$params[2]}',
               '{$params[3]}',
               '{$params[4]}',
               '{$params[5]}',
               '{$params[6]}',               
               '{$params[7]}',
               '{$params[8]}',
               '{$params[9]}',
               '{$params[10]}',

               NOW(),
               NOW()
            )
            ");
         break;

      case "product_update":
         return MYSQLIQuery("UPDATE
            `product`
            SET
               `name` = '{$params[0]}',
               `price` = '{$params[1]}',
               `category` = '{$params[2]}',
               `description` = '{$params[3]}',
               `quantity` = '{$params[4]}',
               `image_main`= '{$params[5]}',
               `image_other` = '{$params[6]}',
               `image_thumb` = '{$params[7]}',
               `option_1` = '{$params[8]}',
               `option_2` = '{$params[9]}',
               `option_3` = '{$params[10]}',
            WHERE `id` = {$params[11]}
            ");
         break;

      case "product_delete":
         return MYSQLIQuery("DELETE FROM
            `product` WHERE `id` = {$params[0]}
            ");
         break;







      default: return ["error"=>"No Matched Type"];
   }
}



// if(isset($_GET['t'])) {
//    echo json_encode(
//       makeStatement($_GET['t']),
//       JSON_UNESCAPED_UNICODE |
//       JSON_NUMERIC_CHECK
//    );
// }