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


$duplicate="SELECT * FROM add_corporate WHERE cos_name='$cos_name'";
$run_duplicate=mysqli_query($conn,$duplicate);
$checkrows=mysqli_num_rows($run_duplicate);

if($checkrows>0)
{
	?>
	
	 <script>

    alert('Coutomer Already Exist');
window.location ='add_corporate_payment_coustomer.php';
    </script>
    <?php
}
else
{

	$sql="INSERT INTO `add_corporate`(`cos_name`,`cos_adress`,`cos_number`,`cos_email`,`cos_gst`) VALUES ('$cos_name','$cos_adress','$cos_number','$cos_email','$cos_gst')";
$run=mysqli_query($conn,$sql);
if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
window.location ='add_corporate_payment_coustomer.php';
    </script>
    <?php
  }
}
}
?>

<!-- 
SELECT party_name,grand_total,closing_date,bill_no,(grand_total/100)*2.5 AS tax FROM `update_dutyslip_costomer_mst` INNER JOIN coustomer ON coustomer.cos_name=update_dutyslip_costomer_mst.party_name WHERE `closing_date` BETWEEN '2000-01-01' AND '2025-01-01'  UNION SELECT party_name,grand_total,closing_date,bill_no,(grand_total/100)*2.5 AS tax FROM `update_dutyslip_mst` INNER JOIN coustomer ON coustomer.cos_name=update_dutyslip_mst.party_name WHERE `closing_date` BETWEEN '2000-01-01' AND '2025-01-01'  UNION SELECT client,net_amount,bill_date,bill_no,(net_amount/100)*2.5 AS tax FROM `monthly_bill`  INNER JOIN add_corporate ON add_corporate.cos_name=monthly_bill.client WHERE `bill_date` BETWEEN '2000-01-01' AND '2025-01-01' -->