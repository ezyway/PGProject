<html>
	<head>
		<link rel='stylesheet' href="login.css"></link>
		<script src='jquery-3.4.1.js'></script>
		<script>
			$(document).ready(function(){
				
				});
		</script>
	</head>
<body>

	<div class="mainVideoContainer">

		<div class="colorOverlay"></div>

		<form action="#" method='POST'>
			<table border='0'>
				
				<tr>
					<td id='heading'>
						Login
					</td>
				</tr>
				
				<tr>
					<td class='tdInput'>
						<div class='group'>
							<input type='text' name='username' class='input' required>
							<span class='bar'></span>
							<label>Username</label>
						</div>
					
						<div class='group'>
							<input type='password' name='password' class='input' required>
							<span class='bar'></span>
							<label>Password</label>
						</div>
					</td>
				</tr>
				
				<tr>
					<td class='tdSubmit'>
						<input type='submit' value="Submit" id='submit' required>
					</td>
				</tr>
			</table>
		</form>
		
		<video autoplay loop muted>
			<source src='../../assets/videos/amdTrailer_login.mp4'>
		</video>
	</div>
	
	<!--<form action="#" method='POST'>
		<table border='0'>
			
			<tr>
				<td id='heading'>
					<div class='headingDiv'>Login
				</td>
			</tr>
			
			<tr>
				<td class='tdInput'>
					<div class='group'>
						<input type='text' name='username' class='input' required>
						<span class='bar'></span>
						<label>Username</label>
					</div>
				
					<div class='group'>
						<input type='password' name='password' class='input' required>
						<span class='bar'></span>
						<label>Password</label>
					</div>
				</td>
			</tr>
			
			<tr>
				<td class='tdSubmit'>
					<input type='submit' value="Submit" id='submit' required>
				</td>
			</tr>
		</table>
	</form>-->
</body>
</html>