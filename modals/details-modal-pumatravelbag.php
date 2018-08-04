<div class="modal fade details-6" id="details-6" tableindex="-1" role="dialog" aria-labelledby="details-6" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title text-center">Puma Travel Bag</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="center-block">
							<img src="../img/bags.jpg" alt="Travel bag" class="details img-responsive" />

						</div>
					</div>
					<div class="col-sm-6">
						<h4>Details</h4>
						<p>New Puma Sports and Gym Bag. Very attractive and very light in weight.</p>
						<hr />
						<p class="list-price text-danger">List Price: <s>$6.79</s></p>
						<p class="price">Our Price: $5.98</p>
						<p>Brand: Puma</p>
						<form action="../modals/add_cart.php?p_id=6" method="POST">
							<div class="col-xs-3">
								<label for="quantity" id="quantity-label">Quantity:</label>
								<input type="text" class="form-control" id="quantity" name="quantity" />
							</div><br/><br/><br/>
							<div class="form-group">
								<label for="size">Size:</label>
								<select name="size" id="size" class="form-control">
									<option value="small">Small</option>
									<option value="medium">Medium</option>
									<option value="large">Large</option>
								</select>
							</div>
							<div class="form-group">
								<label for="color">Color:</label>
								<select name="color" id="color" class="form-control">
									<option value="Blue-grey">Blue-Grey</option>
									<option value="Blue-red">Blue-Red</option>
									<option value="Black-red">Black-Red</option>
									<option value="Black-white">Black-White</option>
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