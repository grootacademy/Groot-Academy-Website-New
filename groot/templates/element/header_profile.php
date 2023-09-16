<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Groot Panel">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Groot Panel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <!-- <link rel="icon" href="<?php echo Site ?>img/core-img/logo-small.png"> -->
    <!-- Apple Touch Icon -->
    <!-- <link rel="apple-touch-icon" href="img/core-img/logo-small.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo Site ?>img/core-img/logo-small.png">
    <link rel="apple-touch-icon" sizes="167x167" href="<?php echo Site ?>img/core-img/logo-small.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo Site ?>img/core-img/logo-small.png"> -->
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo Site ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Site ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo Site ?>css/all.min.css">
    <link rel="stylesheet" href="<?php echo Site ?>css/brands.min.css">
    <link rel="stylesheet" href="<?php echo Site ?>css/solid.min.css">
    <link rel="stylesheet" href="<?php echo Site ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo Site ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo Site ?>css/nice-select.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo Site ?>style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href="<?php echo Site ?>manifest.json">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only"></div>
      </div>
    </div>
    <!-- Header Area -->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between d-flex rtl-flex-d-row-r">
        <!-- Logo Wrapper -->
        <div class="logo-wrapper"><a href="<?php echo Site;?>">
        <!-- <img src="<?php //echo Site ?>img/core-img/logo-small.png" class="resize" alt=""> -->
      <h3>Groot</h3>
      </a></div>
        <div class="navbar-logo-container d-flex align-items-center">
          <!-- Cart Icon -->
          <?php if($login_status==true){?>
          <!-- User Profile Icon -->
          <!-- <div class="user-profile-icon ms-2"><a href="profile"><img src="<?php //echo Site ?>img/bg-img/7.png" alt=""></a></div> -->
          <?php } ?>
          <!-- Navbar Toggler -->
          <div class="suha-navbar-toggler ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas">
            <div><span></span><span></span><span></span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas" aria-labelledby="suhaOffcanvasLabel">
      <!-- Close button-->
      <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <!-- Offcanvas body-->
      <div class="offcanvas-body">
        <!-- Sidenav Profile-->
        <div class="sidenav-profile">
         
        <?php if($login_status==true){?>
            <div class="user-profile"><img src="<?php echo Site ?>img/bg-img/7.png" alt=""></div>
          <div class="user-info">
            <h5 class="user-name mb-1"><?php echo $user_name?></h5>
            <!-- <p class="available-balance text-dark">Available points <span class="counter">499</span></p> -->
          </div>
        </div>
          <?php } ?>
          
 
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
        <?php if($login_status==true){?>
            <li><a href="<?php echo Site; ?>view-dmart"><i class="fa-solid fa-user"></i>View Dmart</a></li>
            <li><a href="<?php echo Site; ?>view-academy-enquiry"><i class="fa-solid fa-bell lni-tada-effect"></i>View Academy Enquiry </a></li>
            <li><a href="<?php echo Site; ?>view-software-enquiry"><i class="fa-solid fa-file-pdf"></i>View Software Enquiry</a></li>
         <?php }?>

          <?php if($login_status==true){?>
          <li><a href="<?php echo Site; ?>logout"><i class="fa-solid fa-toggle-off"></i>Sign Out</a></li>
          <?php }?>
        </ul>
      </div>
    </div>
 