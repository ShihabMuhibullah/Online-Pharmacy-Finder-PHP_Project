<!DOCTYPE html>
<html>
<head>
 <title>Search</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

	<div class="container">
 	<div class="col-lg-12">
	<br><br>
 	<h1 class="bg-info text-warning text-center" > Search Medicine </h1>

	<br> 

	<?php
		include 'conn.php';

		if(isset($_POST['search3']))
		{
    				$searchkey3 = $_POST['search3'];
    				// search in all table columns
   				    // using concat mysql function
    				$sql = "SELECT * FROM pharmacytable3 WHERE Name LIKE '%$searchkey3%' ";
    			
    				} else {
    						$sql = "SELECT * FROM pharmacytable3";
    						$result = mysqli_query($con, $sql);
    				}
   
    	if (isset($_POST['back3'])) {
    		echo '<script>window.location.href = "display3.php";</script>';
    	} else {
    		
    	}
    	




	?> 
      <form align="right" method="post">
        <input type="text" name="search3" class="form-control" placeholder="Search Your Medicine">
        <br>
        <button type="submit" name="back3" class="btn-success btn-lg">Go Back</button>
        <button type="submit" name="sub_search" class="btn-danger btn-lg">Search</button>

        </form>
		<br>
        <table  id="tabledata" class=" table table-striped table-hover table-bordered">
        <tr class="bg-dark text-white text-center">
 
              <th> ID </th>
              <th> Name </th>
              <th> DrugsFor </th>
              <th> Manufacturer </th>
              <th> Price </th>
              <th> Delete </th>
              <th> Update </th>
              

         </tr >

         <?php

	  $result = mysqli_query($con, $sql);

	  while($res = mysqli_fetch_array($result)){
 		?>
 
	 <tr class="text-center"> 
	 <td> <?php echo $res['ID'];  ?> </td>
	 <td> <?php echo $res['Name'];  ?> </td>
	 <td> <?php echo $res['DrugsFor'];  ?> </td>
	 <td> <?php echo $res['Manufacturer'];  ?> </td>
	 <td> <?php echo $res['Price'];  ?> </td>
	 <td> <button class="btn-danger btn"> <a href="delete3.php?ID=<?php echo $res['ID']; ?>" class="text-white"> Delete </a> </button> </td>
	 <td> <button class="btn-primary btn"> <a href="update3.php?ID=<?php echo $res['ID'];?>" class="text-white"> Update </a> </button> </td>
	 


  	</tr>

  <?php 
 }
  ?>

</table>   
 </div>
  </div>
 </body>
</html>