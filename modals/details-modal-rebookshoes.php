<div class="modal fade details-5" id="details-5" tableindex="-1" role="dialog" aria-labelledby="details-5" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title text-center">Reebok Shoes</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="center-block">
							<img src="../img/reebok.jpeg" alt="Shoes" class="details img-responsive" />

						</div>
					</div>
					<div class="col-sm-6">
						<h4>Details</h4>
						<p>New Reebok light-weight shoes for casual wear, very attractive and cheap.</p>
						<hr />
						<p class="list-price text-danger">List Price: <s>$20.13</s></p>
						<p class="price">Our Price: $18.26</p>
						<p>Brand: Reebok</p>
						<form action="../modals/add_cart.php?p_id=5" method="POST">
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
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</div>
							<div class="form-group">
								<label for="color">Color:</label>
								<select name="color" id="color" class="form-control">
									<option value="black">Black</option>
									<option value="blue">Blue</option>
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