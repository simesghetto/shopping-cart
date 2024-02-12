   


<?php

$menu_array = array (    array ( "menu_id" => "1","menu_icon" => "home","menu_name" => "หน้าแรก",  ),
                         array ( "menu_id" => "2","menu_icon" => "package","menu_name" => "สินค้า",  ),
                         array ( "menu_id" => "3","menu_icon" => "truck","menu_name" => "การจัดส่่ง",   ),
                         array ( "menu_id" => "4","menu_icon" => "shopping-bag","menu_name" => "คำสั่งซื้อ", ),
                         array ( "menu_id" => "5","menu_icon" => "settings","menu_name" => "ร้านค้า",  ),

                );



?>






               <div class="bg-white pt-lg-0">

                           <div class="mb-8 ">
                              <!-- title -->
                              <div class="p-2 pb-0">
                              <h5 class="mb-3">Admin</h5> </div>


                                    <ul class=" list-group list-group-flush  ">

                                     <?php  if (!empty($menu_array)) {  

                                        foreach($menu_array as $key=>$value){  ?>

                                              <li class="list-group-item p-2 d-flex justify-content-between align-items-start">
                                                <div class="ms-1 me-auto">

                                                  <i class="text-black-50 small" data-feather="<?php echo $menu_array[$key]["menu_icon"];?>"></i>

                                                  <?php echo ucfirst($menu_array[$key]["menu_name"]); ?> 

                                                </div>
                                                <span class=""> <i data-feather="chevron-right" class="text-body-tertiary fs-6"></i>  </span>
                                              </li>

                                    <?php } 
                                                                         
                                      } ?>    

                                    </ul>


                            
                           </div>











                        </div>
