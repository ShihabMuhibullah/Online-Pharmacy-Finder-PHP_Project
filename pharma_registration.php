<?php


include 'conn.php';

if (isset($_POST['reg2'])) {
		$name = $_POST['usname2'];
		$email = $_POST['email2'];
		$password = $_POST['pass2'];
		$cpass = $_POST['cpass2'];
		$mobile = $_POST['mobile2'];
		$pharmaName = $_POST['phar2'];
		$TIN = $_POST['tin'];
		

		$q = "SELECT * from pharma where email = '$email'";
		

		$run2 = mysqli_query($con,$q);
		$num2 = mysqli_num_rows($run2);

		if ($password==$cpass) {
			if ($num2 == 1) {
			echo '<script language="javascript">';
			echo 'alert("Duplicate Email")';
			echo '</script>';
			echo '<script>window.location.href = "pharma_registration.php";</script>';
		} else {
			$reg2 = " INSERT into pharma(name,email,password,mobile,pharmacyName,TIN,Type) values ('$name','$email','$password','$mobile','$pharmaName','$TIN','Admin') ";
			mysqli_query($con,$reg2);
			echo '<script language="javascript">';
			echo 'alert("Registration Successful")';
			echo '</script>';
			echo '<script>window.location.href = "login.php";</script>';
		}
		} else {
			echo '<script language="javascript">';
			echo 'alert("Password Mismatched")';
			echo '</script>';
			echo '<script>window.location.href = "pharma_registration.php";</script>';
		}
		
		
} 

?>


<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register as Pharmacist</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<br >
	<div class="Login-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto">
				<h2 style="color:#9B317A;">Register Here as Pharmacist</h2>
				<form method="post">

					<div class="form-group">
						<label><b>Username</b></label>
						<input type="text" name="usname2" placeholder="Enter Your name" class="form-control" required >
					</div>

					<div class="form-group">
						<label><b>Email</b></label>
						<input type="varchar" name="email2" placeholder="Enter Your email" class="form-control" required >
					</div>

					<div class="form-group">
						<label><b>Password</b></label>
						<input type="password" name="pass2" placeholder="Enter Your password" class="form-control" required >
					</div>

					<div class="form-group">
						<label><b>Confirm Password</b></label>
						<input type="password" name="cpass2" placeholder="Re-enter Your password" class="form-control" required >
					</div>

					<div class="form-group">
						<label><b>Mobile number</b></label>
						<input type="varchar" name="mobile2" placeholder="Enter Your mobile number" class="form-control" required >
					</div>

					<div class="form-group">
						<label><b>Pharmacy Name</b></label>
						<input type="varchar" name="phar2" placeholder="Enter Your Pharmacy name" class="form-control" required >
					</div>

					<div class="form-group">
						<label><b>TIN Number</b></label>
						<input type="varchar" name="tin" placeholder="Enter Your TIN Number" class="form-control" required >
					</div>

			 		<button name="reg2" type="submit" class="btn btn-primary"><b>Register</b></button>
				</form>
				

				<br>
				<form action="login.php" method="post">
				
				<button type="submit" class="btn btn-warning">Back to login</button>
				</form>

				
			</div>

		</div>

	</div>
	</div>

</body>
</html>
<script type="text/javascript"></script>