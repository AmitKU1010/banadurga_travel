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
      <div class="row">
      </div>
       <div class="row mt-3">
        <?php
          $postid = $_GET['l'];

          $sql = "SELECT * FROM location WHERE ulb_id = $postid";
          $result = $conn->query($sql);
              $i =1;
              // output data of each row
              while($row = $result->fetch_assoc()) 
              {
                //echo $row["location"];
                if($i%2 == 0){
                  $color = "gradient-deepblue";
                }else{
                  $color = "gradient-ibiza";
                }
        ?>
                 <div class="col-12 col-lg-6 col-xl-3">
                   <a href="#">
                     <div class="card <?php echo $color ?>">
                     <div class="card-body">
                        <h5 class="text-white mb-0"><?php echo $row["location"];?></h5>
                      </div>
                   </div>
                   </a> 
                 </div>

                <?php
              }
              ?>
      </div><!--End Row--> 

      <!--End Dashboard Content-->

    </div>
    <!-- End container-fluid-->
    
  </div><!--End content-wrapper-->
  
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
