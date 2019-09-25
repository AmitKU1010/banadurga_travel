<?php 
  include('includes/config.php');

  if(isset($_POST['q']))
  {
     $postid = intval($_POST['q']);
     $sql = "SELECT * FROM ulb WHERE dist_id = '$postid'";
     $result = $conn->query($sql);
     echo '<option>-Select-</option>';
     while($row = $result->fetch_assoc()) 
        {
          ?>
            <option value="<?php echo $row["id"];?>"><?php echo $row["ulb_name"];?></option>
          <?php
        }
  }

      $postid = intval($_GET['q']);

          $sql = "SELECT * FROM ulb WHERE dist_id = '$postid'";
          $result = $conn->query($sql);

              $i = 1;
              // output data of each row
              while($row = $result->fetch_assoc()) 
              {
                if($i%2 == 0){
                  $color = "gradient-deepblue";
                }else{
                  $color = "gradient-ibiza";
                }
        ?>
                 <div class="col-12 col-lg-6 col-xl-3">
                   <a href="dashboard_location.php?l=<?php echo $row["id"];?>">
                     <div class="card <?php echo $color ?>">
                     <div class="card-body">
                        <h5 class="text-white mb-0"><?php echo $row["ulb_name"];?></h5>
                          <div class="progress my-3" style="height:3px;">
                             <div class="progress-bar" style="width:55%"></div>
                          </div>
                        <p class="mb-0 text-white small-font"><?php echo $row["site_incharge"];?><span class="float-right"> </span></p>
                        <p class="mb-0 text-white small-font"><?php echo $row["contact_no"];?><span class="float-right"> </span></p>
                      </div>
                   </div>
                   </a> 
                 </div>

              <?php
              $i++;
              
              }
              ?>


