<?php
include('includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
$emp_catagory = $_POST['emp_catagory'];
$emp_name = $_POST['emp_name'];
$father_name = $_POST['father_name'];
$contact_no = $_POST['contact_no'];
$emailid = $_POST['emailid'];
$birth_date = $_POST['birth_date'];
$joining_date = $_POST['joining_date'];
$aadhar_cardno = $_POST['aadhar_cardno'];
$dl_no = $_POST['dl_no'];
$address = $_POST['address'];
$basic = $_POST['basic'];
$epf = $_POST['epf'];
$esic = $_POST['esic'];
$hra = $_POST['hra'];
$da = $_POST['da'];
$other = $_POST['other'];
$gross = $_POST['gross'];
$amount = $_POST['amount'];
$status =1;

$sql="INSERT INTO `employee_details`(`emp_catagory`,`emp_name`,`father_name`,`contact_no`,`emailid`,`birth_date`,`joining_date`,`aadhar_cardno`,`dl_no`,`address`,`basic`,`epf`,`esic`,`hra`,`da`,`other`,`gross`,`amount`,`status`) VALUES ('$emp_catagory','$emp_name','$father_name','$contact_no','$emailid','$birth_date','$joining_date','$aadhar_cardno','$dl_no','$address','$basic','$epf','$esic','$hra','$da','$other','$gross','$amount','$status')";
$run=mysqli_query($conn,$sql);
if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
window.location ='add_driver.php';
    </script>
    <?php
  }
}
?>