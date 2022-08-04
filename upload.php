

<html>
<head>
        <title>upload</title>
        <h3 class="register-here">REGISTER HERE!</h3> 
        <link rel="stylesheet" type="text/css" href="./css/style_2.css">
</head>

<body class="upload-h">
    <div>
        
       
<form method="POST" action="images.php" enctype="multipart/form-data">

Pet Name : <input type="text" name="petname" placeholder="Pet Name"> <br> 
User Name : <input type="text" name="username" placeholder="User Name"> <br>
petbreed : <input type="text" name="petbreed" placeholder="Pet Breed"> <br>  
gender : <input type="text" name="gender" placeholder="Pet Gender"> <br>   
contactno : <input type="text" name="contactno" placeholder="Conatct Number"> <br>
petweight : <input type="text" name="weight" placeholder="Pet Weight"> <br> 
mailid : <input type="text" name="mailid" placeholder="Mail ID"> <br>  
city: <input type="text" name="address" placeholder="Address"> <br>  
age: <input type="text" name="age" placeholder="Pet Age"> <br>  
      
<div class="form-group">
    <input class="form-control" type="file" name="uploadfile" value="" />
</div>
<div class="form-group">
    <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
</div>
<a href="dashboard.php">clickhere</a>

</form>
    </div>


</body>
</html>
