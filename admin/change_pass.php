 <?php
 include "header.php";
 $qry1="SELECT * FROM tbl_login WHERE l_id='$id'";
  $run1=mysqli_query($con,$qry1);
  $result1=mysqli_fetch_array($run1);
  $l_pass=$result1['l_pass'];
 ?>
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Change Password</h3>
              
            </div>
            <div class="row">
             
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Change Password</h4>
                    
                    <form class="forms-sample" method="post" action="">
                      <div class="form-group">
                        <label for="exampleInputName1">Old Password</label>
                        <input type="password"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="pass" class="form-control" id="exampleInputName1" placeholder="Enter Old Password" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">New Password</label>
                        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="pass1" class="form-control" id="exampleInputName1" placeholder="Enter New Password" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Confirm Password</label>
                        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="pass2" class="form-control" id="exampleInputName1" placeholder="Confirm New Password" required>
                      </div>
                      
                      <button type="submit" name="submit" class="btn btn-primary mr-2"> Update </button>
                      
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
    $pass=$_POST['pass']; 
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    if($l_pass==$pass)
    {
      if($pass1==$pass2)
      {
        $qry1="UPDATE tbl_login SET l_pass='$pass2' WHERE l_id='$id'";
        $run1=mysqli_query($con,$qry1);
        if($run1)
        {
          echo "<script> alert('Password Changed'); </script>";
          echo "<script> location.replace('index.php'); </script>";  
        }
      }
      else
      {
        echo "<script> alert('Both the Passwords are Different'); </script>";
        echo "<script> location.replace('change_pass.php'); </script>";
      }
    }
    else
    {
      echo "<script> alert('Incorrect Old Password'); </script>";
      echo "<script> location.replace('change_pass.php'); </script>";
    }

  }
 ?> 