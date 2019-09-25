<?php 
  include('includes/config.php');
  error_reporting(0);
  $getid = $_GET['eid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>
  
</head>

<body>
<!-- Update database -->
  <?php 
  if(isset($_POST['submit']))
  {
    $hotel_name=$_POST['hotel_name'];
    $hotel_address=$_POST['hotel_address'];
    $h_con_no=$_POST['h_con_no'];
    $hotel_own_name=$_POST['hotel_own_name'];
    $hotel_mail_id=$_POST['hotel_mail_id'];

   

$sqlone="UPDATE hotel SET hotel_name='$hotel_name',hotel_address='$hotel_address',h_con_no='$h_con_no',hotel_own_name='$hotel_own_name',hotel_mail_id='$hotel_mail_id'
WHERE id='$getid'";
$run=mysqli_query($conn,$sqlone);
if($run==true)
  {
    ?>
    <script>
    alert('Data Edited Succesfully');
window.location ='add_hotels.php';
    </script>
    <?php
  }
}
?>

<!-- Fetech data From databse -->
<?php 
$sql="SELECT * FROM `hotel` WHERE id='$getid'";
$run=mysqli_query($conn,$sql);
$fetch=mysqli_fetch_assoc($run);
?>
 <div id="wrapper">

<?php include('includes/sidebar.php')?>
<!--Start topbar header-->
<?php include('includes/topnav.php')?>
<!--End topbar header-->

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
      <!-- Model btn start -->
      <!-- <button type="button" class="btn btn-lg btn-info waves-effect waves-light" data-toggle="modal" data-target="#modal-animation-14">ADD STOCK</button> -->
      <!-- Model btn end -->
      <!-- Model Start -->
                           <div class="form-body">
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Hotels Info</h6>
                              <hr class="light-grey-hr"/>
                            </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form method="post">
                         <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Hotel Name</label>
                                    <input type="text" name="hotel_name" id="hotel_name" required class="form-control" value="<?php echo $fetch['hotel_name'] ?>"  placeholder="Hotel Name">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Hotel Address</label>
                                    <input type="text" name="hotel_address" id="hotel_address" class="form-control" value="<?php echo $fetch['hotel_address'] ?>"  placeholder="Vehicle Name">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                </div>
                               <!-- Row end -->
                                <!-- row start -->
                         <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Hotel Contact Number</label>
                                    <input type="text" name="h_con_no" id="h_con_no" class="form-control"
                                    value="<?php echo $fetch['h_con_no'] ?>"  placeholder="Hotel Contact Number">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">
                                      Hotel Owner Name
                                    </label>
                                    <input type="text" 
                                    name="hotel_own_name" 
                                    id="hotel_own_name" 
                                    value="<?php echo $fetch['hotel_own_name'] ?>" class="form-control"  placeholder="hotel owner name">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                </div>
                               <!-- Row end -->
                                <!-- row start -->
                         <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Hotel mail Id</label>
                                    <input type="text" name="hotel_mail_id" id="hotel_mail_id" class="form-control"
                                    value="<?php echo $fetch['hotel_mail_id'] ?>"  placeholder="Hotel mail id">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                </div>

                              <div class="form-actions mt-10">
                              <button type="submit" name="submit" class="btn btn-success  mr-10">Save</button>
                              <button type="reset" value="Reset" class="btn btn-default">Reset</button>
                              </div>
                                  </div>
                                  </div>
                                  </div>
                                </div>
                              </form>







                               






            

      <div class="clearfix"></div>
      <br>

      <!-- Table End -->

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
