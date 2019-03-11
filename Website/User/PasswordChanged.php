<?php
session_start();
$pass=$_POST['password'];
include('DBConnection.php');
$query='update customer set password="'.$pass.'" where username="'.$_SESSION['username'].'"';
mysqli_query($con,$query);
mysqli_close($con);
header('location:UserLogout.php');
?>