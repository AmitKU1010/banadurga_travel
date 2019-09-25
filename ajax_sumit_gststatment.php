<?php
  include('includes/config.php');
if(isset($_POST['submit']))
{

 $count = count($_POST['bill_number']);
 for($i=0;$i<$count;$i++)
          {


            $bill_number = $_POST['bill_number'][$i];
            $bill_date = $_POST['bill_date'][$i];
          
             $date_of_journey = $_POST['date_of_journey'][$i];
             $company = $_POST['company'][$i];
              $gstin=$fet['gstin'];
             $amount = $_POST['amount'][$i];
            $cgst = $_POST['cgst'][$i];
            $ogst = $_POST['ogst'][$i];
            $igst = $_POST['igst'][$i];
            $gst_amount = $_POST['gst_amount'][$i];
            $toll_gate = $_POST['toll_gate'][$i];
            $grand_amount = $_POST['grand_amount'][$i];
            

   $duplicate="SELECT * FROM gst_statmet WHERE dutyslip_slno='$bill_number'";
    $run_duplicate=mysqli_query($conn,$duplicate);
    // var_dump($run_duplicate);
    $checkrows=mysqli_num_rows($run_duplicate);

    if($checkrows>0)
{
  ?>
  
   <script>

    alert('Already Exist');
window.location ='gst_statment.php';
    </script>
    <?php
}
else
{
$sql="INSERT INTO `gst_statmet`(`gst_statmet`, `bill_date`,`date_of_journey`,`company`,`gstin`,`amount`,`cgst`, `ogst`, `igst`, `gst_amount`, `toll_gate`,`grand_amount`)

 VALUES ('$gst_statmet','$bill_date','$date_of_journey','$company','$gstin','$amount','$cgst','$ogst','$igst','$gst_amount','$toll_gate','$grand_amount')";
 // var_dump($sql);
 $run=mysqli_query($conn,$sql);
 // var_dump($run);

          }
 
 if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
    // exit();
window.location ='gst_statment.php';
    </script>
    <?php
  }
}
}
?>