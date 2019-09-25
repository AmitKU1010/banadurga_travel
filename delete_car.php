<?php 
  include('includes/config.php');
  error_reporting(0);
  echo $getid = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <?php 
  
  $sql="DELETE FROM car WHERE id=$getid";

$run=mysqli_query($conn,$sql);
if($run==true)
  {
    ?>
    <script>
    alert('Data Deleted Succesfully');
window.location ='add_car_details.php';
    </script>
    <?php
  }
?>

</body>
</html>