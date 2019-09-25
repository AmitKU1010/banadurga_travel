<?php 
  include('includes/config.php');
  error_reporting(0);
 $getid = $_GET['eid'];
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <?php 
  
  $sql="DELETE FROM issue_dutyslip WHERE id=$getid";

$run=mysqli_query($conn,$sql);
if($run==true)
  {
    ?>
    <script>
    alert('Data Deleted Succesfully');
window.location ='add_dutyslip_tarini.php';
    </script>
    <?php
  }
?>

</body>
</html>
