<?php
include("includes/config.php");
error_reporting(0);
$printid = $_GET['printid'];
   $sql="SELECT * FROM monthly_bill WHERE id='$printid'";


     $run=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($run);    
    
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table  width="100%" border="1" height="20%">
    <tr> 
   <td width="20%">Bill No :<?php echo $fo['bill_no'];?></td>
   <td width="60%" align="center"> MONTHLY BILL <br>
   <b><span><h3>BANADURGA TRAVELS</h3></span></b><br>
   <!-- TAKING CARE OF YOUR MOVEMENT <br> -->
   <b>(we make your travel fun,safe,economical,informative,comfortable & memorable)</b><br>

   <b>Plot No 362/3850,Block-C,Gronud Floor,Infront of  BMC,Goutam Nagar,BHUBANESWAR-751014</b><br>
   <b>Mobile:9437067889</b><br>
   <b>E-MAIL :jpbanadurga@gmail.com , banadurgatravels@gmail.com</b><br>
   </td> 
   <td width="20%">Bill Date :<?php echo date("d/m/y"); ?></td> 
   </tr>
   <tr>
     <td colspan="3">
        Bill Month : <?php echo $fo['bill_month'];?><br>
       Customer Name :<?php echo $p_name=$data['client'];?><br>
       <?php 
       $rr="SELECT * FROM monthly_bill WHERE cos_name='$client'";
       $ru=mysqli_query($conn,$rr);
       $fo=mysqli_fetch_assoc($ru);
       ?>
       Vehicle : <?php echo $fo['vehicle_name'];?><br>
       Vehicle No :<?php echo $fo['vehicle_no']; ?><br>
     </td>
   </tr>
  </table>

  <br>

  <table width="100%" border="1" height="20%" style="border-collapse: collapse;">
    <tr>
 <td align="center" rowspan="2">
 	<strong>Monthly Fixed Rent: <?php echo $fo['monthly_fixed_rent'];?></td></strong>
  
</tr>
</table>

<table width="100%" border="1" height="20%" style="border-collapse: collapse;">
    <tr>
 <td align="center" rowspan="2">
 	<strong>Total Amount:<?php echo $fo['net_amount'];?></td></strong>

 	 <td align="center" rowspan="2">
 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CGST (2.5%) : <strong><?php echo $cgst; ?> </strong></td>

       <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SGST (2.5%) : <strong><?php echo $sgst; ?> </strong></td> 

       <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net Payable &nbsp;&nbsp;&nbsp;&nbsp;:     <strong><?php echo $net_amount; ?></strong> </td> 
  
</tr>
</table>

 <table width="100%" border="1">
    <tr>
      <td><b><p style="text-align: center;">BANADURGA TRAVELS</p></b>
      <!-- <td>Amount In Figure :Ruppees Twenty Four Thousand  <br> <br> -->
      	<p align="center"><i>THANK YOU</i><br><i></i>Visit Again</i><br></p></td>
      
  </tr>
      </table>