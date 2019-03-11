<?php
include('Header.php');
// Edit product details
$name=$_POST['pname'];
include('DBConnection.php');
$query='select * from product where name="'.$name.'"';
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
?>
<head>
<title>Edit</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/><br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<form method="post" action="SaveChanges.php">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="form-group">
<label>Product ID</label>
<input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" readonly>
</div>
<div class="form-group">
<label>Product Name</label>
<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
</div>
<div class="form-group">
<label>Product Price</label>
<input type="number" class="form-control" min="5" name="price" value="<?php echo $row['price']; ?>">
</div>
<div class="form-group">
<label>Product Quantity</label>
<input type="text" class="form-control" name="quantity" value="<?php echo $row['quantity']; ?>">
</div>
<div class="form-group">
<label>Product Category</label>
<input type="text" class="form-control" name="category" value="<?php echo $row['category']; ?>">
</div>
<div class="form-group">
<label>Product Image</label>
<input type="text" class="form-control" name="image" value="<?php echo $row['image']; ?>">
</div>
<button type="submit" class="btn btn-success" style="width:100%;">Save Changes</button>
</div>
<div class="col-md-4"></div>
</div>
</form>
</div>
<br/><br/><br/><br/><br/><br/>
</div>
</div>
<?php
include('Footer.php');
?>