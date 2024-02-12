<div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="#">   Subscribe</a>
      </div>



      <div class="col-4 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#"> 
          <img src="img/assets/freshcart-logo.png" >
        </a>
      </div>


      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-sm btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#cart">
           <i class="bi bi-bag"></i> Cart (<span class="total-count"></span>)
        </button>

        <button class="clear-cart btn btn-sm btn-outline-danger">Clear Cart</button>


                <!-- Modal -->
                <div class="modal fade" id="cart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Shop Cart </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                              <table class="show-cart table">
                          
                              </table>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-sm " data-bs-dismiss="modal">เลือกสินค้าต่อ</button>
                        <button type="button" class="btn btn-sm btn-danger">ยืนยันการสั่งซื้อ</button>
                      </div>
                    </div>
                  </div>
                </div>



      </div>
    </div>
  </header>

<!--   <div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
      <a class="nav-item nav-link link-body-emphasis active" href="#">World</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">U.S.</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Technology</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Design</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Culture</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Business</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Politics</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Opinion</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Science</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Health</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Style</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Travel</a>
    </nav>
  </div> -->
</div>
