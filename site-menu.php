   


<?php

$category_array = array (array ( "cat_id" => "1","prd_img" => "product-img-1.png","cat_name" => "อาหารทะเลแช่แข็ง",  ),
                         array ( "cat_id" => "2","prd_img" => "product-img-2.png","cat_name" => "ประเภทหมู หมูหมัก สามชั้น",  ),
                         array ( "cat_id" => "3","prd_img" => "product-img-3.png","cat_name" => "ประเภทกุ้ง กุ้งแช่แข็ง",   ),
                         array ( "cat_id" => "4","prd_img" => "product-img-4.png","cat_name" => "ประเภทหอยทะเลแช่แข็ง", ),
                         array ( "cat_id" => "5","prd_img" => "product-img-5.png","cat_name" => "ประเภทปลาหมึก",  ),
                         array ( "cat_id" => "6","prd_img" => "product-img-6.png","cat_name" => "ปูอัด และสินค้าแบรนด์ TVI",  ),     
                         array ( "cat_id" => "7","prd_img" => "product-img-7.png","cat_name" => "สินค้าแบรนด์ PfP",  ),
                         array ( "cat_id" => "8","prd_img" => "product-img-8.png","cat_name" => "ประเภทไก่-เป็ด", ),
                         array ( "cat_id" => "9","prd_img" => "product-img-9.png","cat_name" => "เนื้อสัตว์หมัก",   ), 

                );



?>






               <div class="bg-white pt-lg-0">

                           <div class="mb-8 ">
                              <!-- title -->
                              <div class="p-2 pb-0">
                              <h5 class="mb-3">หมวดหมู่สินค้า</h5> </div>


                                    <ul class=" list-group list-group-flush  ">

                                     <?php  if (!empty($category_array)) {  

                                        foreach($category_array as $key=>$value){  ?>

                                      <li class="list-group-item p-2 d-flex justify-content-between align-items-start">
                                        <div class="ms-1 me-auto">
                                          
                                          <?php echo ucfirst($category_array[$key]["cat_name"]); ?> 
                                        </div>
                                        <span class=""> <i data-feather="chevron-right" class="text-body-tertiary fs-6"></i>  </span>
                                      </li>

                                    <?php } 
                                                                         
                                      } ?>    

                                    </ul>


                            
                           </div>











                        </div>
