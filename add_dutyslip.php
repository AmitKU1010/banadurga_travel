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
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Add DutySlip</h6>
                              <hr class="light-grey-hr"/>
                            </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form action="ajax_submit_dutyslip.php" method="post">
               <!-- row start -->
                         <div class="row">
                              <div class="col-md-3">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Duty Slip No</label>
                                    <input type="number" name="dutyslip_slno" id="dutyslip_slno" class="form-control"    
                                    value="">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Duty of</label>
                                    <input type="text" name="duty_of" id="duty_of" class="form-control"  placeholder="Duty of">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                 <div class="col-md-3">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Booked By</label>
                                    <input type="text" name="booked_by"  class="form-control"  placeholder="Booked By">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Booked For</label>
                                    <input type="text"  maxlength="50" name="report_at"  class="form-control"  placeholder="Booked For">
                                    
                                    <span class="help-block"> </span>
                                  </div>
                               </div>
                               </div>

                               <!-- Row end -->


                               <!-- row start -->
                         <div class="row">
                              
                                <div class="col-md-3">
                                    <div class="form-group ">
                                      <label class="control-label mb-10">Vehicle Name</label>
                                      <!-- <select name="vehicle_name" id="vehicle_name" class="form-control" >
                                      <option value="" selected disabled>Select vehicle Name</option> 
                                      <option>cfhg</option> 
                                    </select> -->
                         
                                    <select name="vehicle_name" id="vehicle_name" class="form-control">
                                      <option value="" selected disabled="">
                                        Select Vehicle
                                      </option>
                                       <?php
                          $sql="SELECT * FROM car";
                          $run=mysqli_query($conn,$sql);
                          while($fetch=mysqli_fetch_assoc($run))
                                    {
                                    ?>
                                       <option 
                                  value="<?php echo $fetch['id']."$".$fetch['vehicle_name']."$".$fetch['size'];  ?>">
                                    <?php echo $fetch['vehicle_name'] ;?>
                                      </option>
                                       <?php } ?>
                                    </select>
                                      <span class="help-block"> </span>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="form-group ">
                                      <label class="control-label mb-10">Vehicle No</label>
                                      <select name="vehicle_no" id="vehicle_no" class="form-control" >

                                    </select>
                                      <span class="help-block"> </span>
                                    </div>
                                  </div>
                                <div class="col-md-3">
                                    <div class="form-group ">
                                      <label class="control-label mb-10">Driver Name</label>
                               
                                      <select name="driver_name" class="form-control" >
                                <option value="" selected disabled>Select Driver</option>

                                             <?php
                          $sql="SELECT * FROM employee_details";
                          $run=mysqli_query($conn,$sql);
                          while($fetch=mysqli_fetch_assoc($run))
                                    {
                                    ?>
                                      <option value="<?php echo $fetch['emp_name']; ?>"><?php echo $fetch['emp_name']; ?></option>
                                      <?php } ?>
                                    </select>
                                      <span class="help-block"> </span>
                                    </div>
                                  </div>
                                    <div class="col-md-3">
                                    <div class="form-group ">
                                      <label class="control-label mb-10">Only Fixed</label>
                                      <select name="fixed_type" id="fixed_type" class="form-control" >
                                          <option value="" selected>Choose Fixed</option>
                                          <option value="fixed">Fixed</option>
                                      </select>
                                      <span class="help-block"> </span>
                                    </div>
                                    </div>
                               </div>
                               
                               <!-- Row end -->

                               <!-- row start -->
                               <div class="row">
                              
                               <div class="col-md-4">
                                    <div class="form-group ">
                                      <label class="control-label mb-10">Place From</label>
                                      <input type="text"  maxlength="50" name="place_from"  class="form-control"  placeholder="Enter Starting Place">
                                      <span class="help-block"> </span>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Place To</label>
                                    <input type="text"  maxlength="50" name="place_to"  class="form-control"  placeholder="Enter Ending Place">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Starting Date</label>
                                    <input type='date' name="start_date" class="form-control"  id="start_date" placeholder="Enter Date & Time" value="<?php echo date('Y-m-d'); ?>"/>
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                               </div>
                               <!-- Row end -->

                               <!-- row start -->
                               <div class="row">
                              
                               <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Closing Date</label>
                                    <input type='date' name="closing_date" class="form-control"  id="closing_date" placeholder="Enter Date & Time" value="<?php echo date('Y-m-d'); ?>"/>
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Starting Kilometer</label>
                                    <input type="text"  maxlength="50" name="starting_km" id="starting_km" class="form-control"  placeholder="Kilometer Starting From">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                              
                              
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Closing Kilometer</label>
                                    <input type="text"  maxlength="50" name="closing_km" id="closing_km" class="form-control"  placeholder="Ending Kilometer">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                               </div>
                               <!-- Row end -->

                                <!-- row start -->
                               <div class="row">
                              
                              <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Total Kilometer</label>
                                    <input type="text"  maxlength="50" name="total_km" id="total_km" class="form-control"  placeholder="Total Kilometer">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Starting Time</label>
                                    <input type="time"  maxlength="50" name="start_time"  id="start_time" class="form-control"  placeholder="Starting Time" value="08:56">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                 <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Closing Time</label>
                                    <input type="time"  maxlength="50" name="closing_time" id="closing_time" class="form-control"  placeholder="closing Time" value="10:36">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                               </div>
                               <!-- Row end -->


                                <!-- row start -->
                               <div class="row">
                              
                              <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Total Time</label>
                                    <input type="text"  maxlength="50" name="total_time" id="total_time" class="form-control"  placeholder="Total Time">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                              
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Charging Type</label>
                                    <input type="text"   name="charging_type"  id="charging_type" class="form-control" >
                                    
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                 <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">AC/NON-AC</label>
                                    <select name="ac_nonac" class="form-control" >
                                      <option value="" selected disabled>Select AC/NON-AC</option>
                                      
                                      <option value="ac">AC</option>
                                      <option value="nonac">NON-AC</option>
                                    </select>
                               </div>
                               </div>
                               </div>
                               <!-- Row end -->

                                 <!-- row start -->
                               <div class="row">
                              
                             <div class="col-md-4" id="fuel_ratediv">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Fuel Rate</label>
                                    <input type='text' name="fuel_rate" id="fuel_rate" class="form-control"  placeholder="Fuel Rate">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                
                                <div class="col-md-4" id="toolgate_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Tole Gate Charge</label>
                                    <input type="text"  maxlength="50" name="toll_gate"  class="form-control"  placeholder="Enter Toolgate Charge">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                              
                              
                                 <div class="col-md-4" id="parking_div">
                                  <div class="form-group " >
                                    <label class="control-label mb-10">Parking Charge</label>
                                    <input type="text"  maxlength="50" name="parking_charge"  class="form-control"  placeholder="Price For Parking Charge">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                               </div>
                               <!-- Row end -->

                                 <!-- row start -->
                               <div class="row">
                             <div class="col-md-4" id="driver_div">
                                  <div class="form-group " >
                                    <label class="control-label mb-10">Driver Food Charge</label>
                                    <input type="text"  maxlength="50" name="driver_f_charge"  class="form-control"  placeholder="driver food Charge">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                 <div class="col-md-4" id="other_div">
                                  <div class="form-group " >
                                    <label class="control-label mb-10">Other Charges</label>
                                    <input type="text"  maxlength="50" name="other_charge"  class="form-control"  placeholder="other Charge">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                 <div class="col-md-4" id="description_div">
                                  <div class="form-group " >
                                    <label class="control-label mb-10">Description</label>
                                    <input type="text"  maxlength="50" name="description"  class="form-control"  placeholder="description">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                               </div>
                               <!-- Row end -->

                                 <!-- row start -->
                               <div class="row">
                             
                              <!--   <div class="col-md-4" id="day_charge_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Day Charge</label>
                                    <input type="text"  maxlength="50" name="day_charge" id="day_charge" class="form-control"  placeholder="Price For Night Holt">
                                    <span class="help-block"> </span>
                                  </div>
                                </div> -->
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Advance Paid by Client</label>
                                    <input type="text"  maxlength="50" name="advance_paid_client"  class="form-control"  placeholder="Enter Client Advance">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                  <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Advance Paid by Travels</label>
                                    <input type="text"  maxlength="50" name="advance_paid_travel"  class="form-control"  placeholder="Enter Travels Advance">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                              <!-- addddddddddddd-->
                                  <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Vehicle Advance </label>
                                    <input type="text"  maxlength="50" name="vehicle_returns"  class="form-control"  placeholder="Enter vehicle  Advance returns">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                               </div>
                               <!-- addddddddddddd-->
                               <!--  <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Total</label>
                                    <input type="text"  maxlength="50" name="total"  class="form-control"  placeholder="Total Price">
                                    <span class="help-block"> </span>
                                  </div>
                                </div> -->
                               <!-- Row end -->

                                <div class="form-actions mt-10">
                              <button type="submit" name="submit" class="btn btn-success  mr-10">Save</button>
                              <button type="reset" value="Reset" class="btn btn-default">Reset</button>
                              </div>
                               </div>
                                </div>
                              </form>
                              <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>View dutyslip</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                  <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Nature Of Date</th>
                              <th>address</th>
                              <th>Booked by</th>
                              <th>Driver Name</th>
                              <th>Vehicle No.</th>
                              <th>Date</th>
                              <th>Dutyslip No</th>
                              <th>starting k.m</th>
                              <th>starting time</th>
                              <th>closing k.m</th>
                              <th>closing Time</th>
                              <th>Total k.m</th>
                              <th>Total time</th>
                              <th>Adv.From Traveler</th>
                              <th></th>
                              <th></th>
                              <th></th>
                              
                              
                            
                              <th class="text-nowrap">Action</th>
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM duty_slip";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($v1 = $result->fetch_assoc()) 
                      {     
                      ?>
                     <td>#<?php echo $i;?></td>
                              <td><?php echo $v1['start_date'];?></td>
                              <td><?php echo $v1['dutyslip_slno'];?></td>
                              
                              <td><?php echo $v1['starting_km'];?></td>
                              <td><?php echo $v1['start_time'];?></td>
                              <td><?php echo $v1['closing_km'];?></td>
                              <td><?php echo $v1['closing_time'];?></td>
                              <td><?php echo $v1['total_km'];?></td>
                              <td><?php echo $v1['total_time'];?></td>
                              <td><?php echo $v1['booked_by'];?></td>
                              <td><?php echo $v1['driver_name'];?></td>
                              

                      <td class="text-nowrap">
                         <a href="dutyslip_archieve.php?printid=<?php echo $v1['id']; ?>" target="_blank"><i class="fa fa-file-text-o" aria-hidden="true"></i>
                            </a>
                            
                        <a href="edit_car_details.php?eid=<?php echo $row['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_car_details.php?eid=<?php echo $row['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> </td>
                      
                        <?php
                        $i++;
                          echo "</tr>";
                        }
                      ?>
                    </tr>
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
  $("#closing_km").on("change keyup paste",function()
  {
    // strating of kilometer
   var startingkilometer=$("#starting_km").val();
   var closingkilometer=$("#closing_km").val();
  var totalkilometer= closingkilometer-startingkilometer;
  $("#total_km").val(totalkilometer);
  //ending of total kilometer
  // starting of charging type
 var veh1 = $("#vehicle_name").val().split("$");
   var vehicle_id=veh1[0];
   var vehicle_size=veh1[2];
   var totalkm=$("#total_km").val();
   var fixedtype=$("#fixed_type").val();
   //alert(vehicle_size);fixed_type

   if(vehicle_size=="small")
   {
      if(fixedtype!=="fixed")
     {
      //alert(fixedtype);
      if(totalkm > 249)
     {
      //alert("long");charging_type
      $('#charging_type').val("long");
     // $('#nighthalt_div').show();
     }
     if(totalkm <= 249){
      //alert("local") ;
      $('#charging_type').val("local");
      //$('#nighthalt_div').show();
     }
     }
     if(fixedtype=="fixed")
     {
      $('#charging_type').val("fixed");
      //$('#nighthalt_div').hide();
     }
   }
   if(vehicle_size=="big")
   {
        if(fixedtype!=="fixed")
     {
      //alert(fixedtype);
      if(totalkm > 299)
     {
      //alert("long");charging_type
      $('#charging_type').val("long");
     // $('#nighthalt_div').show();
     }
     if(totalkm <= 299 ){
      //alert("local") ;
      $('#charging_type').val("local");
      //$('#nighthalt_div').show();
     }

     }
     if(fixedtype=="fixed")
     {
      
      $('#charging_type').val("fixed");
      //$('#nighthalt_div').hide();
     }
   }


});

  $( "#closing_time" ).keyup(function() {
var startdt = new Date($("#start_date").val() + " " + $("#start_time").val());

var enddt = new Date($("#closing_date").val() + " " + $("#closing_time").val());

var diff = enddt - startdt;
//alert(enddt);
var days = Math.floor(diff / (1000 * 60 * 60 * 24));
diff -=  days * (1000 * 60 * 60 * 24);

var hours = Math.floor(diff / (1000 * 60 * 60));
diff -= hours * (1000 * 60 * 60);

var mins = Math.floor(diff / (1000 * 60));
diff -= mins * (1000 * 60);

var seconds = Math.floor(diff / (1000));
diff -= seconds * (1000);

if(days<0 || hours<0 || mins<0 || seconds<0 )
{
  $("#total_time").val("Please enter correct time range");
}
else{
$("#total_time").val(days + " days : " + hours + " hours : " + mins + " minutes : " + seconds + " seconds");
}

});


$(document).on('change', '#vehicle_name', function()
            {

              var veh = $("#vehicle_name").val().split("$");

              var vehicle_id=veh[0];
              jQuery.ajax
              ({
                type:"post",
                url:"ajax_get_vehicle_no.php",
                dataType:"html", // Data type, HTML, json etc.
                data:{vehicle_id:vehicle_id},
                success:function(response)
                {
                  // alert(response);
                 // var abc = json_decode(response);
                  //alert(response);vehicle_no
                 //document.getElementById("vehicle_no").innerHTML=response;
                 $('#vehicle_no').html(response);
                 //alert(response);
                }
              });
            });
$(document).on('change', '#total_km', function()

            {

              var vehicle_id = $("#vehicle_name").val();
              //alert(vehicle_id);
             
            });

</script>
</body>
</html>
