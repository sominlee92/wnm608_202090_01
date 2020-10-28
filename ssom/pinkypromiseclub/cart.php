<!DOCTYPE html>
<html>

<head>
	<title>CART</title>
   
   <?php include "parts/meta.php" ?>

</head>




<body>

      <?php include "parts/navbar.php" ?>

 <div class="view-window" style="background-image:url(img/background.png)">

</div>

     
<script>
   const makeTable = (classes='') => {
      const head = ['#','Image','Product','Price','Quantity','Total'];
      const body = [
         ['<img src="img/phonecase2.png" width="300px">',"Sirenita IPhone Case",'$28.00','- 1 +','$28.00'],
         ['<img src="img/converse.jpg" width="300px">',"Converse Chuck Taylor High",'$55.00','- 1 +','$55.00'],
         ['<img src="img/teddy.jpg" width="300px">',"Carebear 12inch Plush",'$24.99','- 1 +','$24.99'],
         ['',"",'','','$107.99']

      ];

      document.write(`
      <table class="${classes}">
         <thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
         <tbody>
            ${body.reduce((r,o,i)=>r+
               `<tr>${[i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')}</tr>`
            ,'')}
         </tbody>
      </table>
      `)
   }
   </script>

   <div class="container" id="table">

         
         <div class="card soft">
         <h3>Lined Horizontal</h3>

            <script>makeTable('table lined horizontal')</script>
      </div>


   </div>


 <?php include "parts/footer.php" ?>

</body>
</html>
