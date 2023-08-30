<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking</title>
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

    <div class="about">
        <div class="about-container">
            <div class="about-img">
                <img src="./images/image-10.png" alt="about-img">
            </div>
            <div class="content">
                <h1>About Us</h1>
                <p>
                    TravelTrax is a leading travel booking agency based in Mumbai. We strive to provide seamless travel
                    experiences to our clients by offering a wide range of travel solutions and personalized services.
                </p>
                <p>
                    Our team of experienced travel experts works tirelessly to ensure that every aspect of your trip is
                    taken care of, from flights and car rentals to transportation and activities. We believe that
                    travel should be stress-free and enjoyable, and we are committed to making that a reality for our
                    clients. Whether you're planning a family vacation, a romantic getaway, or a business trip,
                    TravelTrax has got you covered.
                </p>
            </div>
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