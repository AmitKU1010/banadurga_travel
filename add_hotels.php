<?php 
  include('includes/config.php');
  // error_reporting(0);
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
    $hotel_name=$_POST['hotel_name'];
    $hotel_address=$_POST['hotel_address'];
    $h_con_no=$_POST['h_con_no'];
    $hotel_own_name=$_POST['hotel_own_name'];
    $hotel_mail_id=$_POST['hotel_mail_id'];
    $sql="INSERT INTO `hotel`(`hotel_name`,`hotel_address`,`h_con_no`,`hotel_own_name`,`hotel_mail_id`) VALUES ('$hotel_name','$hotel_address','$h_con_no','$hotel_own_name','$hotel_mail_id')";
    $run=mysqli_query($conn,$sql);
  if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
window.location ='add_hotels.php';
    </script>
    <?php
  }
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
    <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>ADD HOTEL</h6>
    <hr class="light-grey-hr"/>
    </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form  method="post">
               <!-- row start -->
               <div class="row">
                 
                 

                              </div>
                              <!-- row End -->

               <!-- row start -->
                         <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Hotel Name</label>
                                    <input type="text" name="hotel_name" id="hotel_name" required class="form-control"  placeholder="Hotel Name">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Hotel Address</label>
                                    <input type="text" name="hotel_address" id="hotel_address" class="form-control"  placeholder="Vehicle Name">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                </div>
                               <!-- Row end -->
                                <!-- row start -->
                         <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Hotel Contact Number</label>
                                    <input type="text" name="h_con_no" id="h_con_no" class="form-control"  placeholder="Hotel Contact Number">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">
                                      Hotel Owner Name
                                    </label>
                                    <input type="text" 
                                    name="hotel_own_name" 
                                    id="hotel_own_name" class="form-control"  placeholder="hotel owner name">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                </div>
                               <!-- Row end -->
                                <!-- row start -->
                         <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Hotel mail Id</label>
                                    <input type="text" name="hotel_mail_id" id="hotel_mail_id" class="form-control"  placeholder="Hotel mail id">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                            
                                </div>
                               <!-- Row end -->
                              <div class="form-actions mt-10">
                              <button type="submit" name="submit" class="btn btn-success  mr-10">Save</button>
                              <button type="reset" value="Reset" class="btn btn-default">Reset</button>
                              </div>
                                  </div>
                                  </div>
                                  </div>
                                </div>
                              </form>
        <div class="col-lg-12">
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>View Hotel  Details</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                   <tr>
                              <th>#</th>
                              <th>Hotel Name</th>
                              <th>Hotel Address</th>
                              <th>Hotel Cotact Number</th>
                              <th>Hotel Owner Name</th>
                              <th>Hotel Mail Id</th>
                              <th class="text-nowrap">Action</th>
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM hotel";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                      <td><?php echo $i;?></td>
                      <td><?php echo $row["hotel_name"];?></td>
                      <td><?php echo $row["hotel_address"];?></td>
                      <td><?php echo $row["h_con_no"];?></td>
                      <td><?php echo $row["hotel_own_name"];?></td>
                      <td><?php echo $row["hotel_mail_id"];?></td>



                      
                      
                      <td class="text-nowrap">
                        <a href="edit_hotels.php?eid=<?php echo $row['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_hotels.php?eid=<?php echo $row['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> </td>
                      
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
      </div><!-- End


                             







                               






            

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

</body>
</html>
