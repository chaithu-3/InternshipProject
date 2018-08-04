<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="../img/logo.ico"/>
		<title>OCart | Login</title>
		<link rel="styleSheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body bgcolor="skyblue">

	<section>
	<h2 align="center" style="margin-top:5%">Update Product</h2>
			<div class="dark" align="center" style="margin-top:1%;margin-left:35%;width:400px">
					<form method="POST" action="../includes/updateproducts.php?pid=<?php echo $_GET['edit_pro'];?>" enctype="multipart/form-data" align="center">

						<div class="form-inline">
						Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="title" class="form-control" placeholder="Enter Title..."><br><br>
						</div>
						<div class="form-inline">
						Brand:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="brand" class="form-control" placeholder="Enter brand name..."><br><br>
						</div>
						<div class="form-inline">
						Details:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="details" class="form-control" placeholder="Enter Product Details..."><br><br>
						</div>
						<div class="form-inline">
						List-Price:&nbsp;&nbsp;<input type="text" name="list_price" class="form-control" placeholder="Enter List-Price..."><br><br>
						</div>
						<div class="form-inline">
						Your-Price:&nbsp;<input type="text" name="price" class="form-control" placeholder="Enter Your-Price..."><br><br>
						</div>
						<div class="form-inline">
						Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity" class="form-control" placeholder="Enter no.of items..."><br><br>
						</div>
						
						<div class="form-inline" align="center">
						Add Image:<br><br><input type="file" name="image">
						</div><br>
						<div class="form-inline">
  						Select category:
  							<select class="form-control" name="sel1">
    							<option value="men">Men</option>
    							<option value="women">Women</option>
    							<option value="electronics">Electronics</option>
    							<option value="sports_books">Sports&Books</option>
  							</select>
						</div><br>
						<div class="form-inline">
  						Sub-category:&nbsp;&nbsp;&nbsp;
  							<select class="form-control" name="sel2">
    							<option value="shirts">Shirts</option>
    							<option value="pants">Pants</option>
    							<option value="shoes">Shoes</option>
    							<option value="accesories">Accesories</option>
    							<option value="homeneeds">Home-needs</option>
    							<option value="mobiles">Mobiles</option>
    							<option value="sports">Sports</option>
    							<option value="books">Books</option>
    							<option value="gaming">Gaming</option>
    							<option value="tv">TV's</option>
  							</select>
						</div><br><br>

						<button type="submit" name="up_btn" class="btn btn-info">Update</button>
						</div>
					</form></div></section>

</body> 
</html>