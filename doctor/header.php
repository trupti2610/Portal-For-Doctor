<?php
    
include "connection.php";
session_start();
    
    if(!isset($_SESSION['log']))
    {
        header("location:login.php");
    }
    
    else
    {
        $log = $_SESSION['log'];
        //echo "<script>alert('$log');</script>";
        $qry1="SELECT * FROM tbl_login WHERE l_email='$log'";
        $run1=mysqli_query($con,$qry1);
        $result1=mysqli_fetch_array($run1);
        $img=$result1['l_img'];
        $name=$result1['l_name'];
        $id=$result1['l_id'];
        $status=$result1['l_status'];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Medicare</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
    <style>
    .p {
max-width: 300px;
max-height: 400px;
white-space: nowrap;
overflow: auto;
}​
  </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
              <div class="nav-profile-image">
                <img src="<?php echo $img; ?>" alt="profile" />
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center"><?php echo $name; ?></span>
                
              </div>
            </a>
          </li>
         
          <li class="pt-2 pb-1">
            <span class="nav-item-head">Navigation</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
           <?php
            if($status==1)
            {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="send_request.php">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Send Request</span>
            </a>
          </li>
          <?php
            }
            else
            {
            ?>
         <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-calendar menu-icon"></i>
              <span class="menu-title">Time Slot</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="set_time_slot.php">Set Time Slot</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="manage_time_slot.php">Manage Time Slot</a>
                </li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-calendar menu-icon"></i>
              <span class="menu-title">Appointments</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="view_appointment.php">View Appointments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cancel_appointment.php">View Cancel Appointments</a>
                </li>
                
              </ul>
            </div>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="feedback.php">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Feedback</span>
            </a>
          </li>
            <?php
              }
            ?>
            
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        
        
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-chevron-double-left"></span>
            </button>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            
            <ul class="navbar-nav navbar-nav-right" style="margin-right: 3%"> 
              
              <li class="nav-item nav-profile dropdown d-none d-md-block">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <div class="nav-profile-text"><?php echo $name; ?> </div>
                </a>
                <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="edit_profile.php">
                    <i class="fa fa-user" style="margin-right: 8%"></i> Edit Profile </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="change_pass.php">
                    <i class="fa fa-lock" style="margin-right: 8%"></i> Change Password </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">
                    <i class="fa fa-sign-out" style="margin-right: 8%"></i> Logout </a>
                  <div class="dropdown-divider"></div>
                  
                </div>
              </li>
              <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="index.php">
                  <i class="mdi mdi-home-circle"></i>
                </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>