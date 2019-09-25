<?php 
  include('includes/config.php');
  // error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<?php 
  if(isset($_POST['submit']))
  {
 $option = explode("$", $_POST['vehicle_name']);
 $vehicle_id = $option[0];
 $vehicle_name = $option[1];
 $charging_type=$_POST['charging_type'];
 $day_charge=$_POST['day_charge'];
 $night_holt_charge=$_POST['night_holt_charge'];
 $km_cover_in_one_litre=$_POST['km_cover_in_one_litre'];
 $fixed_price=$_POST['fixed_price'];
 $extra_hour_charges=$_POST['extra_hour_charges'];
 $extra_km_charges=$_POST['extra_km_charges'];
 $price_per_km=$_POST['price_per_km'];
 $detaintion_charges=$_POST['detaintion_charges'];

 $sql="INSERT INTO customercarcharges(vehicle_id,vehicle_name,charging_type,day_charge,night_holt_charge,km_cover_in_one_litre,fixed_price,extra_hour_charges,extra_km_charges,price_per_km,detaintion_charges) VALUES ('$vehicle_id','$vehicle_name','$charging_type','$day_charge','$night_holt_charge','$km_cover_in_one_litre','$fixed_price','$extra_hour_charges','$extra_km_charges','$price_per_km','$detaintion_charges')";
 $run=mysqli_query($conn,$sql);
   if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
window.location ='add_carcharges_walkin.php';
    </script>
    <?php
  }
}
  ?>

</body>
</html>