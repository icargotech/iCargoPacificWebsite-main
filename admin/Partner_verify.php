<?php 

include "../admin/db_connect.php";

session_start();

if(isset($_SESSION['id'])) {
$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM signup_partners_users WHERE id = '$id'");
$rows = mysqli_fetch_assoc($sql); ?>

<html>
<head>


  <!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<!-- ICON latest -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">


  
</head>

<body style="background-color: #d4d4d4;">
	




<header class="navbar  navbar-dark sticky-top bg-dark flex-md-nowrap border-bottom border-secondary">
   <button type="button" class="btn btn-outline-warning mx-2" onclick="window.location.href='Dashboard.php';"><i class="bi bi-house-door-fill"></i> Icargo Pacific</button>

<button class="navbar-toggler d-md-none collapsed" 
type="button" 
data-bs-toggle="collapse"
data-bs-target="#sidebarmenu" 
aria-contols="sidebarmenu" 
area-expanded="false" 
aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
</header>

<div class="row justify-content-between">
<?php if ($_SESSION['role'] == 1) 
{
    include "Admin_sidebar.php";
  }elseif($_SESSION['role'] == 2 || $_SESSION['role'] == 3)
{
  include "Staff_sidebar.php";
}
 ?>

		<div class="col-md-3 col-lg-2"></div>

    <!-- Main -->
    <div class="col-lg-10 col-md-9">
			<div class="container-fluid">
	        <p class="fs-2 fw-bold text-center mt-3">PARTNER VERIFICATION</p>

	      
	        <hr>
	        <table class="table table-striped table-bordered border-dark table-responsive bg-light shadow-lg mt-1">
	          <thead class="bg-dark text-white">
	          <tr>
	            
							<th scope="col-3">Company Name</th>
							<th scope="col-3">Email</th>
							<th scope="col-2">Contact Number</th>
							<th scope="col-1">Business Permit Number</th>
							<th scope="col-1">ID Type</th>
							<th scope="col-1">ID Number</th>
							<th scope="col-1">Verification</th>
							<th scope="col-1">Action</th>
	          </tr>
	        </thead>
	        <tbody>
	          <?php 
	        	$query="SELECT * from partner_verify WHERE verify = 'In-progress'";
						$execute=mysqli_query($conn,$query);
						while($row=mysqli_fetch_assoc($execute))
						{
	          ?>
								
								<td><?php echo $row["company_name"]?></td>
								<td><?php echo $row["company_email"]?></td>
								<td><?php echo $row["company_no"]?></td>
								<td><?php echo $row["permit_no"]?></td>
								<td><?php echo $row["uplidtype"]?></td>
								<td><?php echo $row["id_no"]?></td>
								<td><?php echo $row["verify"]?></td>
								<td><button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#Permit<?php echo $row["ID"] ?>">Open</button></td>
								</td>
							</tr>
	        </tbody>
	        <?php include "partner_verify_MODAL.php"; } ?>
	      </table>
	    </div>
  	</div>
  </div>




</body>
</html>


<?php 
}else{
  header("Location: index.php");
} ?>