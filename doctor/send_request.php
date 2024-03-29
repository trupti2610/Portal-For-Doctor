 <?php
 include "header.php";
 ?>
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Send Request</h3>
              
            </div>
            <div class="row">
             
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Send Request</h4>
                   
                    <form class="forms-sample" method="post" action="">
                      <div class="form-group">
                        <label for="exampleInputName1">Department</label>
                        <select name="dept" class="form-control">
                          <option value="psychiatrist">Psychiatrist</option>
                                        <option value="heart">Heart Disease</option>
                                        <option value="dental">Dental Care</option>
                                        <option value="body">Body Surgery</option>
                                        <option value="neurology">Neurology Surgery</option>
                                        <option value="gynecology">Gynecology</option>
                        </select>
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleTextarea1">Exprerience</label>
                        <textarea name="exp" placeholder="Enter Exprerience Details" 
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4"
                        ></textarea>
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
        $exp=$_POST['exp'];
        $dept=$_POST['dept'];

        $qry1="INSERT INTO tbl_doctor(d_id,d_dept,d_exp,l_id)VALUES('','$dept','$exp','$id')";
        $run1=mysqli_query($con,$qry1);
        if($run1)
        {
            echo "<script>  alert('Request Send'); </script>";
            echo "<script> location.replace('index.php'); </script>";
        }
        else
        {
            echo "<script>  alert('Request Not Send'); </script>";
            echo "<script> location.replace('send_request.php'); </script>";
        }
    }
 ?> 