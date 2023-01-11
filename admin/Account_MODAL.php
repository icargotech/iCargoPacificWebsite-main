



<div class="modal fade" id="view<?=$row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Account Details</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row justify-content-center text-center">			
					<h5 class=""><?php echo $row['company_email'] ?></h5>
					<span class="text-muted">Email</span><br><br>
				</div>
				<div class="row justify-content-between text-center">
					<div class="col-lg-6">

						<h5 class=""><?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?></h5>
						<span class="text-muted">Full Name</span>
						<br><br>
						<h5 class=""><?php echo $row['company_no'] ?></h5>
						<span class="text-muted">Contact #</span>
					</div>
					<div class="col-lg-6">

						<h5 class=""><?php echo $row['company_name'] ?> </h5>
						<span class="text-muted">Company</span>
						<br><br>
						<h5 class=""><?php echo $row['comp_addr'] ?></h5>
						<span class="text-muted">Company address</span>
					</div>
				</div>
				<div class="row justify-content-center text-center">
					<h5 class=""><?php echo $row['verify'] ?></h5>
						<span class="text-muted">verification</span>
						
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>   						  							
				
			</div>
		</div>
	</div>
</div>