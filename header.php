<?php include './includes/connection.php';?>
<!DOCTYPE html>
<html lang="zxx"  style="  position: relative;
  bottom: 35px;>

<head>
  <!-- meta tag -->
  <meta charset="utf-8">
  <?php
      $page_name= basename($_SERVER['PHP_SELF']);
      // echo $page_name;
      $query=sprintf("select * from meta_description where page_name='%s'",mysqli_real_escape_string($conn,$page_name));
      // echo $query;
      $description="";
      $title="";
      $keywords="";
      $auther="";
      // $qr="select * from meta_description where page_name";
      $result = mysqli_query($conn,$query,MYSQLI_STORE_RESULT);
      while ($row = mysqli_fetch_assoc($result)) {
        $description= $row['description'];
        $title= $row['title'];
        $keywords= $row['keywords'];
        $auther= $row['auther'];
      
    }
?>
  <title><?php echo $title; ?></title>
  <meta name="google-site-verification" content="14j-YrsiBo0P7HFPf-gO1kx5hoP6FQ38LvV1sMaPSmI" />
  <meta property="og:url"           content="https://www.grootacademy.com/" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Groot academy" />
<meta property="og:description"   content="Your grow your knowladge with groot academy" />
<meta property="og:image"         content="https://www.grootacademy.com/assets/images/groot-horizontal-logo-transparent.png" />
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="author" content="<?php echo $auther; ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/x-icon" href="./assets/img/logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="./assets/css/groot.css" rel="stylesheet" />
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/jitin.css" rel="stylesheet" />

  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/soft-design-system.css?v=1.0.9" rel="stylesheet" />


  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />


  <!-- Font Awesome Icons -->

  <!-- CSS Files -->

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
    <!--     Fonts and icons     -->
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="./assets/css/soft-design-system.css?v=1.0.9" rel="stylesheet" />
    


    <!-- Nucleo Icons -->
   
    
    <!-- Font Awesome Icons -->
   



    <!-- CSS Files -->


</head>

<body class="index-page" >


    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                           <nav class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand font-weight-bolder ms-sm-3" href="index.php" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                            <img src="./assets/img/logo.jpg" width="180" alt="image"  style="border-radius: 10px; margin-top: -16px;"/>
            </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-lg-8 ps-lg-5 w-100">
                                <li>
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="./index.php">
                 <b>Home</b>
                 
                </a>
                                </li>
                                <li>
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="./about-us.php">
                 <b>About Us</b>
                 
                </a>
                                </li>

                                <li>
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="./courses.php">
                 <b>Courses</b>
                 
                </a>
                                </li>

                                


                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" href="tel:+918233266276">
                                        <i class="fa fa-mobile me-2"></i>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" title="mobile number"><b>+91-8233266276</b></p>
                                    </a>
                                </li>
                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" href="https://github.com/grootacademy" target="_blank">
                                        <i class="fa fa-github me-1"></i>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on Github">Github</p>
                                    </a>
                                </li>
                                <li class="nav-item my-auto ms-3 ms-lg-0">
                                    <a href="./contact-us.php" class="btn btn-sm btn-outline-primary btn-round mb-0 me-1 mt-0 mt-md-0">Contact us</a>
                                </li>
                                <li class="nav-item my-auto ms-3 ms-lg-0">

                                    <a href="./enroll.php" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0 ">Enroll Now</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                </div>
        </div>
    </div>