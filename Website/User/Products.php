<?php
include('Header.php');
?>
<!-- Products Page -->
<head>
<title>Products</title>
</head>
<div style="background-image:url('../Images/Home/Home.jpg')">
<br/><br/><br/>
<div class="container" style="text-align:center;">
<div class="jumbotron">
<div class="row">
<div class="col-md-4">
<form method="post" action="Category.php">
<img src="../Images/Product/FruitVeg.jpg" alt="Fruits and Vegetalables" width="100%" height="250px"/>
<input type="text" name="category" value="fruitveg" hidden />
<button type="submit" class="btn btn-link" style="font-size:20px;">Fruits and Vegetables</button>
</form>
</div>
<div class="col-md-4">
<form method="post" action="Category.php">
<img src="../Images/Product/Households.jpg" alt="Household" width="100%" height="250px"/>
<input type="text" name="category" value="household" hidden />
<button type="submit" class="btn btn-link" style="font-size:20px;">Households</button>
</form>
</div>
<div class="col-md-4">
<form method="post" action="Category.php">
<img src="../Images/Product/CakeFlower.jpg" alt="CakeFlower" width="100%" height="250px"/>
<input type="text" name="category" value="cakeflower" hidden />
<button type="submit" class="btn btn-link" style="font-size:20px;">Cakes and Flowers</button>
</form>
</div>
</div>
<div class="row">
<div class="col-md-4">
<form method="post" action="Category.php">
<img src="../Images/Product/Beverages.jpg" alt="Beverages" width="100%" height="250px"/>
<input type="text" name="category" value="beverages" hidden />
<button type="submit" class="btn btn-link" style="font-size:20px;">Beverages</button>
</form>
</div>
<div class="col-md-4">
<form method="post" action="Category.php">
<img src="../Images/Product/PersonalCare.jpg" alt="PersonalCare" width="100%" height="250px"/>
<input type="text" name="category" value="pcare" hidden />
<button type="submit" class="btn btn-link" style="font-size:20px;">Personal Care</button>
</form>
</div>
<div class="col-md-4">
<form method="post" action="Category.php">
<img src="../Images/Product/Grocery.jpg" alt="Grocery" width="100%" height="250px"/>
<input type="text" name="category" value="grocery" hidden />
<button type="submit" class="btn btn-link" style="font-size:20px;">Grocery</button>
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