<?php
  include('includes/config.php');
if(isset($_POST['submit']))
{

 $count = count($_POST['dutyslip_slno']);
 for($i=0;$i<$count;$i++)
          {
            

            $dutyslip_slno = $_POST['dutyslip_slno'][$i];
            $party_name = $_POST['party_name'][$i];

           echo $vehicle_id= $_POST['vehicle_name'][$i];

          $sf="SELECT * FROM car WHERE id='$vehicle_id'";
            $run=mysqli_query($conn,$sf);
            $fet=mysqli_fetch_assoc($run);
           
          
             $nature_of_duty = $_POST['nature_of_duty'][$i];
             $address = $_POST['address'][$i];
            $vehicle_name=$fet['vehicle_name'];
            $vehicle_no = $_POST['vehicle_no'][$i];
            $booked_by = $_POST['booked_by'][$i];
            $driver_name = $_POST['driver_name'][$i];
            $driver_number = $_POST['driver_number'][$i];
            $startig_date = $_POST['startig_date'][$i];
            $starting_km = $_POST['starting_km'][$i];
            $starting_time = $_POST['starting_time'][$i];
            $place_from = $_POST['place_from'][$i];
            $advance_price = $_POST['advance_price'][$i];
            

   $duplicate="SELECT * FROM issue_dutyslip WHERE dutyslip_slno='$dutyslip_slno'";
    $run_duplicate=mysqli_query($conn,$duplicate);
    // var_dump($run_duplicate);
    $checkrows=mysqli_num_rows($run_duplicate);

    if($checkrows>0)
{
  ?>
  
   <script>

    alert('Duty Slip Already Exist');
window.location ='add_dutyslip_banadurga.php';
    </script>
    <?php
}
else
{
$sql="INSERT INTO `issue_dutyslip`(`dutyslip_slno`, `party_name`,`nature_of_duty`,`address`,`vehicle_id`,
`vehicle_name`,`vehicle_no`, `booked_by`, `driver_name`,`driver_number`, `date`, `starting_km`,`starting_time`,`place`,`advance_price`)

 VALUES ('$dutyslip_slno','$party_name','$nature_of_duty','$address','$vehicle_id','$vehicle_name','$vehicle_no','$booked_by','$driver_name','$driver_number','$startig_date','$starting_km','$starting_time','$place_from','$advance_price')";
   var_dump($sql);
 $run=mysqli_query($conn,$sql);
 // echo($sql);
 var_dump($run);

          }
 
 if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
    // exit();
window.location ='add_dutyslip_banadurga.php';
    </script>
    <?php
  }
}
}
?>