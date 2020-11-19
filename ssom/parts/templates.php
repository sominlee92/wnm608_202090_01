<?php



function makeProductList($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-md-4">
   <a href="product_item.php?id=$o->id" class="product-item">
      <figure>
         <div class="product-image">
            <img src="/images/store/$o->image_thumb" alt="">
         </div>
         <figcaption class="product-description">
            <div class="product-price">&dollar;$o->price</div>
            <div class="product-title">$o->name</div>
         </figcaption>
      </figure>
   </a>
</div>
HTML;
}




function selectAmount($amount=1,$total=10) {
   $output = "<select name='product-amount'>";
   for($i-1;$i<=$total;$i++) {
      $output .= "<option ".($i==$amount?'selected':'').">$i</option>";
   }
   $output .= "</select>";
   return $output;
}




function makeCartList($r,$o) {
$totalfixed = number_format($o->total,2,'.','');
$selectamount = selectAmount($o->amount,10);
return $r.<<<HTML
<div class="display-flex">
   <div class="flex-none image-thumbs">
      <img src="/images/store/$o->image_thumb">
   </div>
   <div class="flex-stretch">
      <strong>$o->title</strong>
      <div>Delete</div>
   </div>
   <div class="flex-none">
      <div>&dollar;$totalfixed</div>
      <form action="product_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
         <input type="hidden" name="product-id" value="$o->id">
         <div class="form-select">
            $selectamount
         </div>
      </form>
   </div>
</div>
HTML;
}