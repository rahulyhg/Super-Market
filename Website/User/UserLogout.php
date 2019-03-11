<?php
session_start();
// Logout user
$_SESSION['logstatus']='NO';
unset($_SESSION['username']);
header('location:Home.php')
?>