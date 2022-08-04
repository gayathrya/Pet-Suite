<?php
session_start();
require("db_conn.php");

if(isset($_POST["upload"])){

$petname=$_POST['petname'];
$petbreed=$_POST['petbreed'];
$uname=$_POST['username'];
$gender=$_POST['gender'];
$contactno=$_POST['contactno'];
$weight=$_POST['weight'];
$mailid=$_POST['mailid'];
$address=$_POST['address'];
$age=$_POST['age'];

error_reporting(0);
$sname= "localhost";
$unmae= "root";
$password = "root";

$db_name = "petsuit";
$sname="localhost";
$unmae="root";
$password="root";
 
$msg = "";
 

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./uploads/" . $filename; 

    $conn = mysqli_connect("localhost", "root", "root", "petsuit");


    if (!$conn) {
        echo "Connection failed!";
    }
     // Get all the submitted data from the form
     $sql = "INSERT INTO petd (userName,petname,petbreed,age,contactno,mailid,address,petimage,gender,weight) VALUES ('$uname','$petname','$petbreed','$age','$contactno','$mailid','$address','$filename','$gender','$weight')";
    //  $sql = "INSERT INTO 'petd' (uname,petname,petbreed,age,gender,weight,contactno,mailid,city,filename) VALUES ('siya','myavu','sacasxa','12','asxasxsax','422','sdssvsdvs','sdccdscsdcsdc','cdscdcdcscd','$filename')";
     mysqli_query($conn, $sql);

     
     // header("Location: dashboard.php");
         
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<script LANGUAGE='JavaScript'>
        window.location.href='dashboard.php';
        </script>";
             // Execute query
        

    } else {
        echo("Error description: " .  mysqli_error($conn));
        echo "<h3>  Failed to upload image!</h3>";
    }
}

?>