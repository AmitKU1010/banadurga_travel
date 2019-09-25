<?php  if(!empty($_GET['printid'])) {
include("includes/config.php");
error_reporting(0);
$printid = $_GET['printid'];

$sql_r="SELECT * FROM corporate_coustomer_payment_slip WHERE id='$printid'";
$run=mysqli_query($conn,$sql_r);
while ($result1=mysqli_fetch_assoc($run)) 
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="1220"  border="1" align="center">
  <tr>
    <td colspan="6" align="center"><h3>CORPORATE PAYMENT SLIP(COUSTOMER)</h3> </td>
  </tr>
  <tr>
    <td height="69" colspan="6" align="center"><b><span><h3>BANADURGA TRAVELS</h3></span></b>
<b>(we make your travel fun,safe,economical,informative,comfortale & memorable)</b><br>

  <b>Plot No 362/3850,Block-C,Gronud Floor,Infront of  BMC,Goutam Nagar,Bhubaneswar-751014</b><br>
   <b>Mobile:9437067889</b><br>
   <b>E-MAIL :jpbanadurga@gmail.com , banadurgatravels@gmail.com</b>
</td>
  </tr>
  <tr>
    <td width="140" height="31">Duty Slip No : </td>
    <td width="311"> <?php echo $result1['duty_slip_no']; ?> </td>
    <td width="121">Duty Date </td>
    <td colspan="3"><?php echo $result1['duty_date']; ?></td>
  </tr>
  <?php
  $sql="SELECT corporate_coustomer_payment_slip.id,duty_slip_corporate.report_at,duty_slip_corporate.booked_by from duty_slip_corporate INNER JOIN corporate_coustomer_payment_slip ON duty_slip_corporate.dutyslip_slno=corporate_coustomer_payment_slip.duty_slip_no WHERE corporate_coustomer_payment_slip.id='$printid'";
  $run=mysqli_query($conn,$sql);
  $data=mysqli_fetch_assoc($run);
   ?>
  <tr>
    <td height="33">Journey To</td>
    <td colspan="1"><?php echo $result1['journey_to']; ?></td>
    <td colspan="2">Booked By :<?php echo $data['booked_by']; ?></td>
    <td colspan="2">Booked For :<?php echo $data['report_at']; ?></td>


  </tr>
  <tr>
    <td height="30">Vehicle No </td>
    <td colspan="5"><?php echo $result1['vehicle_no']; ?></td>
  </tr>
  <tr>
    <td height="33">Starting K.M </td>
    <td><?php echo $result1['starting_km']; ?></td>
    <td>Closing K.M </td>
    <td width="219"><?php echo $result1['closing_km']; ?></td>
    <td width="182">Total K.M </td>
    <td width="207"><?php echo $result1['total_km']; ?></td>
  </tr>
  <tr>
    <td height="34">Starting Time </td>
    <td><?php echo $result1['starting_time']; ?></td>
    <td>Closing Time </td>
    <td><?php echo $result1['closing_time']; ?> </td>
    <td>Total Time </td>
    <td><?php echo $result1['total_time']; ?></td>
  </tr>
  <tr>
    <td height="32">Detention Hour </td>
    <td><?php echo $result1['detaintion_hour']; ?> </td>
    <td>Detention Charges </td>
    <td colspan="3"><?php echo $result1['detaintion_charges']; ?></td>
  </tr>
  <tr>
    <td height="32">Extra Hour </td>
    <td><?php echo $result1['extra_hour']; ?></td>
    <td>Night Halt </td>
    <td colspan="3"><?php echo $result1['night_halt']; ?></td>
  </tr>
  <tr>
    <td height="32">Toll Gate </td>
    <td><?php echo $result1['tool_gate']; ?></td>
    <td>Parking</td>
    <td colspan="3"><?php echo $result1['parking']; ?></td>
  </tr>
  <tr>
    <td height="32">Total Rate(Distance Cover In 1 Litre)</td>
    <td><?php echo $result1['day_basic']; ?></td>
    <td>Driver Food charge </td>
    <td colspan="3"><?php echo $result1['driver_f_charge']; ?></td>
  </tr>
  <tr>
    <td height="32">Other Charge</td>
    <td><?php echo $result1['other_charge']; ?></td>
    <td>Description</td>
    <td colspan="3"><?php echo $result1['description']; ?></td>
  </tr>
  <tr>
    <td height="32">Day Charges </td>
    <td colspan="5"><?php echo $result1['day_charge']; ?></td>
  </tr>
  <?php 
  $chargingtype=$result1['charging_type'];
  if($chargingtype=='fixed')
  {
  ?>
  <tr>
    <tr>
    <td height="32">Fixed price(fixed)</td>
    <td colspan="5"><?php echo $result1['fixed_price_f']; ?></td>
  </tr>
  <tr>
    <td height="33">Extra Hour(fixed)</td>
    <td><?php echo $result1['extra_hour_new_f']; ?></td>
    <td>Extra Hour Price</td>
    <td width="219"><?php echo $result1['extra_hour_price_f']; ?></td>
    <td width="182">Total Extra Hour Price</td>
    <td width="207"><?php echo $result1['t_e_h_p_f']; ?></td>
  </tr>
   <tr>
    <td height="33">Extra K.M(fixed)</td>
    <td><?php echo $result1['extra_km_f']; ?></td>
    <td>Extra K.M Price</td>
    <td width="219"><?php echo $result1['extra_km_price_f']; ?></td>
    <td width="182">Total Extra K.M Price</td>
    <td width="207"><?php echo $result1['t_extra_km_price_f']; ?></td>
  </tr>
 <?php } ?>
  <!-- <tr>
    <tr>
    <td height="32">Extra Hour(fixed)</td>
    <td colspan="5"><?php echo $result1['extra_hour_new_f']; ?></td>
  </tr>
   <tr>
    <tr>
    <td height="32">Extra Hour price(fixed)</td>
    <td colspan="5"><?php echo $result1['extra_hour_new_f']; ?></td>
  </tr>
  <tr> -->
    <td height="33">Adv. From Office </td>
    <td colspan="5"><?php echo $result1['advance_office']; ?></td>
  </tr>
  <tr>
    <td height="30">Adv. From Guest </td>
    <td colspan="5"><?php echo $result1['advance_guest']; ?></td>
  </tr>
  <tr>
    <td height="27">Total amount</td>
    <td colspan="5"><?php echo $result1['amount']; ?></td>
  </tr>
  <tr>
    <td height="27">Payble Amount</td>
    <td colspan="5"><?php echo $result1['total_amount']; ?></td>
  </tr>
   <tr>
     <td height="27">Pay Amount</td>
    <td colspan="5"><?php echo  $result1['py_amount']; ?></td>
  </tr>
   <tr>
     <td height="27">Due Amount</td>
    <td colspan="5"><?php echo  $result1['du_amount']; ?></td>
  </tr>
    <tr>
    <td colspan="6"><p>&nbsp;</p>
    <p>&nbsp; </p>
    <p align="center"><b>THANK YOU</b><br><b>Visit Again</b> </p>
</table>
</body>
</html>
<?php } } else {header('Location : dashboard.php');}  ?>