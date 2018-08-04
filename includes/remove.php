<?php
	session_start();
	include_once 'connection.php';
	if(isset($_POST['rem_btn'])||isset($_GET['pid'])){
		$pid = $_GET['pid'];
		$sql = "select * from products where p_id='$pid';";
		$result = mysqli_query($conn,$sql);
		$resultcheck = mysqli_num_rows($result);
		if($resultcheck < 1){
			echo "<sript>No Products found !</script>";
		}
		else{
			$sql = "delete from products where p_id='$pid';";
			mysqli_query($conn,$sql);
			if($_SESSION['u_name'] == 'admin')
			{
				echo '<script type="text/javascript">alert("Product removed successfully !");
				location="../home/admin.php?remove=success";</script>';
				exit();
			}
			else{
			echo '<script type="text/javascript">alert("Product removed successfully !");
				location="sell.php?remove=success";</script>';
			exit();}
		}
	}
	else{
		if($_SESSION['u_name'] == 'admin')
			{
				echo '<script type="text/javascript">alert("Product removal failed !");
				location="../home/admin.php?remove=unsuccess";</script>';
				exit();
			}
			else{
		echo '<script type="text/javascript">alert("Product removal failed !");
				location="sell.php?remove=unsuccess";</script>';
			exit();}
	}