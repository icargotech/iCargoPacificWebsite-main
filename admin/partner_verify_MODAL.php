



<div class="modal fade" id="Permit<?php echo $row["ID"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Partner Request #<?php echo $row["ID"] ?></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="Partner_verify_update_user.php" method="post">
				<div class="row justify-content-between">
					<div class="col-lg-6 border-end">
						<div class="mb-3 row lead">
							<label for="staticEmail" class="col-4 col-form-label">Company Name:</label>
					    	<div class="col-6">
					      		<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row["company_name"] ?>">
					    	</div>
					  	</div>
						<div class="mb-3 row lead">
							<label for="staticEmail" class="col-4 col-form-label">Company Email:</label>
					    	<div class="col-6">
					      		<input type="text" readonly class="form-control-plaintext" name="email" id="staticEmail" value="<?php echo $row["company_email"] ?>">
					    	</div>
					  	</div>
					  	<div class="mb-3 row lead">
							<label for="staticEmail" class="col-4 col-form-label">Contact Number:</label>
					    	<div class="col-6">
					      		<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row["company_no"] ?>">
					    	</div>
					  	</div>
					  	<div class="mb-3 row lead">
							<label for="staticEmail" class="col-4 col-form-label">Permit Number:</label>
					    	<div class="col-6">
					      		<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row["permit_no"] ?>">
					    	</div>
					  	</div>
					  	<div class="mb-3 row lead">
							<label for="staticEmail" class="col-4 col-form-label">ID type:</label>
					    	<div class="col-6">
					      		<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row["uplidtype"] ?>">
					    	</div>
					  	</div>	
					</div>
					<div class="col-lg-6">
					    <p class="lead">Business Permit Numbers: <span class=""><?php echo $row["id_no"] ?></span></p>
					    <img class=" img-fluid" src=" ../partners/uploads/<?php echo $row["picpath"] ?>" style="height: 300px;">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-secondary" data-bs-dismiss="modal" name="decline">Decline</button>   						  							
				<button type="submit" class="btn btn-primary" name="accept">Accept</button>
				</form>
			</div>
		</div>
	</div>
</div>