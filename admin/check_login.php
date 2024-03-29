<?php

		include "connection.php";
		
		if(isset($_POST['submit']))
		{
			
		session_start();
	
		$log=$_POST['email'];
		
		$pass = $_POST['pass'];
		
		
		$qry = "SELECT * FROM tbl_login WHERE (l_email='$log' AND l_pass='$pass')";

		$result = mysqli_query($con,$qry);
		
		$value = mysqli_fetch_array($result);

		
		if($value['l_pass']==$pass)
		{
			if($value['l_active']==1)
			{
					$_SESSION['log'] = $value['l_email'];
					
					$status = $value['l_status'];
					$role=$value['l_role'];
				
					if($status==1 OR $status==2)
					{
						/*$id = $value['l_id'];
							
						$otp = rand(100000,999999);
							
						$sql = "INSERT INTO otp_tbl(otp_id,login_id,otp) VALUES('','$id','$otp')";
							
						$result1 = mysqli_query($con,$sql);
							
							if($result1)
							{
								header("location:verification.php");
							}*/
							if($role=='1')
							{
								header("location:index.php");
							}
							else if($role=='2')
							{
								header("location:../user/index.php");
							}
							else
							{
								header("location:../doctor/index.php");
							}
					}
					else
					{
						echo "<script>  alert('You are not allowed to access this website'); </script>";
						header("Refresh: 0; url=login.php");
					}
						
					
			}
			}
			
			else
						{
							echo "<script>  alert('Incorrect Details'); </script>";
						header("Refresh: 0; url=login.php");
						}
	
		
		}
?>