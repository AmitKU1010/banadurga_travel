<?php
include('includes/config.php');
error_reporting(0);
  session_start();
  // if(isset($_SESSION['start_client']))
  // {
    $three_client=$_SESSION['start_client'] ;
    $four_client= $_SESSION['end_client'];
    $person_name=$_SESSION['serach'];

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table  width="100%" border="1" height="20%">
    <tr> 
   <td width="20%">Bill No :13</td>
   <td width="60%" align="center"> INVOICE <br>
   Tarini Tour & Travels <br>
   <!-- TAKING CARE OF YOUR MOVEMENT <br> -->
    (A COMPLETE COMMUNICATION UNIT)<br>

   PLOT NO SE-1/10,H.B COLONY,SATYANAGAR,BHUBANESWAR-751007 <br>
   Mobile:9437023888,9437464677,Ph :0674-2571622/33 <br>
   E-MAIL :tarini10paise@yahoo.co.in <br>
   GSTIN-21AGHPS394OE1ZN
   </td> 
   <td width="20%">Bill Date :<?php echo date("d/m/y"); ?></td> 
   </tr>
   <tr>
     <td colspan="3">
    
       Customer Name : <?php echo $person_name=$_SESSION['serach'];  ?><br> <br>

       <?php 
       $sac="SELECT * FROM `coustomer` WHERE cos_name='$person_name'";
       $kar=mysqli_query($conn,$sac);
       $fetch=mysqli_fetch_assoc($kar);
       ?> 
       Address : <?php echo $fetch['cos_adress']; ?>  <br><br> 
       Tel No :<?php echo $fetch['cos_number']; ?><br>
     </td>
   </tr>
  </table>
  <br>

  <table width="100%" border="1" height="20%" style="border-collapse: collapse;">
    <tr>
      <td align="center" rowspan="2"><strong>Ds No</td>          </strong>
      <td align="center" rowspan="2"><strong>Vehicle Name</td></strong>
      <td align="center" rowspan="2"><strong>Vehicle No</td></strong>
      <td align="center" rowspan="2"><strong>St. Dt.</td></strong>
      <td align="center" rowspan="2"><strong>C.Dt</td></strong>


      <td align="center" rowspan="2"><strong>S.Km.</td></strong>
      <td align="center" rowspan="2"><strong>C.Km.</td></strong>



      <td align="center" rowspan="2"><strong>T.Km.</td></strong>
      <td align="center" rowspan="2"><strong>T.hr</td></strong>
      <td align="center" rowspan="2"><strong>Type</td></strong>
      <td align="center" rowspan="1" colspan="2"><strong>Chargeable</td></strong>
      <td align="center" rowspan="1" colspan="2"><strong>Others</td></strong>


      <td align="center" rowspan="2"><strong>K.Cov(1)</td></strong>
      <td align="center" rowspan="2"><strong>Fuel Rate</td></strong>

      <td align="center" rowspan="2"><strong>Extra</td></strong>
      <td align="center" rowspan="2"><strong>Total Amt</td></strong>
      <td align="center" rowspan="2"><strong>Adv</td></strong>
      <td align="center" rowspan="2"><strong>Driver Charge</td></strong>
      <td align="center" rowspan="2"><strong>Balance</td></strong>
    </tr> </strong>
    <tr> 
      <td align="center">Km</td>
      <td align="center">Rs</td>
      <td align="center">Hrs</td>
      <td align="center">Rs</td>
    </tr>
    <?php
  

     // $sql = "SELECT update_dutyslip_coustomer.dutyslip_slno,update_dutyslip_coustomer.party_name,update_dutyslip_coustomer.vehicle_id,update_dutyslip_coustomer.vehicle_name,update_dutyslip_coustomer.vehicle_no,update_dutyslip_coustomer.start_date,update_dutyslip_coustomer.closing_date,update_dutyslip_coustomer.fixed_type,update_dutyslip_coustomer.starting_km,update_dutyslip_coustomer.closing_km,update_dutyslip_coustomer.total_km,update_dutyslip_coustomer.charging_type,update_dutyslip_coustomer.starting_time,update_dutyslip_coustomer.closing_time,update_dutyslip_coustomer.total_time,update_dutyslip_coustomer.place_from,update_dutyslip_coustomer.place_to,update_dutyslip_coustomer.toll_gate_charge,update_dutyslip_coustomer.parking_charge,update_dutyslip_coustomer.report_at,update_dutyslip_coustomer.fixed_price,update_dutyslip_coustomer.price_per_km,update_dutyslip_coustomer.detaination_hour,update_dutyslip_coustomer.tdp,update_dutyslip_coustomer.day_charge,update_dutyslip_coustomer.extra_hour,update_dutyslip_coustomer.total_price_ofextrahour,update_dutyslip_coustomer.no_of_nighthalt,update_dutyslip_coustomer.nighthalt_price,update_dutyslip_coustomer.km_cover_in_one_lit,update_dutyslip_coustomer.fuel_rate,update_dutyslip_coustomer.total_rate_d_cover_in_one_lit,update_dutyslip_coustomer.other_charge,update_dutyslip_coustomer.advance_paid_client,update_dutyslip_coustomer.advance_paid_travel,update_dutyslip_coustomer.payble_amount,customercarcharges.price_per_km,customercarcharges.detaintion_charges  FROM `update_dutyslip_coustomer` INNER JOIN customercarcharges  ON update_dutyslip_coustomer.vehicle_id=customercarcharges.vehicle_id  WHERE 
     //         party_name LIKE '%"."$person_name"."%' AND `start_date` BETWEEN '$three_client' AND '$four_client' group by dutyslip_slno order by vehicle_name";

//              SELECT * FROM `update_dutyslip_coustomer` INNER JOIN customercarcharges  ON update_dutyslip_coustomer.vehicle_id=customercarcharges.id  WHERE 
// party_name LIKE '%"."person_name"."%' AND `start_date` BETWEEN 'three_client' AND 'four_client'
       $sql = "SELECT * FROM `update_dutyslip_corporate_owner`  WHERE 
             party_name LIKE '%"."$person_name"."%' AND `starting_date` BETWEEN '$three_client' AND '$four_client' group by dutyslip_slno order by vehicle_name";

     $run=mysqli_query($conn,$sql);
    while ($data=mysqli_fetch_assoc($run)) 
    {
      ?>
    <tr>
      <td align="center"><?php echo $data['dutyslip_slno'];?></td>

      <td align="center"><?php echo $data['vehicle_name'];?></td>

      <td align="center"><?php echo $data['vehicle_no'];?></td>

      <td align="center"><?php echo $data['starting_date'];?></td>

      <td align="center"><?php echo $data['closing_date'];?></td>


      <td align="center"><?php echo $data['starting_km'];?></td>
      <td align="center"><?php echo $data['closing_km'];?></td>

      <td align="center"><?php echo $data['total_km'];?></td>

      <td align="center"><?php echo $data['total_time'];?></td>

      <td align="center"><?php echo $data['charging_type'];?></td>


      <?php 
      $val=$data['charging_type'];
      if($val=='long')
      {
        ?>
       <td align="center"><?php echo $data['total_km'];?></td>

      <td align="center"><?php echo $data['price_per_km'];?></td>
      <td align="center"><?php echo $data['detaintion_hour'];?></td>
      <td align="center"><?php echo $data['detaintion_charges'];?></td>
      <?php
      }
      else
      {
        ?>
        <td align="center"><?php echo '0'?></td>
      <td align="center"><?php echo '0'?></td>
      <td align="center"><?php echo '0'?></td>
      <td align="center"><?php echo '0'?></td>
      <?php
      }
      ?>

      <?php 
      $val=$data['charging_type'];
      if($val=='daybasic')
      {
        ?>
      <td align="center"><?php echo $data['km_cover_in_one_litre_td'];?></td>

      <td align="center"><?php echo $data['fuel_rate_td'];?></td>
      <?php
      }
      else
      {
        ?>
      <td align="center"><?php echo '0'?></td>
      <td align="center"><?php echo '0'?></td>
        <?php
      }
      ?>

       <?php 
      $extra=$data['total_price_of_nh']+$data['extra_parking_toll']+$data['day_charge_td'];
       ?>
       <td align="center"><?php echo $extra;?></td>
        <?php 
      $before_adv=$data['total_amount'];
      ?>

      <td align="center"><?php echo $before_adv?></td>

      <td align="center"><?php echo $data['advance'];?></td>

      <td align="center"><?php echo $data['driver_charge'];?></td>

      <td align="center"><?php echo $data['grand_total'];?></td>
       <?php 
    $sei+=$data['total_amount'];
   
    $adv+=$data['advance'];

    $grand_total=$sei-$adv;
    ?>

    </tr>

      <?php
    }
    ?>

  </table>
  <br>

  <table width="100%" border="1">
    <tr>
      <td>for TARINI TOUR & TRAVELS</td>
      <td>Amount In Figure :Ruppees Twenty Four Thousand  <br> <br><p align="center">THANKING YOU </p><br><p align="center">Intrest @16% per annum will be charged on bills not paid within a week</p></td>
      <td width="22%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL :<strong><?php echo $sei; ?> </strong><br><br>
       
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(-)ADVANCE :  <strong><?php echo $adv; ?> </strong>    <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BALANCE :     <strong><?php echo $grand_total; ?></strong>


      </td>
    </tr>
  </table>

</body>
</html>


