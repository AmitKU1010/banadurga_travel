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
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Add Coustomer</h6>
                              <hr class="light-grey-hr"/>
                            </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form action="submit_corporate.php" method="post">
               <!-- row start -->
                  <div class="row">
                              <div class="col-md-2">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Customer Name</label>
                                    <input type="text" name="cos_name" id="cos_name" class="form-control"  placeholder="Customer Name">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Address</label>
                                    <input type="text"name="cos_adress" id="cos_adress"  class="form-control"  placeholder="Coustomer Adress">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Phone Number</label>
                                    <input type="text"  name="cos_number"   class="form-control" placeholder="Phone Number">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                 <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Email Id</label>
                                 <input type="text"  name="cos_email"   class="form-control" placeholder="Email Id">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">GST Number</label>
                                    <input type="text"  name="cos_gst"   class="form-control" placeholder="Gst Number">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                </div>

               <!-- row end -->
                              
                                <div class="form-actions mt-10">
                              <button type="submit" name="submit" class="btn btn-success  mr-10">Save</button>
                              <button type="reset" value="Reset" class="btn btn-default">Reset</button>
                              </div>
                               </div>
                                </div>
                              </form>
                              <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>Customer Details</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" border="7" style="border-color: blue;">
                <thead>
                   <tr>
                              <th style="text-align: center" class="text-nowrap">Action</th>
                              <th style="text-align: center">#</th>
                              <th style="text-align: center">Customer Name</th>
                              <th style="text-align: center">Customer Adress</th>
                              
                              <th style="text-align: center">Phone Number</th>
                              <th style="text-align: center">Email Id</th>
                              <th style="text-align: center">GST Number</th>
                              
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM add_corporate";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                      <td style="text-align:center;width:80px;background-color: black;color:#fff;" width="5" class="text-nowrap">
                        <a href="edit_corporet.php?id=<?php echo $row['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_corpo.php?eid=<?php echo $row['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> </td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $i;?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["cos_name"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["cos_adress"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["cos_number"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["cos_email"];?></td>
                      <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $row["cos_gst"];?></td>
                    
                      
                      
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
