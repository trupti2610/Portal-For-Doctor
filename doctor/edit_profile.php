 <?php
 include "header.php";
 $qry1="SELECT * FROM tbl_login WHERE l_id='$id'";
  $run1=mysqli_query($con,$qry1);
  $result1=mysqli_fetch_array($run1);
 ?>
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Edit Profile</h3>
              
            </div>
            <div class="row">
             
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Profile</h4>
                    
                    <form class="forms-sample" method="post" action="">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" value="<?php echo $result1['l_name']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail3"  value="<?php echo $result1['l_email']; ?>" required />
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail3">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputEmail3"  value="<?php echo $result1['l_phone']; ?>" required />
                      </div>

                      <div class="form-group">
                        <label for="exampleTextarea1">Address</label>
                        <textarea name="add"
                          class="form-control"
                          id="exampleTextarea1"
                          rows="3"
                        ><?php echo $result1['l_add']; ?></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail3">Upload New Iage</label>
                        <input type="file" name="image" class="form-control" />
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail3">Current Iage</label>
                         <img src="<?php echo $result1['l_img']; ?>" height="100px" width="100px" >
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

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $add=$_POST['add'];
    $image=$_POST['image'];
    //echo "Hello".$image;
    if($image=="")
    {
      $qry1="UPDATE tbl_login SET l_email='$email', l_name='$name', l_phone='$phone', l_add='$add' WHERE l_id='$id'";
      $run1=mysqli_query($con,$qry1);
      if($run1)
      {
        echo "<script> alert('Profile Updated'); </script>";
        echo "<script> location.replace('index.php'); </script>";  
      }
      else
      {
        echo "<script> alert('Profile Not Updated'); </script>";
        echo "<script> location.replace('edit_profile.php'); </script>";  
      }
    }
    else
    {
      $location="photos/".$image;
      $qry1="UPDATE tbl_login SET l_email='$email', l_name='$name', l_phone='$phone', l_add='$add', l_img='$location' WHERE l_id='$id'";
      $run1=mysqli_query($con,$qry1);
      if($run1)
      {
        echo "<script> alert('Profile Updated'); </script>";
        echo "<script> location.replace('index.php'); </script>";  
      }
      else
      {
        echo "<script> alert('Profile Not Updated'); </script>";
        echo "<script> location.replace('edit_profile.php'); </script>";  
      } 
    }

  }
 ?> 