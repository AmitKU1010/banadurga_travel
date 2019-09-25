<?php
  include('includes/config.php');
if(isset($_POST['submit']))
{

 $count = count($_POST['dutyslip_slno']);
 for($i=0;$i<$count;$i++)
          {

$bill_no = $_POST['bill_no'][$i];

$dutyslip_slno = $_POST['dutyslip_slno'][$i];

$party_name = $_POST['party_name'][$i];
$place_from = $_POST['place_from'][$i];
$report_at = $_POST['report_at'][$i];


$vehicle_name = $_POST['vehicle_name'][$i];

$vehicle_id = $_POST['vehicle_id'][$i];

$vehicle_no = $_POST['vehicle_no'][$i];

$starting_date = $_POST['starting_date'][$i];

$starting_km = $_POST['starting_km'][$i];

$starting_time = $_POST['starting_time'][$i];

$closing_date = $_POST['closing_date'][$i];

$closing_km = $_POST['closing_km'][$i];

$closing_time = $_POST['closing_time'][$i];

$charging_type = $_POST['charging_type'][$i];

$total_km = $_POST['total_km'][$i];

$total_time = $_POST['total_time'][$i];

$nh_charges = $_POST['nh_charges'][$i];

$no_of_nh = $_POST['no_of_nh'][$i];

$total_price_of_nh = $_POST['total_price_of_nh'][$i];



$detaintion_charges = $_POST['detaintion_charges'][$i];

$detaintion_hour = $_POST['detaintion_hour'][$i];

$total_price_of_detaintion = $_POST['total_price_of_detaintion'][$i];



$price_per_km = $_POST['price_per_km'][$i];

$total_ppk = $_POST['total_ppk'][$i];

$day_charge_td = $_POST['day_charge_td'][$i];


$km_cover_in_one_litre_td = $_POST['km_cover_in_one_litre_td'][$i];

$fuel_rate_td = $_POST['fuel_rate_td'][$i];

$total_price_of_km_cover_in_one_lit_td = $_POST['total_price_of_km_cover_in_one_lit_td'][$i];



$extra_parking_toll = $_POST['extra_parking_toll'][$i];

$total_amount = $_POST['total_amount'][$i];

$advance = $_POST['advance'][$i];

$grand_total = $_POST['grand_total'][$i];




$sql="INSERT INTO `update_dutyslip_mst` (`bill_no`,`dutyslip_slno`,`party_name`,`place_from`,`report_at`,`vehicle_name`, `vehicle_id`, `vehicle_no`, `starting_date`, `starting_km`, `starting_time`, `closing_date`, `closing_km`, `closing_time`, `charging_type`, `total_km`, `total_time`, `nh_charges`, `no_of_nh`, `total_price_of_nh`, `detaintion_charges`, `detaintion_hour`, `total_price_of_detaintion`, `price_per_km`, `total_ppk`, `day_charge_td`, `km_cover_in_one_litre_td`, `fuel_rate_td`, `total_price_of_km_cover_in_one_lit_td`, `extra_parking_toll`, `total_amount`, `advance`, `grand_total`)

 VALUES ('$bill_no','$dutyslip_slno','$party_name','$place_from','$report_at','$vehicle_name', '$vehicle_id', '$vehicle_no', '$starting_date', '$starting_km', '$starting_time', '$closing_date', '$closing_km', '$closing_time', '$charging_type', '$total_km', '$total_time', '$nh_charges', '$no_of_nh', '$total_price_of_nh', '$detaintion_charges', '$detaintion_hour', '$total_price_of_detaintion', '$price_per_km', '$total_ppk', '$day_charge_td', '$km_cover_in_one_litre_td', '$fuel_rate_td', '$total_price_of_km_cover_in_one_lit_td', '$extra_parking_toll', '$total_amount', '$advance', '$grand_total')";
 $run=mysqli_query($conn,$sql);

      }
      // exit();
 if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
window.location ='update_dutyslip_corporet.php';
    </script>
    <?php
  }
}
  ?>
