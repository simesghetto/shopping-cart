





      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h4">Product</h1>


        <div class="btn-group" role="group" aria-label="Basic outlined example">
          <button type="button" class="btn btn-sm btn-outline-danger">เพิ่มสินค้า</button>
<!--           <button type="button" class="btn btn-sm btn-outline-secondary">Middle</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Right</button> -->
        </div>

      </div>


<?php
        $product_array = array ( array ( "prd_id" => "1","prd_img" => "product-img-1.png","prd_name" => "milk","prd_stock" => "5",  "prd_price" => "150"),
                                 array ( "prd_id" => "2","prd_img" => "product-img-2.png","prd_name" => "nut","prd_stock" => "7",  "prd_price" => "50"),
                                 array ( "prd_id" => "3","prd_img" => "product-img-3.png","prd_name" => "oreo","prd_stock" => "5",   "prd_price" => "80"),
                                 array ( "prd_id" => "4","prd_img" => "product-img-4.png","prd_name" => "banana","prd_stock" => "10",  "prd_price" => "75"),
                                 array ( "prd_id" => "5","prd_img" => "product-img-5.png","prd_name" => "cocoa","prd_stock" => "100",  "prd_price" => "70"),
                                 array ( "prd_id" => "6","prd_img" => "product-img-6.png","prd_name" => "coffee","prd_stock" => "25",   "prd_price" => "65"),     
                                 array ( "prd_id" => "7","prd_img" => "product-img-7.png","prd_name" => "matcha","prd_stock" => "65",  "prd_price" => "30"),
                                 array ( "prd_id" => "8","prd_img" => "product-img-8.png","prd_name" => "thaitea","prd_stock" => "57",  "prd_price" => "40"),
                                 array ( "prd_id" => "9","prd_img" => "product-img-9.png","prd_name" => "water","prd_stock" => "50",   "prd_price" => "95"), 

                        );

?>


      <div class="table-responsive small">
        <table class="table table-striped table-sm   align-middle " >
          <thead>
            <tr class="text-center">
              <th scope="col" width="1%"></th>
              <th scope="col" width="1%">#</th>
              <th scope="col" width="1%">Img</th>
              <th scope="col">Product</th>             
              <th scope="col" width="1%">Price</th>
              <th scope="col" width="1%">Stock</th>
              <th scope="col" width="1%"></th>
              <th scope="col" width="1%"></th>
            </tr>
          </thead>
          <tbody>

          <?php if (!empty($product_array)) {  

                 foreach($product_array as $key=>$value){  ?>

	            <tr>
	              <td width="1%" class="text-center"> <i class="text-black-50 small"   width="16"  height="16" data-feather="align-justify"></i>   </td>	
	              <td width="1%" class="text-center"><?php echo $product_array[$key]["prd_id"]; ?></td>
	              <td width="2%" class="text-center">
	              		<img class="card-img-top"  style="width:30px;height:30px;" src="../img/product_img/<?php echo $product_array[$key]["prd_img"]; ?> " alt="Card image cap">
	              </td>
	              <td><?php echo $product_array[$key]["prd_name"]; ?></td>
	              <td class="text-center"><?php echo $product_array[$key]["prd_price"].".-"; ?></td>
	              <td class="text-center"> <?php echo $product_array[$key]["prd_stock"]; ?></td>
	              <td><?php //echo $product_array[$key]["prd_img"]; ?></td>
	              <td width="1%" class="text-end">

	              	<div class="btn-group" role="group" aria-label="Basic outlined example">   
					  <button type="button" class="btn btn-sm btn-outline-secondary">  
					  	<i class="text-black-50 small"   width="16"  height="16" data-feather="eye"></i>  
					  </button>
					  <button type="button" class="btn btn-sm btn-outline-secondary">
					  	<i class="text-black-50 small"   width="16"  height="16" data-feather="settings"></i>  
					  </button>
					  
					</div>

	              </td>
	            </tr>

            <?php } ?>

       	 <?php } ?>


          </tbody>

        </table>
      </div>

