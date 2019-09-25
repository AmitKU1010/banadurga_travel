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
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Add Corporate Payment(owner)</h6>
                              <hr class="light-grey-hr"/>
                            </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form action="ajax_submit_owner_corporate_payment_slip.php" method="post">
               <!-- row start -->
                         <div class="row">

                                <div class="col-md-3">
                                  <div class="form-group">
                                   <label class="control-label mb-10">Duty Slip No</label>
                                    <input type="text" name="duty_slip_no" id="duty_slip_no" class="form-control" placeholder="Duty Slip No">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Duty Date</label>
                                    <input type="date" name="duty_date" id="duty_date" class="form-control">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Journey From</label>
                                    <input type="text" name="journey_from" id="journey_from" class="form-control">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Journey To</label>
                                    <input type="text" name="journey_to" id="journey_to" class="form-control"  placeholder="Journey To">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Booked By</label>
                                    <input type="text"  maxlength="30" name="booked_by"  id="booked_by" class="form-control"  placeholder="Booked By">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Owner Gst no</label>
                                    <input type="text"  maxlength="30" name="customer_gst"  id="customer_gst" class="form-control"  placeholder="GST No">
                                    <span class="help-block"> </span>
                                  </div>
                                </div> 
                                 <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Vehicle Name</label>
                                    <input type="text"  maxlength="20" name="vehicle_name" id="vehicle_name" class="form-control"  placeholder="vehicle name">
                                    <input type="hidden"  maxlength="20" name="vehicle_id" id="vehicle_id"/>
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Vehicle No</label>
                                    <input type="text"  maxlength="20" name="vehicle_no" id="vehicle_no" class="form-control"  placeholder="Vehicle No">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Starting K.M.</label>
                                    <input type="text"  name="starting_km" id="starting_km" class="form-control" placeholder="Starting K.M.">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Closing K.M.</label>
                                    <input type='text' name="closing_km" id="closing_km" class="form-control"  placeholder="Closing K.M.">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Total K.M.</label>
                                  <input type='text' name="total_km" id="total_km" class="form-control"  placeholder="Total K.M.">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4" id="priceper_kmdiv">
                                  <div class="form-group " >
                                    <label class="control-label mb-10">price(per kilometer)</label>
                                    <input type='text' name="priceper_km" id="priceper_km" class="form-control"  placeholder="price/kilometer">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Starting Time</label>
                                  <input type="time" name="starting_time" id="starting_time" style="text-transform:uppercase"  class="form-control" placeholder="Starting Time">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Closing Time</label>
                                  <input type="time"  name="closing_time" id="closing_time" class="form-control"  placeholder="Closing Time">
                                    <span class="help-block">  </span>
                                    <input type="hidden"  name="start_date" id="start_date" class="form-control">
                                    <input type="hidden"  name="closing_date" id="closing_date" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Total Time</label>
                                    <input type="text"  name="total_time" id="total_time"   class="form-control" placeholder="Total Time">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Charging Type</label>
                                    <input type="text"  name="charging_type" id="charging_type"   class="form-control" placeholder="charging type">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                <div class="col-md-4" id="extra_hour_div">
                                  <div class="form-group">
                                   <label class="control-label mb-10">Extra Hour</label>
                                    <input type="text" name="extra_hour" id="extra_hour" class="form-control" placeholder="Extra Hour">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-4" id="extra_hour_totalprice_div">
                                  <div class="form-group">
                                   <label class="control-label mb-10">Total Price of Extra Hour</label>
                                    <input type="text" name="extra_hour_totalprice" id="extra_hour_totalprice" class="form-control" placeholder="price" value="0">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                 <div class="col-md-4" id="night_haltdivno" style="display: none">
                                  <div class="form-group">
                                    <label class="control-label mb-10">No of Night Halt</label>
                                    <input type="text" name="noofnight_halt" id="totalnighthalt" class="form-control" placeholder="No of Night Halt" value="">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-4" id="night_haltdiv">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Night Halt</label>
                                    <input type="text" name="night_halt" id="night_halt" class="form-control" placeholder="Night Halt">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-4" id="tool_gatediv">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Toll Gate</label>
                                    <input type="text" name="tool_gate" id="tool_gate" class="form-control"  placeholder="Tool Gate">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-4"  id="parking_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Parking</label>
                                    <input type="text" name="parking" id="parking" class="form-control"  placeholder="Parking Charge">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-4"  id="kmforlitrediv">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Distance Cover in 1 Litre (in km) </label>
                                    <input type="text"  name="kmforlitre"  id="kmforlitre" class="form-control" placeholder="Enter Distance in km">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4" id="fuel_ratediv">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Fuel Rate</label>
                                    <input type='text' name="fuel_rate" id="fuel_rate" class="form-control"  placeholder="Fuel Rate">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4"  id="day_basicdiv">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Total Rate(Distance Cover in 1 Litre)</label>
                                    <input type="text"  name="day_basic"  id="day_basic" class="form-control" placeholder="Enter Distance in km">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                
                                
                                
                                <div class="col-md-4" id="day_chargediv">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Day Charge</label>
                                  <input type="text" name="day_charge" id="day_charge" class="form-control" placeholder="Day Charge">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4" id="fixed_price_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Fixed Price</label>
                                  <input type='text' name="fixed_price" id="fixed_price" class="form-control"  placeholder="">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4" id="extra_hour_new_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Extra Hour</label>
                                  <input type='text' name="extra_hour_new" id="extra_hour_new" class="form-control"  placeholder="Amount">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4" id="extra_hour_price_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Extra Hour price</label>
                                  <input type='text' name="extra_hour_price" id="extra_hour_price" class="form-control"  placeholder="Amount">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4" id="t_e_h_p_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Total Extra Hour price</label>
                                  <input type='text' name="t_e_h_p" id="t_e_h_p" class="form-control"  placeholder="Amount" readonly style="color:black;">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                  <div class="col-md-4" id="extra_km_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Extra K.M</label>
                                  <input type='text' name="extra_km" id="extra_km" class="form-control"  placeholder="Amount">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                 <div class="col-md-4" id="extra_km_price_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Extra K.M Price</label>
                                  <input type='text' name="extra_km_price" id="extra_km_price" class="form-control"  placeholder="Amount">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4" id="t_extra_km_price_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Total Extra K.M Price</label>
                                  <input type='text' name="t_extra_km_price" id="t_extra_km_price" class="form-control"  placeholder="Amount" style="color:black;" readonly>
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Total Amount</label>
                                  <input type='text' name="amount" id="amount" class="form-control"  placeholder="Amount" readonly style="color: black;">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                
                                <div class="col-md-4" id="driver_div">
                                  <div class="form-group " >
                                    <label class="control-label mb-10">Driver Food Charge</label>
                                    <input type="text"  maxlength="50" name="driver_f_charge" id="driver_f_charge"  class="form-control"  placeholder="driver food Charge">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                 <div class="col-md-4" id="other_div">
                                  <div class="form-group " >
                                    <label class="control-label mb-10">Other Charges</label>
                                    <input type="text"  maxlength="50" name="other_charge" id="other_charge"  class="form-control"  placeholder="other Charge">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                 <div class="col-md-4" id="description_div">
                                  <div class="form-group " >
                                    <label class="control-label mb-10">Description</label>
                                    <input type="text"  maxlength="50" name="description" id="description"  class="form-control"  placeholder="description">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Advance From Office</label>
                                  <input type="text"  name="advance_office" id="advance_office" class="form-control"  placeholder="Advance From Office">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Advance From Guest</label>
                                    <input type="text"  name="advance_guest"  id="advance_guest" class="form-control" placeholder="Advance From Guest">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4" id="total_advdiv">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Total Advance</label>
                                    <input type="text"  name="total_adv"  id="total_adv" class="form-control" placeholder="Total Advance">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                 <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Payble Amount</label>
                                    <input type="text"  name="total_amount"  id="total_amount"  class="form-control" placeholder="Total Amount" style="color:black;" readonly>
                                    <input type="hidden"  name="extra_hour_charge"  id="extra_hour_charge"  class="form-control" >
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Pay Amount</label>
                                    <input type="text"  name="py_amount"  id="py_amount"  class="form-control" placeholder="Pay Amount">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Due Amount</label>
                                    <input type="text"  name="du_amount"  id="du_amount"  class="form-control" placeholder="Due Amount">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Remarks</label>
                                    <input type="text"  name="remark"  id="remark"  class="form-control" placeholder="Remarks">
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
                              </form>
                              <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>View Corporate Payment(owner)</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                  <tr>
                              <th>#</th>
                            <th>Dt</th>
                            <th>O.n</th>
                            <th>S.k</th>
                            
                            <th>C.k</th>
                            <th>T.k</th>
                            <th>fuel</th>
                            <th>p/km</th>
                            <th>D.chgs</th>
                            <th>N.h</th>
                            <th>T.c</th>
                            <th>Total</th>
                            <th>Total adv</th>
                            <th>Payble amount</th>
                            <th>pay amount</th>
                            <th>Due amount</th>
                            <th>Remark</th>
                            <th class="text-nowrap">Action</th>
                            </tr>
                </thead>
                <tbody>
                    <tr>
                       <?php
                    $sql = "SELECT * FROM corporate_owner_payment_slip";
                    $result = $conn->query($sql);
                    $i = 1;
                      while($v1 = $result->fetch_assoc()) 
                        {     
                        ?>
                     <td>#<?php echo $i;?></td>
                             <td><?php echo $v1['duty_date'];?></td>
                            <td><?php echo $v1['booked_by'];?></td>
                            <td><?php echo $v1['starting_km'];?></td>
                            <td><?php echo $v1['closing_km'];?></td>
                            <td><?php echo $v1['total_km'];?></td>
                            <td><?php echo $v1['fuel_rate'];?></td>
                            <td><?php echo $v1['priceper_km'];?></td>
                            <td><?php echo $v1['day_charge'];?></td>
                            <td><?php echo $v1['night_halt'];?></td>
                            <td><?php echo $v1['tool_gate'];?></td>
                            <td><?php echo $v1['amount'];?></td>
                            <td><?php echo $v1['total_adv'];?></td>
                            <td><?php echo $v1['total_amount'];?></td>
                            <td><?php echo $v1['py_amount'];?></td>
                            <td><?php echo $v1['du_amount'];?></td>
                            <td><?php echo $v1['remark'];?></td>
                             <?php 
                              $dueAmount+= $v1['du_amount'];
                              $py_amount+= $v1['py_amount'];
                              $payble_amount=$v1['total_amount'];
                              $total_adv=$v1['total_adv'];
                              $total=$v1['amount'];
                              ?> 
                        

                      <td class="text-nowrap">

                       <a href="corporate_owner_archieve.php?printid=<?php echo $v1['id']; ?>" target="_blank"><i class="fa fa-file-text-o" aria-hidden="true">
                       </i>
                     </a>
                      
                    <a href="corporate_bill_archieve_owner.php?printid=<?php echo $v1['id']; ?>" target="_blank"><i class="fa fa-file-text-o" aria-hidden="true">
                    </i>
                     </a>

                     <a href="corporate_bill_archieve_withoutgst_owner.php?printid=<?php echo $v1['id']; ?>" target="_blank"><i class="fa fa-file-text-o" aria-hidden="true">
                    </i>
                     </a>

                       </td>
                         </tr>
                        <?php $i++; } ?>
                    </tr>
                </tbody>
                <tfoot>
                            <tr>
                            
                            
                            <td style="border-right: 0px;" colspan="15" align="right">Total Due:<!-- <?php echo $py_amount; ?> --></td>
                            <td  style="border-right: 0px;"><?php echo $dueAmount; ?></td>
                            <td  style="border-right: 0px;"></td>

                            <td class="text-nowrap"></td>
                          </tr>
                          </tfoot>
                          
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

  $(document).on('blur', '#duty_slip_no', function()
            {
              //alert("asd");
             
              var serial_no = $("#duty_slip_no").val();
              
              //alert(itemtypeid);

              jQuery.ajax
              ({
                type:"post",
                url:"ajax_dutyslip_corporate_coustomer_get.php",
                dataType:"html", // Data type, HTML, json etc.
                data:{serial_no:serial_no},
                success:function(response)
                {
                  //  alert(response);
                  // console.log(response);
                  obj = JSON.parse(response);
                  //obj1 = JSON.parse(response);
                  //console.log(obj.length);
                  // console.log(obj);
                 // alert(obj['place_to']);
                 // alert(obj.place_from);
                 // alert(response.place_from);
                 $('#journey_from').val(obj[0].place_from);
                  $('#journey_to').val(obj[0].place_to);
                  $('#booked_by').val(obj[0].booked_by);
                  $('#duty_date').val(obj[0].start_date);
                  $('#vehicle_no').val(obj[0].vehicle_no);
                  $('#vehicle_name').val(obj[0].vehicle_name);
                  $('#vehicle_id').val(obj[0].vehicle_id);
                  $('#starting_km').val(obj[0].starting_km);
                  $('#closing_km').val(obj[0].closing_km);
                  $('#total_km').val(obj[0].total_km);
                  $('#starting_time').val(obj[0].start_time);
                  $('#closing_time').val(obj[0].closing_time);
                  $('#total_time').val(obj[0].total_time);
                  $('#start_date').val(obj[0].start_date);
                  $('#closing_date').val(obj[0].closing_date);
                  $('#tool_gate').val(obj[0].toll_gate);
                  $('#parking').val(obj[0].parking_charge);
                  $('#advance_office').val(obj[0].advance_paid_travel);
                  $('#advance_guest').val(obj[0].advance_paid_client);
                  $('#charging_type').val(obj[0].charging_type);
                  $('#driver_f_charge').val(obj[0].driver_f_charge);
                  $('#other_charge').val(obj[0].other_charge);
                  $('#description').val(obj[0].description);
                  $('#fuel_rate').val(obj[0].fuel_rate);
                   
                 
                    if (!$("#charging_type").val().length == 0)
                    {
                      var vehicle_id=$('#vehicle_id').val();
                      var charging_type=$('#charging_type').val();
                      // alert(charging_type);
                      // alert(vehicle_id);
                      // alert(charging_type);
                      jQuery.ajax
                      ({
                        type:"post",
                        url:"ajax_carcharges_owner.php",
                        dataType:"html", // Data type, HTML, json etc.
                        data:{vehicle_id:vehicle_id,charging_type:charging_type},
                        success:function(response)
                        {
                            // alert(response);
                          console.log(response);
                          obj1 = JSON.parse(response);
                          // alert(obj1);

                          if($("#charging_type").val()=="long")
                          {
                             $('#day_basicdiv').hide();
                              $('#fuel_ratediv').hide();
                              $('#day_chargediv').hide();
                               $('#night_haltdiv').show();
                               $('#night_haltdivno').show();
                
                               $('#kmforlitrediv').hide();
                              //$('#day_basicdiv').hide();
                              $('#extra_hour_totalprice_div').hide();
                              $('#extra_hour_div').hide();
                              $('#total_advdiv').show();
                              $('#tool_gatediv').show();
                              $('#parking_div').show();
                              $('#priceper_kmdiv').show();
                            
                              $('#driver_div').show();
                              $('#other_div').show();
                              $('#description_div').show();
                                    $('#fixed_price_div').hide();
                                    $('#extra_hour_new_div').hide();
                                    $('#extra_hour_price_div').hide();
                                    $('#t_e_h_p_div').hide();
                                    $('#extra_km_div').hide();
                                    $('#extra_km_price_div').hide();
                                    $('#t_extra_km_price_div').hide();

                              $('#total_amount').val(0);
                              $('#amount').val(0);
                  // $('#night_halt').val(obj1['night_holt_charge']);
                  // alert(obj1[0].price_per_km);
                  // alert(obj1[0].detaintion_charges);

                $('#priceper_km').val(obj1[0].price_per_km);
      
                   

                          
                            var totalkm=$('#total_km').val();
                             var startdt = new Date($("#start_date").val() + " " + $("#starting_time").val());

                                var enddt = new Date($("#closing_date").val() + " " + $("#closing_time").val());
                                //alert(startdt);
                                var diff = enddt - startdt;
                                //alert(enddt);
                                var days = Math.floor(diff / (1000 * 60 * 60 * 24));
                                diff -=  days * (1000 * 60 * 60 * 24);

                                var hours = Math.floor(diff / (1000 * 60 * 60));
                                diff -= hours * (1000 * 60 * 60);

                                var mins = Math.floor(diff / (1000 * 60));
                                //diff -= mins * (1000 * 60);

                                var seconds = Math.floor(diff / (1000));
                                //$('#extra_hour').val(hours);
                                //var xdfd = 23;

                                // var total_hour = hours;
                              
                                // //parseInt(totalkm)/50;
                                 //var dt_hr =  x.toPrecision(2) ;

                                 
                                 
                                 // var detaintion_hours = hours - detention_hr;
                                 // changed by me
                                

                                 

                var nighthaltvalue = obj1[0].night_holt_charge;
                // alert(nighthaltvalue);
                $('#totalnighthalt').change(function(){
                  var night_halt_no =  $('#totalnighthalt').val();
                  $('#night_halt').val(parseInt(nighthaltvalue)*parseInt(night_halt_no));
                  
                  
                  
                  
                     var priceper_km=$('#priceper_km').val();
                           var totalinitialamount = priceper_km * totalkm;
                           //alert( totalinitialamount );
                           $('#amount').val(totalinitialamount);
                           var parking_charge=$('#parking').val();
                           var tool_charge=$('#tool_gate').val();
                           var nighthalt=$('#night_halt').val();
                           var advguest_amount=$('#advance_guest').val();
                           var advoffice_amount=$('#advance_office').val();
                           var tot_amnt = $('#amount').val();
                           // var totalchargespaid =parseInt(tool_charge)+parseInt(parking_charge)+parseInt(nighthalt)+parseInt(advguest_amount)+parseInt(advoffice_amount);
                           var totalchargespaid = parseInt(advguest_amount);
                           var totalhavetopay = parseInt(tot_amnt) - parseInt(totalchargespaid);
                           var totalhavetopay1 = totalhavetopay;
                           $('#total_adv').val(advguest_amount);
                           
                           //var totalchargespaid =totalchargespaid.toFixed();
                            //var detaintionparktoolnight = tool_charge+parking_charge+nighthalt+detaintionch;
                            var detaintionparktoolnight = parseInt(tool_charge)+parseInt(parking_charge)+parseInt(nighthalt)
                           //var totalhavetopay1 = totalhavetopay + detaintionparktoolnight;
                           var drivercharge=$('#driver_f_charge').val();
                           var othercharge=$('#other_charge').val();

                           
                           var driverothercharge=parseInt(drivercharge)+parseInt(othercharge)
              
              var totalhavetopay1 = Math.round(parseFloat(nighthalt)+parseFloat(tool_charge)+parseFloat(driverothercharge)+parseFloat(parking_charge)+parseFloat(tot_amnt)-parseFloat(advguest_amount));
                          
                           $('#total_amount').val(totalhavetopay1);
                  
                  
                  
                });
                
                        

                          }
                          if($("#charging_type").val()=="local")
                          {
                            $('#extra_hour_totalprice_div').show();
                            $('#night_haltdiv').show();
                $('#night_haltdivno').show();
                            $('#kmforlitrediv').show();
                            $('#day_basicdiv').show();
                            $('#fuel_ratediv').show();
                            $('#priceper_kmdiv').hide();
                            $('#extra_hour_div').show();
                            $('#day_chargediv').show();
                            $('#driver_div').show();
                              $('#other_div').show();
                              $('#description_div').show();
                                    $('#fixed_price_div').hide();
                                    $('#extra_hour_new_div').hide();
                                    $('#extra_hour_price_div').hide();
                                    $('#t_e_h_p_div').hide();
                                    $('#extra_km_div').hide();
                                    $('#extra_km_price_div').hide();
                                    $('#t_extra_km_price_div').hide();
                            $('#total_amount').val(0);
                            $('#amount').val(0);
                            $('#total_adv').val(0);
                            $('#detaintion_charges_div').hide();
                            $('#detaintiondiv').hide();
                            $('#day_charge').val(obj1[0].day_charge);

                            // $('#day_charge').val(obj1['day_charge']);
                            //$('#night_halt').val(obj1['night_holt_charge']);
                            $('#kmforlitre').val(obj1[0].km_cover_in_one_litre);
                            $('#extra_hour_charge').val(obj1[0].extra_hour_charge);

                            var detaintion_hour = $('#detaintiondiv').val();
                            var detaintion_charges = $('#detaintion_charges_div').val();
                            if(detaintion_hour > 0)
                            {
                              alert();
                            }

                            var hourcharge = $('#extra_hour_charge').val();
                            if ($("#extra_hour").val().length == 0)
                            {
                              var startdt = new Date($("#start_date").val() + " " + $("#starting_time").val());

                                var enddt = new Date($("#closing_date").val() + " " + $("#closing_time").val());
                                //alert(startdt);
                                var diff = enddt - startdt;
                                //alert(enddt);
                                var days = Math.floor(diff / (1000 * 60 * 60 * 24));
                                diff -=  days * (1000 * 60 * 60 * 24);

                                var hours = Math.floor(diff / (1000 * 60 * 60));
                                diff -= hours * (1000 * 60 * 60);

                                var mins = Math.floor(diff / (1000 * 60));
                                //diff -= mins * (1000 * 60);

                                var seconds = Math.floor(diff / (1000));
                                //$('#extra_hour').val(hours);
                                //diff -= seconds * (1000);
                              //alert(mins);

                               var minushour = hours - 12;
                                //var minusmin = parseint(mins);
                                //var abc = jQuery.type(hours);
                                //$('#extra_hour').val(hours);
                                
                                if(mins>=30)
                                {
                                  //alert(0);
                                  if(minushour>0)
                                  {
                                    //alert(1);
                                    //var hourtomin = minushour*60;
                                    //var extrahour = hourtomin+30;

                                     $('#extra_hour').val(minushour + " hours : " + 30 + " minutes  ");
                                     var h_charge = hourcharge * minushour;
                                    var min_charge = parseInt(hourcharge/2);
                                    var total_hourcharge = h_charge + min_charge;
                                    $('#extra_hour_totalprice').val(total_hourcharge);
                                  }
                                  if(minushour=0)
                                  {
                                    //alert(2);
                                    $('#extra_hour').val( 30 + " minutes  ");
                                  }
                                }
                                if(mins<30)
                                {
                                  //alert(3);
                                  if(minushour>0)
                                  {
                                    //alert(4);
                                   // var hourtomin = minushour*60;
                                   //  var extrahour = hourtomin+30;
                                     $('#extra_hour').val(minushour + " hours  ");
                                  }
                                  if(minushour>0)
                                  {
                                    //alert(4);
                                   // var hourtomin = minushour*60;
                                   //  var extrahour = hourtomin+30;
                                     $('#extra_hour').val(minushour + " hours  ");
                                  }
                                }
                                // else{
                                //   //alert(5);
                                //   $('#extra_hour').val(0);
                                // }
                            }
                                

                                //alert(hours);
                                //alert(hours);
                               
                  
                // alert(obj1[0].night_holt_charge);

                var nighthaltvalue = obj1[0].night_holt_charge;
                $('#totalnighthalt').change(function(){
                  var night_halt_no =  $('#totalnighthalt').val();
                  $('#night_halt').val(parseInt(nighthaltvalue)*parseInt(night_halt_no));
                  
                  $("#fuel_rate").on("keyup change", function() 
                            {
                                var totalkm=$('#total_km').val();
                                var kmforlitre=$('#kmforlitre').val();
                                var fuelrate=$('#fuel_rate').val();
                                var totalfuel=totalkm/kmforlitre;
                                var daybasic=Math.round(totalfuel*fuelrate);
                                 $('#day_basic').val(daybasic);
                               //alert(daybasic);
                               var day_charge=$('#day_charge').val();
                               var totalamount=parseInt(daybasic)+parseInt(day_charge);
                               $('#amount').val(totalamount);
                               var adv_guest=$('#advance_guest').val();
                               var adv_off=$('#advance_office').val();
                               var totaladv=parseInt(adv_guest);
                               $('#total_adv').val(totaladv);
                               var payamount=parseInt(totalamount);
                               //var extrahourcharge = $('#extra_hour_totalprice').val();
                               //var finalpayamount = payamount + parseInt(extrahourcharge);
                               var extrahr = $('#extra_hour_totalprice').val();
                               var toolch = $('#tool_gate').val();
                               var parkch = $('#parking').val();
                               var nighthlt = $('#night_halt').val();
                               var toolparkingextrahr = parseInt(extrahr)+parseInt(toolch)+parseInt(parkch)+parseInt(nighthlt);

                                var drivercharge=$('#driver_f_charge').val();
                           var othercharge=$('#other_charge').val();

                           var driverothercharge=parseInt(drivercharge)+parseInt(othercharge)

                               var finalpayamount = parseInt(driverothercharge)+payamount + parseInt(toolparkingextrahr)-parseInt(totaladv);
                               $('#total_amount').val(finalpayamount);
                                //$('#starting_time').val(obj['start_time']);
                                //$('#closing_time').val(obj['closing_time']);

                                 });
                                  });
                            }
                            if($("#charging_type").val()=="fixed")
                            {
                                    $('#extra_hour_div').hide();
                                    $('#extra_hour_totalprice_div').hide();
                                    $('#night_haltdiv').hide();
                                    $('#day_basicdiv').hide();
                                    $('#kmforlitrediv').hide();
                                    $('#fuel_ratediv').hide();
                                    $('#day_chargediv').hide();
                                    $('#total_advdiv').show();
                                    $('#tool_gatediv').show();
                                    $('#parking_div').show();
                                    $('#priceper_kmdiv').hide();
                                    $('#detaintion_charges_div').hide();
                                    $('#driver_div').show();
                                    $('#other_div').show();
                                    $('#description_div').show();
                                    $('#detaintiondiv').hide();
                                    $('#fixed_price_div').show();
                                    $('#extra_hour_new_div').show();
                                    $('#extra_hour_price_div').show();
                                    $('#t_e_h_p_div').show();
                                    $('#extra_km_div').show();
                                    $('#extra_km_price_div').show();
                                    $('#t_extra_km_price_div').show();

                                    $('#total_amount').val(0);
                                    // $('#amount').val(0);
                                    $('#total_adv').val(0);
                                    $("#amount").on("keyup change", function() {
                                  var advguest_amount=$('#advance_guest').val();
                              var advoffice_amount=$('#advance_office').val();
                              // var tot_amnt = $('#amount').val();

                              var fixed_price = $('#fixed_price').val();
                              var extra_hour_new = $('#extra_hour_new').val();
                              var extra_hour_price = $('#extra_hour_price').val();
                              var t_e_h_p = $('#t_e_h_p').val();
                              var extra_km = $('#extra_km').val();
                              var extra_km_price = $('#extra_km_price').val();
                              var t_extra_km_price = $('#t_extra_km_price').val();
                              var toll_gate_fixed = $('#tool_gate').val();
                              var parking_fixed = $('#parking').val();


                              var total_extra_hour_price=parseInt(extra_hour_new)*parseInt(extra_hour_price);
                              

                       $('#t_e_h_p').val(total_extra_hour_price);

                       var total_extra_km_price=parseInt(extra_km)*parseInt(extra_km_price);
                       $('#t_extra_km_price').val(total_extra_km_price);

                     var xuv=parseInt(total_extra_hour_price)+parseInt(total_extra_km_price)+parseInt(fixed_price);

                        var amount = document.getElementById("amount");
                         amount.value =xuv;


                              

                              var totalchargespaid =parseInt(advguest_amount)+parseInt(advoffice_amount);
                            
                                var drivercharge=$('#driver_f_charge').val();
                           var othercharge=$('#other_charge').val();

                           var driverothercharge=parseInt(drivercharge)+parseInt(othercharge)+parseInt(toll_gate_fixed)+parseInt(parking_fixed)


                              var totalhavetopay =parseInt(driverothercharge)+parseInt(total_extra_hour_price)+parseInt(total_extra_km_price)+parseInt(fixed_price) - parseInt(advguest_amount);
                             
                              $('#total_adv').val(advguest_amount);
                              $('#total_amount').val(totalhavetopay);

                            });
                          }
                        }
                      });
                    }
                }
              });
              
            });
 
            $("#total_amount").keyup(function () {
                var value = $(this).val();
                $("#py_amount").val(value);
            });
      

    $("#du_amount").keyup(function()
     {
        var rate = document.getElementById("total_amount");
        var rateValue = rate.value;

        var quan = document.getElementById("py_amount");
        var quanValue = quan.value;

        var amount = document.getElementById("du_amount");
        amount.value = rateValue-quanValue;
    });



</script>
</body>
</html>
