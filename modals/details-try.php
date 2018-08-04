<?php 
session_start();
$sql = "select * from products where p_id='$p_id';";
echo '<div class="modal fade details-'.$p_id.'" id="details-'.$p_id.'" tableindex="-1" role="dialog" aria-labelledby="details-'.$p_id.'" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title text-center">'.$title.'</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="center-block">
							<img src="'.$image.'" alt="'.$title.'" class="details img-responsive" />

						</div>
					</div>
					<div class="col-sm-6">
						<h4>Details</h4>
						<p>'.$details.'</p>
						<hr />
						<p class="list-price text-danger">List Price: <s>$'.$list_price.'</s></p>
						<p class="price">Our Price: $'.$price.'</p>
						<p>Brand: '.$brand.'</p>
						<form action="../modals/add_cart.php?p_id='.$p_id.'" method="POST">
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
</div>'

?>