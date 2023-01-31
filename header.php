<?php include './includes/connection.php';?>
<!DOCTYPE html>
<html lang="zxx">

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
  <meta property="og:url"           content="https://www.grootacademy.com/" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Groot academy" />
<meta property="og:description"   content="Your grow your knowladge with groot academy" />
<meta property="og:image"         content="https://www.grootacademy.com/assets/images/groot-horizontal-logo-transparent.png" />
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="author" content="<?php echo $auther; ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
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
            <div class="col-12" >
                <nav class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0" style="  background-color: #ffff; border-radius:50px;">
                        <a class="navbar-brand font-weight-bolder ms-sm-2" href="index.php" rel="tooltip" title="Designed and Coded by groot software Team" data-placement="bottom">
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
                            <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-0 w-100">
                                <li>
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="index.php">
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

                                <li class="nav-item dropdown dropdown-hover mx-2">
                 
                                    <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                                        <div class="d-none d-lg-block">
                                            <ul class="list-group">



                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="  ">
                                                        <div class="d-flex">
                                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <title>settings</title>
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF"
                                      fill-rule="nonzero">
                                      <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(304.000000, 151.000000)">
                                          <polygon class="color-background" opacity="0.596981957"
                                            points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                          </polygon>
                                          <path class="color-background"
                                            d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                            opacity="0.596981957"></path>
                                          <path class="color-background"
                                            d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                          </path>
                                        </g>
                                      </g>
                                    </g>
                                  </g>
                                </svg>
                                                            </div>
                                                     
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
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