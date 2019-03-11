<?php
include('Header.php');
$username=$_POST['username'];
$password=$_POST['password'];
include('DBConnection.php');
$query='select * from customer where username="'.$username.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
?>
<!-- Password Reset Page -->
<head>
<title>Password Status</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<?php
if($n==0){
	echo '<div style="color:green;font-size:50px;">Your Username is wrong</div><br/>';
	echo '<div style="font-size:150px;"><i class="fa fa-times"></i></div><br/>';
	echo '<div style="color:blue;font-size:50px;">Check your username again and then try...</div>';
}
else{
	$query='update customer set password="'.$password.'" where username="'.$username.'"';
	mysqli_query($con,$query);
	echo '<div style="color:green;font-size:50px;">Your Password has been changed</div><br/>';
	echo '<div style="font-size:150px;"><i class="fa fa-smile-o"></i></div><br/>';
	echo '<div style="color:blue;font-size:50px;">Continue Shopping.......</div>';
}
?>
</div>
</div>
<br/><br/>
</div>
<?php
include('footer.php');
?>