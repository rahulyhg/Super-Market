<?php
session_start();
// Adds the product to cart
if(isset($_SESSION['logstatus'])){
	if($_SESSION['logstatus']=='YES'){
		$pname=$_GET['pname'];
		$qty=$_GET['quantity'];
		$con=mysqli_connect('localhost','root','123456789');
		mysqli_select_db($con,"super_market");
		$query='select * from cart_'.$_SESSION['username'].' where pro_name="'.$pname.'"';
		$res=mysqli_query($con,$query);
		$n=mysqli_num_rows($res);
		if($n==0){
			$query1='insert into cart_'.$_SESSION['username'].' values ("'.$pname.'",'.$qty.')';
			mysqli_query($con,$query1);
		}
		else{
			$query1='update cart_'.$_SESSION['username'].' set qty='.$qty.' where pro_name="'.$pname.'"';
			mysqli_query($con,$query1);
		}
		echo "Product Successfully added to cart";
	}
	else{
		echo "Login First";
	}
}
else{
	echo "Login First";
}
?>