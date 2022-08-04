<?php
require 'config.php';
if(!empty($_SESSION["username"])){
  $username = $_SESSION["username"];
  $result = mysqli_query($conn, "SELECT $username FROM user WHERE username = $username");
  // $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    <a href="logout.php">Logout</a>
  </body>
</html>
