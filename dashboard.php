<?php
require 'reglog/config.php';
if(!empty($_SESSION["username"])){
  $username = $_SESSION["username"];
  $result = mysqli_query($conn, "SELECT $username FROM user WHERE username = $username");
  // $row = mysqli_fetch_assoc($result);
}
else{
  echo "<script> alert('Wrong Login'); </script>";
  header("Location: ./reglog/login.php");
}
?>
<?php require('component/home/head.inc.php'); ?>
<!-- header section starts      -->
<?php require('component/home/header2.inc.php'); ?>
<?php require('component/home/pets.inc.php'); ?>
<?php require('component/home/footer.inc.php'); ?>