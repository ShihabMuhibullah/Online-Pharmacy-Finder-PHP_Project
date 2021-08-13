<?php

include 'conn.php';

if(isset($_POST['done3'])){



  $ID = $_POST['ID'];
  $Name = $_POST['Name'];
  $DrugsFor = $_POST['DrugsFor'];
  $Manufacturer = $_POST['Manufacturer'];
  $Price = $_POST['Price'];
  
  $q = " UPDATE pharmacytable3 set ID='$ID', Name='$Name', DrugsFor='$DrugsFor', Manufacturer='$Manufacturer', Price='$Price' where ID=$ID  ";
  
  $query = mysqli_query($con,$q);
  header('location:display3.php'); 
  
}else {
	
}

if (isset($_POST['Cancel3'])) {
	  echo '<script language="javascript">';
      echo 'alert("Update Process Canceled")';
      echo '</script>';
      echo '<script>window.location.href = "display3.php";</script>';
} else {
	
}


?>


<!DOCTYPE html>
<html>
<head>
 <title>Update</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="col-lg-6 m-auto">
	
		<form method="post">
	
			<br><br><div class="card">
	
			<div class="card-header bg-dark">
			<h1 class="text-white text-center">  Update Operation </h1>
			</div><br>
	
			<label> ID: </label>
			<input type="text" name="ID" class="form-control"> 
			<br>
	
			<label> Name: </label>
			<input type="text" name="Name" class="form-control"> <br>
	
			<label> DrugsFor: </label>
			<input type="text" name="DrugsFor" class="form-control"> <br>
			
			<label> Manufacturer: </label>
			<input type="text" name="Manufacturer" class="form-control"> <br>
			
			<label> Price: </label>
			<input type="text" name="Price" class="form-control"> <br>
						
	
			<button class="btn btn-success" type="submit" name="done3"> Submit </button><br>
			<button class="btn btn-warning" type="submit" name="Cancel3"> Cancel </button><br>

  </div>
 </form>
 </div>	
</body>
</html>