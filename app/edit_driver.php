<?php 
  include('includes/config.php');
  // error_reporting(0);
 $getid = $_GET['eid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>
  
</head>

<body>
<!-- Update database -->
  <?php 
  if(isset($_POST['submit']))
  {
    $emp_name=$_POST['emp_name'];
    $designation=$_POST['designation'];
    $father_name=$_POST['father_name'];
    $contact_no=$_POST['contact_no'];
    $emailid=$_POST['emailid'];
    $aadhar_cardno=$_POST['aadhar_cardno'];
    $dl_no=$_POST['dl_no'];
    $address=$_POST['address'];

$sqlone="UPDATE employee_details SET emp_name='$emp_name',emp_catagory='$designation',father_name='$father_name',contact_no='$contact_no',emailid='$emailid',aadhar_cardno='$aadhar_cardno',dl_no='$dl_no',address='$address' 
WHERE id='$getid'";
$run=mysqli_query($conn,$sqlone);
if($run==true)
  {
    ?>
    <script>
    alert('Data Updated Succesfully');
window.location ='view_driver.php';
    </script>
    <?php
  }
}
?>

<!-- Fetech data From databse -->
<?php 
$sql="SELECT * FROM `employee_details` WHERE id='$getid'";
$run=mysqli_query($conn,$sql);
$fetch=mysqli_fetch_assoc($run);
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
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Employee's Info</h6>
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
                                    <label class="control-label mb-10">Employee Name</label>
                                    <input type="text" name="emp_name" id="firstName" class="form-control"
                                    value="<?php echo $fetch['emp_name'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>

                                  <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">
                                    Designation</label>
                                    <input type="text" name="designation" id="firstName" class="form-control"
                                     value="<?php echo $fetch['emp_catagory'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>
                                </div>
                         <!-- row End -->

                         <!-- row start -->
                         <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Father Name</label>
                                    <input type="text" name="father_name" id="firstName" class="form-control"  
                                     value="<?php echo $fetch['father_name'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Contact Number</label>
                                    <input type="text"name="contact_no"  class="form-control" value="<?php echo $fetch['contact_no'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                               </div>
                               <!-- Row end -->



                               <!-- Row Start -->
                               <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Email ID</label>
                                    <input type="text"  name="emailid"   class="form-control"
                                    value="<?php echo $fetch['emailid'] ?>"
                                    >
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Date of joining </label>
                                  <input type='date' name="joining_date" class="form-control"  placeholder="Enter Date & Time" value="<?php 
                                  echo $fetch['joining_date']?>"/>
                                    <span class="help-block">  </span>
                                  </div>
                                  </div>
                                  </div>

                               <!-- Row end -->

                               <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Adhar Card Number </label>
                                    <input type="text" name="aadhar_cardno" style="text-transform:uppercase"  class="form-control"
                                     value="<?php 
                                  echo $fetch['aadhar_cardno']?>"/>
                                
                                    <span class="help-block">  </span>
                                  </div>
                                  </div>
                                  <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Driving License Number </label>
                                    <input type="text"  name="dl_no" style="text-transform:uppercase"  class="form-control"  value="<?php 
                                  echo $fetch['dl_no']?>"
                                    <span class="help-block">  </span>
                               </div>
                               </div>
                               </div>


                               <!-- Row end -->


                               <!-- Row Start -->
                               <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Address</label>
                                    <input type="text"  name="address"   class="form-control" value="<?php 
                                  echo $fetch['address']?>"
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
                                  </div>
                                  </div>
                                </div>
                              </form>







                               






            

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
</script>
</body>
</html>
