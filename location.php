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

<script>
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
</script>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
      <!-- Model btn start -->
      <button type="button" class="btn btn-lg btn-info waves-effect waves-light" data-toggle="modal" data-target="#modal-animation-14">ADD LOCATION</button>

      <!-- Model btn end -->
      <!-- Model Start -->
      <div class="modal fade" id="modal-animation-14">
        <div class="modal-dialog">
          <div class="modal-content animated fadeInUp">
            <div class="modal-header">
              <h5 class="modal-title">ADD LOCATION DETAILS</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-lg-12">
                <div class="card">
                   <div class="card-body">
                    <form action="location-action.php" method="post">

                  <div class="form-group">
                    <label for="">Select District</label>
                     <select onchange="get_ulb(this.value)" name="dist" id="dist" class="form-control form-control-rounded">
                      <option value="">-Select-</option>
                      <?php 
                          $sql_sup = "SELECT * FROM district";
                           $result1 = $conn->query($sql_sup);
                          while($row1 = $result1->fetch_assoc()) 
                          {
                            echo "<option value='".$row1['id']."'>".$row1['district']."</option>";
                          }

                      ?>
                    </select>
                   </div>    
                  
                  <div class="form-group">
                    <label for="">Select ULB</label>
                     <select name="ulb" id="ulb" class="form-control form-control-rounded">
                      <option value="">-Select-</option>
                    </select>
                   </div> 

                   <div class="form-group">
                    <label for="">Location Name </label>
                    <input type="text" class="form-control form-control-rounded" id="" name="location" placeholder="Enter Location Name ">
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
                      <th scope="col">DISTRICT</th>
                      <th scope="col">ULB</th>
                      <th scope="col">LOCATION NAME</th>
                      
                      <th scope="col" colspan="2">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
          <?php

          $sql = "SELECT * FROM location INNER JOIN district ON district.id = location.dist_id INNER JOIN ulb ON ulb.id = location.dist_id";
          $result = $conn->query($sql);
            $i = 1;
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                 
          ?>
          <td><?php echo $i;?></td>
          <td><?php echo $row["district"];?></td>
          <td><?php echo $row["ulb_name"];?></td>
          <td><?php echo $row["location"];?></td>

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
                      <h4 class="modal-title">Edit location</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form action="location-action.php" method="post">
                        <div class="row">
                          <div class="col-sm-12">

                                <div class="form-group">
                                  <label for="">Select District</label>
                                   <select required onchange="get_ulb(this.value)" name="dist"  class="form-control form-control-rounded">
                                    <!-- <option  style="visibility: hidden;" value="<?php echo $row["id"];?>"><?php echo $row["district"];?></option> -->
                                    <?php 
                                        $sql_sup = "SELECT * FROM district";
                                         $result1 = $conn->query($sql_sup);
                                        while($row1 = $result1->fetch_assoc()) 
                                        {
                                          echo "<option value='".$row1['id']."'>".$row1['district']."</option>";
                                        }
                                    ?>
                                  </select>
                                 </div>    
                                
                                <div class="form-group">
                                  <label for="">Select ULB</label>
                                   <select required name="ulb" id="ulb" class="form-control form-control-rounded">
                                    <!-- <option style="visibility: hidden;" value="<?php echo $row['id']; ?>"><?php echo $row['ulb_name']; ?></option> -->
                                    <option>-Select-</option>
                                  </select>
                                 </div>

                                <div class="col-sm-12">
                                  <div class="form-group">
                                    <label for="">location</label>
                                    <input required type="text" class="form-control form-control-rounded" id="" name="location" value="<?php echo $row['location']; ?>">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
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
            <form action="location-action.php" method="post">
              
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
