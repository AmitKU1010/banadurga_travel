<?php 
  include('includes/config.php');
  error_reporting(0);
  echo $getid = $_GET['eid'];
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <?php 
  
  $sql="DELETE FROM customercarcharges WHERE id=$getid";

$run=mysqli_query($conn,$sql);

if($run==true)
  {
    ?>
    <script>
    alert('Data Deleted Succesfully');
window.location ='add_carcharges_walkin.php';
    </script>
    <?php
  }
?>
</body>
</html>
