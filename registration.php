<?php


include 'conn.php';

if (isset($_POST['reg'])) {
		$name = $_POST['usname'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$cpass = $_POST['cpass'];	
		$mobile = $_POST['mobile'];
		$NID = $_POST['nid'];



		$p = "select * from new where email = '$email'";
		

		$run = mysqli_query($con,$p);
		$num = mysqli_num_rows($run);

		if ($password==$cpass) {
			if ($num == 1) {
			echo '<script language="javascript">';
			echo 'alert("Duplicate Email")';
			echo '</script>';
			echo '<script>window.location.href = "registration.php";</script>';
		} else {
			$reg = " INSERT into new(name,email,password,mobile,NID,Type) values ('$name','$email','$password','$mobile','$NID','User') ";
			mysqli_query($con,$reg);
			echo '<script language="javascript">';
			echo 'alert("Registration Successful")';
			echo '</script>';
			echo '<script>window.location.href = "login.php";</script>';
		}
		} else {
			echo '<script language="javascript">';
			echo 'alert("Password Mismatched")';
			echo '</script>';
			echo '<script>window.location.href = "registration.php";</script>';
		}
				
		
} 

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register as User</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<br >
	<div class="Login-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto">
				<h2 style="color:#513179;"><b>Register Here</b></h2>
				<br>
				<form  method="post">

					<div class="form-group">
						<label><b>Username</b></label>
						<input type="text" name="usname" placeholder="Enter Your name" class="form-control" required >
					</div>

					<div class="form-group">
						<label><b>Email</b></label>
						<input type="varchar" name="email" placeholder="Enter Your email" class="form-control" required >
					</div>

					<div class="form-group">
						<label><b>Password</b></label>
						<input type="password" name="pass" placeholder="Enter Your password" class="form-control" required >
					</div>

					<div class="form-group">
						<label><b>Confirm Password</b></label>
						<input type="password" name="cpass" placeholder="Re-enter Your password" class="form-control" required >
					</div>

					<div class="form-group">
						<label><b>Mobile number</b></label>
						<input type="varchar" name="mobile" placeholder="Enter Your mobile number" class="form-control" required >
					</div>

					<div class="form-group">
						<label><b>NID Number</b></label>
						<input type="varchar" name="nid" placeholder="Enter Your NID Number" class="form-control" required >
					</div>

			 		<button name="reg" type="submit" class="btn btn-primary"><b>Register</b></button>
				</form>
				

				<br>
				<form action="login.php" method="post">
				
				<button type="submit" class="btn btn-info">Back to login</button>
				</form>

				
			</div>

		</div>

	</div>
	</div>

</body>
</html>
<script type="text/javascript"></script>