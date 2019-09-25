<?php 
  include('includes/header.php');
  include('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>
   <style type="text/css">
    .switcher-icon{
      visibility: visible;
    }
  </style>
 <script>
function show_dist(str) {
  var id = str;
  var valu = $('#'+id).val();
    if (valu == "") {
        document.getElementById("district").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("district").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","get_district.php?q="+valu,true);
        xmlhttp.send();
    }
}

function show_ulb(str) {
    if (str == "") {
        document.getElementById("ulb").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ulb").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","get_ulb.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>

<body>

   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div>
   <!-- end loader --><!-- Start wrapper-->
 <div id="wrapper">

<?php include('includes/sidebar.php')?>
<!--Start topbar header-->
<?php include('includes/topnav.php')?>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
      <div class="row">
        
        <div class="col-md-6">
          <label for="">Cluster</label>
          <select onchange="show_dist(this.id)" class="form-control" name="cluster" id="cluster-1">
            <option value="">Select</option>
            <option value="1">A</option>
            <option value="2">B</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="">District</label>
          <!-- <select class="form-control" name="district" id="district-1">
            <option>Select</option>
          </select> -->
          <div id="district">
          <select class="form-control" name="district">
            <option>Select</option>
          </select>
          </div>
        </div>
        </form>
      </div>
       <div class="row mt-3" id="ulb">

        
      </div><!--End Row--> 

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
