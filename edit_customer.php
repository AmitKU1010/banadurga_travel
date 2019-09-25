<?php 
  include('includes/config.php');
  // error_reporting(0);
 $getid = $_GET['id'];
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
    $cos_name = $_POST['cos_name'];
    $cos_adress = $_POST['cos_adress'];
    $cos_number = $_POST['cos_number'];
    $cos_email = $_POST['cos_email'];
    $cos_gst = $_POST['cos_gst'];

$sqlone="UPDATE coustomer SET cos_name='$cos_name',cos_adress='$cos_adress',cos_number='$cos_number',cos_email='$cos_email',cos_gst='$cos_gst' WHERE id='$getid'";
$run=mysqli_query($conn,$sqlone);
if($run==true)
  {
    ?>
    <script>
    alert('Data Updated Succesfully');
    window.location ='add_customer.php';
    </script>
    <?php
  }
}
?>

<!-- Fetech data From databse -->
<?php 
$sql="SELECT * FROM `coustomer` WHERE id='$getid'";
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
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Employees Information</h6>
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
                                    <label class="control-label mb-10">Customer Name</label>
                                    <input type="text" name="cos_name" id="cos_name" class="form-control"
                                    value="<?php echo $fetch['cos_name'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>

                                  <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">
                                    Customer Address</label>
                                    <input type="text" name="cos_adress" id="cos_adress" class="form-control"
                                     value="<?php echo $fetch['cos_adress'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>
                                </div>
                         <!-- row End -->

                         <!-- row start -->
                         <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Phone Number</label>
                                    <input type="text" name="cos_number" id="cos_number" class="form-control"  
                                     value="<?php echo $fetch['cos_number'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Email Id</label>
                                    <input type="text" name="cos_email" id="cos_email" class="form-control"  
                                     value="<?php echo $fetch['cos_email'] ?>">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">GST Number</label>
                                    <input type="text"name="cos_gst"  class="form-control" value="<?php echo $fetch['cos_gst'] ?>">
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
