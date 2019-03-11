<?php
include('Header.php');
?>
<!-- Search Form -->
<head>
<title>Search</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<div class="row">
<div class="col-md-12" style="color:blue;font-size:40px;">
Search by Name or Price
</div>
</div>
<br/>
<form method="post" action="SearchProduct.php" style="font-size:20px;">
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
<div class="col-md-3">
<div class="form-group">
<label>From Rs.</label>
<input type="number" class="form-control" placeholder="Minimum Price" name="minprice" min="1">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>To Rs.</label>
<input type="number" class="form-control" placeholder="Maximum Price" name="maxprice" min="1">
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
<br/><br/><br/><br/><br/>
</div>
<?php
include('footer.php');
?>