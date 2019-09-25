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
    $cos_name=$_POST['cos_name'];
    $charging_type=$_POST['charging_type'];
    $day_charge=$_POST['day_charge'];
    $night_holt_charge=$_POST['night_holt_charge'];
    $km_cover_in_one_litre=$_POST['km_cover_in_one_litre'];
    $extra_hour_charges=$_POST['extra_hour_charges'];
    $price_per_km=$_POST['price_per_km'];


$sqlone="UPDATE `ownercarcharges` SET cos_name='$cos_name',charging_type='$charging_type',day_charge='$day_charge',night_holt_charge='$night_holt_charge',km_cover_in_one_litre='$km_cover_in_one_litre',
extra_hour_charges='$extra_hour_charges',
price_per_km='$price_per_km'
  WHERE id='$getid'";
  $run=mysqli_query($conn,$sqlone);

if($run==true)
  {
    ?>
    <script>
    alert('Data Updated Succesfully');
window.location ='add_carcharges_vendor.php';
    </script>
    <?php
  }
}
?>

<!-- Fetech data From databse -->
<?php 
$sql="SELECT * FROM `ownercarcharges` WHERE id='$getid'";
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
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Edit Car Charges</h6>
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
                                    <label class="control-label mb-10">Customer Name</label>
                                    <input type="text" name="cos_name" id="cos_name" class="form-control"
                                    value="<?php echo $fetch['cos_name'] ?>" readonly>
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>

                                  <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">
                                    Charging Type</label>
                                    <input type="text" name="charging_type" id="charging_type" class="form-control"
                                     value="<?php echo $fetch['charging_type'] ?>" readonly>
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>
                                </div>
                         <!-- row End -->

                         <!-- row start -->
                         <div class="row">
                             <div class="col-md-6" id="day_charge_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Day Charge</label>
                                    <input type="text"  maxlength="50" name="day_charge" id="day_charge" class="form-control"  placeholder="Day charge"
                                    value="<?php echo $fetch['day_charge'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                <div class="col-md-6" id="nighthalt_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Night Holt Charge</label>
                                    <input type="text"  maxlength="50" name="night_holt_charge"  class="form-control"  placeholder="Price For Night Holt"
                                    value="<?php echo $fetch['night_holt_charge'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                               </div>
                               <!-- Row end -->
                               <div class="row">
                                <div class="col-md-6"  id="kmforlitrediv">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Kilometer Cover in 1 Litre </label>
                                    <input type="text"  name="km_cover_in_one_litre"  id="km_cover_in_one_litre" class="form-control" placeholder="Enter Distance in km"
                                    value="<?php echo $fetch['km_cover_in_one_litre'] ?>">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                <div class="col-md-6" id="hour_charges_div">
                                  <div class="form-group">
                                   <label class="control-label mb-10">Extra Hour charges (hourly)</label>
                                    <input type="text" name="extra_hour_charges" id="extra_hour_charges" class="form-control" placeholder="Extra Hour"
                                    value="<?php echo $fetch['extra_hour_charges'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                               </div>

                               <!-- Row end -->
                                <!-- Row Start -->
                               <div class="row">
                                <div class="col-md-6" id="priceper_kmdiv">
                                  <div class="form-group " >
                                    <label class="control-label mb-10">price(per kilometer)</label>
                                    <input type='text' name="price_per_km" id="price_per_km" class="form-control"  placeholder="price/kilometer"
                                    value="<?php echo $fetch['price_per_km'] ?>">
                                    <span class="help-block">  </span>
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
