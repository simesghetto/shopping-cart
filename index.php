

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
              <div class=" p-2  bg-white  border rounded-3">

                  <?php include('site-menu.php');?>

              </div>
            </div>



            <div class="col-md-10 p-0 text-bg-lighgray">
            
                  <?php include('site-body.php');?>
          
            </div>


    </div>



    <footer class="pt-3 mt-4 text-body-secondary border-top">
      &copy; 2023    <a class="link-secondary" href="backend/index.php?admin_page=homepage">   admin backend </a>
    </footer>



  </div>
</main>





   <?php include('site-footer.php');?>






    </body>
</html>