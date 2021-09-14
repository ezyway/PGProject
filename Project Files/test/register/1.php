<?php

	
		include('../../connection.php');

		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$mobileNumber=$_POST['mobileNumber'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];

		session_start();

		$_SESSION['UsernameTaken']=true;
		echo $_SESSION['UsernameTaken'];
		
		$result=$con_obj->query_s("select * from login where username='$username'");
		
		if(mysqli_num_rows($result)>0)
			echo "Username Taken";
		else	
			echo "Username Available";
?>