<div class="page-content-wrapper">
      <div class="container">
        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
          <!-- User Information-->
          <div class="card user-info-card">
            <div class="card-body p-4 d-flex align-items-center">
             <?php if($Users->photo){ ?>
              <div class="user-profile me-3"><img src="<?php echo Site;?>SitePhoto/<?php echo $Users->photo ?>" alt=""></div>
              <?php }else{ ?>
                <div class="user-profile me-3"><img src="img/bg-img/7.png" alt=""></div>
              <?php } ?>
              <div class="user-info">
                <p class="mb-0 text-dark">ID: <?php echo $Users->user_id ?></p>
                <h5 class="mb-0"><?php echo $Users->name ?></h5>
              </div>
            </div>
          </div>
          <!-- User Meta Data-->
          <div class="card user-data-card">
            <div class="card-body">
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="fa-solid fa-at"></i><span>ID</span></div>
                <div class="data-content"><?php echo $Users->user_id ?></div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="fa-solid fa-user"></i><span>Full Name</span></div>
                <div class="data-content"><?php echo $Users->name ?></div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="fa-solid fa-phone"></i><span>Phone</span></div>
                <div class="data-content"><?php echo $Users->phone ?></div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="fa-solid fa-envelope"></i><span>Email</span></div>
                <div class="data-content"><?php echo $Users->email ?>                            </div>
              </div>
              <?php if($Users->address){?>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="fa-solid fa-location-dot"></i><span>Address</span></div>
                <div class="data-content"><?php echo $Users->address ?></div>
              </div>
            <?php } ?>
            <?php if($Users->certificate_status=="N"){?>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="fa-solid fa-star"></i><span>Certificate</span></div>
                <div class="data-content"><a class="btn btn-success btn-sm" href="apply-certificate">Apply Now</a></div>
              </div>
              <?php } ?>

              <!-- Edit Profile-->
              <div class="edit-profile-btn mt-3"><a class="btn btn-primary w-100" href="edit-profile"><i class="fa-solid fa-pen me-2"></i>Edit Profile</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>