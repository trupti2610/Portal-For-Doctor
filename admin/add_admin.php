 <?php
 include "header.php";
 ?>
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Add Admin</h3>
              
            </div>
            <div class="row">
             
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Admin</h4>
                    <form class="forms-sample" method="post" action="insert_admin.php">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Enter Name" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email" />
                      </div>
                     
                     
                      <div class="form-group">
                        <label for="exampleInputCity1">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputCity1" placeholder="Enter Phone Number" />
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Address</label>
                        <textarea name="add" placeholder="Enter Address" 
                          class="form-control"
                          id="exampleTextarea1"
                          rows="3"
                        ></textarea>
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary mr-2"> Add </button>
                      
                    </form>
                  </div>
                </div>
              </div>
             
               
              
                 
             </div>
          </div>
      <?php
 include "footer.php";
 ?> 