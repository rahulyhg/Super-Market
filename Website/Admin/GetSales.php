<?php
include('Header.php');
// View Orders from person
$fromdate=$_POST['from'];
$todate=$_POST['to'];
include('DBConnection.php');
$query='select * from orders where date between "'.$fromdate.'" and "'.$todate.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
$totalprice=0;
?>
<head>
<title>Sales</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/><br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<div class="row">
<div class="col-md-12" style="color:blue;font-size:40px;">
<u>Orders</u>
</div>
</div>
<br/>
<?php
for($i=1;$i<=$n;$i++){
	$row=mysqli_fetch_array($res);
	echo '<div class="row" style="color:green;">';
	echo '<div class="col-md-3">';
	echo '<b>Username</b> -- '.$row['username'];
	echo '</div>';
	echo '<div class="col-md-3">';
	echo '<b>Amount</b> -- '.$row['cost'];
	echo '</div>';
	echo '<div class="col-md-3">';
	echo '<b>No. of Items</b> -- '.$row['no_items'];
	echo '</div>';
	echo '<div class="col-md-3">';
	echo '<b>Date of Purchase</b> -- '.$row['date'];
	echo '</div>';
	echo '</div><br/>';
	$totalprice+=$row['cost'];
}
?>
<div class="row">
<div class="col-md-12" style="color:blue;font-size:20px;">
The total amount for the orders in this interval is Rs. <u><?php echo $totalprice; ?></u>
</div>
</div>
</div>
<br/><br/><br/><br/><br/><br/>
</div>
</div>
<?php
include('Footer.php');
?>