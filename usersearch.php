<!DOCTYPE html>
<html>
<head>
 <title>User Search</title>

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
  <h1 class="bg-warning text-info text-center" > Search What Medicine You Want </h1>

  <br> 

  <?php
    include 'conn.php';

    if(isset($_POST['search']))
    {
            $searchkey = $_POST['search'];
            // search in all table columns
              // using concat mysql function
            $sql = "SELECT * FROM pharmacytable WHERE Name LIKE '%$searchkey%' ";
            $sql2 = "SELECT * FROM pharmacytable2 WHERE Name LIKE '%$searchkey%' ";
            $sql3 = "SELECT * FROM pharmacytable3 WHERE Name LIKE '%$searchkey%' ";
            


          
            } else {
                $sql = "SELECT * FROM pharmacytable";
                $result = mysqli_query($con, $sql);
                $sql2 = "SELECT * FROM pharmacytable2";
                $result2 = mysqli_query($con, $sql2);
                $sql3 = "SELECT * FROM pharmacytable3";
                $result3 = mysqli_query($con, $sql3);

            }
   
      if (isset($_POST['out2'])) {
      echo '<script language="javascript">';
      echo 'alert("Logged-out Successfully")';
      echo '</script>';
      echo '<script>window.location.href = "login.php";</script>';
      } else {
 
      }
      




  ?> 
      </form>
        <form align="left" method="post">
          <button name="out2" type="submit" class="btn btn-danger btn-lg">Log-Out</button>
        </form>
        <br>

        <form align="right" method="post">
        <input type="text" name="search" class="form-control" placeholder="Search Your Medicine">
        <br>
        <button type="submit" name="sub_search" class="btn btn-success btn-lg">Search</button>

        <br>
        <br>
        <table  id="tabledata" class=" table table-striped table-hover table-bordered">
        <tr class="bg-dark text-white text-center">
 
              <th> ID </th>
              <th> Name </th>
              <th> DrugsFor </th>
              <th> Manufacturer </th>
              <th> Price </th>
              <th> By </th>
              <th> Location </th>
              

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
   <td> <?php echo $res['By'];  ?> </td>
   <td> <button class="btn-primary btn"> <a href="lazz.html?>" class="text-white"> Location </a> </button> </td>

    </tr>

  <?php 
 }
  ?>
  <?php

    $result2 = mysqli_query($con, $sql2);

    while($res2 = mysqli_fetch_array($result2)){
    ?>
 
   <tr class="text-center"> 
   <td> <?php echo $res2['ID'];  ?> </td>
   <td> <?php echo $res2['Name'];  ?> </td>
   <td> <?php echo $res2['DrugsFor'];  ?> </td>
   <td> <?php echo $res2['Manufacturer'];  ?> </td>
   <td> <?php echo $res2['Price'];  ?> </td>
   <td> <?php echo $res2['By'];  ?> </td>
   <td> <button class="btn-primary btn"> <a href="naz.html?>" class="text-white"> Location </a> </button> </td>

    </tr>

  <?php 
 }
  ?>
  <?php

    $result3 = mysqli_query($con, $sql3);

    while($res3 = mysqli_fetch_array($result3)){
    ?>
 
   <tr class="text-center"> 
   <td> <?php echo $res3['ID'];  ?> </td>
   <td> <?php echo $res3['Name'];  ?> </td>
   <td> <?php echo $res3['DrugsFor'];  ?> </td>
   <td> <?php echo $res3['Manufacturer'];  ?> </td>
   <td> <?php echo $res3['Price'];  ?> </td>
   <td> <?php echo $res3['By'];  ?> </td>
   <td> <button class="btn-primary btn"> <a href="khandakar.html?>" class="text-white"> Location </a> </button> </td>

    </tr>

  <?php 
 }
  ?>

</table>   
 </div>
  </div>
 </body>
</html>