<?php
require 'config.php';
if(!empty($_SESSION["username"])){
  header("Location: ../dashboard.php");
}
if($_SESSION["login"] == true){
    echo "<script LANGUAGE='JavaScript'>
    window.location.href='dashboard.php';
    </script>";
    }
if(isset($_POST["upload"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["username"] = $row["username"];
      header("Location: ../dashboard.php");
    }
    else{
      echo "<script LANGUAGE='JavaScript'>
      window.alert('Wrong Password');
      window.location.href='login.php';
      </script>";
    }
  }
  else{
    echo "<script LANGUAGE='JavaScript'>
    window.alert('Please enter Username and Password');
    window.location.href='login.php';
    </script>";
  }
}
else{
    echo
    "<script> alert('User Not Registered'); </script>";
}
?>