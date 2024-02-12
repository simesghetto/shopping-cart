

<html lang="en">
  <head>

    <?php include('site-header.php');?>

  </head>
  <body>

    
<main>

   <?php include('site-navbar.php');?>


  <div class="container py-4">


<!--    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button>
      </div>
    </div> -->



    <div class="row align-items-md-stretch">


      <div class="col-md-2">
        <div class=" p-2 bg-body-tertiary border rounded-3">
      




                <div class="offcanvas-body pt-lg-0">

                           <div class="mb-8">
                              <!-- title -->
                              <h5 class="mb-3">Categories</h5>
                              <!-- nav -->
                              <ul class="nav nav-category" id="categoryCollapseMenu">

                                 <li class="nav-item border-bottom ">

                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#categoryFlushOne" aria-expanded="false" aria-controls="categoryFlushOne">
                                       Dairy, Bread &amp; Eggs
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>
                                    <!-- accordion collapse -->
                                    <div id="categoryFlushOne" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <!-- nav -->

                                          <ul class="nav flex-column ms-2">
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Milk</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Milk Drinks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Curd &amp; Yogurt</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Eggs</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Bread</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Buns &amp; Bakery</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Butter &amp; More</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Cheese</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Paneer &amp; Tofu</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Cream &amp; Whitener</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Condensed Milk</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Vegan Drinks</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <!-- nav item -->
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                       Snacks &amp; Munchies
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Chips &amp; Crisps</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Nachos</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Popcorn</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Bhujia &amp; Mixtures</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Namkeen Snacks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Healthy Snacks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Cakes &amp; Rolls</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Energy Bars</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Papad &amp; Fryums</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Rusks &amp; Wafers</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                       Fruits &amp; Vegetables
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#!">Fresh Vegetables</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Herbs &amp; Seasonings</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Fresh Fruits</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Organic Fruits &amp; Vegetables</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Cuts &amp; Sprouts</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Exotic Fruits &amp; Veggies</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Flower Bouquets, Bunches</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                       Cold Drinks &amp; Juices
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Soft Drinks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Fruit Juices</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Coldpress</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Energy Drinks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Water &amp; Ice Cubes</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Soda &amp; Mixers</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Concentrates &amp; Syrups</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Detox &amp; Energy Drinks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Juice Collection</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>

                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                       Breakfast &amp; Instant Food
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#!">Batter</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Breakfast Cereal</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Noodles, Pasta &amp; Soup</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Frozen Non-Veg Snackss</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Frozen Veg</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Vermicelli</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Instant Mixes</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                       Bakery &amp; Biscuits
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#!">Cookies</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Glucose &amp; Marie</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Sweet &amp; Salty</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Healthy &amp; Digestive</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Cream Biscuits</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Rusks &amp; Wafers</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Cakes &amp; Rolls</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Buns &amp; Bakery</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                       Chicken, Meat &amp; Fish
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#!">Chicken</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Sausage, Salami &amp; Ham</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Exotic Meat</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Eggs</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Frozen Non-Veg Snacks</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>











                        </div>









        </div>
      </div>




      <div class="col-md-10 p-0 text-bg-lighgray">
        <div class="  rounded-3">
          


            <!-- Main -->
            <div class="container p-0">
                <div class="row gx-3">

                  <?php



$product_array = array ( array ( "prd_id" => "1","prd_img" => "product-img-1.png","prd_name" => "milk",  "prd_price" => "150"),
                         array ( "prd_id" => "2","prd_img" => "product-img-2.png","prd_name" => "nut",  "prd_price" => "50"),
                         array ( "prd_id" => "3","prd_img" => "product-img-3.png","prd_name" => "oreo",   "prd_price" => "80"),
                         array ( "prd_id" => "4","prd_img" => "product-img-4.png","prd_name" => "banana",  "prd_price" => "75"),
                         array ( "prd_id" => "5","prd_img" => "product-img-5.png","prd_name" => "cocoa",  "prd_price" => "70"),
                         array ( "prd_id" => "6","prd_img" => "product-img-6.png","prd_name" => "coffee",   "prd_price" => "65"),     
                         array ( "prd_id" => "7","prd_img" => "product-img-7.png","prd_name" => "matcha",  "prd_price" => "30"),
                         array ( "prd_id" => "8","prd_img" => "product-img-8.png","prd_name" => "thaitea",  "prd_price" => "40"),
                         array ( "prd_id" => "9","prd_img" => "product-img-9.png","prd_name" => "water",   "prd_price" => "95"), 

                );
                           //echo $product_array[$key]["fruits"];

                           if (!empty($product_array)) {  

                            foreach($product_array as $key=>$value){  ?>

                                 
                                <div class="col col-md-2 mb-3">
                                  <div class="card" >
                                  <img class="card-img-top" src="img/product_img/<?php echo $product_array[$key]["prd_img"]; ?> " alt="Card image cap">
                                    <div class="card-block p-2 pb-0  ">

                                      <h4 class="card-title fs-6"> <?php echo ucfirst($product_array[$key]["prd_name"]); ?>  </h4>

                                      <div class="row pb-2 justify-content-between">
                                         <div class="col align-self-center text-start">  <?php echo $product_array[$key]["prd_price"].".-"; ?>  </div>
                                         <div class="col-auto  text-end"><a href="#" data-name="<?php echo $product_array[$key]["prd_name"]; ?> " 
                                                                     data-price="<?php echo $product_array[$key]["prd_price"]; ?> " 
                                          class="add-to-cart btn btn-sm btn-danger text-white "> <i class="bi bi-plus-circle"></i> Add</a> </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>



                        <?php    } 

                           }  


                  ?>




                </div>
            </div>






        </div>
      </div>







    </div>








    <footer class="pt-3 mt-4 text-body-secondary border-top">
      &copy; 2023    <a class="link-secondary" href="backend/">   admin backend </a>
    </footer>
  </div>
</main>





   <?php include('site-footer.php');?>






    </body>
</html>