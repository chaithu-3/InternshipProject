<?php
	if(isset($_POST['subs_btn'])){
		include 'connection.php';
		$sub = mysqli_real_escape_string($conn,$_POST['subn']);
		
		if(empty($sub)){
			header("Location: ../home/index.php");
			exit();
		}
		else{
				$sql = "select * from subscribers where email='$sub';";
				$result = mysqli_query($conn,$sql);
				$resultcheck = mysqli_num_rows($result);
				if($resultcheck > 0){
					echo '<script type="text/javascript">alert("Subscriber already exists !\\nTry again.");
						location="../home/index.php";</script>';
					exit();
				}
				else{
					if(!filter_var($sub,FILTER_VALIDATE_EMAIL))
					{
						echo '<script type="text/javascript">alert("Please enter a valid email_id !\\nTry again.");
							location="../home/index.php?subscriber=invalid";</script>';
						exit();
					}
					else{
						$sql = "insert into subscribers(email) values('$sub');";
						mysqli_query($conn,$sql);
						header("Location: ../home/index.php?subscribe=Sucess");
						exit();
					}	
			}
		}
	}