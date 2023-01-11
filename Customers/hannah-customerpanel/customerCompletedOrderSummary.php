<?php
require_once('config.php');

if(isset($_POST['subid']))
{
    $ord_id = $_POST['subid'];
    $query="SELECT * from orders where order_number='$ord_id'";
    $result=mysqli_query($conn,$query);
    //echo "<h1> $ord_id </h1>";
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
            <a href="./customerCompletedOrders.php" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-dark fa fa-arrow-left"></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0 d-flex justify-content-end align-items-center">
                    
                    <div class="nav-item dropdown d-inline-flex"> 
                        <h2 class="text-dark">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤOrder #<?php echo $ord_id ?>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ<a class="fa fa-info-circle text-warning" href="./customerHelpCenter.html"></a></h2>
                      </div>
            </div>
        </nav>
    <!-- Main Navbar End -->
        <?php 
while($rows=mysqli_fetch_assoc($result))
{
 ?>
     <!-- Blue Navbar Start -->
     <nav class="navbar navbar-expand-lg py-3 py-lg-0 px-lg-5 shadow" style="background-color: #1b508e">
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0 d-flex align-items-left">   
                    <h4 class="m-0 display-5 text-light p-3 font-weight-normal">Order Summary - <?php echo $rows['date_delivered'] ?> </h4>
            </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0 d-flex align-items-right">   
        </div>
    </nav>
<!-- Blue Navbar End -->

<!--Order Summary Start-->
<div class="container-fluid py-5 px-sm-3 px-md-5 bg-light">
            <div class="row pt-5">
                <div class="col-lg-7 col-md-6">
                    <div class="row">
                        <div class="col-md-12 mb-5 m-3">
                            <h5 class="text-dark"><span class="font-weight-bold">Sender:</span> <?php echo $rows['sender'] ?></h5>
                            <h5 class="text-dark"><i class="fa fa-map-marker-alt mr-2 text-warning"></i><?php echo $rows['pick_up_point'] ?></h5>
                            <h5 class="text-dark"><i class="fa fa fa-phone mr-2 text-warning mb-4"></i><?php echo $rows['sender_no'] ?></h5>

                            <h5 class="text-dark"><span class="font-weight-bold">Recipient:</span> <?php echo $rows['recipient'] ?></h5>
                            <h5 class="text-dark"><i class="fa fa-bullseye mr-2 text-warning"></i><?php echo $rows['drop_off_point'] ?></h5>
                            <h5 class="text-dark"><i class="fa fa fa-phone mr-2 text-warning mb-4"></i><?php echo $rows['recipient_no'] ?></h5>
                        </div>      
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mb-5 position-relative bg-secondary rounded p-4 shadow shadow">
                    <h3 class="text-dark mb-4">Assigned courier</h3>
                    <div class="w-100 d-inline-flex">
                        <div class="col-md-3">
                        <img class="img fluid" src="../img/usericon.png" style="width: 50px; height: 50px; margin-left: 20px;"  />
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-dark font-weight-bold"> <?php echo $rows['driver'] ?></h5>
                        <h5 class="text-dark font-weight-normal"><?php echo $rows['part_comp_name'] ?></h5>
                    </div>     
                    <div class="col-md-3">
                        <a class="btn btn-outline-warning btn-social mr-2" href="#"><i class="fa fa-phone"></i></a>
                    </div> 
                    <br> 
                    
                </div>
                <hr class="text-dark">
                <h5 class="text-dark"><span class="font-weight-bold">Parcel Status:</span> <?php echo $rows['status'] ?></h5>
            </div>
        </div>
       <div class="row pt-5">
            <div class="col-lg-5 col-md-6 mb-5 position-relative bg-secondary rounded p-4 shadow shadow">
                <img class="img-fluid" src="../img/parcs.jpg" style="width: 500px; height: 300px;"/>     
            </div>
                <div class="col-lg-7 col-md-6">
                    <div class="row">
                        <div class="col-md-12 mb-5 m-3">
                            <div class="d-inline-flex text-center">
                                <h5 class="text-dark"><span class="font-weight-bold">Dimensions:</span></h5>
                                ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                                <h5 class="text-dark"><span class="font-weight-bold">Cargo Type:</span></h5>
                            </div>
                            <div class="d-inline-flex">
                                <h3 class="text-dark"> <?php echo $rows['dimension'] ?></h3>
                                ㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                                <h3 class="text-dark"><?php echo $rows['cargo_type'] ?></h3>
                            </div>   
                          <br><br>
                            <div class="d-inline-flex text-center">
                                <h5 class="text-dark"><span class="font-weight-bold">Weight:</span></h5>
                                ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                                <h5 class="text-dark"><span class="font-weight-bold">Cargo Service:</span></h5>
                            </div>
                            ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                            <div class="d-inline-flex">
                                <h3 class="text-dark"><?php echo $rows['weight'] ?></h3>
                                ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                                <h3 class="text-dark"><?php echo $rows['cargo_service'] ?></h3>
                            </div>   
                            <br><br>
                            <h5 class="text-dark"><span class="font-weight-bold">Remarks: </span> These are fragile items. Please handle with care. Contact me once you arrive at our address. Please beware of our dog. Do not hesitate to ring our doorbell. Please state your name and affiliation before our designated house caretaker. Confirm the order number and other details.</h5>
                            </div>     
                        </div>      
                    </div>
                </div>    
 <!--Order Summary End-->  
 <div class="col-md-12 mb-5 m-3">
        
    </div>  
                <!-- Gray Details Start -->
     <nav class="navbar navbar-expand-lg py-3 py-lg-0 px-lg-5 shadow bg-warning">
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0 d-flex align-items-left">   
                    <h4 class="m-0 display-5 text-dark p-3 font-weight-bold">Distanceㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ<?php echo $rows['distance'] ?> </h4>
            </div>
        </div>
    </nav> 
    <nav class="navbar navbar-expand-lg py-3 py-lg-0 px-lg-5 shadow bg-primary">
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0 d-flex align-items-left">   
                    <h4 class="m-0 display-5 text-dark p-3 font-weight-bold">PriceㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤP<?php echo $rows['total_amount'] ?></h4>
                    
            </div>
        </div>
    </nav>   
    <nav class="navbar navbar-expand-lg py-3 py-lg-0 px-lg-5 shadow bg-success">
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0 d-flex align-items-left">   
                    <h4 class="m-0 display-5 text-dark p-3 font-weight-bold">Mode of Paymentㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ<?php echo $rows['MOP'] ?></h4>
                    <?php } }?>
            </div>
        </div>
    </nav>   
<!-- Blue Navbar End -->
                
</body>
</html>
      