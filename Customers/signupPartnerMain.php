<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iCargo Pacific</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="iCargo Pacific Partner Logistics Website" name="keywords">
    <meta content="iCargo Pacific Partner Logistics Website" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
<style>
    p {
        font-size :12px;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="partnerSignupValidation/signupPartnerValidation.js"></script>
<body class="grad">

      
    <!--Track Parcel Start -->
    <div class="container-fluid pt-5 p-1">
         <div class="container position-relative bg-light p-3 shadow p-3 mb-5 col-md-7 bordera">
             <div class="text-center pb-2">
                 <br>
                 <h1 class="text-dark">Be an <span class="text-primary">iCargo</span><span class="text-warning"> Partner</span> today!</h1>
             </div>
                    <div class="align-items-right text-right p-2 m-4">
                        <form action="partnerSignupValidation/signupPartner.php" method="post" class="signupPartner">
                            <h6 class="text-left text-dark">First Name <span class="text-danger">*</span></h6>
                            <div class="form-group text-center d-flex align-items-center">
                                <input name="firstname" type="text" class="form-control border-0 p-4 shadow bg-secondary" placeholder="First Name" required="required" />
                            </div>
                            <p id="firstnameStatus" class="text-left text-danger"></p>
                            <h6 class="text-left text-dark">Last Name <span class="text-danger">*</span></h6>
                            <div class="form-group text-center d-flex align-items-center">
                                <input name="lastname" type="text" class="form-control border-0 p-4 shadow bg-secondary" placeholder="Last Name" required="required" />
                            </div>
                            <p id="lastnameStatus" class="text-left text-danger"></p>
                            <h6 class="text-left text-dark">Email <span class="text-danger">*</span></h6>
                                <div class="form-group text-center d-flex align-items-center">
                                    <input name="email" id="email" type="text" class="form-control border-0 p-4 shadow bg-secondary" placeholder="Email Address" required="required" />
                                </div>
                                <p id="emailStatus" class="text-left text-danger"></p>
                                <h6 class="text-left text-dark">Contact Number <span class="text-danger">*</span></h6>
                                <div class="form-group text-center d-flex align-items-center">
                                    <input name="contact_no" type="text" class="form-control border-0 p-4 shadow bg-secondary" placeholder="Contact Number" required="required" />
                                </div>
                                <p id="contactStatus" class="text-left text-danger"></p>
                            <h6 class="text-left text-dark">Password <span class="text-danger">*</span></h6>
                                <div class="form-group text-center d-flex align-items-center">
                                    <input name="Password"  id="Password" type="password" class="form-control border-0 p-4 shadow bg-secondary" placeholder="Password" required="required" />
                                </div>
                                <p id="passwordStatus" class="text-left text-danger"></p>
                            <h6 class="text-left text-dark">Re-type Password <span class="text-danger">*</span></h6>
                                <div class="form-group text-center d-flex align-items-center">
                                    <input name="confirmpass" id="confirmpass" type="password" class="form-control border-0 p-4 shadow bg-secondary" placeholder="Re-type Password" required="required" />
                                </div>
                                <p class="text-left text-danger" id="confirmStatus"></p>
                    </div>
                    <h5 class="p-2 text-dark text-center">Already have an account?<a class="font-weight-normal text-primary" href="signinAll.php"> Sign in.</a></h5>
                    <div class="text-center">
                        <br>
                        <a href="../signupTypes.html" class="btn btn-light shadow text-dark font-weight-bold">ㅤBackㅤ</a>
                        <!--<a href="#" class="btn btn-primary shadow text-light font-weight-bold">ㅤSign Upㅤ</a>-->
                        <button type="submit" name="submit" class="btn btn-warning shadow text-light font-weight-bold">ㅤSign Upㅤ</button>
                        </div>
                        <br>
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