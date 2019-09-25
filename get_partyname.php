<?php 
  include('includes/config.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name']))
  {
    if($_POST['name']=="get_partyname"){
    echo('<option value="">select</option>');
    $sql = mysqli_query($conn,"SELECT * FROM `coustomer` WHERE 1");
    while($rowdata = mysqli_fetch_assoc($sql)){
      echo('<option value="'.$rowdata['cos_name'].'">'.$rowdata['cos_name'].'</option>');
    }
  }
  }


//   if($_SERVER['REQUEST_METHOD'] == 'POST')
//   {
//     if($_POST['six'] == "stop")
//       {
//        echo $postid = intval($_POST['mi']);

//       $sql = "SELECT * FROM coustomer WHERE vehicle_id = $postid";

//       $run=mysqli_query($conn,$sql);
//       if($run==true)
//       {
//         echo $rowdata['cos_name'];
//       }


// }
      
//      }

  ?>