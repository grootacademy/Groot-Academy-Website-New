<?php include "./header.php" ?>

    <!-- Navbar Light -->
  
    <!-- End Navbar -->
    <br/><br/><br/>
    <section class="py-lg-7">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card overflow-hidden mb-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <form class="p-3" id="contact-form" method="post" action="./process.php">
                                    <div class="card-header px-4 py-sm-5 py-3">
                                        <h2>Request a callback to Start your journey with groot academy!</h2>

                                    </div>
                                    <div class="card-body pt-1">
                                        <div class="row">
                                        <div class="col-md-12 pe-2 mb-3">
                                                <label>Name </label>
                                                <input class="form-control" name="name" id="email" placeholder="Enter Your Name" type="text">
                                            </div>
                                            <div class="col-md-12 pe-2 mb-3">
                                                <label>Email </label>
                                                <input class="form-control" name="email" id="email" placeholder="Enter your Email" type="email">
                                            </div>
                                            <div class="col-md-12 pe-2 mb-3">
                                                <label>Phone </label>
                                                <input class="form-control" name="phone" id="email" placeholder="Enter your Email" type="text">
                                            </div>
                                            <div class="col-md-12 pe-2 mb-3">
                                                <div class="form-group mb-0">
                                                    <label>Course Name</label>
                                                    <input class="form-control" name="courseName" id="mobile" placeholder="Mobile number" type="text">

                                                </div>
                                                <!-- <p>You’ll receive an OTP on this number for verification</p> -->
                                            </div>
                                            <div class="col-md-12 pe-2 mb-3">
                                                <label>Message </label>
                                                <textarea class="form-control" name="message" id="email" placeholder="Explain"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 text-end ms-auto">
                                                <input type="submit" class="btn btn-round bg-gradient-info mb-0" />                                            </div>
                                            <!-- <span>By creating an account I have read and agree to Groot Academy's <a href="#">Terms</a> and <a href="#">Privacy Policy</a></span> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6 position-relative bg-cover px-3" style="background-image: url('./assets/img/curved-images/curved5.jpg')">
                                <div class="position-absolute z-index-2 w-100 h-100 top-0 start-0 d-lg-block d-none">
                                    <img src="./assets/img/wave-1.svg" class="h-100 ms-n2" alt="vertical-wave">
                                </div>
                                <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                                    <div class="mask bg-gradient-info opacity-9"></div>
                                    <div class="p-2 ps-sm-8 position-relative text-start my-auto z-index-2">
                                        <h3 class="text-white">Master Data Structures and Algorithms With the groot Academy Program</h3>
                                        <p class="text-white opacity-8 mb-4">1. Secure product interviews with understanding of crucial data structures and algorithms, and their implementation.</p>
                                        <p class="text-white opacity-8 mb-4">2. Build intuition on the inner workings of various DSA, a foundational skill for any top software engineer.</p>
                                        <p class="text-white opacity-8 mb-4">3. Clear your concepts and know which data structure to use for the most optimum build.</p>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include "./footer.php" ?>
                </div>
            </div>
        </div>
    </section>
    <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->
   <script>
    $(function() {
  var option = function(i, j) {
    return $("<option>").append(j + 2000);
  };

  var options = (new Array(150) + "").split(",").map(option);

  $("select").append(options);
});

   </script>