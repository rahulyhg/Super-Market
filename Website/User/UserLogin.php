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
Login with your valid Credentials
</div>
</div>
<br/>
<form method="post" action="UserLogged.php" style="font-size:20px;">
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
<input type="password" class="form-control" placeholder="Enter your password" name="password" required>
</div>
</div>
<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<button type="submit" class="btn btn-primary" style="width:100%;">Login</button>
</div>
<div class="col-md-4"></div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<a href="ForgotPassword.php">Forgot Password ?</a>
</div>
<div class="col-md-4"></div>
</div>
</form>
</div>
</div>
<br/><br/><br/><br/><br/>
</div>
<?php
include('footer.php');
?>