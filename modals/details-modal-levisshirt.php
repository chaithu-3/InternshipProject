<div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title text-center">Levis Shirt</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="center-block">
							<img src="../img/shirts.jpg" alt="levis-shirt" class="details img-responsive" />

						</div>
					</div>
					<div class="col-sm-6">
						<h4>Details</h4>
						<p>Featuring the same 1902 Sunset pocket shape as shirts from the Levi's® archives, our Sunset One Pocket is as timeless as it is versatile. This button-up staple has a classic look that works with just about any denim in your closet.</p>
						<hr />
						<p class="list-price text-danger">List Price: <s>$6.79</s></p>
						<p class="price">Our Price: $5.98</p>
						<p>Brand: Levis</p>
						<form action="../modals/add_cart.php?p_id=1" method="POST">
							<div class="col-xs-3">
								<label for="quantity" id="quantity-label">Quantity:</label>
								<input type="text" class="form-control" id="quantity" name="quantity" />
							</div><br/><br/><br/>
							<div class="form-group">
								<label for="size">Size:</label>
								<select name="size" id="size" class="form-control">
									<option value="38">38</option>
									<option value="40">40</option>
									<option value="42">42</option>
									<option value="44">44</option>
								</select>
							</div>
							<div class="form-group">
								<label for="color">Color:</label>
								<select name="color" id="color" class="form-control">
									<option value="blue">Blue</option>
									<option value="black">Black</option>
									<option value="white">White</option>
								</select>
							</div>
							<div class="modal-footer">
								<button class="btn btn-default" data-dismiss="modal">Close</button>
								<button class="btn btn-warning" type="submit" name="adc_btn"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		</div>
		</div>
	</div>	
</div>