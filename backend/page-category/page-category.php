





      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h4">Category</h1>


        <div class="btn-group" role="group" aria-label="Basic outlined example">

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            เพิ่มหมวดหมู่ใหม่
          </button>

<!--      <button type="button" class="btn btn-sm btn-outline-secondary">Middle</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Right</button> -->

        </div>





      </div>


<?php
        $product_array = array ( array ( "ctg_id" => "1","prd_img" => "product-img-1.png","ctg_name" => "อาหารทะเลแช่แข็ง" ),
                                 array ( "ctg_id" => "2","prd_img" => "product-img-2.png","ctg_name" => "ประเภทหมู หมูหมัก" ),
                                 array ( "ctg_id" => "3","prd_img" => "product-img-3.png","ctg_name" => "ประเภทกุ้ง กุ้งแช่แข็ง" ),
                                 array ( "ctg_id" => "4","prd_img" => "product-img-4.png","ctg_name" => "ประเภทหอยทะเลแช่แข็ง" ),
                                 array ( "ctg_id" => "5","prd_img" => "product-img-5.png","ctg_name" => "ประเภทปลาหมึก" ),
                                 array ( "ctg_id" => "6","prd_img" => "product-img-6.png","ctg_name" => "ปูอัด และสินค้าแบรนด์ TVI" ),     
                                 array ( "ctg_id" => "7","prd_img" => "product-img-7.png","ctg_name" => "สินค้าแบรนด์ PfP" ),
                                 array ( "ctg_id" => "8","prd_img" => "product-img-8.png","ctg_name" => "ประเภทไก่-เป็ด" ),
                                 array ( "ctg_id" => "9","prd_img" => "product-img-9.png","ctg_name" => "เนื้อสัตว์หมัก"  ), 

                        );

?>


      <div class="table-responsive small">
        <table class="table table-striped table-sm   align-middle " >
          <thead>
            <tr class="text-center">
              <th scope="col" width="1%"></th>
              <th scope="col" width="1%">#</th>
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
	              <td width="1%" class="text-center"><?php echo $product_array[$key]["ctg_id"]; ?></td>

	              <td><?php echo $product_array[$key]["ctg_name"]; ?></td>

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

