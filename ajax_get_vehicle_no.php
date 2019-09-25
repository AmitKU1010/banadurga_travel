<?php 

include('includes/config.php');
$vehicle_id=$_POST['vehicle_id'];

$vehicle_id; 

$sql="SELECT * FROM vehicle_details WHERE vehicle_id='$vehicle_id'";
$run=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($run);
if($rows>0)
{
 while($data = mysqli_fetch_assoc($run))
        { 
          echo '<option value="'.$data['vehicle_no'].'" >'.$data['vehicle_no'].'</option>';
       }
     }
    
      else{
        echo '<option value="" >no vehicle No</option>';
       }

?>