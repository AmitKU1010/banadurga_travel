<?php
  include('includes/config.php');
if(isset($_POST['submit']))
{
$dutyslip_slno = $_POST['dutyslip_slno'];
$duty_of = $_POST['duty_of'];
$report_at = $_POST['report_at'];
$booked_by = $_POST['booked_by'];
$vehicle_no = $_POST['vehicle_no'];
$option = explode("$", $_POST['vehicle_name']);
$vehicle_name = $option[2];
$vehicle_size = $option[1];
$vehicle_id = $option[0];
$driver_name = $_POST['driver_name'];
$hotel_name = $_POST['hotel_name'];
$place_from = $_POST['place_from'];
$place_to = $_POST['place_to'];
$start_date = $_POST['start_date'];
$starting_km = $_POST['starting_km'];
$start_time = $_POST['start_time'];
$closing_km = $_POST['closing_km'];
$closing_time = $_POST['closing_time'];
$closing_date = $_POST['closing_date'];
$total_km = $_POST['total_km'];
$total_time = $_POST['total_time'];
$charging_type = $_POST['charging_type'];
$ac_nonac = $_POST['ac_nonac'];
$fuel_rate = $_POST['fuel_rate'];


$toll_gate = $_POST['toll_gate'];
$parking_charge = $_POST['parking_charge'];
$driver_f_charge = $_POST['driver_f_charge'];
$other_charge = $_POST['other_charge'];
$description = $_POST['description'];
$advance_paid_client = $_POST['advance_paid_client'];
$advance_paid_travel = $_POST['advance_paid_travel'];
$vehicle_returns = $_POST['vehicle_returns'];


$sql="INSERT INTO `duty_slip_hotel`(`dutyslip_slno`, `duty_of`, `report_at`, `booked_by`, `vehicle_no`, `vehicle_id`, `vehicle_name`, `vehicle_size`, `driver_name`,`hotel_name`,`place_from`, `place_to`, `start_date`, `starting_km`, `start_time`, `closing_km`, `closing_time`, `closing_date`, `total_km`, `total_time`, `charging_type`, `ac_nonac`, `fuel_rate`, `toll_gate`, `parking_charge`, `driver_f_charge`, `other_charge`, `description`, `advance_paid_client`, `advance_paid_travel`, `vehicle_returns`)

 VALUES ('$dutyslip_slno','$duty_of','$report_at','$booked_by','$vehicle_no','$vehicle_id','$vehicle_name','$vehicle_size','$driver_name','$hotel_name','$place_from','$place_to','$start_date','$starting_km','$start_time','$closing_km','$closing_time','$closing_date','$total_km','$total_time','$charging_type','$ac_nonac','$fuel_rate','$toll_gate','$parking_charge','$driver_f_charge','$other_charge','$description','$advance_paid_client','$advance_paid_travel','$vehicle_returns')";
 $run=mysqli_query($conn,$sql);
 if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
window.location ='add_dutyslip_hotel.php';
    </script>
    <?php
  }
}
  ?>
?>