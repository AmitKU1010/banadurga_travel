<?php
include('includes/config.php');
$serial_no =  $_POST['serial_no'];
// echo('$serial_no');
$result = mysqli_query($conn,"SELECT * FROM duty_slip_corporate WHERE dutyslip_slno='$serial_no'");   
while($row = mysqli_fetch_assoc($result))
    $test[] = $row; 
print json_encode($test);
?>