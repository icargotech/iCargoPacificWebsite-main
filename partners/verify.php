
<?php 
include "../admin/db_connect.php";

session_start();


if (isset($_SESSION['id'])) 
{
$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM signup_partners_users WHERE id = '$id'");
$rows = mysqli_fetch_assoc($sql);
$emailll = $rows['email'];


//echo $emailll;

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
</head>

<body class="bg-secondary">

      
    <!-- About Us Start -->
    <div class="container-fluid bg-secondary p-0 my-5">
        <div class="container">
            <div class="row align-items-center text-center">   
                <div class="col-lg-5 p-0">
                    <div class="signimg">
                    <img class="img-fluid w-100 float-md-left p-0" src="../img/signup_partner.jpg" alt="" !important>
                </div>    
            </div>
                <div class="col-lg-7 py-5 py-lg-0 mt-2 align-items-center text-center">
                    <div class="d-inline-flex">
                        <h1 class="text-dark">Become a<span class="text-primary"> Verified</span><span class="text-warning"> Partner</span> now.</h1>
                    </div><br>
                    <div class="align-items-right text-right p-1 m-4">



                        <form action="upload.php" method="post" enctype="multipart/form-data" class="text-center">

                            
                                    <input name="com_ema" type="hidden" class="form-control border-0 p-4 bg-light shadow bg-secondary" placeholder="Company Email" required="required" value=<?php echo $emailll; ?> />
                               

                            <h6 class="text-left text-dark">Company Name</h6>
                            <div class="form-group text-center d-flex align-items-center">
                                <input name="com_name" type="text" class="form-control border-0 p-4 bg-light shadow bg-secondary" placeholder="Company Name" required="required" />
                            </div>
                            <h6 class="text-left text-dark">Company Address</h6>
                            <div class="form-group text-center d-flex align-items-center">
                                <input name="com_addr" type="text" class="form-control border-0 p-4 bg-light shadow bg-secondary" placeholder="Company Address" required="required" />
                            </div>
                            <h6 class="text-left text-dark">Company Contact No.</h6>
                            
                                
                                ㅤㅤㅤㅤㅤㅤ
                                <div class="form-group text-center d-flex align-items-center">
                                    <input name="com_cont" type="text" class="form-control border-0 p-4 bg-light shadow bg-secondary" placeholder="Contact Number" required="required" />
                                </div>
                           
                            <h6 class="text-left text-dark">Choose Valid ID TypeㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤValid ID Number</h6>
                            <div class="d-inline-flex">
                                


                                <div class="dropdown text-center align-items-center">

                                <select name="uplidtype" id="uplidtype" class="btn btn-secondary dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <option class="dropdown-item" value="Birth Certificate">Birth Certificate</option>
                                    <option class="dropdown-item" value="Passport">Passport</option>
                                    <option class="dropdown-item" value="National ID">National ID</option>
                                    <option class="dropdown-item" value="Driver's License">Driver's License</option>
                                    <option class="dropdown-item" value="Voter's ID">Voter's ID</option>
                                    <option class="dropdown-item" value="UMID">UMID</option>
                                    <option class="dropdown-item" value="SSS">SSS</option>
                                    <option class="dropdown-item" value="PRC">PRC</option>
                                    <option class="dropdown-item" value="Senior Citizen's ID">Senior Citizen's ID</option>
                                    <option class="dropdown-item" value="Postal ID">Postal ID</option>
                                </select>


                                  </div>


                                ㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                                <div class="form-group text-center d-inline-flex align-items-center">
                                    <input name="idnumber" type="text" class="form-control border-0 p-4 bg-light shadow bg-secondary" placeholder="Valid ID Number" required="required" />ㅤ
                                </div>
                            </div>
                            <h6 class="text-left text-dark">Upload photos of ID and Business PermitㅤㅤㅤBusiness Permit Number</h6>
                            <div class="d-inline-flex">
                                <input name="business_perm" class="form-control col-md-6 border-0 p-1 bg-light shadow bg-secondary" type="file" id="formFileMultiple" multiple />
                                <div class="form-group text-center d-flex align-items-center">
                                    ㅤㅤㅤㅤ<input name="buss_perm_num" type="text" class="form-control border-0 p-4 bg-light shadow bg-secondary" placeholder="Business Permit Number" required="required" />ㅤ
                                </div>
                            </div>
                    
                    </div>
                    <div class="text-center">
                        <a href="Dashboard.php" class="btn btn-light shadow text-dark font-weight-bold">ㅤBackㅤ</a>
                        <button type="submit" name="submit" class="btn btn-primary shadow text-light font-weight-bold"> Verify </button>
                        <!--<a type="submit" name="submit" class="btn btn-primary shadow text-light font-weight-bold">ㅤVerifyㅤ</a>-->
                        </div>


                        </form>


                </div>
            </div>
        </div>
        <br>
    </div>
    <!-- About Us End -->


    
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
}
else
{
header("Location: signinAll.php");
} ?>