<?php  if(!empty($_GET['printid'])) {
include("includes/config.php");
error_reporting(0);
$printid=$_GET['printid'];
  $sql = mysqli_query($conn,"SELECT * FROM `duty_slip_hotel` WHERE `id`='$printid'");
  while($rowdata = mysqli_fetch_assoc($sql))
  {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style>
table{
      border:3px solid black;
       border-collapse: collapse;
      margin-top: 20px;
      width: 100%;
      height: 90% ;
      

    }
</style>
</head>

<body>
  <table border="1" width="100%" padding="20">
  <tr>
   
 <td width="80" colspan="7"  rowspan="2" height="100" style="padding-left: 10px;"><!-- Registration.No.:-250<br> -->
       <h1 align="center">TAKE OUR TRIP </h1>
    <h4 align="center">Duttatota,puri-752001(Odisha)
www.takeourtrip.com, reservation@takeourtrip.com </h4>
    <h4 align="center">MOB-(06752)220200, +91 9040082000</h4>

   </td>
    <td colspan="2" height="20" style="text-align: center;">DUTY SLIP</td>
    
  </tr>
  <tr>
    <td colspan="3" style="font-size: 20px; padding-left: 30px;" >  No:<?php echo($rowdata['dutyslip_slno']); ?><br><br>
      Date:<?php echo($rowdata['start_date']); ?>
    </td>
  </tr>
  <tr>
    <td colspan="9" height="10">
      <p style="float: left; padding-left: 30px;">Hotel Name :<?php echo($rowdata['hotel_name']); ?></p>

      <p style="float: left; padding-left: 10px;">Driver's Name:<?php echo($rowdata['driver_name']); ?></p>

      <p style="float: left; padding-left: 500px">Duty Of :<?php echo($rowdata['duty_of']); ?></p><p style="float: right; padding-right: 200px;">Car No.:<?php echo($rowdata['vehicle_no']); ?></p>
    </td>
    
  </tr>
  <?php
     $sql = mysqli_query($conn,"SELECT * FROM `duty_slip_hotel` WHERE `id`='$printid'");
  while($rowdata = mysqli_fetch_assoc($sql)){
    ?>
  <tr>
    <td colspan="7" height="30"><p style="float: left; padding-left: 10px">Tour:
      <?php echo($rowdata['place_to']); ?></p>
      <p style="float: right; padding-right: 200px;">Car Type:<?php echo($rowdata['vehicle_name']); ?></p></td>
    <td rowspan="2" colspan="2"><p style="padding-left: 100px; margin-top: 0px;">DRIVERS BEHAVIER:</p>
      <h3 align="center">GOOD/BAD</h3>
  </tr>
  <tr>
    <td colspan="7"><p style="float: left; padding-left: 10px">Booked For:<?php echo($rowdata['report_at']); ?></p><p style="float: right; padding-right: 200px;">Booked By:<?php echo($rowdata['booked_by']); ?></p></td>
  </tr>
<?php } ?>
<?php $sql = mysqli_query($conn,"SELECT * FROM `duty_slip_hotel` WHERE `id`='$printid'");
  while($rowdata = mysqli_fetch_assoc($sql)){ ?>
  <tr style=" text-align: center;">
    <td>DATE</td>
    <td>STARTING KM.</td>
    <td>STARTING TIME</td>
    <td>CLOSING KM.</td>
    <td>CLOSING TIME</td>
    <td>TOTAL KM.</td>
    <td>TOTAL HOURS.</td>
    <td>DATE</td>
    <td>SIGNATURE</td>

  </tr>
  <tr>
    <td><?php echo($rowdata['start_date']); ?></td>
    <td><?php echo($rowdata['starting_km']); ?></td>
    <td><?php echo($rowdata['start_time']); ?></td>
    <td><?php echo($rowdata['closing_km']); ?></td>
    <td><?php echo($rowdata['closing_time']); ?></td>
    <td><?php echo($rowdata['total_km']); ?></td>
    <td><?php echo($rowdata['total_time']); ?></td>
    <td><?php echo($rowdata['start_date']); ?></td>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php
  $sql="SELECT employee_details.contact_no from employee_details INNER JOIN duty_slip ON duty_slip.driver_name=employee_details.emp_name WHERE duty_slip.id=$printid ";
  $run=mysqli_query($con,$sql);
  $data=mysqli_fetch_assoc($run);
  ?>

  <tr>
    <td colspan="6" height="40" style="padding-left: 10px;"><br>
    Driver Phone No. :<?php echo($data['contact_no']); ?><br>
    Driver Food Charge : <?php echo($rowdata['driver_f_charge']); ?><br>
    Other Charge : <?php echo($rowdata['other_charge']); ?><br>
   Description : <?php echo($rowdata['description']); ?><br>
   Fuel Rate :<?php echo($rowdata['fuel_rate']); ?>



  </td>
  
    <td rowspan="4" colspan="3" style="padding-left: 10PX;">Name   :<br><br>
      Designation    :<br><br> Department    :<br><br>
      Employed ID    :<br><br><h4 style="float: right;padding-right: 10px;">Signature</h4><br><br>
      <p width="100">Please Close the Time and KM or correct Billing</p>
    </td>
  </tr>
  <tr>
    <td colspan="6" style="padding-left: 10px;" >Executive Name: <?php echo($rowdata['report_at']); ?></td>
  </tr>
  <tr>
    <td colspan="6" height="20"><p style="float: left; padding-left: 10px">Advance Office: <?php echo($rowdata['advance_paid_client']); ?></p><p style="float: right; padding-right: 200px;">User:</p></td>
    
  </tr>
  <tr>
    <td colspan="6" style="padding-left: 10px;"><h3 width="100" text-length="100">
      TAKE OUR TRIP 
    </h3>
      <h6>24HOURS HELPLINE :(06752)220200, +91 9040082000
</h6>
    </td>
    
  </tr>
  <?php } ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$( document ).ready(function() {
 //window.print();
 //window.close();
});
</script>
</body>
</html>
<?php }} else {header('Location : dashboard.php');}  ?>