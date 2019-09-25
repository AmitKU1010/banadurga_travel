<?php 
  include('includes/header.php');
  include('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>
   <style type="text/css">
    .switcher-icon{
      visibility: visible;
    }
  </style>
</head>

<body>

   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div>
   <!-- end loader --><!-- Start wrapper-->
 <div id="wrapper">

<?php include('includes/sidebar.php')?>
<!--Start topbar header-->
<?php include('includes/topnav.php')?>
<!--End topbar header-->


<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->

     <div class="row mt-3">
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-deepblue">
           <div class="card-body">
              <h5 class="text-white mb-0">9526 <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Total Orders <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div> 
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-orange">
           <div class="card-body">
              <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Total Revenue <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-ohhappiness">
            <div class="card-body">
              <h5 class="text-white mb-0">6200 <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Visitors <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-ibiza">
            <div class="card-body">
              <h5 class="text-white mb-0">5630 <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Messages <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div>
     </div><!--End Row-->

	
	<!--Start footer-->
	<?php include('includes/footer.php')?>

	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
      </ul>
      
     </div>
   </div>
  <!--end color cwitcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
<?php include('includes/footerjs.php')?>
</body>
</html>
