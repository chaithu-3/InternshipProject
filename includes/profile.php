<?php

					include_once '../includes/connection.php';

					$name = $_SESSION['u_name'];
					$email = $_SESSION['u_email'];
					$mobile = $_SESSION['u_mobile'];
					$address = $_SESSION['u_address'];
			?>
					<div class="dark" style="margin-left:30%;width:400px;margin-top:5%">
					<form method="POST" action="../includes/update_profile.php?uid=<?php echo "$uid" ;?>" align="center">
						<div class="form-inline">
						User_name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo $name; ?></label><br><br>
						</div>
						<div class="form-inline">
						Email:&nbsp;&nbsp;&nbsp;<label><?php echo $email; ?></label><br><br>
						</div>
						<div class="form-inline">
						Mobile.No:&nbsp;&nbsp;&nbsp;<label><?php echo $mobile; ?></label><br><br>
						</div>
						<div class="form-inline">
						Address:&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo $address; ?></label><br><br>
						</div>
						<h3>Update details here:</h3>
						<div class="form-inline">
						Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" class="form-control" placeholder="Enter Your Address..."><br><br>
						</div>
						<div class="form-inline">
						Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" class="form-control" placeholder="Enter Password..."><br><br>
						</div>
						<div class="form-inline">
						Retype:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="rpassword" class="form-control" placeholder="Enter Password..."><br><br>
						<button type="submit" name="upd_btn" class="btn btn-info">Update</button>
						</div>
					</form></div>
