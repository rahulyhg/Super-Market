<?php
session_start();
// Deletes item from the cart
include('DBConnection.php');
$query='delete from cart_'.$_SESSION['username'].' where pro_name="'.$_POST['pname'].'"';
mysqli_query($con,$query);
mysqli_close($con);
header('location:Cart.php');
?>