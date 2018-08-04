<?php

	session_start();
	if(isset($_POST['reg_btn']))
	{

		include_once 'connection.php';

		$radio = $_POST['rb'];
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
		$address = mysqli_real_escape_string($conn,$_POST['address']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$rpassword = mysqli_real_escape_string($conn,$_POST['rpassword']);

		if(isset($_POST['rb']))
		{
			if(empty($name) || empty($email) || empty($mobile)|| empty($address) || empty($password) || empty($rpassword))
			{
			echo '<script type="text/javascript">alert("Please enter all the details !\\nTry again.");
			location="../home/Login.php?signup=empty";</script>';
			exit();
			}
			else
			{
			//check if name is valid
				if(!preg_match("/^[a-zA-Z0-9]*$/", $name))
				{
				echo '<script type="text/javascript">alert("Please enter a valid name (only alphabets and numbers) !\\nTry again.");
						location="../home/Login.php?signup=invalid";</script>';
				exit();
				}
				else
				{
				//check if email is valid
					if(!filter_var($email,FILTER_VALIDATE_EMAIL))
					{
					echo '<script type="text/javascript">alert("Please enter a valid email_id !\\nTry again.");
							location="../home/Login.php?signup=invalid";</script>';
					exit();
					}
					else
					{
						if(!preg_match("/^[0-9]*$/", $mobile))
						{
							echo '<script type="text/javascript">alert("Please enter a valid name (only alphabets and numbers) !\\nTry again.");
								location="../home/Login.php?signup=invalid";</script>';
						exit();
						}
						else{
						if($radio == "buyer")
							$sql = "select * from buyers where name='$name' or email='$email' or mobile='$mobile';";
						elseif($radio == "seller")
							$sql = "select * from sellers where name='$name' or email='$email' or mobile='$mobile';";
						$result = mysqli_query($conn,$sql);
						$resultcheck = mysqli_num_rows($result);
						
						if($resultcheck > 0)
						{
							echo '<script type="text/javascript">alert("Sorry user_name/Email_id/mobile_no already registered !\\nTry again.");
									location="../home/Login.php?signup=taken";</script>';
							exit();
						}
						else
						{
							if($password!=$rpassword)
							{
								echo '<script type="text/javascript">alert("Password was not confirmed !\\nTry again.");
										location="../home/Login.php?signup=nomatch";</script>';
								exit();
							}
							else
							{
								//hashing
								$hashpwd = password_hash($password,PASSWORD_DEFAULT);
								//insert user
								if($radio == "buyer")
									$sql = "insert into buyers(name,email,mobile,address,pswrd) values('$name','$email','$mobile','$address','$hashpwd');";
								elseif($radio == "seller")
									$sql = "insert into sellers(name,email,mobile,address,pswrd) values('$name','$email','$mobile','$address','$hashpwd');";
								mysqli_query($conn,$sql);
								header("Location: ../home/Login.php?signup=Sucess");
								exit();
							}
						}
					}
				}
				}
			}
		}
		else
		{
			echo '<script type="text/javascript">alert("Please select account type !\\nTry again.");
			location="../home/Login.php?signup=empty";</script>';
			exit();
		}

	}
	else
	{
		header("Location: ../home/Login.php");
		exit();
	}