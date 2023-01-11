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
    <link href="../css/pageland.css" rel="stylesheet">
    <style>
strong {
  text-align: center;
}
    </style>
</head>

<body class="bg-secondary">

      
    <!-- About Us Start -->
    <div class="container-fluid bg-secondary p-0 my-5">
        <div class="container">
            <div class="row align-items-center text-center">   
                <div class="col-lg-5 p-0">
                    <div class="signimg">
                    <img class="img-fluid w-100 float-md-left p-0" src="../img/signin_partner.jpeg" alt="" !important>
                </div>    
            </div>
                <div class="col-lg-7 py-5 py-lg-0 mt-2 align-items-center text-center">
                    <div class="d-inline-flex">
                        <h1 class="text-dark">Sign in to <span class="text-primary">iCargo</span><span class="text-warning"> Pacific.</span></h1>
                    </div><br>
                        <h5 class="p-4 text-dark text-left font-weight-bold">ㅤㅤㅤㅤEnter your details below.</h5>
                    <div class="align-items-right text-right p-2 m-4">
                        
                        <form action="Validated_Login.php" method="post" class="text-center">
                            <h6 class="text-left text-dark" >Email</h6>
                            <div class="form-group text-center d-flex align-items-center">
                                <input type="email" name="email"  class="form-control border-0 p-4 bg-light shadow bg-secondary" placeholder="Email" required="required" />
                            </div>
                            <h6 class="text-left text-dark">Password</h6>
                            <div class="form-group text-center d-flex align-items-center">
                                <input name="password" type="password" class="form-control border-0 p-4 bg-light shadow bg-secondary" placeholder="Password" required="required" />
                            </div>
                            
                    <div class="row alert alert-danger" id="success-alert">
					<div class="col">
						<strong id="msg"></strong>
					</div>
                    
				</div>
                    </div>
                  
                    <div class="text-center">
                        <br>
                        <a href="" class="btn btn-light shadow text-dark font-weight-bold">ㅤBackㅤ</a>

                        <button class="btn btn-primary shadow text-light font-weight-bold" type="submit" name="form-submit">Sign In</button>
                       
                        </div>
                    </form>
                   
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
 <script>
 $("#success-alert").hide();
 $("#msg").html("Your Account has been Deactivated");
 </script>
<script>
    if("<?php echo $_GET['error'] ?>" ==" deactivated"){
      alert();
      $("#msg").html("Your Account has been Deactivated"); 
    }
    if("<?php echo $_GET['error'] ?>" =="error"){
      alert();
      $("#msg").html("Incorrect Email or Password");    
    }

    
    function alert() {
      $("#success-alert").show();
    }
    
</script>