<?php
include('Header.php');
// Viewing Sales Form
?>
<head>
<title>View Sales</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/><br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<div class="row">
<div class="col-md-12" style="color:green;font-size:30px;">
Select Date to View Sales
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form method="post" action="GetSales.php">
<div class="form-group">
<label>From</label>
<input type="date" class="form-control" name="from" required>
</div>
<div class="form-group">
<label>To</label>
<input type="date" class="form-control" name="to" required>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary" style="width:100%;">Get Sales</button>
</div>
</form>
</div>
<div class="col-md-4"></div>
</div>
</div>
<br/><br/><br/><br/><br/><br/>
</div>
</div>
<?php
include('Footer.php');
?>