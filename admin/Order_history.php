<?php 
include "../admin/db_connect.php";

session_start();

if(isset($_SESSION['id'])) {
$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM staff_users WHERE id = '$id'");
$rows = mysqli_fetch_assoc($sql);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>




  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- BS5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- BS5 Popper and JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- ICON latest -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
 
 <!-- javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</head>


<body class="" style="background-color: #d4d4d4;" >




<!-- NAVIGATION BAR -->

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
        <h2 class="fw-bold text-center my-3">ORDER HISTORY</h2>
        <hr>
         <div id="searchbar" class="row justify-content-end">
          <div class="col-lg-5">
              <div class="input-group mb-2">
            <label class="input-group-text" for="inputGroupSelect04">Search Filter</label>
          <select class="form-select" id="sender" aria-label="Example select with button addon">
            <option selected value="all">Choose...</option>
            <?php 
            $result = mysqli_query($conn,"SELECT DISTINCT sender FROM orders");
            while($rows = mysqli_fetch_assoc($result)){
            ?>
            
            <option value="<?php echo $rows['sender']?>"><?php echo $rows['sender']?></option>
            <?php } ?>
          </select>
          
          <a class="btn btn-outline-secondary" type="button" id="search_sender">Search</a>
        </div>
          </div>
        </div>
        <div class="col-12 table-responsive ">
          <table id="table" class="table table-secondary table-striped table-hover">
            <thead>
              <th>#</th>
              <th>Tracking Number</th>
              <th>Sender</th>
              <th>Tracking Type</th>
              <th>Cargo Type</th>
              <th>Cargo Service</th>
              <th>Total Amount</th>
              <th>Date Booked</th>
            </thead>
            <tbody>
            <?php 

            $result = mysqli_query($conn,"SELECT * FROM orders");

            while($rows = mysqli_fetch_assoc($result)){

             ?>
              <td><?php echo $rows['order_number'] ?></td>
              <td><?php echo $rows['tracking_number'] ?></td>
              <td><?php echo $rows['sender'] ?></td>
              <td><?php echo $rows['tracking_type'] ?></td>
              <td><?php echo $rows['cargo_type'] ?></td>
              <td><?php echo $rows['cargo_service'] ?></td>
              <td><?php echo $rows['total_amount'] ?></td>
              <td><?php echo $rows['date_booked'] ?></td>
            </tbody>
          <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </div>

 

</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 

 
<script type="text/javascript">
$(document).ready(function() {
 //setInterval(runningTime,);
});
function runningTime() {
  $.ajax({
    url: 'time.php',
    success: function(data) {
       $('#runningTime').html(data);
     },
  });
}
</script>


<?php 

}else{
  header("Location: signinAll.php");
}

 ?>