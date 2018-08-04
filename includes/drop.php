<?php
	
	session_start();
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
	
	
	<body style="background-color: white;">
		<header>
			
			<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #35424a;border-bottom: #f6531f 3px solid;">
			<div class="container" style="overflow:visible">
				<div id="branding">
					<h1>Online <span class="highlight">Cart</span></h1>
				</div>

					<li class="dropdown" style="margin-top: 1%">
					
						&nbsp;&nbsp;<a class="dropdown-toggle" data-toggle="dropdown" id="text">Men<span class="caret"></span></a>&nbsp;&nbsp;
						<ul class="dropdown-menu" role="menu">
							<li><a href="drop.php?cate=men&subcate=shirts">Shirts</a></li>
							<li><a href="drop.php?cate=men&subcate=pants">Pants</a></li>
							<li><a href="drop.php?cate=men&subcate=shoes">Shoes</a></li>
							<li><a href="drop.php?cate=men&subcate=accesories">Accesories</a></li>
						</ul>
					
					</li>
					
					<li class="dropdown" style="margin-top: 1%">
						<a class="dropdown-toggle" data-toggle="dropdown" id="text">Women<span class="caret"></span></a>&nbsp;&nbsp;
						<ul class="dropdown-menu" role="menu">
							<li><a href="drop.php?cate=women&subcate=shirts">Shirts</a></li>
							<li><a href="drop.php?cate=women&subcate=pants">Pants</a></li>
							<li><a href="drop.php?cate=women&subcate=shoes">Shoes</a></li>
							<li><a href="drop.php?cate=women&subcate=accesories">Accesories</a></li>
						</ul>
					</li>

					<li class="dropdown" style="margin-top: 1%">
						<a class="dropdown-toggle" data-toggle="dropdown" id="text">Electronics<span class="caret"></span></a>&nbsp;&nbsp;
						<ul class="dropdown-menu" role="menu">
							<li><a href="drop.php?cate=electronics&subcate=mobiles">Mobiles</a></li>
							<li><a href="drop.php?cate=electronics&subcate=tv">TV's</a></li>
							<li><a href="drop.php?cate=electronics&subcate=homeneeds">Home-needs</a></li>
							<li><a href="drop.php?cate=electronics&subcate=accesories">Accesories</a></li>
						</ul>
					</li>

					<li class="dropdown" style="margin-top: 1%">
						<a class="dropdown-toggle" data-toggle="dropdown" id="text">Sports&Books<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="drop.php?cate=sports_books&subcate=gaming">Gaming</a></li>
							<li><a href="drop.php?cate=sports_books&subcate=sports">Sports</a></li>
							<li><a href="drop.php?cate=sports_books&subcate=books">Books</a></li>
							<li><a href="drop.php?cate=sports_books&subcate=accesories">Accesories</a></li>
						</ul>
					</li>

					<div style="float: right">
					<ul>
						<li style="margin-top:10px" class="form-inline"><form method="POST" action="../includes/search.php">
						<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="sear">
						<div class="input-group-btn">
						<button class="btn btn-info" type="submit" name="sear_btn"><i class="glyphicon glyphicon-search"></i></button>
						</div>
						</div></form>
						</li>
						
						<?php

							if(!isset($_SESSION['b_id'])){
								echo '<li style="margin-top:10px" class="current"><a href="../home/index.php">Home</a></li>
										<li style="margin-top:10px"><a href="../home/login.php">Account</a></li>';
								
							}
							else
								echo '<li style="margin-top:5%"><a href="../home/index.php">Home</a></li>
							<li class="dropdown" style="margin-top:5%;">Hi&nbsp;&nbsp;'.$_SESSION['u_name'].'
									<a class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user" style="color:#f6531f"><span class="caret"></span></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a id="mycart" type="hidden" onclick="mycart()">My Cart</a></li>
										<li><a id="myprof" type="hidden" onclick="myprof()">Profie</a></li>
										<li><a id="myorder" type="hidden" onclick="myorder()">My orders</a></li>
										<li><a href="../home/logout.php">logout</a></li>
									</ul></li>';
						?>				
					</ul>
					</div>
			</div>
			</nav>
			</div>
		</header>
		<br/><br/><br/><br/><br/>
		<fieldset id="home1" class="">
		<?php
				include_once 'connection.php';

				$one = $_GET['cate'];
				$two = $_GET['subcate'];

				if(empty($one) || empty($two)){
					header("Location: ../home/index.php");
					exit();
				}
				else{
					$sql = "select * from products where category = '$one' and subcat = '$two';";
					$result = mysqli_query($conn,$sql);
					$resultcheck = mysqli_num_rows($result);
					if($resultcheck < 1){
						echo "<h2 align='center'>No results found !</h2>";
					}
					else{
						
							echo '<div class="container">
								<div class="col-md-2">
								</div>
								<div class="col-md-9">
									<div class="row">';
									while ($rows = mysqli_fetch_assoc($result)){
										echo '<div class="col-md-3" style="margin-top: 2%">
											<h4>'.$rows['title'].'</h4>
											<img src="'.$rows['image'].'" alt="No-image" id="images"/>
											<p class="list-price text-danger">List Price: <s>$'.$rows['list_price'].'</s></p>
											<p class="price">Our Price: $'.$rows['price'].'</p>
											<button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-'.$rows['p_id'].'">Details</button>
										</div>';
									}
									echo '</div>
								</div>	
							</div>';
						
						
					}
				}

		?>
		</fieldset>

		<fieldset id="mycart1" class="hide">		
			<?php include_once '../includes/mycart.php'?>
		</fieldset>
		
		<fieldset id="myprof1" class="hide">
			<?php include_once '../includes/profile.php'?>
		</fieldset>
		<fieldset id="myord1" class="hide">
		<?php include_once '../includes/orders.php'?>
	</fieldset>
		
		<script>
				var myca = document.getElementById("mycart");
				var myc = document.getElementById("mycart1");
				var hom = document.getElementById("homee");
				var ho = document.getElementById("home1");
				var mypr = document.getElementById("myprof");
				var myp = document.getElementById("myprof1");
				var myor = document.getElementById("myorder");
				var myo = document.getElementById("myord1");

				myor.addEventListener("click",function() {
					if(myo.className === "hide")
						myo.className = "";
						myc.className = "hide";
						ho.className = "hide";
						myp.className = "hide";
				});

				mypr.addEventListener("click",function() {
					if(myp.className === "hide")
						myc.className = "hide";
						ho.className = "hide";
						myp.className = "";
						myo.className = "hide";
				});
				myca.addEventListener("click",function() {
					if(myc.className === "hide")
						myc.className = "";
						ho.className = "hide";
						myp.className = "hide";
						myo.className = "hide";
				});
				hom.addEventListener("click",function() {
					if(ho.className === "hide")
						myc.className = "hide";
						ho.className = "";
						myp.className = "hide";
						myo.className = "hide";
				});

				
		</script>



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


		<?php 	include '../modals/details-modal-levisshirt.php';
				include '../modals/details-modal-iphonex.php';
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
