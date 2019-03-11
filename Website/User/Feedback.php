<?php
// Fill feedback form
$name=$_POST['name'];
$rating=$_POST['rating'];
$feedback=$_POST['feedback'];
include('DBConnection.php');
$query='insert into feedback values ("'.$name.'",'.$rating.',"'.$feedback.'")';
mysqli_query($con,$query);
mysqli_close($con);
header('location:Home.php');
?>