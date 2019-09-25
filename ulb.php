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
      <!-- <button type="button" class="btn btn-lg btn-info waves-effect waves-light" data-toggle="modal" data-target="#modal-animation-14">ULB</button> -->
      <!-- Model btn end -->
      <!-- Model Start -->
      <!-- <div class="modal fade" id="modal-animation-14">
        <div class="modal-dialog">
          <div class="modal-content animated fadeInUp">
            <div class="modal-header">
              <h5 class="modal-title">ULB</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-lg-12">
                <div class="card">
                   <div class="card-body">
                    <form action="site-action.php" method="post">
                   <div class="form-group">
                    <label for="">Site Name</label>
                    <input type="text" class="form-control form-control-rounded" id="" name="sitename" placeholder="Enter Your Name">
                   </div>
                   <div class="form-group">
                    <label for="">Site Address</label>
                    <input type="text" class="form-control form-control-rounded" id="" name="adress" placeholder="Site Address">
                   </div>
                   <div class="form-group">
                    <label for="">Site Incharge</label>
                    <input type="text" class="form-control form-control-rounded" id="" name="contact_person" placeholder="Site Incharge">
                   </div>
                   <div class="form-group">
                    <label for="">Contact Number</label>
                    <input type="text" class="form-control form-control-rounded" id="" name="contact_person_no" placeholder="Contact Number">
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
      </div> -->
      <!-- Model End -->

      <div class="clearfix"></div>
      <br>
      <!-- Table Start -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Urban Local Bodies (ULB) DETAILS</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Cluster</th>
                      <th scope="col">Distric</th>
                      <th scope="col">ULB</th>
                      <th scope="col">Site Incharge</th>
                      <th scope="col">Contact Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM ulb LEFT JOIN district ON district.id = ulb.dist_id JOIN cluster ON cluster.id = district.cluster";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                      <td><?php echo $i;?></td>
                      <td><?php echo $row["cluster_name"];?></td>
                      <td><?php echo $row["district"];?></td>
                      <td><?php echo $row["ulb_name"];?></td>
                      <td><?php 
                              if($row["site_incharge"] == "")
                              {
                                echo "NOT ASSIGNED";
                              }else{
                                echo $row["site_incharge"];
                              }
                          ?>
                      </td>
                      <td><?php 
                              if($row["contact_no"] == "")
                              {
                                echo "NOT ASSIGNED";
                              }else{
                                echo $row["contact_no"];
                              }
                          ?>
                      </td>

                      <!-- <td width="25%" style="height: 30px">
                        <a href="site-action.php?id=<?php echo($row['id']) ?>"><i class="fa fa-edit"></i></a>
                        &nbsp;&nbsp;
                        <a href="site-action.php?id=<?php echo($row['id'])?>" style="color: red"><i class="fa fa-remove"></i></a>
                        &nbsp;&nbsp;
                      </td> -->
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
