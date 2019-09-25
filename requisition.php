<?php 
  include('includes/config.php');
  include('includes/session.php');

   if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    // insert to the database
    if(isset($_POST['submit']))
    {

        $bill_no = $_POST['req_no'];
        $date = $_POST['date'];


        $sql2 ="INSERT INTO requisition (req_no, ulb_id, created_date) VALUES ('$bill_no', '$date')";
        
        if ($conn->query($sql2) === TRUE) {

          $last_id = mysqli_insert_id($conn);

          $count = count($_POST['product_name']);

          for($i=0;$i<$count;$i++)
          {
            $product_name = $_POST['product_name'][$i];
            $product_type = $_POST['product_type'][$i];
            $description = $_POST['description'][$i];
            $unit = $_POST['unit'][$i];
            $quantity = $_POST['quantity'][$i];

            $sql3 ="INSERT INTO stock (bill_stock_id, product_name, product_type, description, quantity, unit, created_date) VALUES ('$last_id', '$product_name', '$product_type', '$description' ,'$quantity', '$unit', now())";

            $conn->query($sql3);

          }

          echo "<script>alert('Record Added successfully')</script>";

          echo "<script>window.location='add-stock.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>
   <script>
    
     function show_type(str) {
        var id = str;
        var l_no = id.split("-");
        var valu = $('#'+id).val();
        $.ajax({
              type:"post",
              url:"get_type.php",
              data:{q:valu,action:"type"},
              success:function(data){
                //alert(data);
                $('#product_type-'+l_no[1]).html(data);
               }
            });
      }

      function show_unit(str) {
        var id = str;
        var l_no = id.split("-");
        var valu = $('#'+id).val();

        $.ajax({
              type:"post",
              url:"get_type.php",
              data:{q:valu,action:"unit"},
              success:function(data){
                //alert(data);
                $('#unit-'+l_no[1]).val(data.replace(/\s+/g, ''));
               }
            });

      }
   </script>
   <!-- +l_no[no] -->
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
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form action="requisition.php" method="post">

             <div class="row">
               <div class="form-group col-lg-6">
                  <label for="">REQUISITION NO. </label>
                  <?php
                      $bill_sql = mysqli_query($conn,"SELECT req_no FROM qeruisition ORDER BY `id` DESC LIMIT 1");
                      $rowdata1 = mysqli_fetch_assoc($bill_sql);
                      $rows = mysqli_num_rows($bill_sql);
                      if($rows == 0){
                        $bill = 1001;
                      }else{
                        $pre_bill = $rowdata1['req_no'];
                        $bill = $pre_bill + 1;
                      }
                  ?>
                  <input type="text" value="<?php echo $bill ;?>" readonly class="form-control form-control-rounded" id="" name="req_no" >
                </div>

                <div class="form-group col-lg-6">
                  <label for="">Date</label>
                   <input type="text" value="<?php echo(date('d/m/Y'))?>" class="form-control form-control-rounded" id="" name="date" placeholder="Product Name"> 
                 </div>

             </div>

             <br>
             <br>
             <br>

             <div class="row">
               <table id="POITable">
                 <tbody>
                    <tr>
                      <td>
                        <div class="form-group">
                          <label for="">#</label>
                          <p class="form-control"><?php echo $i = 1?></p>
                         </div>
                      </td>

                        <td>
                         <div class="form-group" align="center">
                          <label for="">Product Name</label>
                          <select required onchange="show_type(this.id)" class="form-control form-control-rounded" id="product_name-1" name="product_name[]">
                            <option value="">Select</option>
                            <?php
                              $sql = mysqli_query($conn,"SELECT * FROM `product`");
                              while($rowdata = mysqli_fetch_assoc($sql)){
                                echo('<option value="'.$rowdata['id'].'">'.$rowdata['product_name'].'</option>');
                              }
                            ?>
                          </select>
                           <!-- <input type="text" class="form-control form-control-rounded" id="product_name-1" name="product_name[]" placeholder="Product Name"> --> 
                         </div>
                        </td>

                        <td id="p_type-1">
                         <div class="form-group">
                          <label for="" style="white-space: nowrap;">Product Type</label>
                          <select required onchange="show_unit(this.id)" class="form-control form-control-rounded" id="product_type-1" name="product_type[]">
                            <option value="">Select</option>
                          </select>
                           <!-- <input type="text" class="form-control form-control-rounded" id="product_type-1" name="product_type[]" placeholder="Product Type"> --> 
                         </div>
                        </td>

                        <td>
                         <div class="form-group" align="center">
                          <label for="" style="">Product Desp.</label>
                          <input required type="text" class="form-control form-control-rounded" id="description-1" name="description[]" placeholder="Product Description">
                         </div>
                        </td>

                        <td>
                         <div class="form-group" align="center">
                          <label for="">Unit</label>
                          <input required type="text" class="form-control form-control-rounded" id="unit-1" name="unit[]" placeholder="Unit">
                         </div>
                        </td>

                        <td>
                         <div class="form-group" align="center">
                          <label for="">Quantity</label>
                          <input required type="text" class="form-control form-control-rounded" id="quantity-1" name="quantity[]" placeholder="Quantity">
                         </div>
                        </td>

                        <td>
                        <a id="addrow-0" class="btn btn-info add-row mr-15" data-toggle="tooltip" data-original-title="Add Product"> <i class="fa fa-pencil text-inverse m-r-10"></i></a>
                        &nbsp;&nbsp;
                        <a class="btn btn-danger" onClick="deleteRow(this);" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-close "></i></a>
                      </td>
                    </tr>
                    <tr class="add_tr"></tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <input type="submit" name="submit" value="Submit" class="btn btn-success">
                      </td>
                    </tr>
                 </tbody>
               </table>
             </form>
             </div>
            
           </div>
           </div>
        </div> 
      <!-- Model End -->

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
<?php
  $sql = "SELECT * FROM product_type";

      $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) 
        {
            $option[] = "<option value='".$row['id']."'>".$row['product_type']."</option>";
        }
?> 
<script>

  var z=1;
  $(document).on('click', '.add-row', function(){
  var id = $(this).attr('id');
  var last = parseFloat(id.split("-").pop());

  
        $.ajax({
              type:"post",
              url:"get_type.php",
              data:{name:"get_dist"},
              success:function(data){
                //alert(data);
                $('#product_name-'+z).html(data);
               }
            });

    z++;
    
    $('.add_tr').replaceWith('<tr class="table-align"><td><div class="form-group" align="center"><label for="">#</label><p class="form-control">'+z+'</p></div></td><td><div class="form-group" align="center"><label for="">Product Name</label><select required onchange="show_type(this.id)" class="form-control form-control-rounded" id="product_name-'+z+'" name="product_name[]"><option value="">Select</option></select></div></td><td id="p_type-'+z+'"><div class="form-group" align="center"><label for="">Product Type</label><select required onchange="show_unit(this.id)" class="form-control form-control-rounded" id="product_type-'+z+'" name="product_type[]"><option value="">Select</option></select></div></td><td><div class="form-group" align="center"><label for="">Product Desp.</label><input required type="text" class="form-control form-control-rounded" id="description-'+z+'" name="description[]" placeholder="Product Description"></div></td><td><div class="form-group" align="center"><label for="">Unit</label><input required type="text" class="form-control form-control-rounded" id="unit-'+z+'" name="unit[]" placeholder="Unit"></div></td><td><div class="form-group" align="center"><label for="">Quantity</label><input required type="text" class="form-control form-control-rounded" id="quantity-'+z+'" name="quantity[]" placeholder="Quantity"></div></td><td><a id="addrow-'+z+'" class="btn btn-info add-row mr-15" data-toggle="tooltip" data-original-title="Add Product"> <i class="fa fa-pencil text-inverse m-r-10"></i></a><a class="btn btn-danger" onClick="deleteRow(this);" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-close "></i></a></td></tr><tr class="add_tr"></tr>');
    
    return false;
       

    });


  function deleteRow(row){
  var i=row.parentNode.parentNode.rowIndex;
  document.getElementById('POITable').deleteRow(i);
}

</script>
</body>
</html>
                     
                                     
                 