<?php
include('Header.php');
// Shows Products of a particular category
$category=$_POST['category'];
include('DBConnection.php');
$query='select * from product where category="'.$category.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
$k=1;
?>
<head>
<title><?php
if($category=="fruitveg")
	echo "Fruits and Vegetables";
else if($category=="pcare")
	echo "Personal Care";
else if($category=="grocery")
	echo "Groceries";
else if($category=="beverages")
	echo "Beverages";
else if($category=="household")
	echo "Households";
else
	echo "Cakes and Flowers";
?></title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<?php
for($i=1;$i<=ceil($n/3);$i++){
	echo '<div class="row">';
	for($j=1;$j<=3 && $k<=$n;$j++){
		$row=mysqli_fetch_array($res);
		echo '<div class="col-md-4">';
		echo '<img src="../Images/Product/'.$row['image'].'" width="100%" height="20%"></img><br/>';
		echo '<label><u style="color:green;">'.$row['name'].'</u>   '.$row['quantity'].'    Rs. <span style="color:red;">'.$row['price'].'</span></label>';
		echo '<div class="form-group">';
		echo '<input type="number" class="form-control" placeholder="Quantity" id="'.$row['name'].'" min="0">';
		echo 'Add to Cart : <button type="button" class="btn btn-link" style="width:60%;" onclick="addToCart(this.value)" value="'.$row["name"].'">'.$row['name'].'</button>';
		echo '</div>';
		echo '</div>';
		$k+=1;
	}
	echo '</div><br/>';
}
?>
</div>
</div>
<br/><br/>
</div>
<script>
function addToCart(val){
	var qty=parseInt(document.getElementById(val).value);
	if(qty<0)
		alert('Enter a valid quantity');
	else{
		var req=new XMLHttpRequest();
		req.open("GET","AddCart.php?pname="+val+"&quantity="+qty,true);
		req.send();
		req.onreadystatechange=function(){
			if(req.readyState==4 && req.status==200){
				alert(req.responseText);
			}
		};
	}
}
</script>
<?php
include('footer.php');
?>