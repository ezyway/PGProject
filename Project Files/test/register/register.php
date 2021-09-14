<?php 
	session_start();

	if(isset($_SESSION["UsernameTaken"]))
	{
		//Value is already there
	}
	else
	{
		//The Variable is not initialized 
		$_SESSION["UsernameTaken"] = false;
	}
?>

<html>
	<head>
		<link rel='stylesheet' href="register.css"></link>
		<script src='jquery-3.4.1.js'></script>
		<script>
			$(document).ready(function(){
			});
		</script>
	</head>
<body>

	<div class="mainVideoContainer">
		
		<?php
			if($_SESSION["UsernameTaken"])
				echo "<div class='colorOverlayRed'></div>";
			else
				echo "<div class='colorOverlayNormal'></div>";
		?>

		<div class='mainFormContainer'>
			<form action="#" method='POST'>
				
				<div class="row">
					<div class="col1">
						<div class="headingText">
							<?php
								if($_SESSION["UsernameTaken"])
									echo "<div style='color:red'>The Username is already taken</div>";
								else
									echo "Register with Us";
							?>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col2">
						<div class="group">
							<input type='text' name='firstName' id='' class='input' required>
							<span class='bar'></span>
							<label>First Name</label>
						</div>
						<div class="marginMakerCol2"></div>
					</div>
					<div class="col2">
						<div class="marginMakerCol2"></div>
						<div class="group">
							<input type='text' name='lastName' id='' class='input' required>
							<span class='bar'></span>
							<label>Last Name</label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col3">
						<div class="marginMaker"></div>	
						<div class="group">
							<input type='text' name='username' id='' class='input' required>
							<span class='bar'></span>
							<label>Username</label>
						</div>
					</div>
					<div class="col3">
						<div class="group">
							<input type='password' name='password' id='password' class='input' required>
							<span class='bar'></span>
							<label>Password</label>
						</div>
					</div>
					<div class="col3">
						<div class="group">
							<input type='password' id='confirmPassword' class='input' required>
							<span class='bar'></span>
							<label>Confirm Password</label>
						</div>
						<div class="marginMaker"></div>
					</div>
				</div>

				<div class="row">
					<div class="col3">
						<div class="marginMaker"></div>
						<div class="group">
							<input type='text' name='mobileNumber' id='' class='input' required>
							<span class='bar'></span>
							<label>Mobile Number</label>
						</div>
					</div>
					<div class="col3">
						<div class="group">
							<input type='text' name='email' id='' class='input' required>
							<span class='bar'></span>
							<label>E-mail</label>
						</div>
					</div>
					<div class="col3">
						<div class="group">
							<input type='date' name='dob' id='' class='input' required>
							<span class='bar'></span>
						</div>
						<div class="marginMaker"></div>
					</div>
				</div>

				<div class="row">
					<div class="col1">
						<input type='submit' name='submit' value='Submit' id='submit'>
					</div>
				</div>
			</form>
		</div>

		<video autoplay loop muted>
			<source src='../../assets/videos/trailer_register.mp4'>
		</video>
	</div>

	
</body>
</html>


<?php

	if(isset($_POST["submit"]))
	{
		include('../../connection.php');

		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$mobileNumber=$_POST['mobileNumber'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];

		
		$result=$con_obj->query_s("select * from login where username='$username'");
		
		if(mysqli_num_rows($result)>0)
		{
			//Username Taken
			$_SESSION['UsernameTaken']=true;
			header("Location:register.php");
		}
		else
		{	
			//Username Available
			$_SESSION['UsernameTaken']=false;
			$con_obj->query_s("insert into login(first_name,last_name,username,password,mobile_number,email,dob) values('$firstName','$lastName','$username','$password','$mobileNumber','$email','$dob')");
			header("Location:index.php");
		}
	}
?>