<?php
session_start();

if (!isset($_SESSION['register']) && !isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
require_once "data/db_connect.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg position-fixed">
        <div class="container-fluid">
            <span class="navbar-brand" href="#"><span class="title">Ze Food</span>
            </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="dashboard.php"><span class="colorLink">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="userDishes.php"><span class="colorLink">Dishes</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.php"><span class="colorLink">Reservation</span></a>
                    </li>

                    <li> <a class="nav-link text-light" href="logout.php?logout"><span class="colorLink">Logout</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="hero">

        <div><img src="" alt="hero-photo"></div>
        <div class="absolute">
            <div class="about">
                <p class="about-us">About Us</p>

                <p> Welcome to <span class="title">Ze Food</span>, where the world’s most vibrant flavors come together on one plate. We are a multi-international dining experience that celebrates the rich, diverse culinary traditions from across the globe, blending age-old recipes with innovative techniques to create a unique fusion of tastes.</p>

                <p> With locations spanning all around the world, our passion for food is universal, and our commitment to quality is unwavering. Whether you're savoring the spicy notes of South Asian street food, indulging in the savory delights of Mediterranean cuisine, or experiencing the boldness of Latin American flavors, every dish at [Restaurant Name] is carefully crafted to offer something new, exciting, and unforgettable.</p>

                <p> Our chefs bring a global perspective to every meal, sourcing the finest local ingredients and honoring both tradition and modern culinary trends. We aim to create a dining experience that not only fills the stomach but also sparks curiosity and joy, encouraging our guests to explore the world without leaving their seat.</p>
            </div>
            <div class="allVideos">
                <div class="video-1"><video width="320" height="240" autoplay muted playsinline>
                        <source src="media/3296402-Uhd 4096 2160 25Fps.mp4" type="video/mp4">
                    </video></div>
                <div class="video-2"><video width="320" height="240" autoplay muted playsinline>
                        <source src="media/3338747-Uhd 4096 2160 25Fps.mp4" type="video/mp4">
                    </video></div>
                <div class="video-3"><video width="320" height="240" autoplay muted playsinline>
                        <source src="media/3769033-Hd 1920 1080 25Fps.mp4" type="video/mp4">
                    </video></div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>