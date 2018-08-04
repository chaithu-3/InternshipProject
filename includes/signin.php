<?php

	session_start();
	if(isset($_POST['log_btn'])){
		include 'connection.php';

		$radio = $_POST['rb'];
		$user = mysqli_real_escape_string($conn,$_POST['email']);
		$pswd = mysqli_real_escape_string($conn,$_POST['password']);


	if(isset($_POST['rb'])){
		if(empty($user) || empty($pswd)){
			echo '<script type="text/javascript">alert("Please enter user_id and password !\\nTry again.");
			location="../home/Login.php?login=emptylog";</script>';
			exit();
		}
		else{
			if($radio == 'buyer')
				$sql = "select * from buyers where email='$user' or name='$user' or name='$mobile';";
			elseif($radio == 'seller')
				$sql = "select * from sellers where email='$user' or name='$user' or name='$mobile';";
			$result = mysqli_query($conn,$sql);
			$resultcheck = mysqli_num_rows($result);
			if($resultcheck < 1){
				echo '<script type="text/javascript">alert("user_id/password was incorrect !\\nTry again.");
			location="../home/Login.php?login=incorrect";</script>';
				exit();
			}
			else{
				if($row = mysqli_fetch_assoc($result)){
					//dehashing password
					$hashedpwdcheck = password_verify($pswd,$row['pswrd']);
					if($hashedpwdcheck == false){
						echo '<script type="text/javascript">alert("user_id/password was incorrect !\\nTry again.");
			location="../home/Login.php?login=incorrect";</script>';
						exit();
					}elseif($hashedpwdcheck == true){
						//log in user here
						
						$_SESSION['u_name'] = $row['name'];
						$_SESSION['u_email'] = $row['email'];
						$_SESSION['u_mobile'] = $row['mobile'];
						$_SESSION['u_address'] = $row['address'];
						if($user == 'admin'){
							header("Location: ../home/admin.php?login=Success");
							exit();
						}
						if($radio == 'seller'){
							$_SESSION['s_id'] = $row['s_id'];
							header("Location: sell.php?login=Success");
							exit();
						}
						elseif($radio == 'buyer'){
							$_SESSION['b_id'] = $row['b_id'];
							header("Location: ../home/index.php?login=Success");
							exit();
						}
					}
				}	
			}
		}
	}
	else{
		echo '<script type="text/javascript">alert("Please select account type !\\nTry again.");
			location="../home/Login.php?login=emptylog";</script>';
		exit();
	}
	}	
	else{
		header("Location: ../home/Login.php?login=error");
		exit();
	}

