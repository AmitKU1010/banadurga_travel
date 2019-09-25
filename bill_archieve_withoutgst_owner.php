<?php  if(!empty($_GET['printid'])) {
include("includes/config.php");
error_reporting(0);
$printid = $_GET['printid'];
$sql_r="SELECT * FROM owner_payment_slip_new WHERE id='$printid'";
$run=mysqli_query($conn,$sql_r);
while ($result1=mysqli_fetch_assoc($run)) 
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>GST Bill</title>

<style>
table {
 border-collapse: collapse;
}

table, td, th {
 border: 1px solid black;

}
span{
 text-transform: uppercase;
}
p{
 margin-top: 2px;
 margin-bottom: 2px;
}
body{
 margin-left: 40px;
 margin-right: 40px;
}
hr{
 margin-top: 2px;
 margin-bottom: 2px;
}
@media print {
html,body{height:100%;width:100%;margin:0;padding:0;}
 @page {
 size: 21cm 29.7cm;
 max-height:100%;
 max-width:100%
 font-size: 8pt;
 overflow: hidden;
 }
}
 #printbtn{
 visibility: : none !important;
 }
 p.address{
  text-align:center;
  font-size:13px;
 }
 .invoice-top
 {
      font-size: 36px;
    padding-top: 20px;
    width: 600px;
    margin: 0 auto;
 }
 .invoice-top img{
     border-radius: 50%;
 }
</style>
</head>

<body>
<table width="100%" >
  <tr>
  <td height="31" colspan="7">
  
    <div class="invoice-top" align="center" style="font-size:36px; padding-top:20px;">
        <!-- <img src="Saibaba.jpg" height="50px" width="50px" align="left"> -->
        TAKE OUR TRIP 
<br/>
      <p class="address">Duttatota,puri-752001(Odisha)<br>
www.takeourtrip.com, reservation@takeourtrip.com <br>
MOB-(06752)220200, +91 9040082000
      </p> 
      </div>  </td>
  </tr>
  <?php
  $sql="SELECT owner_payment_slip_new.id,duty_slip.report_at,duty_slip.duty_of,duty_slip.booked_by from duty_slip INNER JOIN owner_payment_slip_new ON duty_slip.dutyslip_slno=owner_payment_slip_new.duty_slip_no WHERE owner_payment_slip_new.id='$printid'";
  $run=mysqli_query($conn,$sql);
  $data=mysqli_fetch_assoc($run);
  ?>
  <tr>
    <td colspan="6" rowspan="2" align="center">Booked by: <?php echo $data['booked_by'];?><br>
     Booked For : <?php echo $data['report_at']; ?><br>
     Duty Of : <?php echo $data['duty_of']; ?>
  </br><?php if(!$result1['customer_gst']==''){?>GST No : <?php echo $result1['customer_gst'];}?></td>
    <td width="12%">Bill No : <?php echo $result1['duty_slip_no']; ?></td>
  </tr>
  <tr>
    <td>Date - <?php echo $result1['duty_date']; ?> </td>
  </tr>
  <tr>
    <td colspan="6" rowspan="2"><strong>Description:</strong> <?php echo $result1['description']; ?></td>
    <td align="right">Amount</td>
  </tr>
  <tr>
    <td align="right">Rs.</td>
  </tr>
  <tr>
    <td width="20%">Type of Vehicle </td>
    <td width="14%"><?php echo $result1['vehicle_name']; ?></td>
    <td width="14%">Vehicle No </td>
    <td colspan="3"><?php echo $result1['vehicle_no']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Date of Journey </td>
    <td><?php echo $result1['duty_date']; ?></td>
    <td>Duty Slip No </td>
    <td colspan="3"><?php echo $result1['duty_slip_no']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Starting Point </td>
    <td><?php echo $result1['place_from']; ?></td>
    <td>Destination Point </td>
    <td colspan="3"><?php echo $result1['journey_to']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Starting K.M. </td>
    <td><?php echo $result1['starting_km']; ?></td>
    <td>Closing K.M. </td>
    <td width="12%"><?php echo $result1['closing_km']; ?></td>
    <td width="12%">Total K.M. </td>
    <td width="16%"><?php echo $result1['total_km']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Starting Time </td>
    <td><?php echo $result1['starting_time']; ?></td>
    <td>Closing Time </td>
    <td><?php echo $result1['closing_time']; ?> </td>
    <td>Total</td>
    <td><?php echo $result1['total_time']; ?> Hours Engaged </td>
    <td>&nbsp;</td>
  </tr>
 
  <?php 
  $chargetype = $result1['charging_type'];
  
  // long charge
  if($chargetype =='long')
  {
  ?>
  <tr>
    <td colspan="6">Long Trip</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Total Distance Cover </td>
    <td><?php echo $result1['total_km']; ?></td>
    <td>Per K.M. </td>
    <td><?php echo $result1['priceper_km'];?></td>
    <td colspan="2"><?php echo $result1['amount'];?></td>
    <td><div align="right"><?php echo $result1['amount'];?></div></td>
  </tr>
  <!-- <tr>
    <td>Detention Hour </td>
    <td><?php echo $result1['detaintion_hour'];?></td>
    <td>Hours</td>
    <?php
    $detaionhr = $result1['detaintion_hour'];
    $detaiontotalcharges = $result1['detaintion_charges'];
    $perhr = $detaiontotalcharges / $detaionhr;
    ?>
    <td>Per Hour: <?php echo $perhr;?>/-</td>
    <td colspan="2"><?php echo $result1['detaintion_charges'];?></td>
    <td><div align="right"><?php echo $result1['detaintion_charges'];?></div></td>
  </tr> -->
  <tr>
    <td colspan="6">Night Halt Charges </td>
    <td><div align="right"><?php echo $result1['night_halt'];?></div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="right">Total</div></td>
    <td><div align="right"><?php echo 
    $Total_extra= $result1['amount']+$result1['detaintion_charges']+$result1['night_halt'];   ?></div></td>
  </tr>
  
  <tr>
    <td colspan="6"><div align="right">Sub Total </div></td>
  <?php
  // $subtotal = (($result1['amount']*5)/100)+$result1['amount'];
  $subtotal=$Total_extra;
    ?>
    <td><div align="right"><?php echo $subtotal;?></div></td>
  </tr>
  <tr>
    <td colspan="6">Toll Gate </td>
    <td><div align="right"><?php echo $result1['tool_gate'];?></div></td>
  </tr>
  <tr>
    <td colspan="6">Parking</td>
    <td><div align="right"><?php echo $result1['parking'];?></div></td>
  </tr>
   <tr>
    <td colspan="6">Driver Food Charge</td>
    <td><div align="right"><?php echo $result1['driver_f_charge'];?></div></td>
  </tr> <tr>
    <td colspan="6">Other Charge</td>
    <td><div align="right"><?php echo $result1['other_charge'];?></div></td>
  </tr>
   
  <tr>
    <td colspan="6"><div align="right">Grand Total </div></td>
  <?php
  $grandtotal = $subtotal+$result1['tool_gate']+$result1['parking']+$result1['driver_f_charge']+$result1['other_charge'];
    ?>
    <td><div align="right"><?php echo $grandtotal;?></div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="right">Advance Paid (-) </div></td>
    <td><div align="right"><?php echo $result1['advance_guest'];?></div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="right">Final Amount Due</div></td>
  <?php
  $finalamount =$grandtotal-$result1['advance_guest'];
    ?>
    <td><div align="right"><?php echo $finalamount;?></div></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    <td colspan="2"></td>
  </tr>
  <?php } 
  // local charge
  elseif($chargetype == 'local') 
  {
  ?>
  <tr>
    <td colspan="6">Local Trip</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Total Distance Cover :<?php echo $result1['total_km']; ?></td>
    <td>Fuel per Liter :<?php echo $result1['kmforlitre'];?>km</td>
    <td>Fuel Rate :<?php echo $result1['fuel_rate']; ?></td>
    <td><strong>Total Rate(Distance Cover In 1 Litre) : </strong><?php echo $result1['day_basic'];?> </td>
  <td>Day Charge :<?php echo $result1['day_charge'];?></td>
  <!-- <?php
  $totalkmrate = $result1['total_km'] * $result1['kmforlitre'];
    ?>
 -->    <td><?php echo $total=$result1['day_charge']+$result1['day_basic']; ?>/-</td>
    <td></td>
  </tr>
  <!-- <tr>
    <td>Day Charge</td>
    <td><?php echo $result1['day_charge'];?></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr> -->
  <tr>
    <td colspan="6">Extra Hour</td>
    <td  align="right"><?php echo $result1['extra_hour'];?></td>
  </tr>
  <tr>
    <td colspan="6">Per Hour Charge</td>
    <td  align="right"><?php echo $result1['extrahour_price'];?></td>
  </tr>
   <tr>
    <td colspan="6">Night Halt</td>
    <td  align="right"><?php echo $result1['night_halt'];?></td>
  </tr>
  <tr>
    <td colspan="6"><div align="right">Total</div></td>
    <td><div align="right"><?php echo $Total_extra=$result1['day_charge']+$result1['day_basic']+$result1['extrahour_price']+$result1['night_halt']; ?></div></td>
  </tr>
  
    <td colspan="6"><div align="right">Sub Total </div></td>
  <?php
  $subtotal =$Total_extra;
    ?>
    <td><div align="right"><?php echo $subtotal;?></div></td>
  </tr>
  <tr>
    <td colspan="6">Toll Gate </td>
    <td><div align="right"><?php echo $result1['tool_gate'];?></div></td>
  </tr>
  <tr>
    <td colspan="6">Parking</td>
    <td><div align="right"><?php echo $result1['parking'];?></div></td>
  </tr>
   <tr>
    <td colspan="6">Driver Food Charge</td>
    <td><div align="right"><?php echo $result1['driver_f_charge'];?></div></td>
  </tr> <tr>
    <td colspan="6">Other Charge</td>
    <td><div align="right"><?php echo $result1['other_charge'];?></div></td>
  </tr>
   
  <tr>
    <td colspan="6"><div align="right">Grand Total </div></td>
  <?php
  $grandtotal = $subtotal+$result1['tool_gate']+$result1['parking']+$result1['driver_f_charge']+$result1['other_charge'];
    ?>
    <td><div align="right"><?php echo $grandtotal;?></div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="right">Advance Paid (-) </div></td>
    <td><div align="right"><?php echo $result1['advance_guest'];?></div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="right">Final Amount Due</div></td>
  <?php
  $finalamount =$grandtotal-$result1['advance_guest'];
    ?>
    <td><div align="right"><?php echo $finalamount;?></div></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    <td colspan="2"></td>
  </tr>
  <?php }
  else if ($chargetype=='fixed')
  {
  ?>
 <tr>
    <td colspan="1">Fixed Price :<?php echo $result1['fixed_price_f'];?></td>
    <td colspan="2">Extra Hour :<?php echo $result1['extra_hour_new_f']; ?></td>
    <td colspan="2">Extra Hour Price :<?php echo $result1['extra_hour_price_f']; ?></td>
    <td colspan="1">Total Extra Hour Price:<?php echo $result1['t_e_h_p_f']; ?></td>
   <!--  <td colspan="1">Extra K.M :<?php echo $result1['extra_km_f']; ?></td>
    <td colspan="1">Extra K.M Price :<?php echo $result1['extra_km_price_f']; ?></td>
    <td colspan="1">Total Extra K.M Price :<?php echo $result1['t_extra_km_price_f']; ?></td> -->
    <td colspan="1"></td>
  </tr>
<tr>
    
    <td colspan="1">Extra K.M :<?php echo $result1['extra_km_f']; ?></td>
    <td colspan="2">Extra K.M Price :<?php echo $result1['extra_km_price_f']; ?></td>
    <td colspan="2">Total Extra K.M Price :<?php echo $result1['t_extra_km_price_f']; ?></td>
    <td colspan="1"></td>

    <td colspan="1"></td>
  </tr>
  <tr>
    <td colspan="6"><div align="right">Total :</div></td>
     <?php
        $total_fix=$result1['fixed_price_f']+$result1['t_extra_km_price_f']+$result1['t_e_h_p_f'];
     ?>
    <td><div align="right"><?php echo $total_fix;?></div></td>
  </tr>
  <tr>


  <tr>
 
  
  <tr>
    <td colspan="6"><div align="right">Sub Total </div></td>
  <?php
  $subtotal =$total_fix;
    ?>
    <td><div align="right"><?php echo $subtotal;?></div></td>
  </tr>
  <tr>
    <td colspan="6">Toll Gate </td>
    <td><div align="right"><?php echo $result1['tool_gate'];?></div></td>
  </tr>
  <tr>
    <td colspan="6">Parking</td>
    <td><div align="right"><?php echo $result1['parking'];?></div></td>
  </tr>
   <tr>
    <td colspan="6">Driver Food Charge</td>
    <td><div align="right"><?php echo $result1['driver_f_charge'];?></div></td>
  </tr> <tr>
    <td colspan="6">Other Charge</td>
    <td><div align="right"><?php echo $result1['other_charge'];?></div></td>
  </tr>
   
  <tr>
    <td colspan="6"><div align="right">Grand Total </div></td>
  <?php
  $grandtotal =$subtotal+$result1['tool_gate']+$result1['parking']+$result1['driver_f_charge']+$result1['other_charge'];
    ?>
    <td><div align="right"><?php echo $grandtotal;?></div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="right">Advance Paid (-) </div></td>
    <td><div align="right"><?php echo $result1['advance_guest'];?></div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="right">Final Amount Due</div></td>
  <?php
  $finalamount =$grandtotal-$result1['advance_guest'];
    ?>
    <td><div align="right"><?php echo $finalamount;?></div></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    <td colspan="2"></td>
  </tr>
 
<?php } ?>
  
 <!--  <tr>
    <td colspan="3">GSTIN NO : 21AKGPM2672J1Z7 </td>
    <td colspan="4">PAN NO : AKGPM2672J </td>
  </tr> -->
  <!-- <tr border="0">
  <td>djhgkjh</td> 
  </tr> -->
  <td align="right" colspan="8" height="90">For TAKE OUR TRIP,PURI 
<br>
Thank You,Visit Again. 
</td>
</table>



</body>
</html>
<?php } } else {header('Location : dashboard.php');}  ?>
