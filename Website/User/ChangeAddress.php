<?php
session_start();
include('DBConnection.php');
$address=$_POST['address'];
$query='update customer set address="'.$address.'" where username="'.$_SESSION['username'].'"';
mysqli_query($con,$query);
mysqli_close($con);
header('location:Profile.php');
?>