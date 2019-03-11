<?php
include('Header.php');
?>
<!-- Password Changing Form -->
<head>
<title>Change Password</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<div class="row">
<div class="col-md-12" style="color:blue;font-size:40px;">
Reset or Change your Password
</div>
</div>
<br/>
<form method="post" action="PasswordChanged.php" style="font-size:20px;" onsubmit="return checkPass()">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="form-group">
<input type="password" class="form-control" placeholder="Set a new password" name="password" id="password" required>
</div>
</div>
<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="form-group">
<input type="password" class="form-control" placeholder="Re-Enter New Password" name="newpassword" id="newpassword" required>
</div>
</div>
<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<button type="submit" class="btn btn-primary" style="width:100%;">Update Password</button>
</div>
<div class="col-md-4"></div>
</div>
</form>
</div>
</div>
<br/><br/><br/><br/><br/>
</div>
<script>
function checkPass(){
	var a=document.getElementById('password').value;
	var b=document.getElementById('newpassword').value;
	if(a==b){
		alert('Your password will be changed and you will be logged out');
		return true;
	}
	else{
		alert('Passwords do not match');
		return false;
	}
}
</script>
<?php
include('footer.php');
?>