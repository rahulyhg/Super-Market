<?php
include('Header.php');
?>
<!-- Contact Page -->
<head>
<title>Login</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<div class="row">
<div class="col-md-8" style="color:green;font-size:18px;">
Did you ever imagine that the freshest of fruits and vegetables, top quality pulses and food grains, dairy products and hundreds of branded items could be handpicked and delivered to your home, all at the click of a button? India’s first comprehensive online megastore, Cutrate.com, brings a whopping 20000+ products with more than 1000 brands,to over 4 million happy customers. From household cleaning products to beauty and makeup, cutrate has everything you need for your daily needs. Cutrate.com is convenience personified Wehave taken away all the stress associated with shopping for daily essentials, and you can now order all your household products and even buy groceries onlinewithout travelling long distancesor standing in serpentine queues. Add to this the convenience of finding all your requirements at one single source, along with great savings, and you will realise that Cutrate - India’s largest online supermarket, has revolutionised the way India shops for groceries. Online grocery shopping has never been easier. Need things fresh? Whether it’s fruits and vegetables or dairy and meat, we have this covered as well! Get more online at your convenience.<br/><br/>
<a href="#" style="font-size:20px;text-decoration:none;"><i class='fa fa-facebook'></i> Facebook</a>&nbsp;&nbsp;&nbsp;
<a href="#" style="font-size:20px;text-decoration:none;"><i class='fa fa-instagram'></i> Instragram</a>&nbsp;&nbsp;&nbsp;
<a href="#" style="font-size:20px;text-decoration:none;"><i class='fa fa-twitter'></i> Twitter</a>&nbsp;&nbsp;&nbsp;
<a href="#" style="font-size:20px;text-decoration:none;"><i class='fa fa-envelope'></i> Gmail</a>&nbsp;&nbsp;&nbsp;
<a href="#" style="font-size:20px;text-decoration:none;"><i class='fa fa-mobile'></i> Mobile No.</a>
</div>
<div class="col-md-4">
<div style="color:blue;font-size:30px;">
Register your Suggestions or Reviews
</div>
<br/>
<form method="post" action="Feedback.php" style="font-size:20px;">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter your Name" name="name" required>
</div>
<div class="form-group">
<input type="number" class="form-control" placeholder="Rate from 1 to 5" name="rating" min="1" max="5" required>
</div>
<div class="form-group">
<textarea class="form-control" style="height:150px;" placeholder="Write your appreciation or complaints.." name="feedback" required></textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary" style="width:100%;">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
<br/><br/><br/><br/><br/>
</div>
<?php
include('footer.php');
?>