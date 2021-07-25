<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTFF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Assets/Images/icon.jpg" type="image/x-icon" />
    <title><?= $title; ?></title>
    <!--Stylesheet css fontawesome-->
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


</head>

<body>

    <div class="header">
        <div class="container">

            <!--NAVBARR-->
            <div class="navbar">
                <div class="logo">
                    <img src="/assets/Images/icon.jpg" height="50px" width="50px" />
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="<?= base_url('/home'); ?>">Home</a></li>
                        <li><a href="<?= base_url('/product'); ?>">Products</a></li>
                        <li><a href="<?= base_url('/about'); ?>">About</a></li>
                        <li><a href="<?= base_url('/contact'); ?>">Contact</a></li>
                        <li><a href="<?= base_url('/profile'); ?>">Profile</a></li>
                    </ul>
                </nav>
                <div class="cart-icon">
                    <a href="<?= base_url('/favorite'); ?>"> <i class="fas fa-heart"></i></a>
                </div>
                <div class="menu-icon">
                    <i class="fas fa-bars" onclick="menutoggle()"></i>
                </div>
            </div>