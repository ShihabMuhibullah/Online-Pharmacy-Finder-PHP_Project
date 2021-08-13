<?php

session_start();

$con = mysql_connect('localhost','root','');

mysqli_select_db($con,'pharmacy');

$name = $_post['user'];
$pass = $_post['password'];

$s = "select * from usertable where name ='$name'";

$result = mysqli_query($con, $s);

$num = mysql_num_rows($result);

if ($num == 1) {
	echo "usename taken";
}else{
	$reg = "insert into usertable(name , password) values('$name' , '$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}

?>