<?php
$name=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$category=$_POST['category'];
$image=$_POST['image'];
include('DBConnection.php');
$que='insert into product (name,quantity,price,category,image) values ("'.$name.'","'.$quantity.'",'.$price.',"'.$category.'","'.$image.'")';
$res=mysqli_query($con,$que);
mysqli_close($con);
header('location:AdminHome.php');
?>