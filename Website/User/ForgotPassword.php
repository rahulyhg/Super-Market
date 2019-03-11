<?php
include('Header.php');
?>
<!-- User Login Form -->
<head>
<title>Login</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<div class="row">
<div class="col-md-12" style="color:blue;font-size:40px;">
Reset or Unblock Password
</div>
</div>
<br/>
<form method="post" action="ResetPassword.php" style="font-size:20px;" onsubmit="return validatePasswords()">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter your username" name="username" required>
</div>
</div>
<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="form-group">
<input type="password" class="form-control" placeholder="Enter your password" name="password" id="pass" required>
</div>
</div>
<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="form-group">
<input type="password" class="form-control" placeholder="Re-Enter password" id="repass" required>
</div>
</div>
<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<button type="submit" class="btn btn-primary" style="width:100%;">Reset Password</button>
</div>
<div class="col-md-4"></div>
</div>
</form>
</div>
</div>
<br/><br/><br/><br/><br/>
</div>
<script>
function validatePasswords(){
	var pass=document.getElementById('pass').value;
	var repass=document.getElementById('repass').value;
	var res=true;
	if(pass!=repass){
		res=false;
		alert('Passwords do not match');
	}
	if(res!=false && pass.length<8){
		res=false;
		alert('Password should be 8 characters or more');
	}
	return res;
}
</script>
<?php
include('footer.php');
?>