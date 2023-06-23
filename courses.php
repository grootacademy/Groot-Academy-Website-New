<!--
=========================================================
* Groot Academy - v1.0.9
=========================================================

* Product Page:  https://www.creative-tim.com/product/soft-ui-design-system 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!-- header start    -->
<?php include './includes/connection.php';?>
<!DOCTYPE html>
<html lang="zxx"  style="position: relative;
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
  <meta property="og:url"           content="https://www.grootacademy.com/" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Web development courses with placement- Job Oriented courses" />
<meta property="og:description"   content="With the use of real-world projects and case studies, our experts experienced IT training will give you a practical understanding." />
<meta property="og:image"         content="https://www.grootacademy.com/assets/images/groot-horizontal-logo-transparent.png" />
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="author" content="<?php echo $auther; ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
        <link rel="icon" type="image/x-icon" href="./assets/img/logo.jpg">
s
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="./assets/css/groot.css" rel="stylesheet" />
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/jitin.css" rel="stylesheet" />

  <link href="./assets/css/comments.css" rel="stylesheet" />

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
                            <img src="./assets/img/groot.png" width="180" alt="image"  style="border-radius: 10px; margin-top: -16px;"/>
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
<!-- header end -->

            </div>
        </div>
    </div>
    <header class="header-2">
        <div class="page-header min-vh-75 relative" style=" background-image: linear-gradient(310deg, #FF0080 30%, #7928CA 50%);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">All Courses</h1>
                        <p class="lead text-white mt-3">Life needs to be longer to take a chance on stale or outdated schooling.
                        Learn how to programme properly to increase your future employment prospects.
                         </p>
                    </div>
                </div>
            </div>
            <div class="position-absolute w-100 z-index-1 bottom-0">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
          </g>
        </svg>
            </div>
        </div>
    </header>

    <section class="my-5 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                    <div class="card card-background card-background-mask-primary tilt" data-tilt>
                        <div class="full-background" style="background-image: url('./assets/img/team-working.jpg')"></div>
                        <div class="card-body pt-7 text-center">
                            <div class="icon icon-lg up mb-3 mt-3">
                                <svg width="50px" height="50px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>box-3d-50</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                          <path d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                          <path d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                          <path d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
                            </div>
                            <h2 class="text-white up mb-0">Beginner</h2>
                            <p>I know bare minimum coding / starting from scratch</p>
                            <span>12 week course.</span>
                            <a href="./enroll.php" class="btn btn-outline-white mt-5 up btn-round">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                    <div class="card card-background card-background-mask-primary tilt" data-tilt>
                        <div class="full-background" style="background-image: url('./assets/img/team-working.jpg')"></div>
                        <div class="card-body pt-7 text-center">
                            <div class="icon icon-lg up mb-3 mt-3">
                                <svg width="50px" height="50px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>box-3d-50</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                          <path d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                          <path d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                          <path d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
                            </div>
                            <h2 class="text-white up mb-0">Intermediate</h2>
                            <p>I know coding in 1 programming language. I can build basic apps</p>
                            <span>12 week course.</span>
                            <a href="./enroll.php"  class="btn btn-outline-white mt-5 up btn-round">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                    <div class="card card-background card-background-mask-primary tilt" data-tilt>
                        <div class="full-background" style="background-image: url('./assets/img/team-working.jpg')"></div>
                        <div class="card-body pt-7 text-center">

                            <div class="icon icon-lg up mb-3 mt-3">
                                <svg width="50px" height="50px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>box-3d-50</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                          <path d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                          <path d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                          <path d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
                            </div>
                            <h2 class="text-white up mb-0">Advanced</h2>

                            <p>I am good at coding. I know basic DSA and problem solving. I can build basic / advanced apps.</p>
                            <span>12 week course.</span>

                            <a href="./enroll.php" class="btn btn-outline-white mt-5 up btn-round">ENroll Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    
    <section class="my-0 py-0">
        <div class="container">
            <div class="row align-items-center">
                                <div class="col-lg-12 ms-auto me-auto p-lg-0  mt-0">
                    <div class="card  card-background-mask-primary tilt" data-tilt style="background-image: linear-gradient(310deg, #7928CA 50%, #FF0080 50%);">
                        <div class="full-background" style="background-image: url('./assets/img/logo.jpg')"></div>
                        <div class="card-body pt-4 text-center">

                            <h1 class="up mb-0">  COURSE FEATURES</h1><br><br>
                            <h3 class="text-white">100% job-oriented courses.</h3>
                            <h3 class="text-white">Guaranteed job placement support.</h3>
                            <h3 class="text-white">Interview preparation assistance.</h3>
                            <h3 class="text-white">Recognized certifications.</h3>
                            

                            <a href="./enroll.php" class="btn btn-outline-white mt-5 up btn-round">ENroll Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <br><br>
                        <h4 style="text-align:center;">PROCESS</h4>
            <br>          
    <section class="my-0 py-0">
        
        <div class="container">
        <div class="container">
            <div class="row align-items-center">

                    <div class="col-lg-2  me-auto p-lg-2  mt-1">
                    <div class="card  card-background-mask-primary tilt" data-tilt style="background-image: linear-gradient(310deg, #7928CA 50%, #FF0080 50%);">
                        <div class="full-background" style="background-image: url('./assets/img/logo.jpg')"></div>
                        <div class="card-body pt-3 text-center">
                            <h4 class="text-white mt-3">Theory</h4>
                            
                            
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 ms-auto me-auto p-lg-2  mt-1">
                    <div class="card  card-background-mask-primary tilt" data-tilt style="background-image: linear-gradient(310deg, #7928CA 50%, #FF0080 50%);">
                        <div class="full-background" style="background-image: url('./assets/img/logo.jpg')"></div>
                        <div class="card-body pt-0 text-center">

                            <h4 class="up mt-2 text-white"> Practical</h4><br><br>
                            

                        </div>
                    </div>

                </div><div class="col-lg-2 ms-auto me-auto p-lg-1  mt-1">
                    <div class="card  card-background-mask-primary tilt" data-tilt style="background-image: linear-gradient(310deg, #7928CA 50%, #FF0080 50%);">
                        <div class="full-background" style="background-image: url('./assets/img/logo.jpg')"></div>
                        <div class="card-body pt-4 text-center">

                            <h4 class="up mb-0 text-white">  Assignments</h4><br>
                            
                        </div>
                    </div>

                </div><div class="col-lg-2 ms-auto me-auto p-lg-2  mt-1">
                    <div class="card  card-background-mask-primary tilt" data-tilt style="background-image: linear-gradient(310deg, #7928CA 50%, #FF0080 50%);">
                        <div class="full-background" style="background-image: url('./assets/img/logo.jpg')"></div>
                        <div class="card-body pt-4 text-center">

                            <h4 class="up mb-0 text-white">Certifications</h4><br><br>
                           
                        </div>
                    </div>

                </div>
              
                <div class="col-lg-2 ms-auto me-auto p-lg-2  mt-1">
                    <div class="card  card-background-mask-primary tilt" data-tilt style="background-image: linear-gradient(310deg, #7928CA 50%, #FF0080 50%);">
                        <div class="full-background" style="background-image: url('./assets/img/logo.jpg')"></div>
                        <div class="card-body pt-4 text-center">

                            <h4 class="up mb-0 text-white">Resume and <br>interview <br> training</h4>
                           
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 ms-auto me-auto p-lg-2 mt-1">
                    <div class="card  card-background-mask-primary tilt" data-tilt style="background-image: linear-gradient(310deg, #7928CA 50%, #FF0080 50%);">
                        <div class="full-background" style="background-image: url('./assets/img/logo.jpg')"></div>
                        <div class="card-body pt-4 text-center">

                            <h4 class="up mb-0 text-white">Got place</h4><br><br><br><br><br>
                           
                        </div>
                    </div>

                </div>


            </div>
        </div>

        
    <div class="col-lg-12 col-sm-12 col-xs-12 px-lg-1 mt-lg-0 mt-4">
                        <div class="info-horizontal bg-gradient-primary border-radius-xl p-5">
                          <div class="icon">
                          </div>
                          <div class="description ps-0">

                            <h5 class="text-white">OUR PLACEMENT CELL</h5>
                            <p class="text-white">Our web development courses with placement are career oriented and prepare our trained students for IT Companies' new job openings.</p>
                            <br><br>
                            <ul style="list-style: square;">
                                <li>We support you till you get your job</li>
                                <li>We help you make your resume as per the industry standards</li>
                                <li>50+ software organizations hire from us.</li>
                            </ul>
                            <button class="bg-gradient-primary ps-10 btn btn-primary" ><a style="background-image: linear-gradient(310deg, #7928CA 50%, #FF0080 50%);  " href="./enroll.php" class="text-white icon-move-right bg-">
                            ENROLL FOR DEMO CLASS
                              <i class="fas fa-arrow-right text-sm ms-1"></i>
                            </a>
                            </button>
                          </div>
                          
                        </div>
                      </div>

                    
    </section>   
    



    
    <section class="my-5 py-5">

        <div class="container mt-sm-5 mt-3">
            <div class="row">
                <div class="col-lg-3">
                    <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                        <h2>Top Populer Courses</h2>
                        <!-- <h6 class="text-secondary font-weight-normal pe-3">A selection of 45 page sections that fit perfectly in any combination</h6> -->
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-4 col-xs-6 col-sm-6 mt-md-0">
                            <a href="./10.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="https://static.kent.ac.uk/nexus/ems/818.jpg"  width="256px" height="130">
                                    <b style="text-align: center; font-size:medium;">Software Engineering</b>
                                </div>
                                <div class="mt-2 ms-2">
                                    <p style="text-align: center;">After 10th</p>

                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-xs-6  col-sm-6 mt-md-0">
                            <a href="./12.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="https://w7.pngwing.com/pngs/33/667/png-transparent-graphy-computer-software-software-engineering-programmer-technology-electronics-text-logo.png"  width="256px" height="130">
                                    <b style="text-align: center; font-size:medium;">Software Engineering</b>
                                </div>
                                <div class="mt-2 ms-2">
                                    <p style="text-align: center;">After 12th</p>

                                </div>
                            </a>
                        </div>
                        <div class="col-md-4  col-sm-6 col-xs-6 mt-md-0">
                            <a href="./our_internship_programmes.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="https://media.istockphoto.com/id/1344688156/photo/portrait-of-a-man-using-a-computer-in-a-modern-office.jpg?b=1&s=170667a&w=0&k=20&c=AAVVOvN9uY1Rd_0QsWb8WvBN-4VSUdCORiZx51s5OLc=" width="256px" height="130">
                                    <b style="text-align: center; font-size:medium;">Our Internship Program</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./course_front_end_development_react_js.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="https://res.cloudinary.com/practicaldev/image/fetch/s--3zWuwYa3--/c_imagga_scale,f_auto,fl_progressive,h_900,q_auto,w_1600/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/pdib9r9rk5j1m7oala1p.png" width="256px">
                                    <b style="text-align: center; font-size:medium;">Front End Developement</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./course_front_end_development_angular_js.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIlcBh3y5knx8PbLtCF4shyag0sFWGlCmV82vGZ_u6zvS94r1Hu2eu-E1He9C9lAm3wMA&usqp=CAU" width="256px">
                                    <b style="text-align: center; font-size:medium;">Front End Developement</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./course_full_stack_development.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190531175841/Full-Stack-Web-Developer.png" width="210px">
                                    <b style="text-align: center; font-size:medium;">Full Stack Development</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./course_back_end_development_with_java.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="https://www.jrebel.com/sites/default/files/image/2020-05/image-blog-revel-top-java-tools.jpg" width="256px" height="140">
                                    <b style="text-align: center; font-size:medium;">Back End With Java</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./course_back_end_development_with_php.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQupsClh1SHGlD1X8Z3QNFk7WpUbOMHFbN91Q&usqp=CAU" width="256px">
                                    <b style="text-align: center; font-size:medium;">Back End With PHP</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./course_back_end_development_with_node_js.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASsAAACoCAMAAACPKThEAAAAz1BMVEUiIiL///8AAABbh2MhICFrpWaBvngbGxtUVFRNTU0YGBhvqW1tpmxyrG9ro2olJSV5tHP09PQeGB5ilmVlmmZmZmYcFB0fGx8pLipgYGAqMipMbklYg1RVflFgkGRaiFYMDAxmm2G2trbg4OARERGKiopCXkA4SzbR0dHDw8Pp6emTk5Otra1/f39QUFCkpKQvPC49VDs6Ojpubm4yMjJZg2JgklxDQ0NBXD9IZ0UyQDFQdUwZChoWARiFxXxUeVsRBhJhpmFkqWFHZEw+VzxSVuFAAAAHwklEQVR4nO2ci1biyhJASVMxippIwHQkEBJEUHQEfKACxzlzx///ptvpPEjnZc69njHR2mvNWjOCsbOnu1Jd1dJoIAiCIAiCIAiCIAiCIAiCIAiCIAiCIAiCIAiCIAiCIAhSPwhRPnsIdaF1eXlH4LNHUQtAa0vSqIW2SsBdSdLcGX/2SKpP4Epq/yCtzx5L1QldSdL5PsoqZudKku4waBUSd7WPyUMh6Ko86Ko86Ko86Ko86Ko86Ko86Ko86Ko86Ko86Ko8X9tV68PKAQAlXCn1Fdgi9/fOe7ZA1xr0vaIBOIriwDuugDzd1rQer5DTmSTNTouHT3XrSH2jtPBSLeei3Z6TcaErRxtJ0uVBDSvMQO4u/bu6esgfPmyXhyfHx117us2/RYWczbwLMe35rlrk2n9xRJyPuoc/hKPcRLcl3bSczDfBduHuMVWHalft94xsWzvpzJaU40oh97vXLmpVYWZrRhLIGj4Y2nBv78RzddTtdlVL0zNsOdqNlEXcVVxnMAHrErYUsj9L3tr5fnL41LD2XkNXqierO9GTYatFfrSTl0q5cpRR8tXLO/Lv3+f/T/I/OUQMW/DX9ISZirvqqkcdMWyxQHWebSrmqkUusnTekOo3xsZO9pqR4n09Fqi63FTkSu1wW4fDXdgC8pApXXCVr7P6jbFx3prxh+/LgkZ/LyR01fVkqerR4UbzZSnaPP9KoSulSOf5fqWnlrJfdH9hp4r+fM1w1fFcqeqxzYMWQO7yi7lyin/cQZVDfOu0zOC1Zuc15SqYWKraNKHElbgr5bb4TadVXoVlXT2eZLjyZdmBq7Myrg6+kKv5jRi+QldN+zXDFY/vj9muzhNLMtPV1VVtXY0eCHkQcp/IVTSxBFdMlt3MctW+Js71e67Ozwg5E2J9bVydP3kJFZDb2IwIXDEhzdeUK5u56jxmuRppTgMciGtPuWI5wt9a728heT2ri6swvRk/pVx1bLt5nJ5XdqfLJKZdBWf5gMTUpFxpjj5RZavhkOhL80on74Kr4GvxqtPOld3McGXbma6iK0GizhBz1daMocxYQejqquL7nJKuup6WowxXzWJXyfqV4Gq78ly5mu+q+vvnkq5cL443/01XNajLlHXlrjr2I98Sfpyr2BqsRb2vpCuZyWJ5Q+l5FWynFafAVWNMJ65sAbROb2tRRy7viml5tF/LufJSBgbRYqlm6jk4OyO62TO8b614oAoo6erXL5flUTwhLeNKkq5Jq0WEZDQjF2UPvnpY8inp6j+/uJSmXdaV1D69F3dLmXucvMJ+JSnrik8rNrGOy7pKkbN3rsHzL6Ssq2bIR7vyNoU1WYgxV+dR1uzsNoTcFUAnVPWopl09eu34d6uGB7m1vqJ+ZJXYubppRQOG8Ui8Q9B+RhMr5eq36X+jGMqTzB3/5+1nVU9vHOfP3/o/JnQl/uoakKfLuKsG6IvQVlfcD/5cRE1CJ7+WfvkUTtrsplj7wvmTd/2/4btK78XCvnBUAAc6DcJ73FVzGj8F4h+ISCNefjzO6mHMK92W4HBXmc8iPz263d0kbfzmsjonkavfkDgw0yIXaQ3XicsDubtKvmdW6a6Ej/I0y92LOc5opsVd6Ka3EB8PuStV3Zh68AJA9LYxSfSUbzIur5ADIWzNftTiWag4Tv6hGGcsvgb6mtmyPVdHnXUUqChdmNE/drGOB6qcI0NC2Lr+mr+LCTBtNtXDQ3USncACfbmS3U0jnGSxsDW7z58vYyV4bo60eqQM/xyg2m/7ZBMdkQFjwUsrsjsxooMgwVbwuvCIAvA2yNXTVzXFoZoWnmEAXdswT/3eiyvLq9hBEMeZz9/d6zFbD7UIVB8Bpb4jgzkbcGdG+BIUxMEd8JXnVBwwpitv7fHIBcbaW4sWFB8k/Z6A0eszOfHItWSTzH3b+raSqdc3Rm/4gSp+aJQalrck195CpOvlVM/97m+F/hwEqsSXTR62NLYjen5bTnA9MugbW20vGYfcWdhiMWyow2T58jL5hJFVD6MvD/1A5YcloLph6Pyv1JjIskknS+v5+ZNHWQ2MoWzx9AAW0wWw3GFpDfqbl7W3JsGU5R5dTswJrkEPz5Ue/KVv0Kkr+7BI1YAecwV0/TJFVR47V315YDA5bn+zGXiRyghcYc4QIrj6ayO7i62uG1uWRkwhcIUEiK4G8mpL2XYFDFl+oehKRHC1tWR5sFyY7FFo9kycVwnEeGXy0O6uhpb3IERXIqIrMDfhg3CI8yqJ6Iotvq05fbb6zFjfQFcigisYDHoAXuquD2UZXSUQXDXY08+v8RkWukoh5gxD2Z1uDbYQ1y5LRtGViBivFiyoq6vhygvwa4ztCURXtNcPnoPDBcWcIQFzteFNG+7KqydP3ybPU14l1dGVgM6CeN80QldeQ4YymCG6fXFl99v0Z8oAftNmq7nyJlZWB4OXZ7AaEwd03rQZuoIYvwe90VCVCAWLB/RB1D7VGxvVC+85nwfyrdG15401NXR/DdLtxJtpy4LPmfnOsG2NTjVrAzToQbP8HZdfLmCueK+Z96AHZtYHzCAhQHmvmf0ZrjFQvQPofE65SzRVAjDWVvoTi5BsQMcGF4IgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgCIIgyJ/kv8IXzRr4D5/wAAAAAElFTkSuQmCC"
                                        width="256px">
                                    <b style="text-align: center; font-size:medium;">Back End With Node Js</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./course_advance_java.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="https://www.deccansoft.com/Documents/CourseImages/34b47ea7-245e-4681-89f2-1b7bb81ce464_advancedjava.jpg" width="210px">
                                    <b style="text-align: center; font-size:medium;">Advance Java</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./course_data_structure_and_algorithms.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="./assets/img/datastructure.png" width="190px" height="130px">
                                    <b style="text-align: center; font-size:medium;">Data Structure & Algorithm</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./course_spring_mvc.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="./assets/img/Python_logo.jpg" width="256px">
                                    <b style="text-align: center; font-size:medium;">Python</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div> 
                        
                        
                        
                        <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./course_cc++.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQDw8PDxAPDw0PDw4QDhAODxAPDw8PFhUWFhURFRUYHSkiGBoxGxUVIT0iJykrLi8uFx8zODMsNygtLisBCgoKDg0OGxAQGy0mICYtKy0tLy0tKy0tLy0tLTctLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAAAQIEBQYHAwj/xABDEAABAwEFBAQLBgUEAwEAAAABAAIDEQQFEiExBkFhcRMiUYEHIzJCUnKCkaGxwTNDYnOy0RRTwuHwNGOSoiQlgxX/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAwQFAgEG/8QAMBEAAgIBAwAIBgIDAQEAAAAAAAECAwQRITESM0FhcYGx4SJRkaHB0RMyI/DxQhT/2gAMAwEAAhEDEQA/AOVqFKhASihEBKhEQBSoUoAiIgCIiAVSqiiUQEpVAlEBISqgIAgJqoqlEogFVNVFEogFUqlEogJqmJKKKBATVKqKBSAgFUxIQooEBOJKqKKaIBiTEooFOFAKqVFFKAIiIChERASoREAUqEQBSoVcbC4hrQXOcaNa0EknsAGqApUrbLm2Oc6j7USxu6JhGM+s7QchnyWan2Ssbm0ax0Zpk5sjyR3OJB9ysRxbJLXT6kEsitPTU5yoWZvnZ2ezVdTpIR94waD8bfN+XFYdQSi4vRomjJSWqKaJRKJReHpKUQKEBNEooopogBCUQhRRASApVNFKAUSiiiUQFVELVACUQDApAV5dt1TWh2GJhIHlOOTG83fTVbldux0DB44mZ+/NzGDgADU96mronZwRWXRhyaDhUYVv95bHQPb4gmGTdUuew8CCajuWmXldc1ndhlYW18lwzY7k76aryymdfP1Fd0J8FoGpRRRSAoiUjCqgERAEREAREQFClKJRAFCmiUQEIr27rtmtDsMLC4jynaMb6zt3zW7XLspDDR8tJpRnmPFsPBu88T7gpaqZWccfMjstjDk1e5tm57TRxHRQn7x4zcPwN389FvN03NDZhSJvXIo6R2cjuFdw4DJZBStKrHjXvy/n+vkULL5T24QREU5CQtcvnZOKar4aQynOgHinHi0eTzHuK2RQuZ1xmtJI7hOUHqjk143fNZ3YJmFp806scO1rtCrRdftNnZI0ska17Dq1wqOfNadfOxzm1fZTib/KeesPVcdeRz4lZ1uJKO8d19y7XkxltLY1JFVJGWktcC1wNHNcCHA9hB0UUVQskFSiICCoqqkQEBCpRAU1VSkD3nIcT2LY7n2Sllo+esMeuH71w5eb3+5dwrlN6RRzKcYLWTMBZ4HyODI2ue86NaKn+w4rbrn2NpR9qdU69Ew5e07fyHvK2W77vigbgiYGDedXOPa46lXav1YcY7z39Pco2ZUntHb19jzhiaxoaxrWsbkGtAAHIBeiIrhVC85oWvaWPa17DkWuAIPcV6IgNQvjY7V9lNP9p5y9lx+R961C0QPjcWSNcx41a4UK68rS8LuitDcMrA4bjo5vFrtQqduJF7w2f29i1XlNbS39fc5SoWyXxsnLFV8NZo+ynjWjkPK7vctcVCcJQekkXoTjNaxZCIi4OgiIgCIiALaNm9mBM1s05IiObGNyLx6RO4ctVqztDyXX7M0NYxoFGhjQANwAAAVrFqU5PpdhXyLHBLTtFngZG0Mja1jBo1ooAq1KhaiRnNkrO3XstPMA5/iYzoXgl5HBv70Wb2Y2cEYbPO2sxoWMcMoxuJHpfJbSqN2Xo9IfUuVY2u8/oa7Ztj7K0dfpJD+J+Ee5tFcO2WsZ+6I5SSfus0ipu6x/+n9SyqoLsRqds2MjIrDI9h7H0e36EfFaveV1TWY0lZQHyXtzY7kfoc11ReU8LZGlj2hzHCjmuFQQpq8qcf7bojnjQfGxyJFm9pLjNldiZV1neaNJzLHegfoVgZZWsBc4hrRqSaBaUJqcdYlCUXF6Ms71ueG0ikresBRsjcpG9+8cDkufX5dL7LLgcQ5rhijeMsTeI3FbdeO0JNWwCg/mOGfcN3etXvZ5cyriXOMrSSSST1XKHKx04Ozhr7+J3j5H+RVrdMxCIiyTUCIiAK7uq732mVsUdATm5x0Y0auKtFuPg+YP/Jdv8UK8OsVJTBTmov8A3bUjtm4QckZy6Lggs1C0Y5d8j6F3s+j3LKoi2YxUVojLlJyerIXvYrHJM/BEwvdvpoB2k6AK4ua632qURtyaM5H0qGN/fgukXdYI7OwRxNwt3nznH0nHeVXvyFXsuSWmh2b9hrNg2KFAbRKa+hFkB7R19yzEWzFjb91i4ue8/VZlFQlfZLl/gvRprjwjCy7MWN33WE9rXvH1osPeGxeRNnlNfQl3+0P2W5Ikb7I8P8iVNcuUcktljkhfglYWP7DoR2g6Ecl4rq142CO0MMcrajcfOae1p3Fc3vi7H2aUxvzac430ye3t58FfoyFZs9mUbqHDfsLFYq97ggtNS4YJd0jKB3tDzu9X1qtbIhikcGjcN55DetdvC/nvq2KsbO3zz37u5WXDprRrYr/y9B6p7moXnYXWeV0T6Et0LdHNOh4clarIXtqw7zir8Fj1jX1quxwXZ+tTWos/krU32/vQIiKIlCIiAh2h5Fdfh8lvqt+S5A7Q8iuvw+S31W/JXcHmXkU8zheZ6LP7G3aJpzI8Vjho6h0dIfJHdQnuC19dF2Os2CxsO+QukPvoPgArOVPoV7duxDjw6U/AzqgmnJStQ24vMtDbMw0xtxSka4a0De+h9w7VmVwc5dFF+c1CPSZ73lthFGS2FvTEZF1cMdeBpVyx8W20tetDGW9jXOafearVUWnHFqS001KDyLG+Tplz37DacmkslAqY3+VTtHaFllxW03o2zFr8ZbI0hzAzy67jw71YbTbeWy2t6Oos8BFHRxEgyZZ43aka5ZDmoXgNy+Djv7P2d/8A2xjH4ue7/djfNtdurJFHJZowLVM4Frgx3ioz2ufvIOdB2Z0XILXbJJTikcT2DRo5BW6LRoojStEZt+RK56sK1vP7Mfmt/S5XStbz+zH5rf0uXmV1Mj3E6+Pj+DFIiL58+gCIiAlbj4PtLTzh/rWnLcfB9paecP8AWp8brV5+jIcjq35epuCgKVk9mbN0lrhac2hxefZBcPiAtaT6KbfYZiWrSRvWz12izQNZTxjutKe153chp3LKIqJHhoLiaAAknsA1Kw5Scm2+WbCSitEW15XjFZ2Y5XUGjQM3OPYBvWq2nbZ5PioWBu4yEuJ7hSnvKwF73i60zOldWmkbfQZuH+b1ZrSqxIpfHuyhZkyb+HZG12XbZ9fGwtLd5iJaR3GtfeFtV3XhFaGY4nYhoRo5p7CNy5UrWHa0WKXHDSV9C17a+LI7HH9ksw4yXwLRnkMpx/vwdltNoZEx0kr2xxtFXPe4Na0cSVyrbnb6CdvQWRnSYXVFoeC0A7+jbqeZpyOq02/torVbn4rTIXAGrI29WKP1W/U1PFeFlua0ywvtEcL32eLF0kgphZhAc6vcQV3Rhxr0nN7/AG9yG7MlZrGtbff2LOaVzyXPcXOOpJqqEV/Pc1pjgZaXwvbZn4cEpphdi0p7lfbSM9Jy4MBevme19Fj1kL18z2vosesPM6+Xl6I3cLqI+fqwiIqxaCIiAg6HkV1+HyW+q35LkB0PIrr8Pkt9VvyV3B5l5FPL4XmVrqVxf6WzfkxfpC5cuj7JWjHY4u1mKM8KHL4EKXNXwLx/Bxiv4mu4zS5ttcT/ABs1d3RgcsDf7rpK514VA+zsbbI4zIDSKQ+bG7zHu4GtOdO1V8SSVm/bsT5K1hr8jX55msaXPcGtGpcaBa3eG02IlkHVH8xwzPqjd3rX7dbpJnYpHF3YNGt5DcrZayRlSlrwZB7iSSSSTqSakqlW8L3VDQC4kgNaAS4k5AAdq2C/NmLZYg02iEtY8NIkaccYJHkFw0duoezKql6cddG92V/45aapbGHREXRwFa3n9mPzW/pcrpWt5/Zj81v6XKDK6mRYxOvj4/gxSIi+fPoAiIgJW4+D7S084f61py3HwfaWnnD/AFqfG61efoyHI6t+Xqbgtg2H/wBX/wDKSnOrVr6yuy1o6O2Qk6OJjPtAgfGi07lrXJdxn1PSafedMWOv2v8AC2mmvQye6hr8FkV5yxB7XMdm1zS1w7QRQrGi9GmarWq0ORKwvK9ooB13VfuY3Nx/bvWP2xt1oslolsmExYDlIfKljPkvbuAI+IOlFp7iSSSSScyTmSVurRrUxJPTYzdtvuSeoBwM9BpzI4nerFWSyuz12z22dlmgaHSOBNTUNY0DNzjuGneR2qXpKK3IHBye25VdjYzPAJzSAzRCY1IpFiGM1GelV2y5bNdbbvtTLM+t3u6b+JdjlNKxtD8zmOph0XFr0uueyyGK0xPifuDhk4drXDJw4hXFh2htUFmkskUgbZ5sfSswMJdjaGu6xFRkBooMil3JdF/rx8SbHuVMmpL7b+HgbA+yXN/+k1gk/wDXdBVzsc321TlXyuxdDvKz3YbtgZM+l2jougdikFcjgzHW0rquDrK2naG1S2WOxvkBssWDAzAwEYa06wFTqd68txpScdJPbv8AutuTqrLjFS1it/kvs+4w21rYhaJBZzWziWYQmpNYsTcJqc9KLBrIXr5ntfRY9ZuWtLpLw9EaWG9aU/H1YREVYshERAQdDyK6/D5LfVb8lyF2h5FdaNoZHE173NazC3rE5abu1XsLmXkU8vheZ7rP7G35FDaP4SSRrXWnOJpOfSAHLhUDfvAG9c1vTadzqts4wt/mOHWPqjd/mi14SuxB4c7pA4OD8RxhwNQ6uta71enV049FlONvQlqj6uXhabOyVjo5GtfG9pa9jwC1zTqCFqHg823ZeEYhmIZb4x1m6Cdo+8Zx7Ru5Ldlizg4S0fJrRkprVcHI9ofBE7E59glbgJqILQXAs4NkANRwI7ysBD4K70c6hbBGPSfOC3/qCfgu9orEcy1LTXUgeLW3qaNsZ4O4LA4Tyu/ibWPJcW4Yoj2sb6X4j3UW6TRNe0se1r2OBDmuAc1w7CDqF6Kl7wASSA0AkkmgAGpJVec5TfSkyeEFFaRRzHbTweQMjltVlkbZxG10kkUpPQ4RmcDtWnhmNBkuWA10W6eE7bgWs/wdldWxscDLINLQ8HKn4Ac+Jz3CvPmuI0W1iuxQ/wAnuY2VGtz/AMfsXqtbz+zH5rf0uXtHMDrkfgvK8vsh+a39L13kvWmRHirS+Ovz/BiURFgG+EREAW5+D3S084f61pq3Dwen/Ujf4k04ddT43Wrz9GQ5HVPy9TcVSZMHWLg3DniJphpvqsVed/xQ1a3xsg81p6rT+J30Wp3hecs58Y7q7mNyYO7fzK2EjKckj6N2avuK3Wds8Tg7Mskp5srfKHyPIhZdfOew+1cl22jHQvs0tBaIgcyBo9v4x8cxxHf7rvGG1RMns8jZInirXN+II1B4HMLIyKXXLufBqUXKyPeY3anZazXhGGTtIkZXopmUEkZPYd44HLvzXLrx8EtvY49BJBaI9xLjC/vaQQP+RXcEXNeRZWtIvY9sohY9ZLc4hdvgktr3Dp5ILPHvIcZpO5oAB/5LqOy+y9mu6Mss7SXvp0sr85JCO07hwGXxKzyJZkWWLST2Pa6IV7xW5ZXldsNojMVoiZLGfNeK0PaDqDxGa5Dt9sRHYWfxMMw6Bz2sEUp8aHO0DCPLGpzoQBvXXr1vKGyxPntEjY4mDNzt53ADUngF8/7b7VSXlaMZBZZ46ts8RPktOr3fjNByyG6pnwv5Ol8L+Ht+RXzP4+j8S37PmYkIrRjyNP7L3ZKDwK2FJGM4NFnevme19Fj1kL18z2vosesPM6+Xl6I3MLqI+fqwiIqxaFUqqFNUBVVZFttMjWNe81jaGMxHq4RoB2ZfJYyqVUldkq5dKJxZXGxaSMqRRUq0htJbkes3sO7kd3y4K7jeHeSa9rTk4d28cR8Fq05ULNuGZluLKG/KK4pHMc17HOY9pDmuaS1zXDQgjQrpOzPhZliDY7dGbQwUAmiwtmp+Jpo13Oo71zNFLZVGxaSRFXbKD1ifRVg2+uuYAi1xxne2esJH/IAe4q+ftVdwFTbrHThaIj8AV8zoqrwIdjZZWdL5I71fHhPu2AHo3vtMm5sLCG14vdQU5VXMNrNvLXeAMbiILMfuIiaOH+47V/LIcFqilTV4tdb1W77yKzJnPbhBQpArovKW0NbkOu7geqO/f3e9SWWxrWsmR11SsekT1pvJAG8nT/OCtbTaMVGiuBuYrvPb/n1XjJMXGrjXs7ByG5UYll35MrNlsjTpxlXvyyUUYkqqpYJREQBe1ltT4ycDnNDhheGkjE3sXipXsZOL1R40mtGX8cgOnu3qtY0FXEdp9L3rTqzYvae3f2exnW4bW8N+7t9y6WW2d2ktVgkx2aTCDTHG7rRSes36ih4rENcDmMwpV1pSWj3RTTcXquTtFx+FuyyANtcclnk3uYDNEeOXWHKh5rarPthdsgq23WUevK2M+51Cvm1FTlg1vhtFqObNcpM+krTthdsYq63WY+pK2Q+5lStVvzwt2aMFtjiktMm58gMMI459Y8qDmuLokcGtctsSzZvhJGV2h2itVvk6S0yF1K4I29WKP1W7ueZ4rFIoc4DM5K4korThFVtyer5JVEkgbr7t68JLT6OXFWxKpXZsVtDf09y5Vht7z29fY9JpC41PIcAvNSoWZKTk9XyaKSitFwERF4elCmihKICUooolEBUoGWmu7tUUSiAvYrXufn+Ia943/PmrjdUEEHQjT+3JYsKqKRzTVpp27weBG9WqcucNnuvuVbcWM91szIovOK0NdkaMd/0Pfu7/AHqvG3PrNy1zHwpr3LTjfXJapoz5UWRemhKSODfKNDuaPKP7d/xXhNat0dR+I+V3Dd81ZmvedVTuzeyv6/pFqrD7Z/Q95rQXZeS30Rv5nevFU0UgLPbcnqy+kktEKJhSiUXh6TRKKMKAICpFTRMKAqRU4VICAqRUuCjCgPRjyMwVdR2kHXI/9VY0QhTVXzr44+XYRWUws5+vaZRSsfFK5umnYdFdstDTrkewrSqyoT52ff8Av/ngZtuLOHeu79HqoXm+0NHE8FaySl2unYNEtyoQ43fd+/8AoqxZz52Xf+i4ktIGmZ7fNVs5xOZNVSoWbbfOz+3Hy7DSrphX/X69pKKEUJKEREAREQFCVRTVAFFVKVQEVSqlEAUVUpVARVTVKpVAFFVNUqgIqpSqVQAlKqaqMSAAqSoxKaoCKpVMSYkABU1TElUBFVLSmJMSAlFGJSCgClQiAlQiIAiIgCIiAIiIAiIgKKKaIiAJREQCiUREASiIgFFNERARRKIiAUU0REAomFEQDClERAMKYURAMKUREAwphREAwqaIiAIiIAiIgCIiAIiIAiIgCIiA/9k="
                                        width="256px">
                                    <b style="text-align: center; font-size:medium;">C /C++</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./course_Spring_Boot.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="https://4.bp.blogspot.com/-ou-a_Aa1t7A/W6IhNc3Q0gI/AAAAAAAAD6Y/pwh44arKiuM_NBqB1H7Pz4-7QhUxAgZkACLcBGAs/s1600/spring-boot-logo.png" width="210px">
                                    <b style="text-align: center; font-size:medium;">Spring Boot</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./course_Spring_MVC.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="data:image/png;base64,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"
                                        width="210px">
                                    <b style="text-align: center; font-size:medium;">Spring MVC</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./course_Spring_Boot.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="https://4.bp.blogspot.com/-9kYSwCDRbms/W-qSUvwnFWI/AAAAAAAAEsE/j4EeFEPQHBc-QpxMV9l3gQAaLAuG2WhTgCLcBGAs/s1600/spring-framework.png" width="210px">
                                    <b style="text-align: center; font-size:medium;">Spring Framework</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 mt-md-0">
                            <a href="./digitalmarkating.php">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img src="https://thumbs.dreamstime.com/b/digital-marketing-concept-image-business-man-presenting-different-tools-modern-marketers-modern-digital-marketing-concepts-135508384.jpg" width="210px">
                                    <b style="text-align: center; font-size:medium;">Digital Marketing</b>
                                </div>
                                <div class="mt-2 ms-2">
                                </div>
                            </a>
                        </div>
                  

                    </div>

                </div>
            </div>
    </section>

    <!-- -------- START Content Presentation Docs ------- -->


    <!-- -------- END Content Presentation Docs ------- -->


    <!-- START Section Content W/ 2 images aside of icon title description -->

    <!-- END Section Content -->
    <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

    <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
    
    <?php include "./footer.php" ?>
    
    <!--<footer class="footer pt-5 mt-5">-->
    <!--    <hr class="horizontal dark mb-5">-->
    <!--    <div class="container">-->
    <!--        <div class=" row">-->
    <!--            <div class="col-md-3 mb-4 ms-auto">-->
    <!--                <div>-->
    <!--                    <h6 class="text-gradient text-primary font-weight-bolder">Groot Academy</h6>-->
    <!--                </div>-->
    <!--                <div>-->
    <!--                    <h6 class="mt-3 mb-2 opacity-8">Social</h6>-->
    <!--                    <ul class="d-flex flex-row ms-n3 nav">-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim/" target="_blank">-->
    <!--                                <i class="fab fa-facebook text-lg opacity-8"></i>-->
    <!--                            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">-->
    <!--                                <i class="fab fa-twitter text-lg opacity-8"></i>-->
    <!--                            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">-->
    <!--                                <i class="fab fa-dribbble text-lg opacity-8"></i>-->
    <!--                            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">-->
    <!--                                <i class="fab fa-github text-lg opacity-8"></i>-->
    <!--                            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">-->
    <!--                                <i class="fab fa-youtube text-lg opacity-8"></i>-->
    <!--                            </a>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-2 col-sm-6 col-6 mb-4">-->
    <!--                <div>-->
    <!--                    <h6 class="text-gradient text-primary text-sm">Company</h6>-->
    <!--                    <ul class="flex-column ms-n3 nav">-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">-->
    <!--              About Us-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">-->
    <!--              Freebies-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">-->
    <!--              Premium Tools-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">-->
    <!--              Blog-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-2 col-sm-6 col-6 mb-4">-->
    <!--                <div>-->
    <!--                    <h6 class="text-gradient text-primary text-sm">Resources</h6>-->
    <!--                    <ul class="flex-column ms-n3 nav">-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://iradesign.io/" target="_blank">-->
    <!--              Illustrations-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">-->
    <!--              Bits & Snippets-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">-->
    <!--              Affiliate Program-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-2 col-sm-6 col-6 mb-4">-->
    <!--                <div>-->
    <!--                    <h6 class="text-gradient text-primary text-sm">Help & Support</h6>-->
    <!--                    <ul class="flex-column ms-n3 nav">-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">-->
    <!--              Contact Us-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">-->
    <!--              Knowledge Center-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-soft-ui-footer" target="_blank">-->
    <!--              Custom Development-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">-->
    <!--              Sponsorships-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">-->
    <!--                <div>-->
    <!--                    <h6 class="text-gradient text-primary text-sm">Legal</h6>-->
    <!--                    <ul class="flex-column ms-n3 nav">-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://www.creative-tim.com/terms" target="_blank">-->
    <!--              Terms &amp; Conditions-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://www.creative-tim.com/privacy" target="_blank">-->
    <!--              Privacy Policy-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                        <li class="nav-item">-->
    <!--                            <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">-->
    <!--              Licenses (EULA)-->
    <!--            </a>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-12">-->
    <!--                <div class="text-center">-->
    <!--                    <p class="my-4 text-sm">-->
    <!--                        All rights reserved. Copyright ©-->
    <!--                        <script>-->
    <!--                            document.write(new Date().getFullYear())-->
    <!--                        </script> Groot Academy System by <a href="./index.html" target="_blank">Creative Tim</a>.-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</footer>-->
    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="./assets/js/plugins/countup.min.js"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
    <script src="./assets/js/plugins/rellax.min.js"></script>
    <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
    <script src="./assets/js/plugins/tilt.min.js"></script>
    <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
    <script src="./assets/js/plugins/choices.min.js"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="./assets/js/plugins/parallax.min.js"></script>
    <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="./assets/js/soft-design-system.min.js?v=1.0.9" type="text/javascript"></script>
    <script type="text/javascript">
        if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
                countUp1.start();
            } else {
                console.error(countUp1.error);
            }
        }
        if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
                countUp2.start();
            } else {
                console.error(countUp2.error);
            };
        }
    </script>
</body>

</html>