<?php 
include "../admin/db_connect.php";

session_start();

if(isset($_SESSION['id'])) {
$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM customer_info WHERE ID = '$id'");
$rows = mysqli_fetch_assoc($sql);

 ?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset    = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name       = "viewport" content        = "width=device-width, initial-scale=1.0">
   
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="iCargo Pacific Website Design" name="keywords">
    <meta content="iCargo Pacific" name="description">


   
<!-- Google map Api-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYgMEWArlj3fHMfkLKxFM4o_-j8C6wHgM&libraries=places"></script>
  
  <!-- Favicon -->

  <link href="assets/icargologo.ico" rel="icon">
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://pagecdn.io/lib/easyfonts/roboto.css" rel="stylesheet" />
  <!-- Font Awesome -->

 <!--
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
-->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/landpage.css"  rel="stylesheet">
<!-- Customized Bootstrap Stylesheet
<link href="css/style.css" rel="stylesheet">  

<link rel="stylesheet" href="css/MaterialTextField.css"> -->
<link rel="stylesheet" href="css/SideBarCollapses.css"> 
<link href="css/NewOrderCards.css" rel="stylesheet">
<link href="css/Breadcrumb.css" rel="stylesheet">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<link href="css/Accordion.scss" rel="stylesheet">
<!--
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
-->
  
<!--JQUERY-->
   <title>Order</title>

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mdb.min.css">
<link rel="stylesheet" href="./css/addons/datatables.min.css">

 <!---bootstrap-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
   
<!--JQUERY-->
  
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<!-- CSS-->
<style>




.mergeCon{
width:auto;
height: 20%;
z-index:-3;
}

.title{
    width:70%;
    height:fit-content;
 
   
}

.titleSearch{
right:0px;

}



#nav h5 {
   display: inline-block;
   text-align:center; 
}


.table{
    text-align:center;


}
tr:nth-child(even) {background-color: rgba(0, 6, 10, 0.1);}



body {
  margin: 0;
  font-family: "Roboto";
  font-size: 1rem;
  font-weight: 300;
  line-height: 1.5;
  color: #757575;
  text-align: left;
  background-color: #f3f6fb;
}



.content-container {
  padding-top: 30px;
}



.content-container {
  /*padding-left: 220px;*/
}

html {
height: 100%;
}

.btn btn-primary rounded-pill
    {
      padding: 10px 15px 10px 30px;
    }

.btn btn-primary float-right
{
top:67rem;
}



/* Responsive layout - makes a one column layout instead of a two-column layout */
@media (max-width: 800px) {
  .flex-container {
    flex-direction: column;
  }
}


#spinner-div {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  text-align: center;
  background-color: rgba(255, 255, 255, 0.8);
  z-index: 2;
}

.footer {
    /* position: absolute; */
    bottom: 0;
    width: 100%;
    height: 60px;
    line-height: 60px;
    background-color: #fff;
}

</style>


<body id="body-pd">
    <header class="header shadow" id="header"> 
        <div class="header_toggle d-flex align-items-center "> &nbsp;&nbsp;
        <i class='bx bx-menu' id="header-toggle"></i> &nbsp;&nbsp;&nbsp;   

           <a class="navbar-brand icargo-navbar" href="NewOrder.php"><h2 style="">

          <img  src="assets/icargologo.png" width="70" height="50" alt="" ><font color="#0D7CFF"> iCargo</font> <font color="#FBCD10">Pacific</font></h2></a> 
        </div>

        <!-- <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> -->


            <div class= "d-flex justify-content-end ">
                
           

                <div class="nav-item dropdown"> 
                  <a href="profile.html" data-toggle="dropdown" style="font-size:20px" class="nav-link dropdown-toggle user-action fa fa-user-circle " aria-expanded="false" > username</a>
                    <div class="dropdown-menu" style="display:false ">

                              <a href="verify.php" class="dropdown-item"><i class="fa fa-user-check " aria-hidden="true"></i> Get Verified</a>
                              <a href="ResetPassword.php" class="dropdown-item"><i class="fa fa-cog " aria-hidden="true"></i> Account Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Sign Out</a>
                    </div>
                </div>

            </div>
    </header>


<br>
<br>

    <div class="l-navbar  " id="nav-bar">
        <nav class="nav">

            <div> 
                <br>
                <br>
                <br>

              <!-- <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">ICargo Partners</span> </a> -->
             
                

   
                  <a href="NewOrder.php" class="nav_link active "> <i class='fa fa-plus-square nav_icon'></i> <span class="nav_name " >New Order</span> </a> 
   
                  <a href="hannah-customerpanel/customerOngoingOrders.php" class="nav_link"> <i class='fa fa-box nav_icon'></i> <span class="nav_name">Orders</span> </a> 

                  <a href="Profile.php" class="nav_link"> <i class='fa fa-user nav_icon'></i> <span class="nav_name">Profile</span> </a> 

                  <a href="hannah-customerpanel/customerHelpCenter.html" class="nav_link"> <i class='fa fa-question-circle nav_icon'> </i> <span class="nav_name">Help Center  ㅤㅤㅤ</span> </a> 
                
                 <br>
                 <br>
                 <br>
               
            </div> 

       
           
      
        </nav>
    </div>


    
    <!--Container Main start-->
    <div class="height-100 ">
      <br>  <br>  
      
    
    <!--Container Main end-->
    


   <div class="content-container">
  
      <div class="container-fluid">


        <!-- Content Start -->

            <div class="page title " >
              <h2>
               <a href="NewOrder.php" class="text-decoration-none" > <i class="fa fa-plus-square fa-1x  "></i> <span>New Order</span> </a> 
              </h2>
             <!--  <a class="fa fa-th-large fa-2x  text-decoration-none " href="Dashboard.php"> New Order</a> -->
            </div>

      
              <div class="mergeCon justify-content-center">
<!--starting div for all cards
  <div class="row flex-container justify-content-center" style="padding-left: 0px; color: #0d6efd" > -->



  <div class="container  mx-auto d-flex flex-container ">
  <div class="col-md-12">
                          <ul class="steps steps-5 text-center">
                            <li class="current" ><a href="Details.php" title=""><em>Order Details</em></a></li>
                            <li><a href="Order.php" title=""><em>Order Safety</em></a></li>
                            <li ><a href="Summary.php" title=""><em>Summary</em></a></li>
                            <li ><a href="Payment.php" title=""><em>Payment</em></a></li>
                            <li ><a href="Confirmation.php" title=""><em>Confirmation</em></a></li>
                          </ul>
                          </div>
                        </div>



      <section>
        <div class="container">
            <div class="row justify-content-center mb-5  border shadow-sm mt-5 border-0" style="border-radius: 30px; background-color: #ffff">
            <div class="col">
                <div class="col-lg-12 mt-1 flex-container">
                    <div class="row  justify-content-between text-center mb-3" >
                       
                              <br>
                              <br>
                              <br>


                              <div class="container flex-container mt-3">
                                 <div class=" row flex-container  mt-3 ">
                           
                  <!-- Sender Details start-->
                  <div class=" col-6 flex align-items-center px-4 px-sm-5 ">
                    <form action="insert.php" method="POST">

                      <div class="justify-content-center ">   
                          <div class="col mx-auto mt-1">   
                            <h4 class="text-left text-dark">Pick-up Address</h4>
                              <h6 class="text-left text-dark">Complete Address</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Enter house no., street, city" required="required" name="sadd" id="start" />
                              </div>

                              <h6 class="text-left text-dark">Sender</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Name & Surname" required="required" name="sname" id="end"/>
                              </div>
                             
                              <h6 class="text-left text-dark">Phone number</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Phone Number" required="required" name="snum" id="end"/>
                              </div>
                              <br>
                          </div>
                      </div>
                   <!--  </form> -->
                  </div>

                        <!-- Sender Details end -->






                        <!-- Receiver Details start -->

                  <div class=" col-6 flex align-items-center px-4 px-sm-5">

                      <div class="justify-content-center">   
                        <div class="col mx-auto mt-1">   

                          <h4 class="text-left text-dark">Delivery Address</h4>

                              <h6 class="text-left text-dark">Complete Address</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Enter house no., street, city" required="required" name="radd" id="start" />
                              </div>

                              <h6 class="text-left text-dark">Receiver</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Name & Surname" required="required" name="rname" id="end"/>
                              </div>
                           

                              <h6 class="text-left text-dark">Phone Number</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="num" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Phone Number" required="required" name="rnum" id="end"/>
                              </div>
                              <br>

                          </div>
                      </div>
                    <!-- </form> -->
                  </div>
                  <!-- Receiver  Details end -->





 <!-- Billing Details start -->

                  <div class=" col-6  align-items-center px-4 px-sm-5 border-top-3rem">

                        <div class="justify-content-center">   
                            <div class="col mx-auto mt-1">   

                            <h4 class="text-left text-dark">Billing Information</h4>

                            <h6 class="text-left text-dark">Name</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Name & Surname" required="required" name="bname" id="start" />
                              </div>

                              <h6 class="text-left text-dark">Zip Code</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Zip Code" required="required" name="bzip" id="end"/>
                              </div>

                              <h6 class="text-left text-dark">Town / City</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Town / City" required="required" name="btown" id="end"/>
                              </div>

                              <h6 class="text-left text-dark">Complete Address</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Enter house no., street, city" required="required" name="badd" id="end"/>
                              </div>

                              <h6 class="text-left text-dark">VAT-ID (optional)</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="VAT-ID (optional)" name="bvat" id="end"/>
                              </div>

                              <h6 class="text-left text-dark">Phone Number</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="num" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Phone Number" required="required" name="bnum" id="end"/>
                              </div>
                              <br>
                          <!--     <button type="submit" name="insert" class="btn btn-secondary" >Insert</button><br> -->

                            </div>
                          </div>
                        <!-- </form> -->
                  </div>
                  <!-- Billing   Details end -->

          </div>
        </div>   
                      
                        <br>
              
                              
</div> 
</div>
</div>

</div>




<!--============================================================ SECOND PANE =======================================================-->

 <div class="row justify-content-center mb-5  border shadow-sm mt-5 border-0" style="border-radius: 30px; background-color: #ffff">
            <div class="col">
                <div class="col-lg-12 mt-1">
                    <div class="row justify-content-between text-center" >

                            <div class="container mt-5">

                           <!-- <form action="insert.php" method="POST"> -->
                                <div class="container">


                                  <!-- Cargo Information start-->
                                  <h4 class="text-left text-dark">Cargo Information</h4>
                                    <div class="row align-items-center px-4 px-sm-5" >
                                  
                                              <div class="col "> 
                                              

                                              <h6 class="text-left text-dark">Cargo Pallets</h6>
                                              <div class="form-group text-center d-flex align-items-center">
                                                  <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Number of cargo load" required="required" 
                                                  name="pallet" id="start" />
                                              </div>
                                              </div>

                                              <div class="col ">  
                                              <h6 class="text-left text-dark">Gross Weight (KG)</h6>
                                              <div class="form-group text-center d-flex align-items-center">
                                                  <input type="num" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="1234" required="required" name="gweight" id="end"/>
                                              </div>
                                              </div>
                   


                                              <br>
                                        
                                       <!--  <button type="submit" name="insert" class="btn btn-secondary" >Insert</button><br> -->
                                    
                                    </div>
                                </div>
                            <!--   </form> -->

                                        <!-- Cargo Information end -->





                           <!--################## RADIO CARD FOR SERVICE#########################-->
                            <div class="container">
                              <div class="row justify-content-md-center">

                                <div class="row justify-content-between text-center" >
                                  
                                    <div class="col-md-auto  ">
                                      <label>
                                        <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="collapse" data-target="#loadpartial" aria-expanded="false" aria-controls="loadpartial">
                                          <div class="card  card-body justify-content-between align-items-center shadow" style="width: 18rem; height: 18rem;  border-radius: 20px; font-size: 1.5rem;">
                                            
                                            <p><span>&nbsp;&nbsp;Partial Load</span></p>
                                            <i class="fa fa-box fa-3x  "></i>
                                            <br>

                                              <p style="font-size: 0.9rem;">Up to 30kg regular or up to 2499kg on your own pallets <span> </span></p>
                                            </div>
                                        </label>
                                      </div>

                                  <div class="col-md-auto  ">
                                      <label>
                                        <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="collapse" data-target="#wholevehicle" aria-expanded="false" aria-controls="wholevehicle">
                                          <div class="card  card-body justify-content-between align-items-center shadow" style="width: 18rem; height: 18rem;  border-radius: 20px; font-size: 1.5rem;">
                                            

                                              <p><span>&nbsp;&nbsp;Whole Vehicle</span></p>
                                              <i class="fas fa-truck-moving fa-3x  "></i>
                                              <br>

                                              <p style="font-size: 0.9rem;">Ship cargo with a shared or dedicated truck <span></span></p>
                                            </div>
                                        </label>
                                      </div>


                                </div>


                              </div>
                            </div>
                           <!--################## END RADIO CARD FOR SERVICE#########################-->



                              <!--############33###### FOR WHOLE VEHICLE #########################-->
                              <!--Whole Vehicle Type Dropdown Start-->
                              <div class="col-12 mx-auto d-flex justify-content-center">
                              <div class="d-flex justify-content-center "  id="wholevehicle">
                                <div class=" align-items-center collapse" id="wholevehicle">
                                  <br>
                                  <!--
                                    <div id=" spinner-div visually-hidden " >
                                      <div class="spinner-border text-primary" role="status" >
                                        <span class="visually-hidden"></span>
                                      </div>
                                    </div>

                                    <div class=" d-flex justify-content-center" >
                                      <p id="message_string">Price starting from: (get quote) <span>/km</span> </p>
                                    </div>
                                  -->
                                  
                                    <div class="row mx-auto  justify-content-center"  id="wholevehicle" >
                                          <div class="col-md-auto  ">
                                            <label>
                                                <input type="radio" name="vehicle" value="Small Pickup" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                                  <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8.5rem;  border-radius: 20px; font-size: .9rem;">

                                                      <p><span>&nbsp;&nbsp;Small Pickup</span></p>
                                                      <img src="assets/Small-Pickup-icon.png" alt="Small-Pickup-icon" width="50" height="50">

                                                  </div>
                                            </label>
                                          </div>
                                            
                                          <div class="col-md-auto  ">
                                            <label>
                                                <input type="radio" name="vehicle" value="Closed Van" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                                
                                                  <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8.5rem;  border-radius: 20px; font-size: .9rem;">

                                                      <p ><span>&nbsp;&nbsp;Closed Van</span></p>
                                                      <br>
                                                      <img src="assets/Van_Copy_2.png" alt="Van_Copy_2" width="50" height="50">
                                                    </div>
                                            </label>
                                          </div>

                                          <div class="col-md-auto  ">
                                            <label>
                                                <input type="radio" name="vehicle" value="Pickup Truck" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                                  <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8.5rem;  border-radius: 20px; font-size: .9rem;">

                                                      <p><span>&nbsp;&nbsp;Pickup Truck</span></p>
                                                      <img src="assets/Pickup1.png" alt="Pickup1" width="50" height="50">

                                                    </div>
                                            </label>
                                          </div> 

                                          <div class="col-md-auto  ">
                                            <label>
                                                <input type="radio" name="vehicle" value="6w Fwd Truck" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                                  <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8.5rem;  border-radius: 20px; font-size: .9rem;">

                                                      <p><span>&nbsp;&nbsp;6w Fwd Truck</span></p>
                                                      <img src="assets/6W_FWD-icon.png" alt="6W_FWD-icon" width="50" height="50">
                                                    </div>
                                            </label>
                                          </div>   
                                      

                                    </div> 


                              
                              <!--     <form class=" col-12 mx-auto  justify-content-center"  id="wholevehicle"> -->

                                <!--   </form> -->
                                

                                  </div>
                              </div>  
                            </div>
                            <!--Whole Vehicle Type Dropdown End-->
                            <!--############# END WHOLE VEHICLE ################ -->



                              
                            <!--############33###### FOR PARTIAL LOAD #########################-->
                          <!--Partial Load Input Start-->
                          <div class="col-12 mx-auto d-flex justify-content-center">
                            <div class="col-12 mx-auto collapse  align-items-center" id="loadpartial" >
                            <br>

                            <div class="col-12 mx-auto d-flex  justify-content-center  " id="loadpartial">
                                <!-- <form class=" mx-auto  justify-content-center d-flex"> -->
                                    <input type="number" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-5 bg-secondary text-center" placeholder="L (cm)" required="required" name="length" id="partial" />
                                    ㅤㅤ
                                    <input type="number" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-5 bg-secondary text-center" placeholder="W (cm)" required="required" name="width" id="partial"/>
                                    ㅤㅤ
                                    <input type="number" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-5 bg-secondary text-center" placeholder="H (cm)" required="required" name="height" id="partial"/>
                                    ㅤㅤ
                                    <input type="number" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-5 bg-secondary text-center" placeholder="kg" required="required" name="weight" id="partial"/>                                                         
                                    </div>
                                    <!-- </form> -->
                         


                                <div class="row mx-auto  justify-content-center"  id="loadpartial" >
                                    <div class="col-md-auto  ">
                                      <label>
                                          <input type="radio" name="cargo" value="Closed Box" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8rem;  border-radius: 20px; font-size: .9rem;">

                                                <p><span>&nbsp;&nbsp;Closed Box</span></p>
                                                <i class='bx bxs-package bx-md' ></i>

                                            </div>
                                      </label>
                                    </div>
                                      
                                    <div class="col-md-auto  ">
                                      <label>
                                          <input type="radio" name="cargo" value="Bag" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8rem;  border-radius: 20px; font-size: .9rem;">

                                                <p><span>&nbsp;&nbsp;Bag</span></p>
                                                <i class="fa fa-shopping-bag fa-2x"></i>
                                              </div>
                                      </label>
                                    </div>

                                    <div class="col-md-auto  ">
                                      <label>
                                          <input type="radio" name="cargo" value="Pallet" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8rem;  border-radius: 20px; font-size: .9rem;">

                                                <p><span>&nbsp;&nbsp;Pallet</span></p>
                                                <i class="fa fa-pallet fa-2x  "></i>

                                              </div>
                                      </label>
                                    </div> 

                                    <div class="col-md-auto  ">
                                      <label>
                                          <input type="radio" name="cargo" value="Crate" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8rem;  border-radius: 20px; font-size: .9rem;">

                                                <p><span>&nbsp;&nbsp;Crate</span></p>
                                                <i class="fa fa-boxes fa-2x"></i>
                                              </div>
                                      </label>
                                    </div>   
                                

                              </div> 



                            </div> 
                          </div>     
                          <!--Partial Load Input End-->

                              
                            <!--################## END  PARTIAL LOAD #########################-->




                          <!-- ADD ON ACCORDION START -->

                            <div class="accordion mt-3  ">

                                    <button class="accordion-btn h4 text text-dark bold "><span class="text text-dark">Additional Services</span></button>
                                    <div class=" panel justify-content-left ">
                                      <div class=" col-4 mx-auto text-left">
                                        <label text-start><input type="checkbox" disabled="disabled" checked value="Standard Service"> Standard Service</input></label>
                                        <label text-start><input type="checkbox" name="check_list[]" value="Special Assistance"> Special Assistance</label>
                                        <label text-start><input type="checkbox" name="check_list[]" value="Customer Service"> Customer Service</label>
                                        <label text-start><input type="checkbox" name="check_list[]" value="Tarpaulin Cover"> Tarpaulin Cover</input><h6 class="mt-0 px-4">
                                          
                                        PHP 50</h6></label>

                                      </div>
                                    </div>
                               
                                <!-- panel -->
                            </div>


                            <!-- ADD ON ACCORDION END -->






                                  <!-- Cargo Details start -->

                                  <div class=" col-12 align-items-center mt-4 px-4 px-sm-5">
                                    <!-- <form class="text-center"> -->

                                      <div class="justify-content-center">   
                                        <div class="col mx-auto mt-1">   

                                              <h6 class="text-left text-dark">Cargo Details</h6>
                                              <div class="form-group text-center d-flex align-items-center">

                                                <textarea class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary " id="exampleFormControlTextarea1" rows="3" placeholder="Please describe the cargo and enter its appropriate dimensions, weight and volume" name="details"></textarea>
                                              </div>
                                               
                                          
                                              <div class="col-6   mt-1">  
                                              <h6 class="text-left text-dark">Value</h6>
                                              <div class="form-group text-center d-flex align-items-center">
                                                  <input type="num" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="PHP" required="required" name="value" id="end"/>
<!--   <button type="submit" name="insert" class="btn btn-secondary" >Insert</button><br> -->
                                              </div>
                                              </div>
  <!-- </form> -->
                                              <div class="form-group text-center d-flex align-items-center">
                                                <link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" name="image" rel="stylesheet">
                                                    <div id="drag-drop-area" style="margin: auto;">                                            
                                                      <h6 class="text-left text-dark">Upload image</h6>
                                                    </div>
                                              </div>


                                              <p class="text-left text-primary">  <i class="fa fa-exclamation-circle" aria-hidden="true"> </i>  A forklift, a dock and access for semi-trailer must be provided at the loading/unloading site.</p> 

                                              <br>
                                          </div>
                                      </div>
                                          <br>
  <!--                             <button type="submit" name="insert" class="btn btn-secondary" >Insert</button><br> -->
                                  <!--   </form> -->
                                  </div>
                                  <!-- Cargo Details end -->



                            </div>
                        </div>  
                      </div>
              





          </div>
        </div>   



<!--============================================================ THIRD PANE =======================================================-->

<div class="row justify-content-center mb-5  border shadow-sm mt-5 border-0" style="border-radius: 30px; background-color: #ffff">
            <div class="col">
                <div class="col-lg-12 mt-1">
                    <div class="row justify-content-between text-center" >

                            <div class="container mt-5">

                              <!-- <form class="text-center"> -->
                                <!-- <form action="insert.php" method="POST"> -->
                                <div class="container">




                                  <!-- Pick Up Details start-->
                                  <h4 class="text-left text-dark">Pick-up Information</h4>
                                    <div class= "col-4 ">
                                      <p class=""> When do you want the pickup to take place? </p>
                                    </div>


                                 

                                    <div class="row mx-auto  justify-content-center mt-5 "  >
                                    <div class="col-md-auto ">
                                      <label>
                                    <input type="radio" name="demo"  class="card-input-element d-none" id="do-call" data-toggle="" data-target="" aria-expanded="true" aria-controls="" value="ASAP">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 12rem; height: 8.5rem;  border-radius: 20px; font-size: .9rem;">
                                                <p><span>&nbsp;&nbsp;Quick</span></p>
                                                <i class='fa fa-bell fa-2x nav_icon'></i>
                                                <p><span>ASAP - within 1 hour or less</span></p>
                                              </div>
                                      </label>
                                    </div> 


                                    <div class="col-md-auto  ">
                                      <label>
                                          <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="collapse" data-target="#scheduled" aria-expanded="false" aria-controls="scheduled">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 12rem; height: 8.5rem;  border-radius: 20px; font-size: .9rem;">
                                                <p><span>&nbsp;&nbsp;Schedule</span></p>
                                                <i class='fa fa-calendar fa-2x nav_icon'></i>
                                                <p><span>Set preferred  date and time of delivery</span></p>
                                              </div>
                                      </label>
                                    </div>   
                                
                           
                            </div> 



                            

                                      <div class="row align-items-center px-4 px-sm-5 pt-3 collapse" id="scheduled" >
                                        
                                              <div class="col-md-6 mx-auto "  id="do-call" data-toggle="" data-target="#scheduled" aria-expanded="false" aria-controls=""> 
                                             
                                                <h6 class="text-left text-dark">Pick-up Date & Time</h6>
                                                  <div class=" datepickers  form-group text-center d-flex align-items-center" action="" method="post">
                                                      <!-- <label class="label-control" for="id_start_datetime">Datetime picker</label> -->
                                                      <div class="input-group date" id="id_0">
                                                        <input type="text" name="oras" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="MM/DD/YYYY hh:mm:ss"/>
                                                      </div>
                                                    
                                                  </div>
                                               </div>
                               <!--
                                              <div class="col ">  
                                              <h6 class="text-left text-dark">Gross Weight (KG)</h6>
                                              <div class="form-group text-center d-flex align-items-center">
                                                  <input type="num" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="1234" required="required" id="end"/>
                                              </div>
                                              </div>
                                            -->

                                              <br>
                                      </div>


                                        <!-- Pick Up Details end -->


                            




                                       
                                  <!-- Contact details start -->
                                  <h4 class="text-left text-dark">Contact Details</h4>
                                         <!-- <div class= "col-10 ">
                                              <p class="">  You will receive an order confirmation on this email address when you’re done with the payment. </p>
                                            </div> -->
                                  <div class=" col-12 align-items-center mt-4 px-4 px-sm-5">
                                    <!-- <form class="text-center"> -->

                                      <div class="justify-content-center">   
                                        <div class="row mx-auto mt-1">   
                                       
                                          
                                          <div class="col "> 
                                          <h6 class="text-left text-dark">Name</h6>
                                            <div class="form-group text-center d-flex align-items-center">
                                                <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Name & Surname" required="required" name="cname" id="start" />
                                            </div>
                                          </div>


                                          <div class="col ">  
                                          <h6 class="text-left text-dark">Email Address</h6>
                                          <div class="form-group text-center d-flex align-items-center">
                                              <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="email@domain.com" required="required" name="cemail" id="end"/>
                                          </div>
                                          </div>

                                          <div class="col ">  
                                          <h6 class="text-left text-dark">Phone Number</h6>
                                          <div class="form-group text-center d-flex align-items-center">
                                              <input type="num" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="000 0000 000" required="required" name="cnum" id="end"/>
                                          </div>
                                          </div>

                                          </div>

                                          <h6 class="text-left text-dark">Special Notes (Optional)</h6>
                                              <div class="form-group text-center d-flex align-items-center">
                                                <textarea class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary " name="cnote" id="exampleFormControlTextarea1" rows="3" placeholder=" "></textarea>
                                              </div>
                                      </div>     
                                     <!--  </form> -->
                                    </div>
                                    

                                    
                                              <div class="d-flex ml-5 ">
                                                <div class="form-check">
                                                  <input class="form-check-input" id = "terms" type="checkbox" value="">
                                                  <label class="form-check-label " id=""  value ="" >
                                                  I have read and accept the <a class="font-weight-normal text-primary" href="#">Terms and Conditions of iCargo Pacific </a>
                                                  </label>
                                                </div>
                                              </div>
                                              <div class="d-flex  ml-5">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="newsletter">
                                                  <label class="form-check-label" for="flexCheckDefault"  >
                                                  I would like to receive newsletter emails.
                                                  </label>
                                                </div>
                                              </div>
                                               <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary"  name="user_id" value="<?php echo $rows['ID']; ?>" hidden/>
                                        <!-- <button type="submit" id="insert" name="insert" class="btn btn-secondary" disabled>Insert</button><br>-->

                              <div class="col-lg-12  text-center mx-auto  mt-5 mb-5" id="">
                                <div class=" col d-flex justify-content-between">

                                 <div class=" d-flex mx-auto">
                                   <button  type="submit"  type="submit" id="insert" name="insert"  class="btn btn-primary shadow p-3 mb-5 font-weight-bold" href="Safety.php"  disabled>ㅤContinueㅤ</button>
                                </div> 

                              </div>
                            </div>


                                  <!-- Contact details end -->
                                  </div>
                              </form>




                              <!-- Summary Details start-->
                              <div class="container col-lg-12 mt-5" hidden>
                                <h2 class="text-center text-warning mt-5">[00000] PHP</h2>
                                  <div class= "row  mx-auto justify-content-center mt-3   ">

                                  <div class= "col-md-auto px-5 ">
                                    
                                    <div class="row-6 fw-bold text-left text-dark h6 "> 
                                     <p class="row-6  "> Partial Load OR Whole vehicle]  </p>
                                    </div>

                                    <div class= "row-6 fw-bold text-left text-dark h6 mb-0 ">
                                      <p class="row-6 "> Additional Services </p>
                                    </div>
                                    
                                    <div class= "row-6 fw-bold text-left text-dark h6 mb-0 ">
                                      <p class="row-3 fw-bold text-secondary h6 px-4 mt-0 "> Standard Service  </p>
                                    </div> 

                                    <div class= "row-6 fw-bold text-left text-dark h6 mb-0 ">
                                      <p class="row-3 fw-bold text-secondary h6 px-4   mt-0 "> Special Assistance  </p>
                                    </div> 
                                  </div>




                                  <div class= "col-md-auto px-5 ">

                                    <div class="row-6 fw-bold text-dark text-left  h6 "> 
                                      <p class="row-6  "> PHP 00000</p>
                                    </div>

                                    <div class="row-6 fw-bold text-dark text-left  h6 "> 
                                      <p class="row-6 ">ㅤ</p>
                                    </div>

                                    <div class="row-3 fw-bold text-dark text-left  h6 px-1   mt-0  "> 
                                      <p class="row-3 "> PHP 0</p>
                                    </div>
                                    
                                    <div class="row-3 fw-bold text-dark text-left  h6 px-1   mt-0  "> 
                                      <p class="row-3 ">  PHP 00000</p>
                                    </div>
                                  </div>
                                  
                                  </div> 
                                    <div class="row align-items-center px-4 px-sm-5" >                        
                                  </div>
                              </div>
      
                              <!-- Summary Details end-->










                            </div>
                        </div>  
                      </div>
              


          </div>
        </div>           
                      
          
                              
</div> 
              <br> <br>

      


    </section>


    

            <!-- end div for mergeCon-->
            </div>
<!--
            <footer class="footer sticky-top shadow">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
-->
         <!-- end div for container fluid-->
         </div>
      <!-- end div for content container -->
      </div>
  <!-- end div for Container Main start--> 
  </div>

   <script>
        const cb = document.querySelector('#terms');
        const cc = document.querySelector('#newsletter');
        cb.addEventListener('click', (event) => {
          if(cb.checked == true && cc.checked == true){
            document.getElementById("insert").disabled = false;
          }else{  
            document.getElementById("insert").disabled = true;
          }
        });   

        cc.addEventListener('click', (event) => {
          if(cb.checked == true && cc.checked == true){
            document.getElementById("insert").disabled = false;
          }else{  
            document.getElementById("insert").disabled = true;
          }
        });   
    </script>

  





            <script>
            $(document).ready(function () {
              $("#do-call").click(function () {//The load button
                $("#spinner-div").show(); //Load button clicked show spinner
                $.ajax({
                  url: "https://api.srv3r.com/2seconds/", //Takes 2 seconds to complete this request
                  type: "GET",
                  dataType: "json",
                  success: function (res) {
                    $("#message_string").text("Price starting from:" + res.message + "/km"); //Write the message
                  },
                  complete: function () {
                    $("#spinner-div").hide(); //Request is complete so hide spinner
                  }
                });
              });
            });

              </script>



          <!--Search filter-->
          <script>
              function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("search_input");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                  td = tr[i].getElementsByTagName("td")[0];
                  if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                    } else {
                      tr[i].style.display = "none";
                    }
                  }       
                }
              }

          </script>





<!-- end div for TABLE-->
</table >


<br><br><br>

<!-- end div for CONTAINER MAIN START-->
</div>

          <!-- ###### FOR RADIO CARDS START ###### -->
          <script>
            $(document).ready(function () {
              $('input:radio').change(function () {//Clicking input radio
                  var radioClicked = $(this).attr('id');
                  unclickRadio();
                  removeActive();
                  clickRadio(radioClicked);
                  makeActive(radioClicked);
              });
              $(".card").click(function () {//Clicking the card
                  var inputElement = $(this).find('input[type=radio]').attr('id');
                  unclickRadio();
                  removeActive();
                  makeActive(inputElement);
                  clickRadio(inputElement);
              });
          });


          function unclickRadio() {
              $("input:radio").prop("checked", false);
          }

          function clickRadio(inputElement) {
              $("#" + inputElement).prop("checked", true);
          }

          function removeActive() {
              $(".card").removeClass("active");
          }

          function makeActive(element) {
              $("#" + element + "-card").addClass("active");
          }
          </script>



        <!-- autocomplete input MAP-->
        <script>   var options = {
  
            componentRestrictions: {country: "ph"}
          };
                  var start_point = document.getElementById('start');
                  var start_autocomplete = new google.maps.places.Autocomplete(start_point,options);
                  var end_point = document.getElementById('end');
                  var end_autocomplete = new google.maps.places.Autocomplete(end_point,options);
          </script>
<!-- ###### FOR RADIO CARDS END ###### -->

            <!-- JavaScript Libraries -->

            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/counterup/counterup.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="/scripts/jquery.min.js"></script>

            <!-- Contact Javascript File -->
            <script src="mail/jqBootstrapValidation.min.js"></script>
            <script src="mail/contact.js"></script>

            <script src="./js/intant-quote.js"></script>
            <!-- Template Javascript -->
            <script src="js/pageland.js"></script>




            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <!-- JavaScript Libraries -->
                    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


                        <!-- Template Javascript -->
              <script src="js/jquery.min.js"></script>
              <script src="js/popper.js"></script>
              <script src="js/bootstrap.min.js"></script>
              <script src="js/moment-with-locales.min.js"></script>
              <script src="js/bootstrap-datetimepicker.min.js"></script>
              <script src="js/main.js"></script>







            <!-- FOR SIDE NAVBAR -->
            <script>
            document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) =>{
            const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if(toggle && nav && bodypd && headerpd){
            toggle.addEventListener('click', ()=>{
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
            })
            }
            }

            showNavbar('header-toggle','nav-bar','body-pd','header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink(){
            if(linkColor){
            linkColor.forEach(l=> l.classList.remove('active'))
            this.classList.add('active')
            }
            }
            linkColor.forEach(l=> l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
            });
            </script>






          <!-- FOR ACCORDION -->
          <script>
          // Toggle 'active' and 'show' states of panels

          var accord = document.getElementsByClassName("accordion-btn");
          var i;

          for (i = 0; i < accord.length; i++) {
              accord[i].onclick = function() {
                  this.classList.toggle("active");
                  this.nextElementSibling.classList.toggle("show");
              }
          }
          </script>



        <!-- FOR UPLOAD IMG -->
       
            <script src="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.js"></script>
            <script>
              var uppy = Uppy.Core()
                .use(Uppy.Dashboard, {
                  inline: true,
                  target: '#drag-drop-area'
                })
                .use(Uppy.Tus, {endpoint: 'https://master.tus.io/files/'}) //you can put upload URL here, where you want to upload images

              uppy.on('complete', (result) => {
                console.log('Upload complete! We’ve uploaded these files:', result.successful)
              })
            </script>
    


        <!-- BOOTSTRAP 5,FOR SIDE NAVBAR -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>

<?php 

}else{
  header("Location: signinAll.php");
}

 ?>