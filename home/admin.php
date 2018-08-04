<?php
	session_start();
if(isset($_SESSION['u_name'])){
if($_SESSION['u_name'] == 'admin')
{
	$name = $_SESSION['u_name'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="../img/logo.ico"/>
		<title>OCart | Welcome Admin</title>
		<link rel="styleSheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link type="text/CSS" rel="styleSheet" href="../CSS/adminstyle.css" />
	</head>
	<body>


		<div class="container main_wrapper">
	
		<div class="row" id="header"></div>
			

		<div class="row">
		<div id="right" class="col-md-3">
		<h2 style="text-align:center;">Manage Content</h2>
			<a href="admin.php?view_products">View All Products</a>
			<a href="admin.php?view_sellers">View Sellers</a>
			<a href="admin.php?view_customers">View Customers</a>
			<a href="admin.php?view_subscribers">View Subscribers</a>
			<a href="admin.php?view_cart">View Products in Cart</a>
			<a href="admin.php?view_orders">View Orders</a>
			<a href="logout.php">Admin Logout</a>
		
		</div>
		
		<div id="left" class="col-md-9">
		<h1 style="color:black; text-align:center;">Welcome</h1>
		<?php 
		if(isset($_GET['view_products'])){
		
			include("../includes/view_products.php"); 
		
		}
		if(isset($_GET['edit_pro'])){
		
		include("../includes/edit_pro.php"); 
		
		}
		if(isset($_GET['view_cart'])){
		
			include("../includes/view_cart.php"); 
		
		}

		if(isset($_GET['view_orders'])){
		
			include("../includes/view_orders.php"); 
		
		}
		
		if(isset($_GET['view_sellers'])){
		
		include("../includes/view_sellers.php"); 
		
		}
		
		if(isset($_GET['view_customers'])){
		
		include("../includes/view_customers.php"); 
		
		}

		if(isset($_GET['view_subscribers'])){
		
		include("../includes/view_subscribers.php"); 
		
		}
		
		?>
		</div>


	</div>



	</div>

		
	</body>
</html>
<?php }}

else 
{?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="../img/logo.ico"/>
		<title>OCart | Login Admin</title>
		<link rel="styleSheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link type="text/CSS" rel="styleSheet" href="../CSS/style.css" />
	</head>
	<body style="background-image:url('../img/adminbg.jpg')">
		
		<div align="center" style="margin-top:3%;margin-left:35%;width:350px">
						<br/><br/>
						<form method="POST" action="../includes/adminlog.php">
						<img src="../img/adminbg.png" style="height:50%;width:60%"/><br/><br/>
						<div class="form-inline" algin="center">
						User_Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" class="form-control" placeholder="Enter user id..."><br><br>
						</div>
						<div class="form-inline" algin="center">
						Password : &nbsp;<input type="password" name="password" class="form-control" placeholder="Enter Password..."><br><br>
						<button type="submit" name="log_btn" class="btn btn-danger">Log in</button>
						</div>
					</form>
		</div>
	
	</body>
	</html>
<?php } ?>