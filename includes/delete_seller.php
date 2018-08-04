<?php
	session_start();
	include_once 'connection.php';
	if(isset($_GET['sid']) && ($_SESSION['u_name'] == 'admin')){
		$sid = $_GET['sid'];
		if($sid == '1'){
			echo '<script type="text/javascript">alert("You can not delete Admin !");
				location="../home/admin.php?remove=unsuccess";</script>';
				exit();
		}
		else{
		
			$sql = "delete from products where s_id='$sid';";
			mysqli_query($conn,$sql);
			$sql = "delete from sellers where s_id='$sid';";
			mysqli_query($conn,$sql);

			echo '<script type="text/javascript">alert("Seller removed successfully !");
				location="../home/admin.php?remove=success";</script>';
			exit();
		
		}
	}
	else{
		
				echo '<script type="text/javascript">alert("Seller removal failed !");
				location="../home/admin.php?remove=unsuccess";</script>';
				exit();
	}