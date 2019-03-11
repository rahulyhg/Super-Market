<?php
$pname=$_POST['pname'];
$con=mysqli_connect('localhost','root','123456789');
include('DBConnection.php');
mysqli_query($con,$query);
mysqli_close($con);
header('location:AdminHome.php');
?>