<?php

session_start();

if (!isset($_SESSION['email'])) {

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/landpage.css" rel="stylesheet">
</head>

<body class="grad">

      
     <!--Track Parcel Start -->
     <div class="container-fluid pt-5 p-1">
        <div class="container position-relative bg-light p-3 shadow p-3 mb-5 col-md-7 bordera">
            <div class="text-center pb-2">
                <br>
                <h1 class="text-dark">Sign in to <span class="text-primary">iCargo</span><span class="text-warning"> Pacific</span></h1>
            </div>
                    <div class="align-items-right text-right p-2 m-4">
                        
                        <form action="Validated_Login.php" method="post" class="text-center">
                            <h6 class="text-left text-dark" >Email</h6>
                            <div class="form-group text-center d-flex align-items-center">
                                <input type="email" name="email"  class="form-control border-0 p-4 shadow bg-secondary" placeholder="Email" required="required" />
                            </div>
                            <h6 class="text-left text-dark">Password</h6>
                            <div class="form-group text-center d-flex align-items-center">
                                <input name="password" type="password" class="form-control border-0 p-4 shadow bg-secondary" placeholder="Password" required="required" />
                            </div>
                    </div>
                    <h5 class="p-0 m-0 text-dark text-right font-weight-normal"><a href="ResetPasswordOut.php" class="text-primary">Forgot password?ㅤㅤ</a></h5>
                    <div class="text-center">
                        <br>
                        <a href="../signinTypes.html" class="btn btn-light shadow text-dark font-weight-bold">ㅤBackㅤ</a>

                        <button class="btn btn-warning shadow text-light font-weight-bold" type="submit" name="form-submit">ㅤSign Inㅤ</button>
                       
                        </div>
                    </form>
                        <h5 class="p-4 text-dark">Don’t have an account yet?<a class="font-weight-normal text-primary" href="signupPartnerMain.php"> Sign up now.</a></h5>
                </div>
            </div>
        </div>
        <br>
    </div>
    <!-- About Us End -->


  <!-- Back to Top Button -->
  <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="../mail/jqBootstrapValidation.min.js"></script>
  <script src="../mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="../js/pageland.js"></script>
</body>
</html>




<?php 
}else
{
    header("location: Dashboard.php");
} 
?>