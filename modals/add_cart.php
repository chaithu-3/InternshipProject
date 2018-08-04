<?php
	
	session_start();
	if(isset($_POST['adc_btn'])){

		include '../includes/connection.php';
		$pid = $_GET['p_id'];
		$quantity = mysqli_real_escape_string($conn,$_POST['quantity']);
		$size = $_POST['size'];
		$color = $_POST['color'];
		$bid = $_SESSION['b_id'];
		if($_SESSION['b_id']){
		if(empty($pid) || empty($quantity)){
			header("Location: ../home/index.php?empty");
			exit();
		}
		else{
			
			$sql = "select * from products where p_id = '$pid';";
			$result = mysqli_query($conn,$sql);
			//$resultcheck = mysqli_num_rows($result);
			if($row = mysqli_fetch_assoc($result)){
				if($row['quantity'] < $quantity){
					echo '<script type="text/javascript">alert("The quantity you ordered is not available !\\nTry again.");
			location="../home/index.php?quantity=more";</script>';
						exit();
				}
				else{
					$sql = "insert into cart(p_id,quantity,size,color,b_id) values('$pid','$quantity','$size','$color','$bid');";
					mysqli_query($conn,$sql);
					echo '<script type="text/javascript">alert("The product is added to your cart !\\n.");location="../home/index.php?cart=success";</script>';
					exit();

				}
			}
		}
		}
		else{
			header("Location: ../home/Login.php");
			exit();
		}
	}
	else{
		header("Location: ../home/index.php");
		exit();
	}