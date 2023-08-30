<?php 
    session_start();
    include 'connect.php';
    
    $email = $_SESSION['email'];
    $result = [];
    $source="";
    $destination="";
    if(isset($_POST['submit'])){
        $source = mysqli_real_escape_string($conn, $_POST['source']);
        $destination = mysqli_real_escape_string($conn, $_POST['destination']);
        $depart = mysqli_real_escape_string($conn, $_POST['depart']);
        $return = mysqli_real_escape_string($conn, $_POST['return']);
        $adult = mysqli_real_escape_string($conn, $_POST['adult']);
        $child = mysqli_real_escape_string($conn, $_POST['child']);
        $class = mysqli_real_escape_string($conn, $_POST['class']);

        $details = "insert into `flight_details` (`email`, `source`, `destination`, `depart`, `return`, `adult`, `child`, `class`)
        values('$email', '$source', '$destination', '$depart', '$return', '$adult', '$child', '$class')";

        $insert = mysqli_query($conn, $details);
    
        $api_url = 'http://api.aviationstack.com/v1/flights?access_key=e763e33caa30e61aeaa841c84feeeea8';

        $ch = curl_init($api_url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if(curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }

        curl_close($ch);

        $data = json_decode($response, true);
        
        if ($data) {
            $flight_data = $data['data'];

            for($i=0; $i<count($flight_data); $i++){
                $object = $flight_data[$i];
                $temp_source = $object['departure']['timezone'];
                $temp_destination = $object['arrival']['timezone'];

                if(strstr($temp_source, $source) && strstr($temp_destination, $destination)){  
                    $result[]= $object;
                }
            }
        } else {
            echo 'Failed to decode JSON response';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'css/styles.php' ?>
    <script src="https://kit.fontawesome.com/b75da8b114.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <div>
            <a href="index.php"><img class="logo" src="images/logo.png" alt="logo" srcset="images/logo.png 5x"></a>
        </div>
        <div>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="book.php">Booking</a>
                <a href="contact.php">Contact</a>
                <a href="logout.php"><button class="login-btn">Logout</button></a>
            </nav>
            <div id="menu-btn" class="menu">
                <img class="ham" src="images/hamburger.png" alt="hamburger" srcset="images/hamburger.png 5x">
                <img class="cross" src="images/cross.png" alt="cross" srcset="images/cross.png 5x">
            </div>
        </div>
    </div>

    <div class="book-container">
        <div class="flight">
            <h2>Find the best Flights ...</h2>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="input-tag">
                    From:<input type="text" name="source" placeholder="Source">
                    To:<input type="text" name="destination" placeholder="Destination">
                </div>
                <div class="input-tag">
                    Depart:<input type="date" name="depart" placeholder="Depart">
                    Return:<input type="date" name="return" placeholder="Return">
                </div>
                <div class="input-tag">
                    Adult:<input type="number" name="adult" min="0" placeholder="Adult">
                    Child:<input type="number" name="child" min="0" placeholder="Child">
                </div>
                <div class="classes">
                    Class:
                    <select name="class">  
                        <option value="economy" name="economy">Economy</option>
                        <option value="business" name="business">Business</option>
                        <option value="vistara" name="vistara">Vistara</option>
                    </select>
                </div>
                <button type="submit" name="submit">Search Flights</button>
            </form>
        </div>
    </div>

    <div>
        <?php
            for($j=0; $j<count($result); $j++){   
                ?>
                    <div class="flight-card">
                        <h1>Airline: <?php echo $result[$j]['airline']['name'] ?></h1>
                        <h2>Flight number: <?php echo $result[$j]['flight']['number'] ?></h2>
                        <div class="info">
                            <div class="depart">
                                <h2>From</h2>
                                <h3><?php echo $result[$j]['departure']['airport'] ?> (<?php echo $result[$j]['departure']['iata'] ?>)</h3>
                                <p>Scheduled: <?php echo substr($result[$j]['departure']['scheduled'], 0, 16) ?></p>
                                <p>Time Zone: <?php echo $result[$j]['departure']['timezone'] ?></p>
                            </div>
                            <div class="arrival">
                                <h2>To</h2>
                                <h3><?php echo $result[$j]['arrival']['airport'] ?> (<?php echo $result[$j]['arrival']['iata'] ?>)</h3>
                                <p>Scheduled: <?php echo substr($result[$j]['arrival']['scheduled'], 0, 16) ?></p>
                                <p>Time Zone: <?php echo $result[$j]['arrival']['timezone'] ?></p>
                            </div>
                        </div>
                        <button>Book Now</button>
                    </div>
                <?php
            }
        ?>
    </div>

    <div class="footer">
        <div class="footer-box">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="index.php"><i class="fa-solid fa-caret-right"></i></i>Home</a>
                <a href="about.php"><i class="fa-solid fa-caret-right"></i>About</a>
                <a href="book.php"><i class="fa-solid fa-caret-right"></i>Booking</a>
                <a href="contact.php"><i class="fa-solid fa-caret-right"></i>Contact</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fa-solid fa-phone"></i>9999999999</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>traveltrax@gmail.com</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i>Mumbai, India - 400060</a>
            </div>
            <div class="box">
                <h3>Social Media</h3>
                <a href="#"><i class="fa-brands fa-linkedin"></i>LinkedIn</a>
                <a href="#"><i class="fa-brands fa-square-x-twitter"></i>Twitter</a>
                <a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fa-brands fa-square-instagram"></i>Instagram</a>
            </div>
        </div>
        <div class="copyright">Created by Omkar Parab | All Rights Reserved</div>
    </div>
    <script src="index.js"></script>
</body>
</html>

