
<?php 
include "../admin/db_connect.php";

session_start();


if (isset($_SESSION['id'])) 
{
$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM signup_partners_users WHERE id = '$id'");
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
 <!--
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
-->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/landpage.css"  rel="stylesheet">
<!-- Customized Bootstrap Stylesheet
<link href="css/style.css" rel="stylesheet">  

<link rel="stylesheet" href="css/MaterialTextField.css"> -->
<link href="css/Accordion.scss" rel="stylesheet">
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
                            <li><a href="Details.php" title=""><em>Order Details</em></a></li>
                            <li><a href="Safety.php" title=""><em>Order Safety</em></a></li>
                            <li ><a href="Summary.php" title=""><em>Summary</em></a></li>
                            <li class="current"><a href="Payment.php" title=""><em>Payment</em></a></li>
                            <li ><a href="#" title=""><em>Confirmation</em></a></li>
                          </ul>
                          </div>
                        </div>



      <section>
        <div class="container">
            <div class="row justify-content-center mb-5  border shadow-sm mt-5 border-0" style="border-radius: 30px; background-color: #ffff">
            <div class="col">
                <div class="col-lg-12 mt-1 flex-container">
                    <div class="row  justify-content-between text-center" >
                       
                              <br>
                              <br>
                              <br>


                              <div class="container flex-container">
                                 <div class=" row flex-container  mt-3 ">
                           
                  <!-- Sender Details start-->
                  <div class=" col align-items-center flex-container px-4 px-sm-5">
                    <form class="text-center">

                      <div class="justify-content-center">   
                          <div class="col mx-auto mt-3">   
                            
                            <!--SUMMARY DIV -->
                            <div class=" row d-flex flex-end">
                              <div class="col-12 col-sm-6 col-md-7 col-lg-8 col-xl-9">
                                <h4 class="text-left text-dark">Payment</h4>
                                <h6 class="text-left text-dark mt-3 h5 mb-3">Shipment details</h6>
                              </div>  
                                  
                              <div class= "col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                                        <a href="Summary.php" class=" btn btn-primary shadow p-3 mb-5 font-weight-bold" data-toggle=" " onclick=" ">ㅤChange orderㅤ</a>

                              </div> 
                            </div> 




                            <!-- PADELETE NALANG TONG <p> PAG OKS NA      -->
              <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#wholevehicle" aria-expanded="false" aria-controls="wholevehicle">
                  FOR WHOLE VEHICLE
                </button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#loadpartial" aria-expanded="false" aria-controls="loadpartial">
                  FOR PARTIAL LOAD
                </button>
              </p>





              <!-- ######  START FOR WHOLE VEHICLE ####### -->
              <div class=" flex-container mt-4  mb-4 collapse  "  id="wholevehicle" >
                  <div class="  row "  >
                            <!-- Summary Details start-->
                      <div class= "col-5 bg-light d-flex shadow  " style="border-radius: 30px" >
                        <ul class="list-group list-group-horizontal-sm mx-auto   " >
                          <div class="flex-container mt-3 mb-3 ">
                            
                          <div class= "col bg-light flex-container" >
                              <li class="list-group-item bg-light" style="border:none">
                                <h6 class="text-left text-secondary" >Service Type</h6>
                                  <p class=" fw-bold text-left text-dark mt-0  mb-0 px-3 ">  Whole Vehicle  </p>
                              </li>
                            </div>

                            <div class= "col bg-light flex-container" >
                              <li class="list-group-item bg-light" style="border:none">
                                <h6 class=" fw-bold text-left text-secondary "> Vehicle Type</h6>
                                <p class=" fw-bold text-left text-dark mt-0 mb-0 px-3 "> Small Pick-up </p>      
                              </li>
                            </div> 

                                  <div class= "col bg-light flex-container" >
                                    <li class="list-group-item bg-light" style="border:none">
                                      <h6 class=" fw-bold text-left text-secondary "> Load Content</h6>
                                      <p class=" fw-bold text-left text-dark mt-0 mb-0 px-1 "> Small Pick-up </p>      
                                  </div>

                            <div class= "col bg-light flex-container" >
                              <li class=" list-group-item bg-light" style="border:none">
                                <h6 class=" fw-bold text-left text-secondary "> Additional Services  </h6>


                                <div class="row bg-light flex-container">
                                    <div class="col-8 col-sm-6 fw-bold text-left text-dark mt-2 mb-2 px-1 bg-light">
                                      <p class=" fw-bold text-left text-dark mt-0 mb-0 px-3 bg-light"> Standard Service</p> 
                                    </div>
                                    <div class="col-4 col-sm-6 fw-bold text-left text-dark mt-2 mb-2  bg-light flex-container">PHP 0</div>

                                    <div class="col-6 col-sm-6 fw-bold text-left text-dark mt-2 mb-2 px-1 flex-container ">
                                      <p class=" fw-bold text-left text-dark mt-0 mb-0 px-3 "> Tarpaulin Cover</p> 
                                    </div>
                                    <div class="col-6 col-sm-6 fw-bold text-left text-dark mt-2 mb-2 flex-container">PHP 00000</div>
                                  </div>
                            </div>    

                              </li>

                          </ul>
                        </div>
                          <!-- Summary Details end-->



                          <!-- Other Summary Details start-->
                          <div class= "col-sm mt-3 flex-container" >
                                <div class="container">
                                  <div class="row flex-container  ">

                              <!-- Summary Details start-->
                              <div class="container col-lg-12 mt-2">
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
                          <!-- ###### END FOR WHOLE VEHICLE ####### -->




                          <!-- ######  START FOR PARTIAL LOAD ####### -->
                          <div class="flex-container mt-4  mb-4 collapse  "  id="loadpartial">
                             <div class="  row "  >

                                        <!-- Summary Details start-->
                                  <div class= "col-5 bg-light flex-container shadow  " style="border-radius: 30px" >
                                    <ul class="list-group list-group-horizontal-sm mx-auto   " >
                                      <div class="mt-3 mb-3 ">


                                      <div class= "col bg-light flex-container" >
                                          <li class="list-group-item bg-light" style="border:none">
                                            <h6 class="text-left text-secondary" >Quantity</h6>
                                              <p class=" fw-bold text-left text-dark mt-0  mb-0 px-3 "> 8 </p>
                                          </li>
                                        </div>
                                        
                                      <div class= "col bg-light flex-container" >
                                          <li class="list-group-item bg-light" style="border:none">
                                            <h6 class="text-left text-secondary" > Partial Load Type</h6>
                                              <p class=" fw-bold text-left text-dark mt-0  mb-0 px-3 ">  Pallet  </p>
                                          </li>
                                        </div>

                                        <div class= "col bg-light flex-container" >
                                          <li class="list-group-item bg-light" style="border:none">
                                            <h6 class=" fw-bold text-left text-secondary "> Weight</h6>
                                            <p class=" fw-bold text-left text-dark mt-0 mb-0 px-3 "> 2312 </p>      
                                          </li>
                                        </div>

                                              <div class= "col flex-container bg-light" >
                                                <li class="list-group-item bg-light" style="border:none">
                                                  <h6 class=" fw-bold text-left text-secondary "> Dimensions</h6>
                                                  <p class=" fw-bold text-left text-dark mt-0 mb-0 px-1 "> 23 x 21 x21 cm </p>      
                                              </div>

                                              <div class= "col flex-container bg-light" >
                                                <li class="list-group-item bg-light" style="border:none">
                                                  <h6 class=" fw-bold text-left text-secondary "> Load Content</h6>
                                                  <p class=" fw-bold text-left text-dark mt-0 mb-0 px-1 "> Small Pick-up </p>      
                                              </div>


                                              <div class= "col bg-light flex-container" >
                                                <li class=" list-group-item bg-light" style="border:none">
                                                  <h6 class=" fw-bold text-left text-secondary "> Additional Services  </h6>


                                                  <div class="row bg-light flex-container">
                                                    <div class="col-8 col-sm-6 fw-bold text-left text-dark mt-2 mb-2 px-1 bg-light">
                                                      <p class=" fw-bold text-left text-dark mt-0 mb-0 px-3 bg-light"> Standard Service</p> 
                                                    </div>
                                                    <div class="col-4 col-sm-6 fw-bold text-left text-dark mt-2 mb-2 px-1 bg-light">PHP 0</div>

                                                    <div class="col-6 col-sm-6 fw-bold text-left text-dark mt-2 mb-2 px-1 ">
                                                      <p class=" fw-bold text-left text-dark mt-0 mb-0 px-3 "> Tarpaulin Cover</p> 
                                                    </div>
                                                    <div class="col-6 col-sm-6 fw-bold text-left text-dark mt-2 mb-2 px-1">PHP 00000</div>
                                                  </div>
                                               </div>     


                                          </li>

                                      </ul>
                                    </div>
                                      <!-- Summary Details end-->






                          <!-- Other Summary Details start-->
                          <div class= "col-sm mt-3 flex-container" >
                                <div class="container">
                                    <div class="row flex-container ">

                                      <!-- Summary Details start-->
                                      <div class="container col-lg-12 mt-2">
                                        <h2 class="text-center text-warning mt-5">[00000] PHP</h2>
                                          <div class= "row  mx-auto justify-content-center mt-3   ">

                                            <div class= "col-md-auto px-5 ">
                                              
                                              <div class="row-6 fw-bold text-left text-dark h6 "> 
                                              <p class="row-6  "> [  Partial Load OR Whole vehicle]  </p>
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
                    <!-- ###### END FOR PARTIAL LOAD ####### -->


                    <!-- DISCOUNT ACCORDION START -->
                  <div class="row ">
                    <div class="col accordion mt-3 float-md-left  ">

                    <button class="accordion-btn h5 text text-dark bold "><span class="text text-dark">Have a discount coupon?</span></button>
                    <div class=" panel justify-content-left ">
                      <div class=" col mx-auto ">

                        <div class="col mx-auto mt-1">   
                          
                          <div class="col-md-6  mt-1">  
                            <h6 class="text-left text-dark">Discount Coupon</h6>
                            <div class="form-group text-center d-flex align-items-center">
                                <input type="num" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Code" required=" " id=""/>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                     <!-- panel -->
                    </div>
                  </div>

                    <!-- DISCOUNT ACCORDION END -->

                    

                          <!-- Payment Method Details start-->
                          <div class="container mt-5"> 
                            <div class="col mt-5 "> 
                              <h6 class="text-left text-dark mt-3 h5 mb-3">Payment Method</h6>
                                <div class= "col-3 ">
                                  <p class=""> How do you want to pay? </p>
                                </div>

                                <div class="row mx-auto  justify-content-center mt-5 "  >
                                  <div class="col-md-auto ">
                                    <label>
                                  <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="collapse" data-target="#cod" aria-expanded="false" aria-controls="cod">
                                          <div class="card  card-body justify-content-between align-items-center shadow" style="width: 12rem; height: 8.5rem;  border-radius: 20px; font-size: .9rem;">
                                            <p><span>&nbsp;&nbsp;Cash on Delivery</span></p>
                                            <i class='fa fa-money-bill fa-2x nav_icon ' aria-hidden="true"></i>
                                            <p class= "mt-2 "><span>Pay at your doorstep ㅤ</span></p>
                                            <p><span>ㅤ</span></p>
                                          </div>
                                    </label>
                                  </div> 


                                  <div class="col-md-auto  ">
                                    <label>
                                        <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="collapse" data-target="#credit" aria-expanded="false" aria-controls="credit">
                                          <div class="card  card-body justify-content-between align-items-center shadow" style="width: 12rem; height: 8.5rem;  border-radius: 20px; font-size: .9rem;">
                                              <p><span>&nbsp;&nbsp;Card Payment</span></p>
                                              <i class='fa fa-credit-card fa-2x nav_icon' aria-hidden="true" ></i>
                                              <p class= "mt-2 "><span>Credit/Debit</span></p>
                                              <p><span>ㅤ</span></p>
                                            </div>
                                    </label>
                                  </div>   

                                  <div class="col-md-auto  ">
                                    <label>
                                        <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="collapse" data-target="#wallet" aria-expanded="false" aria-controls="wallet">
                                          <div class="card  card-body justify-content-between align-items-center shadow" style="width: 12rem; height: 8.5rem;  border-radius: 20px; font-size: .9rem;">
                                              <p><span>&nbsp;&nbsp;E-Wallet</span></p>
                                              <i class="fa fa-wallet fa-2x" aria-hidden="true"></i>
                                              <p class= "mt-2 "><span>GCash</span></p>
                                              <p><span>ㅤ</span></p>
                                            </div>
                                    </label>
                                  </div>   
                          
                                </div> 
                            </div> 
                          </div> 


                          <!--======================== START CREDIT PAYMENT =======================-->
                          <div class="row align-items-center px-4 px-sm-5 pt-3 collapse" id="credit" >
                            


                              <div class="col-md-5 mx-auto "  > 
                              
                                <h6 class="text-left text-dark">Cardholder Name</h6>
                                  <div class=" datepickers  form-group text-center d-flex align-items-center" action="" method="post">
                                      <!-- <label class="label-control" for="id_start_datetime">Datetime picker</label> -->
                                      <div class="input-group date" id=" ">
                                        <input type="text" value="" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Full Name" required/>
                                      </div> 
                                  </div>
                              </div>

                                
                              <div class="col-md-5 mx-auto ">  
                                <h6 class="text-left text-dark">Credit Card Number</h6>
                                  <div class="form-group text-center d-flex align-items-center">
                                      <input type="int" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Card Number" required="required" />
                                  </div>
                              </div>


                              <div class="col-md-5 mx-auto "  > 
                              
                                <h6 class="text-left text-dark">Expiry Date</h6>
                                  <div class=" datepickers  form-group text-center d-flex align-items-center" action="" method="post">
                                      <!-- <label class="label-control" for="id_start_datetime">Datetime picker</label> -->
                                      <div class="input-group date" id=" ">
                                        <input type="int" value="" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="MM/YY" required/>
                                      </div> 
                                  </div>
                              </div>

                                
                              <div class="col-md-5 mx-auto ">  
                                <h6 class="text-left text-dark">CCV</h6>
                                  <div class="form-group text-center d-flex align-items-center">
                                      <input type="int" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="CCV Number" required="required" />
                                  </div>
                              </div>
                               

                            <br>
                          </div>
                           <!--======================== END CREDIT PAYMENT =======================-->


                          <!--======================== START COD PAYMENT =======================-->
                          <div class="row align-items-center px-4 px-sm-5 pt-3 collapse" id="cod" >
                            

                              <div class="col-11 mx-auto "  id="do-call" data-toggle="" data-target="#cod" aria-expanded="false" aria-controls=""> 

                                  <div class="alert alert-success fade show  " role="alert">
                                    <p class="float-left text-sm-start mb-3">
                                      <span class="text-sm-start" >Selected payment method:</span>
                                      <strong class="text-sm-start"> <span>Cash on Delivery</span></strong>
                                    </p>
                                    <p class=" mb-5">
                                      <span class= "float-left text text-secondary">
                                        For Cash on Delivery payments, please prepare an exact amount. A photo proof and ID is required.
                                      </span>
                                      <br>
                                    </p>
                                  </div>

                              </div>

                            <br>
                          </div>
                           <!--======================== END COD PAYMENT =======================-->

                          <!--======================== START WALLET PAYMENT =======================-->
                          <div class="row align-items-center px-4 px-sm-5 pt-3 collapse" id="wallet" >
                            

                              <div class="col-11 mx-auto "  id="do-call" data-toggle="" data-target="#wallet" aria-expanded="false" aria-controls="wallet"> 
                                
                                  <div class="alert alert-success fade show  " role="alert">
                                    <p class="float-left text-sm-start mb-3">
                                      <span class="text-sm-start" >Selected payment method:</span>
                                      <strong class="text-sm-start"> <span>E-Wallet</span></strong>
                                    </p>
                                    <p class=" mb-5 ">
                                      <span class= "float-left text text-secondary">
                                      Please note that we are only able to confirm your order after the payment is 
                                      received on our e-wallet account. If you want to ensure the earliest possible pickup-date, 
                                      we suggest you to consider one of the other possible payment solutions.
                                      </span>
                                      <br><br><br>
                                    </p>
                                  </div>





                                  <div class="text-center mt-5">
                                  <h6 class="text-left text-dark mt-5 h5 mb-0">Scan the GCash QR Code to pay </h6>
                                    <p class=" mt-0 mb-5 ">
                                        <span class= "float-left text text-secondary">
                                        <a class="font-weight-normal text-primary" target="_blank" href="https://help.gcash.com/hc/en-us/articles/360017722773-How-Do-I-Pay-Merchants-via-QR-Code-">Need assistance? </a>
                                        </span>
                                    </p>
                                    <img src="assets/GCASH1.jpg" class="rounded" alt="...">
                                  </div>

                                  <h6 class=" text-left text-dark  mt-3 ">GCash Account Name</h6>
                                  <div class="  form-group text-center d-flex align-items-center" action="" method="post">
                                      <div class="input-group date" >
                                        <input type="text" value="" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Account Name" required/>
                                      </div> 
                                  </div>

                              </div>

                            <br>
                          </div>
                           <!--======================== END WALLET PAYMENT =======================-->




                          <!-- Payment Method Details end -->

                          </div>
                       
                    </div>
                </div>
              </form>
            </div>
    </div>
  </div>                    

                   
                        <div class="col-lg-12  text-center mx-auto  mt-5 mb-5" id="">
                            <div class=" col d-flex justify-content-between">
                              <div class="d-flex flex-start">
                                <a href="Safety.php" class="float-none btn btn-light shadow p-3 mb-5 font-weight-bold" data-toggle=" " onclick=" ">ㅤBackㅤ</a>
                              </div> 
                              <div class=" d-flex flex-end">
                                  <a href="Confirmation.php" class=" btn btn-primary shadow p-3 mb-5 font-weight-bold" data-toggle=" " onclick=" ">ㅤContinueㅤ</a>
                            </div> 
                          </div>
                        </div>


                                             
      </div> 
  </div>
</div>

<br><br><br><br>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <!-- JavaScript Libraries -->
                    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>>


                        <!-- Template Javascript -->
              <script src="js/jquery.min.js"></script>
              <script src="js/popper.js"></script>
              <script src="js/bootstrap.min.js"></script>
              <script src="js/moment-with-locales.min.js"></script>
              <script src="js/bootstrap-datetimepicker.min.js"></script>
              <script src="js/main.js"></script>



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







<!-- BOOTSTRAP 5,FOR SIDE NAVBAR -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>

<?php
}
else
{
header("Location: signinAll.php");
} ?>
