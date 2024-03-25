<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>JavaScript Vanilla Shopping Cart Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
	<!-- Demo CSS (No need to include it into your project) -->
	<link rel="stylesheet" href="css/demo.css">
  
  </head>
  <body>
 <header class="intro">
                  <!--   end of cart modal -->
  <div class="cart-btn">
    <i id="cart" class="fas fa-shopping-cart"></i>
      <span class ="cart-quantity">0</span>
  </div>
<!--  products  -->

 </header>
  

 <main>
     <!-- Start DEMO HTML (Use the following code into your project)-->
<div class="cart-modal-overlay">
    <div class="cart-modal">
      <i id="close-btn" class="fas fa-times"></i>
        <h1 class="cart-is-empty">Cart is empty</h1>
      
        <div class="product-rows">
        </div>
        <div class="total">
          <h1 class="cart-total">TOTAL</h1>
            <span class="total-price">$0</span>
              <button class="purchase-btn">PURCHASE</button>
        </div>
      </div>
</div>
      
<!--   end of cart modal -->
  <div class="cart-btn">
    <i id="cart" class="fas fa-shopping-cart"></i>
      <span class ="cart-quantity">0</span>
  </div>
<!--  products  -->
  
     <!-- END EDMO HTML (Happy Coding!)-->
 </main>
 
      
  <footer class="credit">Author: ElieB77 - Distributed By: <a title="Awesome web design code & scripts" href="https://www.codehim.com?source=demo-page" target="_blank">CodeHim</a></footer>
  
  <script  src="./js/script.js"></script>
  </body>
</html>