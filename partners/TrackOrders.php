
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
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/js/bootstrap.min.js" rel="stylesheet">


<!--
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
-->
  
<!--JQUERY-->
   <title>Track Orders</title>

<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mdb.min.css">
<!-- Plugin file -->
<link rel="stylesheet" href="./css/addons/datatables.min.css">
<link rel="stylesheet" href="/css/style.css">


 <!---bootstrap rp-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
   
<!--JQUERY rp-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/SideBarCollapses.css">





</head>

<!-- CSS-->
<style>
  .searchArea{
    margin-top:20px;
    padding:0px;

  }
.mergeCon{
width:105%;
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


/**Order Area  */
.Ordercontainer{
display:flex;
gap:10px;
float:left;
padding: 0px 10px 10px 10px;
flex-wrap:wrap;
}

/**Fleet Area  */
.fleetContainer{
display:flex;
gap:10px;
padding:0px 10px 10px 0px;
flex-wrap:wrap;

}

/**Shipment Area  */
.shipmentContainer{
  display:flex;
  gap:10px;
padding: 0px;
/* float: right; */
flex-wrap:wrap;

}

.cards_fleet{
  display:flex;
  gap:20px;
  padding:0px 10px 0px 10px;
  
}


.cards_order{
  display:flex;
  gap:20px;
  padding:0px 10px 20px 20px;
  
}

.shipment_cards{
display:flex;
height:fit-content;
gap:20px;
padding:30px 10px 20px 20px;
}



.card{
  background: #FFFFFF;
  box-shadow:  5px 5px 20px #b0b0b0,
              -10px -10px 50px #ffffff;
              border-radius:20px;
  display:flex;

         
}


.card-title
{
font-style: normal;
}


.select_Sort{
  /*width:90%;*/
padding:10px
}

#nav h5 {
   display: inline-block;
   text-align:center; 
}

.table-hover > tbody > tr:hover  table table-hover table-responsive-xl{
  background-color: #D2D2D2;
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
  background-color: #fff;
}

.selected{
    border-left:9px  solid #FBCD10;
    padding: 0px 0px 4px 5px;

   }


.unselected{
    color: rgb(228, 26, 26);
  
    
}



 .div.d-grid gap-2 d-md-flex justify-content
 {
  padding: 10px 15px 10px 30px;
 }


 .sidebar-container {
  position: fixed;
  width: 220px;
  height: 100%;
  left: 0;
  overflow-x: hidden;
  overflow-y: auto;
  background: #fff;
  color: #000;
  padding-top: 0 px;
}

.content-container {
  padding-top: 30px;
}

.sidebar-logo {
  padding: 10px 15px 10px 30px;
  font-size: 20px;
  background-color: #2574A9;
}

.sidebar-navigation {
  padding:0;
  margin: 0;
  list-style-type: none;
  position: relative;
 

}

.sidebar-navigation li {
  background-color: transparent;
  position: relative;
  display: inline-block;
  width: 100%;
  line-height: 16px;
  padding: 15px 10px 10px 15px;
  border-bottom: 1px solid #201e1644;
  
     
}
.fa
{

}

.sidebar-navigation li a .fa{
  padding: 0px 0px 4px 20px;
  display: block;
  color: #4A4949;
  font-size: 18px;
  

}

.sidebar-navigation ul {
  padding: 0px 10px 5px 50px;
  display: block;
  color: #4A4949;
  font-size: 12px;
  font-family:"roboto";
  font-weight: 400;
}

.sidebar-navigation .fa {
  margin-right: 10px;
  
}

.sidebar-navigation ul:active,
.sidebar-navigation ul:hover,
.sidebar-navigation ul:focus,
.sidebar-navigation ul a,i:active,
.sidebar-navigation ul a,i:hover,
.sidebar-navigation ul a,i:focus,
.sidebar-navigation li a:active,
.sidebar-navigation li a:hover,
.sidebar-navigation li a:focus {
  text-decoration: underline;
  outline: none;
  
  
}
#nav li a {}

.sidebar-navigation li::before {
  background-color: #FBCD10;
  position: absolute;
  content: '';
  height: 100%;
  left: 0;
  top: 0;
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 0px;
  z-index: -1;
  
}

.sidebar-navigation li:hover::before {
  width: 100%;
}

.sidebar-navigation .header {
  font-size: 12px;
  text-transform: uppercase;
  background-color: #fcfcfc;
  padding: 10px 15px 10px 30px;
}

.sidebar-navigation .header::before {
  background-color: transparent;
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


    .d-grid gap-2 d-md-flex justify-content-md-center
    {
        position:relative;
        right: 730px;
    }

.btn btn-primary float-right
{
top:67rem;
}


table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
  bottom: .5em;
}


</style>


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
             
                <div class="nav_list"> 
                  <a href="Dashboard.php" class="nav_link "> <i class='fa fa-th-large nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                </div>

            
                <li  data-toggle="collapse" data-target="#products" class="collapsed active   ">
                <a href="ordersSample1.php" class="nav_link   " style="margin-bottom: 0px"> <i class='fa fa-box nav_icon'></i> <span >Orders</span> </a> 
                 
                      <a href="AcceptedOrders.php" class="nav_link_l  "><ul >Accepted Orders</ul></a>
                      <a href="TrackOrders.php" class="nav_link_l "><ul style="color:white" >Track Orders</ul></a>
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
            
          <!--<a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a> -->
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
      <br>  <br>  <br> 
      
    
    <!--Container Main end-->
    


<!-- mine -->

<!-- Header Start -->




        
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


   <!-- Content Start -->
   <div class="content-container">
  
  <div class="container-fluid">

  <div class="container mt-3 ">
    <div class="page title" >
    <a class="fa fa-box fa-2x  text-decoration-none" href="TrackOrders.php"> Track Orders</a> 
    
    </div>
   


<!--#################################### CLICKABLE ORDERS TABLE ###############################--->

<br>
     <div class="titleSearch" style=" padding-bottom:0px">
      <p class="pageDetails" style="margin-left: 30%; font-size:12px; padding-bottom:0px"> Track your orders here</p>
      </div>
      
      <div style="margin:auto; margin-left: 30%;">
   
          <input type="text" class="input-responsive " name = "ordernum" id = "search_input" value = "" onkeyup="myFunction()" placeholder=" Enter Order Number here"
          style="width: 60%;"> &nbsp; 
          <a type="button" onkeyup="myFunction()" ><i class="fa fa-search" aria-hidden="true" style="text-decoration:none; width: 80%;"></i> </a>&nbsp;
          </div>
      <br>
      
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


<!--
    <div class="div  div-light bg-light shadow   bg-body rounded  div-responsive" 
            style="
            justify-content: center;
            width: max-content">

        <div class="titleSearch">
            <p class="pageDetails"> Available Orders to commit</p>
            <form action='TrackOrders.php' style="margin:auto;max-width:300px" method='post'> 

            <input type="type" class="input-responsive " name = "ordernum" id = "search_input" value = "" onkeyup="myFunction()" placeholder=" Search ID" style="width: auto"> &nbsp; 
            <a type="button" onkeyup="myFunction()" ><i class="fa fa-search" aria-hidden="true" style="text-decoration:none"></i> </a>&nbsp;
        </div>
    </div>
-->



<br>

          
           
<?php
require_once('../admin/db_connect.php');

if($_SERVER["REQUEST_METHOD"] == "GET")
{
$dte_today = date("Y-m-d");
$week_Ago = date("Y-m-d", strtotime("-7 days"));
$month_Ago = date("Y-m-d", strtotime("-30 days"));
$ths_week = date("Y-m-d", strtotime("this week"));

$ths_month = date("Y-m-01", strtotime("this month"));

if(isset($_GET['sort']))
    {
        if( $_GET['sort'] == 'this_day'){
        $sql = "select * from orders where date_booked='$dte_today' and ac_dc_stat='accepted'";               
        
        $res = mysqli_query($conn,$sql);
        //column  
echo '
<table id="myTable" class="table table-hover  table-responsive-xl ">
<thead class="thead-light">  
    <tr>
        <th scope="col">Order Number</th>
        <th scope="col">Sender</th>
        <th scope="col">Recipient</th>
        <th scope="col">Pick-up Point</th>
        <th scope="col">Drop-off Point</th>
        <th scope="col">Cargo Type</th>
        <th scope="col">Cargo Service</th>
        
    </tr>
</thead>
<tbody>
';
//row
 while($row=mysqli_fetch_assoc($res))
    {
        echo '
        <tr class=modalButton data-toggle="modal" data-id="'.$row['order_number'].'">
        <td>'.$row["order_number"].'</td>
        <td>'.$row["sender"].'</td>
        <td>'.$row["recipient"].'</td>
        <td>'.$row["pick_up_point"].'</td>
        <td>'.$row["drop_off_point"].'</td>
        <td>'.$row["cargo_type"].'</td>
        <td>'.$row["cargo_service"].'</td>
        </td>
        </tr>
        ';
    }

        }else if ($_GET['sort'] == 'this_week'){
            $sql = "select * from orders where date_booked between '$ths_week' and '$dte_today' and ac_dc_stat='accepted'";               

        $res = mysqli_query($conn,$sql);
        //column
echo '
<table id="myTable" class="table table-hover  table-responsive-xl ">
<thead class="thead-light">  
    <tr>
        <th scope="col">Order Number</th>
        <th scope="col">Sender</th>
        <th scope="col">Recipient</th>
        <th scope="col">Pick-up Point</th>
        <th scope="col">Drop-off Point</th>
        <th scope="col">Cargo Type</th>
        <th scope="col">Cargo Service</th>
        
    </tr>
</thead>
<tbody>
';
//row
 while($row=mysqli_fetch_assoc($res))
    {
        echo '
        <tr class=modalButton data-toggle="modal" data-id="'.$row['order_number'].'">
        <td>'.$row["order_number"].'</td>
        <td>'.$row["sender"].'</td>
        <td>'.$row["recipient"].'</td>
        <td>'.$row["pick_up_point"].'</td>
        <td>'.$row["drop_off_point"].'</td>
        <td>'.$row["cargo_type"].'</td>
        <td>'.$row["cargo_service"].'</td>
        </td>
        </tr>
        ';
    }


        }else if ($_GET['sort'] == 'this_month'){

             $sql = "select * from orders where date_booked between '$ths_month' and '$dte_today' and ac_dc_stat='accepted'";               

        $res = mysqli_query($conn,$sql);
        //column
echo '
<table id="myTable" class="table table-hover  table-responsive-xl ">
<thead class="thead-light">  
    <tr>
        <th scope="col">Order Number</th>
        <th scope="col">Sender</th>
        <th scope="col">Recipient</th>
        <th scope="col">Pick-up Point</th>
        <th scope="col">Drop-off Point</th>
        <th scope="col">Cargo Type</th>
        <th scope="col">Cargo Service</th>
        
    </tr>
</thead>
<tbody>
';
//row
 while($row=mysqli_fetch_assoc($res))
    {
        echo '
        <tr class=modalButton data-toggle="modal" data-id="'.$row['order_number'].'">
        <td>'.$row["order_number"].'</td>
        <td>'.$row["sender"].'</td>
        <td>'.$row["recipient"].'</td>
        <td>'.$row["pick_up_point"].'</td>
        <td>'.$row["drop_off_point"].'</td>
        <td>'.$row["cargo_type"].'</td>
        <td>'.$row["cargo_service"].'</td>
        </td>
        </tr>
        ';
    }

        }else if ($_GET['sort'] == 'last_week'){
            $sql = "select * from orders where date_booked between '$week_Ago' and '$dte_today' and ac_dc_stat='accepted' ";               

        $res = mysqli_query($conn,$sql);
        //column
echo '
<table id="myTable" class="table table-hover  table-responsive-xl ">
<thead class="thead-light">  
    <tr>
        <th scope="col">Order Number</th>
        <th scope="col">Sender</th>
        <th scope="col">Recipient</th>
        <th scope="col">Pick-up Point</th>
        <th scope="col">Drop-off Point</th>
        <th scope="col">Cargo Type</th>
        <th scope="col">Cargo Service</th>
        
    </tr>
</thead>
<tbody>
';
//row
 while($row=mysqli_fetch_assoc($res))
    {
        echo '
        <tr class=modalButton data-toggle="modal" data-id="'.$row['order_number'].'">
        <td>'.$row["order_number"].'</td>
        <td>'.$row["sender"].'</td>
        <td>'.$row["recipient"].'</td>
        <td>'.$row["pick_up_point"].'</td>
        <td>'.$row["drop_off_point"].'</td>
        <td>'.$row["cargo_type"].'</td>
        <td>'.$row["cargo_service"].'</td>
        </td>
        </tr>
        ';
    }
        }
    }
    else {
        $query="select * from orders where ac_dc_stat='accepted'";
$execute=mysqli_query($conn,$query);

//column
echo '
<table id="myTable" class="table table-hover  table-responsive-xl ">
<thead class="thead-light">  
    <tr>
        <th scope="col">Order Number</th>
        <th scope="col">Sender</th>
        <th scope="col">Recipient</th>
        <th scope="col">Pick-up Point</th>
        <th scope="col">Drop-off Point</th>
        <th scope="col">Cargo Type</th>
        <th scope="col">Cargo Service</th>
        
    </tr>
</thead>
<tbody>
';
//row
 while($row=mysqli_fetch_assoc($execute))
    {
        echo '
        <tr class=modalButton data-toggle="modal" data-id="'.$row['order_number'].'">
        <td>'.$row["order_number"].'</td>
        <td>'.$row["sender"].'</td>
        <td>'.$row["recipient"].'</td>
        <td>'.$row["pick_up_point"].'</td>
        <td>'.$row["drop_off_point"].'</td>
        <td>'.$row["cargo_type"].'</td>
        <td>'.$row["cargo_service"].'</td>
        </td>
        </tr>
        ';
    }
    }

    
}











?>



</tbody>
</table>



<!--------------------------Modal starts Here
<div class="modal fade" id="dynamicModal"<?php echo $row['order_number'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
               <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </button>
            </div>
            <div class="modal-body">
            
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btnaccept" data-dismiss="modal">Accept</button>
                <button type="button" class="btndec" data-dismiss="modal">Decline</button>
            </div>
            
        </div>
    </div>
</div>
        
</body>

<script>
/*$(document).ready(function(){
    $(".modalButton").click(function(){
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
    })
})*/

$(document).ready(function(){
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
    $(".btnaccept").on('click',function(){
            //alert(id);
       $.ajax({
            url:"ajax.php",
            method:"post",
            data:{acpt:id},
            success:function(response){
                $(".modal-body").html(response);
                $("#dynamicModal").modal('show');

            }
        })
            //location.reload();
    })
    $(".btndec").on('click',function(){
            //alert(id);
       $.ajax({
            url:"ajax.php",
            method:"post",
            data:{decc:id},
            success:function(response){
                $(".modal-body").html(response);
                $("#dynamicModal").modal('show');

            }
        })})


    })

    /*$(".btnaccept").on('click',function(){
       

    })*/
   
})  
</script>

<br><br><br>

    MODAL COMMENT END
-------------------------------------------------------------------------->
<!-- end div for SEARCH AREA-->
</div>


<!-- end div for cards-->

<!-- end div for CONTENT-FLUID-->
    </div>





<!--------- CONTENT CONTAINER ENDS---------->
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
</SCRIPT>

<br><br><br>

<!-- end div for SEARCH AREA-->
</div>


<!-- end div for cards-->

<!-- end div for CONTENT-FLUID-->
  </div>






<!--------- CONTENT CONTAINER ENDS---------->
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




<!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
          

</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  


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
