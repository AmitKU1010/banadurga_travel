<?php
  include('includes/config.php');


  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    // insert to the database
    if(isset($_POST['submit']))
    {
        $suplier_name = $_POST['suplier_name'];
        $adress = $_POST['adress'];
        $contact_no = $_POST['contact_no'];
        $email = $_POST['email'];
        $gstin = $_POST['gstin'];
        $pan_no = $_POST['pan_no'];
        

        $sql1 ="INSERT INTO suplier (suplier_name, adress, contact_no, email, gstin, pan) VALUES ('$suplier_name', '$adress', '$contact_no', '$email', '$gstin', '$pan_no')";
        
        if ($conn->query($sql1) === TRUE) {
           echo "<script>alert('Record Added successfully')</script>";

          echo "<script>window.location='suplier.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    // Update to the database
    if(isset($_POST['update']))
    {
        $suplier_name = $_POST['suplier_name'];
        $adress = $_POST['adress'];
        $contact_no = $_POST['contact_no'];
        $email = $_POST['email'];
        $gstin = $_POST['gstin'];
        $pan_no = $_POST['pan_no'];
        $id = $_POST['id'];

        $sql = "UPDATE suplier SET suplier_name='$suplier_name',adress='$adress', contact_no='$contact_no',email='$email',gstin='$gstin',pan='$pan_no' WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record Updated  successfully')</script>";

          echo "<script>window.location='suplier.php'</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    // delete to the database
    if(isset($_POST['delete']))
    {
        $id = $_POST['id'];

        $sql = "DELETE FROM suplier WHERE id=".$id."";

        if ($conn->query($sql) === TRUE) {

            echo "<script>alert('Record Delete successfully')</script>";

            echo "<script>window.location='suplier.php'</script>";

        } else {

            echo "Error updating record: " . $conn->error;
            
        }
    }
  }
  


?>

