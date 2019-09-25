<?php 
  include('includes/config.php');
  // error_reporting(0);
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
    $vehicle_name=$_POST['vehicle_name'];
    $vehicle_number=$_POST['vehicle_number'];
    $owner_name=$_POST['owner_name'];
    // $condition_type=$_POST['condition_type'];
    // $fuel=$_POST['fuel'];
    $owner_contact_no=$_POST['owner_contact_no'];
    $owner_address=$_POST['owner_address'];
    // $owner_email=$_POST['owner_email'];
$sqlone="UPDATE vehicle_details SET vehicle_name='$vehicle_name',vehicle_no='$vehicle_number',owner_name='$owner_name',owner_contact_no='$owner_contact_no',owner_address='$owner_address'
  WHERE id='$getid'";
  $run=mysqli_query($conn,$sqlone);
// exit();
  
if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
window.location ='add_car_details.php';
    </script>
    <?php
  }
}
?>

<!-- Fetech data From databse -->
<?php 
$sql="SELECT * FROM `vehicle_details` WHERE id='$getid'";
$run=mysqli_query($conn,$sql);
$fetch=mysqli_fetch_assoc($run);
// exit();
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
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Edit Car Details</h6>
                              <hr class="light-grey-hr"/>
                            </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form method="post">
                        <!-- row start -->
                                <div class="row">

                                   <!-- <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Vehicle Name</label>
                                    <input type="text" readonly name="vehicle_name" id="vehicle_name" class="form-control"
                                    value="<?php echo $fetch['vehicle_no'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                  </div> -->

                                  <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Vehicle Name</label>
                                    <input type="text" readonly name="vehicle_name" id="vehicle_name" class="form-control"
                                    value="<?php echo $fetch['vehicle_name'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>

                                  <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Vehicle Number</label>
                                    <input type="text" readonly name="vehicle_number" id="vehicle_number" class="form-control"
                                    value="<?php echo $fetch['vehicle_no'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>


                                  
                              

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">
                                    Owner Name</label>
                                    <input type="text" name="owner_name" id="owner_name" class="form-control"
                                     value="<?php echo $fetch['owner_name'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>
                              
                                  <!-- <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Condition</label>
                                    <select class="form-control" name="condition_type">
                                      <option>AC</option>
                                      <option>NON-AC</option>

                                    </select>
                                    <span class="help-block">  </span>
                                  </div>
                                  </div> -->

                                <!--  <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Fuel</label>
                                   <select class="form-control" name="fuel"> 
                                     <option>Disel</option>
                                     <option>Petrol</option>
                                   </select>
                                    <span class="help-block">  </span>
                                  </div>
                                  </div> -->
                         <!-- row start -->
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Owner Contact Number</label>
                                    <input type="text" name="owner_contact_no" id="owner_contact_no" class="form-control"  
                                     value="<?php echo $fetch['color'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Owner Address</label>
                                    <input type="text" name="owner_address"  class="form-control" value="<?php echo $fetch['address'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                          
<!-- 
                                   <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Owner Email</label>
                                    <input type="text" name="owner_email" id="owner_email" class="form-control"  
                                     value="<?php echo $fetch['owner_email'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div> -->
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
