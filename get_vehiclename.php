<?php 
  include('includes/config.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name']))
  {
    if($_POST['name']=="vn"){
    echo('<option value="">select</option>');
    $sql = mysqli_query($conn,"SELECT * FROM `car` WHERE 1");
    while($rowdata = mysqli_fetch_assoc($sql)){
      echo('<option value="'.$rowdata['id'].'">'.$rowdata['vehicle_name'].'</option>');
    }
  }
  }

  ?>