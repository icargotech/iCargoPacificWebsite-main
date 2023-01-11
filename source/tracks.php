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
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/landpage.css" rel="stylesheet">
</head>

<body>
    <!----PAGE NOTICE---------->
    <nav class="navbar navbar-expand-lg py-2 py-lg-0 px-lg-2 shadow p-3 bg-warning text-white">
            <h5 class="text-white font-weight-bold" ><strong>Notice: FOR PROTOTYPE PURPOSES ONLY</strong></h5>
        </nav>

  <!-- Topbar Start -->
  <div class="container-fluid bg-primary">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center text-white">
                <small><i class="fa fa-phone-alt mr-2"></i>0917-692-4203</small>
                <small class="px-3">|</small>
                <small><i class="fa fa-envelope mr-2"></i>info@icargopacific.com</small>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-2" href="https://www.facebook.com/icargooo">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white px-2" href="https://ph.linkedin.com/company/icargopacific?trk=public_profile_topcard-current-company">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-white px-2" href="https://www.instagram.com/icargopacific/?utm_medium=copy_link&fbclid=IwAR383eU4e3t5ENsidF3uvTQr2bofBMH0p1zH2ZPHTLwWL5YHj_PCzGKFepg">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-white px-2" href="https://twitter.com/icargopacific?s=21&amp;t=cD4qXgnFpDmODlveVnn6pg&fbclid=IwAR3zggvYS3QFm0VVVnNFIM_cj1_kc7h4VtEL8Yaaq8ae83DXne2woVXm1UM">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
    <nav class="navbar sticky-top navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5 shadow p-3 bg-white">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h2 class="m-0 display-5 text-primary"><img src="./img/icargologo.png" />ㅤiCargo <span class="text-warning">Pacific</span></h2>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                <a href="index.html" class="nav-item nav-link">Home</a>
                ㅤ
                <a href="index.html#services" class="nav-item nav-link">Services</a>
                ㅤ
                <a href="index.html#partnership" class="nav-item nav-link">Partnership</a>
                ㅤ
                <a href="tracks.php" class="nav-item nav-link active">Track</a>
                ㅤ
                <a href="signinTypes.html" class="nav-item nav-link">Sign In</a>
                ㅤ
            </div>
            <a href="getquote.html" class="btn btn-warning">Book Now</a>
        </div>
    </nav>
<!-- Navbar End -->

<!--Track Parcel Start -->
<div class="grad1">
    <div class="container-fluid pt-5 p-1">
        <div class="container position-relative bg-light p-4 shadow p-3 mb-5 col-md-7 bordera">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold mb-4">Track Your Parcel</h6>
                <h2 class="mb-4 text-dark">Check your parcel’s latest delivery status.</h2>
            </div>
            <div class="align-items-center px-4 px-sm-5">
                <form class="text-center">
                    <h6 class="text-left text-dark">Tracking Number</h6>
            <form action="tracks.php" method="post">

                    <div class="form-group text-center d-flex align-items-center">
                        <input name="tracknum" type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-5 bg-secondary" placeholder="Tracking Number" required="required" />
                    </div>
<!-- button for track-->

    <input type="submit" name="pokwerq" id="pokwerq" hidden="hidden">
<div class="text-center">
                        
                        <a onclick="document.getElementById('pokwerq').click()" href="tracks.php" class="btn btn-primary shadow shadow p-3 mb-5 font-weight-bold " data-toggle="collapse" data-target="#trackupdates" aria-expanded="false" aria-controls="collapseExample">ㅤTRACKㅤ</a> 
                      
                    </div>
            </form>
            <?php 
 require_once('admin/db_connect.php');

            if(isset($_GET['pokwerq'])){

                $track_nuumb = $_GET['tracknum'];
                $trackingnumb = mysqli_real_escape_string($conn,$track_nuumb);
                //echo"$track_nuumb";
                //echo "<script>alert(1);</script>";
                 //echo'<script>alert(1);</script>';
        $sql = "select * from orders where tracking_number='$trackingnumb'";   
        //$sql = "select * from orders where tracking_number='$track_nuumb'";               

        $res = mysqli_query($conn,$sql);


           /* echo
            '
                   
                    <div class="text-center">
                        
                        <a  href="tracks.php" class="btn btn-primary shadow shadow p-3 mb-5 font-weight-bold " data-toggle="collapse" data-target="#trackupdates" aria-expanded="false" aria-controls="collapseExample">ㅤTRACKㅤ</a> 
                      
                    </div>
            ';*/    

             while($row=mysqli_fetch_assoc($res))
            {
                echo '
         
                        <!--Track Parcel Table Start-->

                       <!-- for class collapse position-relative bg-light p-4 shadow p-3 mb-5 bordera -->
                        <div class="" id="trackupdates">
                            <div class="d-inline-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/person3.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="font-weight-semi-bold m-0 text-dark">'.$row["driver"].'</h6>
                                    <small>AllGood Logistics '.$row["recipient"].'</small>
                                </div>
                                ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                                <div class="ml-3">
                                    <h6 class="font-weight-semi-bold m-0 text-dark">Tracking Number:</h6><small class="text-primary font-weight-bold">'.$row["tracking_number"].'</small>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Date & Time</th>
                                    <th scope="col">Parcel Status</th>
                                    <th scope="col">Location</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">'.$row["date_of_delivery"].'</th>
                                    <td>'.$row["status"].'</td>
                                    <td>'.$row["drop_off_point"].'</td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="col-lg-5 pb-4 pb-lg-0">
                                <iframe style="width: 100%; height: 300px; width: 570px;"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31502.761314967258!2d123.61828978509725!3d9.258128142657112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ab17cb6e359825%3A0x4408a8be27aeca0c!2sSiquijor%20Island!5e0!3m2!1sfil!2sph!4v1647248260466!5m2!1sfil!2sph"
                                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                          </div>
                          ';    

            }

            }

       

           
               
        ?>
                          <!--Track Parcel Table End-->

                </form>
                
            </div>
        </div>
    </div>
<!--Track Parcel End -->              







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
                        <a class="btn btn-outline-light btn-social mr-2" href="https://www.facebook.com/icargooo"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mr-2" href="https://ph.linkedin.com/company/icargopacific?trk=public_profile_topcard-current-company"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mr-2" href="https://www.instagram.com/icargopacific/?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mr-2" href="https://twitter.com/icargopacific?s=21&t=cD4qXgnFpDmODlveVnn6pg&fbclid=IwAR3zggvYS3QFm0VVVnNFIM_cj1_kc7h4VtEL8Yaaq8ae83DXne2woVXm1UM"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <h3 class="text-warning mb-4">Learn More</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-white mb-2" href="index.html#services"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                        <a class="text-white mb-2" href="index.html#partnership"><i class="fa fa-angle-right mr-2"></i>Partnership</a>
                        <a class="text-white mb-2" href="getquote.html"><i class="fa fa-angle-right mr-2"></i>Instant Quote</a> 
                        <a class="text-white mb-2" href="tracks.php"><i class="fa fa-angle-right mr-2"></i>Track</a>             
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
                    <button class="btn btn-primary1 px-4"><a href="error404.html" class="btn btn-primary1">Sign Up</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-warning">&copy; <a href="index.html">iCargo Pacific</a>. <span class="text-white">All Rights Reserved.</span>
            </p>
        </div>
    </div>
</div>
<!-- Footer End -->
</div>

    <!-- Back to Top -->
    <a href="tracks.php" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


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

    <script>
    $(".modalButton").on('click',function(){
        var id =$(this).data('id');
        
        $.ajax({
            url:"ajax.php",
            method:"post",
            data:{id:id},
            success:function(response){
                $(".modal-body").html(response);
                $("#dynamicModal").modal('show');

            }
        })


    </script>
</body>

</html>
