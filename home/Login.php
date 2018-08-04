<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="../img/logo.ico"/>
		<title>OCart | Login</title>
		<link rel="styleSheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link type="text/CSS" rel="styleSheet" href="../CSS/style.css">
	</head>
	<body style="background-image: url('../img/logback.jpg')">
		<header>
			<div class="container">
				<div id="branding">
					<h1>Online <span class="highlight">Cart</span></h1>
				</div>
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="current"><a href="login.php">Account</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<section>
			<div class="fom_1">
				<button id="log" type="hidden" class="button_2" onclick="logi()">LOG IN</button>
				<button id="reg" type="hidden" class="button_2" onclick="regi()">SIGN UP</button>
			</div>
			<div class="container">
				<fieldset id="log1" class="">
					<legend><span class="highlight">Log in</span></legend>
					<div class="dark" style="margin-left:30%;width:400px">
					<form method="POST" action="../includes/signin.php" align="center">
						Account Type:&nbsp;&nbsp;
						<label class="radio-inline">
						<input type="radio" name="rb" value="seller">Seller
						</label>
						<label class="radio-inline">
						<input type="radio" name="rb" value="buyer">Buyer
						</label><br><br>
						<div class="form-inline">
						User_Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" class="form-control" placeholder="Enter user id..."><br><br>
						</div>
						<div class="form-inline">
						Password : &nbsp;<input type="password" name="password" class="form-control" placeholder="Enter Password..."><br><br>
						<button type="submit" name="log_btn" class="btn btn-info">Log in</button>
						</div>
					</form>
					</div>
				</fieldset>
				<fieldset id="reg1" class="hide">
					<legend><span class="highlight">Register</span></legend>
					<div class="dark" style="margin-left:30%;width:400px">
					<form method="POST" action="../includes/register.php" align="center">
						Account Type:&nbsp;&nbsp;
						<label class="radio-inline">
						<input type="radio" name="rb" value="seller">Seller
						</label>
						<label class="radio-inline">
						<input type="radio" name="rb" value="buyer">Buyer
						</label><br><br>
						<div class="form-inline">
						User_name:&nbsp;&nbsp;&nbsp;<input type="text" name="name" class="form-control" placeholder="Enter name..."><br><br>
						</div>
						<div class="form-inline">
						Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" class="form-control" placeholder="Enter Email..."><br><br>
						</div>
						<div class="form-inline">
						Mobile.No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mobile" class="form-control" placeholder="Enter Phone number..."><br><br>
						</div>
						<div class="form-inline">
						Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" class="form-control" placeholder="Enter Your Address..."><br><br>
						</div>
						<div class="form-inline">
						Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" class="form-control" placeholder="Enter Password..."><br><br>
						</div>
						<div class="form-inline">
						Retype:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="rpassword" class="form-control" placeholder="Enter Password..."><br><br>
						<button type="submit" name="reg_btn" class="btn btn-info">Sign Up</button>
						</div>
					</form>
					</div>
				</fieldset>
			</div>
			<script>
				var logi = document.getElementById("log");
				var lo = document.getElementById("log1");
				var regi = document.getElementById("reg");
				var re = document.getElementById("reg1");
				logi.addEventListener("click",function() {
					if(lo.className === "hide")
						lo.className = "";
						re.className = "hide";
				});
				regi.addEventListener("click",function() {
					if(re.className === "hide")
						re.className = "";
						lo.className = "hide";
				});	
				
			</script>
		</section>
		<section id="newsletter" style="margin-top: 20%">
			<div class="container">
				<h1>Subscribe To Our Newsletter</h1>
				<form method="POST" action="../includes/sub.php">
					<div class="form-inline">
					<input type="email" name="subn" class="form-control" placeholder="Enter Email....">
					<button type="submit" class="btn btn-info" name="subs_btn">Submit</button>
				</div>
				</form>
			</div>
		</section>
		<footer>
			<p>Online Cart, copyright &copy; 2017</p>
		</footer>
	</body>
</html>