<?php 
  include('includes/config.php');
  include('includes/session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  function get_dist(str) {
        $.ajax({
              type:"get",
              url:"get_district.php",
              data:{q:str},
              success:function(data){
                //alert(data);
                $('[name^=dist]').html(data);
               }
            });
      }

  function get_ulb(str) {
        $.ajax({
              type:"post",
              url:"get_ulb.php",
              data:{q:str},
              success:function(data){
                //alert(data);
                $('[name^=ulb]').html(data);
               }
            });
      }

  $(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>
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
      <button type="button" class="btn btn-lg btn-info waves-effect waves-light" data-toggle="modal" data-target="#modal-animation-14">ASSIGN ACTIVITIES</button>

      <!-- Model btn end -->
      <!-- Model Start -->
      <div class="modal fade" id="modal-animation-14">
        <div class="modal-dialog">
          <div class="modal-content animated fadeInUp">
            <div class="modal-header">
              <h5 class="modal-title">ASSIGN ACTIVITIES DETAILS</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-lg-12">
                <div class="card">
                   <div class="card-body">
                    <form action="assign_activities-action.php" method="post">

                   <div class="form-group">
                    <label for="">Cluster</label>
                      <select required onchange="get_dist(this.value)" class="form-control form-control-rounded" id="" name="cluster">
                        <option>-Select-</option>
                        <option value="1">A</option>
                        <option value="2">B</option>
                      </select>
                   </div>

                   <div class="form-group">
                    <label for="">District</label>
                      <select required onchange="get_ulb(this.value)" class="form-control form-control-rounded" name="dist">
                        <option>-Select-</option>
                      </select>
                   </div>

                   <div class="form-group">
                    <label for="">ULB</label>
                      <select required class="form-control form-control-rounded" name="ulb">
                        <option>-Select-</option>
                      </select>
                   </div>

                   <div class="form-group">
                    <label for="">Activity</label>
                      <select required class="form-control form-control-rounded" id="" name="activity">
                        <option>-Select-</option>
                        <?php 
                            $sql_sup = "SELECT * FROM activity";
                             $result1 = $conn->query($sql_sup);
                            while($row1 = $result1->fetch_assoc()) 
                            {
                              echo "<option value='".$row1['id']."'>".$row1['activities']."</option>";
                            }
                        ?>
                      </select>
                   </div>

                   <div class="form-group">
                    <label for="">Quantity</label>
                      <input type="text" required class="form-control form-control-rounded" name="quantity">
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
              <div class="pull-right" style="padding: 10px">
              	<input type="text" placeholder="Search..." id="search" name="">
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">SL NO.</th>
                      <th scope="col">DISTRICT</th>
                      <th scope="col">ULB</th>
                      <th scope="col">ACTIVITIES</th>
                      <th scope="col">UNIT</th>
                      <th scope="col">QUNTITY</th>
                      <th scope="col">ASSIGNED DATE</th>

                      <th scope="col" colspan="2">ACTION</th>
                    </tr>
                  </thead>
                  <tbody id="myTable">
                    <tr>
          <?php

          $sql = "SELECT * FROM assign_activity JOIN activity ON activity.id = assign_activity.activity JOIN district ON district.id = assign_activity.dist_id JOIN ulb ON ulb.id = assign_activity.ulb_id";
          $result = $conn->query($sql);
            $i = 1;
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                 
          ?>
          <td><?php echo $i;?></td>
          <td><?php echo $row["district"];?></td>
          <td><?php echo $row["ulb_name"];?></td>
          <td><strong><?php echo $row["activities"];?></strong></td>
          <td><?php echo $row["unit"];?></td>
          <td><?php echo $row["quantity"];?></td>
          <td><?php echo $row["assign_date"];?></td>

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
                      <h4 class="modal-title">Edit Assign Employee</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form action="assign_emp-action.php" method="post">
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
            <form action="assign_emp-action.php" method="post">
              
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
