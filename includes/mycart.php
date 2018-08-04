<?php
					include_once '../includes/connection.php';
					$bid = $_SESSION['b_id'];
					$sql = "select * from products inner join cart on products.p_id=cart.p_id where cart.b_id = '$bid';";
					$result = mysqli_query($conn,$sql);
					$resultcheck = mysqli_num_rows($result);
					if($resultcheck < 1){
						echo "<h2 align='center' style='margin-top:3%'>No items found !</h2>";
					}
					else{
							echo '<div class="container">
								<div class="col-md-2">
								</div>
								<div class="col-md-9">
									<div class="row">';
									while ($rows = mysqli_fetch_assoc($result)){
										echo '<div class="col-md-3" style="margin-top: 5%">
											<h4>'.$rows['title'].'</h4>
											<img src="'.$rows['image'].'" alt="No-image" id="images"/>
											<p class="list-price text-danger">List Price: <s>$'.$rows['list_price'].'</s></p>
											<p class="price">Our Price: $'.$rows['price'].'</p>
											<form method="POST" action="../includes/buy.php?order_id='.$rows['order_id'].'">
											<button type="submit" class="btn btn-danger" name="buy_btn">Buy</button>
											</form><br/>
											<form method="POST" action="../includes/remove_cart.php?order_id='.$rows['order_id'].'">
											<button type="submit" class="btn btn-info" name="rem_btn">Remove</button>
											</form>
										</div>';
									}
									echo '</div>
								</div>	
							</div>';
						}

			?>