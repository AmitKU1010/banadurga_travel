<?php 
  include('includes/config.php');
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>

  
</head>

<body>
  <?php 
  if(isset($_POST['submit']))
  {
 $option = explode("$", $_POST['vehicle_name']);
    $vehicle_id = $option[0];
    $vehicle_name = $option[1];
    $size = $option[2];
 $charging_type=$_POST['charging_type'];
 $day_charge=$_POST['day_charge'];
 $night_holt_charge=$_POST['night_holt_charge'];
 $km_cover_in_one_litre=$_POST['km_cover_in_one_litre'];
 $extra_hour_charges=$_POST['extra_hour_charges'];
 $price_per_km=$_POST['price_per_km'];
 $detaintion_charges=$_POST['detaintion_charges'];

 $sql="INSERT INTO `customercarcharges`(`vehicle_id`,`vehicle_name`,`charging_type`,`day_charge`,`night_holt_charge`,`km_cover_in_one_litre`,`extra_hour_charges`,`price_per_km`,`detaintion_charges`) VALUES ('$vehicle_id','$vehicle_name','$charging_type','$day_charge','$night_holt_charge','$km_cover_in_one_litre','$extra_hour_charges','$price_per_km','$detaintion_charges')";
 $run=mysqli_query($conn,$sql);
   if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
window.location ='add_carcharges_walkin.php';
    </script>
    <?php
  }
}
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
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Add Car Charges(Walk-in)</h6>
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
                    <label class="control-label mb-10">Vehicle Name</label>
                    
                  <select  name="vehicle_name" class="form-control" >
                    <?php 
                    $sql="SELECT * FROM car";
                    $run=mysqli_query($conn,$sql);
                   while($fetch=mysqli_fetch_assoc($run))
                     {
                      ?>
              <option value="<?php echo $fetch['id']."$".$fetch['vehicle_name']."$".$fetch['size'];?>">
                 <?php echo $fetch['vehicle_name']; ?>   </option>
                      <?php } ?>
              </select>
               <span class="help-block"></span>
               </div>
               </div>

            <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Charging Type</label>
                                    <select name="charging_type" id="charging_type" class="form-control" >
                                      <option value="" selected disabled>Select Charging Type</option>
                                      
                                      <option value="long">Long</option>
                                      <option value="local">Local</option>
                                      <option value="fixed">Fixed</option>
                                    </select>
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                             
                              
                              <div class="col-md-6" id="day_charge_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Day Charge</label>
                                    <input type="text"  maxlength="50" name="day_charge" id="day_charge" class="form-control"  placeholder="Day charge">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                <div class="col-md-6" id="nighthalt_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Night Holt Charge</label>
                                    <input type="text"  maxlength="50" name="night_holt_charge"  class="form-control"  placeholder="Price For Night Holt">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                               
                                <div class="col-md-6"  id="kmforlitrediv">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Kilometer Cover in 1 Litre </label>
                                    <input type="text"  name="km_cover_in_one_litre"  id="km_cover_in_one_litre" class="form-control" placeholder="Enter Distance in km">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                <div class="col-md-6" id="hour_charges_div">
                                  <div class="form-group">
                                   <label class="control-label mb-10">Extra Hour charges (hourly)</label>
                                    <input type="text" name="extra_hour_charges" id="extra_hour_charges" class="form-control" placeholder="Extra Hour">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                              

                             
                                <div class="col-md-6" id="priceper_kmdiv">
                                  <div class="form-group " >
                                    <label class="control-label mb-10">price(per kilometer)</label>
                                    <input type='text' name="price_per_km" id="price_per_km" class="form-control"  placeholder="price/kilometer">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                 <div class="col-md-6" id="detaintion_div">
                                  <div class="form-group " >
                                    <label class="control-label mb-10">Detaintion Charges</label>
                                    <input type='text' name="detaintion_charges" id="detaintion_charges" class="form-control"  placeholder="Detaintion Charges">
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

                               <!-- Row end -->
                              
                               

                               <!-- Row end -->
                              
                              </form>
                              <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>View Car Charges(Walk-in)</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                   <tr>
                              <th>#</th>
                              <th>Vehicle Name</th>
                              <th>Charging Type </th>
                              
                              <th>Price/K.m</th>
                              <th>Night Halt Charge</th>
                              <th>Day Charge</th>
                              
                              <th>K.M cover in 1LT</th>
                              <th>Hourly charge</th>
                              <th>Detaintion Charge</th>
                             
                              <th class="text-nowrap">Action</th>
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM customercarcharges";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                      <td><?php echo $i;?></td>
                      <td><?php echo $row["vehicle_name"];?></td>
                      <td><?php echo $row["charging_type"];?></td>
                      <td><?php echo $row["price_per_km"];?></td>
                      <td><?php echo $row["night_holt_charge"];?>
                      </td>
                      <td><?php echo $row["day_charge"];?></td>
                      <td><?php echo $row["km_cover_in_one_litre"];?></td><td><?php echo $row["extra_hour_charges"];?></td>
                      <td><?php echo $row["detaintion_charges"];?></td>
                      <td class="text-nowrap">
                        <a href="edit_car_charges_walkin.php?eid=<?php echo $row['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_car_charges_walkin.php?eid=<?php echo $row['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> </td>
                      
                        <?php
                        $i++;
                          echo "</tr>";
                        }
                      ?>
                    </tr>
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
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
<script>
  
$(document).on('change', '#charging_type', function()
            {
              if($("#charging_type").val()=="local")
                  {
                    $('#nighthalt_div').show();
                    $('#day_charge_div').show();
                     $('#hour_charges_div').show();
                  $('#priceper_kmdiv').hide();
                  $('#kmforlitrediv').show();
                  $('#detaintion_div').hide();
                  }
                if($("#charging_type").val()=="long"){
                  $('#nighthalt_div').show();
                  $('#day_charge_div').hide();
                  $('#hour_charges_div').hide();
                  $('#priceper_kmdiv').show();
                  $('#kmforlitrediv').hide();
                  $('#detaintion_div').show();
                }
                if($("#charging_type").val()=="fixed")
                {

                
      
                  $('#priceper_kmdiv').show();
                  $('#detaintion_div').show();
                  
                  $('#nighthalt_div').hide();
                  $('#toolgate_div').hide();
                  $('#day_charge_div').hide();
                  // hour_charges_divpriceper_kmdivkmforlitredivnighthalt_div

                }
              // alert('fgdfh');
            });

</script>
</body>
</html>
