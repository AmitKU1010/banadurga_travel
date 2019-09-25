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

    echo $crname=$_POST['crname'];
    $phone=$_POST['phone'];

    $craddress=$_POST['craddress'];
    $enail=$_POST['enail'];
    $cgn=$_POST['cgn'];
    $sqltwo="INSERT INTO aacorporatef(name,phone,email,cgn,address) 
    VALUES ('$crname','$phone','$enail','$cgn',
     '$craddress')";
     $run=mysqli_query($conn,$sqltwo);

     if($run==true)
  {
    ?>
    <script>
    alert('Data Added Succesfully');
// window.location ='add_corporate.php';
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
        <i class="zmdi zmdi-account mr-10"></i>Add Corporate
      </h6>
      <hr class="light-grey-hr"/>
      </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10">Corporate Name</label>
                      <input type="text" name="crname" id="crname" class="form-control" placeholder="Corporate Name" >
                      <span class="help-block"> </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10">Corporate Address</label>
                      <input type="text" name="craddress" id="craddress" class="form-control" placeholder="Corporate Address" >
                      <span class="help-block"> </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10">Corporate Phone no</label>
                      <input type="text" name="phone" id="crphone" class="form-control" placeholder="Corporate Phone no"  maxlength="10">
                      <span class="help-block"> </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10">Corporate Email id</label>
                      <input type="text" name="enail" id="creamail" class="form-control" placeholder="Corporate Email id" >
                      <span class="help-block"> </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label mb-10">Corporate GST No.</label>
                      <input type="text" name="cgn" id="cgn" class="form-control" placeholder="Corporate gst no" >
                      <span class="help-block"> </span>
                    </div>
                  </div>
                  </div>

               
              
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
            <div class="card-header"><i class="fa fa-table"></i>CORPORATE DETAILS</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                   <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Phone No</th>
                              <th>Email Id</th>
                              

                              <th>Address</th>
                              <th>Corporate GstNo.</th>
                              <th class="text-nowrap">Action</th>
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM aacorporate";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                      <td><?php echo $i;?></td>
                              <td><?php echo $row['name'];?></td>
                              <td><?php echo $row['phone'];?></td>
                              
                              <td><?php echo $row['email'];?></td>
                              <td><?php echo $row['address'];?></td>
                              <td><?php echo $row['cgn'];?></td>

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
