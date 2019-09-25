<?php
  include('includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
$duty_slip_no = $_POST['duty_slip_no'];
$duty_date = $_POST['duty_date'];
$place_from = $_POST['journey_from'];
$journey_to = $_POST['journey_to'];
$booked_by = $_POST['booked_by'];
$customer_gst = $_POST['customer_gst'];
$vehicle_no = $_POST['vehicle_no'];
$starting_km = $_POST['starting_km'];
$closing_km = $_POST['closing_km'];
$total_km = $_POST['total_km'];
$vehicle_name = $_POST['vehicle_name'];
$starting_time = $_POST['starting_time'];
$closing_time = $_POST['closing_time'];
$total_time = $_POST['total_time'];
$charging_type = $_POST['charging_type'];
$fixed_price_f = $_POST['fixed_price'];
$extra_hour_new_f = $_POST['extra_hour_new'];
$extra_hour_price_f = $_POST['extra_hour_price'];
$t_e_h_p_f = $_POST['t_e_h_p'];
$extra_km_f = $_POST['extra_km'];
$extra_km_price_f = $_POST['extra_km_price'];
$t_extra_km_price_f = $_POST['t_extra_km_price'];
$extra_hour = $_POST['extra_hour'];
$night_halt = $_POST['night_halt'];
$tool_gate = $_POST['tool_gate'];
$parking = $_POST['parking'];
$driver_f_charge = $_POST['driver_f_charge'];
$other_charge = $_POST['other_charge'];
$description = $_POST['description'];
$kmforlitre = $_POST['kmforlitre'];
$day_basic = $_POST['day_basic'];
$fuel_rate = $_POST['fuel_rate'];
$priceper_km = $_POST['priceper_km'];
$amount = $_POST['amount'];
$day_charge = $_POST['day_charge'];
$advance_office = $_POST['advance_office'];
$advance_guest = $_POST['advance_guest'];
$total_adv = $_POST['total_adv'];
$total_amount = $_POST['total_amount'];
$py_amount = $_POST['py_amount'];
$du_amount = $_POST['du_amount'];
$detaintion_hour = $_POST['detaintion'];
$detaintion_charges = $_POST['detaintion_charges'];
$remark = $_POST['remark'];
$extrahour_price=$_POST['extra_hour_totalprice'];
$noofnight_halt = $_POST['noofnight_halt'];
  $sql="INSERT INTO `owner_payment_slip_new`( duty_slip_no,
    duty_date,
    place_from,
    journey_to,
    booked_by,
    customer_gst,
    vehicle_name,
    vehicle_no,
    starting_km,
    closing_km,
    total_km,
  starting_time,
  closing_time,
  total_time,
  charging_type,
  fixed_price_f,
  extra_hour_new_f,
  extra_hour_price_f,
  t_e_h_p_f,
  extra_km_f,
  extra_km_price_f,
  t_extra_km_price_f,
  extra_hour,
  extrahour_price,
  night_halt,
  tool_gate,
  parking,
  driver_f_charge,
  other_charge,
  description,
  kmforlitre,
  day_basic,
  fuel_rate,
  priceper_km,
  amount,
  day_charge,
  advance_office,
  advance_guest,
  total_adv,
  total_amount,
  py_amount,
  du_amount,
  detaintion_hour,
  detaintion_charges,
  remark,
  noofnight_halt) 
  VALUES('$duty_slip_no','$duty_date','$place_from','$journey_to','$booked_by','$customer_gst','$vehicle_name','$vehicle_no','$starting_km','$closing_km','$total_km','$starting_time','$closing_time','$total_time','$charging_type','$fixed_price_f',
  '$extra_hour_new_f',
  '$extra_hour_price_f',
  '$t_e_h_p_f',
  '$extra_km_f',
  '$extra_km_price_f',
  '$t_extra_km_price_f','$extra_hour','$extrahour_price','$night_halt','$tool_gate','$parking','$driver_f_charge','$other_charge','$description','$kmforlitre','$day_basic','$fuel_rate','$priceper_km','$amount','$day_charge','$advance_office','$advance_guest','$total_adv','$total_amount','$py_amount','$du_amount','$detaintion_hour','$detaintion_charges','$remark','$noofnight_halt')";
     $run=mysqli_query($conn,$sql);
      if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
window.location ='owner_payment_slip.php';
    </script>
    <?php
  }
}
?>
