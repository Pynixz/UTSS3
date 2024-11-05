<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Hub - Modern View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        body {
            background: linear-gradient(135deg, #f7e9ff, #06add2 );
            font-family: 'Poppins', sans-serif;
            color: #333;
        }
        .navbar {
            background-color: #3b3b3b;
            padding: 20px 20px;
            border-bottom: 2px solid #ff4081;
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .hero-section {
            position: relative;
            text-align: center;
            padding: 35px 20px;
            background: none;
            overflow: hidden;
                }
        .background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Places the video behind other content */
            opacity: 0.5; /* Optional: add opacity to make text more readable */
        }
        .hero-content {
            position: relative;
            z-index: 1; /* Ensures content stays on top */
        }
        .hero-section h1 {
            font-size: 2.5em;
            font-weight: 700;
            color: #333;
        }
        .card {
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 50px;
        }
        .footer {
        color: #fff;
        padding: 40px;
        text-align: center;
        font-size: 0.9em;
        margin-top: 70px; /* Adds space between the contact section and footer */
        width: 100%; /* Makes the footer full-width */
        position: relative; /* Optional: ensures it stays within the flow of the page */
        }
        
        
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">Anime Hub</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Explore</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="form.php">Request Anime</a></li>
                        <li><a class="dropdown-item" href="datatables.php">Anime List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .contact-links img {
        width: 40px; /* Adjust width to desired size */
    }
</style>

<style>
    .contact-links a {
        text-decoration: none;
    }
</style>

    <section class="hero-section">
    <!-- Background Video -->
    <video class="background-video" autoplay loop muted playsinline>
        <source src="Video2.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Welcome to Anime Hub</h1>
        <p class="lead">Explore your favorite anime titles and stay updated with the latest releases.</p>
        <a href="#datatables" class="btn btn-primary">Browse Anime List</a>
    </section>

    <!-- About Section -->
    <section id="about" class="container mt-5">
        <div class="card p-4">
            <h2>About Anime Hub</h2>
            <p>Welcome to Anime Hub, your go-to platform for anime lovers! Whether you’re a seasoned fan or just starting out, we offer a curated selection of timeless classics and the latest releases. Enjoy personalized recommendations and connect with a vibrant community of fellow enthusiasts. Dive into the world of anime with us—explore, discuss, and discover your next favorite series!</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container mt-5">
        <div class="card p-4">
            <h2>Contact</h2>
            <p>Questions? Suggestions? Reach out to us at <a href="mailto:support@animehub.com">support@animehub.com</a> or connect with us on social media.</p>
            <h3>Add social Media<h3>

    <div class="contact-links">
        <a href="https://www.instagram.com/poii.25/profilecard/?igsh=MTdvZTk2d3Y0bTBjeQ==" target="_blank">@poii.25
            <img src="ig.png" alt="Instagram">
        </a>
        <a href="https://discord.com/users/656397478295371777" target="_blank">@sen1ty.
            <img src="Logo-discord.png" alt="Discord">
        </a>
        <a href="https://www.youtube.com/@DhiyaulhaqAlMaududi" target="_blank">DhiyaulhaqAlMaududi
            <img src="yt.png" alt="YouTube">
        </a>
    </div>

    </section>

    <!-- Footer -->
    <footer class="footer">
        <div>&copy; 2023 Anime Hub. All rights reserved.</div>
        <div><a href="#" class="text-light">Privacy Policy</a> | <a href="#" class="text-light">Terms of Service</a></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<style>
    .contact-links {
        display: flex; /* Use flexbox for layout */
        justify-content: center; /* Center the items horizontally */
        align-items: center; /* Center the items vertically */
        font-size: 18px; /* Set the desired font size for social media links */
        flex-wrap: wrap; /* Allow items to wrap if the screen is too small */
        margin-top: 10px; /* Add margin above the links */
    }

    .contact-links a {
        display: flex; /* Allows the text and image to be on the same line */
        align-items: center; /* Vertically center-align the items */
        margin: 0 15px; /* Add horizontal margin for spacing between links */
        color: #007bff; /* Change color of the links */
        text-decoration: none; /* Remove underline from links */
    }

    .contact-links img {
        width: 24px; /* Set a size for the icons */
        height: 24px; /* Set a size for the icons */
        margin-left: 8px; /* Space between text and image */
    }

    .contact-links a:hover {
        text-decoration: underline; /* Underline links on hover */
    }
</style>
</html>