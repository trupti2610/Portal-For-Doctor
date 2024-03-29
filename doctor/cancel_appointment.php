<?php
  include "header.php";
?>
       <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Cancel Appointments</h3>
              
            </div>
            <div class="row">
            
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Cancel Appointments</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>

                          <tr>
                          <th>Sr No.</th>
                          <th>Date</th>
                          <th>Start Time</th>
                          <th>End Time</th>
                          <th>User Details</th>
                          </tr>
                        </thead>
                        <tbody>
         <?php
          $seq=1;
          $qry1="SELECT * FROM tbl_appointment WHERE a_status='0'";
          $run1=mysqli_query($con,$qry1);
          while($result1=mysqli_fetch_array($run1))
          {
            $s_id=$result1['s_id'];
            $l_id=$result1['l_id'];

            $qry2="SELECT * FROM tbl_slot WHERE s_id='$s_id'";
            $run2=mysqli_query($con,$qry2);
            $result2=mysqli_fetch_array($run2);
            $d_id=$result2['d_id'];

            $qry3="SELECT * FROM tbl_doctor WHERE d_id='$d_id'";
            $run3=mysqli_query($con,$qry3);
            $result3=mysqli_fetch_array($run3);
            $doctor_id=$result3['l_id'];
            if($doctor_id==$id)
            {
              //echo "<script>alert('$id'); </script>";
         ?>
          <tr>
            <td><?php echo $seq; ?></td>
            <td><?php echo $result2['s_date']; ?></td>
            <td><?php echo $result2['s_start_time']; ?></td>
            <td><?php echo $result2['s_end_time']; ?></td>
            <td><a href="view_patient_details.php?id=<?php echo $l_id; ?>" class="btn btn-success">View</a></td>
          </tr>
          <?php
            $seq++;
              }
            }
            
          ?>
        </tbody>
                      </table>
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