<?php
	
	$con = mysqli_connect('localhost','root','','doctor');
	
	if(!$con)
	{
		echo "Server not found...";
	}else{mysqli_select_db($con,'doctor');}	
	/*
	if(!mysqli_select_db($con,'lawyer'))
	{
		echo "Database not found...";
	}*/

?>