<?php 
session_start();
require('connect.php');


if(isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $query = "SELECT * FROM user WHERE username='$username' and password='$password'";

  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
  $count=mysqli_num_rows($result);
  if($count == 1) {
    $_SESSION['username'] = $username;
    header("Location: home.php"); 
    exit;
  } else {
    header("Location:404.php");
    exit;
  }
}
?>
