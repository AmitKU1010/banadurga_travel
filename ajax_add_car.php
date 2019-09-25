<?php 

  include('includes/config.php');
  error_reporting(0);

  if(isset($_POST['submit_car']))
  {
    $vehicle_name=$_POST['vehicle_name'];


$duplicate="SELECT * FROM car WHERE vehicle_name='$vehicle_name'";
$run_duplicate=mysqli_query($conn,$duplicate);
$checkrows=mysqli_num_rows($run_duplicate);

if($checkrows>0)
{
  ?>
  
   <script>

    alert('Car Already Exist');
window.location ='add_car_details.php';
    </script>
    <?php
}
else
{

    $sqlthree="INSERT INTO `car`(`vehicle_name`) 
    VALUES ('$vehicle_name')";



     $run=mysqli_query($conn,$sqlthree);

     if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
window.location ='add_car_details.php';
    </script>
    <?php
  }
}
}
  ?>