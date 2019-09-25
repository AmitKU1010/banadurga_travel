<?php
  include('includes/config.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    // insert to the database
    if(isset($_POST['submit']))
    {
        $activity = $_POST['activity'];
        $dist = $_POST['dist'];
        $ulb = $_POST['ulb'];
        $quantity = $_POST['quantity'];
      

        $sql1 ="INSERT INTO assign_activity (dist_id, ulb_id, activity, quantity, assign_date) VALUES ('$dist', '$ulb', '$activity', '$quantity', now())";
        
        if ($conn->query($sql1) === TRUE) {
           echo "<script>alert('Record Added successfully')</script>";

          echo "<script>window.location='assign_activities.php'</script>";
        } else {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
    }
    // Update to the database
    if(isset($_POST['update']))
    {
        $emp_name = $_POST['emp_name'];
        $dist = $_POST['dist'];
        $ulb = $_POST['ulb'];
        $cluster = $_POST['cluster'];
      

        $sql = "UPDATE assign_activities SET emp_name='$emp_name', dist_id='$dist', ulb_id='$ulb', cluster_id='$cluster' WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record Updated successfully')</script>";

          echo "<script>window.location='assign_activities.php'</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    // delete to the database
    if(isset($_POST['delete']))
    {
        $id = $_POST['id'];

        $sql = "DELETE FROM assign_activities WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {

            echo "<script>alert('Record Delete successfully')</script>";

            echo "<script>window.location='assign_activities.php'</script>";

        } else {

            echo "Error updating record: " . $conn->error;
            
        }
    }
  }
  


?>

