<?php
  include "header.php";
?>
       <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Feedback</h3>
              
            </div>
            <div class="row">
            
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Feedback</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>

                          <tr>
                          <th>Sr No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Image</th>
             <th>Feedback</th>
            <th>Slot Details</th>
                          </tr>
                        </thead>
                        <tbody>
         <?php
          $seq=1;
          $qry1="SELECT * FROM tbl_feedback WHERE f_status='1'";
          $run1=mysqli_query($con,$qry1);
          while($result1=mysqli_fetch_array($run1))
          {
            $a_id=$result1['a_id'];
            $l_id=$result1['l_id'];

            $qry2="SELECT * FROM tbl_appointment WHERE a_id='$a_id'";
            $run2=mysqli_query($con,$qry2);
            $result2=mysqli_fetch_array($run2);
            $s_id=$result2['s_id'];

            $qry3="SELECT * FROM tbl_slot WHERE s_id='$s_id'";
            $run3=mysqli_query($con,$qry3);
            $result3=mysqli_fetch_array($run3);
            $d_id=$result3['d_id'];

            $qry4="SELECT * FROM tbl_doctor WHERE d_id='$d_id'";
            $run4=mysqli_query($con,$qry4);
            $result4=mysqli_fetch_array($run4);
            $doctor_id=$result4['l_id'];

            $qry5="SELECT * FROM tbl_login WHERE l_id='$l_id'";
            $run5=mysqli_query($con,$qry5);
            $result5=mysqli_fetch_array($run5);

            if($doctor_id==$id)
            {
              //echo "<script>alert('$id'); </script>";
         ?>
          <tr>
            <td><?php echo $seq; ?></td>
            <td><?php echo $result5['l_name']; ?></td>
             <td><?php echo $result5['l_email']; ?></td>
            <td><?php echo $result5['l_phone']; ?></td>
            <td class="p"><?php echo $result5['l_add']; ?></td>
            <td><img src="<?php echo $result5['l_img']; ?>" height="50px" width="50px"></td>
            <td class="p"><?php echo $result1['feedback']; ?></td>
            <td><a href="view_slot_details.php?id=<?php echo $s_id; ?>" class="btn btn-success">View</a></td>
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