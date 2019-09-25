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

   $dutyslip_slno=$_POST['dutyslip_slno'];
   $party_name=$_POST['party_name'];
   $nature_of_duty=$_POST['nature_of_duty'];
   $address=$_POST['address'];
   $vehicle_name=$_POST['vehicle_name'];
   $vehicle_no=$_POST['vehicle_no'];


    $booked_by=$_POST['booked_by'];
    $driver_name=$_POST['driver_name'];
    $driver_number=$_POST['driver_number'];
    $date=$_POST['date'];
    $starting_km=$_POST['starting_km'];
    $starting_time=$_POST['starting_time'];
    $place=$_POST['place'];
    $advance_price=$_POST['advance_price'];
    

$sqlone="UPDATE dutyslip_corporate SET dutyslip_slno='$dutyslip_slno',party_name='$party_name',nature_of_duty='$nature_of_duty',address='$address',vehicle_name='$vehicle_name',vehicle_no='$vehicle_no',booked_by='$booked_by',driver_name='$driver_name',driver_number='$driver_number'date='$date',starting_km='$starting_km',starting_time='$starting_time',place='$place',advance_price='$advance_price'
  WHERE id='$getid'";
  $run=mysqli_query($conn,$sqlone);
// exit();
  
if($run==true)
  {
    ?>
    <script>
    alert('Data Updated Succesfully');
window.location ='add_dutyslip_corporet.php';
    </script>
    <?php
  }
}
?>

<!-- Fetech data From databse -->
<?php 
$sql="SELECT * FROM `dutyslip_corporate` WHERE id='$getid'";
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
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Edit Dutyslip (Corporate Informations)</h6>
                              <hr class="light-grey-hr"/>
                            </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form method="post">
                        <!-- row start -->
                                <div class="row">

                                  
                                

                                  <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Slip No</label>
                                    <input type="text" readonly name="dutyslip_slno" id="dutyslip_slno" class="form-control"  
                                     value="<?php echo $fetch['dutyslip_slno'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Customer Name</label>
                                    <input type="text" name="party_name"  class="form-control" value="<?php echo $fetch['party_name'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Nature Of Duty</label>
                                    <input type="text" readonly name="nature_of_duty" id="nature_of_duty" class="form-control"  
                                     value="<?php echo $fetch['nature_of_duty'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Address</label>
                                    <input type="text" name="address"  class="form-control" value="<?php echo $fetch['address'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>


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
                                    <label class="control-label mb-10">Vehicle No</label>
                                    <input type="text" readonly name="vehicle_no" id="vehicle_no" class="form-control"
                                    value="<?php echo $fetch['vehicle_no'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>

                              

                         <!-- row start -->
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Booked By</label>
                                    <input type="text" name="booked_by" id="booked_by" class="form-control"  
                                     value="<?php echo $fetch['booked_by'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Driver Name</label>
                                    <input type="text" name="driver_name"  class="form-control" value="<?php echo $fetch['driver_name'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Driver Number</label>
                                    <input type="text" name="driver_number"  class="form-control" value="<?php echo $fetch['driver_number'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Date</label>
                                    <input type="text" name="date" id="date" class="form-control"  
                                     value="<?php echo $fetch['date'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Starting Km</label>
                                    <input type="text" name="starting_km"  class="form-control" value="<?php echo $fetch['starting_km'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>


                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Starting Time</label>
                                    <input type="text" name="starting_time" id="starting_time" class="form-control"  
                                     value="<?php echo $fetch['starting_time'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Place</label>
                                    <input type="text" name="place"  class="form-control" value="<?php echo $fetch['place'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>


                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Advance Price</label>
                                    <input type="text" name="advance_price"  class="form-control" value="<?php echo $fetch['advance_price'] ?>">
                                    <span class="help-block"> </span>
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
