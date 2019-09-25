<?php
  include('includes/config.php');

//$getid = $_GET['id'];

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    // insert to the database
    if(isset($_POST['submit']))
    {
        $dist = $_POST['dist'];
        $ulb = $_POST['ulb'];
        $location = $_POST['location'];
      

        $sql1 ="INSERT INTO location (location, ulb_id, dist_id , created_date) VALUES ('$location', '$ulb', '$dist', now())";
        
        if ($conn->query($sql1) === TRUE) {
           echo "<script>alert('Record Added successfully')</script>";

          echo "<script>window.location='location.php'</script>";
        } else {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
    }
    // Update to the database
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $ulb = $_POST['ulb'];
        $location = $_POST['location'];
      

        $sql = "UPDATE location SET location='$location', ulb_id='$ulb' WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record Updated  successfully')</script>";

          echo "<script>window.location='location.php'</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    // delete to the database
    if(isset($_POST['delete']))
    {
        $id = $_POST['id'];

        $sql = "DELETE FROM location WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {

            echo "<script>alert('Record Delete successfully')</script>";

            echo "<script>window.location='location.php'</script>";

        } else {

            echo "Error updating record: " . $conn->error;
            
        }
    }
  }
  


?>

