<?php 
  include('includes/config.php');
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>
      <?php include('includes/header.php')?>
   <script>
    
     function show_type(str) {
      // alert(1);
        var id = str;
        var l_no = id.split("-");
        var valu = $('#'+id).val();
        $.ajax({
              type:"post",
              url:"get_veh_number.php",
              data:{q:valu,action:"type"},
              success:function(data){
                //  alert(data);
                $('#vehicle_no-'+l_no[1]).html(data);
               }
            });
      }

       function show_unit(str) {
       var id = str;
      var l_no = id.split("-");
      var valu = $('#'+id).val();
      // alert(l_no);
      //alert(l_no[1]);
    $('#report_at-'+l_no[1]).val(valu);
  }
          
       

</script>
  
</head>
<style type="text/css">
 
</style>

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
                           <div class="form-body">
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Add DutySlip</h6>
                              <hr class="light-grey-hr"/>
                            </div>
      
          <div class="card" style="overflow: scroll;">
             <div class="card-body">
              <form action="ajax_submit_dutyslip_banadurga.php" method="post">
                <table width="100%" id="data_table_add_product">
                    <thead>
                      <tr>
                       
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">Slip No.</th>
                        <th style="text-align: center">Party Name</th>
                        <th style="text-align: center">Nature of Duty</th>
                        <th style="text-align: center">Address</th>
                        <th style="text-align: center">Vehicle Name</th>
                        <th style="text-align: center">Vehicle No.</th>
                        
                      </tr>
                    </thead>



                    <tbody >
                      <tr class="table-align" id="POITable">
                        <td>
                          <input type="text" style="text-align:center;width:16 0px;background-color: #af1dba;color:#fff;" name="sl_no[]"  id="sl_no-1" value="1"  >
                        </td>

                        <td>
                          <input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="dutyslip_slno[]" id="dutyslip_slno-1" maxlength="7" >
                        </td>

                        
                        <td>
                          <select style="width:160px;background-color: #af1dba;color:#fff;" name="party_name[]" onchange="show_unit(this.id)" id="party_name-1" class="party_name_clss">
                            <option>Choose Name</option>
                                      <?php 
                                      $query="SELECT *  from coustomer ORDER BY cos_name";
                                      $run=mysqli_query($conn,$query);
                                      while($data=mysqli_fetch_assoc($run))
                                      {
                                        ?>
                                      <option value="<?php echo $data['cos_name'] ?>">
                                        <?php echo $data['cos_name']; ?>
                                      </option>
                                    <?php } ?>
                          </select>
                          </td>

                          <td>
                          <input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="nature_of_duty[]" id="nature_of_duty-1" maxlength="7" >
                          </td>

                        <td>
                          <input type="text" style="width:160px;background-color: #af1dba;color:#fff;" name="address[]" id="address-1" class="address_clss" >
                          
                        </td>

                    <td>
                          <select style="width:160px;background-color: #af1dba;color:#fff;" name="vehicle_name[]" id="vehicle_name-1" onchange="show_type(this.id)" class="vehicle_name_clss">
                           <option>Choose Vehicle</option>
                                      <?php 
                                      $query="SELECT *  from car";
                                      $run=mysqli_query($conn,$query);
                                      while($data=mysqli_fetch_assoc($run))
                                      {
                                        ?>
                                      <option value="<?php echo $data['id']?>">
                                        <?php echo $data['vehicle_name']; ?>
                                      </option>
                                    <?php } ?>
                          </select>
                          </td>

                          <td>
                          <select style="width:160px;background-color: #af1dba;color:#fff;" name="vehicle_no[]" id="vehicle_no-1" class="vehicle_no_clss" >
                          </select>
                        </td>

                         
                      </tr>
                      <tr>
                        <th style="text-align: center">Booked by</th>
                        <th style="text-align: center">Driver Name</th>
                        <th style="text-align: center">Driver No.</th>
                        <th style="text-align: center">Date</th>
                        <th id="th_id_imei" style="text-align: center">St.k.m</th>
                        <th style="text-align: center">St.Time</th>
                        <th style="text-align: center">Place</th>
                        
                     <!--    <th style="text-align: center">Action</th> -->
                       
                      </tr>
                      <tr>

                        <td>
                          <input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="booked_by[]"  id="booked_by-1">
                        </td>

                        <td>
                          <input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="driver_name[]"  id="driver_name-1">
                        </td>
                        <td>
                          <input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="driver_number[]"  id="driver_number-1">
                        </td>

                         <td>
                          <input type="date" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="startig_date[]"  id="startig_date-1">
                        </td>

                        <td>
                          <input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="starting_km[]" id="starting_km-1" maxlength="7" >
                        </td>

                        <td>
                          <input type="time" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="starting_time[]" id="starting_time-1" >
                        </td>

                        <td>
                          <input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="place_from[]" id="place_from-1" >
                        </td>

                  </tr>


                  <tr align="center">
                    <th style="text-align: center">Advance</th>
                  </tr>
                  <tr align="center">
                    <td>
                          <input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="advance_price[]" id="advance_price" >
                        </td>
                  </tr>
                       <tr>
                        <td></td>
                        <td></td>
                        <td></td>

                       

                   <td>
                        <a id="addrow-0" class="btn btn-info add-row mr-15" data-toggle="tooltip" data-original-title="Add DutySlip"> <i class="fa fa-pencil text-inverse m-r-10"></i></a>
                        &nbsp;&nbsp;
                       <!--  <a class="btn btn-danger" onClick="deleteRow(this);" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-close "></i></a> -->
                      </td>
                  </tr>

                    <tr class="add_tr"></tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>

                      <td>
                        <input type="submit" name="submit" value="Submit" class="btn btn-success">
                      </td>
                    </tr>
                 </tbody>
               </table>
                </form>
              </div>
              </div>
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>View dutyslip</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" border="7" style="border-color: blue;" width="100%" height="40%">
                <thead>
                  <tr>        

                              <th style="text-align: center">Action</th>
                              <th style="text-align: center">#</th>
                              <th style="text-align: center">D.S No.</th>
                              <th style="text-align: center">Name</th>
                              <th style="text-align: center">N Duty</th>
                              <th style="text-align: center">Address</th>
                              <th style="text-align: center">V.Name</th>
                              <th style="text-align: center">V.No.</th>
                              <th style="text-align: center">Book by</th>
                              <th style="text-align: center">Driver Name</th>
                              <th style="text-align: center">Driver No.</th>
                              <th style="text-align: center">Date</th>
                              <th style="text-align: center">St.K.m</th>
                              <th style="text-align: center">St.Time</th>
                              <th style="text-align: center">Place</th>
                              <th style="text-align: center">Advance</th>
                             
                              
                              <!-- <th>Adv.client</th>
                              <th>Adv.travel</th> -->
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM issue_dutyslip";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($v1 = $result->fetch_assoc()) 
                      {     
                      ?>
                      
                      <td  style="text-align:center;width:80px;background-color: black;color:#fff;"class="text-nowrap">
                         <a href="dutyslip_archieve.php?printid=<?php echo $v1['id']; ?>" target="_blank"><i class="fa fa-file-text-o" aria-hidden="true"></i>
                            </a>
                            
                        <a href="edit_duty_slip.php?eid=<?php echo $v1['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_dutyslip.php?eid=<?php echo $v1['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> </td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5">#<?php echo $i;?></td>

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['dutyslip_slno'];?></td>

                              <td  style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"width="5"><?php echo $v1['party_name'];?></td>

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['nature_of_duty'];?></td>

                               <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['address'];?></td>

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['vehicle_name'];?></td>

                              <td  style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"width="5"><?php echo $v1['vehicle_no'];?></td>


                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['booked_by'];?></td>

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['driver_name'];?></td>

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['driver_number'];?></td>

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['date'];?></td>

                              <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['starting_km'];?></td>

                              <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['starting_time'];?></td>

                              <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['place'];?></td>

                    <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['advance_price'];?></td> <!--  co canlhAOFNLHV sZGIGEG -->
                         


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
  <?php include('includes/footer.php')?>

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

  var z=1;
  $(document).on('click', '.add-row', function(){
    // alert('one');
  var id = $(this).attr('id');
  var last = parseFloat(id.split("-").pop());

        $.ajax({
              type:"post",
              url:"get_partyname.php",
              data:{name:"get_partyname"},
              success:function(data){
                // alert(data);
                $('#party_name-'+z).html(data);
               }
            });
  $.ajax({
              type:"post",
              url:"get_vehiclename.php",
              data:{name:"vn"},
              success:function(data)
              {
                // alert(data);
                $('#vehicle_name-'+z).html(data);
               }
              
            });
    
  z++;
    
    $('.add_tr').replaceWith('<tr ><th style="text-align:center;" >ID</th><th style="text-align:center;">Slip No.</th><th style="text-align:center;">party Name</th><th style="text-align:center;">Nature of Duty</th><th style="text-align:center;">Address</th><th style="text-align:center;">Vehicle Name</th><th style="text-align:center;">Vehicle No.</th></tr><tr class="table-align" id="data_table_td_0"><td><input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="sl_no[]" value="'+z+'" id="sl_no-'+z+'"</td><td><input type="text" style="text-align:center;width:160;background-color: #af1dba;color:#fff;" name="dutyslip_slno[]" id="dutyslip_slno-'+z+'"</td><td><select style="width:160px;background-color: #af1dba;color:#fff;" name="party_name[]" onchange="show_unit(this.id)" id="party_name-'+z+'"class="party_name_clss"><option>Choose Party Name</option></select></td><td><input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="nature_of_duty[]" id="nature_of_duty-'+z+'"</td><td><input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="address[]" id="address-'+z+'"</td><td><select style="width:160px;background-color: #af1dba;color:#fff;" name="vehicle_name[]" onchange="show_type(this.id)" id="vehicle_name-'+z+'" class="vehicle_name_clss"><option>Choose Vehicle</option></select><td><select style="width:160px;background-color: #af1dba;color:#fff;" name="vehicle_no []" id="vehicle_no-'+z+'"class="vehicle_no_clss"></td></tr><tr><th style="text-align:center;">Booked by</th><th style="text-align:center;">Driver Name</th><th style="text-align:center;">Driver No.</th><th style="text-align:center;">Date</th><th style="text-align:center;">St.k.m</th><th style="text-align:center;">St.Time</th><th style="text-align: center">Place</th><th style="text-align:center;"></th></tr><tr><td><input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="booked_by[]" id="booked_by-'+z+'"</td><td><input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="driver_name[]" id="driver_name-'+z+'"</td><td><input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="driver_number[]" id="driver_number-'+z+'"</td><td><input type="date" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="startig_date[]" id="startig_date-'+z+'"</td><td><input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="starting_km[]" id="starting_km-'+z+'"</td><td><input type="time" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="starting_time[]" id="starting_time-'+z+'"</td><td><input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="place_from[]" id="place_from-'+z+'"</td><tr><th style="text-align:center;">Advance</th><tr><td><input type="text" style="text-align:center;width:160px;background-color: #af1dba;color:#fff;" name="advance_price[]" id="advance_price-'+z+'"</td></tr><tr><td></td><td></td><td></td><td><a id="addrow-'+z+'" class="btn btn-info add-row mr-15" data-toggle="tooltip" data-original-title="Add Product"> <i class="fa fa-pencil text-inverse m-r-10"></i></a></td></tr><tr class="add_tr"></tr>');
    return false;
    });

  // <a class="btn btn-danger" onClick="deleteRow(this);" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-close "></i></a>


  function deleteRow(row){
  var i=row.parentNode.parentNode.rowIndex;
  document.getElementById('POITable').deleteRow(i);
}



$(document).on('change', '#vehicle_name-1', function()
            {
              // alert('one');

              var veh = $("#vehicle_name-1").val().split("$");
              // alert(veh);

              var vehicle_id=veh[0];
              // alert(vehicle_id);
              jQuery.ajax
              ({
                type:"post",
                url:"ajax_get_vehicle_no.php",
                dataType:"html", // Data type, HTML, json etc.
                data:{vehicle_id:vehicle_id},
                success:function(response)
                {
                  // alert(response);
                 // var abc = json_decode(response);
                  //alert(response);vehicle_no
                 //document.getElementById("vehicle_no").innerHTML=response;
                 $('#vehicle_no-1').html(response);
                 // alert(response);
                }
              });
            });

  $(document).on('change','#party_name-1',function()
  {
    var partyname=$('#party_name-1').val();
    $('#report_at-1').val(partyname);
  })


</script>
</body>
</html>
