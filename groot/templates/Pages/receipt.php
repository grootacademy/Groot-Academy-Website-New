
   <!-- PWA Install Alert -->
   <?php //pr($Admission); die;
//    $date1=date_create("2023-01-01");
//    $date2=date_create("2024-01-01");
//    $diff=date_diff($date1,$date2);
// FeeHistory','Admission'

//    $result = array($diff->days);
//    $sub_struct_month = ($result[0] / 30) ;
//    $sub_struct_month = floor($sub_struct_month); 
//    $sub_struct_days = ($result[0] % 30); // the rest of days
//    $sub_struct = $sub_struct_month." months ".$sub_struct_days." days";

   ?>
   
    <script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>

    <div class="page-content-wrapper">
      <!-- Search Form-->
      <!-- Search Form-->
      <div class="container">
      
     
   
      <!-- Product Catagories -->
      <div class="product-catagories-wrapper py-3">
        <div class="container" id="okkkkkkk">
          <div class="row g-2 rtl-flex-d-row-r">
          <div class="col-12">
              <div class="card catagory-card" style="padding: 35px;">
                <h2>Stomer Study Training Institute</h2>
             
                <h3 style="text-align: end;"> 
                <b>Date : <?php  echo date('d-m-Y'); ?></b></h3>
                <h3 style="text-align: start;"> <b >Id : <?php  echo $Admission->student_id; ?></b>
                </h3>
                <h4 style="text-align: start;">Name : <?php  echo $Admission->name; ?></h4>
                <h4 style="text-align: start;">Father Name : <?php  echo $Admission->father_name; ?></h4>
                <h4 style="text-align: start;">Phone : <?php  echo $Admission->phone; ?></h4>
                <h4 style="text-align: start;">Address : <?php  echo $Admission->address; ?></h4>
                <h4 style="text-align: start;">Duration : _________________</h4>

                <div class="profile-wrapper-area py-3">
          <!-- User Information-->
          <!-- <div class="card user-info-card"> -->
         
          </div>
          <!-- User Meta Data-->
          <div class="card user-data-card">
            <div class="card-body">
            
  <div style="overflow-x:auto;">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Student Id</th>
        <th>Deposit Fee</th>
        <th>Deposit Date</th>
        <th>Payment Mode</th>
        <th>Due Fee</th>
        <!-- <th>Action</th> -->
      </tr>
    </thead>
    <tbody id="myTable">
        
              <tr>
        <td><?php echo $FeeHistory->student_id; ?></td>
        <td><?php echo $FeeHistory->fee; ?></td>
        <td><?php echo $FeeHistory->fee_date; ?></td>
        <td><?php echo $FeeHistory->payment_mode; ?></td> 
        <td><?php echo $Admission->due_date; ?></td>
      
      </tr>

     
     
    </tbody>
  </table>
</div>

            </div>
          </div>
        <!-- </div> -->




        <h3 style="margin-top: 3%; text-alin">Signature</h3>
        <h3 style="margin-left: 71%;">____________</h3>
              </div>
            </div>
            <div class="col-6">
              <div class="card catagory-card">
                <div class="card-body px-2">
               <a class="btn btn-success w-100" onClick="printContent('okkkkkkk')" >Print</a>
            </div>
              </div>
            </div>
          
           
            
          
           
        
          </div>
        </div>


        
   
    
      </div>
     
 
  
      </div>
    
   
   
      