<div class="page-content-wrapper">
      <div class="container">
        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
          <!-- User Information-->
          <div class="card user-info-card">
            <div class="card-body p-4 d-flex align-items-center">
            
              <div class="user-info">
                <h5 class="mb-0">View Groot Student</h5>
                <!-- <p class="mb-0 text-dark"></p> -->
              </div>
            </div>
          </div>
          <!-- User Meta Data-->
          <div class="card user-data-card">
            <div class="card-body" >
            

 <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <div style="overflow-x:auto;">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Course Name</th>
        <th>Message</th>
        <th>Page Name</th>
        <th>Date</th>


      </tr>
    </thead>
    <tbody id="myTable">
        <?php foreach($ViewAcademyEnquiry as $value){  ?>
      <tr>
        <td><?php echo $value['name'] ?></td>
        <td><?php echo $value['email'] ?></td>
        <td><?php echo $value['phone'] ?></td>
        <td><?php echo $value['courseName'] ?></td>
        <td><?php echo $value['message'] ?></td>
        <td><?php echo $value['pageName'] ?></td>
        <td><?php echo $value['date'] ?></td>
       
      </tr>

<?php } ?>

      
     
    </tbody>
  </table>
</div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>