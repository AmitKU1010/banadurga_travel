<?php 
  include('includes/config.php');
  error_reporting(0);
  session_start();
  unset($_SESSION['start_client']);
  unset($_SESSION['end_client']);
  unset($_SESSION['serach_person']);
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


      <!--Start Dashboard Content-->
      <!-- Model btn start -->
      <!-- <button type="button" class="btn btn-lg btn-info waves-effect waves-light" data-toggle="modal" data-target="#modal-animation-14">ADD STOCK</button> -->
      <!-- Model btn end -->
      <!-- Model Start -->

      
               
                                   
       <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>View dutyslip Corporate
              <div class="table-wrap">
                   <div class="table-responsive">
                   <div class="table-wrap">
                   <div class="table-responsive">

                   <form method="post">
                   <div class="pull-right">
                   <input type="date" class="form-group" name="start_client">
                   <input type="date" class="form-group" name="end_client">
                   <input type="submit" name="submit_client">
                    <a class="btn btn-info" target="_blanks" href="print_gst_statement_whole_year.php">GST</a>
                    <!-- <a class="btn btn-info" target="_blanks" href="print_cos_withoutgst.php">NON-GST</a> -->

               </div>
               </form>



            </div>
            <div class="card-body">
              <div class="table-responsive">

              <table id="example" style="border-color: blue;"  border="5" >

                <thead>
                            <tr>
                              <!-- <th class="text-nowrap" style="text-align: center">Action</th> -->
                              <th style="text-align: center">SL NO.</th>
                              <th style="text-align: center">Bill Date</th>
                              <th style="text-align: center">Bill No</th>
                              <th style="text-align: center">Company Name</th>
                              <th style="text-align: center">GSTIN</th>
                              <th style="text-align: center">Guest Name</th>
                              <th style="text-align: center">AMOUNT</th>

                              <th style="text-align: center">CGST</th>
                              <th style="text-align: center">OGST</th>
                              <th style="text-align: center">IGST</th>
                              <th style="text-align: center">GST AMOUNT</th>
                              <th style="text-align: center">GRAND TOTAL</th>
                            </tr>
                </thead>
                <tbody>
                    <tr>
                      <?php
                        $three_cor = $four_cor =  "";                   
                            if(isset($_POST['submit_client']))
                              {
                                  $start_client=$_POST['start_client'];
                                  $date_client=date_create($start_client);
                                  $three_client= date_format($date_client,"Y-m-d");


                                  $end_client=$_POST['end_client'];
                                  $date2_client=date_create($end_client);
                                  $four_client=date_format($date2_client,"Y-m-d");


                                  $person_name=$_POST['serach'];

                                 $_SESSION['start_client'] = $three_client;
                                 $_SESSION['end_client'] = $four_client;
                                 $_SESSION['serach'] = $person_name;

                                  // $sql = "SELECT party_name,grand_total,closing_date,bill_no,(grand_total/100)*2.5 AS tax FROM `update_dutyslip_costomer_mst` WHERE `closing_date` BETWEEN '$three_client' AND '$four_client' UNION SELECT party_name,grand_total,closing_date,bill_no,(grand_total/100)*2.5 AS tax FROM `update_dutyslip_mst` WHERE `closing_date` BETWEEN '$three_client' AND '$four_client' UNION SELECT client,net_amount,bill_date,bill_no,(net_amount/100)*2.5 AS tax FROM `monthly_bill` WHERE `bill_date` BETWEEN '$three_client' AND '$four_client'";

                                  // var_dump($sql); 

                                 $sql="SELECT coustomer.cos_gst,party_name,grand_total,closing_date,bill_no,(grand_total/100)*2.5 AS tax FROM `update_dutyslip_costomer_mst` INNER JOIN coustomer ON coustomer.cos_name=update_dutyslip_costomer_mst.party_name WHERE `closing_date` BETWEEN '$three_client' AND '$four_client'  UNION SELECT coustomer.cos_gst,party_name,grand_total,closing_date,bill_no,(grand_total/100)*2.5 AS tax FROM `update_dutyslip_mst` INNER JOIN coustomer ON coustomer.cos_name=update_dutyslip_mst.party_name WHERE `closing_date` BETWEEN '$three_client' AND '$four_client'  UNION SELECT add_corporate.cos_gst,client,net_amount,bill_date,bill_no,(net_amount/100)*2.5 AS tax FROM `monthly_bill`  INNER JOIN add_corporate ON add_corporate.cos_name=monthly_bill.client WHERE `bill_date` BETWEEN '$three_client' AND '$four_client'";




                                  // SELECT party_name,grand_total,closing_date,bill_no,(grand_total/100)*2.5 AS tax FROM `update_dutyslip_costomer_mst` WHERE `closing_date` BETWEEN '1900-01-01' AND '2000-01-01' UNION SELECT party_name,grand_total,closing_date,bill_no,(grand_total/100)*2.5 AS tax FROM `update_dutyslip_mst` WHERE `closing_date` BETWEEN '1900-01-01' AND '2000-01-01' UNION SELECT client,net_amount,bill_date,bill_no,(net_amount/100)*2.5 AS tax FROM `monthly_bill` WHERE `bill_date` BETWEEN '1900-01-01' AND '2000-01-01'

                                    //   $sql = "SELECT * FROM `update_dutyslip_mst`  WHERE 
                                    // party_name LIKE '%"."$person_name"."%' AND `starting_date` BETWEEN '$three_client' AND '$four_client'";
                                   
                              }
                              else
                              {
                    $sql = "SELECT party_name,grand_total,closing_date,bill_no,(grand_total/100)*2.5 AS tax FROM `update_dutyslip_costomer_mst` UNION SELECT party_name,grand_total,closing_date,bill_no,(grand_total/100)*2.5 AS tax FROM `update_dutyslip_mst` UNION SELECT client,net_amount,bill_date,bill_no,(net_amount/100)*2.5 AS tax FROM `monthly_bill`";
                              }
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($v1 = $result->fetch_assoc()) 
                      {     
                      ?>
                       <!--  <td class="text-nowrap" style="text-align:center;width:80px;background-color:black;color:#fff;"> -->
                         <!-- <a href="gst_bill_corporet.php?printid=<?php echo $v1['id']; ?>" target="_blank"><i class="fa fa-file-text-o" aria-hidden="true"></i>
                            </a>
                            <a href="without_gst_bill_corporet.php?printid=<?php echo $v1['id']; ?>" target="_blank"><i class="fa fa-file-text-o" aria-hidden="true"></i>

                            <a href="delete_corporetbill.php?printid=<?php echo $v1['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> 
                            </a> -->
                        <!--     
                        <a href="edit_car_details.php?eid=<?php echo $row['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_car_details.php?eid=<?php echo $row['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a>  -->
                       <!-- </td> -->
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;">#<?php echo $i;?></td>

                               <?php 
                              $origDate = $v1['closing_date'];
                              $newDate = date("d-m-Y", strtotime($origDate));
                              ?>

                              <?php
                        $one=+$v1['tax'];
                        $two=+$v1['tax'];
                        $total_gst=$one+$two;

                        $toatl_amount_after_gst=+$total_gst+$v1['grand_total'];



                              ?>

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $newDate?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['bill_no'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['party_name'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['cos_gst'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['party_name'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['grand_total'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['tax'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1['tax'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $v1[''];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $total_gst;?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $toatl_amount_after_gst;?></td>
                        <?php
                        $i++;
                          echo "</tr>";
                        }
                      ?>
                    </tr>
                    </tr>
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
      <div class="clearfix"></div>
      <br>
      <!-- Table End -->
      <!--End Dashboard Content-->
    </div>
    <!-- End container-fluid-->
    
  </div><!--End content-wrapper-->
  
  <!--Start footer-->
  <!-- <?php include('includes/footer.php')?> -->

  <!--End footer-->
  
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
      </ul>
      
     </div>
   </div>
  <!--end color cwitcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
<?php include('includes/footerjs.php')?>
<script>
     $('#kuku').on('change', function()
       {
         var cheking_re=$('#kuku').val();
         if(cheking_re=='party_name')
         {
        $('#ch_party_one').show();
        $('#ch_party_two').hide();
        $('#ch_party_three').hide();
        $('#ch_party_four').hide();
      $(".myselect").select2();

         }
         if(cheking_re=='vehicle_no')
         {
       $('#ch_party_one').hide();
        $('#ch_party_two').show();
        $('#ch_party_three').hide();
        $('#ch_party_four').hide();
      $(".myselectvn").select2();

         }
         if(cheking_re=='dutyslip_slno')
         {
        $('#ch_party_one').hide();
        $('#ch_party_two').hide();
        $('#ch_party_three').show();
        $('#ch_party_four').hide();
      $(".myselectdn").select2();

         }
         if(cheking_re=='date_wise')
         {
        $('#ch_party_one').hide();
        $('#ch_party_two').hide();
        $('#ch_party_three').hide();
        $('#ch_party_four').show();
      $(".myselectdate").select2();

         }
         });

      // function show_km(str) {
      // // alert(1);
      //   var id = str;
      //   alert(id);
      //   // var l_no = id.split("-");
      //   // var valu = $('#'+id).val();

      // }

     function show_closing_km(str)
       {
        var id = str;
         // alert(id);
        var id_no=id.split('-');
        // alert(id_no[1]);

        var closing_km=$('#'+id).val();
        // alert(closing_km);
        var starting_km=$('#starting_km'+'-'+id_no[1]).val();
        // alert(starting_km);

        var total_km=parseInt(closing_km)-parseInt(starting_km);
        $('#total_km'+'-'+id_no[1]).val(total_km);

        $('#closing_time'+'-'+id_no[1]).keyup(function()
                        {

                          // var id = this.id;
                          // // alert(id);
                          // var id_no=id.split('-');
                          // // alert(id_no[1]);
                          // alert('yrs');

                           var startdt = new Date($('#starting_date'+'-'+id_no[1]).val()+ " " + $('#starting_time'+'-'+id_no[1]).val());
                           // alert(startdt);

                            var enddt = new Date($('#closing_date'+'-'+id_no[1]).val()+ " " + $('#closing_time'+'-'+id_no[1]).val());
                           // alert(enddt);

                           var diff = enddt - startdt;
                           // alert(diff);

                           var days = Math.floor(diff / (1000 * 60 * 60 * 24));
                           diff -=  days * (1000 * 60 * 60 * 24);

                           var hours = Math.floor(diff / (1000 * 60 * 60));
                           diff -= hours * (1000 * 60 * 60);
                 
                           var mins = Math.floor(diff / (1000 * 60));
                           diff -= mins * (1000 * 60);
                 
                           var seconds = Math.floor(diff / (1000));
                           diff -= seconds * (1000);

                           if(days<0 || hours<0 || mins<0 || seconds<0 )
                             {
                           $('#total_time'+'-'+id_no[1]).val("Please enter correct time range");
                             }
                           else
                           {
                           $('#total_time'+'-'+id_no[1]).val(days + " days : " + hours + " hours : " + mins + " minutes : " + seconds + " seconds");
                           }



     
     $('#total_time'+'-'+id_no[1]).on('blur', function()
       {
       // var id=this.id;
       // var id_no=id.split('-');

       var party_name=$('#party_name'+'-'+id_no[1]).val();
       // alert(vehicle_id);
       var charging_type=$('#charging_type'+'-'+id_no[1]).val();
      // alert(charging_type);
        
           jQuery.ajax
                      ({
                        type:"post",
                        url:"ajax_corporate_get.php",
                        dataType:"html", // Data type, HTML, json etc.
                        data:{party_name:party_name,charging_type:charging_type},
                        success:function(response)
                        {
                          // alert(response);
                          // console.log(response);
                          var obj1 = JSON.parse(response);

                          // for long charges

                        var night_holt_charge=obj1[0].night_holt_charge;
                        var detaintion_charges=obj1[0].detaintion_charges;
                        var price_per_km=obj1[0].price_per_km;

                        var day_charge=obj1[0].day_charge;
                        var km_cover_in_one_litre=obj1[0].km_cover_in_one_litre;
                        var fixed_price=obj1[0].fixed_price;

                        
                         // alert(detaintion_charges);

                          if(charging_type=='long')
                          {

                            $('#nh_charges'+'-'+id_no[1]).val(night_holt_charge);
                            $('#detaintion_charges'+'-'+id_no[1]).val(detaintion_charges);
                            $('#price_per_km'+'-'+id_no[1]).val(price_per_km);



                            var non=$("#non").val();
                            var parking_toll=$("#parking_toll").val();
                           

                            $('#no_of_nh'+'-'+id_no[1]).val(non);
                            // $('#total_price_of_nh'+'-'+id_no[1]).val(price_per_km);
                              $('#extra_parking_toll'+'-'+id_no[1]).val(parking_toll);

                           var total_night_halt_price_show=$('#nh_charges'+'-'+id_no[1]).val()*$('#no_of_nh'+'-'+id_no[1]).val();
                           // alert(total_night_halt_price_show);

                            $('#total_price_of_nh'+'-'+id_no[1]).val(total_night_halt_price_show);


                             // 
                             // 
                             // 
                             // 

                             var totalkm=$('#total_km'+'-'+id_no[1]).val();
                               // alert(totalkm);
                               // var detaion_hour = $('#detaintion').val(); 
                                var startdt = new Date($('#starting_date'+'-'+id_no[1]).val()+ " " + $('#starting_time'+'-'+id_no[1]).val());
                           // alert(startdt);

                            var enddt = new Date($('#closing_date'+'-'+id_no[1]).val()+ " " + $('#closing_time'+'-'+id_no[1]).val());
                           // alert(enddt);

                           var diff = enddt - startdt;
                               // alert(enddt);
                                // alert(startdt);
                                var days = Math.floor(diff / (1000 * 60 * 60 * 24));
                                var into_hour=days*24;
                                diff -=  days * (1000 * 60 * 60 * 24);

                                var hours = Math.floor(diff / (1000 * 60 * 60));
                                diff -= hours * (1000 * 60 * 60);

                                var mins = Math.floor(diff / (1000 * 60));
                                //diff -= mins * (1000 * 60);

                                var seconds = Math.floor(diff / (1000));
                                //$('#extra_hour').val(hours);
                                //var xdfd = 23;

                                // var total_hour = hours;
                                 var detention_hr =  parseFloat(Math.round(totalkm/50)).toFixed(2);
                                 // alert(detention_hr);
                                // //parseInt(totalkm)/50;
                                 //var dt_hr =  x.toPrecision(2) ;

                                 
                                 
                                 // var detaintion_hours = hours - detention_hr;
                                 // changed by me
                                 if(detention_hr>(hours+into_hour))
                                 {
                                   // alert(1);
                                  var detaintion_hours =detention_hr-(hours+into_hour);
                                $('#detaintion_hour'+'-'+id_no[1]).val(detaintion_hours);
                                 }
                                 else
                                 {
                                   // alert(2);

                                   var detaintion_hours =(hours+into_hour)-detention_hr;
                                $('#detaintion_hour'+'-'+id_no[1]).val(detaintion_hours);
                                 }

                                var total_price_of_detaintion_show= $('#detaintion_hour'+'-'+id_no[1]).val()*$('#detaintion_charges'+'-'+id_no[1]).val();
                                // alert(total_price_of_detaintion_show);

                             $('#total_price_of_detaintion'+'-'+id_no[1]).val(total_price_of_detaintion_show);

                             var total_price_per_km_show= $('#price_per_km'+'-'+id_no[1]).val()*$('#total_km'+'-'+id_no[1]).val();

                             $('#total_ppk'+'-'+id_no[1]).val(total_price_per_km_show);

                             //
                             var one=$('#total_price_of_nh'+'-'+id_no[1]).val();
                             var two=$('#total_price_of_detaintion'+'-'+id_no[1]).val();
                             var three=$('#total_ppk'+'-'+id_no[1]).val();
                             var four=$('#extra_parking_toll'+'-'+id_no[1]).val();




                             var toatl_amount_without_adv=parseInt(one)+parseInt(two)+parseInt(three)+parseInt(four);
                             // alert(toatl_amount_without_adv);

                             $('#total_amount'+'-'+id_no[1]).val(toatl_amount_without_adv);

                             $('#Driver_charge'+'-'+id_no[1]).on('change', function()
                             {

                              var grand_total=$('#total_amount'+'-'+id_no[1]).val()-$('#advance_price'+'-'+id_no[1]).val();

                             $('#grand_total'+'-'+id_no[1]).val(grand_total);

                             });


                             $('#grand_total'+'-'+id_no[1]).on('blur', function()
                             {
                              // alert('kxc');
                              $('#parking_toll').val('0');
                              $('#non').val('0');
                              $('#fr').val('0');

                             });


                          }

                          if(charging_type=='daybasic')
                          {
                            
                             var fr=$("#fr").val();
                             var non=$("#non").val();
                             var parking_toll=$("#parking_toll").val();
                            $('#extra_parking_toll'+'-'+id_no[1]).val(parking_toll);
                            $('#nh_charges'+'-'+id_no[1]).val(night_holt_charge);
                            $('#day_charge_td'+'-'+id_no[1]).val(day_charge);
                            $('#km_cover_in_one_litre_td'+'-'+id_no[1]).val(km_cover_in_one_litre);

                            $('#no_of_nh'+'-'+id_no[1]).val(non);

                             var total_night_halt_price_show=$('#nh_charges'+'-'+id_no[1]).val()*$('#no_of_nh'+'-'+id_no[1]).val();

                            $('#total_price_of_nh'+'-'+id_no[1]).val(total_night_halt_price_show);

                            $('#fuel_rate_td'+'-'+id_no[1]).val(fr);

    var total_price_of_km_cover_in_one_lit_show=($('#total_km'+'-'+id_no[1]).val()/$('#km_cover_in_one_litre_td'+'-'+id_no[1]).val())*$('#fuel_rate_td'+'-'+id_no[1]).val();

                            $('#total_price_of_km_cover_in_one_lit_td'+'-'+id_no[1]).val(total_price_of_km_cover_in_one_lit_show);

                            var one_daybasic= $('#total_price_of_nh'+'-'+id_no[1]).val();
                            var two_daybasic=$('#day_charge_td'+'-'+id_no[1]).val();
                            var three_daybasic=$('#total_price_of_km_cover_in_one_lit_td'+'-'+id_no[1]).val();
                            var four=$('#extra_parking_toll'+'-'+id_no[1]).val();

    var toatl_amount_without_adv_daybasic=parseInt(one_daybasic)+parseInt(two_daybasic)+parseInt(three_daybasic)+parseInt(four);
    // alert(toatl_amount_without_adv_daybasic);

    $('#total_amount'+'-'+id_no[1]).val(toatl_amount_without_adv_daybasic);

                            $('#Driver_charge'+'-'+id_no[1]).on('change', function()
                            {
                            var grand_total=$('#total_amount'+'-'+id_no[1]).val()-$('#advance_price'+'-'+id_no[1]).val();

                            $('#grand_total'+'-'+id_no[1]).val(grand_total);

                            });


                            $('#grand_total'+'-'+id_no[1]).on('blur', function()
                            {
                            $('#non').val('0');                              // alert('kxc');
                            $('#parking_toll').val('0');

                            $('#fr').val('0');

                            });

                            }

                            if(charging_type=='fixed')
                            {
                            $('#total_amount'+'-'+id_no[1]).val(fixed_price);

                            $('#Driver_charge'+'-'+id_no[1]).on('change', function()
                            {
                            var grand_total=$('#total_amount'+'-'+id_no[1]).val()-$('#advance_price'+'-'+id_no[1]).val();

                            $('#grand_total'+'-'+id_no[1]).val(grand_total);

                            });


                            $('#grand_total'+'-'+id_no[1]).on('blur', function()
                            {
                              // alert('kxc');
                            $('#parking_toll').val('0');
                            $('#non').val('0');
                            $('#fr').val('0');

                            });



                           }
                          
                           
                          
                        }

                      });
                  });
              });
            }

 $(".myselect2").select2();

</script>
</body>
</html>
