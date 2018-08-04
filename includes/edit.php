<?php
session_start();
if(isset($_POST['ed_btn'])){
	$pid = $_GET['pid'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="../img/logo.ico"/>
		<title>OCart | Welcome</title>
		<link rel="styleSheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link type="text/CSS" rel="styleSheet" href="../CSS/style.css" />
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #35424a;border-bottom: #f6531f 3px solid;">
			<div class="container" style="overflow:visible">
				<div id="branding">
					<h1>Online <span class="highlight">Cart</span></h1>
				</div>
					<?php
					echo '<div style="float: right"><ul><li class="dropdown" style="margin-top:10%">Hi&nbsp;&nbsp;'.$_SESSION['u_name'].'
									<a class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user" style="color:#f6531f"><span class="caret"></span></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="../includes/sell.php">My Products</a></li>
										<li><a id="addpro" type="hidden" onclick="addpro()">Add Products</a></li>
										<li><a id="myprof" type="hidden" onclick="myprof()">Profie</a></li>
										<li><a href="../home/logout.php">logout</a></li>
									</ul></li></ul></div>';
						?>				
			</div>
			</nav>
		</header>
		<section>

			<fieldset id="editpro1" class="">
			<h2 align="center" style="margin-top:5%">Update Product</h2>
			<div class="dark" align="center" style="margin-top:1%;margin-left:35%;width:400px">
					<form method="POST" action="updateproducts.php?pid=<?php echo $pid;?>" enctype="multipart/form-data" align="center">

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
					</form></div>
				</fieldset>


			<fieldset id="addpro1" class="hide">

			<h2 align="center" style="margin-top:5%">Add Product</h2>
			<div class="dark" align="center" style="margin-top:1%;margin-left:35%;width:400px">
					<form method="POST" action="addproducts.php" enctype="multipart/form-data" align="center">

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

						<button type="submit" name="add_btn" class="btn btn-info">Add Items</button>
						</div>
					</form>
				</div>
		</fieldset>

		<fieldset id="myprof1" class="hide">

			<?php include_once '../includes/profile.php'?>

		</fieldset>
		<script>
				
				var myp = document.getElementById("editpro1");
				var addpr = document.getElementById("addpro");
				var addp = document.getElementById("addpro1");
				var myprofi = document.getElementById("myprof");
				var myprof = document.getElementById("myprof1");

				
				addpr.addEventListener("click",function() {
					if(addp.className === "hide")
						addp.className = "";
						myp.className = "hide";
						myprof.className = "hide";
				});
				myprofi.addEventListener("click",function() {
					if(myprof.className === "hide")
						myprof.className = "";
						addp.className = "hide";
						myp.className = "hide";
						
				});	
				
			</script>



						</section>
		<section id="newsletter" style="margin-top: 40%">
			<div class="container">
				<h1>Subscribe To Our Newsletter</h1>
				<form method="POST" action="sub.php">
					<div class="form-inline">
					<input type="email" name="subn" class="form-control" placeholder="Enter Email....">
					<button type="submit" class="btn btn-info" name="subs_btn">Submit</button>
				</div>
				</form>
			</div>
		</section>
		<footer>
			<p>Online Cart, copyright &copy; 2018</p>
		</footer>
		<?php 	include '../modals/details-modal-iphonex.php';
				include '../modals/details-modal-levisshirt.php';
				include '../modals/details-modal-hbssmartwatch.php';
				include '../modals/details-modal-hidelinewallet.php';
				include '../modals/details-modal-rebookshoes.php';
				include '../modals/details-modal-pumatravelbag.php';
				include '../modals/details-modal-basketball.php';
				include '../modals/details-modal-xbox360.php';
				include '../modals/details-modal-woodlandsandals.php';
				include '../modals/details-modal-slingbag.php';
		?>

	</body>
</html>
<?php } ?>