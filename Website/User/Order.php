<?php
session_start();
include('DBConnection.php');
$query='select sum(qty) from cart_'.$_SESSION['username'];
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
$price=$_POST['price'];
$date=date("Y").'-'.date("m").'-'.date("d");
$query='insert into orders values ("'.$_SESSION['username'].'",'.$price.','.$row['sum(qty)'].',"'.$date.'")';
mysqli_query($con,$query);
mysqli_close($con);
header('location:Ordered.php');
?>