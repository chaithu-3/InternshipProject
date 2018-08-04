<div class="modal fade details-2" id="details-2" tableindex="-1" role="dialog" aria-labelledby="details-2" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title text-center">Iphone-X</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="center-block">
							<img src="../img/phones.png" alt="Iphone-X" class="details img-responsive" />

						</div>
					</div>
					<div class="col-sm-6">
						<h4>Details</h4>
						<p>Apple's vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.</p>
						<hr />
						<p class="list-price text-danger">List Price: <s>$1005</s></p>
						<p class="price">Our Price: $999</p>
						<p>Brand: Apple</p>
						<form action="../modals/add_cart.php?p_id=2" method="POST">
							<div class="col-xs-3">
								<label for="quantity" id="quantity-label">Quantity:</label>
								<input type="text" class="form-control" id="quantity" name="quantity" />
							</div><br/><br/><br/>
							<div class="form-group">
								<label for="size">Size:</label>
								<select name="size" id="size" class="form-control">
									<option value="64gb">64GB</option>
								</select>
							</div>
							<div class="form-group">
								<label for="color">Color:</label>
								<select name="color" id="color" class="form-control">
									<option value="Gold">Gold</option>
									<option value="Grey">Grey</option>
									<option value="white">White</option>
								</select>
							</div>
							<div class="modal-footer">
								<button class="btn btn-default" data-dismiss="modal">Close</button>
								<button class="btn btn-warning" type="submit" name="adc_btn"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		</div>
	</div>	
</div>