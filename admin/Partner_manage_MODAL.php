



<div class="modal fade" id="Permits<?php echo $rows["ID"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Manage Company</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="Partner_manage_update_user.php" method="post">
					<input type ="hidden" value ="<?php echo $rows["company_email"] ?>" name="email">
				<h3 class="text-center fw-bold"><?php echo $rows["company_name"] ?></h3>
				<p class="text-center text-muted">Company Name</p>
				<div class="row justify-content-between">
					<div class="col-lg-6 text-center border-end">
						<br>
						<h5><?php echo $rows["company_no"] ?></h5>
						<h6 class="text-muted">Company Number</h6>
						<br>
						<h5><?php echo $rows["company_email"] ?></h5>
						<h6 class="text-muted">Company Email</h6>
						<br>
						<h5><?php echo $rows["verify"] ?> <i class="bi bi-patch-check-fill text-primary"></i></h5>
						<h6 class="text-muted">Status</h6>

					</div>
					<div class="col-lg-6 text-center">
						<br>
						<h6 class="text-muted">Verification</h6>
						<select class="form-select" aria-label="Default select example" name="verification">
						  <option value="0" selected>Change Verification Status</option>
						  <option value="Denied" <?php if($rows['verify'] == "Denied"){echo"selected";}?>>Revoke</option>
						  <option value="Verified" <?php if($rows['verify'] == "Verified"){echo"selected";}?>>Verified</option>
						  
						</select>
						<br>
						<h6 class="text-muted">Block/Active</h6>
						<select class="form-select" aria-label="Default select example" name="block_active">
						  <option value="0" selected>Change Partner Status</option>
						  <option value="1" <?php if($rows['status'] == 1){echo"selected";}?>>Active</option>
						  <option value="2" <?php if($rows['status'] == 2){echo"selected";}?>>Block</option>
						  
						</select>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>   						  							
				<button type="submit" class="btn btn-warning" name="update">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>