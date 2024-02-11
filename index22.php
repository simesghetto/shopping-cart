<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>JavaScript Shopping Cart Project Example</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



<!--     <link rel="stylesheet" href="css/style.css">
  	<link rel="stylesheet" href="css/demo.css"> -->
  
      <style>
          .navbar{
              height: 56px;
              line-height: 56px;
              padding: 0 26px;
          }
      
      </style>
  </head>
  <body>




<!--  <header class="intro">
 <h1>JavaScript Shopping Cart Project Example</h1>
 <p>A simple shopping cart project in JavaScript and Bootstrap.</p>

 <div class="action">
 <a href="https://www.codehim.com/collections/javascript-shopping-cart-examples-with-demo/" title="Back to download and tutorial page" class="btn back">Back to Tutorial</a>
 </div>
 </header>
   -->
      
 <main>
     <!-- Start DEMO HTML (Use the following code into your project)-->



<!-- Main -->
<div class="container">
    <div class="row">
      <div class="col col-md-4">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="./img/orange.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Orange</h4>
    <p class="card-text">Price: $0.5</p>
    <a href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col col-md-4">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="./img/bananas.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Banana</h4>
    <p class="card-text">Price: $1.22</p>
    <a href="#" data-name="Banana" data-price="1.22" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col col-md-4">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="./img/lemon.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Lemon</h4>
    <p class="card-text">Price: $5</p>
    <a href="#" data-name="Lemon" data-price="5" class="add-to-cart btn btn-primary text-white">Add to cart</a>
  </div>
</div>
      </div>
    </div>
</div>

  
 <!-- Modal -->
<!-- <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
          
        </table>
        <div>Total price: $<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Order now</button>
      </div>
    </div>
  </div>
</div> -->
     <!-- END EDMO HTML (Happy Coding!)-->


<nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded">
    <div class="row">
        <div class="col">
          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart"></button> -->


          
    </div>
</nav>



<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cart">
   Cart (<span class="total-count"></span>)
</button>

<button class="clear-cart btn btn-danger">Clear Cart</button></div>








 </main>
 
    

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script  src="./js/script.js"></script>
     
  </body>
</html>