<?php
	
	session_start();
	if(isset($_POST['buy_btn'])){

		include '../includes/connection.php';
		$oid = $_GET['order_id'];
		$bid = $_SESSION['b_id'];
		if($_SESSION['b_id']){
		if(empty($oid)){
			header("Location: ../home/index.php?empty");
			exit();
		}
		else{
			
			$sql = "select * from cart where order_id = '$oid'";
			$result = mysqli_query($conn,$sql);
			//$resultcheck = mysqli_num_rows($result);
			if($row = mysqli_fetch_assoc($result)){
				
					$sql = "update cart set buy = '1';";
					mysqli_query($conn,$sql);
					$pid = $row['p_id'];
					$sql = "insert into orders(p_id,b_id,cart_id) values('$pid','$bid','$oid');";
					mysqli_query($conn,$sql);
					echo '<script type="text/javascript">alert("The product is ordered !\\n.");location="../home/index.php?order=success";</script>';
					exit();

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