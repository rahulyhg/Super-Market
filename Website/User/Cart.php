<?php
include('Header.php');
include('DBConnection.php');
$query='select * from cart_'.$_SESSION['username'];
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
$price=0;
?>
<!-- Cart Page -->
<head>
<title>Cart - <?php echo $_SESSION['username']; ?></title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<?php
if($n>0){
	for($i=1;$i<=$n;$i++){
		$row=mysqli_fetch_array($res);
		$query1='select * from product where name="'.$row['pro_name'].'"';
		$res1=mysqli_query($con,$query1);
		$row1=mysqli_fetch_array($res1);
		echo '<div class="row">';
		echo '<div class="col-md-2"></div>';
		echo '<div class="col-md-4">';
		echo '<img src="../Images/Product/'.$row1['image'].'" width="80%" height="150px">';
		echo '</div>';
		echo '<div class="col-md-4">';
		echo '<form method="post" action="DeleteItem.php">';
		echo '<div class="form-group">';
		echo '<input type="text" class="form-control" name="pname" value="'.$row['pro_name'].'" readonly>';
		echo '</div>';
		echo '<label>Rs. '.$row1['price'].' &nbsp; &nbsp;'.$row1['quantity'].' -- '.$row['qty'].' Items</label><br/>';
		echo '<label>Total Price = '.$row['qty'].' * '.$row1['price'].' = '.$row['qty']*$row1['price'].'</label><br/>';
		echo '<button type="submit" class="btn btn-link">Delete this Item</button>';
		echo '</form>';
		echo '</div>';
		echo '<div class="col-md-2"></div>';
		echo '</div>';
		echo '<br/>';
		$price+=($row['qty']*$row1['price']);
	}
	echo '<div class="row">';
	echo '<div class="col-md-2"></div>';
	echo '<div class="col-md-8">';
	echo '<form method="post" action="Order.php">';
	echo '<div class="form-group">';
	echo '<input type="text" class="form-control" name="price" value="'.$price.'" hidden>';
	echo '<button type="submit" class="btn btn-danger" style="background-color:orange;width:100%;">Buy now for Rs. '.$price.'</button>';
	echo '</div>';
	echo '</form>';
	echo '</div>';
	echo '<div class="col-md-2"></div>';
	echo '</div>';
}
else{
	echo '<div style="color:green;font-size:50px;">Your Shopping Cart is Empty</div><br/>';
	echo '<div style="font-size:150px;"><i class="fa fa-shopping-bag"></i></div><br/>';
	echo '<div style="color:blue;font-size:50px;">Add Products to your Cart by Shopping our Products</div>';
}
?>
</div>
</div>
<br/><br/>
</div>
<?php
include('footer.php');
?>