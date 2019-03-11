<?php
include('Header.php');
// Add a new product
?>
<head>
<title>Insert</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/><br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<div class="row">
<div class="col-md-12" style="color:blue;font-size:40px;">
Add a new Product
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form method="post" action="AddProduct.php">
<div class="form-group">
<label>Product Name</label>
<input type="text" class="form-control" name="name" required>
</div>
<div class="form-group">
<label>Product Price</label>
<input type="number" class="form-control" min="5" name="price" required>
</div>
<div class="form-group">
<label>Product Quantity</label>
<input type="text" class="form-control" name="quantity" required>
</div>
<div class="form-group">
<label>Product Category</label>
<input type="text" class="form-control" name="category" required>
</div>
<div class="form-group">
<label>Product Image</label>
<input type="text" class="form-control" name="image" required>
</div>
<button type="submit" class="btn btn-primary" style="width:100%;">Add to Products</button>
</form>
</div>
<div class="col-md-4"></div>
</div>
</div>
<br/><br/><br/><br/><br/><br/>
</div>
</div>
<?php
include('Footer.php');
?>