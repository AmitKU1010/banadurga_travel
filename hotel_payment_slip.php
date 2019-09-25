<?php 
  include('includes/config.php');
  // error_reporting(0);

if(isset($_POST['submit']))
{
$booked_by = $_POST['booked_by'];
$booked_by = $_POST['booked_by'];
$booked_by = $_POST['booked_by'];

  
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
   <form id="form1">
  First name:<br>
  <input type="text" name="firstname1" id="firstname1"><br>
  Last name:<br>
  <input type="text" name="lastname1" id="lastname1">
</form>
 
<form id="form2">
  First name:<br>
  <input type="text" name="firstname2" id="firstname2"><br>
  Last name:<br>
  <input type="text" name="lastname2" id="lastname2">
</form>

    <button type="button" id="ro"></button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).on('click', '#ro', function()
{
   $("#form1").submit();
   $("#form2").submit();
   exit();
 });
</script>

</body>
</html>
    




   