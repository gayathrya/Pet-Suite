<?php
require 'config.php';
if(!empty($_SESSION["username"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  // $petname = $_POST["petname"];
  $username = $_POST["username"];
  $mailid = $_POST["mailid"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' OR mailid = '$mailid'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO user(username,mailid,password) VALUES('$username','$mailid','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      header("Location: login.php");
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<html>
<head>
        <title>upload</title>
        <h3 class="register-here">REGISTER HERE!</h3> 
        <link rel="stylesheet" type="text/css" href="../css/style_2.css">
</head>

<body class="reg-h">
    <div>
        
       
<form method="post" action="" enctype="multipart/form-data">

    <!-- Pet Name : <input type="text" name="petname" id="petname" required value=""> <br>    -->
    User Name : <input type="text" name="username" id="username" required value=""> <br>
    mailid : <input type="email" name="mailid" id="mailid" required value=""><br>
    Passsword : <input type="text" name="password" id="password" required value=""> <br>
    Confirm Password : <input type="password" name="confirmpassword" id="confirmpassword" required value=""> <br>
    <div class="form-group">
        <button class="btn btn-primary" type="submit" name="submit">REGISTER</button>
    </div>
</form>
</div>


</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="name">petname : </label>
      <input type="text" name="petname" id = "petname" required value=""> <br>
      <label for="username">Username : </label>
      <input type="text" name="username" id = "username" required value=""> <br>
      <label for="email">Email : </label>
      <input type="email" name="mailid" id = "mailid" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <label for="confirmpassword">Confirm Password : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
      <button type="submit" name="submit">Register</button>
    </form>
    <br>
    <a href="login.php">Login</a>
  </body>
</html> -->
