<?php 
  include('includes/config.php');


  if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name']))
  {
    if($_POST['name']=="get_dist"){
    echo('<option value="">select</option>');
    $sql = mysqli_query($conn,"SELECT * FROM `product` WHERE 1");
    while($rowdata = mysqli_fetch_assoc($sql)){
      echo('<option value="'.$rowdata['id'].'">'.$rowdata['product_name'].'</option>');
    }
  }
  }

if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if($_POST['action'] == "type")
      {
        $postid = intval($_POST['q']);

      $sql = "SELECT * FROM product_type WHERE product_id = $postid";

      $result = $conn->query($sql);

      echo('<option value="">select</option>');

        while($row = $result->fetch_assoc()) 
        {
            echo "<option value='".$row['id']."'>".$row['product_type']."</option>";
        }
       }

       if($_POST['action'] == "unit")
      {
        $postid = intval($_POST['q']);

      $sql = "SELECT * FROM product_type WHERE id = $postid";

      $result = $conn->query($sql);

      $row = $result->fetch_assoc();

      echo($row['unit']);

        
       }

    



  } ?>
      

