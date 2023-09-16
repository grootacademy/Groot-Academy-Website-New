
<?php
 $this->disableAutoLayout();
?>


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
    <title>Stomer Study App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="<?php echo Site ?>img/core-img/logo-small.png">
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="img/core-img/logo-small.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo Site ?>img/core-img/logo-small.png">
    <link rel="apple-touch-icon" sizes="167x167" href="<?php echo Site ?>img/core-img/logo-small.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo Site ?>img/core-img/logo-small.png">
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


<div class="page-content-wrapper">
      <div class="container">
        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
          <!-- User Information-->
          <div class="card user-info-card">
            <div class="card-body p-4 d-flex align-items-center">
              <div class="user-info">
                <h5 class="mb-0">Student Attendance </h5>
                <!-- <p class="mb-0 text-dark"></p> -->
              </div>
            </div>
          </div>
          <!-- User Meta Data-->
          <div class="card user-data-card">
            <div class="card-body">
              <!-- <form action="" method=""> -->
              <?php echo $this->Form->create();?>
         
               
                <div class="mb-3">
                <?= $this->Flash->render('alrady'); ?>
                  <div class="title mb-2"><span>Security Key </span></div>
                  <input class="form-control" type="number" name="adkey" require>
                  <?= $this->Flash->render('adkey'); ?>
                 
                </div>
               
             
                <button class="btn btn-success w-100" type="submit">Submit</button>
              <!-- </form> -->
              <?php echo $this->Form->end();?>
            </div>
          </div>
        </div>
      </div>
    </div>

      