<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="/Assets/Images/icon.jpg" type="image/x-icon" />

    <!--Stylesheet css fontawesome-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/main.css" />
    <title><?= $title; ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<body>
    <div class="container-fluid">
        <!--NAVBARR-->
        <div class="navbar">
            <div class="logo">
                <img src="/assets/Images/icon.jpg" height="50px" width="50px" />
            </div>
            <nav style="z-index: 100">
                <ul id="MenuItems">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/product">Products</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a class="font-weight-bold" href="/profile">Profile</a></li>
                </ul>
            </nav>
            <div class="cart-icon">
                <a href="<?= base_url('/favorite'); ?>"> <i class="fas fa-heart"></i></a>
            </div>
            <div class="menu-icon">
                <i class="fas fa-bars" onclick="menutoggle()"></i>
            </div>
        </div>
    </div>