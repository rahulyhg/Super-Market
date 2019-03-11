<?php
include('Header.php');
?>
<!-- User Registration Form -->
<head>
<title>Register</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<div class="row">
<div class="col-md-12" style="color:blue;font-size:40px;">
Register with your valid Details
</div>
</div>
<br/>
<form method="post" action="CompleteUserRegistration.php" style="font-size:20px;" onsubmit="return validation()">
<div class="row">
<div class="col-md-5">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter your Name" name="name" id="name" required>
<small class="form-text text-muted">Name must be 10 characters long.</small>
</div>
</div>
<div class="col-md-5">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter your Mobile Number" name="mobile" id="mobile" required>
<small class="form-text text-muted">We will never share your mobile number.</small>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<input class="form-check-input" type="radio" name="gender" value="Male" id="male" checked><label for="male">Male</label><br/>
<input class="form-check-input" type="radio" name="gender" value="Female" id="female"><label for="female">Female</label>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter your Email ID" name="email" id="email" required>
<small class="form-text text-muted">We will never share your email id.</small>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter your Address" name="address" id="address" required>
<small class="form-text text-muted">Area or Locality.</small>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter your Pincode" name="pincode" id="pincode" required>
<small class="form-text text-muted">Six digit pincode.</small>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter your City" name="city" id="city" required>
<small class="form-text text-muted">City or District.</small>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<select class="custom-select mr-sm-2" name="state">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
<small class="form-text text-muted">State of India.</small>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<input type="text" class="form-control" placeholder="Username" name="username" id="username" onchange="finduser(this.value)" required>
<small class="form-text text-muted" id="textshow">Create an username for yourself.</small>
</div>
<div class="col-md-4">
<input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
<small class="form-text text-muted">Create a password for yourself.</small>
</div>
<div class="col-md-4">
<button type="submit" class="btn btn-success" style="width:100%;">Register</button>
</div>
</div>
</form>
</div>
</div>
<br/><br/>
</div>
<script>
function validation(){
	var name=document.getElementById('name');
	var mobile=document.getElementById('mobile');
	var email=document.getElementById('email');
	var address=document.getElementById('address');
	var pincode=document.getElementById('pincode');
	var city=document.getElementById('city');
	var username=document.getElementById('username');
	var password=document.getElementById('password');
	var uservalid=document.getElementById('textshow').innerHTML;
	var res=true;
	if(uservalid=="Username already exist"){
		alert('Username Exists');
		res=false;
		return res;
	}
	if(name.value.length<10){
		alert('Name too small');
		res=false;
		return res;
	}
	if(name.value.length>20){
		alert('Name too large');
		res=false;
		return res;
	}
	if(mobile.value.length<10){
		alert('Mobile number too small');
		res=false;
		return res;
	}
	if(mobile.value.length>15){
		alert('Mobile number too large');
		res=false;
		return res;
	}
	if(email.value.length<10){
		alert('Email Id too small');
		res=false;
		return res;
	}
	if(email.value.length>30){
		alert('Email Id too large');
		res=false;
		return res;
	}
	if(address.value.length<20){
		alert('Address too small');
		res=false;
		return res;
	}
	if(address.value.length>100){
		alert('Address too large');
		res=false;
		return res;
	}
	if(city.value.length<3){
		alert('City name too small');
		res=false;
		return res;
	}
	if(city.value.length>20){
		alert('City name too large');
		res=false;
		return res;
	}
	if(pincode.value.length<6 && pincode.value.length>7){
		alert('Invalid Pincode');
		res=false;
		return res;
	}
	if(username.value.length<10){
		alert('Username too small');
		res=false;
		return res;
	}
	if(name.value.length>30){
		alert('Username too large');
		res=false;
		return res;
	}
	if(password.value.length<8){
		alert('Password too small');
		res=false;
		return res;
	}
	if(password.value.length>20){
		alert('Password too large');
		res=false;
		return res;
	}
	return res;
}
function finduser(uname){
	if(uname.length>=10){
		var req=new XMLHttpRequest();
		req.open("GET","CheckUser.php?uname="+uname,true);
		req.send();
		req.onreadystatechange=function(){
			if(req.readyState==4 && req.status==200){
				alert(req.responseText);
				document.getElementById("textshow").innerHTML=req.responseText;
			}
		};
	}
}
</script>
<?php
include('footer.php');
?>