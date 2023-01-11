
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Icargo x Fedex</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

<!--Local CSS -->
<link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>
<section>
	<?php include "Header.php"; ?>
</section>
<section id="" style="height: 400px; background-position: center; background-repeat: no-repeat; background-size: cover; position:relative; background-image: url(img/BG-panel.jpg);">

	<div class="container">
		<div class="row justify-content-center text-center p-4">
			<h3 class="fs-1 text-light">Welcome to FedEx Portal</h3>
			<p>Integration made by <span class="text-light">iCargo Pacific</span></p>
		</div>
		<div class="row justify-content-between text-center pb-5">
			<div class="col-lg-6 border-end border-light border-5">
				<h1 class="fw-bold" style="color: #440565; font-size: 100px;">Fed<span style="color: #de8a1e;">Ex</span></h1>
			</div>
			<div class="col-lg-6 mt-3">
				<img src="img/icargologo.png" style="width: 100px;">
				<span class="fw-bold fs-1  ps-3" style=" color: #0c0458;"> iCargo 
				<span class="fw-bold fs-1 text-warning">Pacific</span></span>
			</div>
		</div>
		<div class="row justify-content-center text-center">
			<div class="d-grid col-lg-2 ">   
	          <button onclick="window.location.href='Panel.php';" type="button" href="panel.php" class="text-decoration-none border-bottom border-5 p-5 fs-5 " 
	          style=" border: none;">RATE & TRANSIT TIME</button>
	        </div>
	        <div class="d-grid col-lg-2 ">   
	          <button type="button" class="text-decoration-none border-bottom border-5 p-5 fs-5" style="border: none;">TRACK ORDER</button>
	        </div>
	        <div class="d-grid col-lg-2 ">   
	          <button type="button" class="text-decoration-none border-bottom border-5 p-5 fs-5 text-light" style="background-color:#440262; border: none;">SHIP NOW</button>
	        </div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-6 pt-4">
				<p class="fs-2 text-center text-muted">Calculate FedEx shipping rates.</p>
				<br>
				<p class="fs-4 lead">Shippers Details</p>

				<div class="mb-3">
				  <label for="" class="form-label fs-5 ps-3">House Number, Building, Street Name</label>
				  <input type="text" class="form-control form-control-lg shadow-sm rounded-pill"  placeholder="House Number, Building, Street Name">
				</div>
				<div class="mb-3">
				  <label for="" class="form-label fs-5 ps-3">City</label>
				  <input type="text" class="form-control form-control-lg shadow-sm rounded-pill"  placeholder="City">
				</div>
				<div class="mb-3">
				  <label for="" class="form-label fs-5 ps-3">State of Province Code</label>
				  <input type="text" class="form-control form-control-lg shadow-sm rounded-pill"  placeholder="State of Province Code">
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-6 mb-3">
					  <label for="" class="form-label fs-5 ps-3">Postal Code</label>
					  <input type="text" class="form-control form-control-lg shadow-sm rounded-pill">
					</div>
					<div class="col-lg-6 mb-3">
					  <label for="" class="form-label fs-5 ps-3">Country Code</label>
					  <input type="text" class="form-control form-control-lg shadow-sm rounded-pill">
					</div>
				</div>

				<p class="fs-4 lead pt-4">Cargo Information</p>

				<div class="mb-3">
				  <label for="" class="form-label fs-5 ps-3">Service Type</label>
				  <input type="text" class="form-control form-control-lg shadow-sm rounded-pill"  placeholder="Service Type">
				</div>
				<div class="mb-3">
					
					<div class="row justify-content-between">
						<div class="col-lg-6"><label for="" class="form-label fs-5 ps-3">Packiging Type</label></div>
					</div>
					<select class="form-select form-select-lg shadow-sm rounded-pill mb-3" aria-label=".form-select-lg example">
					  <option selected>FedEx 25kg Packiging</option>
					  <option value="">One-Time Pickup</option>
					  <option value="">Recurring FedEx pickup</option>
					  <option value="">Dropoff</option>
					</select>
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-6 mb-3">
					  <label for="" class="form-label fs-5 ps-3">No. of Packages</label>
					  <input type="text" class="form-control form-control-lg shadow-sm rounded-pill " placeholder="Max of 1">
					</div>
					<div class="col-lg-6 mb-3">
					  <label for="" class="form-label fs-5 ps-3">Weight per package</label>
					  <input type="text" class="form-control form-control-lg shadow-sm rounded-pill" placeholder="Max. weight 150 lb.">
					</div>
				</div>
				<div class="mb-3 pt-3">
					
					<div class="row justify-content-between">
						<div class="col-lg-6"><label for="" class="form-label fs-5 ps-3">Pick-up Type</label></div>
						<div class="col-lg-3"><a href="" class="text-decoration-none"><p class="text-end">Need Help?</p></a></div>
					</div>
					<select class="form-select form-select-lg shadow-sm rounded-pill mb-3" aria-label=".form-select-lg example">
					  <option selected>Select Pick-up Type</option>
					  <option value="">One-Time Pickup</option>
					  <option value="">Recurring FedEx pickup</option>
					  <option value="">Dropoff</option>
					</select>
				</div>
				<div class="mb-3 pt-3">
				  <label for="" class="form-label fs-5 ps-3">Payment Method</label>
				  <div class="row justify-content-evenly mt-3">
				  	<div class="d-grid col-lg-3">
				  		<input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" >
						<label class="btn btn-outline-primary rounded-pill" for="option1">Card Payment</label>
				  	</div>
				  	<div class="d-grid col-lg-3">
						<input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
						<label class="btn btn-outline-primary rounded-pill" for="option2">Bank Transfer</label>
					</div>
					<div class="d-grid col-lg-3">
						<input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
						<label class="btn btn-outline-primary rounded-pill" for="option4">Check or Cash</label>
					</div>
				  </div>
				</div>
				<div class="mb-3 pt-3">
				  <label for="" class="form-label fs-5 ps-3">Ship Date</label>
				  <input type="text" class="form-control form-control-lg shadow-sm rounded-pill" placeholder="MM/DD/YYYY">
				</div>
				<div class="row justify-content-center">
					<div class="row justify-content-center mt-5 mb-2 pt-5">
						
						<h3 class="text-center" style="color: #440262;">US$954.12</h3>
						
					</div>
					<div class="row justify-content-between text-center mb-3">
						<div class="col-6">
							<p class="">Base rate</p>
							<p class="">Fuel Surcharge</p>
							<p class="">FedEx pickup</p>
							<p class="">Pick Surcharge</p>
							<br>
							<p class="fw-bold">Estimated Total</p>
							
						</div>
						<div class="col-6">
							<p class="">US$</p>
							<p class="">US$</p>
							<p class="">US$</p>
							<p class="">US$</p>
							<br>
							<p class="fw-bold">US$</p>
						</div>
					</div>
					<div class="col-lg-6 d-grid pb-3">
						<button class="fs-4 btn btn-lg btn-warning text-light shadow-lg rounded-pill  mt-3 mb-3">BOOK NOW</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- BS5 JavaScript plugins -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>