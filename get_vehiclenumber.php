<?php 
  include('includes/config.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['vehicle_number']))
  {
    if($_POST['vehicle_number']=="vn"){
    echo('<option value="">select</option>');
    $sql = mysqli_query($conn,"SELECT * FROM `vehicle_details` WHERE 1");
    while($rowdata = mysqli_fetch_assoc($sql)){
      echo('<option value="'.$rowdata['id'].'">'.$rowdata['vehicle_number'].'</option>');
    }
  }
  }

  ?>