
<script>

      const makeNav = (classes='') => {
         const links = ['HOME','ABOUT','STORE','SALE','CART'];
         document.write(`
         <div>
         <nav class="${classes}">
            <ul>
               ${links.reduce((r,o,i)=>r+`<li><a href="#">${o}</a></li>`,'')}
            </ul>
         </nav>
         </div>
         `)
      }
      </script>


<header class="navbar">

   <div class="container display-flex flex-align-center">

      <div class="flex-none">

         <img src="img/logo.png" width="200px">
      </div>


      <div class="flex-stretch"></div>
      
      <!-- nav.nav>ul>li*4>a[href=#article$]>{Link $} -->
      <nav class="nav flex-none">

                 <script>makeNav('nav pills')</script>


      </nav>

   </div>
</header>

