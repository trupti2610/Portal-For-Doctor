<?php
  include "header.php";
?>
       <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Manage Time Slots</h3>
              
            </div>
            <div class="row">
            
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage Time Slots</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>

                          <tr>
                           <th>Sr No.</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Action</th>
                          </tr>
                        </thead>
                       <tbody>
         <?php
          $seq=1;
          $qry1="SELECT * FROM tbl_doctor WHERE l_id='$id'";
          $run1=mysqli_query($con,$qry1);
          $result1=mysqli_fetch_array($run1);
          $d_id=$result1['d_id'];

          $qry2="SELECT * FROM tbl_slot WHERE d_id='$d_id' AND s_status='1'";
          $run2=mysqli_query($con,$qry2);
          while($result2=mysqli_fetch_array($run2))
          {
            
         ?>
          <tr>
            <td><?php echo $seq; ?></td>
            <td><?php echo $result2['s_date']; ?></td>
            <td><?php echo $result2['s_start_time']; ?></td>
            <td><?php echo $result2['s_end_time']; ?></td>
            <td><a href="?del=<?php echo $result2['s_id'];?>" onclick="return confirm('Sure to Delete?');" class="btn btn-danger">Delete</a></td>
          </tr>
          <?php
            $seq++;
            }
            if(isset($_GET['del']))
               {
             // $sql="DELETE FROM tbl_news WHERE news_id=".$_GET['del']."";
              $sql="UPDATE tbl_slot SET s_status='0' WHERE s_id=".$_GET['del']."";
              $resultt=mysqli_query($con,$sql);
            if($resultt)
                {
                  echo ("<script>location.href='manage_time_slot.php'</script>");
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