<?php
  include "header.php";
  if(isset($_GET['id']))
       {
        $s_id=$_GET['id']."";
      //echo "<script>alert('$d_id');</script>";
       }
?>
       <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Slot Details</h3>
              
            </div>
            <div class="row">
            
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Slot Details</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>

                          <tr>
                            <th>Sr No.</th>
                            <th>Date</th>
                            <th>From</th>
                            <th>To</th>
                          </tr>
                        </thead>
               <tbody>
         <?php
          $seq=1;
          $qry1="SELECT * FROM tbl_slot WHERE s_id='$s_id'";
          $run1=mysqli_query($con,$qry1);
          while($result1=mysqli_fetch_array($run1))
          {
            
         ?>
          <tr>
            <td><?php echo $seq; ?></td>
            <td><?php echo $result1['s_date']; ?></td>
            <td><?php echo $result1['s_start_time']; ?></td>
            <td><?php echo $result1['s_end_time']; ?></td>
            
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