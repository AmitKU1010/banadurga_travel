<?php 
  include('includes/config.php');
  error_reporting(0);
  session_start();
  unset($_SESSION['start_client']);
  unset($_SESSION['end_client']);
  unset($_SESSION['serach_person']);
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
                              <hr class="light-grey-hr"/>
                              <button class="btn btn-danger"><a href="add_carcharges_walkin.php"> <strong>Edit Charges</strong></a></button>

                            </div>
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Update DutySlip(Corporate)</h6>
                              <form method="post" >
                              <table>
                                <tr>
                                  <td>
                              <strong>Updated By :</strong>
                              <select name="updated_by" id="kuku" class="myselect2">
                                <option >Choose</option>
                                <option value="party_name" id="cl_namee">Client Name</option>
                                <option value="vehicle_no" id="vehicle_no">Vehicle No</option>
                                <option value="dutyslip_slno" id="dutyslip_slno">Dutyslip No</option>
                                <option value="date_wise" id="date_wise">Date Wise</option>
                              </select>
                              </td>
                                


                              <td>

                              <div id="ch_party_one" style="display: none;">
                              <strong>Choose Party Name :</strong>

                                <select name="select_party_name" id="select_party_name" class="myselect">
                                  <option selected disabled>Choose Party Name</option>
                                   <?php 
                              $sq1="SELECT * FROM add_corporate";
                              $ru1=mysqli_query($conn,$sq1);
                              while($data1=mysqli_fetch_assoc($ru1)) 
                              {
                                ?>
                                <option><?php echo $data1['cos_name']; ?></option>
                                <?php
                              }
                              ?>
                              </select>
                              </div>



                               <div id="ch_party_two" style="display: none;">
                              <strong>Choose Vehicle Number :</strong>
                                <select name="select_vehicle_no" id="select_vehicle_no" class="myselectvn">
                                   <option selected disabled>Choose Vehicle No</option>
                                   <?php 
                              $sq2="SELECT * FROM dutyslip_corporate";
                              $ru2=mysqli_query($conn,$sq2);
                              while($data2=mysqli_fetch_assoc($ru2)) 
                              {
                                ?>
                                <option><?php echo $data2['vehicle_no']; ?></option>
                                <?php
                              }
                              ?>
                              </select>
                              </div>


                              <div id="ch_party_three" style="display: none;">
                              <strong>Dutyslip No :</strong>
                               <select name="select_dutyslip_no" id="select_dutyslip_no" class="myselectdn">
                                   <option selected disabled>Choose Dutyslip No</option>
                                   <?php 
                              $sq2="SELECT * FROM dutyslip_corporate";
                              $ru2=mysqli_query($conn,$sq2);
                              while($data2=mysqli_fetch_assoc($ru2)) 
                              {
                                ?>
                                <option><?php echo $data2['dutyslip_slno']; ?></option>
                                <?php
                              }
                              ?>
                              </select>
                              </div>


                              <div id="ch_party_four" style="display: none;">
                              <strong>Date Wise:</strong>
                                <select name="select_datewise" id="select_datewise" class="myselectdate">
                                   <option selected disabled>Choose Date</option>
                                   <?php 
                              $sq2="SELECT * FROM dutyslip_corporate group by date";
                              $ru2=mysqli_query($conn,$sq2);
                              while($data2=mysqli_fetch_assoc($ru2)) 
                              {
                                ?>
                                <option><?php echo $data2['date']; ?></option>
                                <?php
                              }
                              ?>
                              </select>
                              </div>

                              </td>
                              <td> 
                      <button type="submit" name="sos" class="btn btn-success  mr-10">Search</button>        </td>

                              </tr>
                              </table>
                              </form>



                              <hr class="light-grey-hr"/>

                            </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form action="update_dutyslip.php" method="post" >
                        
                <div style="overflow-x: auto;">
                <table>
                    <thead>
                      <tr>
                        <th style="text-align: center">#</th>
                        <th style="text-align: center">Bill No</th>

                        <th style="text-align: center">Ds No</th>

                        <th style="text-align: center;">Party Name</th>
                        <th style="text-align: center;display: none;">Place</th>
                        <th style="text-align: center;display: none;">Report At</th>
                        <th style="text-align: center">Car Name</th>
                        <th style="text-align: center">Car No</th>
                        <th style="text-align: center">St.Date</th>
                        <th style="text-align: center">St.K.M</th>
                        <th style="text-align: center">St.Time</th>
                        <th style="text-align: center">Cl. Date</th>
                        <th style="text-align: center">Cl. K.M</th>
                        <th style="text-align: center">Cl.Time</th>
                        <th style="text-align: center">Type</th>
                        <th style="text-align: center">T. K.m</th>
                        <th style="text-align: center">T.hr</th>

                       <!-- car cahrges -->
  <th style="text-align: center;display: none;" id="nh_charges_th">N.H(CHG.)</th>
  <th style="text-align: center;display: none;" id="no_of_nh_th">NO. OF NIGHT HALT</th>
  <th style="text-align: center;display: none;" id="total_price_of_nh_th">NIGHT HALT PRICE</th>


  <th style="text-align: center;display: none;" id="detaintion_charges_th">DET(CHG.)</th>
  <th style="text-align: center;display: none;" id="detaintion_hour_th">DET.HOUR</th>
  <th style="text-align: center;display: none;" id="total_price_of_detaintion_th">TOTAL DETAINTION PRICE</th>

    <th style="text-align: center;display: none;" id="price_per_km_th">PRICE PER K.M</th>

    <th style="text-align: center;display: none;" id="total_ppk_th">Total(ppk)</th>

    <th style="text-align: center;display: none;" id="day_charge_th">Day Charge</th>

    <th style="text-align: center;display: none;" id="km_cover_in_one_litre_th">K.M COVER IN 1 LITRE</th>

    <th style="text-align: center;display: none;" id="">Fuel Rate</th>

    <th style="text-align: center;display: none;" id="total_price_of_km_cover_in_one_lit_th">Tot. pr(km cov1)</th>

    <th style="text-align: center;display: none;">Extra(p,t,o)</th>



                        <th style="text-align: center">T. Amount</th>
                        <th style="text-align: center">Adv</th>
                        <th style="text-align: center">Driver Charge</th>
                        <th style="text-align: center">Balance</th>
                      </tr>
                    </thead>
                           
                    <tbody>
                        <?php 
                      if(isset($_POST['sos']))
                      {

                        if(isset($_POST['select_party_name']))
                        {
                     echo $select_party_name=$_POST['select_party_name'];
                        // $sq5="SELECT * FROM issue_dutyslip WHERE party_name='$select_party_name'";

                        $sq5="SELECT dutyslip_corporate.* FROM dutyslip_corporate WHERE dutyslip_corporate.party_name='$select_party_name'  AND dutyslip_corporate.dutyslip_slno not in (
    SELECT update_dutyslip_mst.dutyslip_slno FROM  update_dutyslip_mst
                                                    )";
                        }

                        if(isset($_POST['select_vehicle_no']))
                        {
                     $select_vehicle_no=$_POST['select_vehicle_no'];
                        // $sq5="SELECT * FROM issue_dutyslip WHERE vehicle_no='$select_vehicle_no'";

                         $sq5="SELECT dutyslip_corporate.* FROM dutyslip_corporate WHERE dutyslip_corporate.vehicle_no='$select_vehicle_no'  AND dutyslip_corporate.dutyslip_slno not in (
    SELECT update_dutyslip_mst.dutyslip_slno FROM  update_dutyslip_mst
                                                    )";

                        }

                        if(isset($_POST['select_dutyslip_no']))
                        {
                      $select_dutyslip_no=$_POST['select_dutyslip_no'];
                        // $sq5="SELECT * FROM issue_dutyslip WHERE dutyslip_slno='$select_dutyslip_no'";

                        $sq5="SELECT dutyslip_corporate.* FROM dutyslip_corporate WHERE dutyslip_corporate.dutyslip_slno='$select_dutyslip_no'  AND dutyslip_corporate.dutyslip_slno not in (
    SELECT update_dutyslip_mst.dutyslip_slno FROM  update_dutyslip_mst
                                                    )";
                        }

                         if(isset($_POST['select_datewise']))
                        {
                     $select_datewise=$_POST['select_datewise'];
                        // $sq5="SELECT * FROM issue_dutyslip WHERE starting_date='$select_datewise'";

                        $sq5="SELECT dutyslip_corporate.* FROM dutyslip_corporate WHERE dutyslip_corporate.starting_date='$select_datewise'  AND dutyslip_corporate.dutyslip_slno not in (
    SELECT update_dutyslip_mst.dutyslip_slno FROM  update_dutyslip_mst
                                                    )";
                        }

                        $ru5=mysqli_query($conn,$sq5);
                        $i=1;
                        $z=1;
                        while ($data5=mysqli_fetch_assoc($ru5)) 
                         {
                      ?> 

                       
                   
                    <tr>
                      <td>
                          <input type="text" style="text-align:center;width:30px;background-color: #af1dba;color:#fff;" value="<?php echo $i; ?>">
                        </td>

                          <td>
                    <input type="text" style="text-align:center;width:50px;background-color: #af1dba;color:#fff;" name="bill_no[]" id="bill_no-<?php echo $i; ?>">
                        </td>
                      

                        <td>
                    <input type="text" style="text-align:center;width:50px;background-color: #af1dba;color:#fff;" name="dutyslip_slno[]" id="dutyslip_slno-<?php echo $i; ?>" value="<?php echo $data5['dutyslip_slno'] ?>" maxlength="4" readonly>
                        </td>

                        <td>
                    <input type="text" style="text-align:center;width:50px;background-color: #af1dba;color:#fff;" name="party_name[]" id="party_name-<?php echo $i; ?>" value="<?php echo $data5['party_name'] ?>">
                        </td>

                       <!--  <td style="display: none;">
                    <input type="text" style="text-align:center;width:50px;background-color: #af1dba;color:#fff;" name="place_from[]" id="place_from-<?php echo $i; ?>" value="<?php echo $data5['place_from'] ?>">
                        </td> -->

                       <!--  <td style="display: none;">
                    <input type="text" style="text-align:center;width:50px;background-color: #af1dba;color:#fff;" name="report_at[]" id="report_at-<?php echo $i; ?>" value="<?php echo $data5['report_at'] ?>">
                        </td>
 -->

                        <td>
                          <input type="text" style="text-align:center;width:90px;background-color: #af1dba;color:#fff;" name="vehicle_name[]"  id="vehicle_name-<?php echo $i; ?>" value="<?php echo $data5['vehicle_name'] ?>"readonly>

                          <input type="hidden" style="text-align:center;width:90px;background-color: #af1dba;color:#fff;" name="vehicle_id[]"  id="vehicle_id-<?php echo $i; ?>" value="<?php echo $data5['vehicle_id'] ?>">
                        </td>

                        <td>
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="vehicle_no[]" id="vehicle_no-<?php echo $i; ?>"value="<?php echo $data5['vehicle_no'] ?>"readonly >
                        </td>

                        <td>
                          <input type="date" style="text-align:center;width:150px;background-color: #af1dba;color:#fff;" name="starting_date[]" id="starting_date-<?php echo $i; ?>" value="<?php echo $data5['date'] ?>" readonly>
                        </td>

                        <td>
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="starting_km[]" id="starting_km-<?php echo $i;?>" value="<?php echo $data5['starting_km'] ?>" maxlength="7" >
                        </td>

                        <td>
                          <input type="time" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"  name="starting_time[]" id="starting_time-<?php echo $i; ?>" value="<?php echo $data5['starting_time'] ?>">
                        </td>


                        <td>
                          <input type="date" style="text-align:center;width:150px;background-color: #af1dba;color:#fff;" name="closing_date[]" id="closing_date-<?php echo $i; ?>">
                        </td>


                        <td>
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="closing_km[]" onchange="show_closing_km(this.id)" id="closing_km-<?php echo $i; ?>" maxlength="7" >
                        </td>


                        <td>
                          <input type="time" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="closing_time[]" id="closing_time-<?php echo $i; ?>" value="10:56"
                         >
                        </td>


                        <td>
                          <select style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="charging_type[]" id="charging_type-<?php echo $i; ?>">
                            <option value="long">Long</option>
                            <option value="fixed">Fixed</option>
                            <option value="daybasic">Daybasic</option>
                          </select>
                        </td>

                        <td>
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="total_km[]" id="total_km-<?php echo $i; ?>" >
                        </td>

                        <td>
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="total_time[]" id="total_time-<?php echo $i; ?>" >
                        </td>

                        <!-- carcharges starts -->

                        <!-- NIGHT HALT STARTS -->
                        <td id="nh_charges_div" style="display:none;">
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="nh_charges[]" id="nh_charges-<?php echo $i; ?>" >
                        </td>

                         <td id="no_of_nh_div" style="display:none;">
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="no_of_nh[]" id="no_of_nh-<?php echo $i; ?>" >
                        </td>

                         <td id="total_price_of_nh_div" style="display:none;">
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="total_price_of_nh[]" id="total_price_of_nh-<?php echo $i; ?>" >
                        </td> 
                        <!-- NIGHT HALT ENDS -->


                        <!-- DETAINTION STARTS -->
                        <td id="detaintion_charges_div" style="display:none;">
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="detaintion_charges[]" id="detaintion_charges-<?php echo $i; ?>" >
                        </td>

                        <td id="detaintion_hour_div" style="display:none;">
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="detaintion_hour[]" id="detaintion_hour-<?php echo $i; ?>" >
                        </td>

                        <td id="total_price_of_detaintion_div" style="display:none;">
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="total_price_of_detaintion[]" id="total_price_of_detaintion-<?php echo $i; ?>" >
                        </td>
                        <!-- DETAINTION ENDS -->

                        <!-- price per K.M starts -->
                        <td id="price_per_km_div" style="display:none;">
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="price_per_km[]" id="price_per_km-<?php echo $i; ?>" >
                        </td>
                          <td id="total_ppk_div" style="display:none;">
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="total_ppk[]" id="total_ppk-<?php echo $i; ?>" >
                        </td>

                        <!-- for daybasic -->

                         <td style="display:none;">
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="day_charge_td[]" id="day_charge_td-<?php echo $i; ?>" >
                        </td>

                         <td style="display:none;">
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="km_cover_in_one_litre_td[]" id="km_cover_in_one_litre_td-<?php echo $i; ?>" >
                        </td>

                         <td style="display:none;">
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="fuel_rate_td[]" id="fuel_rate_td-<?php echo $i; ?>" >
                        </td>

                         <td style="display:none;">
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="total_price_of_km_cover_in_one_lit_td[]" id="total_price_of_km_cover_in_one_lit_td-<?php echo $i; ?>" >
                        </td>

                        <td style="display:none;">
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="extra_parking_toll[]" id="extra_parking_toll-<?php echo $i; ?>" >
                        </td>



                        <!-- price per K.M ends -->
                        <!-- car charges end -->


                        <td>
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="total_amount[]" id="total_amount-<?php echo $i; ?>" value="<?php echo $data5['']?>">
                        </td>

                     

                        <td>
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"  name="advance_price[]" id="advance_price-<?php echo $i; ?>" value="<?php echo $data5['advance_price'] ?>">
                        </td>

                        <td>
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" onchange="show_grand_total_amt(this.id)" name="Driver_charge[]" id="Driver_charge-<?php echo $i; ?>" >
                        </td>


                        <td>
                          <input type="text" style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" name="grand_total[]" id="grand_total-<?php echo $i; ?>" >
                        </td>
                      </tr>
                   <?php
                        $i++;

                   echo "</tr>";
                  }
                }
              
                    ?> 

                    <tr class="add_tr"></tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>

                      <td>
                        <input type="submit" name="submit" value="Submit" class="btn btn-success">
                      </td>
                    
                    </tr>

                </tbody>

               </table>
               <br>
               <table>
                     <tr>
                        <td>No Of Night-Halt<input type="text"  style="border: 2px solid red;" name="non" id="non" value="0"></td>
                        <td>Fuel Rate<input type="text" name="fr" id="fr"  style="border: 2px solid red;"  value="0"></td>
                        <td>Extras(parking/toll)<input type="text" c  style="border: 2px solid red;" name="parking_toll" id="parking_toll" value="0"></td>
                      </tr>
                      </table>
                </form>
                </div>
                </div>
                </div>

               
                                   
                              <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>View dutyslip Corporate
              <div class="table-wrap">
                   <div class="table-responsive">
                   <div class="table-wrap">
                   <div class="table-responsive">

                   <form method="post">
                   <div class="pull-right">
                   <input type="date" class="form-group" name="start_client">
                   <input type="date" class="form-group" name="end_client">
                   <input type="text" class="form-group" name="serach" id="serach_person">
                   <input type="submit" name="submit_client">
                    <a class="btn btn-info" target="_blanks" href="print_cos.php">GST</a>
                    <a class="btn btn-info" target="_blanks" href="print_cos_withoutgst.php">NON-GST</a>

               </div>
               </form>



            </div>
            <div class="card-body">
              <div class="table-responsive">

              <table id="example" style="border-color: blue;"  border="5" >

                <thead>
                            <tr>
                              <th class="text-nowrap" style="text-align: center">Action</th>
                              <th style="text-align: center">#</th>
                              <th style="text-align: center">Dt</th>
                              <th style="text-align: center">D.S No</th>
                              <th style="text-align: center">P.Nm</th>
                              <th style="text-align: center">S.K.m</th>
                              <th style="text-align: center">S.Time</th>
                              <th style="text-align: center">C.K.m</th>
                              <th style="text-align: center">C.Time</th>
                              <th style="text-align: center">T.K.M</th>
                              <!-- <th>T.Time</th> -->
                              <th style="text-align: center">Chg.Typ</th>
                              <th style="text-align: center">Total</th>
                              <th style="text-align: center">Adv</th>
                              <th style="text-align: center">Driver charge</th>
                              <th style="text-align: center">Payble Amount</th>
                            </tr>
                </thead>
                <tbody>
                    <tr>
                      <?php
                        $three_cor = $four_cor =  "";                   
                            if(isset($_POST['submit_client']))
                              {
                                  $start_client=$_POST['start_client'];
                                  $date_client=date_create($start_client);
                                  $three_client= date_format($date_client,"Y-m-d");


                                  $end_client=$_POST['end_client'];
                                  $date2_client=date_create($end_client);
                                  $four_client=date_format($date2_client,"Y-m-d");


                                  $person_name=$_POST['serach'];

                                 $_SESSION['start_client'] = $three_client;
                                 $_SESSION['end_client'] = $four_client;
                                 $_SESSION['serach'] = $person_name;

                                  $sql = "SELECT * FROM `update_dutyslip_mst`  WHERE 
                                    party_name LIKE '%"."$person_name"."%' AND `starting_date` BETWEEN '$three_client' AND '$four_client'";
                                   
                              }
                              else
                              {
                    $sql = "SELECT * FROM update_dutyslip_mst";
                              }
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($v1 = $result->fetch_assoc()) 
                      {     
                      ?>
                        <td class="text-nowrap" style="text-align:center;width:80px;background-color:black;color:#fff;">
                         <a href="gst_bill_corporet.php?printid=<?php echo $v1['id']; ?>" target="_blank"><i class="fa fa-file-text-o" aria-hidden="true"></i>
                            </a>
                            <a href="without_gst_bill_corporet.php?printid=<?php echo $v1['id']; ?>" target="_blank"><i class="fa fa-file-text-o" aria-hidden="true"></i>

                            <a href="delete_corporetbill.php?printid=<?php echo $v1['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> 
                            </a>
                        <!--     
                        <a href="edit_car_details.php?eid=<?php echo $row['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_car_details.php?eid=<?php echo $row['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a>  -->
                       </td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;">#<?php echo $i;?></td>

                               <?php 
                              $origDate = $v1['closing_date'];
                              $newDate = date("m-d-Y", strtotime($origDate));
                              ?>

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $newDate?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['dutyslip_slno'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['party_name'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['starting_km'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['starting_time'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['closing_km'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['closing_time'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['total_km'];?></td>
                              <!-- <td><?php echo $v1['total_time'];?></td> -->
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['charging_type'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['total_amount'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['advance'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['driver_charge'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['grand_total'];?></td>
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
  <!-- <?php include('includes/footer.php')?> -->

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
     $('#kuku').on('change', function()
       {
         var cheking_re=$('#kuku').val();
         if(cheking_re=='party_name')
         {
        $('#ch_party_one').show();
        $('#ch_party_two').hide();
        $('#ch_party_three').hide();
        $('#ch_party_four').hide();
      $(".myselect").select2();

         }
         if(cheking_re=='vehicle_no')
         {
       $('#ch_party_one').hide();
        $('#ch_party_two').show();
        $('#ch_party_three').hide();
        $('#ch_party_four').hide();
      $(".myselectvn").select2();

         }
         if(cheking_re=='dutyslip_slno')
         {
        $('#ch_party_one').hide();
        $('#ch_party_two').hide();
        $('#ch_party_three').show();
        $('#ch_party_four').hide();
      $(".myselectdn").select2();

         }
         if(cheking_re=='date_wise')
         {
        $('#ch_party_one').hide();
        $('#ch_party_two').hide();
        $('#ch_party_three').hide();
        $('#ch_party_four').show();
      $(".myselectdate").select2();

         }
         });

      // function show_km(str) {
      // // alert(1);
      //   var id = str;
      //   alert(id);
      //   // var l_no = id.split("-");
      //   // var valu = $('#'+id).val();

      // }

     function show_closing_km(str)
       {
        var id = str;
         // alert(id);
        var id_no=id.split('-');
        // alert(id_no[1]);

        var closing_km=$('#'+id).val();
        // alert(closing_km);
        var starting_km=$('#starting_km'+'-'+id_no[1]).val();
        // alert(starting_km);

        var total_km=parseInt(closing_km)-parseInt(starting_km);
        $('#total_km'+'-'+id_no[1]).val(total_km);

        $('#closing_time'+'-'+id_no[1]).keyup(function()
                        {

                          // var id = this.id;
                          // // alert(id);
                          // var id_no=id.split('-');
                          // // alert(id_no[1]);
                          // alert('yrs');

                           var startdt = new Date($('#starting_date'+'-'+id_no[1]).val()+ " " + $('#starting_time'+'-'+id_no[1]).val());
                           // alert(startdt);

                            var enddt = new Date($('#closing_date'+'-'+id_no[1]).val()+ " " + $('#closing_time'+'-'+id_no[1]).val());
                           // alert(enddt);

                           var diff = enddt - startdt;
                           // alert(diff);

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
                           $('#total_time'+'-'+id_no[1]).val("Please enter correct time range");
                             }
                           else
                           {
                           $('#total_time'+'-'+id_no[1]).val(days + " days : " + hours + " hours : " + mins + " minutes : " + seconds + " seconds");
                           }



     
     $('#total_time'+'-'+id_no[1]).on('blur', function()
       {
       // var id=this.id;
       // var id_no=id.split('-');

       var party_name=$('#party_name'+'-'+id_no[1]).val();
       // alert(vehicle_id);
       var charging_type=$('#charging_type'+'-'+id_no[1]).val();
      // alert(charging_type);
        
           jQuery.ajax
                      ({
                        type:"post",
                        url:"ajax_corporate_get.php",
                        dataType:"html", // Data type, HTML, json etc.
                        data:{party_name:party_name,charging_type:charging_type},
                        success:function(response)
                        {
                          // alert(response);
                          // console.log(response);
                          var obj1 = JSON.parse(response);

                          // for long charges

                        var night_holt_charge=obj1[0].night_holt_charge;
                        var detaintion_charges=obj1[0].detaintion_charges;
                        var price_per_km=obj1[0].price_per_km;

                        var day_charge=obj1[0].day_charge;
                        var km_cover_in_one_litre=obj1[0].km_cover_in_one_litre;
                        var fixed_price=obj1[0].fixed_price;

                        
                         // alert(detaintion_charges);

                          if(charging_type=='long')
                          {

                            $('#nh_charges'+'-'+id_no[1]).val(night_holt_charge);
                            $('#detaintion_charges'+'-'+id_no[1]).val(detaintion_charges);
                            $('#price_per_km'+'-'+id_no[1]).val(price_per_km);



                            var non=$("#non").val();
                            var parking_toll=$("#parking_toll").val();
                           

                            $('#no_of_nh'+'-'+id_no[1]).val(non);
                            // $('#total_price_of_nh'+'-'+id_no[1]).val(price_per_km);
                              $('#extra_parking_toll'+'-'+id_no[1]).val(parking_toll);

                           var total_night_halt_price_show=$('#nh_charges'+'-'+id_no[1]).val()*$('#no_of_nh'+'-'+id_no[1]).val();
                           // alert(total_night_halt_price_show);

                            $('#total_price_of_nh'+'-'+id_no[1]).val(total_night_halt_price_show);


                             // 
                             // 
                             // 
                             // 

                             var totalkm=$('#total_km'+'-'+id_no[1]).val();
                               // alert(totalkm);
                               // var detaion_hour = $('#detaintion').val(); 
                                var startdt = new Date($('#starting_date'+'-'+id_no[1]).val()+ " " + $('#starting_time'+'-'+id_no[1]).val());
                           // alert(startdt);

                            var enddt = new Date($('#closing_date'+'-'+id_no[1]).val()+ " " + $('#closing_time'+'-'+id_no[1]).val());
                           // alert(enddt);

                           var diff = enddt - startdt;
                               // alert(enddt);
                                // alert(startdt);
                                var days = Math.floor(diff / (1000 * 60 * 60 * 24));
                                var into_hour=days*24;
                                diff -=  days * (1000 * 60 * 60 * 24);

                                var hours = Math.floor(diff / (1000 * 60 * 60));
                                diff -= hours * (1000 * 60 * 60);

                                var mins = Math.floor(diff / (1000 * 60));
                                //diff -= mins * (1000 * 60);

                                var seconds = Math.floor(diff / (1000));
                                //$('#extra_hour').val(hours);
                                //var xdfd = 23;

                                // var total_hour = hours;
                                 var detention_hr =  parseFloat(Math.round(totalkm/50)).toFixed(2);
                                 // alert(detention_hr);
                                // //parseInt(totalkm)/50;
                                 //var dt_hr =  x.toPrecision(2) ;

                                 
                                 
                                 // var detaintion_hours = hours - detention_hr;
                                 // changed by me
                                 if(detention_hr>(hours+into_hour))
                                 {
                                   // alert(1);
                                  var detaintion_hours =detention_hr-(hours+into_hour);
                                $('#detaintion_hour'+'-'+id_no[1]).val(detaintion_hours);
                                 }
                                 else
                                 {
                                   // alert(2);

                                   var detaintion_hours =(hours+into_hour)-detention_hr;
                                $('#detaintion_hour'+'-'+id_no[1]).val(detaintion_hours);
                                 }

                                var total_price_of_detaintion_show= $('#detaintion_hour'+'-'+id_no[1]).val()*$('#detaintion_charges'+'-'+id_no[1]).val();
                                // alert(total_price_of_detaintion_show);

                             $('#total_price_of_detaintion'+'-'+id_no[1]).val(total_price_of_detaintion_show);

                             var total_price_per_km_show= $('#price_per_km'+'-'+id_no[1]).val()*$('#total_km'+'-'+id_no[1]).val();

                             $('#total_ppk'+'-'+id_no[1]).val(total_price_per_km_show);

                             //
                             var one=$('#total_price_of_nh'+'-'+id_no[1]).val();
                             var two=$('#total_price_of_detaintion'+'-'+id_no[1]).val();
                             var three=$('#total_ppk'+'-'+id_no[1]).val();
                             var four=$('#extra_parking_toll'+'-'+id_no[1]).val();




                             var toatl_amount_without_adv=parseInt(one)+parseInt(two)+parseInt(three)+parseInt(four);
                             // alert(toatl_amount_without_adv);

                             $('#total_amount'+'-'+id_no[1]).val(toatl_amount_without_adv);

                             $('#Driver_charge'+'-'+id_no[1]).on('change', function()
                             {

                              var grand_total=$('#total_amount'+'-'+id_no[1]).val()-$('#advance_price'+'-'+id_no[1]).val();

                             $('#grand_total'+'-'+id_no[1]).val(grand_total);

                             });


                             $('#grand_total'+'-'+id_no[1]).on('blur', function()
                             {
                              // alert('kxc');
                              $('#parking_toll').val('0');
                              $('#non').val('0');
                              $('#fr').val('0');

                             });


                          }

                          if(charging_type=='daybasic')
                          {
                            
                             var fr=$("#fr").val();
                             var non=$("#non").val();
                             var parking_toll=$("#parking_toll").val();
                            $('#extra_parking_toll'+'-'+id_no[1]).val(parking_toll);
                            $('#nh_charges'+'-'+id_no[1]).val(night_holt_charge);
                            $('#day_charge_td'+'-'+id_no[1]).val(day_charge);
                            $('#km_cover_in_one_litre_td'+'-'+id_no[1]).val(km_cover_in_one_litre);

                            $('#no_of_nh'+'-'+id_no[1]).val(non);

                             var total_night_halt_price_show=$('#nh_charges'+'-'+id_no[1]).val()*$('#no_of_nh'+'-'+id_no[1]).val();

                            $('#total_price_of_nh'+'-'+id_no[1]).val(total_night_halt_price_show);

                            $('#fuel_rate_td'+'-'+id_no[1]).val(fr);

    var total_price_of_km_cover_in_one_lit_show=($('#total_km'+'-'+id_no[1]).val()/$('#km_cover_in_one_litre_td'+'-'+id_no[1]).val())*$('#fuel_rate_td'+'-'+id_no[1]).val();

                            $('#total_price_of_km_cover_in_one_lit_td'+'-'+id_no[1]).val(total_price_of_km_cover_in_one_lit_show);

                            var one_daybasic= $('#total_price_of_nh'+'-'+id_no[1]).val();
                            var two_daybasic=$('#day_charge_td'+'-'+id_no[1]).val();
                            var three_daybasic=$('#total_price_of_km_cover_in_one_lit_td'+'-'+id_no[1]).val();
                            var four=$('#extra_parking_toll'+'-'+id_no[1]).val();

    var toatl_amount_without_adv_daybasic=parseInt(one_daybasic)+parseInt(two_daybasic)+parseInt(three_daybasic)+parseInt(four);
    // alert(toatl_amount_without_adv_daybasic);

    $('#total_amount'+'-'+id_no[1]).val(toatl_amount_without_adv_daybasic);

                            $('#Driver_charge'+'-'+id_no[1]).on('change', function()
                            {
                            var grand_total=$('#total_amount'+'-'+id_no[1]).val()-$('#advance_price'+'-'+id_no[1]).val();

                            $('#grand_total'+'-'+id_no[1]).val(grand_total);

                            });


                            $('#grand_total'+'-'+id_no[1]).on('blur', function()
                            {
                            $('#non').val('0');                              // alert('kxc');
                            $('#parking_toll').val('0');

                            $('#fr').val('0');

                            });

                            }

                            if(charging_type=='fixed')
                            {
                            $('#total_amount'+'-'+id_no[1]).val(fixed_price);

                            $('#Driver_charge'+'-'+id_no[1]).on('change', function()
                            {
                            var grand_total=$('#total_amount'+'-'+id_no[1]).val()-$('#advance_price'+'-'+id_no[1]).val();

                            $('#grand_total'+'-'+id_no[1]).val(grand_total);

                            });


                            $('#grand_total'+'-'+id_no[1]).on('blur', function()
                            {
                              // alert('kxc');
                            $('#parking_toll').val('0');
                            $('#non').val('0');
                            $('#fr').val('0');

                            });



                           }
                          
                           
                          
                        }

                      });
                  });
              });
            }

 $(".myselect2").select2();

</script>
</body>
</html>
