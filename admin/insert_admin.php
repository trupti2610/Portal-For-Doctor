<?php

	include "connection.php";
	
	session_start();

		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['add'];
		//$pass = $_POST['pass1'];
		function random_strings($length_of_string) 
			{ 
			    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
			  
			    return substr(str_shuffle($str_result),  
			                       0, $length_of_string); 
			} 
		$x=random_strings(6);
			
	
			
			
			
				$location="photos/Default.png";
				
			

			
		$qry2="SELECT l_email from tbl_login WHERE l_email='$email'";
		
				$result2 = mysqli_query($con,$qry2);

				$c=mysqli_num_rows($result2);
				if($c>=1)
				{
				echo "<script>alert('Same Email Address Exists in Database');</script>";
				header("refresh:0; url=add_admin.php");
				}

				else
				{
			
						$query = "INSERT INTO tbl_login(l_id,l_name,l_email,l_phone,l_pass,l_add,l_img,l_role,l_status,l_active) VALUES('','$name','$email','$phone','$x','$address','$location','1','1','1')";
						
						$result = mysqli_query($con,$query);
						
				
							if(!$result)
							{
								echo "<script>alert('Not Inserted');</script>";
							}
							else
							{
								header("refresh:0; url=add_admin.php");
							}
							
				}
				
?>