<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"SELECT * FROM users WHERE username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['id'];
   $role_session = $row['role_name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>