<?php

	session_start();

	if(isset($_POST['upd_btn']))
	{

		include_once 'connection.php';
		$uid = $_GET['uid'];
		$address = mysqli_real_escape_string($conn,$_POST['address']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$rpassword = mysqli_real_escape_string($conn,$_POST['rpassword']);

		if(empty($address) || empty($password) || empty($rpassword))
			{
				if(isset($_SESSION['b_id']))
				echo '<script type="text/javascript">alert("Please enter all the details !\\nTry again.");
					location="../home/index.php?update=empty";</script>';
				elseif(isset($_SESSION['s_id']))
					echo '<script type="text/javascript">alert("Please enter all the details !\\nTry again.");
					location="../includes/sell.php?update=empty";</script>';

				exit();
			}
			else
			{

				if($password!=$rpassword)
				{
					if(isset($_SESSION['b_id']))
						echo '<script type="text/javascript">alert("Password was not confirmed !\\nTry again.");
							location="../home/index.php?update=nomatch";</script>';
					elseif(isset($_SESSION['s_id']))
						echo '<script type="text/javascript">alert("Password was not confirmed !\\nTry again.");
							location="../includes/sell.php?update=nomatch";</script>';
					exit();
				}
				else
				{
								//hashing
					$hashpwd = password_hash($password,PASSWORD_DEFAULT);
								//insert user
					if(isset($_SESSION['b_id'])){
					$bid = $_SESSION['b_id'];
					$sql = "update buyers set address = '$address',pswrd = '$hashpwd' where b_id ='$bid ;";
					mysqli_query($conn,$sql);
					header("Location: ../home/index.php?update=Sucess");
					exit();
					}
					elseif(isset($_SESSION['s_id'])){
					$sid = $_SESSION['s_id'];
					$sql = "update sellers set address = '$address',pswrd = '$hashpwd' where s_id = '$sid';";
					mysqli_query($conn,$sql);
					header("Location: ../includes/sell.php?update=Sucess");
					exit();
					}
				}
			}
	}
	else
	{
		if(isset($_SESSION['b_id']))
		header("Location: ../home/index.php");
		elseif(isset($_SESSION['s_id']))
		header("Location: ../includes/sell.php");
		exit();
	}