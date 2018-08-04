<?php

	session_start();

	if(isset($_POST['up_btn']))
	{

		include_once 'connection.php';
		$pid = $_GET['pid'];
		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$brand = mysqli_real_escape_string($conn,$_POST['brand']);
		$details = mysqli_real_escape_string($conn,$_POST['details']);
		$listp = mysqli_real_escape_string($conn,$_POST['list_price']);
		$yourp = mysqli_real_escape_string($conn,$_POST['price']);
		$quantity = mysqli_real_escape_string($conn,$_POST['quantity']);
		$cate = $_POST['sel1'];
		$subc = $_POST['sel2'];
		$img = $_FILES['image'];

		$imgName = $_FILES['image']['name'];
		$imgTmpName = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];
		$imgError = $_FILES['image']['error'];
		$imgType = $_FILES['image']['type'];

		$imgExt = explode('.',$imgName);
		$imgActualExt = strtolower(end($imgExt));

		$allowed = array('jpg','jpeg','png');



		if(empty($title) || empty($brand) || empty($details) || empty($listp) || empty($yourp) || empty($quantity)){
			if($_SESSION['u_name'] == 'admin')
			{
				echo '<script type="text/javascript">alert("Please enter all the details !\\nTry again.");
				location="../home/admin.php?edit_pro='.$pid.'";</script>';
				exit();
			}
			else{
			echo '<script type="text/javascript">alert("Please enter all the details !\\nTry again.");
			location="sell.php?Addproduct=empty";</script>';
			exit();}
		}
		else{
				if(in_array($imgActualExt,$allowed)){

					if($imgError === 0){
						if($imgSize < 1000000){

								$imgNewName = uniqid('',true).".".$imgActualExt;
								$imgDest = '../img/'.$imgNewName;
								move_uploaded_file($imgTmpName, $imgDest);

								$sql = "update products set category ='$cate',subcat = '$subc',image = '$imgDest',title = '$title',brand = '$brand',details = '$details',quantity = '$quantity',list_price = '$listp',price = '$yourp' where p_id='$pid' where p_id='$pid';";
								mysqli_query($conn,$sql);
								if($_SESSION['u_name'] == 'admin')
								{
									header("Location: ../home/admin.php?Updateproduct=Sucess");
									exit();
								}
								else{
									header("Location: sell.php?Updateproduct=Sucess");
									exit();
								}
									
						}
						else{
								if($_SESSION['u_name'] == 'admin')
								{
									echo '<script type="text/javascript">alert("Your file size is too big !\\nTry again.");
									location="../home/admin.php?edit_pro='.$pid.'&file=big";</script>';
									exit();
								}
								else{
								echo '<script type="text/javascript">alert("Your file size is too big !\\nTry again.");
									location="sell.php?file=big";</script>';
								exit();
							}
						}
					}
					else{
							if($_SESSION['u_name'] == 'admin')
								{
									echo '<script type="text/javascript">alert("There was an error uploading your file !\\nTry again.");
									location="../home/admin.php?edit_pro='.$pid.'&file=big";</script>';
									exit();
								}
								else{
							echo '<script type="text/javascript">alert("There was an error uploading your file !\\nTry again.");
								location="sell.php?upload=error";</script>';
							exit();}
					}
				}
				else{
						if($_SESSION['u_name'] == 'admin')
								{
									echo '<script type="text/javascript">alert("You can not upload this type of file !\\nTry again.");
									location="../home/admin.php?edit_pro='.$pid.'&file=notsupport";</script>';
									exit();
								}
						else{
						echo '<script type="text/javascript">alert("You can not upload this type of file !\\nTry again.");
							location="sell.php?upload=notsupport";</script>';
						exit();}
				}	
		}

	}
	else{

		if($_SESSION['u_name'] == 'admin')
		{
			header("Location: ../home/admin.php?#");
			exit();
		}
		else{
		header("Location: sell.php?#");
		exit();}
	}