<?php
session_start();
?>
<!-- Header of the Admin Panel -->
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<style>
.nav-link{
	font-size:20px;
}
#navbarSupportedContent a:hover{
	color:orange;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="background-color:black;">
<a class="navbar-brand"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="AdminHome.php"><i class="fa fa-home"></i> Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="InsertItem.php"><i class="fa fa-plus"></i> Insert Product</a>
</li>
<li class="nav-item">
<a class="nav-link" href="ViewFeedback.php"><i class="fa fa-address-card"></i> Suggestions and Feedback</a>
</li>
<li class="nav-item">
<a class="nav-link" href="ViewSales.php"><i class="fa fa-bar-chart"></i> View Sales</a>
</li>
<li class="nav-item">
<a class="nav-link" href="AdminLogout.php"><i class="fa fa-sign-out"></i> Logout</a>
</li>
</ul>
</div>
</nav>