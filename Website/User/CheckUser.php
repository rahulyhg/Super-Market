<?php
// Checks whether a username for user exist or not
$username=$_GET['uname'];
include('DBConnection.php');
$query='select * from customer where username="'.$username.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
if($n==0)
	echo "Username is valid";
else
	echo "Username already exist";
mysqli_close($con);
?>