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
	


<!-- Sidebar CSS -->
<style type="text/css">
  .sidebar
{
position: fixed;
top: 0;
bottom: 0;
left: 0;
padding: 48px 0 0;
}

#sidehover:hover
{
background-color: gray;
}
</style>

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
<nav id="sidebarmenu" class="col-md-4 col-lg-3 d-md-block bg-dark sidebar collapse rounded-end navbar-expand-lg">
      <div class="position-sticky pt-2">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a id="sidehover" href="Dashboard.php" class="nav-link border-bottom border-secondary text-white"><i class="bi bi-speedometer2"></i> Dashboard</a>
          </li>

          <li class="nav-item">
            <a id="sidehover" href="orders.php" class="nav-link border-bottom border-secondary text-white mt-2 bg-primary"><i class="bi bi-ticket-perferated"></i> Partner Verification</a>

            <li class="nav-item">
            <a id="sidehover" href="Attendance_log.php" class="nav-link border-bottom border-secondary text-white mt-2"><i class="bi bi-ticket-perferated"></i> Attendance Logs</a>
          
          </li>
          <li class="nav-item">
            <a id="sidehover" href="logout.php" class="nav-link border-bottom border-secondary text-white mt-2"><i class="bi bi-arrow-bar-left"></i> Sign Out</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class=" col-lg-3 col-md-4"></div>

    <!-- Main -->
    <div class="col-lg-9 col-md-8">
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
							<th scope="col-1">Action</th>
	          </tr>
	        </thead>
	        <tbody>
	          <?php 
	        	$query="select * from partner_verify";
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
								<td><a class="btn btn-outline-secondary" href="" data-bs-toggle="modal" data-bs-target="#Permit<?php echo $row["ID"] ?>">Open</a></td>
								</td>
							</tr>
	        </tbody>

	        <div class="modal fade" id="Permit<?php echo $row["ID"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
					  <div class="modal-dialog modal-xl">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="staticBackdropLabel"><?php echo $row["company_name"] ?></h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <div class="modal-body">
					        
					        <div class="row justify-content-between">
					        	<div class="col-lg-6">
					        		<p class="">Company Email: <span class="fw-bold"><?php echo $row["company_email"] ?></span></p>
					        		<br>
					        		<p class="">Contact Number: <span class="fw-bold"><?php echo $row["company_no"] ?></span></p>
					        		<br>
					        		<p class="">Permit Number: <span class="fw-bold"><?php echo $row["permit_no"] ?></span></p>
					        		<br>
					        		<p class="">ID type: <span class="fw-bold"><?php echo $row["uplidtype"] ?></span></p>
					        		<br>
					        		
					        	</div>
					        	<div class="col-lg-6">
					        		 <p class="">Business Permit Numbers: <span class="fw-bold"><?php echo $row["id_no"] ?></span></p>
					        		 <img class=" img-fluid" src=" ../partners/uploads/<?php echo $row["picpath"] ?>" style="height: 300px;">
					        	</div>
					        </div>
					      </div>
      					<div class="modal-footer">
      						
      							
      								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Decline</button>   						  							
      								<button type="button" class="btn btn-primary">Accept</button>
      						
      					
      					</div>
				       
				        
					      </div>
					    </div>
					  </div>
					</div>
	        <?php } ?>
	      </table>
	    </div>
  	</div>
  </div>




</body>
</html>


<?php 
}else{
  header("Location: signinAll.php");
} ?>