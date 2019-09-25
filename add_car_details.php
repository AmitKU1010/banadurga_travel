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
  if(isset($_POST['submit']))
  {
    $vehicle_no=$_POST['vehicle_no'];
    $doj=$_POST['doj'];
    // $condition_type=$_POST['condition_type'];
    $color=$_POST['color'];
    // $fuel=$_POST['fuel'];
    $owner_name=$_POST['owner_name'];
    $address=$_POST['address'];
    
    $option = explode("$", $_POST['vehicle_name']);
    $vehicle_id = $option[0];
    $vehicle_name=$option[1];


    $duplicate="SELECT * FROM vehicle_details WHERE vehicle_no='$vehicle_no'";
    $run_duplicate=mysqli_query($conn,$duplicate);
    $checkrows=mysqli_num_rows($run_duplicate);

    if($checkrows>0)
{
  ?>
  
   <script>

    alert('Vehicle Already Exist');
window.location ='add_car_details.php';
    </script>
    <?php
}

else
{
   $sqltwo="INSERT INTO `vehicle_details`(`vehicle_id`,`vehicle_name`,`vehicle_no`,`doj`,`color`,`owner_name`, `address`) 
    VALUES ('$vehicle_id','$vehicle_name','$vehicle_no','$doj','$color','$owner_name','$address')";

     $run=mysqli_query($conn,$sqltwo);

     if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
window.location ='add_car_details.php';
    </script>
    <?php
  }
}

}

  ?>
  <!--end insert query car details -->
 
 <div id="wrapper">

<?php include('includes/sidebar.php')?>
<!--Start topbar header-->
<?php include('includes/topnav.php')?>
<!--End topbar header-->

<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="form-body">
      <h6 align="center" class="txt-dark" style="font-size:15px;" >
        <i class="zmdi zmdi-account mr-10"></i>Add Car
      </h6>
      <hr class="light-grey-hr"/>
      </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form method="post" action="ajax_add_car.php">
                         <div class="row">
                              <div class="col-md-2">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Car Name</label>
                                    <input type="text" name="vehicle_name" id="vehicle_name" class="form-control"  placeholder="Vehicle Name" maxlength="8">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                
                                </div>

                                <div class="form-actions mt-10">
                              <button type="submit" name="submit_car" class="btn btn-success  mr-10">Save</button>
                              <button type="reset" value="Reset" class="btn btn-default">Reset</button>
                              </div>
                               </div>
                               <!-- Row end -->
                                </div>
                              </form>






        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>View Available Car</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example1" border="7" style="border-color: blue;" width="30%">
                <thead>
                   <tr>
                              <th style="text-align: center;" class="text-nowrap">Action</th>

                              <th style="text-align: center;">#</th>
                              <th style="text-align: center;">VEHICLE NAME</th>
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM car";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                       <td  style="text-align:center;width:80px;background-color: black;color:#fff;" width="5" class="text-nowrap">
                        <a href="edit_car.php?id=<?php echo $row['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_car.php?id=<?php echo $row['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> </td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5" ><?php echo $i;?></td>
                     <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5" ><?php echo $row["vehicle_name"];?></td>
                     
                     
                      
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

        <div class="form-body">
      <h6 align="center" class="txt-dark" style="font-size:15px;" >
        <i class="zmdi zmdi-account mr-10"></i>Add Car Details
      </h6>
      <hr class="light-grey-hr"/>
      </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form method="post">
               
                         <div class="row">
                              <div class="col-md-2">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Vehicle Name</label>
                                      
                  <select  name="vehicle_name" class="form-control" >
                    <?php 
                    $sql="SELECT * FROM car";
                    $run=mysqli_query($conn,$sql);
                   while($fetch=mysqli_fetch_assoc($run))
                     {
                      ?>
              <option value="<?php echo $fetch['id']."$".$fetch['vehicle_name'];?>">
                 <?php echo $fetch['vehicle_name']; ?>   </option>
                      <?php } ?>
              </select>
                                     
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Vehicle Number</label>
                                    <input type="text" name="vehicle_no"  class="form-control"  placeholder="Enter vehicle_Number"  maxlength="14">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                              
                                <!-- <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Date Of Joining</label>
                                    <input type="text"  name="doj"   class="form-control" placeholder="Date Of Joining">
                                    <span class="help-block">  </span>
                                  </div>
                                </div> -->
                                 <!--  <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Condition</label>
                                    <select class="form-control" name="condition_type">
                                      <option>AC</option>
                                      <option>NON-AC</option>

                                    </select>
                                    <span class="help-block">  </span>
                                  </div>
                                  </div>
                               

                                  <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Fuel</label>
                                   <select class="form-control" name="fuel"> 
                                     <option>Disel</option>
                                     <option>Petrol</option>
                                   </select>
                                    <span class="help-block">  </span>
                                  </div>
                                  </div>
 -->
                                  <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Owner Name</label>
                                    <input type='text' name="owner_name" class="form-control"  placeholder="Enter owner_name" />
                                    <span class="help-block">  </span>
                                  </div>
                                  </div>

                                   <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Owner Con. No</label>
                                    <input type='text' name="color" class="form-control"  placeholder="Enter Number "  maxlength="10" />
                                    <span class="help-block">  </span>
                                  </div>
                                  </div>

                                  <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Adress</label>
                                    <input type='text' name="address" class="form-control"  placeholder="Enter Adress" />
                                    <span class="help-block">  </span>
                                  </div>
                                  </div>
                               </div>
                               <!-- Row end -->
                                <div class="form-actions mt-10">
                              <button type="submit" name="submit" class="btn btn-success  mr-10">Save</button>
                              <button type="reset" value="Reset" class="btn btn-default">Reset</button>
                              </div>
                               </div>
                               <!-- Row end -->
                                </div>
                              </form>

       <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>CAR DETAILS</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" border="7" style="border-color: blue;">
                <thead>
                   <tr>     
                              <th style="text-align: center" class="text-nowrap">Action</th>
                              <th style="text-align: center">#</th>
                              <th style="text-align: center">V.N</th>
                              <th style="text-align: center">V.N0</th>
                              <!-- <th style="text-align: center">Condition</th> -->
                              <th style="text-align: center">Owner No.</th>
                              <!-- <th style="text-align: center">Fuel</th> -->
                               <th style="text-align: center">Owner Name</th>
                              <th style="text-align: center">Add</th>
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM vehicle_details";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                      <td  style="text-align:center;width:80px;background-color: black;color:#fff;" width="5" class="text-nowrap">
                        <a href="edit_car_details.php?eid=<?php echo $row['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_car_details.php?eid=<?php echo $row['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> </td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $i;?></td>
                     <td  style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["vehicle_name"];?></td>
                      <td  style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["vehicle_no"];?></td>
                      
                       <td  style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["color"];?></td>

                       <!--  <td  style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["owner_no"];?></td> -->
                      
                      <td  style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["owner_name"];?></td>
                      <td  style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["address"];?></td>
                      
                      
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
<!-- <script>
  
$(document).on('blur','#other',function(){
      var basic = $('#basic').val();
      var hra = $('#hra').val();
      var da = $('#da').val();
      var other = $('#other').val();
      var amount = parseInt(basic) + parseInt(hra) + parseInt(da) + parseInt(other);
      $('#gross').val(amount);
      var epf = $('#epf').val();
      var esic = $('#esic').val();
      var net = parseInt(amount) - (parseInt(epf) + parseInt(esic));
      $('#amount').val(net);
    });
</script> -->
</body>
</html>
