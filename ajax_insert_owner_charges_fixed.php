<?php 

include('includes/config.php');

echo $cos_id=$_POST['cos_id'];

echo $cos_name=$_POST['cos_name']; 

echo $fixed=$_POST['fixed']; 

echo $fixed_price=$_POST['fixed_price']; 


    $duplicate="SELECT * FROM ownercarcharges WHERE charging_type='$fixed' AND cos_name='$cos_name'";
    $run_duplicate=mysqli_query($conn,$duplicate);
    $checkrows=mysqli_num_rows($run_duplicate);

    if($checkrows>0)
{
  ?>
  
   <script>

    alert('Car Charges Already Exist');
window.location ='add_carcharges_vendor.php';
    </script>
    <?php
}

else
{
$sql="INSERT INTO ownercarcharges(`cos_id`, `cos_name`, `charging_type`, `day_charge`, `night_holt_charge`, `km_cover_in_one_litre`, `fixed_price`, `extra_hour_charges`, `extra_km_charges`, `price_per_km`, `detaintion_charges`) 

VALUES('$cos_id','$cos_name','$fixed','','','','$fixed_price','','','','')";

$run=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($run);
}

// if($rows=="true")
// {
// 	echo "success";
// }


?>