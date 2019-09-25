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

      
                           <div class="form-body">
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Monthly Bill</h6>
                              <hr class="light-grey-hr"/>
                            </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form action="add_monthly_bill.php" method="post">
               <!-- row start -->
                  <div class="row">
                              <div class="col-md-2">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Client</label>
                                    <input type="text" name="client_name" id="client_name" class="form-control"  placeholder="Cient Name">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Vehicle Name</label>
                                    <input type="text" name="vehicle_name" id="vehicle_name"  class="form-control"  placeholder="Vehicle Name">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Type</label>
                                    <input type="text"  name="type" id="tpe"   class="form-control" placeholder="Type">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                 <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Vehicle No</label>
                                 <input type="text"  name="vehicle_no" id="vehicle_no"   class="form-control" placeholder="Vehicle No">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Bill Month</label>
                                    <input type="text"  name="bill_month"  id="bill_month"  class="form-control" placeholder="Bill Month">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                </div>

               <!-- row end -->
               <!-- row start -->
                  <div class="row">
                              <div class="col-md-2">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Monthly Bill Report</label>
                                    <input type="text" name="monthly_bill_report" id="monthly_bill_report" class="form-control"  placeholder="Monthly Bill Report">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                

                                
                                </div>

               <!-- row end -->
               <!-- row start -->
                  <div class="row">
                              <div class="col-md-2">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Fuel</label>
                                    <input type="text" name="fuel" id="fuel" class="form-control"  placeholder="Fuel">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">/</label>
                                    <input type="text" name="/" id="/"  class="form-control"  >
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Litre</label>
                                    <input type="text"  name="tlitreype" id="litre"   class="form-control" placeholder="Litre">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                 <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">@Rs</label>
                                 <input type="text"  name="@rs" id="@rs"   class="form-control" placeholder="00.00">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Rs</label>
                                    <input type="text"  name="rs"  id="rs"  class="form-control" placeholder="Rs">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                </div>

               <!-- row end -->
                              

                               <!-- row start -->
                  <div class="row">
                              <div class="col-md-2">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Mobil</label>
                                    <input type="text" name="mobil" id="mobil" class="form-control"  placeholder="Mobil">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">/</label>
                                    <input type="text" name="/" id="/"  class="form-control"  >
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Litre</label>
                                    <input type="text"  name="tlitreype" id="litre"   class="form-control" placeholder="Litre">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                 <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">@Rs</label>
                                 <input type="text"  name="@rs" id="@rs"   class="form-control" placeholder="00.00">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Rs</label>
                                    <input type="text"  name="rs"  id="rs"  class="form-control" placeholder="Rs">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                </div>

               <!-- row end -->
                            
                             <div class="row">
                              <div class="col-md-2">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Extra Km</label>
                                    <input type="text" name="extra_km" id="extra_km" class="form-control"  placeholder="Extra Km">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">@</label>
                                    <input type="text" name="@" id="@"  class="form-control"  >
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Rs</label>
                                    <input type="text"  name="rs"  id="rs"  class="form-control" placeholder="Rs">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                </div>

               <!-- row end -->


  <!-- row end -->
                            
                             <div class="row">
                              <div class="col-md-2">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Extra Hr</label>
                                    <input type="text" name="extra_hr" id="extra_hr" class="form-control"  placeholder="Extra Hr">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">@</label>
                                    <input type="text" name="@" id="@"  class="form-control"  >
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Rs</label>
                                    <input type="text"  name="rs"  id="rs"  class="form-control" placeholder="Rs">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                </div>

               <!-- row end -->

                 <!-- row end -->
                            
                             <div class="row">
                              <div class="col-md-2">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Night Hult</label>
                                    <input type="text" name="night_hult" id="night_hult" class="form-control"  placeholder="Night Hult">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">@</label>
                                    <input type="text" name="@" id="@"  class="form-control"  >
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Rs</label>
                                    <input type="text"  name="rs"  id="rs"  class="form-control" placeholder="Rs">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                </div>

               <!-- row end -->

               <!-- row start -->
                  <div class="row">
                              <div class="col-md-2">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Total</label>
                                    <input type="text" name="total" id="total" class="form-control"  placeholder="Total">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Service Tax</label>
                                    <input type="text" name="tax" id="tax"  class="form-control"  placeholder="Service Tax">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Parking Fee</label>
                                    <input type="text"  name="parking_fee" id="parking_fee"   class="form-control" placeholder="Parking Fee">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                 <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Net Amount</label>
                                 <input type="text"  name="net_amt" id="net_amt"   class="form-control" placeholder="Net Amount">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Date</label>
                                    <input type="date"  name="date"  id="date"  class="form-control" placeholder="Date">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Bill No</label>
                                    <input type="text"  name="bill_no"  id="bill_no"  class="form-control" placeholder="Bill No">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Bill Type</label>
                                    <input type="text"  name="bill_tpe"  id="bill_tpe"  class="form-control" placeholder="Bill Type">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                </div>

               <!-- row end -->
               
                               <!--  <div class="form-actions mt-10">
                              <button type="submit" name="submit" class="btn btn-success  mr-10">Save</button>
                              <button type="reset" value="Reset" class="btn btn-default">Reset</button>
                              </div>
                               </div>
                                </div>
                              </form>
                              <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>Customer Details</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" border="7" style="border-color: blue;">
                <thead>
                   <tr>
                              <th style="text-align: center" class="text-nowrap">Action</th>
                              <th style="text-align: center">#</th>
                              <th style="text-align: center">Customer Name</th>
                              <th style="text-align: center">Customer Address</th>
                              
                              <th style="text-align: center">Phone Number</th>
                              <th style="text-align: center">Email Id</th>
                              <th style="text-align: center">GST Number</th>
                              
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    // $sql = "SELECT * FROM coustomer";
                    // $result = $conn->query($sql);

                    // $i = 1;
                      // output data of each row
                      // while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                      <td style="text-align:center;width:80px;background-color: black;color:#fff;" width="5" class="text-nowrap">
                        <a href="edit_customer.php?id=<?php echo $row['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_costo.php?eid=<?php echo $row['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> </td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $i;?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["cos_name"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["cos_adress"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["cos_number"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["cos_email"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["cos_gst"];?></td>
                    
                      
                      
                        <?php
                        // $i++;
                          // echo "</tr>";
                        }
                        
                      ?>
                    </tr>
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div> --><!-- End Row-->
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
<!-- <script>
  
$(document).on('blur','#other',function(){
      var basic = $('#basic').val();
      var hra = $('#hra').val();
      var da = $('#da').val();
      var other = $('#other').val();
      var amount = parseInt(basic) + parseInt(hra) + parseInt(da) + parseInt(other);
      $('#gross').val(amount);
      var epf = $('#epf').val();
      var esic = $('#esic').val();
      var net = parseInt(amount) - (parseInt(epf) + parseInt(esic));
      $('#amount').val(net);
    });
</script> -->

