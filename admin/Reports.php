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

<header class="navbar  navbar-dark sticky-top bg-dark flex-wrap border-bottom border-secondary" >
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
        <h2 class="fw-bold text-center my-3">REPORTS</h2>
        <hr>
       <div class="row justify-content-evenly">
         <div class="col-lg-4 border-end ">

           <p class="lead">Daily profit: <span class="fw-bold">
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
                ?></span></p>
           <p class="lead">Weekly profit: <span class="fw-bold">
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
                   ?>
           </span></p>
           <p class="lead">Total profit: <span class="fw-bold">
                <?php
                $sql = mysqli_query($conn, "SELECT SUM(total_amount) FROM orders WHERE status ='Delivered'");
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
                ?>
           </span></p>
         </div>
         <div class="col-lg-4 border-end">
           <p class="lead">Daily order: <span class="fw-bold">
                <?php
                $currentdate = date('m/d/Y');
                $sql = mysqli_query($conn, "SELECT COUNT(order_number) FROM orders WHERE date_booked ='$currentdate'");
                $row = mysqli_fetch_assoc($sql);

                $total = $row['COUNT(order_number)'];

                if(!empty($total))
                {
                  echo $total;
                }
                else
                {
                  echo "0";
                }
                ?>
           </span></p>
           <p class="lead">Weekly order: <span class="fw-bold">
                  <?php 
                  $startOfWeek = date("m/d/Y", strtotime("Monday this week"));

                    $date1 = date("m/d/Y", strtotime($startOfWeek . " + 0 day"));
                    $date2 = date("m/d/Y", strtotime($startOfWeek . " + 6 day"));

                    $sql = mysqli_query($conn, "SELECT COUNT(order_number)  FROM orders WHERE date_booked BETWEEN '$date1' and '$date2'");
                    $row1 = mysqli_fetch_assoc($sql);
                    $total = $row1['COUNT(order_number)'];
                    if(!empty($total))
                    {
                      echo $total;
                    }
                    else
                    {
                      echo "0";
                    }
                   ?>
           </span></p>
           <p class="lead">Total order: <span class="fw-bold">
                <?php
                $sql = mysqli_query($conn, "SELECT COUNT(date_booked) FROM orders");
                $row = mysqli_fetch_assoc($sql);

                $total = $row['COUNT(date_booked)'];

                if(!empty($total))
                {
                  echo $total;
                }
                else
                {
                  echo "0";
                }
                ?>
           </span></p>
         </div>
          <div class="col-lg-4">
            <p class=" lead text-center  border border-secondary rounded-pill">Specific date of Profit</p>
           <div class="row mb-3">
              <div class="col-lg-6">
              <label>Select date:</label>
           <input  type="date" id="date1">
            </div>
           <div class="col-lg-6">
             <label>Select date:</label>
           <input  type="date" id="date2">
           </div>
           </div>
           <div class="row justify-content-center">
             <div class="col-lg-8 text-center">
               <h4 id="total_ammount" class="border-bottom border-dark">₱0</h4>
               
               <p class="text-muted">Total Amount</p>
             </div>
           </div>
         </div>
       </div>
       <hr>
       <div id="chart_div" class=" table table-responsive " style="height:600px; width: 1200px; ">
      
      </div>
      </div>
    </div>
  </div>

 

</body>
</html>



  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

 


<script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Orders');

     var data = google.visualization.arrayToDataTable([
          ['Date', 'Orders'],
          <?php
            $query="SELECT date_booked, count(*) as number FROM orders GROUP BY date_booked";
            $res=mysqli_query($conn,$query);
            while($data=mysqli_fetch_array($res)){
              $assignto=$data['date_booked'];
              $number=$data['number'];
             //$expenses=$data['expenses'];
              //$profit=$data['profit'];
      
           ?>
           ['<?php echo $assignto;?>',<?php echo $number;?>],
       
           <?php   
            }
           ?> 
        ]);

      var options = {
        hAxis: {
          title: 'Date'
        },
        vAxis: {
          title: 'Order'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
</script>


<?php 

}else{
  header("Location: signinAll.php");
}

 ?>