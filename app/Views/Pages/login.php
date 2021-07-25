<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="/Assets/Images/icon.jpg" type="image/x-icon" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <!--Stylesheet css fontawesome-->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Style Css -->
  <link rel="stylesheet" href="/css/style.css" />

  <title>Login</title>
</head>

<body>
  <div class="container mt-5">
    <div class="d-flex justify-content-around">
      <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-dark" href="/apbpa">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="/apbpa#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="/apbpa#contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="logo">
        <h2>Sewa Barang</h2>
      </div>

      <div class="sosmed-Links">
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-facebook"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
        <a href=""><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>

  <div class="content-login">
    <div class="form">
      <form action="<?= base_url('/login/cek_login'); ?>" method="post">
        <img src="/Assets/Images/img-6.jpg" alt="Foto" height="250px" width="250px" />
        <div class="form-group d-flex">
          <i class="fa fa-user mt-2 mr-3"></i>
          <input type="text" class="form-control" id="formGroupExampleInput" name="username" placeholder="Username" />
        </div>
        <div class="form-group d-flex">
          <i class="fa fa-key mt-2 mr-3"></i>
          <input type="password" class="form-control" id="formGroupExampleInput2" name="password" placeholder="Password" />
        </div>

        <button type="submit" class="btn btn-submit mt-3">Login</button>
      </form>
    </div>
  </div>

  <!-- BUBBLE CSS -->
  <div class="purple"></div>
  <div class="dark-Purple"></div>
  <div class="yellow"></div>
  <div class="purple-md"></div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>