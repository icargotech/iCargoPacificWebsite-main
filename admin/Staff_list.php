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

 <!-- javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

  
</head>

<body style="background-color: #d4d4d4;">
  
<header class="navbar  navbar-dark sticky-top bg-dark flex-md-nowrap border-bottom border-secondary">
   <button type="button" class="btn btn-outline-warning mx-2" onclick="window.location.href='Dashboard.php';"><i class="bi bi-house-door-fill"></i> Icargo Pacific</button>

<button id="d" class="navbar-toggler d-md-none collapsed" 
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
            <p class="fs-2 fw-bold text-center mt-3">STAFF LIST</p>
            <hr>
				<div class="alert alert-success" id="success-alert">
					<div class="d-flex justify-content-center">
						<strong id="msg">New Account Successfully Added</strong>
					</div>
				</div>
            <div class="row justify-content-between">
              <div class="col-lg-6">
                <button class="btn btn-outline-dark mb-3 fw-bold" data-bs-toggle="modal" data-bs-target="#create">ADD ACCOUNT</button>
              </div>
              <div id="searchbar" class="col-lg-3">
                <div class="input-group mb-2">
                  <label class="input-group-text" for="inputGroupSelect04">Search Filter</label>
                  <select class="form-select" id="role" aria-label="Example select with button addon">
                    <option selected value="all">By ROLE</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Staff">Staff</option>
                    <option value="Intern">Intern</option>
                  </select>
                <a class="btn btn-outline-secondary" type="button" id="search">Search</a>
                </div>
              </div>
            </div>
            <table id="table" class="table table-responsive table-dark table-striped table-hover  shadow-lg">
              <thead class="">
                <tr>
                  <th scope="col-3">Email</th>
                  <th scope="col-2">First Name</th>
                  <th scope="col-1">Last Name</th>
                  <th scope="col-1">Role</th>
                  <th scope="col-2">Status</th>
                  <th scope="col-1">Action</th>
                </tr>
              </thead>
              <tbody>  
              <?php 
              $sql = mysqli_query($conn,"SELECT * FROM staff_users ORDER BY role");
              while($row = mysqli_fetch_assoc($sql)){
               ?>
                <tr>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['firstname'] ?></td>
                <td><?php echo $row['lastname'] ?></td>     
                <td>

                  <?php
                    if($row['role'] == 1 )
                    {
                      echo "Administrator";
                    }
                    elseif ($row['role'] == 2) 
                    {
                      echo "Staff";
                    }
                    else
                    {
                      echo "Intern";
                    }
                  ?>
                </td>
                <td>  <?php

                    if($row['status'] == 1 )
                    {
                      echo "Active";
                    }
                    elseif ($row['status'] == 0) 
                    {
                      echo "Deactivated";
                    }
                    else
                    {
                      echo "BLOCKED";
                    }
                  ?></td>
                <td>
                  <?php 
                  $sts = $row['status'];
                  if ($sts == 1) 
                  {
                   ?>
                   <a href="Staff_update.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-warning"> Disable</a>
                   <?php  
                  }else{
                   ?>
                   <a href="Staff_update.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-warning"> Enable</a>
                 <?php } ?>
                 
                </td>
              </tr>
            <?php } ?>
            </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>

    <!-- CREATE ACCOUNT MODAL -->

<div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-sm-down">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Create New Staff</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="1" class="form-label">Email address</label>
          <input type="email" class="form-control form-control-lg" id="email" placeholder="Name@example.com">
          <p id="email_error" class="error"></p>
        </div>
        <div class="mb-3">
          <label for="1" class="form-label">First Name</label>
          <input type="text" class="form-control form-control-lg" id="fname" placeholder="Andrew">
          <p id="fname_error" class="error"></p>
        </div>
        <div class="mb-3">
          <label for="1" class="form-label">Last Name</label>
          <input type="text" class="form-control form-control-lg" id="lname" placeholder="Dimagiba">
          <p id="lname_error" class="error"></p>
        </div>
         <div class="mb-3">
          <label for="1" class="form-label">Password</label>
          <input type="password" class="form-control form-control-lg" id="password1" >
          <p id="password_error" class="error"></p>
        </div>
        <div class="mb-3">
          <label for="1" class="form-label">Re-type Password</label>
          <input type="password" class="form-control form-control-lg" id="confirm_password">
          <p id="confirm_password_error" class="error"></p>
        </div>
        <label class="form-label" for="i1">Role type</label>
         <div class="input-group mb-3">
          <label class="input-group-text" for="i1">Options</label>
          <select class="form-select form-select-lg" id="select_role">
            <option selected>Choose...</option>
            <option value="1">Administrator</option>
            <option value="2">Staff</option>
            <option value="3">Intern</option>
          </select>
        </div>
        <p id="select_role_error" class="error"></p>
        <p id="error1" class="error" hidden></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
        <button type="button" class="btn btn-primary" id="create_account">Create Account</button>
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
</script>


