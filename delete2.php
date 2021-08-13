<?php

include 'conn.php';

$ID = $_GET['ID'];

$q = " DELETE FROM `pharmacytable2` WHERE ID = $ID ";

mysqli_query($con, $q);

header('location:display2.php');

?>
