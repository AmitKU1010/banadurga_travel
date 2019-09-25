<?php
include('includes/config.php');
  $party_name=$_POST['party_name'];
 $charging_type1= $_POST['charging_type'];

$result = mysqli_query($conn,"SELECT * FROM ownercarcharges WHERE cos_name='$party_name' AND charging_type='$charging_type1'");   
while($row = mysqli_fetch_assoc($result))
    $test[] = $row;
print json_encode($test);

?>