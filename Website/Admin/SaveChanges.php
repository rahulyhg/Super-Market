<?php
$id=$_POST['id'];
$name=$_POST['name'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$category=$_POST['category'];
$image=$_POST['image'];
include('DBConnection.php');
$query='update product set name="'.$name.'", quantity="'.$quantity.'", price='.$price.', category="'.$category.'", image="'.$image.'" where id='.$id;
mysqli_query($con,$query);
mysqli_close($con);
header('location:AdminHome.php');
?>