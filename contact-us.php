
 <?php include "./header.php" ?>
       
  <!-- -------- START HEADER -->
  <style>
    .branch-box1{
      background-color: red;
      display: flex; 
      justify-content:center;
      align-items: center;
      height: 400px;
      width: 250px;
      box-shadow: 2px 2px 10px 10px gray;
      border-radius: 20px;
 
    }
    .branch-box2{
      background-color: red;
      display: flex; 
      justify-content:center;
      align-items: center;
      height: 400px;
      width: 250px;
      box-shadow: 2px 2px 10px 10px gray;
      border-radius: 20px;
 
    }
    .branch-box3{
      background-color: red;
      display: flex; 
      justify-content:center;
      align-items: center;
      height: 400px;
      width: 250px;
      box-shadow: 2px 2px 10px 10px gray;
      border-radius: 20px;
 
    }
    .branch-box4{
      background-color: red;
      display: flex; 
      justify-content:center;
      align-items: center;
      height: 400px;
      width: 250px;
      box-shadow: 2px 2px 10px 10px gray;
      border-radius: 20px;
 
    }

    .branch-main{
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
           
              <form id="contact-form" method="post" action="form_process.php">
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
                        <input type="email" id="email" name="email" class="form-control" placeholder="hello@gmail.com">
                      </div>
                    </div>
                    <div class="col-md-6 ps-md-2">
                      <label>Mobile Number</label>
                      <div class="input-group">
                        <input type="number" id="phone" name="phone" class="form-control" placeholder="Enter your mobile no">
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
                    <textarea  class="form-control"  id="message" name="message" rows="6" placeholder="Describe your problem in at least 200 characters"></textarea>
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
                   <b style=" font-size: x-large; ">Speak With Expert Engineers.<b><br/>
                   <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone:  +91-7231968183</h6>
                   <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone:  +91-8233266276</h6>


                   <h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email:  info@grootsoftware.com</h6>
                   <h6> <i class="fa fa-map-marker " aria-hidden="true"></i>Address Head Office  : <br/> 122/66, 2nd Floor, Madhyam Marg, Mansarovar, Jaipur, Rajasthan 302020 </h6>
                   <h6> <i class="fa fa-map-marker " aria-hidden="true"></i> Pratap Nagar Branch  : <br/> 174/89,Sec-17, Pratap Nagar,Sanganer, Jaipur, Rajasthan, 302033 </h6>
                  
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="branch-main">
      <div><h1>Our Brances</h1></div>
    <div class=" bg-gradient-primary branch-box1 p-3" style="color:#fff;">
    <center>
    <b style="font-size: small;">Mansarovar Branch</b><br/>
     <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone: <a class="nav-link nav-link-icon me-2" href="tel:+91-8233266276"> +91-8233266276</a></h6>
     <h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email:  info@grootsoftware.com</h6>
     <h6> <i class="fa fa-map-marker " aria-hidden="true"></i> Address Head Office :
122/66, 2nd Floor, Madhyam Marg, Mansarovar, Jaipur, Rajasthan 302020
</h6>
    </center>
    </div>
    <div class="  bg-gradient-primary  branch-box2">
    <div class=" bg-gradient-primary branch-box1 p-3">
    <center>
    <b style="font-size: small;">Pratap Nagar Branch.</b>
     <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone:  <a class="nav-link nav-link-icon me-2" href="tel:+91-7231968183">+91-7231968183</a></h6>
     <h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email:  pratapnagar@grootacademy.com</h6>
     <h6> <i class="fa fa-map-marker " aria-hidden="true"></i> Pratap Nagar Branch  : <br/> 174/89,Sec-17, Pratap Nagar,Sanganer, Jaipur, Rajasthan, 302033 </h6>
    </center>
    </div>

    
    </div>
    <div class="  bg-gradient-primary  branch-box3">
    <div class=" bg-gradient-primary branch-box1 p-3">
    <center>
    <b style="font-size: small;">Riddhi Shiddi Branch.</b>
     <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone:  <a class="nav-link nav-link-icon me-2" href="tel:+91-7231968183"> +91-8233266276</a></h6>
     <h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email:  ridhisidhi@grootsoftware.com</h6><br/>
     <h6> <i class="fa fa-map-marker " aria-hidden="true"></i> Plot no 26, JAIPUR ELECTRONIC MARKET, Mansarovar Link Rd, in front of manglam, Mohan Nagar, Triveni Nagar, Arjun Nagar, Jaipur, Rajasthan 302019 </h6>
    </center>
    </div>
    </div>

      <div class="  bg-gradient-primary  branch-box4">
      <div class=" bg-gradient-primary branch-box1 p-3">
    <center>
    <b style="font-size: small;">Riddhi Shiddi Branch with infiquee classes.</b>
     <h6> <i class="fa fa-mobile" aria-hidden="true"></i> Phone:<a class="nav-link nav-link-icon me-2" href="tel:+91-8233266276">  +91-8233266276</a></h6>
     <h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email:  infiquee@grootacademy.com</h6><br/>
     <h6> <i class="fa fa-map-marker " aria-hidden="true"></i> Plot no 26, JAIPUR ELECTRONIC MARKET, Mansarovar Link Rd, in front of manglam, Mohan Nagar, Triveni Nagar, Arjun Nagar, Jaipur, Rajasthan 302019 </h6>
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
      </div>

    </div>
    
  </header>
  <!-- -------- END HEADER - -->
<?php include "./footer.php" ?>