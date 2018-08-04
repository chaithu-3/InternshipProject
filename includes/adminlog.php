<?php
session_start();

	if(isset($_POST['log_btn'])){
		include 'connection.php';

		$user = mysqli_real_escape_string($conn,$_POST['email']);
		$pswd = mysqli_real_escape_string($conn,$_POST['password']);

		if(empty($user) || empty($pswd)){
			echo '<script type="text/javascript">alert("Please enter user_id and password !\\nTry again.");
			location="../home/admin.php?login=emptylog";</script>';
			exit();
		}
		else{
			$sql = "select * from sellers where email='$user' or name='$user' or name='$mobile';";
			$result = mysqli_query($conn,$sql);
			if($row = mysqli_fetch_assoc($result))
			{
					//dehashing password
					$hashedpwdcheck = password_verify($pswd,$row['pswrd']);
					if($hashedpwdcheck == false){
						echo '<script type="text/javascript">alert("user_id/password was incorrect !\\nTry again.");
			location="../home/admin.php?login=incorrect";</script>';
						exit();
					}
					elseif($hashedpwdcheck == true)
					{
						//log in user here
						$_SESSION['u_id'] = '1';
						$_SESSION['u_name'] = $row['name'];
						$_SESSION['u_email'] = $row['email'];
						$_SESSION['u_mobile'] = $row['mobile'];
						$_SESSION['u_address'] = $row['address'];
						if($user == 'admin')
						{
							header("Location: ../home/admin.php?login=Success");
							exit();
						}
						else{
							header("Location: ../home/logout.php?NotAdmin");
							exit();
						}
					}
			}
		}
	}
		else
		{
			header("Location: ../home/admin.php?login=error");
			exit();
		}