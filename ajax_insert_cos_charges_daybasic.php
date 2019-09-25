<?php 

include('includes/config.php');

echo $cos_id=$_POST['cos_id'];

echo $cos_name=$_POST['cos_name']; 

echo $daybasic=$_POST['daybasic']; 

echo $day_charge=$_POST['day_charge']; 


echo $night_holt_charge=$_POST['night_holt_charge']; 


echo $km_cover_in_one_litre=$_POST['km_cover_in_one_litre']; 

echo $extra_hour_charges=$_POST['extra_hour_charges']; 


echo $extra_km_charges=$_POST['extra_km_charges']; 

 $duplicate="SELECT * FROM customercarcharges WHERE charging_type='$daybasic' AND cos_name='$cos_name'";
    $run_duplicate=mysqli_query($conn,$duplicate);
    $checkrows=mysqli_num_rows($run_duplicate);

    if($checkrows>0)
{
  ?>
  
   <script>

    alert('Car Charges Already Exist');
window.location ='add_carcharges_walkin.php';
    </script>
    <?php
}
else
{
$sql="INSERT INTO customercarcharges(`cos_id`, `cos_name`, `charging_type`, `day_charge`, `night_holt_charge`, `km_cover_in_one_litre`, `fixed_price`, `extra_hour_charges`, `extra_km_charges`, `price_per_km`, `detaintion_charges`) 

VALUES('$cos_id','$cos_name','$daybasic','$day_charge','$night_holt_charge','$km_cover_in_one_litre','','$extra_hour_charges','$extra_km_charges','','')";

$run=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($run);
}

// if($rows=="true")
// {
// 	echo "success";
// }


?>