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
<section class="pets" id="pets">

    <h3 class="sub-heading"> Welcome <strong><?php echo $_SESSION['username'];?></strong> </h3>
    <h1 class="heading"> Find your pets match </h1>

    <div class="box-container">

        <!-- <div class="box"> -->
        <?php

        // Create a query
        $query = 'SELECT * FROM petd';

        $read=mysqli_query($connect, $query);

        // Execute the query


        // If there is no result, display an error message
        if (!$read)
        {
            echo 'Error Message: ' . mysqli_error($connect) . '<br>';
            exit;
        }

        // Display the number of recirds found
        // echo '<p>The query found ' . mysqli_num_rows($read) . ' rows:</p>';

        // Loop through the records found
        while ($record = mysqli_fetch_assoc($read))
        {

            // Output the record using if statements and echo
                echo "<div class=\"box\">";
                    echo "<div class=\"image\">";
                        echo "<img  src='./images/".$record['petimage']."' >";
                        echo"<a href=\"#\" class=\"fas fa-heart\"></a>";
                    echo "</div>";   
                    echo "<div class=\"content\">";
                        echo "<h3>".$record['petname']."</h3>";
                            echo "<p>Owner : ".$record['username']."</p> <br>";
                            echo "<p>Pet Breed : ".$record['petbreed']."</p>";
                            echo "<p>Age : ".$record['age']."</p>";
                            echo "<p>Gender : ".$record['gender']."</p>";
                            echo "<p>Weight : ".$record['weight']."</p>";
                            echo "<p>Contact Number : ".$record['contactno']."</p>";
                            echo "<p>Address : ".$record['address']."</p>";
                            echo "<p>Mail ID : ".$record['mailid']."</p>";
                    echo "</div>"; 
                echo "</div>";
            }
        ?>
      <!-- echo "<img  src='./images/".$record['petimage']."' >";
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
      
  
        echo '</a>'; -->


            <!-- <div class="image">
                <img src="images/pet with mastre.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                
                <h3>Goofy G</h3>
                <p> Age:XX <br>Breed: xxxx <br> contact no.</p>
                
            </div> -->

        <!-- </div> -->
    </div>

</section>