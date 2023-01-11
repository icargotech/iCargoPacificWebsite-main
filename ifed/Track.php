
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
	          <button onclick="window.location.href='Track.php';" type="button" class="text-decoration-none border-bottom border-5 p-5 fs-5 text-light" style="border: none; background-color:#440262;">TRACK ORDER</button>
	        </div>
	        <div class="d-grid col-lg-2 ">   
	          <button onclick="window.location.href='Shipping.php';" type="button" class="text-decoration-none border-bottom border-5 p-5 fs-5" style=" border: none;">SHIP NOW</button>
	        </div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-6 pt-4">
				
				<div class="mb-3">
				  <label for="" class="form-label fs-5 ps-3">Tracking Info Number</label>
				  <input type="text" class="form-control form-control-lg shadow-sm rounded-pill"  placeholder="Tracking Number">
				</div>
			
				<div class="row justify-content-center">
					<div class="col-lg-6 d-grid pb-3 mt-3">
						<button class="fs-4 btn btn-lg btn-warning text-light shadow-lg rounded-pill  mt-3 mb-3">TRACK</button>
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