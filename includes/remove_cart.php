<?php
	session_start();
	include_once 'connection.php';
	if(isset($_POST['rem_btn'])){
		$oid = $_GET['order_id'];
		$sql = "select * from cart where order_id='$oid';";
		$result = mysqli_query($conn,$sql);
		$resultcheck = mysqli_num_rows($result);
		if($resultcheck < 1){
			echo '<script type="text/javascript">alert("Product not found !");
				location="../home/index.php?remove=empty";</script>';
			exit();
		}
		else{
			$sql = "delete from cart where order_id='$oid';";
			mysqli_query($conn,$sql);
			echo '<script type="text/javascript">alert("Product removed successfully !");
				location="../home/index.php?remove=success";</script>';
			exit();
		}
	}
	elseif(isset($_POST['can_btn'])){
		$oid = $_GET['order_id'];
		$sql = "select * from orders where order_id='$oid';";
		$result = mysqli_query($conn,$sql);
		$resultcheck = mysqli_num_rows($result);
		if($resultcheck < 1){
			echo '<script type="text/javascript">alert("Product not found !");
				location="../home/index.php?remove=empty";</script>';
			exit();
		}
		else{
			$sql = "delete from orders where order_id='$oid';";
			mysqli_query($conn,$sql);
			echo '<script type="text/javascript">alert("Order cancel successfully !");
				location="../home/index.php?cancel=success";</script>';
			exit();
		}
	}