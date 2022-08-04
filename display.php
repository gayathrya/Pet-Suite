<?php

// Connect to the MySQL database
$connect = mysqli_connect('localhost', 'root', 'root', 'petsuit');

// If the connection did not work, display an error message
if (!$connect)
{
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

?>
<!doctype html>
<html>
    <head>
        <style type="text/css">
      h1{
        padding: 100px;
    }
   
    div.hlo{
        margin-right: 200px;
       padding: 40px;
    }
</style>


        

        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>petsuit</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>
          <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand"
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    </head>

        <h1  align="center">fnd paw partner</h1>
     <div class="hlo">
        <?php

        // Create a query
        $query = 'SELECT * FROM login';
            

   
        


$read=mysqli_query($connect, $query);

    // Execute the query
    
        
        // If there is no result, display an error message
        if (!$read)
        {
            echo 'Error Message: ' . mysqli_error($connect) . '<br>';
            exit;
        }

        // Display the number of recirds found
        echo '<p>The query found ' . mysqli_num_rows($read) . ' rows:</p>';

        // Loop through the records found
        while ($record = mysqli_fetch_assoc($read))
        {

            // Output the record using if statements and echo
            echo '<hr>';

          
              echo "<img  src='images/".$record['petImages']."' >";
              echo "username :".PHP_EOL;
              echo $record['username'].PHP_EOL;
              echo "petbreed :".PHP_EOL;
              echo $record['petbreed'];
              echo "contactno :".PHP_EOL;
              echo $record['contactno'].PHP_EOL;
              echo "gender :".PHP_EOL;
              echo $record['gender'].PHP_EOL;
              echo "mailid :".PHP_EOL;
              echo $record['mailid'].PHP_EOL;
              echo "petweight :".PHP_EOL;
              echo $record['petweight'].PHP_EOL;
              echo "age :".PHP_EOL;
              echo $record['age'].PHP_EOL;
              
          
                echo '</a>';
            }
           

           



       

        ?>

        </div>

<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
   

  </body>
 
</html>
 
 
 
  <div class="nav_down">
    <div><br><br>
     &copy; PETSUIT
    </div>
  </div>
 
    </body>
</html>
