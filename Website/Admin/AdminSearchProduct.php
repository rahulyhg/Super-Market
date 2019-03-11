<?php
include('Header.php');
$pname=$_POST['pname'];
include('DBConnection.php');
$query='select * from product where name like "%'.$pname.'%"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
?>
<head>
<title>Searched Product</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/><br/><br/><br/><br/><br/>
<div class="container">
<div class="jumbotron" style="text-align:center;">
<?php
if($n>0){
	for($i=1;$i<=$n;$i++){
		$row=mysqli_fetch_array($res);
		echo '<div class="row">';
		echo '<div class="col-md-8" style="color:green;font-size:20px;">';
		echo '<b>ID</b> -- '.$row['id'].' &nbsp;<b>Name</b> -- '.$row['name'].' &nbsp;<b>Price</b> -- '.$row['price'].' &nbsp;<b>Quantity</b> -- '.$row['quantity'].' &nbsp;<b>Category</b> -- '.$row['category'].' &nbsp;<b>Image</b> -- '.$row['image'];
		echo '</div>';
		echo '<div class="col-md-2">';
		echo '<form method="post" action="DeleteItem.php">';
		echo '<input type="text" name="pname" value="'.$row['name'].'" hidden>';
		echo '<button type="submit" class="btn btn-link" style="font-size:20px;">Delete</button>';
		echo '</form>';
		echo '</div>';
		echo '<div class="col-md-2">';
		echo '<form method="post" action="EditItem.php">';
		echo '<input type="text" name="pname" value="'.$row['name'].'" hidden>';
		echo '<button type="submit" class="btn btn-link" style="font-size:20px;">Edit</button>';
		echo '</form>';
		echo '</div>';
		echo '</div><br/>';
	}
}
else{
	echo '<div style="color:green;font-size:50px;">Sorry, No Results Found</div>';
	echo '<div style="font-size:200px;"><i class="fa fa-frown-o"></i></div>';
	echo '<div style="color:blue;font-size:50px;">Try Searching by other Names</div>';
}
?>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>
</div>
<?php
include('Footer.php');
?>