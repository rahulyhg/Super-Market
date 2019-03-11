<?php
include('Header.php');
// View feedbacks from person
include('DBConnection.php');
$query='select * from feedback';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
?>
<head>
<title>Search</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/><br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<div class="row">
<div class="col-md-12" style="color:green;font-size:30px;">
Suggestions or Reviews from the Users
</div>
</div>
<br/>
<?php
for($i=1;$i<=$n;$i++){
	$row=mysqli_fetch_array($res);
	echo '<div class="row" style="color:blue;">';
	echo '<div class="col-md-3">';
	echo '<b>Name</b> -- '.$row['name'];
	echo '</div>';
	echo '<div class="col-md-2">';
	echo '<b>Ratings</b> -- '.$row['rating'];
	echo '</div>';
	echo '<div class="col-md-7">';
	echo '<b>Review</b> -- '.$row['issue'];
	echo '</div>';
	echo '</div><br/>';
}
?>
</div>
<br/><br/><br/><br/><br/><br/>
</div>
</div>
<?php
include('Footer.php');
?>