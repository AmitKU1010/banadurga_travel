<?php 
  include('includes/config.php');
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
      <button type="button" class="btn btn-lg btn-info waves-effect waves-light" data-toggle="modal" data-target="#modal-animation-14">ADD EMPLOYEE</button>

      <!-- Model btn end -->
      <!-- Model Start -->
      <div class="modal fade" id="modal-animation-14">
        <div class="modal-dialog">
          <div class="modal-content animated fadeInUp">
            <div class="modal-header">
              <h5 class="modal-title">ADD EMPLOYEE DETAILS</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-lg-12">
                <div class="card">
                   <div class="card-body">
                    <form action="emp-action.php" method="post">
                   <div class="form-group">
                    <label for="">Employee Name </label>
                    <input type="text" class="form-control form-control-rounded" id="" name="emp_name" placeholder="Enter Employee Name ">
                   </div>
                     <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control form-control-rounded" id="" name="adress" placeholder="Address">
                   </div>
                   <div class="form-group">
                    <label for="">Contact Number </label>
                    <input type="number" class="form-control form-control-rounded" id="" name="contact_no" placeholder="Contact Number ">
                   </div>
                   <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control form-control-rounded" id="" name="email" placeholder="Email">
                   </div>
                   <div class="form-group">
                    <label for="">Aadhar Number</label>
                    <input type="text" class="form-control form-control-rounded" id="" name="adhaar_no" placeholder="Aadhar Number">
                   </div>
                   <div class="form-group">
                    <label for="">Pan Number</label>
                    <input type="text" class="form-control form-control-rounded" id="" name="pan_no" placeholder="Pan Number">
                   </div>
                   <div class="form-group">
                    <label for="">Designation</label>
                    <input type="text" class="form-control form-control-rounded" id="" name="designation" placeholder="Designation">
                   </div>
                   <div class="form-group">
                    <label for="">Role</label>
                     <select name="role" id="" class="form-control form-control-rounded" onChange="get_customer_details()">
                      <option value="">-Select-</option>
                      <option value="">Site Incharge </option>
                      <option value="">Contractor</option>
                    </select>
                   </div>                  
                 </div>
                 </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
              <button name="submit" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Save changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Model End -->

      <div class="clearfix"></div>
      <br>
      <!-- Table Start -->

      <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">EMPLOYEE DETAILS</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">SL NO.</th>
                      <th scope="col">EMPLOYEE ID</th>
                      <th scope="col">EMPLOYEE NAME</th>
                      <th scope="col">ADDRESS</th>
                      <th scope="col">CONTACT NUMBER</th>
                      <th scope="col">EMAIL</th>
                      <th scope="col">AADHAR NUMBER</th>
                      <th scope="col">PAN NUMBER</th>
                      <th scope="col">DESIGNATION</th>
                      <th scope="col">ROLE</th>
                      <th scope="col" colspan="2">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
          <?php

          $sql = "SELECT * FROM employee";
          $result = $conn->query($sql);
            $i = 1;
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                 
          ?>
          <td><?php echo $i;?></td>
          <td><?php echo $row["emp_id"];?></td>
          <td><?php echo $row["emp_name"];?></td>
          <td><?php echo $row["adress"];?></td>
          <td><?php echo $row["contact_no"];?></td>
          <td><?php echo $row["email"];?></td>
          <td><?php echo $row["adhaar_no"];?></td>
          <td><?php echo $row["pan_no"];?></td>        
          <td><?php echo $row["designation"];?></td>
          <td><?php if( $row["role"] ==1)
                {
                  echo "Site Incharge";
                }
                else 
                {
                  echo "Contractor";
                }
          ?></td>
          <td width="25%" style="height: 30px">
            <button title="Edit" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $row["id"];?>"><i class="fa fa-edit"></i></button>
            <div class="container">
              <!-- Trigger the modal with a button -->
              <!-- Modal -->
              <div class="modal fade" id="myModal<?php echo $row["id"];?>" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Edit Employee</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form action="emp-action.php" method="post">
                        <div class="row">
                          <div class="col-sm-12">
                                <div class="col-sm-12">
                                  <div class="form-group">
                                    <label for="">Employee Name</label>
                                    <input type="text" class="form-control form-control-rounded" id="" name="emp_name" value="<?php echo $row['emp_name']; ?>">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                   </div>
                                 </div>

                                  <div class="col-sm-12">
                                    <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control form-control-rounded" id="" name="adress" value="<?php echo $row['adress']; ?>">
                                    </div>
                                 </div>

                                 <div class="col-sm-12">
                                    <div class="form-group">
                                    <label for="">Contact Number </label>
                                    <input type="text" class="form-control form-control-rounded" id="" name="contact_no" value="<?php echo $row['contact_no']; ?>">
                                    </div>
                                 </div>

                                  <div class="col-sm-12">
                                    <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control form-control-rounded" id="" name="email" value="<?php echo $row['email']; ?>">
                                    </div>
                                </div>
                          </div>
                          <div class="col-sm-12">
                           
                                 <div class="col-sm-12">
                                    <div class="form-group">
                                    <label for="">Aadhar Number</label>
                                    <input type="text" class="form-control form-control-rounded" id="" name="adhaar_no" value="<?php echo $row['adhaar_no']; ?>">
                                    </div>
                                 </div>

                                  <div class="col-sm-12">
                                    <div class="form-group">
                                    <label for="">Pan Number</label>
                                    <input type="text" class="form-control form-control-rounded" id="" name="pan_no" value="<?php echo $row['pan_no']; ?>">
                                    </div>
                                 </div>
                          
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <label for="">Designation</label>
                                    <input type="text" class="form-control form-control-rounded" id="" name="designation" value="<?php echo $row['designation']; ?>">
                                    </div>
                                 </div>

                                 <div class="col-sm-12">
                                    <div class="form-group">
                                    <label for="">Role</label>
                                    <select name="role" class="form-control form-control-rounded">
                                    <option hidden value="<?php echo $row['role'] ?>">
                                      <?php 
                                        if($row['role'] == '1')
                                        {
                                          echo "Site Incharge";
                                        }else{
                                          echo "Contractor";
                                        }
                                      ?>
                                    </option>
                                    <option value="1">Site Incharge </option>
                                    <option value="2">Contractor</option>
                                  </select>
                                    </div>
                                 </div>
                        </div>
                       
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <input type="submit" class="btn btn-info" value="Update" name="update">
                    </div>
                  </div>
                  </form>
                  <!-- Modal content end-->
                </div>
              </div>
              <!-- Modal endx -->
            </div>
          </td>
          <td>
            <form action="emp-action.php" method="post">
              
              <input type="hidden" value="<?php echo $row['id']; ?>" name="id">

              <button type="submit" name="delete" class="btn btn-danger"><i class="fa fa-remove"></i></button>

            </form>  
            
          </td>
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
