<?php
  include "header.php";
?>
       <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Contact</h3>
              
            </div>
            <div class="row">
            
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Contact</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>

                          <tr>
                            <th>Sr No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                <tbody>
         <?php
          $seq=1;
          $qry1="SELECT * FROM tbl_contact WHERE c_status='1'";
          $run1=mysqli_query($con,$qry1);
          while($result1=mysqli_fetch_array($run1))
          {
         ?>
          <tr>
            <td><?php echo $seq; ?></td>
            <td><?php echo $result1['c_name']; ?></td>
            <td><?php echo $result1['c_email']; ?></td>
            <td><?php echo $result1['c_phone']; ?></td>
            <td><?php echo $result1['c_subject']; ?></td>
            <td class="p"><?php echo $result1['c_message']; ?></td>
            <td><a href="?del=<?php echo $result1['c_id'];?>" onclick="return confirm(' Sure to Delete');" class="btn btn-danger">Delete</a></td>
          </tr>
          <?php
            $seq++;
            }
            if(isset($_GET['del']))
               {
             // $sql="DELETE FROM tbl_news WHERE news_id=".$_GET['del']."";
              $sql="UPDATE tbl_contact SET c_status='0' WHERE c_id=".$_GET['del']."";
              $resultt=mysqli_query($con,$sql);
            if($resultt)
                {
                  echo ("<script>location.href='contact.php'</script>");
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