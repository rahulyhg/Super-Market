<?php
session_start();
// Completes the registration for user
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$state=$_POST['state'];
$city=$_POST['city'];
$username=$_POST['username'];
$password=$_POST['password'];
include('DBConnection.php');
$query='insert into customer values ("'.$name.'","'.$gender.'","'.$mobile.'","'.$email.'","'.$address.'","'.$city.'","'.$pincode.'","'.$state.'","'.$username.'","'.$password.'")';
mysqli_query($con,$query);
$query='create table cart_'.$username.'(pro_name varchar(30),qty int)';
mysqli_query($con,$query);
$_SESSION['logstatus']='YES';
$_SESSION['username']=$username;
mysqli_close($con);
header('location:Home.php');
?>