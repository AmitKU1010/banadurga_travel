<?php 
  include('includes/config.php');
  error_reporting(0);
   $getid = $_GET['eid'];
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <?php 
  
  $sql="DELETE FROM hotel WHERE id=$getid";

$run=mysqli_query($conn,$sql);
if($run==true)
  {
    ?>
    <script>
    alert('Data Deleted Succesfully');
window.location ='add_hotels.php';
    </script>
    <?php
  }
?>

</body>
</html>
