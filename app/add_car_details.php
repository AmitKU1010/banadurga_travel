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
  <!--strat insert query -->
  <?php 
  if(isset($_POST['submit']))
  {
    $vehicle_no=$_POST['vehicle_no'];
    $owner_name=$_POST['owner_name'];
    $contact_no=$_POST['contact_no'];
    $owner_address=$_POST['owner_address'];
    $email=$_POST['email'];
    $option = explode("$", $_POST['vehicle_name']);
    $vehicle_id = $option[0];
    $vehicle_name = $option[1];
    $size = $option[2];

    $sqltwo="INSERT INTO `car_details`(`vehicle_no`, `vehicle_id`, `vehicle_name`, `owner_name`, `owner_contact_no`, `owner_address`, `owner_email`) 
    VALUES ('$vehicle_no','$vehicle_id','$vehicle_name','$owner_name',
     '$contact_no','$owner_address','$email')";
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
  ?>
  <!--end insert query -->


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
      <h6 align="center" class="txt-dark" style="font-size:15px;" >
        <i class="zmdi zmdi-account mr-10"></i>Vehicle"s Info
      </h6>
      <hr class="light-grey-hr"/>
      </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form method="post">
               <!-- row start -->
               <div class="row">
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    <label class="control-label mb-10">Vehicle Name</label>
                    
                  <select  name="vehicle_name" class="form-control" >
                    <?php 
                    $sql="SELECT * FROM car";
                    $run=mysqli_query($conn,$sql);
                   while($fetch=mysqli_fetch_assoc($run))
                     {
                      ?>
              <option value="<?php echo $fetch['id']."$".$fetch['vehicle_name']."$".$fetch['size'];?>">
                 <?php echo $fetch['vehicle_name']; ?>   </option>
                      <?php } ?>
              </select>
               <span class="help-block"></span>
               </div>
               </div>

               <div class="col-md-6">
          <div class="form-group">
            <label class="control-label mb-10">
             Vehicle No
             </label>
             <input type="text" name="vehicle_no" id="vehicle_no" class="form-control"  placeholder="Vehicle Number">
            <span class="help-block"> </span>
          </div>
         </div>
        </div>
            <!-- row End -->

               <!-- row start -->
                         <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Owner Name</label>
                                    <input type="text" name="owner_name" id="owner_name" class="form-control"  placeholder="Owner Name">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Owner Contact No</label>
                                    <input type="text" name="contact_no"  class="form-control"  placeholder="Contact No">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                               </div>
                               <!-- Row end -->



                               <!-- Row Start -->
                               <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Owner Address</label>
                                    <input type="text"  name="owner_address"   class="form-control" placeholder="Owner Address">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Owner Email</label>
                                    <input type='text' name="email" class="form-control"  placeholder="Enter email" />
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
              <table id="example" class="table table-bordered">
                <thead>
                   <tr>
                              <th>#</th>
                              <th>Vehicle No</th>
                              <th>Vehicle Name</th>
                              
                              <th>Owner Name</th>
                              <th>Owner Contact No</th>
                              <th>Owner Email</th>
                              <th>Owner Address</th>
                              <th class="text-nowrap">Action</th>
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM car_details";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                      <td><?php echo $i;?></td>
                     <td><?php echo $row["vehicle_no"];?></td>
                      <td><?php echo $row["vehicle_name"];?></td>
                      <td><?php echo $row["owner_name"];?></td><td><?php echo $row["owner_contact_no"];?></td>
                      <td><?php echo $row["owner_email"];?></td><td><?php echo $row["owner_address"];?></td>

                      <td class="text-nowrap">
                        <a href="edit_car_details.php?eid=<?php echo $row['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_car_details.php?eid=<?php echo $row['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> </td>
                      
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
