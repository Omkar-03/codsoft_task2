<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('location: login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'css/styles.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
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

    <div class="home">
        <div class="swiper">
            <div class="swiper-wrapper slider">
                <div class="swiper-slide slide" style="background:url(./images/image-2.jpg) no-repeat">
                    <div class="content">
                        <h3>Travel far enough,<br> you meet yourself !!!</h3>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(./images/image-3.jpg) no-repeat">
                    <div class="content">
                        <h3>We travel not to escape life,<br> but for life not to escape us.</h3>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(./images/image-7.jpg) no-repeat">
                    <div class="content">
                        <h3>Travel is the only thing you can buy <br> that makes you richer.</h3>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(./images/image-5.jpeg) no-repeat">
                    <div class="content">
                        <h3>Adventure is worthwhile in itself !!!</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <div class="services">
        <h1>Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/flight.jpg" alt="flight-img">
                <h2>Flight Booking</h2>
                <p>Conveniently book domestic and international flights with ease, ensuring a smooth and comfortable
                    journey.</p>
            </div>
            <div class="box">
                <img src="images/hotel.png" alt="hotel-img">
                <h2>Hotel Reservation</h2>
                <p>Securely reserve hotels and accommodations at competitive rates, providing a comfortable stay with
                    excellent service.</p>
            </div>
            <div class="box">
                <img src="images/car.jpg" alt="car-img">
                <h2>Car Rental</h2>
                <p>Efficiently rent cars for local and outstation travel, offering a wide range of vehicles for your
                    convenience.</p>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="about-container">
            <div class="about-img">
                <img src="./images/image-1.jpg" alt="about-img" srcset="./images/image-1.jpg 8x">
            </div>
            <div class="content">
                <h1>Why Choose Us ?</h1>
                <p>
                    With our years of experience, we curate exceptional travel options, from flights and accommodations to tours, 
                    ensuring a seamless and unforgettable journey. Our personalized approach tailors recommendations to your unique 
                    preferences, making each adventure a reflection of you.
                </p>
                <p>
                    At TravelTrax, booking your dream getaway is effortless. Our user-friendly interface simplifies the process, 
                    letting you secure your plans with ease. With a global network of partners, we provide unbeatable deals, guaranteeing 
                    exceptional value for your travel budget. Choose TravelTrax and let's transform your travel dreams into reality 
                    together.
                </p>
            </div>
        </div>
    </div>

    <div class="packages">
        <h1>Packages</h1>
        <div class="box-container">
            <div class="box">
                <h2>Europe</h2>
                <img src="./images/europe.jpg" alt="pkg-img" srcset="./images/europe.jpg 10x">
                <div class="content">
                    A European trip offers diverse cultures, historical landmarks like Eiffel Tower and Colosseum, varied cuisines, 
                    and stunning landscapes. Embrace art, history, and culinary delights for an unforgettable experience.
                </div>
            </div>
            <div class="box">
                <h2>Berlin</h2>
                <img src="./images/berlin.jpg" alt="pkg-img" srcset="./images/berlin.jpg 10x">
                <div class="content">
                    Berlin, Germany's capital, epitomizes history and modernity. Witness the iconic Berlin Wall's remnants and museums 
                    like Pergamon. Savor diverse cuisines and experience its legendary nightlife. 
                </div>
            </div>
            <div class="box">
                <h2>Japan</h2>
                <img src="./images/japan.jpg" alt="pkg-img" srcset="./images/japan.jpg 15x">
                <div class="content">
                    Embark on a captivating journey through Japan's rich tapestry. Immerse in Tokyo's futuristic cityscape, Kyoto's 
                    temples, and Osaka's culinary delights. Experience tradition and modernity harmonize in this land of cherry 
                    blossoms.
                </div>
            </div>
            <div class="box">
                <h2>Switzerland</h2>
                <img src="./images/switzerland.jpg" alt="pkg-img" srcset="./images/switzerland.jpg 13x">
                <div class="content">
                    Discover Switzerland's breathtaking landscapes: the Alps' majestic peaks, serene lakes, and charming villages. 
                    Immerse in outdoor adventures or savor Swiss chocolate and cheese, creating memories to treasure.
                </div>
            </div>
            <div class="box">
                <h2>New York</h2>
                <img src="./images/newyork.jpg" alt="pkg-img" srcset="./images/newyork.jpg 7x">
                <div class="content">
                    Experience the pulse of New York: Times Square's neon lights, Central Park's green oasis, and Statue of Liberty's 
                    historic grandeur. Explore museums, theaters, and diverse neighborhoods that define the city's dynamic 
                    spirit.
                </div>
            </div>
            <div class="box">
                <h2>Dubai</h2>
                <img src="./images/dubai.jpg" alt="pkg-img" srcset="./images/dubai.jpg 25x">
                <div class="content">
                    Embark on a dazzling Dubai getaway: Skyscrapers that touch the heavens, luxurious shopping, and Palm Jumeirah's 
                    archipelago. Dubai's futuristic charm, and cultural fusion promise an unforgettable Arabian adventure. 
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="index.js"></script>
</body>
</html>