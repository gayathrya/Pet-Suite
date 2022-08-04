<?php
session_start();
include("db_conn.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $uname= $_POST['uname'];
   $password= $_POST['password'];
if(!empty($uname)&& !empty($password) && !is_numeric($uname))
{
    $query = "insert into login (username,password) values ('$uname','$password')";
    mysqli_query($conn,$query);
    header("location:register.php");
    die;


}else
{
    echo "please enter valid username";
}
}
?>
				

<!DOCTYPE html>
<html>
    <head>
        <title>SIGNUP</title>
        <link rel="stylesheet" type="text/css" href="css/style_2.css">
</head>
<body class="login-h">
    <form action="upload.php" method="post">
        <h2>SIGNUP</h2>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <label>USER NAME</label>
        <input type="text" name="uname" placeholder="User Name">
        <label>PASSWORD</label>
        <input type="password" name="password" placeholder="Password">
        <button type="submit">signup</button>
        
        <a href="login.php">login</a>
        <a href="upload.php">next</a>
        
</form>

</body>
</html>