<?php

include 'conn.php';

if (isset($_POST['sub'])) {
	$name = $_POST['usname'];
	$password = $_POST['pass'];
	$usertype=$_POST['usertype'];

	if ($usertype == "User") {
		
				$p ="select * from new where name='$name' && password='$password'";

				$run = mysqli_query($con,$p);
				$num = mysqli_num_rows($run);

				if ($num == 1) {
						echo '<script language="javascript">';
						echo 'alert("Logged In Successful")';
						echo '</script>';
						echo '<script>window.location.href = "usersearch.php";</script>';

				} else {
						echo '<script language="javascript">';
						echo 'alert("You are Not Register")';
						echo '</script>';
						echo '<script>window.location.href = "registration.php";</script>';
				}	


	} else {
		if ($usertype == "Admin") {
			
				$q ="select * from pharma where name='$name' && password='$password'";

				$run = mysqli_query($con,$q);
				$num = mysqli_num_rows($run);

				if ($num == 1) {

					if ($name =="Nasif" && $password == "4545") {
						echo '<script language="javascript">';
						echo 'alert("Logged In Successful")';
						echo '</script>';
						echo '<script>window.location.href = "display.php";</script>';
					} else {
						if ($name =="Shihab" && $password == "1919") {
						echo '<script language="javascript">';
						echo 'alert("Logged In Successful")';
						echo '</script>';
						echo '<script>window.location.href = "display2.php";</script>';
						} else {
							if ($name =="A.Malek" && $password == "7878") {
								echo '<script language="javascript">';
								echo 'alert("Logged In Successful")';
								echo '</script>';
								echo '<script>window.location.href = "display3.php";</script>';
							} else {
								
							}
							
						}
						
					}
					

				} else {
						echo '<script language="javascript">';
						echo 'alert("You are Not Register")';
						echo '</script>';
						echo '<script>window.location.href = "registration.php";</script>';
				}

		} else {
			
		}
		
	}

} else {
			
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<br >
	<div class="container">
 	<div class="col-lg-12">
	<h1 class="bg-warning text-info text-center" > Online Pharmacy Finder </h1>
	</div>
	</div>
	<br>
	<br>
	<br>

	<div class="Login-box">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<h2 style="color:Tomato;"><b>Login Here</b></h2>
				<form action="login.php" method="post">
					<div class="form-group">
						<label><b>Username</b></label>
						<input type="text" name="usname" placeholder="Enter Your name" class="form-control" required >
					</div>
					<div class="form-group">
						<label><b>Password</b></label>
						<input type="password" name="pass" placeholder="Enter Your password" class="form-control" required >
					</div>

					<b>Select User Type: </b><select name="usertype">
						<option value="Admin"><b>Admin</b></option>
						<option value="User"><b>User</b></option>
					</select>
					
					<br>
					<br>
			 		<button type="submit" name="sub" class="btn btn-primary btn-lg"><b>Login</b></button>
				</form>
			</div>
			<div class="col-md-8">
				<br>
				<td>
					<form method="post">
					

				</form>
				<br>	
				</td>
				<br>
				<br>
				<br>
				<h2 style="color:#ff0000;"><b>Not a member?</b></h2>
				<br>
				<form action="registration.php" method="post">
				
				<button type="submit" class="btn btn-info">Register as User</button>
				</form>
				
				<br>

				<form action="pharma_registration.php" method="post">
				
				<button type="submit" class="btn btn-success">Register as Pharmacist</button>
				</form>
				
			</div>

		</div>

	</div>
	</div>
</body>
</html>
