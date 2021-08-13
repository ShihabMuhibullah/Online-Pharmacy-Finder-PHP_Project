<?php

include 'conn.php';

$ID = $_GET['ID'];

$q = " DELETE FROM `pharmacytable3` WHERE ID = $ID ";

mysqli_query($con, $q);

header('location:display3.php');

?>
