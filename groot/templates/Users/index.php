<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Stomer Study App">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Groot Admin Panel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <!-- <link rel="icon" href="img/core-img/logo-small.png"> -->
    <!-- Apple Touch Icon -->
    <!-- <link rel="apple-touch-icon" href="img/core-img/logo-small.png"> -->
    <!-- <link rel="apple-touch-icon" sizes="152x152" href="img/core-img/logo-small.png"> -->
    <!-- <link rel="apple-touch-icon" sizes="167x167" href="img/core-img/logo-small.png"> -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="img/core-img/logo-small.png"> -->
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/brands.min.css">
    <link rel="stylesheet" href="css/solid.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href="manifest.json">
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only"></div>
      </div>
    </div>
    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <!-- Background Shape-->
      <div class="background-shape"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10 col-lg-8">
            <!-- <img class="big-logo logo-style" src="img/core-img/logo-small.png" alt=""> -->
            <div class="user-info">
                <!-- <img class="big-logo logo-style" src="img/core-img/logo-small.png" alt=""> -->
                <h5 class="mb-0 text-white">Groot Admin Panel</h5>
                <!-- <p class="mb-0  text-white">#1 Distence Learining Platform</p> -->
            </div>
              <?= $this->Flash->render('error'); ?>
            <!-- Register Form-->
            <div class="register-form mt-5">
              <!-- <form action="home.html" method=""> -->
            
                <?php echo $this->Form->create();?>
                <div class="form-group text-start mb-4"><span>Phone No.</span>
                  <label for="username"><i class="fa-solid fa-user"></i></label>
                  <input class="form-control" id="username" name="username" type="text" placeholder="Enter your phone number" required >
                </div>
                <div class="form-group text-start mb-4"><span>Password</span>
                  <label for="password"><i class="fa-solid fa-key"></i></label>
                  <input class="form-control" id="password" name="password" type="password" placeholder="Password" required >
                </div>
                <button class="btn btn-warning btn-lg w-100" type="submit">Log In</button>
              <!-- </form> -->
              <?php echo $this->Form->end();?>
            </div>
            <!-- Login Meta-->
          
            <!-- View As Guest-->
          </div>
        </div>
      </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.passwordstrength.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/theme-switching.js"></script>
    <script src="js/active.js"></script>
    <script src="js/pwa.js"></script>
  </body>
</html>