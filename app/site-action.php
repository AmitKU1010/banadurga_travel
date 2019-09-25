<?php
  include('includes/config.php');

$getid = $_GET['id'];

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    // insert to the database
    if(isset($_POST['submit']))
    {
        $sitename = $_POST['sitename'];
        $adress = $_POST['adress'];
        $contact_person = $_POST['contact_person'];
        $contact_person_no = $_POST['contact_person_no'];

         $sql1 ="INSERT INTO sites (sitename, adress, contact_person, contact_person_no) VALUES ('$sitename', '$adress', '$contact_person', '$contact_person_no')";
        

        if ($conn->query($sql1) === TRUE) {
           echo "<script>alert('Record Added successfully')</script>";

          echo "<script>window.location='site.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    // Update to the database
    if(isset($_POST['update']))
    {
      $sitename = $_POST['sitename'];
        $adress = $_POST['adress'];
        $contact_person = $_POST['contact_person'];
        $contact_person_no = $_POST['contact_person_no'];

      $sql = "UPDATE sites SET sitename='$sitename',adress='$adress', contact_person='$contact_person',contact_person_no='$contact_person_no' WHERE id=".$getid."";

  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Record Updated  successfully')</script>";

    echo "<script>window.location='site.php'</script>";
  } else {
      echo "Error updating record: " . $conn->error;
  }
    }
  }
  
  // delete to the database
  if(isset($_POST['delete']))
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>
</head>

<body>

 <div id="wrapper">

<?php include('includes/sidebar.php')?>
<!--Start topbar header-->
<?php include('includes/topnav.php')?>
<!--End topbar header-->

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <form action="" method="post">

        <?php 
        $sql1 = mysqli_query($conn,"SELECT * FROM `sites` WHERE id =".$getid.""); 
        $row = mysqli_fetch_assoc($sql1);
        ?>
 
                   <div class="col-md-6">
                      <div class="form-group">
                      <label for="">Site Name</label>
                      <input type="text" class="form-control form-control-rounded" id="" name="sitename" value="<?php echo $row['sitename']; ?>">
                     </div>
                   </div>

                   <div class="col-md-6">
                      <div class="form-group">
                      <label for="">Site Address</label>
                      <input type="text" class="form-control form-control-rounded" id="" name="adress" value="<?php echo $row['adress']; ?>">
                      </div>
                   </div>

                  <div class="col-md-6">
                      <div class="form-group">
                      <label for="">Site Incharge</label>
                      <input type="text" class="form-control form-control-rounded" id="" name="contact_person" value="<?php echo $row['contact_person']; ?>">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                      <label for="">Contact Number</label>
                      <input type="text" class="form-control form-control-rounded" id="" name="contact_person_no" value="<?php echo $row['contact_person_no']; ?>">
                      </div>
                   </div>
               
            <div class="form-actions mt-10" align="center">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
              <button name="update" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Save changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </body>
    <?php include('includes/footer.php')?>
    </html>
