<?php
include("includes/config.php");
error_reporting(0);
$printid = $_GET['printid'];
$sql="SELECT * FROM dutyslip_corporate WHERE id='$printid'";


     $run=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($run);   
  ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<table width="100%" border="1">
    <tr>
      
   <td width="20%"><img src="assets/images/logo.jpg" height="60px" width="110px"></td>
   <td width="60%" align="center"> DUTYSLIP <br>
   <b>BANADURGA TRAVELS</b> <br>
   <!-- TAKING CARE OF YOUR MOVEMENT <br> -->
    (we make your travel fun,safe,economical,informative,comfortable & memorable)<br>

   Plot No 362/3850,Block-C,Gronud Floor,Infront of  BMC,Goutam Nagar,BHUBANESWAR-751014 <br>
   
   E-MAIL :jpbanadurga@gmail.com , banadurgatravels@gmail.com<br>
   </td> 
   <td width="20%">Mobile:9437067889<br></td> 
   </tr><br>
   
</table>

  
  <br>
    <!-- <br><br> -->

<table width="100%" border="" height="30%" style="border-collapse: collapse;">
    <tr>
      <th align="center" ><strong>Name</th></strong>
      <th align="center" ><strong>Nature of Duty</th></strong>
      <th align="center" ><strong>Address</th></strong>
      <th align="center" ><strong>Vehicle No.</th></strong>
      <th align="center" ><strong>Booked by</th></strong>

     
      <td align="center" ><strong>Driver Name</td></strong>
      <td align="center" ><strong>Driver Number</td></strong>
     
    </tr>

    
    <tr>
      <td align="center"><?php echo $data['party_name'];?></td>

      <td align="center"><?php echo $data['nature_of_duty'];?></td>

      <td align="center"><?php echo $data['address'];?></td>

      <td align="center"><?php echo $data['vehicle_no'];?></td>

      <td align="center"><?php echo $data['booked_by'];?></td>


      <td align="center"><?php echo $data['driver_name'];?></td>

      <td align="center"><?php echo $data['driver_number'];?></td>
      
    </tr>
  </table>


<!-- <table>
   <tr>
   <td width="20%"><b>NAME</b></td>
   <td width="20%"><b>Nature of Duty</b></td>
    
   <td width="20%"><b>Address</b></td>
    <td width="20%"><b>Vehicle No</b></td>
  
    <td width="20%"><b>Booked by</b></td>
    <td width="20%"><b>Driver Name</b></td>
    </tr>

     <tr>
    <td><?php echo $data['party_name'];?></td>
      <td><?php echo $data['nature_of_duty'];?></td>
      <td><?php echo $data['address'];?></td>
      <td><?php echo $data['vehicle_no'];?></td>
      <td><?php echo $data['booked_by'];?></td>
      <td><?php echo $data['driver_name'];?></td>
      
    </tr>

</table> -->
  <br><br>


  <table width="100%" border="1" height="30%" style="border-collapse: collapse;">
    <tr>
      <th align="center" ><strong>Date</th></strong>
      <th align="center" ><strong>Startig k.m</th></strong>
      <th align="center" ><strong>Startig time</th></strong>
      <th align="center" ><strong>Closing k.m</th></strong>
      <th align="center" ><strong>Closing time</th></strong>

     
      <td align="center" ><strong>Total k.m</td></strong>
      <td align="center" ><strong>Total time</td></strong>
      <td align="center" ><strong>Visited Place</td></strong>

      <td align="center" ><strong>Remarks</td></strong>
      
    </tr>

    
    <tr>
      <td align="center"><?php echo date("Y/m/d");?></td>

      <td align="center"><?php echo $data['starting_km'];?></td>

      <td align="center"><?php echo $data['starting_time'];?></td>

      <td align="center"></td>

      <td align="center"></td>


      <td align="center"></td>
      <td align="center"></td>

      <td align="center"></td>
      <td align="center"></td>
    </tr>
  </table>

  <!-- <table width="100%" border="1" style="padding-bottom: 30px;">
  
     <thead>
      <th>Date</th>
      <th>Starting k.m</th>
      <th>Starting time</th>
      <th>Closing k.m</th>
      <th>Closing time</th>
      <th>Total k.m</th>
      <th>Total time</th>
      <th>Remarks</th>
     </thead>
    <tr>
     <td><?php echo date("Y/m/d");?></td>
      <td><?php echo $data['starting_km'];?></td>
      <td><?php echo $data['starting_time'];?></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr> 
  </table> -->
  
  <!-- <table width="100%" border="1">
    <thead>
      <th>Adv.From Travels: </th>
      <th>Local/Long: </th>
      <th>Adv.From Hirer: </th>
    </thead>
  </table>
   <br><br>
   <table width="100%" border="1">
    <thead>
      <th>Total Hrs./k.m :</th>
      <th>Extra Destination/Extra k.m :</th>
      <th>Day Basis/Night Halt : </th>
    </thead>
  </table> -->
  <br><br>
<table width="100%" border="1" height="30%" style="border-collapse: collapse;">
    <tr>
      <th align="center" ><strong>Adv.From Travels</th></strong>
      <th align="center" ><strong>Local/Long</th></strong>
      <th align="center" ><strong>Adv.from Hirer</th></strong>
    </tr>

    <tr>
      <td align="center"></td>

      <td align="center"></td>

      <td align="center"></td>
      
    </tr>
  </table>
 <br><br>
<!-- <thead>
 <th>Total :</th>
 <th>Advance :</th>
 <th>Balance :</th>
</thead>
</td>
</tr> -->
<table width="100%" border="1" height="30%" style="border-collapse: collapse;">
    <tr>
      <th align="center" ><strong>Total Hrs./k.m</th></strong>
      <th align="center" ><strong>Extra Detention/Extra k.m</th></strong>
      <th align="center" ><strong>Day Basis/Night Halt</th></strong>
    </tr>

    <tr>
      <td align="center"></td>

      <td align="center"></td>

      <td align="center"></td>
    </tr>
  </table>
  <br><br>
  <table width="100%" border="1">
    <tr>
      
   <th align="center"><strong>signature  of  hirer</th></strong>
   <th align="center"><strong>total</th></strong>
   <th align="center"><strong>advance</strong></th>
   <th align="center"><strong>driver charge</strong></th>
   <th align="center"><strong>balance</strong></th>

</tr>
</table>



<table width="100%" border="1">
    <tr>
      
   <td width="20%"><b>Time & K.M.will e charged from travels to travels</b></td>
   <td width="60%" align="center"><b>Thank You</b><br><i>Visit Again</i></td>
    
   <td width="20%"><b>for BANADURGA TRAVELS</b></td> 
   </tr><br>
 </table>

</body>
</html>

   