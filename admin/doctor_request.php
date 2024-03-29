<?php
  include "header.php";
?>
       <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Doctor Request</h3>
              
            </div>
            <div class="row">
            
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Doctor Request</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>

                          <tr>
                            <th>Sr No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Experience</th>
                            <th>Department</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                       <?php
          $seq=1;
          $qry1="SELECT * FROM tbl_login WHERE l_status='1' AND l_role='3'";
          $run1=mysqli_query($con,$qry1);
          while($result1=mysqli_fetch_array($run1))
          {
            $l_id=$result1['l_id'];
            $qry2="SELECT * FROM tbl_doctor WHERE l_id='$l_id'";
            $run2=mysqli_query($con,$qry2);
            $result2=mysqli_fetch_array($run2);
         ?>
          <tr>
            <td><?php echo $seq; ?></td>
            <td><?php echo $result1['l_name']; ?></td>
            <td><?php echo $result1['l_email']; ?></td>
            <td><?php echo $result1['l_phone']; ?></td>
            <td class="p"><?php echo $result1['l_add']; ?></td>
            <td class="p"><?php echo $result2['d_exp']; ?></td>
            <td><?php echo $result2['d_dept']; ?></td>
            <td><img src="<?php echo $result1['l_img']; ?>" width="50px" height="50px"></td>
            <td><a href="?approve=<?php echo $result1['l_id'];?>" onclick="return confirm('Sure to Approve?');" class="btn btn-success">Approve</a></td>
          </tr>
          <?php
            $seq++;
            }
            if(isset($_GET['approve']))
               {
             // $sql="DELETE FROM tbl_news WHERE news_id=".$_GET['del']."";
              $sql="UPDATE tbl_login SET l_status='2' WHERE l_id=".$_GET['approve']."";
              $resultt=mysqli_query($con,$sql);
            if($resultt)
                {
                  echo ("<script>location.href='approved_doctor.php'</script>");
                }
            
               }
          ?>
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