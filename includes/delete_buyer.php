<?php
	session_start();
	include_once 'connection.php';
	if(isset($_GET['bid']) && ($_SESSION['u_name'] == 'admin')){
		$bid = $_GET['bid'];
		if($bid == '1'){
			echo '<script type="text/javascript">alert("You can not delete Admin !");
				location="../home/admin.php?remove=unsuccess";</script>';
				exit();
		}
		else{
		
			$sql = "delete from cart where b_id='$bid';";
			mysqli_query($conn,$sql);
			$sql = "delete from buyers where b_id='$bid';";
			mysqli_query($conn,$sql);

			echo '<script type="text/javascript">alert("Buyer removed successfully !");
				location="../home/admin.php?remove=success";</script>';
			exit();
		
		}
	}
	else{
		
				echo '<script type="text/javascript">alert("Buyer removal failed !");
				location="../home/admin.php?remove=unsuccess";</script>';
				exit();
	}