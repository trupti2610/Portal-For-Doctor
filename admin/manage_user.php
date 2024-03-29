<?php
  include "header.php";
?>
       <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Manage User</h3>
              
            </div>
            <div class="row">
            
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage User</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>

                          <tr>
                            <th>Sr No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $seq=1;
                            $qry1="SELECT * FROM tbl_login WHERE l_status='1' AND l_role='2'";
                            $run1=mysqli_query($con,$qry1);
                            while($result1=mysqli_fetch_array($run1))
                            {
                           ?>
                          <tr>
                            <td><?php echo $seq; ?></td>
                            <td><?php echo $result1['l_name']; ?></td>
                            <td><?php echo $result1['l_email']; ?></td>
                            <td><?php echo $result1['l_phone']; ?></td>
                            <td class="p"><?php echo $result1['l_add']; ?></td>
                            <td><img src="<?php echo $result1['l_img']; ?>" width="50px" height="50px"></td>
                            <td><a href="?del=<?php echo $result1['l_id'];?>" onclick="return confirm(' Sure to Delete');" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <?php
                           $seq++;
            }
            if(isset($_GET['del']))
               {
             // $sql="DELETE FROM tbl_news WHERE news_id=".$_GET['del']."";
              $sql="UPDATE tbl_login SET l_status='0' WHERE l_id=".$_GET['del']."";
              $resultt=mysqli_query($con,$sql);
            if($resultt)
                {
                  echo ("<script>location.href='manage_user.php'</script>");
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