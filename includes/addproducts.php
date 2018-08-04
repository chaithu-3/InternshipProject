<?php

	session_start();

	if(isset($_POST['add_btn']))
	{

		include_once 'connection.php';

		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$brand = mysqli_real_escape_string($conn,$_POST['brand']);
		$details = mysqli_real_escape_string($conn,$_POST['details']);
		$listp = mysqli_real_escape_string($conn,$_POST['list_price']);
		$yourp = mysqli_real_escape_string($conn,$_POST['price']);
		$quantity = mysqli_real_escape_string($conn,$_POST['quantity']);
		$cate = $_POST['sel1'];
		$subc = $_POST['sel2'];
		$s_id = $_SESSION['s_id'];
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
			echo '<script type="text/javascript">alert("Please enter all the details !\\nTry again.");
			location="sell.php?Addproduct=empty";</script>';
			exit();
		}
		else{
				if(in_array($imgActualExt,$allowed)){

					if($imgError === 0){
						if($imgSize < 1000000){

								$imgNewName = uniqid('',true).".".$imgActualExt;
								$imgDest = '../img/'.$imgNewName;
								move_uploaded_file($imgTmpName, $imgDest);

								$sql = "insert into products(s_id,category,subcat,image,title,brand,details,quantity,list_price,price)values('$s_id','$cate','$subc','$imgDest','$title','$brand','$details','$quantity','$listp','$yourp');";
								mysqli_query($conn,$sql);
								header("Location: sell.php?Addproduct=Sucess");
								exit();
									
						}
						else{
								echo '<script type="text/javascript">alert("Your file size is too big !\\nTry again.");
									location="sell.php?file=big";</script>';
								exit();
						}
					}
					else{
							echo '<script type="text/javascript">alert("There was an error uploading your file !\\nTry again.");
								location="sell.php?upload=error";</script>';
							exit();
					}
				}
				else{
						echo '<script type="text/javascript">alert("You can not upload this type of file !\\nTry again.");
							location="sell.php?upload=notsupport";</script>';
						exit();
				}	
		}

	}
	else{
		header("Location: sell.php?#");
		exit();
	}