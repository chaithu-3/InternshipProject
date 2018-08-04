<div class="modal fade details-9" id="details-9" tableindex="-1" role="dialog" aria-labelledby="details-9" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title text-center">Woodland Sandals</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="center-block">
							<img src="../img/woodland.jpg" alt="Sandals" class="details img-responsive" />

						</div>
					</div>
					<div class="col-sm-6">
						<h4>Details</h4>
						<p>An epitome of 'looks can be deceiving', this casual looking sandal will effortlessly pulverize the urban terrains that you regularly tread on. The rugged upper takes on the rough environment head on while the rubber sole grips even in wet conditions.</p>
						<hr />
						<p class="list-price text-danger">List Price: <s>$37.45</s></p>
						<p class="price">Our Price: $36.70</p>
						<p>Brand: Woodland</p>
						<form action="../modals/add_cart.php?p_id=9" method="POST">
							<div class="col-xs-3">
								<label for="quantity" id="quantity-label">Quantity:</label>
								<input type="text" class="form-control" id="quantity" name="quantity" />
							</div><br/><br/><br/>
							<div class="form-group">
								<label for="size">Size:</label>
								<select name="size" id="size" class="form-control">
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
							</div>
							<div class="form-group">
								<label for="color">Color:</label>
								<select name="color" id="color" class="form-control">
									<option value="brown">Brown</option>
									<option value="black">Black</option>
									<option value="gray">Gray</option>
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