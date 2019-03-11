<?php
session_start();
// Log in Admin by checking credentials
$username=$_POST['username'];
$password=$_POST['password'];
$flag=0;
include('DBConnection.php');
$query='select username,password from admin';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=1;$i<=$n;$i++){
    $row=mysqli_fetch_array($res);
    if($row['username']==$username && $row['password']==$password){
        $_SESSION['logstatus']='YES';
        $_SESSION['username']=$username;
        $flag=1;
        break;
    }
}
mysqli_close($con);
if($flag==1)
    header('location:AdminHome.php');
else
    header('location:AdminLogin.php');
?>