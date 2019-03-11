<?php
include('Header.php');
// Searching of products
$pname=$_POST['pname'];
$minprice=$_POST['minprice'];
$maxprice=$_POST['maxprice'];
include('DBConnection.php');
$query='';
if($minprice!="" && $maxprice!="")
	$query='select * from product where name like "%'.$pname.'%" and price between '.$minprice.' and '.$maxprice;
else if($minprice=="" && $maxprice=="")
	$query='select * from product where name like "%'.$pname.'%"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
$k=1;
?>
<!-- Searched Product -->
<head>
<title>Products</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<?php
if($n>0){
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
}
else{
	echo '<div style="color:green;font-size:50px;">Sorry, No Results Found</div>';
	echo '<div style="font-size:200px;"><i class="fa fa-frown-o"></i></div>';
	echo '<div style="color:blue;font-size:50px;">Try Searching by other Names</div>';
}
?>
</div>
</div>
<br/><br/><br/><br/><br/>
</div>
<script>
function addToCart(val){
	var qty=parseInt(document.getElementById(val).value);
	if(qty<1)
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