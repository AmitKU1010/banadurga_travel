<?php

include('includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
$cos_name = $_POST['cos_name'];
$cos_adress = $_POST['cos_adress'];
$cos_number = $_POST['cos_number'];
$cos_email = $_POST['cos_email'];
$cos_gst = $_POST['cos_gst'];


$duplicate="SELECT * FROM coustomer WHERE cos_name='$cos_name'";
$run_duplicate=mysqli_query($conn,$duplicate);
$checkrows=mysqli_num_rows($run_duplicate);

if($checkrows>0)
{
	?>
	
	 <script>

    alert('Coutomer Already Exist');
window.location ='add_customer.php';
    </script>
    <?php
}
else
{

	$sql="INSERT INTO `coustomer`(`cos_name`,`cos_adress`,`cos_number`,`cos_email`,`cos_gst`) VALUES ('$cos_name','$cos_adress','$cos_number','$cos_email','$cos_gst')";
$run=mysqli_query($conn,$sql);
if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
window.location ='add_customer.php';
    </script>
    <?php
  }
}
}
?>