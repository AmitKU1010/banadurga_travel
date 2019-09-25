<?php 
  include('includes/config.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if($_POST['action'] == "type")
      {
        $postid = intval($_POST['q']);

      $sql = "SELECT * FROM vehicle_details WHERE vehicle_id = $postid";

      $result = $conn->query($sql);

      echo('<option value="">select</option>');

        while($row = $result->fetch_assoc()) 
        {
            echo "<option value='".$row['vehicle_no']."'>".$row['vehicle_no']."</option>";
        }
       }
     }

  ?>