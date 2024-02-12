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
                                         <div class="col-auto  text-end">
                                          <a href="#" data-id="<?php echo $product_array[$key]["prd_id"]; ?>" 
                                                      data-img="<?php echo $product_array[$key]["prd_img"]; ?>" 
                                                      data-name="<?php echo $product_array[$key]["prd_name"]; ?>"                                      
                                                     data-price="<?php echo $product_array[$key]["prd_price"]; ?>" 
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