<?php 
    include 'connect.php';

    if(isset($_POST['submit']))
    {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        $sql = "Insert into `traveltrax`.`contact`(`name`, `email`, `message`)
        values('$name', '$email', '$message')";

        $insert = mysqli_query($conn, $sql);

        mysqli_close($conn);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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

    <div class="contact-container">
        <div class="heading">
            <h1>Feel free to Contact us.</h1>
            <h3>Connect with our Travel Experts by filling out the form.<br> We'll be happy to help you planning your dream vacation !!!</h3>
        </div>
        
        <div class="form-container small">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                <input type="text" name="name" placeholder="Enter your Name">
                <input type="email" name="email" placeholder="Enter your Email">
                <textarea rows="4" cols="50" name="message" placeholder="Enter text here..." style="resize:none"></textarea>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>  
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