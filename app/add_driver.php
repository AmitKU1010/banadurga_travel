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
                              <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Employee's Info</h6>
                              <hr class="light-grey-hr"/>
                            </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form action="ajax_submit_driver_details.php" method="post">
               <!-- row start -->
               <div class="row">
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    <label class="control-label mb-10">Employee Categogry</label>

                  <select name="emp_catagory" class="form-control" >
                      <option value="driver">Driver</option>
                      <option value="employee">Employee</option>
                  </select>
               <span class="help-block"></span>
               </div>
               </div>

               <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Employee Name</label>
                                    <input type="text" name="emp_name" id="firstName" class="form-control"  placeholder="Employee's Name">
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
                                    <input type="text" name="father_name" id="firstName" class="form-control"  placeholder="Father's Name">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Contact Number</label>
                                    <input type="text"name="contact_no"  class="form-control"  placeholder="Contact No">
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
                                    <input type="text"  name="emailid"   class="form-control" placeholder="Enter your Email">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Date Of Birth </label>
                                    <input type='date' name="birth_date" class="form-control"  placeholder="Enter Date & Time" value="<?php echo date('Y-m-d'); ?>"/>
                                    <span class="help-block">  </span>
                                  </div>
                                  </div>
                               </div>
                               <!-- Row end -->

                               <!-- Row Start -->
                               <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Date of joining </label>
                                  <input type='date' name="joining_date" class="form-control"  placeholder="Enter Date & Time" value="<?php echo date('Y-m-d'); ?>"/>
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Adhar Card Number </label>
                                    <input type="text" name="aadhar_cardno" style="text-transform:uppercase"  class="form-control"
                                     placeholder="Enter Your Adhar Number">
                                
                                    <span class="help-block">  </span>
                                  </div>
                                  </div>
                               </div>

                               <!-- Row end -->


                               <!-- Row Start -->
                               <div class="row">
                                 <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Driving License Number </label>
                                    <input type="text"  name="dl_no" style="text-transform:uppercase"  class="form-control"  placeholder="Enter Driving License Number">
                                    <span class="help-block">  </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Address</label>
                                    <textarea type="text"  name="address"   class="form-control" placeholder="Enter your Address"></textarea>
                                    <span class="help-block">  </span>
                                  </div>
                                </div>
                              </div>
                                <div class="form-actions mt-10">
                              <button type="submit" name="submit" class="btn btn-success  mr-10">Save</button>
                              <button type="reset" value="Reset" class="btn btn-default">Reset</button>
                              </div>
                               </div>
                               <!-- Row end -->
                              
                           

                               <!-- Part end -->
                               <!-- Separtae Block Start-->
                               <!-- <div class="col-lg-12">
                               <div class="card">
                              <div class="card-body">

                               <div class="seprator-block">
                               </div>
                              <h6 class="txt-dark capitalize-font" align="center"><i class="zmdi zmdi-account-box mr-10"></i>Salary Breakup</h6>
                              <hr class="light-grey-hr"/>

                               <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Basic</label>
                                    <input type="text" name="basic" id="basic" class="form-control"  placeholder="Basic Salary" value="0">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">EPF</label>
                                    <input type="text"  id="epf" name="epf"  class="form-control"  placeholder="Employee Provident Fund" value="0">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">ESIC</label>
                                    <input type="text" id="esic" name="esic" class="form-control"  placeholder="ESIC" value="0">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">HRA</label>
                                    <input type="text" id="hra"  name="hra"  class="form-control"  placeholder="House Rent Allowance" value="0">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                              </div>
                               <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">DA</label>
                                    <input type="text" id="da"  name="da"  class="form-control"  placeholder="DA" value="0">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label mb-10">Other Allowance</label>
                                  <input type="text" id="other" name="other" class="form-control"  placeholder="Other Allowance" value="0">
                                  <span class="help-block"> </span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label mb-10">Gross Salary</label>
                                  <input type="text" id="gross" name="gross" class="form-control"  placeholder="Other Allowance" readonly >
                                  <span class="help-block"> Gross Salary = Basic + HRA + DA + Others</span>
                                </div>
                              </div>
                               <div class="col-md-6">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Net Salary </label>
                                    <input type="text"  name="amount" id="amount" class="form-control"  placeholder="Salary to be paid" readonly >
                                    <span class="help-block"> Net Salary = Gross Salary - (EPF + ESIC) </span>
                                  </div>
                                </div> -->
                                </div>
                              </form>
                              <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Urban Local Bodies (ULB) DETAILS</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                   <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Designation</th>
                              
                              <th>Father Name</th>
                              <th>Contact No</th>
                              <th>Email</th>
                              
                              <th>joining</th>
                              <th>Adhar No</th>
                              <th>D.L No</th>
                              <th>Address</th>
                              <th class="text-nowrap">Action</th>
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM employee_details";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                      <td><?php echo $i;?></td>
                      <td><?php echo $row["emp_name"];?></td>
                      <td><?php echo $row["emp_catagory"];?></td>
                      <td><?php echo $row["father_name"];?></td>
                      <td><?php echo $row["contact_no"];?></td>
                      <td><?php echo $row["emailid"];?></td>
                      <td><?php echo $row["joining_date"];?></td><td><?php echo $row["aadhar_cardno"];?></td>
                      <td><?php echo $row["dl_no"];?></td><td><?php echo $row["address"];?></td>
                      <td class="text-nowrap">
                        <a href="edit_driver.php?eid=<?php echo $row['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_driver.php?eid=<?php echo $row['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> </td>
                      
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
