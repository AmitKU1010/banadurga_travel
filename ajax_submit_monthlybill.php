<?php
  include('includes/config.php');
// error_reporting(0);
if(isset($_POST['submit']))
{
$client = $_POST['client'];
$vehicle_name = $_POST['vehicle_name'];
$vehicle_no = $_POST['vehicle_no'];
$bill_month = $_POST['bill_month'];
$monthly_fixed_rent = $_POST['monthly_fixed_rent'];
$total_km = $_POST['total_km'];
$km_cov_one_lit = $_POST['km_cov_one_lit'];
$total_lit_burn = $_POST['total_lit_burn'];
$fuel_rate = $_POST['fuel_rate'];
$total_fuel_rate = $_POST['total_fuel_rate'];
$total_km_mobil = $_POST['total_km_mobil'];
$km_cov_one_lit_mobil = $_POST['km_cov_one_lit_mobil'];
$total_lit_burn_mobil = $_POST['total_lit_burn_mobil'];
$fuel_rate_mobil = $_POST['fuel_rate_mobil'];
$total_fuel_rate_mobil = $_POST['total_fuel_rate_mobil'];
$extra_km = $_POST['extra_km'];
$extra_km_price = $_POST['extra_km_price'];
$total_extra_km_price = $_POST['total_extra_km_price'];
$extra_hour = $_POST['extra_hour'];
$extra_hour_price = $_POST['extra_hour_price'];
$total_extra_hour_price = $_POST['total_extra_hour_price'];
$service_tax = $_POST['service_tax'];
$toll_fee = $_POST['toll_fee'];
$parking_fee = $_POST['parking_fee'];
$net_amount = $_POST['net_amount'];
$bill_date = $_POST['bill_date'];
$bill_no = $_POST['bill_no'];
$bill_type = $_POST['bill_type'];


  $sql="INSERT INTO `monthly_bill`( `client`, `vehicle_name`, `vehicle_no`, `bill_month`, `monthly_fixed_rent`, `total_km`, `km_cov_one_lit`, `total_lit_burn`, `fuel_rate`, `total_fuel_rate`, `total_km_mobil`, `km_cov_one_lit_mobil`, `total_lit_burn_mobil`, `fuel_rate_mobil`, `total_fuel_rate_mobil`, `extra_km`, `extra_km_price`, `total_extra_km_price`, `extra_hour`, `extra_hour_price`, `total_extra_hour_price`, `service_tax`, `toll_fee`, `parking_fee`, `net_amount`, `bill_date`, `bill_no`, `bill_type`) 
  VALUES('$client',
  '$vehicle_name',
  '$vehicle_no',
  '$bill_month',
  '$monthly_fixed_rent',
  '$total_km',
  '$km_cov_one_lit',
  '$total_lit_burn',
  '$fuel_rate',
  '$total_fuel_rate',
  '$total_km_mobil',
  '$km_cov_one_lit_mobil',
  '$total_lit_burn_mobil',
  '$fuel_rate_mobil',
  '$total_fuel_rate_mobil',
  '$extra_km',
  '$extra_km_price',
  '$total_extra_km_price',
  '$extra_hour',
  '$extra_hour_price',
  '$total_extra_hour_price',
  '$service_tax',
  '$toll_fee',
  '$parking_fee',
  '$net_amount',
  '$bill_date',
  '$bill_no',
  '$bill_type')";
     $run=mysqli_query($conn,$sql);
      if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
window.location ='monthly_bill.php';
    </script>
    <?php
  }
}
?>
