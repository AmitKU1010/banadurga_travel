<?php 
  include('includes/config.php');
  error_reporting(0);
  echo $getid = $_GET['eid'];
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <?php 
  
  $sql="DELETE FROM `ownercarcharges` WHERE id=$getid";

$run=mysqli_query($conn,$sql);
if($run==true)
{
  echo "updated";
   header("location:add_carcharges_vendor.php");
}
?>
</body>
</html>
