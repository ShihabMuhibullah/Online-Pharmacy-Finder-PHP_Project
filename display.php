<!DOCTYPE html>
<html>
<head>
 <title>Display All Medicine</title>

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
 <h1 class="bg-secondary text-white text-center" ><b> Lazz Pharma Dhanmondi Branch </b></h1>

      <br>
      <form align="right" method="post">
      <button name="search" type="submit" class="btn btn-success">Search Medicine</button>    
      <button name="go" type="submit" class="btn btn-warning ">Add Medicine</button>
      <button name="lazz" type="submit" class="btn btn-info ">Location</button>      
      <button name="out" type="submit" class="btn btn-danger ">Log-Out</button>
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

	  include 'conn.php'; 
	  $q = "select * from pharmacytable ";

	  $query = mysqli_query($con,$q);

	  while($res = mysqli_fetch_array($query)){
      
 ?>
    <form method="post">
	 <tr class="text-center" > 
	 <td> <?php echo $res['ID'];  ?> </td>
	 <td> <?php echo $res['Name'];  ?> </td>
	 <td> <?php echo $res['DrugsFor'];  ?> </td>
	 <td> <?php echo $res['Manufacturer'];  ?> </td>
	 <td> <?php echo $res['Price'];  ?> </td>
	 <td> <button class="btn-danger btn"> <a href="delete.php?ID=<?php echo $res['ID']; ?>" class="text-white"> Delete </a> </button> </td>
	 <td> <button class="btn-primary btn"> <a href="update.php?ID=<?php echo $res['ID'];?>" class="text-white"> Update </a> </button> </td>
   </tr>
   </form>

  

  <?php 
 }
  ?>
 
<?php

if (isset($_POST['out'])) {
      echo '<script language="javascript">';
      echo 'alert("Logged-out Successfully")';
      echo '</script>';
      echo '<script>window.location.href = "login.php";</script>';
} else {
 
}

if (isset($_POST['go'])) {
 
      echo '<script>window.location.href = "Insert.php";</script>';
} else {
 
}
if (isset($_POST['search'])) {
  echo '<script>window.location.href = "search.php";</script>';
} else {
  
}
if (isset($_POST['lazz'])) {
      echo '<script>window.location.href = "lazz.html";</script>';
} else {
 
}




?>

 </table>  

    </div>
  </div>

  <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>