<?php
include('Header.php');
// Home Page for the admin
?>
<head>
<title>Search</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/><br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<div class="row">
<div class="col-md-12" style="color:blue;font-size:40px;">
Search for products by Name
</div>
</div>
<br/>
<form method="post" action="AdminSearchProduct.php" style="font-size:20px;">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Product Name" name="pname" required>
</div>
</div>
<div class="col-md-3"></div>
</div>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<button type="submit" class="btn btn-primary" style="width:100%;">Search</button>
</div>
<div class="col-md-3"></div>
</div>
</form>
</div>
</div>
<br/><br/><br/><br/><br/><br/>
</div>
</div>
<?php
include('Footer.php');
?>