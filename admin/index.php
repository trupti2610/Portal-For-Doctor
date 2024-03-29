<?php
  include "header.php";
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            
          <div class="row">
             <div class="col-sm-3">
    <div class="card bg-primary text-white">
      <div class="card-body">
        <h3 class="card-title text-white"><?php
              $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(l_id) FROM tbl_login WHERE l_status='1' AND l_role='1'"));
                     echo $count1[0];
            ?></h3>
        <p class="card-text">Total Admins </p>
       
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card bg-primary text-white">
      <div class="card-body">
        <h3 class="card-title text-white"><?php
              $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(l_id) FROM tbl_login WHERE l_status='1' AND l_role='2'"));
                     echo $count1[0];
            ?></h3>
        <p class="card-text">Total Patients </p>
       
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card bg-primary text-white">
      <div class="card-body">
        <h3 class="card-title text-white"><?php
              $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(l_id) FROM tbl_login WHERE l_status='1' AND l_role='3'"));
                     echo $count1[0];
            ?></h3>
        <p class="card-text">New Doctor </p>
       
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card bg-primary text-white">
      <div class="card-body">
        <h3 class="card-title text-white"><?php
              $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(l_id) FROM tbl_login WHERE l_status='2' AND l_role='3'"));
                     echo $count1[0];
            ?></h3>
        <p class="card-text">Approved Doctor </p>
       
      </div>
    </div>
  </div>
  
  

</div>
         
                 <div class="row"style="margin-top: 2%;">
                  <div class="col-sm-3">
    <div class="card bg-primary text-white">
      <div class="card-body">
        <h3 class="card-title text-white"><?php
                $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(a_id) FROM tbl_appointment WHERE a_status='1'"));
                        echo $count1[0];
              ?></h3>
        <p class="card-text">Booked Appointments </p>
       
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card bg-primary text-white">
      <div class="card-body">
        <h3 class="card-title text-white"><?php
              $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(a_id) FROM tbl_appointment WHERE a_status='0'"));
                        echo $count1[0];
            ?></h3>
        <p class="card-text">Cancel Appoinments </p>
       
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card bg-primary text-white">
      <div class="card-body">
        <h3 class="card-title text-white"><?php
              $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(f_id) FROM tbl_feedback WHERE f_status='1'"));
                     echo $count1[0];
            ?></h3>
        <p class="card-text">Feedback </p>
       
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card bg-primary text-white">
      <div class="card-body">
        <h5 class="card-title text-white"><?php
              $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(c_id) FROM tbl_contact WHERE c_status='1'"));
                     echo $count1[0];
            ?></h5>
        <p class="card-text">Contact </p>
       
      </div>
    </div>
  </div>
  

</div>  
           
            
            
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
       <?php
       include "footer.php";
       ?>