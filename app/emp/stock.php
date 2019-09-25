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

      <div class="clearfix"></div>
      <br>
      <!-- Table Start -->

      <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">STOCK DETAILS</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">SUPPLIER</th>
                      <th scope="col">PRODUCT NAME</th>
                      <th scope="col">PRODUCT TYPE</th>
                      <th scope="col">PRODUCT DESCRIPTION</th>
                      <th scope="col">UNIT</th>
                      <th scope="col">AVAILABLE QUANTITY</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <?php

                        $sql = "SELECT * FROM stock INNER JOIN bill_stock ON bill_stock.id = stock.bill_stock_id INNER JOIN product ON product.id = stock.product_name INNER JOIN product_type ON product_type.id = stock.product_type";
                        $result = $conn->query($sql);

                          $i = 1;
                          // output data of each row
                          while($row = $result->fetch_assoc()) 
                          {     
                        ?>
                        <td><?php echo $i;?></td>
                        <td>
                          <?php 
                            if($row["supplier"] == 1){
                              echo "A";
                            }else{
                              echo "B";
                            }
                            ?>
                        </td>
                        <td><?php echo $row["product_name"];?></td>
                        <td><?php echo $row["product_type"];?></td>
                        <td><?php echo $row["description"];?></td>
                        <td><?php echo $row['unit']?></td>  
                        <td><?php echo $row['quantity']?></td>
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
