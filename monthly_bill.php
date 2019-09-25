<?php 
  include('includes/config.php');
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>
      <?php include('includes/header.php')?>
</head>
<style type="text/css">
 
</style>

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
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Monthly Bill</h6>
                              <hr class="light-grey-hr"/>
                            </div>
      
          <div class="card" style="overflow: scroll;background-color:black;">
             <div class="card-body">
              <form action="ajax_submit_monthlybill.php" method="post">
                <table width="100%" id="data_table_add_product" style="color: black;">
                    <thead>
                     <table width="1000" style="color: white;">
                       <tr>
                        
                        <td style="text-align: center">Client
                          
                          <select class="form-control" id="client" name="client" style="background-color: white">
                            <?php
                        $sql="SELECT cos_name FROM coustomer";
                        $run=mysqli_query($conn,$sql);
                        while ($data=mysqli_fetch_assoc($run)) {
                        ?>
                            <option><?php echo $data['cos_name'];?></option>
                        <?php } ?>

                          </select>
                      </td>

                        <td style="text-align: center">Vehicle Name <select  name="vehicle_name" class="form-control" id="vehicle_name" style="background-color: white;">
                    <?php 
                    $sql="SELECT * FROM car";
                    $run=mysqli_query($conn,$sql);
                   while($fetch=mysqli_fetch_assoc($run))
                     {
                      ?>
                    <option value="<?php echo $fetch['id'] ?>">
                      <?php echo $fetch['vehicle_name']; ?>   </option>
                      <?php } ?>
                       </select>
                       </td>
                        <td style="text-align: center">Vehicle No. 
                          <select name="vehicle_no" id="vehicle_no" class="form-control" style="background-color: white;">
                          </select>
                        </td>
                        <td style="text-align: center" >Bill Month
                          <select class="form-control" name="bill_month" id="bill_month" style="background-color: white;">
                            <option>JAN</option>
                            <option>FEB</option>
                            <option>MARCH</option>
                            <option>APRIL</option>
                            <option>MAY</option>
                            <option>JUN</option>
                            <option>JULY</option>
                            <option>AUG</option>
                            <option>SEPT</option>
                            <option>OCT</option>
                            <option>NOV</option>
                            <option>DEC</option>
                          </select>

                        </td>

                       </tr>
                       <tr>
                         <td style="text-align: center;">Monthly Fixed Rent
                         <input type="text" class="form-control"  style="background-color:white;" name="monthly_fixed_rent" id="monthly_fixed_rent"></td>
                       </tr>
                       <tr>
                         <td style="text-align: center;">Fuel
                         <input type="text" name="total_km" id="total_km" class="form-control"  style="background-color:white;" placeholder="Total K.M"></td>
                         <td style="text-align: center;">/
                         <input type="text" name="km_cov_one_lit" class="form-control"  style="background-color:white;" id="km_cov_one_lit" placeholder="k.m Cover In 1Lit"></td>
                        <td style="text-align: center;">Litter
                        <input type="text" name="total_lit_burn" id="total_lit_burn" class="form-control"  style="background-color:white;" placeholder="total lit burn"></td>
                        <td style="text-align: center;">@Rs
                        <input type="text" name="fuel_rate" id="fuel_rate" class="form-control"  style="background-color:white;" placeholder="Fuel Rate"></td>
                        <td style="text-align: center;">Rs
                          <input type="text" name="total_fuel_rate" id="total_fuel_rate" class="form-control"  style="background-color:white;" placeholder="total fuel Consume @rs" ></td>
                       </tr>


                            <tr>
                         <td style="text-align: center;">Mobil
                         <input type="text" name="total_km_mobil" id="total_km_mobil" placeholder="Total K.M" class="form-control"  style="background-color:white;"></td>
                         <td style="text-align: center;">/
                         <input type="text" name="km_cov_one_lit_mobil" id="km_cov_one_lit_mobil" class="form-control"  style="background-color:white;" placeholder="Km Cover In ONe LIt"></td>
                        <td style="text-align: center;">Litter
                        <input type="text" name="total_lit_burn_mobil" id="total_lit_burn_mobil" class="form-control"  style="background-color:white;" placeholder="total_lit_burn"></td>
                        <td style="text-align: center;">@Rs
                        <input type="text" name="fuel_rate_mobil" id="fuel_rate_mobil" placeholder="Fuel Rate" class="form-control"  style="background-color:white;"></td>
                        <td style="text-align: center;">Rs
                          <input type="text" name="total_fuel_rate_mobil" id="total_fuel_rate_mobil" class="form-control"  style="background-color:white;" placeholder="Total Fuel Consume"></td>
                       </tr>

                            <tr>
                         <td style="text-align: center;">Extra K.m.
                         <input type="text" name="extra_km" id="extra_km" placeholder="Extra K.M" class="form-control"  style="background-color:white;"></td>
                         <td style="text-align: center;">@
                         <input type="text" name="extra_km_price" id="extra_km_price" class="form-control"  style="background-color:white;" placeholder="Extra KM Price"></td>
                        <td style="text-align: center;">Rs.
                        <input type="text" name="total_extra_km_price" id="total_extra_km_price" class="form-control"  style="background-color:white;" placeholder="total extra km price"></td>
                       </tr>
                            <tr>
                         <td style="text-align: center;">Extra Hour
                         <input type="text" name="extra_hour" id="extra_hour" class="form-control"  style="background-color:white;" placeholder="extra_hour"></td>
                         <td style="text-align: center;">@
                         <input type="text" name="extra_hour_price" id="extra_hour_price" class="form-control"  style="background-color:white;" placeholder="extra hour price"></td>
                        <td style="text-align: center;">Rs.
                        <input type="text" name="total_extra_hour_price" id="total_extra_hour_price" class="form-control"  style="background-color:white;" placeholder="total extra hour price"></td>
                       </tr>

                         <tr>
                         <td style="text-align: center;">Service Tax
                         <input type="text" name="service_tax" id="service_tax" placeholder="service_tax" class="form-control"  style="background-color:white;"></td>
                         <td style="text-align: center;">Toll Fee
                         <input type="text" name="toll_fee" id="toll_fee" placeholder="toll_fee" class="form-control"  style="background-color:white;"></td>
                        <td style="text-align: center;">Parking Fee
                        <input type="text" name="parking" id="parking" class="form-control"  style="background-color:white;" placeholder="parking_fee"></td>
                       </tr>
                         <tr>
                         <td style="text-align: center;">Net Amount
                         <input type="text" name="net_amount" id="net_amount" class="form-control"  style="background-color:white;" placeholder="Net Amount"></td>
                         <td style="text-align: center;">Date
                         <input type="date" name="bill_date" id="bill_date" class="form-control" style="background-color:white;"></td>
                        <td style="text-align: center;">Bill No.
                        <input type="text" name="bill_no" id="bill_no" placeholder="bill_no" class="form-control"  style="background-color:white;"></td>
                        <td style="text-align: center;">Bill Type.
                       <select class="form-control" name="bill_type" id="bill_type" style="background-color:white;">
                         <option>Inside</option>
                         <option>Outside</option>
                       </select></td>
                       </tr>
                       <div>
                       </div>
                     </table>
                 </tbody>
               </table>
               <br>
              

                 <button><input type="submit" class="form-control" name="submit"></button> 
                </form>
              </div>
              </div>
              </div>
              </div>

  
  <div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>View Monthly Bill</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" border="7" style="border-color: blue;" width="100%" height="40%">
                <thead>
                  <tr>        

                              <th style="text-align: center">#</th>
                             <!--  <th style="text-align: center">D.S No.</th> -->
                             <th style="text-align: center">Bll No.</th>
                              <th style="text-align: center">Bill Month</th>
                              <th style="text-align: center">Bill Date</th>
                              <th style="text-align: center">Client Name</th>
                              <th style="text-align: center">Vehicle Name</th>
                               <th style="text-align: center">Net Amount</th>
                              
                              
                              
                             
                              
                              <!-- <th>Adv.client</th>
                              <th>Adv.travel</th> -->
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM monthly_bill";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($v1 = $result->fetch_assoc()) 
                      {     
                      ?>
                      
                      <td  style="text-align:center;width:80px;background-color: black;color:#fff;"class="text-nowrap">
                         <a href="monthly_bill_archieve.php?printid=<?php echo $v1['id']; ?>" target="_blank"><i class="fa fa-file-text-o" aria-hidden="true"></i>
                            </a>
                            
                       <!--  <a href="edit_dutyslip_corporet.php?eid=<?php echo $v1['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> -->

                         <a href="delete_monthlybill.php?eid=<?php echo $v1['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> </td>
                              <!-- <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5">#<?php echo $i;?></td> -->
                               <td  style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"width="5"><?php echo $v1['bill_no'];?></td>

                               <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['bill_month'];?></td>


                                <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['bill_date'];?></td>

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['client'];?></td>

                              <td  style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"width="5"><?php echo $v1['vehicle_name'];?></td>

                               <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['net_amount'];?></td>
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
  $(document).on('change', '#vehicle_name', function()
            {
              // alert('one');

              var vehicle_id = $("#vehicle_name").val();
              // alert(veh);

              // alert(vehicle_id);
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
                 // alert(response);
                }
              });
            });


    $(document).on('change', '#km_cov_one_lit', function()
            {
              // alert('one');

              var total_km = $("#total_km").val();
              var km_cov_one_lit=$('#km_cov_one_lit').val();
              var total_one=parseInt(total_km)/parseInt(km_cov_one_lit);
              $('#total_lit_burn').val(total_one);

              
            });

     $(document).on('change', '#fuel_rate', function()
            {
   
              var fuel_rate=$('#fuel_rate').val();
              var total_lit_burn=$('#total_lit_burn').val();

              $('#total_fuel_rate').val(fuel_rate*total_lit_burn);

            });


       $(document).on('change', '#km_cov_one_lit_mobil', function()
            {
              // alert('one');

              var total_km_mobil = $("#total_km_mobil").val();
              var km_cov_one_lit_mobil=$('#km_cov_one_lit_mobil').val();
              var total_one_mobil=parseInt(total_km_mobil)/parseInt(km_cov_one_lit_mobil);
              $('#total_lit_burn_mobil').val(total_one_mobil);
            });

     $(document).on('change', '#fuel_rate_mobil', function()
            {
   
              var fuel_rate_mobil=$('#fuel_rate_mobil').val();
              var total_lit_burn_mobil=$('#total_lit_burn_mobil').val();

              $('#total_fuel_rate_mobil').val(fuel_rate_mobil*total_lit_burn_mobil);

            });



     $(document).on('change', '#extra_km_price', function()
            {
              // alert('dsfsd');
   
              var extra_km=$('#extra_km').val();
              var extra_km_price=$('#extra_km_price').val();

            var total_three=parseInt(extra_km)*parseInt(extra_km_price);

              $('#total_extra_km_price').val(total_three);

            });


     $(document).on('change', '#extra_hour_price', function()
            {
   
              var extra_hour=$('#extra_hour').val();
              var extra_hour_price=$('#extra_hour_price').val();

            var total_four=parseInt(extra_hour)*parseInt(extra_hour_price);

              $('#total_extra_hour_price').val(total_four);

            });

  

  

     $(document).on('change', '#parking', function()
            {
   // alert('knnj');
              var monthly_fixed_rent=$('#monthly_fixed_rent').val();
              var total_fuel_rate=$('#total_fuel_rate').val();
              var total_fuel_rate_mobil=$('#total_fuel_rate_mobil').val();

               var total_extra_km_price=$('#total_extra_km_price').val();
              var total_extra_hour_price=$('#total_extra_hour_price').val();

              var service_tax=$('#service_tax').val();
              var toll_fee=$('#toll_fee').val();
              var parking=$('#parking').val();

              // alert(monthly_fixed_rent);
              // alert(total_fuel_rate);
              // alert(total_fuel_rate_mobil);
              // alert(total_extra_km_price);
              // alert(total_extra_hour_price);
              // alert(service_tax);
              // alert(toll_fee);
              // alert(parking);


             
           var total_five=parseInt(monthly_fixed_rent)+parseInt(total_fuel_rate)+parseInt(total_fuel_rate_mobil)+parseInt(total_extra_km_price)+parseInt(total_extra_hour_price)+parseInt(service_tax)+parseInt(toll_fee)+parseInt(parking);

// alert(total_five);
            

              $('#net_amount').val(total_five);

            });

  
  
</script>
</body>
</html>
