<?php 
  include('includes/config.php');

      $postid = intval($_GET['q']);

      $sql = "SELECT * FROM district WHERE cluster = $postid";

      $result = $conn->query($sql);
?>
        <select onchange="show_ulb(this.value)" class="form-control" name="district">
        <option value="">Select</option>  
<?php
        while($row = $result->fetch_assoc()) 
        {
            echo "<option value='".$row['id']."'>".$row['district']."</option>";
        }
?>

        </select>


