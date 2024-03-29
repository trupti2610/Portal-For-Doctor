 <?php
 include "header.php";
 ?>
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Set Time Slot</h3>
              
            </div>
            <div class="row">
             
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Set Time Slot</h4>
                   
                    <form class="forms-sample" method="post" action="">
                      <div class="form-group">
                                    <label class="form-group">Date</label>
                                        <input type="date" class="form-control" name="date" required>
                                                   
                                </div>
                    
                     <div class="form-group">
                                    <label class="form-group">Start Date</label>
                                        <input type="time" class="form-control" name="start_time" required>
                                                   
                                </div>
                                <div class="form-group">
                                    <label class="form-group">End Date</label>
                                        <input type="time" class="form-control" name="end_time" required>
                                                   
                                </div>
                      <button type="submit" name="submit" class="btn btn-primary mr-2"> Submit </button>
                      
                    </form>
                  </div>
                </div>
              </div>
            
             
                 
              
          
             
             


            </div>
          </div>
      <?php
 include "footer.php";
   if(isset($_POST['submit']))
    {
        $date=$_POST['date'];
        $start_time=$_POST['start_time'];
        $end_time=$_POST['end_time'];

        $qry1="SELECT * FROM tbl_doctor WHERE l_id='$id'";
        $run1=mysqli_query($con,$qry1);
        $result1=mysqli_fetch_array($run1);
        $d_id=$result1['d_id'];

        $qry2="INSERT INTO tbl_slot(s_id,s_date,s_start_time,s_end_time,s_status,d_id)VALUES('','$date','$start_time','$end_time','1','$d_id')";
        $run2=mysqli_query($con,$qry2);

        if($run2)
        {
            echo "<script>  alert('Slot Set'); </script>";
            echo "<script> location.replace('manage_time_slot.php'); </script>";
        }
    
    }
 ?> 