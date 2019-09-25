<?php 
  include('includes/config.php');
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>

  
</head>

<body>
  <?php 
  if(isset($_GET['cos_name']))
  {
  $cos_name=$_POST['cos_name'];

  }

  ?>

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
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Add Charges(Corporate)</h6>
                              <hr class="light-grey-hr"/>
                            </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form method="post" id="myform">
               <!-- row start -->
               <table>
                <tr>
                  <td>
              
                    <label class="control-label mb-10">Customer Name</label>
                    
                  <select  name="cos_name" id="cos_name" class="form-control" >
                    <?php 
                    $sql="SELECT * FROM add_corporate";
                    $run=mysqli_query($conn,$sql);
                   while($fetch=mysqli_fetch_assoc($run))
                     {
                      ?>
              <option value="<?php echo $fetch['id']."$".$fetch['cos_name']?>">
                 <?php echo $fetch['cos_name']; ?>   </option>
                      <?php } ?>
              </select>
               <span class="help-block"></span>
              
               </td>

               </tr>

               <tr>
                           <td>

                            
                                    <label class="control-label mb-10">Long</label>
                                    <input type="text"  maxlength="50" name="long" id="long" class="form-control"  value="long" readonly>
                                    <span class="help-block"> </span>
                                
                                </td>

                                 <td>
                
                                    <label class="control-label mb-10">N.H chg</label>
                                    <input type="text"  maxlength="50" name="night_holt_charge_long"
                                    id="night_holt_charge_long"  class="form-control"  placeholder="Price For Night Holt" required>
                                    <span class="help-block"> </span>
                                

                              </td>

                              <td>
                                
                                    <label class="control-label mb-10">price/km</label>
                                    <input type='text' name="price_per_km" id="price_per_km" class="form-control"  placeholder="price/kilometer" required>
                                    <span class="help-block">  </span>
                                 
                                </td>

                                 <td>
                           
                                    <label class="control-label mb-10">Det.chg</label>
                                    <input type='text' name="detaintion_charges" id="detaintion_charges" class="form-control"  placeholder="Detaintion Charges" required>
                                    <span class="help-block">  </span>
                                </td>
                                <td>
                                  
                                <button type="button" class="btn btn-info" id="onelong">CLICK ME!</button>
                                  
                                </td>


                              </tr>
<!-- hggggggggggggggggggggggggggggggggggggggggggfddddddddddsfsdfsdfdasf -->
                              <tr>



                                <td>

                            
                                    <label class="control-label mb-10">Day basic</label>
                                    <input type="text"  maxlength="50" name="daybasic" id="daybasic" class="form-control"  value="daybasic" required readonly>
                                    <span class="help-block"> </span>
                                
                                </td>

                                <td>
                              
                                    <label class="control-label mb-10">Day Chg</label>
                                    <input type="text"  maxlength="50" name="day_charge" id="day_charge" class="form-control"  placeholder="Day charge" required>
                                   
                                </td>

                                 <td>
                
                                    <label class="control-label mb-10">N.H chg</label>
                                    <input type="text"  maxlength="50" name="night_holt_charge" id="night_holt_charge"  class="form-control"  placeholder="Price For Night Holt" required>
                                    <span class="help-block"> </span>
                                

                              </td>

                               

                              <td>                      
                                    <label class="control-label mb-10">K.MCov/lit </label>
                                    <input type="text"  name="km_cover_in_one_litre"  id="km_cover_in_one_litre" class="form-control" placeholder="Enter Distance in km" required>
                                    <span class="help-block">  </span>
                                </td>

                                 <td>
                               
                                   <label class="control-label mb-10">Ex.hr chg</label>
                                    <input type="text" name="extra_hour_charges" id="extra_hour_charges" class="form-control" placeholder="Extra Hour" required>
                                    <span class="help-block"> </span>
                                 
                                </td>


                                <td>
                                
                                   <label class="control-label mb-10">Ex.K.Mchg</label>
                                    <input type="text" name="extra_km_charges" id="extra_km_charges" class="form-control" placeholder="Extra Hour" required>
                                    <span class="help-block"> </span>
                                </td>

                                 <td>
                                <button type="button" class="btn btn-info" id="twodaybasic">CLICK ME</button>
                                  
                                </td>
<!-- hbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->
                                <tr>
                                <td>
                                 
                                    <label class="control-label mb-10">Fixed</label>
                                    <input type="text"  name="fixed" value="fixed"  id="fixed" class="form-control" placeholder="Enter Distance in km" readonly required>
                                    <span class="help-block">  </span>
                                
                                </td>

                                <td>
                                 
                                    <label class="control-label mb-10">Fixed.pr</label>
                                    <input type="text"  name="fixed_price"  id="fixed_price" class="form-control" placeholder="Enter Distance in km" required>
                                    <span class="help-block">  </span>
                                
                                </td>
                                 <td>
                                <button type="button" class="btn btn-info" id="threefixed">CLICK ME</button>
                                  
                                </td>
                              </tr>
                                </table>
                              </form>
                            </div>
                            </div>

                              <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>View Car Charges(Customer)</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" border="7" style="border-color: blue;">
                <thead>
                   <tr>       
                              <th style="text-align: center" class="text-nowrap">Action</th>
                              <th style="text-align: center">#</th>
                              <th style="text-align: center">C.N</th>
                              <th style="text-align: center">CHG TYP</th>
                              <th style="text-align: center">D.C</th>
                              <th style="text-align: center">N.H.C</th>

                              
                              <th style="text-align: center">K.M COV.</th>
                              <th style="text-align: center">FIX PR.</th>
                              <th style="text-align: center">X. HR CH</th>
                              
                              <th style="text-align: center">X K.M CH</th>
                              <th style="text-align: center">PR/K.M</th>
                              <th style="text-align: center">DTN CH</th>
                             
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM corporate_charges order by cos_name";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                      <td style="text-align:center;width:80px;background-color: black;color:#fff;" class="text-nowrap">
                        <a href="edit_charges_corporet.php?eid=<?php echo $row['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_charges_corporet.php?eid=<?php echo $row['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> </td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $i;?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $row["cos_name"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $row["charging_type"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $row["day_charge"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $row["night_holt_charge"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $row["km_cover_in_one_litre"];?></td>

                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $row["fixed_price"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $row["extra_hour_charges"];?>
                      </td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $row["extra_km_charges"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $row["price_per_km"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"><?php echo $row["detaintion_charges"];?></td>
                        <?php
                        $i++;
                          echo "</tr>";
                        }
                      ?>
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

  $("#cos_name").change(function()
 {
var night_holt_charge_long=$("#night_holt_charge_long").val('');

var price_per_km=$("#price_per_km").val('');

var detaintion_charges=$("#detaintion_charges").val('');

 var day_charge=$("#day_charge").val('');

var night_holt_charge=$("#night_holt_charge").val('');

var km_cover_in_one_litre=$("#km_cover_in_one_litre").val('');

var extra_hour_charges=$("#extra_hour_charges").val('');

var extra_km_charges=$("#extra_km_charges").val('');

var fixed_price=$("#fixed_price").val('');



 

 });

 $("#onelong").click(function()
 {
   
   // var vehicle_name=$('#vehicle_name').val();

   // var separate=vehicle_name
   // alert(vehicle_name);

var veh = $("#cos_name").val().split("$");
// alert(veh);

var cos_id=veh[0];
var cos_name=veh[1];

var long=$("#long").val();
 // alert(long);

var night_holt_charge_long=$("#night_holt_charge_long").val();
// alert(night_holt_charge_long);

var price_per_km=$("#price_per_km").val();
// alert(price_per_km);


var detaintion_charges=$("#detaintion_charges").val();
// alert(detaintion_charges);

var temp=0;

if(night_holt_charge_long=='')
{
  temp=1;
   alert('WHAT YOU ARE DOING??PLEASE INSERT SOME VALUE');
}

          else
          {
           $.ajax({
                type:"post",
                url:"ajax_insert_corporate_long.php",
                dataType:"html", // Data type, HTML, json etc.
                data:{cos_id:cos_id,cos_name:cos_name,long:long,night_holt_charge_long:night_holt_charge_long,price_per_km:price_per_km,detaintion_charges:detaintion_charges},

                 success:function()
              {
                alert("Data Saved");
                // $("#myform")[0].reset();
               }

               });
            }

           });


 $("#twodaybasic").click(function()
 {
var veh = $("#cos_name").val().split("$");
// alert(veh);

var cos_id=veh[0];
var cos_name=veh[1];

var daybasic=$("#daybasic").val();
 // alert(long);

 var day_charge=$("#day_charge").val();
// alert(price_per_km);

var night_holt_charge=$("#night_holt_charge").val();
// alert(night_holt_charge);




var km_cover_in_one_litre=$("#km_cover_in_one_litre").val();
// alert(detaintion_charges);

var extra_hour_charges=$("#extra_hour_charges").val();

var extra_km_charges=$("#extra_km_charges").val();


var temp=0;

if(night_holt_charge=='')
{
  temp=1;
   alert('WHAT YOU ARE DOING??PLEASE INSERT SOME VALUE');
}


// alert(vehicle_id);
// alert(vehicle_name);
else
{

           $.ajax({
                type:"post",
                url:"ajax_insert_corporet_daybasic.php",
                dataType:"html", // Data type, HTML, json etc.
                data:{cos_id:cos_id,cos_name:cos_name,daybasic:daybasic,day_charge:day_charge,night_holt_charge:night_holt_charge,km_cover_in_one_litre:km_cover_in_one_litre,extra_hour_charges:extra_hour_charges,extra_km_charges:extra_km_charges},

                 success:function()
              {
                alert("Data Save");
                // $("#myform")[0].reset();
               }

               });
         }
           });



$("#threefixed").click(function()
 {
   // alert("djdkjhcf");
var veh = $("#cos_name").val().split("$");
// alert(veh);

var cos_id=veh[0];
var cos_name=veh[1];

var fixed=$("#fixed").val();

var fixed_price=$("#fixed_price").val();

if(fixed_price=='')
{
  temp=1;
   alert('WHAT YOU ARE DOING??PLEASE INSERT SOME VALUE');
}


          else
          {

           $.ajax({
                type:"post",
                url:"ajax_insert_corporet_charges_fixes.php",
                dataType:"html", // Data type, HTML, json etc.
                data:{cos_id:cos_id,cos_name:cos_name,fixed:fixed,fixed_price:fixed_price},
                 success:function()
              {
                alert("Data Save");
                $("#myform")[0].reset();
               }

               });
         }
           });

 



              
</script>
</body>
</html>
