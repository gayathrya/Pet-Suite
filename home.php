<?php 
session_start();

if ( isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	
</head>
<body>
     <h1 style="color:black;">Hello, <?php echo $_SESSION['username']; ?></h1>
     
     <a href="logout.php">Logout</a><br>
     <a href="upload.php">edit profile</a></br>
     <a href="index.php">check out</a>
     

</body>
</html>

<?php
}
else{
     header("Location: index.php");
     exit();
}
 ?>
 