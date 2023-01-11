<?php
require_once('config.php');

 $query="SELECT * from orders where status='Cancelled'";
// $resultSet= $conn->query("SELECT date_cancel FROM orders");
$result=mysqli_query($conn,$query);


//     while($row=mysqli_fetch_assoc($result))
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iCargo Pacific</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="iCargo Pacific Partner Logistics Website" name="keywords">
    <meta content="iCargo Pacific Partner Logistics Website" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://pagecdn.io/lib/easyfonts/roboto.css" rel="stylesheet" />
    <!-- Font Awesome -->


    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./customers.css" rel="stylesheet">
</head>

<body class="bg-secondary">

    <!-- Main Navbar Start -->
        <nav class="navbar sticky-top navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5 shadow p-3 bg-white">
            <a href="..\NewOrder.php" class="navbar-brand ml-lg-3">
                <h2 class="m-0 display-5 text-primary"><img src="../img/icargologo.png" />ㅤiCargo <span class="text-warning">Pacific</span></h2>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0 d-flex justify-content-end align-items-right">
                    ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                    <div class="nav-item dropdown d-inline-flex"> 
                        <img src="../img/usericon.png" style="width: 30px; height: 30px;" /><a href="#" data-toggle="dropdown" class="text-dark nav-link dropdown-toggle user-action"> username</a>
                          <div class="dropdown-menu" style="display: false">
                              <a href="#" class="dropdown-item"><i class="fa fa-box" aria-hidden="true"></i> New Booking</a>
                              <a href="./customerOngoingOrders.php" class="dropdown-item"><i class="fa fa-book" aria-hidden="true"></i> Orders</a>
                              <a href="#" class="dropdown-item"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
                          <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Sign Out</a>
                          </div>
                      </div>
            </div>
            </div>
        </nav>
    <!-- Main Navbar End -->

    <!-- Blue Navbar Start -->
    <nav class="navbar navbar-expand-lg py-3 py-lg-0 px-lg-5 shadow" style="background-color: #1b508e">
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0 d-flex align-items-left">   
               
                    <h4 class="m-0 display-5 text-light p-3 font-weight-normal">Orders</h4>
         
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0 d-flex align-items-right">   
                
                <!-- Search form -->
                <div class="input-group rounded align-items-right">
                    ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                      <i class="fas fa-search"></i>
                    </span>
                  </div>
         
        </div>
    </nav>
<!-- Blue Navbar End -->

  <!-- Buttons Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-light py-3 py-lg-0 px-lg-5 shadow bg-light">
    <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
        
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0 align-items-center">
                <h5 class="font-weight-light"><a href="./customerOngoingOrders.php" class="nav-item nav-link" style="color: #1b508e">Ongoing</a></h5>
                ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                <h5 class="font-weight-light"><a href="./customerCompletedOrders.php" class="nav-item nav-link" style="color: #1b508e">Completed</a></h5>
                ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                <h5 class="font-weight-light"><a href="./customerCancelledOrder.php" class="nav-item nav-link active font-weight-bold" style="color: #1b508e;">Cancelled</a></h5>
            </div>  
        </div>
    </div>
</nav>
<!-- Buttons Navbar End -->
<br><br>
        <?php 
while($rows=mysqli_fetch_assoc($result))
{
 ?>
<table class="table table-bordered align-items-center p-2 col-md-6 bg-light shadow" style="margin-left: 340px">
    <thead style="background-color: #1b508e">

      <tr>
        <th scope="col" class="text-light d-inline-flex"><h4 class="text-light"><?php echo $rows['date_cancel'] ?> </h4>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</th>
      </tr>
    </thead>




    <tbody>
      <tr>
        <th scope="row">ㅤㅤㅤㅤㅤㅤ<span class="fa fa-map-marker text-warning">Pick up:&nbsp&nbsp&nbsp&nbsp</span> <?php echo $rows['pick_up_point'] ?></th>
      </tr>
      <tr>
        <th scope="row">ㅤㅤㅤㅤㅤㅤ<span class="fa fa-bullseye text-warning">Drop-off:&nbsp&nbsp&nbsp&nbsp</span> <?php echo $rows['drop_off_point'] ?></th>
      </tr>
      <tr>
        <th scope="row" class="bg-success">ㅤㅤㅤㅤㅤㅤ<span class="text-dark"><?php echo $rows['cargo_service'] ?></span>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ<span style="color: #1b508e">PHP:<?php echo $rows['total_amount'] ?></span></th>
      </tr>
    </tbody>
        <?php 
    } ?>
  </table>
  <br><br>

  <!-- <table class="table table-bordered align-items-center p-2 col-md-6 bg-light shadow" style="margin-left: 340px">
    <thead style="background-color: #1b508e">
      <tr>
        <th scope="col" class="text-light d-inline-flex"><h4 class="text-light">ㅤㅤMarch 25, 2022ㅤ3:00pm</h4>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">ㅤㅤㅤㅤㅤㅤ<span class="fa fa-map-marker text-warning"></span> House No., Street, Barangay, City, Country, Postal Code</th>
      </tr>
      <tr>
        <th scope="row">ㅤㅤㅤㅤㅤㅤ<span class="fa fa-bullseye text-warning"></span> House No., Street, Barangay, City, Country, Postal Code</th>
      </tr>
      <tr>
        <th scope="row" class="bg-success">ㅤㅤㅤㅤㅤㅤ<span class="text-dark">Truck</span>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ<span style="color: #1b508e">P424</span></th>
      </tr>
    </tbody>

  </table> -->
  
   <!-- Footer Start -->
   <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-warning mb-4">Contact Us</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>1616 Celadon Park, Manila, Philippines</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>(+63)9176924203</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@icargo.ph</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="https://www.facebook.com/icargooo"><i class="fab 
fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" 
href="https://ph.linkedin.com/company/icargopacific?trk=public_profile_topcard-current-company"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="https://www.instagram.com/icargopacific/?utm_medium=copy_link"><i 
class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" 
href="https://twitter.com/icargopacific?s=21&t=cD4qXgnFpDmODlveVnn6pg&fbclid=IwAR3zggvYS3QFm0VVVnNFIM_cj1_kc7h4VtEL8Yaaq8ae83DXne2woVXm1UM"><i class="fab 
fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-warning mb-4">Learn More</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="../index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="../index.html#services"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="../index.html#partnership"><i class="fa fa-angle-right mr-2"></i>Partnership</a>
                            <a class="text-white mb-2" href="../getquote.html"><i class="fa fa-angle-right mr-2"></i>Instant Quote</a> 
                            <a class="text-white mb-2" href="../tracks.php"><i class="fa fa-angle-right mr-2"></i>Track</a>             
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-warning mb-4">Subscribe to our Newsletter</h3>
                <p>Let's GO beyond logistics, make the world go round and revolutionize business.</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control1 border-light" style="padding: 30px;" placeholder="Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary1 px-4"><a href="../error404.html" class="btn btn-primary1">Sign Up</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-warning">&copy; <a href="./index.html">iCargo Pacific</a>. <span class="text-white">All Rights Reserved.</span>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</div>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/pageland.js"></script>
</body>
</html>
