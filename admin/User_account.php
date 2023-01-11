<?php 

include "../admin/db_connect.php";

session_start();

if(isset($_SESSION['id'])) {
$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM staff_users WHERE id = '$id'");
$rows = mysqli_fetch_assoc($sql); ?>

<html>
<head>


  <!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<!-- ICON latest -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

 <!-- javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
  

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
			<div class="container">
	        <p class="fs-2 fw-bold text-center mt-3"> USER PROFILE</p>
	        <hr>

	       <div class="row justify-content-evenly">
	       	<div class="col-lg-5">
	       		<h4 class="text-center">Details</h4> <hr>
	       		<h4 class="">Role:</h4>
	       		<input class="form-control text-secondary fs-4 text-center mb-2" type="text" name=""
            disabled value="<?php  if($_SESSION['role'] == 1)
            {
             echo "Administrator";
            }
             elseif($_SESSION['role'] == 2)
             {
                echo "Staff";
             }
             elseif($_SESSION['role'] == 3)
             {
              echo "Intern";
             }
             else
             {
                header("Location: index.php?error=Invalid Access!");
             }
          ?>">
	       		<h4 class="">Full Name:</h4>
	       		<input class="form-control text-secondary fs-4 text-center mb-2" type="text" name="" disabled value="<?= $rows['firstname'] . " " . $rows['lastname']?>">
	       		<h4 class="">Email:</h4>
	       		<input class="form-control text-secondary fs-4 text-center mb-2" type="email" id="email" disabled value="<?= $rows['email'] ?>">

	       	</div>
	       	<!-- <div class="col-lg-2"></div> -->
	       	<div class="col-lg-5">
	       		<h4 class="text-center">Change Password</h4> <hr>
				<div class="alert alert-success" id="success-alert">
					<div class="d-flex justify-content-center">
						<strong id="msg">Password Update Successfully</strong>
					</div>
				</div>
	       		<h4 class="">Old Password:</h4>
	       		<input class="text form-control text-secondary fs-4 text-center mb-2" type="password" id="old_password" tabindex="1">
				   <p id="old_password_error" class="error"></p>
	       		<h4 class="">New Password:</h4>
	       		<input class="text form-control text-secondary fs-4 text-center mb-2" type="password" id="password" tabindex="2">
				   <p id="password_error" class="error"></p>
	       		<h4 class="">Re-type New Password:</h4>
	       		<input class="text form-control text-secondary fs-4 text-center mb-2" type="password" id="conform_password"tabindex="3">
				   <p id="confirm_password_error" class="error"></p>
	       		<button id="update_password_btn" class=" btn btn-lg btn-primary my-3 float-end" tabindex="4">Save</button>
				   <p id="error1" class="error" hidden></p>
	       	</div>
	       </div>
	    </div>
  	</div>
  </div>

</body>
</html>


<?php 
}else{
  header("Location: index.php");
} ?>

<script>
	$("#success-alert").hide();

    $('body').on('keydown', 'input, select', function(e) {
		 
        if (e.key === "Enter") {
        e.preventDefault();
        var $next = $('[tabIndex=' + (+this.tabIndex + 1) + ']');
        console.log($next.length);
        if (!$next.length) {
            $next = $('[tabIndex=1]');
        }
        $next.focus();
        }
    });
</script>