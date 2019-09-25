<?php
include('includes/config.php');
include("number_to_words.php");

error_reporting(0);
  session_start();
  // if(isset($_SESSION['start_client']))
  // {
  $three_client=$_SESSION['start_client'] ;
  $four_client= $_SESSION['end_client'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table  width="100%" border="1" height="5%" style="text-align: center;border-collapse: collapse;">
   
    <h1 align="center">GST STATEMENT</h1>
  <tr>
    <td>Bill No</td>
    <td>Bill Date</td>
    <td>Company</td>
    <td>GSTIN</td>
    <td>Amount</td>
    <td>CGST</td>
    <td>OGST</td>
    <td>IGST</td>
    <td>GST AMOUNT</td>
    <td>TOLL GATE</td>
    <td>GRAND TOTAL</td>
  </tr>
  <?php 
 $sql = "SELECT coustomer.cos_gst,extra_parking_toll,party_name,grand_total,closing_date,bill_no,(grand_total/100)*2.5 AS tax FROM `update_dutyslip_costomer_mst` INNER JOIN coustomer ON coustomer.cos_name=update_dutyslip_costomer_mst.party_name WHERE `closing_date` BETWEEN '$three_client' AND '$four_client'  UNION SELECT coustomer.cos_gst,extra_parking_toll,party_name,grand_total,closing_date,bill_no,(grand_total/100)*2.5 AS tax FROM `update_dutyslip_mst` INNER JOIN coustomer ON coustomer.cos_name=update_dutyslip_mst.party_name WHERE `closing_date` BETWEEN '$three_client' AND '$four_client'  UNION SELECT add_corporate.cos_gst,toll_fee as extra_parking_toll,client,net_amount,bill_date,bill_no,(net_amount/100)*2.5 AS tax FROM `monthly_bill`  INNER JOIN add_corporate ON add_corporate.cos_name=monthly_bill.client WHERE `bill_date` BETWEEN '$three_client' AND '$four_client'";

  $run=mysqli_query($conn,$sql);
    while ($data=mysqli_fetch_assoc($run)) 
    {
                        $origDate = $data['closing_date'];
                        $newDate = date("d-m-Y", strtotime($origDate));
                        $one=+$data['tax'];
                        $two=+$data['tax'];
                        $igst=+$one+$two;
                        $total_gst=$one+$two;


                        $toatl_amount_after_gst=+$total_gst+$data['grand_total'];

                        $gst_numbers=$data['cos_gst'];


                        $firstTwoCharacters =substr($gst_numbers,0,2);

                        // echo $firstTwoCharacters;

    ?>
  <tr>
       <td align="center"><?php echo $data['bill_no'];?></td>

      <td align="center"><?php echo $newDate; ?></td>

      <td align="center"><?php echo $data['party_name'];?></td>

      <td align="center"><?php echo $data['cos_gst'];?></td>

      <td align="center"><?php echo $data['grand_total'];?></td>

  <?php
      if($firstTwoCharacters=='21')
      {
        ?>
      <td align="center"><?php echo $data['tax'];?></td>

      <td align="center"><?php echo $data['tax'];?></td>

      <td align="center"><?php echo 0?></td>
  <?php
      }
      else
      {
      ?>

      <td align="center"><?php echo 0;?></td>

      <td align="center"><?php echo 0;?></td>

      <td align="center"><?php echo $total_gst;?></td>
<?php
      }
?>
      <td align="center"><?php echo $total_gst?></td>

      <td align="center"><?php echo $data['extra_parking_toll'];?></td>

      <td align="center"><?php echo $toatl_amount_after_gst;?></td>
  </tr>
<?php } ?>
  </table>

</body>
</html>


