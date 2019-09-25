<?php
include('includes/config.php');
  $vehicle_id1=$_POST['vehicle_id'];
 $charging_type1= $_POST['charging_type'];

$result = mysqli_query($conn,"SELECT * FROM hotelcarcharges WHERE vehicle_id='$vehicle_id1' AND charging_type='$charging_type1'");   
while($row = mysqli_fetch_assoc($result))
    $test[] = $row;
print json_encode($test);

?>