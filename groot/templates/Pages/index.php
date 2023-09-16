<?php



use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

// $this->disableAutoLayout();
$this->setLayout('header_profile');

?>
   <!-- PWA Install Alert -->
   
   <!-- <div class="toast pwa-install-alert shadow bg-white" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000" data-bs-autohide="true">
      <div class="toast-body">
        <div class="content d-flex align-items-center mb-2"><img src="img/core-img/logo-small.png" alt="">
          <h6 class="mb-0">Welcome Students</h6>
          <button class="btn-close ms-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
        </div><span class="mb-0 d-block">Start your study with groot. Chat With STOMER <strong class="mx-1">Follow on Social Meadia</strong>.</span>
      </div>
    </div> -->

    <div class="page-content-wrapper">
      <!-- Search Form-->
      <!-- Search Form-->
      <div class="container">
      
      </div>
      <!-- Hero Wrapper -->
      <div class="hero-wrapper">
        <div class="container">
          <div class="pt-3">
            <!-- Hero Slides-->
            <div class="hero-slides owl-carousel">
            
              <!-- Single Hero Slide-->
           
              
            </div>
          </div>
        </div>
      </div>
      <!-- Product Catagories -->
      <div class="product-catagories-wrapper py-3">
        <div class="container">
          <div class="row g-2 rtl-flex-d-row-r">
          <div class="col-3">
              <div class="card catagory-card">
                <div class="card-body px-2"><a href="view-dmart"><img src="img/core-img/grocery.png" alt="groot courses list"><span>View D-mart Enquiry </span></a></div>
              </div>
            </div>
         
           
       
            <div class="col-3">
              <div class="card catagory-card">
                <div class="card-body px-2"><a href="view-academy-enquiry"><img src="img/core-img/questionnaire.png" alt="groot certificate courses"><span>View Academy Enquiry</span></a></div>
              </div>
            </div>
           
            <div class="col-3">
              <div class="card catagory-card">
                <div class="card-body px-2"><a href="view-software-enquiry"><img src="img/core-img/rowboat.png" alt="groot distance courses"><span>View Software Enquiry</span></a></div>
              </div>
            </div>


         
          </div>
        </div>
      </div>
     
      <!-- Dark Mode -->
      <div class="container">
        <div class="dark-mode-wrapper mt-3 bg-img p-4 p-lg-5">
          <p class="text-white">Your eyes are very beautiful, so please turn on dark mode.</p>
          <div class="form-check form-switch mb-0">
            <label class="form-check-label text-white h6 mb-0" for="darkSwitch">Switch to Dark Mode</label>
            <input class="form-check-input" id="darkSwitch" type="checkbox" role="switch">
          </div>
        </div>
      </div>
      
   
    
   
   