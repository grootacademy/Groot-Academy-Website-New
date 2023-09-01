<?php include "./header.php" ?>

<!-- -------- START HEADER -->
<style>
  .branch-box1 {
    background-color: red;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 450px;
    width: 250px;
    box-shadow: 2px 2px 10px 10px gray;
    border-radius: 20px;

  }

  .branch-box2 {
    background-color: red;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 450px;
    width: 250px;
    box-shadow: 2px 2px 10px 10px gray;
    border-radius: 20px;

  }

  .branch-box3 {
    background-color: red;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 450px;
    width: 250px;
    box-shadow: 2px 2px 10px 10px gray;
    border-radius: 20px;

  }

  .branch-box4 {
    background-color: red;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 450px;
    width: 250px;
    box-shadow: 2px 2px 10px 10px gray;
    border-radius: 20px;

  }

  .branch-main {
    display: flex;
    margin: 20px;
    justify-content: space-between;
    color: #FFFF;

  }
</style>
<header>
  <div class="page-header min-vh-85">
    <div>
      <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0" src="./assets/img/curved-images/curved8.jpg" alt="image">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex justify-content-center flex-column">
          <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
            <div class="text-center">
              <h3 class="text-gradient text-primary">Contact us</h3>
              <p class="mb-0">
                If you want to connect with us

              </p>
            </div>

            <form id="contact-form" method="post" action="./process.php">
              <div class="card-body pb-2">
                <div class="row">
                  <div class="col-md-6">
                    <label>Full Name</label>
                    <div class="input-group mb-4">
                      <input class="form-control" id="name" name="name" placeholder="Full Name" aria-label="Full Name" type="text">

                    </div>
                  </div>
                  <div class="col-md-6 ps-md-2">
                    <label>Email</label>
                    <div class="input-group">
                      <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email Id">
                    </div>
                  </div>
                  <div class="col-md-6 ps-md-2">
                    <label>Mobile Number</label>
                    <div class="input-group">
                      <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter your mobile no">
                    </div>
                  </div>
                  <div class="col-md-6 ps-md-2">
                    <label>Enter Courses Name You Are Intersted For </label>
                    <div class="input-group">
                      <input type="text" id="Website" name="courseName" class="form-control" placeholder="Courses Name">
                    </div>
                  </div>

                </div>
                <div class="form-group mb-0 mt-md-0 mt-4">
                  <label>Your Message Here</label>
                  <textarea class="form-control" id="message" name="message" rows="6" placeholder="Describe your problem in at least 200 characters"></textarea>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Send Message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-5 d-flex justify-content-center flex-column">
          <div class="card d-flex blur justify-content-center p-6 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">

            <div class="form-group text-gradient text-primary ">
              <b style=" font-size: x-large; ">Speak With Expert Engineers.<b><br />
                  <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone: 01414859255</h6>
                  <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone: +91-8233266276</h6>


                  <h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email: info@grootsoftware.com</h6>
                  <h6> <i class="fa fa-map-marker " aria-hidden="true"></i>Address Head Office : <br /> 122/66, 2nd Floor, Madhyam Marg, Mansarovar, Jaipur, Rajasthan 302020 </h6>
                  <h6> <i class="fa fa-map-marker " aria-hidden="true"></i> Pratap Nagar Branch : <br /> 174/89,Sec-17, Pratap Nagar,Sanganer, Jaipur, Rajasthan, 302033 </h6>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center" style="text-shadow: 1px 1px 10px #AE234E;">
    <h1><u>Our Brances</u></h1>
  </div>
  <div class="branch-main mt-5">
    <div class=" bg-gradient-primary branch-box1 p-3" style="color:#fff;">
      <center>
        <b style=" font-size: small; box-shadow:2px 2px 10px 5px white; border-radius:10px" class="text-primary p-2 bg-light">Mansarovar Branch</b><br />
        <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone: <a class="nav-link nav-link-icon me-2" href="tel:+91-8233266276"> +91-8233266276</a></h6>
        <h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email: info@grootsoftware.com</h6>
        <h6> <i class="fa fa-map-marker " aria-hidden="true"></i> Address Head Office :
          122/66, 2nd Floor, Madhyam Marg, Mansarovar, Jaipur, Rajasthan 302020
        </h6>
      </center>
    </div>
    <div class="  bg-gradient-primary  branch-box2">
      <div class=" bg-gradient-primary branch-box1 p-3">
        <center>
          <b style="font-size: small; box-shadow:2px 2px 10px 5px white; border-radius:10px" class="text-primary p-2 bg-light">Pratap Nagar Branch.</b>
          <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone: <a class="nav-link nav-link-icon me-2" href="tel:01414859255">01414859255</a></h6>
          <h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email: pratapnagar@grootacademy.com</h6>
          <h6> <i class="fa fa-map-marker " aria-hidden="true"></i> Pratap Nagar Branch : <br /> 174/89,Sec-17, Pratap Nagar,Sanganer, Jaipur, Rajasthan, 302033 </h6>
        </center>
      </div>


    </div>
    <div class="  bg-gradient-primary  branch-box3">
      <div class=" bg-gradient-primary branch-box1 p-3">
        <center>
          <b style="font-size: small; box-shadow:2px 2px 10px 5px white; border-radius:10px" class="text-primary p-2 bg-light">Riddhi Shiddi Branch.</b>
          <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone: <a class="nav-link nav-link-icon me-2" href="tel:+91-9649695189"> +91-9649695189</a></h6>
          <h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email: ridhisidhi@grootsoftware.com</h6><br />
          <h6> <i class="fa fa-map-marker " aria-hidden="true"></i> Plot no 26, JAIPUR ELECTRONIC MARKET, Mansarovar Link Rd, in front of manglam, Mohan Nagar, Triveni Nagar, Arjun Nagar, Jaipur, Rajasthan 302019 </h6>
        </center>
      </div>
    </div>

    <div class="  bg-gradient-primary  branch-box3">
      <div class=" bg-gradient-primary branch-box1 p-3">
        <center>
          <b style="font-size: small; box-shadow:2px 2px 10px 5px white; border-radius:10px" class="text-primary p-2 bg-light">Jhotwara & Murlipura Branch.</b>
          <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone: <a class="nav-link nav-link-icon me-2" href="tel:+91-7231968183"> +91-7231968183</a></h6>
          <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone: <a class="nav-link nav-link-icon me-2" href="tel:+91-01414859255"> +91-01414859255</a></h6>
          <h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email: jhotwara@grootsoftware.com</h6><br />
          <h6> <i class="fa fa-map-marker " aria-hidden="true"></i> 87-91, Triton Mall, Forth floor, near, Chomu Pulia Cir, Jaipur, Rajasthan 302012 </h6>
        </center>
      </div>
    </div>

    <div class="  bg-gradient-primary  branch-box4">
      <div class=" bg-gradient-primary branch-box1 p-3">
        <center>
          <b style="font-size: small; box-shadow:2px 2px 10px 5px white; border-radius:10px" class="text-primary p-2 bg-light">Riddhi Shiddi Branch with infiquee classes.</b>
          <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone:<a class="nav-link nav-link-icon me-2" href="tel:+91-8233266276"> +91-8233266276</a></h6>
          <h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email: infiquee@grootacademy.com</h6><br />
          <h6> <i class="fa fa-map-marker " aria-hidden="true"></i> Plot no 26, JAIPUR ELECTRONIC MARKET, Mansarovar Link Rd, in front of manglam, Mohan Nagar, Triveni Nagar, Arjun Nagar, Jaipur, Rajasthan 302019 </h6>
        </center>
      </div>
    </div>
  </div>
  <div class="  bg-gradient-primary  branch-box4">
      <div class=" bg-gradient-primary branch-box1 p-3">
        <center>
          <b style="font-size: small; box-shadow:2px 2px 10px 5px white; border-radius:10px" class="text-primary p-2 bg-light">JagatPura Branch</b>
          <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone:<a class="nav-link nav-link-icon me-2" href="tel:+91-8233266276"> +91-8233266276</a></h6>
          <h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email: info@grootacademy.com</h6><br />
          <h6> <i class="fa fa-map-marker " aria-hidden="true"></i> 7th floor, Mangalam Building, Jagatpura Flyover, Model Town, Jagatpura, Jaipur, Rajasthan 302017 </h6>
        </center>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12" style="box-shadow: 20px 0px 5px 0px black;">
      <div class="map-canvas">
        <!-- <iframe src="https://maps.google.com/maps?q=rstheme&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.2305456437944!2d75.76732561409753!3d26.85708736895016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5c45026d6bf%3A0x43a55cb26a3129f1!2sGroot%20Academy!5e1!3m2!1sen!2sin!4v1660483396046!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <div class="row">
        <div class="col-md-12" style="box-shadow: 20px 0px 5px 0px black;">
          <div class="map-canvas">
            <h1>Pratap Nagar Branch</h1>
            <!-- <iframe src="https://maps.google.com/maps?q=rstheme&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.2305456437944!2d75.76732561409753!3d26.85708736895016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5c45026d6bf%3A0x43a55cb26a3129f1!2sGroot%20Academy!5e1!3m2!1sen!2sin!4v1660483396046!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="row">
            <div class="col-md-12" style="box-shadow: 20px 0px 5px 0px black;">
              <div class="map-canvas">
                <h1>JagatPura Branch</h1>
                <h5>Contact No <a href="tel:+91-8233266276">8233266276</a></h5>
                <!-- <iframe src="https://maps.google.com/maps?q=rstheme&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56950.50177344515!2d75.74113196320135!3d26.858827573547543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db72d5a28f9f5%3A0xaa599281d6560faf!2sGroot%20Academy!5e0!3m2!1sen!2sin!4v1691577404244!5m2!1sen!2sin" width="100%" height="400"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-12" style="box-shadow: 20px 0px 5px 0px black;">
              <div class="map-canvas">
                <h1>Jhotwara & Murlipura Branch.</h1>
                <h5>Contact No <a href="tel:+91-7231968183">7231968183</a></h5>
                <h5>Contact No <a href="tel:+91-01414859255">01414859255</a></h5>
                <!-- <iframe src="https://maps.google.com/maps?q=rstheme&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56908.9264549787!2d75.6990267216797!3d26.9413037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db3abb5df65f1%3A0xe131cb537f9dcdc4!2sGroot%20Academy-%20Software%20%26%20IT%20Training%20in%20Jaipur%20%7C%20Web%20Design%20%26%20Development%20%7C%20C%2CC%2B%2B%2CJAVA%2CPYTHON%20Programming%20Institute!5e0!3m2!1sen!2sin!4v1692206666206!5m2!1sen!2sin" width="100%" height="400"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>

          </div>
</header>
<!-- -------- END HEADER - -->
<?php include "./footer.php" ?>