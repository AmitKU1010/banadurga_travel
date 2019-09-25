<?php
  include('includes/config.php');

//$getid = $_GET['id'];

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    // insert to the database
    if(isset($_POST['submit']))
    {
        $emp_name = $_POST['emp_name'];
        $adress = $_POST['adress'];
        $contact_no = $_POST['contact_no'];
        $email = $_POST['email'];
        $adhaar_no = $_POST['adhaar_no'];
        $pan_no = $_POST['pan_no'];
        $designation = $_POST['designation'];
        $role = $_POST['role'];

        $sql = "SELECT * FROM employee ORDER BY id DESC";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if($row['emp_id'] !== ""){
            $expl = explode("-", $row['emp_id']);
            $exno = $expl[1];
            $expno = $exno + 1;
            $emp_id = "UEPL-".$expno;
        }else{
            $emp_id = "UEPL-101";
        }
              

        $sql1 ="INSERT INTO employee (emp_id, emp_name, adress, contact_no, email, adhaar_no, pan_no, designation, role) VALUES ('$emp_id', '$emp_name', '$adress', '$contact_no', '$email', '$adhaar_no', '$pan_no', '$designation', '$role')";

        
        if ($conn->query($sql1) === TRUE) {
           echo "<script>alert('Record Added successfully')</script>";

          echo "<script>window.location='emp.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    // Update to the database
    if(isset($_POST['update']))
    {
        $emp_name = $_POST['emp_name'];
        $adress = $_POST['adress'];
        $contact_no = $_POST['contact_no'];
        $email = $_POST['email'];
        $adhaar_no = $_POST['adhaar_no'];
        $pan_no = $_POST['pan_no'];
        $designation = $_POST['designation'];
        $role = $_POST['role'];
        $id = $_POST['id'];
      

        $sql = "UPDATE employee SET emp_name='$emp_name',adress='$adress', contact_no='$contact_no',email='$email',adhaar_no='$adhaar_no',pan_no='$pan_no',designation='$designation',role='$role' WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record Updated  successfully')</script>";

          echo "<script>window.location='emp.php'</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    // delete to the database
    if(isset($_POST['delete']))
    {
        $id = $_POST['id'];

        $sql = "DELETE FROM employee WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {

            echo "<script>alert('Record Delete successfully')</script>";

            echo "<script>window.location='emp.php'</script>";

        } else {

            echo "Error updating record: " . $conn->error;
            
        }
    }
  }
  


?>

