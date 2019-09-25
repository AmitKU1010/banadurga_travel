<?php
  include('includes/config.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    // insert to the database
    if(isset($_POST['submit']))
    {
        $emp_name = $_POST['emp_name'];
        $dist = $_POST['dist'];
        $ulb = $_POST['ulb'];
        $cluster = $_POST['cluster'];
        $pass = uniqid();
      

        $sql1 ="INSERT INTO assign_emp (emp_id, dist_id, ulb_id, cluster_id, pass, assign_date) VALUES ('$emp_name', '$dist', '$ulb', '$cluster', '$pass', now())";
        
        if ($conn->query($sql1) === TRUE) {

            $sql = "SELECT * FROM assign_emp JOIN employee ON employee.id = assign_emp.emp_id WHERE employee.id = '$emp_name'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $unam = $row['emp_id'];

            $sql2 ="INSERT INTO users (username, password, role_name) VALUES ('$unam', '$pass', 'Emp')";
            $conn->query($sql2);

           echo "<script>alert('Record Added successfully ".'\n'."Username For this ULB is :".$unam."".'\n'."Password For this ULB is :".$pass."')</script>";

           echo "<script>window.location='assign_emp.php'</script>";
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
      

        $sql = "UPDATE assign_emp SET emp_name='$emp_name', dist_id='$dist', ulb_id='$ulb', cluster_id='$cluster' WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record Updated successfully')</script>";

          echo "<script>window.location='assign_emp.php'</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    // delete to the database
    if(isset($_POST['delete']))
    {
        $id = $_POST['id'];

        $sql = "DELETE FROM assign_emp WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {

            echo "<script>alert('Record Delete successfully')</script>";

            echo "<script>window.location='assign_emp.php'</script>";

        } else {

            echo "Error updating record: " . $conn->error;
            
        }
    }
  }
  


?>

