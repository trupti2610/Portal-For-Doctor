<?php
  include "header.php";
 
  if(isset($_GET['id']))
       {
        $d_id=$_GET['id']."";
      //echo "<script>alert('$d_id');</script>";
       }

?>
       <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Doctor Details</h3>
              
            </div>
            <div class="row">
            
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Doctor Details</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>

                          <tr>
                            <th>Sr No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Department</th>
                            <th>Experience</th>
                            <th>Address</th>
                            <th>Image</th>
                            
                          </tr>
                        </thead>
                        <tbody>
         <?php
          $seq=1;
          $qry1="SELECT * FROM tbl_doctor WHERE d_id='$d_id'";
          $run1=mysqli_query($con,$qry1);
          while($result1=mysqli_fetch_array($run1))
          {
            $l_id=$result1['l_id'];
            $qry2="SELECT * FROM tbl_login WHERE l_id='$l_id'";
            $run2=mysqli_query($con,$qry2);
            $result2=mysqli_fetch_array($run2);
         ?>
          <tr>
            <td><?php echo $seq; ?></td>
            <td><?php echo $result2['l_name']; ?></td>
            <td><?php echo $result2['l_email']; ?></td>
            <td><?php echo $result2['l_phone']; ?></td>
            <td><?php echo $result1['d_dept']; ?></td>
            <td class="p"><?php echo $result1['d_exp']; ?></td>
            <td class="p"><?php echo $result2['l_add']; ?></td>
            <td><img src="<?php echo $result2['l_img']; ?>" height="50px" width="50px"></td>
          </tr>
          <?php
            $seq++;
              
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