<?php
  include('includes/config.php');

 $getid = $_GET['id']; 

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    // insert to the database
    if(isset($_POST['submit']))
    {
        $supplier  = $_POST['supplier'];
        $product_name = $_POST['product_name'];
        $product_type = $_POST['product_type'];
        $description = $_POST['description'];
        $unit = $_POST['unit'];
        $quantity = $_POST['quantity'];

         $sql1 ="INSERT INTO stock (supplier, product_name, product_type, description, unit, quantity) VALUES ('$supplier' '$product_name', '$product_type', '$description', '$unit', '$quantity')";
        

        if ($conn->query($sql1) === TRUE) {
           echo "<script>alert('Record Added successfully')</script>";

          echo "<script>window.location='add_stock.php'</script>";
        } else {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
    }
    // Update to the database
    if(isset($_POST['update']))
    {
        $supplier  = $_POST['supplier'];      
        $product_name = $_POST['product_name'];
        $product_type = $_POST['product_type'];
        $description = $_POST['description'];
        $unit = $_POST['unit'];
        $unit = $_POST['unit'];

      $sql = "UPDATE stock SET supplier='$supplier',product_name='$product_name',product_type='$product_type', description='$description',unit='$unit',quantity='$quantity' WHERE id=".$getid."";

  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Record Updated  successfully')</script>";

    echo "<script>window.location='add_stock.php'</script>";
  } else {
      echo "Error updating record: " . $conn->error;
  }
    }
  }
  
  // delete to the database
  if(isset($_POST['delete']))
    {
      
    }

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
        $sql3 = mysqli_query($conn,"SELECT * FROM `stock` WHERE id =".$getid.""); 
        $row = mysqli_fetch_assoc($sql3);
        ?>
                  
                  <div class="col-md-6">
                      <div class="form-group">
                      <label for="">Supplier </label>
                      <input type="text" class="form-control form-control-rounded" id="" name="supplier" value="<?php echo $row['supplier']; ?>">
                     </div>
                   </div>

                   <div class="col-md-6">
                      <div class="form-group">
                      <label for="">Product Name </label>
                      <input type="text" class="form-control form-control-rounded" id="" name="product_name" value="<?php echo $row['product_name']; ?>">
                     </div>
                   </div>

                   <div class="col-md-6">
                      <div class="form-group">
                      <label for="">Product Type</label>
                      <input type="text" class="form-control form-control-rounded" id="" name="product_type" value="<?php echo $row['product_type']; ?>">
                      </div>
                   </div>

                  <div class="col-md-6">
                      <div class="form-group">
                      <label for="">Product Description</label>
                      <input type="text" class="form-control form-control-rounded" id="" name="description" value="<?php echo $row['description']; ?>">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                      <label for="">Unit</label>
                      <input type="text" class="form-control form-control-rounded" id="" name="unit" value="<?php echo $row['unit']; ?>">
                      </div>
                   </div>

                   <div class="col-md-6">
                      <div class="form-group">
                      <label for="">Quantity</label>
                      <input type="text" class="form-control form-control-rounded" id="" name="quantity" value="<?php echo $row['quantity']; ?>">
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
