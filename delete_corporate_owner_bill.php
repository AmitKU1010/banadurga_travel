<?php 
  include('includes/config.php');
  error_reporting(0);
   $getid = $_GET['printid'];
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <?php 
  
  $sql="DELETE FROM update_dutyslip_corporate_owner WHERE id=$getid";

$run=mysqli_query($conn,$sql);
if($run==true)
  {
    ?>
    <script>
    alert('Data Deleted Succesfully');
window.location ='update_dutyslip_corporate_owner.php';
    </script>
    <?php
  }
?>

</body>
</html>
