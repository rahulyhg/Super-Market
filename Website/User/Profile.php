<?php
include('Header.php');
// Profile Page
include('DBConnection.php');
$query='select * from customer where username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
?>
<head>
<title>Profile - <?php echo $_SESSION['username']; ?></title>
</head>
<style>
label{color:red;}
</style>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<div class="row">
<div class="col-md-12" style="color:blue;font-size:40px;">
Profile - <?php echo $row['username']; ?>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" style="text-align:center;font-size:20px;color:blue;" value="<?php echo $row['name']; ?>" readonly>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Gender</label>
<input type="text" class="form-control" style="text-align:center;font-size:20px;color:blue;" value="<?php echo $row['gender']; ?>" readonly>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Mobile Number</label>
<input type="text" class="form-control" style="text-align:center;font-size:20px;color:blue;" value="<?php echo $row['mobile']; ?>" readonly>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label>Username</label>
<input type="text" class="form-control" style="text-align:center;font-size:20px;color:blue;" value="<?php echo $row['username']; ?>" readonly>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Email Id</label>
<input type="text" class="form-control" style="text-align:center;font-size:20px;color:blue;" value="<?php echo $row['email']; ?>" readonly>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Address</label>
<textarea class="form-control" style="text-align:center;font-size:20px;color:blue;" readonly><?php echo $row['address']; ?></textarea>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label>Pin Code</label>
<input type="text" class="form-control" style="text-align:center;font-size:20px;color:blue;" value="<?php echo $row['pincode']; ?>" readonly>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>City</label>
<input type="text" class="form-control" style="text-align:center;font-size:20px;color:blue;" value="<?php echo $row['city']; ?>" readonly>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>State</label>
<input type="text" class="form-control" style="text-align:center;font-size:20px;color:blue;" value="<?php echo $row['state']; ?>" readonly>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<form action="Cart.php">
<div class="form-group">
<label></label>
<button type="submit" class="btn btn-primary" style="width:100%;"><i class="fa fa-shopping-cart"></i> Go to Cart</button>
</div>
</form>
</div>
<div class="col-md-4">
<form action="UserLogout.php">
<div class="form-group">
<label></label>
<button type="submit" class="btn btn-primary" style="width:100%;"><i class="fa fa-sign-out"></i> Logout</button>
</div>
</form>
</div>
<div class="col-md-4">
<form action="ChangePassword.php">
<div class="form-group">
<label></label>
<button type="submit" class="btn btn-primary" style="width:100%;"><i class="fa fa-edit"></i> Change Password</button>
</div>
</form>
</div>
</div>
<div class="row">
<div class="col-md-12">
<form method="post" action="ChangeAddress.php">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter a new address to update............" name="address" maxlength="80" required><br/>
<button type="submit" class="btn btn-success" style="width:100%"><i class="fa fa-external-link-square"></i> Update Address</button>
</div>
</form>
</div>
</div>
</div>
</div>
<br/><br/>
</div>
<?php
include('footer.php');
?>