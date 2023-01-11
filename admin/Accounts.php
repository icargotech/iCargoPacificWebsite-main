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
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <p class="fs-2 fw-bold text-center mt-3">ACCOUNT LIST</p>
            <hr>
            <table class="table table-responsive table-light table-striped table-hover shadow-lg">
              <thead class="table-dark">
                <tr>
                  <th scope="col-3">Email</th>
                  <th scope="col-2">First Name</th>
                  <th scope="col-1">Last Name</th>
                  <th scope="col-1">Contact No.</th>
                  <th scope="col-1">Company</th>    
                  <th scope="col-1">Verify</th>
                  <th scope="col-1">Action</th>
                </tr>
              </thead>

              <?php 

              $sql = mysqli_query($conn,"SELECT partner_verify.id, partner_verify.company_email, signup_partners_users.firstname, signup_partners_users.lastname, partner_verify.company_no, partner_verify.company_name, partner_verify.comp_addr, partner_verify.verify FROM signup_partners_users INNER JOIN partner_verify ON signup_partners_users.email = partner_verify.company_email");
              while($row = mysqli_fetch_assoc($sql)){
               ?>

              <tbody>
                <td><?php echo $row['company_email'] ?></td>
                <td><?php echo $row['firstname'] ?></td>
                <td><?php echo $row['lastname'] ?></td>
                <td><?php echo $row['company_no'] ?></td>
                <td><?php echo $row['company_name'] ?></td>
                <td><?php echo $row['verify'] ?></td></td>
                <td><button data-bs-toggle="modal" data-bs-target="#view<?=$row['id'] ?>">View</button></td>
              </tbody>

            <?php include "Account_MODAL.php"; } ?>

            </table>

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