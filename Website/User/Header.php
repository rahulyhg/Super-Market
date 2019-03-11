<?php
session_start();
?>
<!-- Header of the website -->
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:black;">
  <a class="navbar-brand" href="Home.php"><img src="../Images/Logo/Logo.jpg" alt="Cut Rate" width="200px" height="60px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-navicon" style="color:white;"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
	<li class="nav-item active">
        <a class="nav-link" href="../Admin/AdminLogin.php" style="color:orange;">Admin Login <i class="fa fa-user-circle"></i></span></a>
      </li>
	<li class="nav-item">
<a class="nav-link" href="Profile.php" style="color:orange;"><?php 
if(isset($_SESSION['logstatus'])){
  if($_SESSION['logstatus']=='YES'){
    echo $_SESSION['username']." <i class='fa fa-user'></i>";
  }
}
?></a>
</li>
<li class="nav-item">
<a class="nav-link" href="Cart.php" style="color:orange;"><?php 
if(isset($_SESSION['logstatus'])){
  if($_SESSION['logstatus']=='YES'){
    echo "Cart <i class='fa fa-shopping-cart'></i>";
  }
}
?></a>
</li>
<li class="nav-item">
<a class="nav-link" href="UserLogout.php" style="color:orange;"><?php 
if(isset($_SESSION['logstatus'])){
  if($_SESSION['logstatus']=='YES'){
    echo "Logout <i class='fa fa-sign-out'></i>";
  }
}
?></a>
</li>
    </ul>
  </div>
</nav>
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
      <li class="nav-item active">
        <a class="nav-link" href="Home.php"><i class="fa fa-home"></i> Home</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Products.php"><i class="fa fa-product-hunt"></i> Products</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Search.php"><i class="fa fa-search"></i> Search</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Contact.php"><i class="fa fa-address-book"></i> Contacts</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="UserLogin.php"><i class="fa fa-user"></i> User Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="UserRegistration.php"><i class="fa fa-user-plus"></i> User Registration</a>
      </li>	  
	  </ul>
  </div>
</nav>