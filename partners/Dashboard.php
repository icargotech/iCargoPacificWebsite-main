
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


   
 <!-- Favicon -->
 <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://pagecdn.io/lib/easyfonts/roboto.css" rel="stylesheet" />
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<!-- Bootstrap Icon -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" rel="stylesheet">


<!--
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
-->
  
<!--JQUERY-->
   <title>Dashboard</title>

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mdb.min.css">
<!-- Plugin file -->
<link rel="stylesheet" href="./css/addons/datatables.min.css">
<link rel="stylesheet" href="/css/style.css">


 <!---bootstrap-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
   
<!--JQUERY-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap4.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/SideBarCollapses.css">



</head>

<!-- CSS-->
<style>   .searchArea{     margin-top:20px;     padding:0px;   } .mergeCon{ width:105%; height: 20%; z-index:-3; } .title{     width:70%;     height:fit-content;       } .titleSearch{ right:0px; } /**Order Area  */ .Ordercontainer{ display:flex; gap:10px; float:left; padding: 0px 10px 10px 10px; flex-wrap:wrap; } /**Fleet Area  */ .fleetContainer{ display:flex; gap:10px; padding:0px 5px 10px 0px; flex-wrap:wrap; } /**Shipment Area  */ .shipmentContainer{   display:flex;   gap:10px; padding: 0px; /* float: right; */ flex-wrap:wrap; } .cards_fleet{   display:flex;   gap:20px;   padding:0px 10px 0px 10px;    } .cards_order{   display:flex;   gap:20px;   padding:0px 10px 20px 20px;    } .shipment_cards{ display:flex; height:fit-content; gap:20px; padding:30px 10px 20px 20px; } .card{   background: #FFFFFF;   box-shadow:  5px 5px 20px #b0b0b0,               -10px -10px 50px #ffffff;               border-radius:20px;   display:flex;           } .card-title { font-style: normal; } .select_Sort{   width:90%; padding:10px } #nav h5 {    display: inline-block;    text-align:center;  } .table-hover > tbody > tr:hover  table table-hover table-responsive-xl{   background-color: #0000; } .table{     text-align:center; } tr:nth-child(even) {background-color: rgba(0, 6, 10, 0.1);} body {   margin: 0;   font-family: "Roboto";   font-size: 1rem;   font-weight: 300;   line-height: 1.5;   color: #757575;   text-align: left;   background-color: #fff; } .selected{     border-left:9px  solid #FBCD10;     padding: 0px 0px 4px 5px;    } .unselected{     color: rgb(228, 26, 26);         }  .div.d-grid gap-2 d-md-flex justify-content  {   padding: 10px 15px 10px 30px;  }  .sidebar-container {   position: fixed;   width: 220px;   height: 100%;   left: 0;   overflow-x: hidden;   overflow-y: auto;   background: #fff;   color: #000;   padding-top: 0 px; } .content-container {   padding-top: 30px; } .sidebar-logo {   padding: 10px 15px 10px 30px;   font-size: 20px;   background-color: #2574A9; } .sidebar-navigation {   padding:0;   margin: 0;   list-style-type: none;   position: relative;   } .sidebar-navigation li {   background-color: transparent;   position: relative;   display: inline-block;   width: 100%;   line-height: 16px;   padding: 15px 10px 10px 15px;   border-bottom: 1px solid #201e1644;          } .fa { } .sidebar-navigation li a .fa{   padding: 0px 0px 4px 20px;   display: block;   color: #4A4949;   font-size: 18px;    } .sidebar-navigation ul {   padding: 0px 10px 5px 50px;   display: block;   color: #4A4949;   font-size: 12px;   font-family:"roboto";   font-weight: 400; } .sidebar-navigation .fa {   margin-right: 10px;    } .sidebar-navigation ul:active, .sidebar-navigation ul:hover, .sidebar-navigation ul:focus, .sidebar-navigation ul a,i:active, .sidebar-navigation ul a,i:hover, .sidebar-navigation ul a,i:focus, .sidebar-navigation li a:active, .sidebar-navigation li a:hover, .sidebar-navigation li a:focus {   text-decoration: underline;   outline: none;       } #nav li a {} .sidebar-navigation li::before {   background-color: #FBCD10;   position: absolute;   content: '';   height: 100%;   left: 0;   top: 0;   -webkit-transition: width 0.2s ease-in;   transition: width 0.2s ease-in;   width: 0px;   z-index: -1;    } .sidebar-navigation li:hover::before {   width: 100%; } .sidebar-navigation .header {   font-size: 12px;   text-transform: uppercase;   background-color: #fcfcfc;   padding: 10px 15px 10px 30px; } .sidebar-navigation .header::before {   background-color: transparent; } .content-container {   /*padding-left: 220px;*/ } html { height: 100%; } .btn btn-primary rounded-pill     {       padding: 10px 15px 10px 30px;     }     .d-grid gap-2 d-md-flex justify-content-md-center     {         position:relative;         right: 730px;     } .btn btn-primary float-right { top:67rem; } table.dataTable thead .sorting:after, table.dataTable thead .sorting:before, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_asc_disabled:before, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_desc_disabled:after, table.dataTable thead .sorting_desc_disabled:before {   bottom: .5em; } /* Responsive layout - makes a one column layout instead of a two-column layout */ @media (max-width: 800px) {   .flex-container {     flex-direction: column;   } } </style> 

<body id="body-pd" class="body-pd">
    <header class="header body-pd shadow " id="header"> 
        <div class="header_toggle d-flex align-items-center "> 
        <i class='bx bx-menu bx-x' id="header-toggle"></i> &nbsp;&nbsp;&nbsp;   

           <a class="navbar-brand icargo-navbar" href="Dashboard.php"><h2 style="">

          <img  src="assets/icargologo.png" width="70" height="50" alt="" ><font color="#0D7CFF"> iCargo</font> <font color="#FBCD10">Partner</font></h2></a> 
        </div>

        <!-- <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> -->


            <div class= "d-flex justify-content-end ">
                
                <button class="btn btn-primary rounded-pill " type="button" href="dashSample1.php">Help</button>&nbsp;

               <!--  <div class="nav-item dropdown"> 
                  <a href="profile.html" data-toggle="dropdown" style="font-size:20px" class="nav-link dropdown-toggle user-action fa fa-user-circle " aria-expanded="false" > username</a>
                    <div class="dropdown-menu" style="display:false ">

                              <a href="verify.php" class="dropdown-item"><i class="fa fa-user-check " aria-hidden="true"></i> Get Verified</a>
                              <a href="ResetPassword.php" class="dropdown-item"><i class="fa fa-cog " aria-hidden="true"></i> Account Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Sign Out</a>
                    </div> -->


                      <select class="btn btn-primary rounded-pill " name="formal" onchange="javascript:handleSelect(this)">
                      <option value="none" selected disabled hidden>username</option>
                        <option value="verify">Get Verified</option>
                        <option value="ResetPassword">Account Settings</option>
                        <option value="Logout">Sign out</option>
                      </select>
                      <script type="text/javascript">
  function handleSelect(elm)
  {
     window.location = elm.value+".php";
  }
</script>
                </div>

            </div>
    </header>


<br>
<br>

    <div class="l-navbar show " id="nav-bar">
        <nav class="nav">

            <div> 
                <br>
                <br>
              <!-- <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">ICargo Partners</span> </a> -->
             
                <div class="nav_list "> 

                  <a href="Dashboard.php" class="nav_link active"> <i class='fa fa-th-large nav_icon'></i> <span class="nav_name ">Dashboard</span> </a> 

                </div>


                <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                <a href="ordersSample1.php" class="nav_link " style="margin-bottom: 0px"> <i class='fa fa-box nav_icon'></i> <span >Orders</span> </a> 
                 
                      <a href="AcceptedOrders.php" class="nav_link_l"><ul >Accepted Orders</ul></a>
                      <a href="TrackOrders.php" class="nav_link_l "><ul>Track Orders</ul></a>
                      <a href="TransactionHistory.php" class="nav_link_l"><ul>Transaction History</ul></a>
                    
                </li>


           
                <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                <a href="Shipments.php" class="nav_link" style="margin-bottom: 0px"> <i class='fa fa-truck nav_icon'></i> <span class="nav_name">Shipment</span> </a> 

                      <a href="InTransit.php" class="nav_link_l"><ul >In-Transit</ul></a>
                      <a href="pending.php" class="nav_link_l"><ul>Pending</ul></a>
                      <a href="delivered.php" class="nav_link_l"><ul>Delivered</ul></a>
                      <a href="Cancelled.php" class="nav_link_l"><ul>Cancelled</ul></a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed ">

                <a href="FleetManagement.php" class="nav_link" style="margin-bottom: 0px"> <i class='fa fa-clipboard nav_icon'></i> <span class="nav_name">Fleet Management</span> </a> 
                
                      <a href="Staffs.php" class="nav_link_l"><ul >Staffs</ul></a>
                      <a href="Vehicles.php" class="nav_link_l"><ul>Vehicles</ul></a>
                      <a href="ServiceableArea.php" class="nav_link_l"><ul>Serviceable Areas</ul></a>

                </li>
             

                <div class="nav_list"> 

                  <a href="billing.php" class="nav_link "> <i class='fa fa-list-alt  nav_icon'></i> <span class="nav_name">Billing and Charges</span> </a> 

                </div>


                <div>

                <a href="Profile.php" class="nav_link"> <i class='fa fa-user nav_icon'></i> <span class="nav_name">Profile</span> </a> 
   
                 </div>
            </div> 
            
          <!--   <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>  -->
        </nav>
    </div>


    
    <!--Container Main start-->
    <div class="height-100 bg-light">
      <br>  <br>  <br> 
      
    
    <!--Container Main end-->
    


<!-- mine -->


<!-- NavBar Start 
 


  <div class="sidebar-container">
    <ul class="sidebar-navigation navbar-expand-lg  navbar-collapse">
  

      <li class="selected" >
        <a href="dashSample1.php">
          <i class="fa fa-th-large" style="color:#0D7CFF"><br> Dashboard </i>
        </a>
      </li>


      <li>
        <a href="ordersSample1.php"  >
        <i class="fa fa-box"> <br>Orders</i> 
        </a>
        <a href="../partners/AcceptedOrders.php">
              <ul>Accepted Orders</ul>
             </a>  

             <a href="TrackOrders.php">
              <ul aria-hidden="true">Track Orders</ul> 
             </a>
          
            <a href="TransactionHistory.php">
              <ul aria-hidden="true">Transaction History</ul> 
            </a>
      </li>

      <li class="nav-item nav-link">
        <a href="Shipments.php" >
          <i class="fa fa-truck-moving aria-hidden=true"> <br>Shipments</i> 
        </a>
            <a href="Dashboard.html">
              <ul aria-hidden="true">In-transit</ul> 
            </a> 
            <a href="Dashboard.html">
              <ul aria-hidden="true">Pending</ul> 
            </a>
            <a href="Dashboard.html">
              <ul aria-hidden="true">Delivered</ul> 
            </a>
            <a href="Dashboard.html"> 
              <ul aria-hidden="true">Cancelled</ul> 
            </a>
      </li>
      
      <li>
        <a href="FleetManagement.php">
          <i class="fa fa-clipboard aria-hidden=true" font-color="gray"> <br> Fleet Management</i> 
        </a>
            <a href="Staffs.php">
              <ul aria-hidden="true">Staffs</ul> 
            </a>
            <a href="Vehicles.php">
              <ul aria-hidden="true">Vehicles</ul> 
            </a>
            <a href="ServiceableArea.php">
              <ul aria-hidden="true">Serviceable Area</ul> 
            </a>
      </li>

      <li>
        <a href="../partners/billing.php">
          <i class="fa fa-list-alt"> <br>Billing and Charges</i> 
        </a>
      </li>

      <li>
        <a href="Profile.php">
          <i class="fa fa-user aria-hidden=true"> <br>Profile</i> 
      </li>
      
    </ul>
  </div>
</div>
-->
   <!-- NavBar Ends -->

   <div class="content-container">
  
      <div class="container-fluid">





        <div class="mergeCon justify-content-center">
        <!-- Content Start -->

            <div class="page title" >
              <a class="fa fa-th-large fa-2x  text-decoration-none" href="Dashboard.php"> Dashboard</a> 
            </div>
          

              <br>
      
          
<!--starting div for all cards-->
  <div class="row flex-container justify-content-center" style="padding-left: 0px;" >
  <?php
        
        if($_SERVER["REQUEST_METHOD"] == "GET"){ //get

          
        if(empty($_GET['sort'])){

        $day="this_day";

        }else{
          $day=$_GET['sort'];

        }
        }
        ?>
        <div class="select_Sort ">
          
          <select class="dropdown float-right " aria-label="Default select example"  name="date" id="date" onchange="window.location='?sort='+document.getElementById('date').value;">

            <option value="this_day"<?php if($day=="this_day") echo 'selected="selected"'; ?>>This Day</option>
            <option value="this_week"<?php if($day=="this_week") echo 'selected="selected"'; ?>>This Week</option>
            <option value="this_month"<?php if($day=="this_month") echo 'selected="selected"'; ?>>This Month</option>
            <option value="last_week"<?php if($day=="last_week") echo 'selected="selected"'; ?>>Last Week</option>

          </select>
        </div>
        <br>
   
      
<!--#################################################################### Order Container-##############################################################-->
        <div class="row row-cols-2 flex-container justify-content-center">
          <div class="col flex-item-left justify-content-center ">
            <div class="row  flex-container justify-content-center">

              <div class="Ordercontainer  flex-container justify-content-center">
                <div class="card" style="width: 34rem; height: 14rem;">
                  <nav class="navbar navbar-light bg-light shadow p-2 bg-body rounded "><h5>Orders Overview </br></h5></nav>
                  <br>

                    <!----------------------Accepted Ordes----------------------->
                    <div class="cards_order">
                    <div class="card" style="width: 15rem; height: 7rem;">

                      <div class="card-body">
                        <h6 class="card-title">Accepted orders</h6>
                        <form action="dashSample.php" method="post"> 
                          <!-- Button trigger modal -->
                          <a type="button" href="Shipments.php" class="btn btn-primary float-right" value="">></a>
                        </form>
                         <p class="card-text">


                                                        <?php  

                        //get order number & sort

                          if($_SERVER["REQUEST_METHOD"] == "GET"){//accepted orders
                            //accepted orders
                            $sql = "select * from orders where date_booked=CURRENT_DATE and `ac_dc_stat`='accepted';";   
                            if(isset($_GET['sort']))
                            {
                              
                                if( $_GET['sort'] == 'this_day'){
                                  $sql = "select * from orders where date_booked=CURRENT_DATE and `ac_dc_stat`='accepted';";   
                              
                                }
                                else if( $_GET['sort'] == 'this_week'){
                                  $sql = "SELECT * FROM `orders` WHERE `date_booked`=DATE_ADD(CURDATE(),INTERVAL +7 DAY) and `ac_dc_stat`='accepted';";   
                              
                                }
                                else if( $_GET['sort'] == 'this_month'){
                                  $sql = "SELECT * from orders WHERE month(`date_booked`)=month(CURRENT_DATE) and `ac_dc_stat`='accepted';";   
                              
                                }
                                else if( $_GET['sort'] == 'last_week'){
                                  $sql = "SELECT * FROM `orders` WHERE `date_booked`=DATE_ADD(CURDATE(),INTERVAL -7 DAY) and `ac_dc_stat`='accepted';";   
                              
                              
                                }
                          
                              }
                            
                            
                                if ($result=mysqli_query($conn,$sql)) {
                                  $rowcount = mysqli_num_rows($result);
                                  echo "<h3>".$rowcount.""; 
                                }
                              
                                
                            }
                          
                            ?>
                            
                              <form action="dashSample.php" method="post"> 
                              </form>
                                  
  
                   </div>
                 </div>




                <!------------------Available to Accept -------------------->
              <div class="card float-right " style="width: 15rem; height: 7rem;">
                
                <div class="card-body">
                  <h6 class="card-title">Available Orders to Accept </h6>
                     <!-- Button trigger modal -->
                      <a type="button" href="ordersSample1.php" class="btn btn-primary float-right" value="">></a>
                  <p class="card-text">

                  <?php  


              //get order number
                if($_SERVER["REQUEST_METHOD"] == "GET"){ //get
                

                  if(isset($_GET['sort']))
                  {     $sql = "select * from orders where date_booked=CURRENT_DATE and `ac_dc_stat`='';";   
                      if( $_GET['sort'] == 'this_day'){
                        $sql = "select * from orders where date_booked=CURRENT_DATE and `ac_dc_stat`='';";   
                    
                      }
                      else if( $_GET['sort'] == 'this_week'){
                        $sql = "SELECT * FROM `orders` WHERE `date_booked`=DATE_ADD(CURDATE(),INTERVAL +7 DAY) and `ac_dc_stat`='';";   
                    
                      }
                      else if( $_GET['sort'] == 'this_month'){
                        $sql = "SELECT * from orders WHERE month(`date_booked`)=month(CURRENT_DATE) and `ac_dc_stat`='';";   
                    
                      }
                      else if( $_GET['sort'] == 'last_week'){
                        $sql = "SELECT * FROM `orders` WHERE `date_booked`=DATE_ADD(CURDATE(),INTERVAL -7 DAY) and `ac_dc_stat`='';";   
                    
                    
                      }
                    }
                  
              
                
                
                      if ($result=mysqli_query($conn,$sql)) {
                          $rowcount = mysqli_num_rows($result);
                      
                  
                          echo "<h3>".$rowcount.""; 

                          //button >
                      
                      }
                      
                  }
                  ?>
                      <form action="dashSample.php" method="post"> </form>
                  
                
                </div>
              </div>



                  <!--Container end div-->
                  </div>
                </div>
              </div>

            </div>






 <!--###################################################### FLEET AREA ##########################-->
      <div class="row flex-container">
        <div class="fleetContainer flex-container ">
            <br>
            <div class="card" style="width: 34rem; height: 14rem;">
             <nav class="navbar  navbar-light bg-light shadow p-2  bg-body rounded"><h5>Fleet Overview </br></h5></nav>
               <br>
               <ul class="nav justify-content">   

                  <!------------------------ Staffs---------------------->
                  <div class="cards_fleet">
                    <div class="card" style="width: 10rem; height: 8rem;">
                    
                      <div class="card-body">
                       <h6 class="card-title">Staffs </h6>
                          <!-- Button trigger modal -->
                          <a type="button" href="Staffs.php" class="btn btn-primary float-right" value="">></a>

                              <p class="card-text">
                                          
                                            <?php  
                                            
                                  if($_SERVER["REQUEST_METHOD"] == "GET"){ //get




                                    
                                        $sql = "select * from drivers";

                                        if ($result=mysqli_query($conn,$sql)) {
                                            $rowcount = mysqli_num_rows($result);
                                        
                                    
                                            echo "<h3>".$rowcount."</h3"; 
                                        }
                                        
                                    }
                                      
                                      
                                      ?>
              
                      </div>
                   </div>
                <!---------------END DIV FOR Drivers------------------->
                  </div>



                <!------------------- Vehicles---------------------->
                <div class="card" style="width: 10rem; height: 8rem; ">
                  
                  <div class="card-body">
                    <h6 class="card-title">Vehicles</h6>
                      <!-- Button trigger modal -->
                        <a type="button" href="Vehicles.php" class="btn btn-primary float-right" value="">></a>

                          <p class="card-text">

                            <?php  
                            
                            if($_SERVER["REQUEST_METHOD"] == "GET"){ //get

                              $sql = "select * from vehicles";

                              if ($result=mysqli_query($conn,$sql)) {
                                  $rowcount = mysqli_num_rows($result);
                              
                                  echo "<h3>".$rowcount."</h3>"; 

                                  //button >
                              
                              }
                              
                            }
                            
                            
                            
                            ?>


                  </div>
             <!---------------END DIV FOR Vehicles------------------->
                </div>



              <!------------------------ Serviceable Area---------------------->
              <div class="card clearfix visible-lg-block" style="width: 10rem; height: 8rem;">
                
                <div class="card-body">
                  <h6 class="card-title">Serviceable Area</h6>
                        <!-- Button trigger modal -->
                            <a type="button" href="ServiceableArea.php" class="btn btn-primary float-right" value="">></a>
                                
                                    <p class="card-text">
                      
                              <?php 

                              if($_SERVER["REQUEST_METHOD"] == "GET"){ //get service areas 
                                  
                                $sql = "select * from service_areas";

                                if ($result=mysqli_query($conn,$sql)) {
                                    $rowcount = mysqli_num_rows($result);
                                

                                    echo "<h3> ".$rowcount." </h3>"; 

                                    //button >
                                    
                                }
                                
                              }




                              ?>

                </div>
              <!-- end div for SERVICEABLE AREA-->
              </div>


          </div>



                  
        </div>
    <!-- end div for FLEET CONTAINER-->
    </div>
  </div>

<!-- end div for ROW ROW-COLS-2-->
</div>






  <!--############################################ SHIPMENT OVERVIEW #############################################################################3###3-->

  <div class="col flex-item-right" style="padding-left: 0px";>

    <div class="shipmentContainer flex-container ">
      <div class="card" style="width: 34rem; height: 28.5rem;">
        <nav class="navbar  navbar-light bg-light shadow p-2 bg-body rounded"><h5>Shipment Overview </br></h5></nav>
         <br>

          <ul class="nav justify-content">

            <!--In-Transit Card --->
            <div class='shipment_cards'>
              <div class="card" style="width: 15rem; height: 7rem;">
      
               <div class="card-body">
                 <h6 class="card-title">In-Transit </h6>

                  <!-- Button trigger modal -->
                  <a type="button" href="InTransit.php" class="btn btn-primary float-right" value="">></a>

                    <?php  


                    //get Intransit number
                      if($_SERVER["REQUEST_METHOD"] == "GET"){ //get
                        $sql = "select * from orders where date_booked=CURRENT_DATE and status='in transit'";  
                        if(isset($_GET['sort']))
                        {    
                            if( $_GET['sort'] == 'this_day'){
                              $sql = "select * from orders where date_booked=CURRENT_DATE and status='in transit'";   
                          
                            }
                            else if( $_GET['sort'] == 'this_week'){
                              $sql = "SELECT * FROM `orders` WHERE `date_booked`=DATE_ADD(CURDATE(),INTERVAL +7 DAY) and status='in transit'";      
                          
                            }
                            else if( $_GET['sort'] == 'this_month'){
                              $sql = "SELECT * from orders WHERE month(`date_booked`)=month(CURRENT_DATE) and status='in transit'";   
                          
                            }
                            else if( $_GET['sort'] == 'last_week'){
                              $sql = "SELECT * FROM `orders` WHERE `date_booked`=DATE_ADD(CURDATE(),INTERVAL -7 DAY) and status='in transit'";   

                            }
                          }
                        
                            if ($result=mysqli_query($conn,$sql)) {
                                $rowcount = mysqli_num_rows($result);
                            
                        
                                echo "<h3>".$rowcount."</h3>"; 

                            }
                            
                        }
                        ?>
                        <form action="dashSample.php" method="post">  </form>  
                </div>
              </div>




              <!----------- delivered card------------------>

              <div class="card" style="width: 15rem; height: 7rem;">
                <div class="card-body">
                  <h6 class="card-title">Delivered </h6>
                    <!-- Button trigger modal -->
                     <a type="button" href="delivered.php" class="btn btn-primary float-right" value="">></a>

                       <?php  
                        //get delivered number
                          if($_SERVER["REQUEST_METHOD"] == "GET"){ //get
                            $sql = "select * from orders where date_booked=CURRENT_DATE and status='delivered'";
                            if(isset($_GET['sort']))
                            {
                                if( $_GET['sort'] == 'this_day'){
                                  $sql = "select * from orders where date_booked=CURRENT_DATE and status='delivered'";
                              
                                }
                                else if( $_GET['sort'] == 'this_week'){
                                  $sql = "SELECT * FROM `orders` WHERE `date_booked`=DATE_ADD(CURDATE(),INTERVAL +7 DAY) and status='delivered'";
                              
                                }
                                else if( $_GET['sort'] == 'this_month'){
                                  $sql = "SELECT * from orders WHERE month(`date_booked`)=month(CURRENT_DATE) and status='delivered'";
                              
                                }
                                else if( $_GET['sort'] == 'last_week'){
                                  $sql = "SELECT * FROM `orders` WHERE `date_booked`=DATE_ADD(CURDATE(),INTERVAL -7 DAY) and status='delivered'";
                              
                                }
                              }

                                if ($result=mysqli_query($conn,$sql)) {
                                    $rowcount = mysqli_num_rows($result);
                                
                                    echo "<h3>".$rowcount."</h3>"; 

                                }
                                
                            }
                            ?>
                               <form action="dashSample.php" method="post"> </form>  
                 </div>
                 <!-----------end div delivered card------------------>
                </div>

         <!-----------end div 1st 2 cards in Shipment card------------------>
            </div>



        </ul>



<br>
              <!------------------------------- pending card------------------------------------->
              <ul class="nav justify-content">
                <div class='shipment_cards'>
                  <div class="card" style="width:15rem; height: 7rem;">
                
                   <div class="card-body">
                     <h6 class="card-title">Pending </h6>
                                
                        <!-- Button trigger modal -->
                           <a type="button" href="pending.php" class="btn btn-primary float-right" value="">></a>

                              <?php  


                              //get pending number
                                if($_SERVER["REQUEST_METHOD"] == "GET"){ //get
                                  $sql = "select * from orders where date_booked=CURRENT_DATE and  ac_dc_stat ='pending'";
                                  if(isset($_GET['sort']))
                                  {
                                      if( $_GET['sort'] == 'this_day'){
                                        $sql = "select * from orders where date_booked=CURRENT_DATE and  ac_dc_stat ='pending'";
                                      }
                                      else if( $_GET['sort'] == 'this_week'){
                                        $sql = "SELECT * FROM `orders` WHERE `date_booked`=DATE_ADD(CURDATE(),INTERVAL +7 DAY) and  ac_dc_stat ='pending'";
                                      }
                                      else if( $_GET['sort'] == 'this_month'){
                                        $sql = "SELECT * from orders WHERE month(`date_booked`)=month(CURRENT_DATE) and  ac_dc_stat ='pending'";
                                    
                                      }
                                      else if( $_GET['sort'] == 'last_week'){
                                        $sql = "SELECT * FROM `orders` WHERE `date_booked`=DATE_ADD(CURDATE(),INTERVAL -7 DAY) and  ac_dc_stat ='pending'";
                                    
                                      }
                                    }

                                  
                                
                                      if ($result=mysqli_query($conn,$sql)) {
                                          $rowcount = mysqli_num_rows($result);
                                      
                                  
                                          echo "<h3>".$rowcount."</h3>"; 


                                      
                                      }
                                      
                                  }
                                  ?>
                              <form action="dashSample.php" method="post"> </form>  
                      </div>
                  </div>






                      <!--------------------- CANCELLED ----------------->


                      <div class="card" style="width:15rem; height: 7rem;">
                        <div class="card-body">
                          <h6 class="card-title">Cancelled </h6>

                                    <!-- Button trigger modal -->
                                        <a type="button" href="Cancelled.php" class="btn btn-primary float-right" value="">></a>


                                  <?php  


                                  //get cancelled number
                                    if($_SERVER["REQUEST_METHOD"] == "GET"){ //get
                                      $sql = "select * from orders where date_booked=CURRENT_DATE and date_cancel !=''";
                                      if(isset($_GET['sort']))
                                      {
                                          if( $_GET['sort'] == 'this_day'){
                                            $sql = "select * from orders where date_booked=CURRENT_DATE and date_cancel !=''";
                                          }
                                          else if( $_GET['sort'] == 'this_week'){
                                            $sql = "SELECT * FROM `orders` WHERE `date_booked`=DATE_ADD(CURDATE(),INTERVAL +7 DAY) and  date_cancel !=''";
                                          }
                                          else if( $_GET['sort'] == 'this_month'){
                                            $sql = "SELECT * from orders WHERE month(`date_booked`)=month(CURRENT_DATE) and  date_cancel !=''";
                                        
                                          }
                                          else if( $_GET['sort'] == 'last_week'){
                                            $sql = "SELECT * FROM `orders` WHERE `date_booked`=DATE_ADD(CURDATE(),INTERVAL -7 DAY) and  date_cancel !=''";
                                        
                                          }
                                        }

                                          if ($result=mysqli_query($conn,$sql)) {
                                              $rowcount = mysqli_num_rows($result);
                                          
                                      
                                              echo "<h3>".$rowcount."</h3>"; 

                                          }
                                          
                                      }
                                      ?>
                                       <form action="dashSample.php" method="post"> </form>  
                           </div>
                        </div>


                 </div>
  
               </ul>

         </div>
      </div>


    <!-- end div for shipment cont-->
      </div>
 <!-- end div for all cards-->
  </div>

</ul>
</ul>

 <!-- end div for mergeCon-->
</div>




<br><br><br>





<!--####################################searchArea###############################-->


  <div class="searchArea">
    <div class="panel panel-primary filterable">

    <nav class="navbar  navbar-light bg-light shadow   bg-body rounded"><h3>Recent Orders </br></h3>
        <div class="titleSearch">
        <form action='dashSample.php' method='post'> 


        <input type="type" name = "ordernum" id = "search_input" value = "" onkeyup="myFunction()" placeholder=" Search Order Number">  
   
    </nav>
                    <div class="panel-body">
                        <!-- panel content start -->
                           <!-- Table -->
		
                        <table id="myTable" class="table table-hover    table-responsive-xl ">
                        <thead class="thead-light" >
                              <tr>
                            <th>Order Number</th>
                            <th>Tracking Number </th>
                            <th>Sender</th>
                            <th>Recipient </th>
                            <th>Date Booked</th>
                            <th>Date Delivered </th>
                            <th>Status</th>
                                </tr>
                            </thead>
    </nav>						
							
                            <form action='dashSample.php' method='post'> 




                            <?php  


                            $sql = "sELECT * FROM `orders` ORDER BY `date_booked` DESC";               
                            $res = mysqli_query($conn,$sql);


                            while($row = mysqli_fetch_array($res))
                                  {
                                            echo "<tr>";
                                            echo "<td cope='row'>" . $row['order_number'] . "</td>";
                                            echo "<td>" . $row['tracking_number'] . "</td>";
                                            echo "<td>" . $row['sender'] . "</td>";
                                            echo "<td>" . $row['recipient'] . "</td>";
                                            echo "<td>" . $row['date_booked'] . "</td>";
                                            echo "<td>" . $row['date_delivered'] . "</td>";
                                            echo "<td>" . $row['status'] . "</td>";
                                            echo "</tr>";
                                
                                  }
                                
                            ?>

                       </div>
      </div>

	  </table>
    
<!-- end div for search area-->
</div>

<!-- end div for container fluid-->
</div>
<!-- end div for content container -->
</div>





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







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/counterup/counterup.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

           
            <script src="/path/to/cdn/jquery.min.js"></script>
            <script src="/path/to/tableManager.js"></script>

            <!-- Contact Javascript File -->
            <script src="mail/jqBootstrapValidation.min.js"></script>
            <script src="mail/contact.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js">

</script>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Plugin file -->
<script src="./js/addons/datatables.min.js"></script>




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