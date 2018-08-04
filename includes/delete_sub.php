<?php
	session_start();
	include_once 'connection.php';
	if(isset($_GET['subid']) && ($_SESSION['u_name'] == 'admin')){
		$bid = $_GET['subid'];
		
			$sql = "delete from subscribers where sub_id='$bid';";
			mysqli_query($conn,$sql);

			echo '<script type="text/javascript">alert("subscriber removed successfully !");
				location="../home/admin.php?remove=success";</script>';
			exit();
		
	}
	else{
		
				echo '<script type="text/javascript">alert("subscriber removal failed !");
				location="../home/admin.php?remove=unsuccess";</script>';
				exit();
	}