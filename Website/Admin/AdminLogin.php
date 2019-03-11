<!-- Admin Login Form -->
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login</title>
</head>
<body>
<div style="background-image:url('../Images/Home/Home.jpg');height:700px;">
<br/><br/><br/><br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<div class="row">
<div class="col-md-12" style="color:blue;font-size:40px;">
Login with your valid Credentials
</div>
</div>
<br/>
<form method="post" action="AdminLogged.php" style="font-size:20px;">
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
</form>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form action="../User/Home.php">
<button type="submit" class="btn btn-link" style="width:100%;font-size:20px;color:red;">View Site</button>
</form>
</div>
<div class="col-md-4"></div>
</div>
</div>
</div>
<br/><br/><br/><br/>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>