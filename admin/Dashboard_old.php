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

<?php if ($_SESSION['role'] == 1) 
{
  
 ?>
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

<div class="text-end text-white mx-2"><i class="bi bi-bell-fill"></i> Notification</div>

</header>

<div class="row justify-content-between">

<?php include "Admin_sidebar.php" ?>


    <div class="col-md-3 col-lg-2"></div>

    <!-- Main -->
    <div class="col-lg-10 col-md-9">
      <div class="container-fluid">
        <h2 class="fw-bold text-center my-3">DASHBOARD</h2>
        <hr>
        <div class="row justify-content-evenly">
          <div class="col-lg-4">
            <div class="card text-dark bg-light my-3" >
              <div class="fs-2 card-header">Date</div>
                <div class="card-body">
                <h5 class="fs-4 card-title" id="runningTime"> </h5>
                </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card text-dark bg-light my-3" >
              <div class="fs-2 card-header">Attendance</div>
                <div class="card-body">
                <h5 class="fs-4 card-title">
                  <form action="timein_timeout.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>" >
                  <button type="submit"  name="timein" class="btn btn-outline-secondary float-start ">Time-in</button>
                  <button type="submit"  name="timeout" class="btn btn-outline-secondary float-end ">Time-out</button>
                  </form>
                  </h5>
                </div>
            </div>
          </div>



  

<!-- STATUS -->

          <div class="col-lg-4">
            <div class="card text-dark bg-light my-3" >
              <div class="fs-2 card-header">Status</div>
                <div class="card-body">
                <h5 class="fs-4 card-title">
                  <?php
                    $email = $rows['email'];
                    $result = mysqli_query($conn,"SELECT * FROM attendance_log WHERE email = '$email' ORDER BY timeid DESC LIMIT 1");
                   $row = mysqli_fetch_assoc($result);
                   if(!empty($row['action'])){
                     echo $row['action'];
                   }else{
                     echo "Unavailable";
                   }
                   

          
                  ?> 
                    
                  </h5>
                </div>
            </div>
          </div>

<!-- TOTAL ORDERS -->

          <div class="col-lg-4">
            <div class="card text-dark bg-light my-3" >
              <div class="fs-2 card-header">Total Orders</div>
                <div class="card-body">
                <h5 class="fs-4 card-title">
                  <?php

                  $result = mysqli_query($conn,"SELECT * FROM `orders`");
                  $cc = mysqli_num_rows($result);

                  echo $cc;
                    ?></h5>
                </div>
            </div>
          </div>

<!-- DAILY EARNINGS -->

          <div class="col-lg-4">
            <div class="card text-dark bg-light my-3" >
              <div class="fs-2 card-header">Daily Earnings</div>
                <div class="card-body">
                <h5 class="fs-4 card-title">
                  <?php
                $currentdate = date('m/d/Y');
                $sql = mysqli_query($conn, "SELECT SUM(total_amount) FROM orders WHERE date_delivered ='$currentdate'");
                $row = mysqli_fetch_assoc($sql);

                $total = $row['SUM(total_amount)'];

                if(!empty($total))
                {
                  echo "₱".$total;
                }
                else
                {
                  echo "₱0";
                }
                  ?></h5>
                </div>
            </div>
          </div>

<!-- WEEKLY EARNINGS -->

          <div class="col-lg-4">
            <div class="card text-dark bg-light my-3" >
              <div class="fs-2 card-header">Weekly Earnings</div>
                <div class="card-body">
                <h5 class="fs-4 card-title">
                  <?php 
                  $startOfWeek = date("m/d/Y", strtotime("Monday this week"));

                    $date1 = date("m/d/Y", strtotime($startOfWeek . " + 0 day"));
                    $date2 = date("m/d/Y", strtotime($startOfWeek . " + 6 day"));

                    $sql = mysqli_query($conn, "SELECT SUM(total_amount) FROM orders WHERE date_delivered BETWEEN '$date1' and '$date2'");
                    $row1 = mysqli_fetch_assoc($sql);
                    $total = $row1['SUM(total_amount)'];
                    if(!empty($total))
                    {
                      echo "₱".$total;
                    }
                    else
                    {
                      echo "₱0";
                    }
                   ?></h5>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 

</body>
</html> 
 
<script type="text/javascript">
$(document).ready(function() {
 runningTime();
 setInterval(runningTime,60000);
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
}else
{
  header("Location: signinAll.php");
}
}else{
  header("Location: index.php");
}

 ?>
<script>
  /*
  function showNotification() {
    const notification = new Notification("Partner Verification", {
      body:"There is a new request",
      icon:"http://localhost/v6/icargo-intern/compiled/img/logogo.png"
    });

    notification.onclick = (e) => {
      window.location.href = "Partner_verify.php";
    };
  }
  if(Notification.permission === "granted"){
    showNotification();
  }else if(Notification.permission !== "denied"){
    Notification.requestPermission().then(permission => { 
        if(permission ==="granted"){
          showNotification();
        }
    });
  }
  */
</script>