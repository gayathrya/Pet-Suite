<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="../css/style_2.css">
</head>
<body class="login-h">
    <form action="login-val.php" method="post" enctype="multipart/form-data">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <label>USER NAME</label>
        <input type="text" name="username" placeholder="User Name">
        <label>PASSWORD</label>
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="upload">login</button>
        <a href="registration.php">signup</a>     
</form>

</body>
</html>

