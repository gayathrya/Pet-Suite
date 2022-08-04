
!DOCTYPE html>
<html>
    <head>
        <title>REGISTER</title>
        <link rel="stylesheet" type="text/css" href="style_2.css">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h2>REGISTER</h2>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
       
        <label>petname</label>
        <input type="text" name="petname" placeholder="PETNAME">
        <label>BREED</label>
        <input type="text" name="BREED" placeholder="BREED">
        <label>AGE</label>
        <input type="text" name="AGE" placeholder="AGE">
        <label>GENDER</label>
        <label for="GENDER">:</label>

<select name="GENDER" id="GENDER">
  <option value="MALE">MALE</option>
  <option value="FEMALE">FEMALE</option>
 
</select>
<br>
<label>CONTACT NO</label>
        <input type="text" name="CNO" placeholder="CONTACT NO"></br>
        <label>EMAIL</label>
        <input type="text" name="EMAIL" placeholder="EMAIL"> 
        <label>WEIGHT</label>
        <input type="text" name="WEIGHT" placeholder="WEIGHT">        
        <label>CITYNAME</label>
        <input type="text" name="CITY" placeholder="CITYNAME">
         
        <label>photo</label>
        <input type="file" accept="image/*" id="photo" name="photo"> 
        <a href="upload.php">submit</a>
           
        
</form>

</body>
</html>