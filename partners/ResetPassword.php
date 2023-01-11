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



 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    


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

<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!--
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
-->
  
<!--JQUERY-->
   <title>Reset Password</title>

    



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

<link rel="stylesheet" href="css/style.css">


<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>

<!-- CSS-->
<style>  

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

.table-hover > tbody > tr:hover  table table-hover table-responsive-xl 

{
  background-color: #D2D2D2 !important;
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
  padding-left: 220px;
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




p.pageDetails
{
  float: left;
  margin-bottom:0px;
  padding-left: 0px;
}


tr:hover {
    background: #D2D2D2;
 }



 .btnModal
 {
   float:left;
   margin-left: auto;
    margin-right: 180px;
    padding-bottom: 20px;
}









.material-textfield {
  position: relative;    /*
  width: max-content;
  float: right;
    margin-right: 18%; */
    margin-bottom: 5%;
}

label {
  position: absolute;
  font-size: 1rem;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  background-color: white;
  color: gray;
  padding: 0 0.3rem;
  margin: 0 0.5rem;
  transition: .1s ease-out;
  transform-origin: left top;
  pointer-events: none;
}
input, .countryNum {
  font-size: 1rem;
  outline: none;
  border: 1px solid gray;
  border-radius: 5px;  
  padding: 1rem 0.7rem;
  color: gray;
  transition: 0.1s ease-out;
}
input:focus {
  border-color: #2E85EB;  
}
input:focus + label {
  color: #2E85EB;
  top: 0;
  transform: translateY(-50%) scale(.9);
}
input:not(:placeholder-shown) + label {
  top: 0;
  transform: translateY(-50%) scale(.9);
}


.form-group1
{
    font-size: 20px;
   justify-content:center;
   margin: auto;
   text-align: center;
   width: 90%;
}

.h6{
    color:#5C5C5C !important;
}

.text-primary-sender
{
    color: #0D7CFF !important;
    font-weight: 200;
    margin-right: 50px;

}

.text-secondary-sender
{
    color: #5C5C5C;
    font-weight: 600;
    
}

.text-tertiary-sender
{
    color:#6c757d;
    font-weight: 400;
    
}

</style>



<body>



<!-- mine -->

<!-- Header Start -->


<div class="container-fluid p-0 sticky-top">
                <nav class="navbar navbar-light bg-light navbar-expand-lg shadow p-3 bg-body rounded">
                <div class="container-fluid">
                      <a class="navbar-brand icargo-navbar" href="dashSample1.php"><h2 style=""><img src="assets/icargologo.png" width="70" height="50" alt=""><font color="#0D7CFF"> iCargo</font> <font color="#FBCD10">Partner</font></h2></a>
                   
                      
                      <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                        <span class="navbar-toggler-icon"></span>
                    </button>


        <div class="navbar-collapse justify-content-between px-lg-3 collapse" id="navbarCollapse" style="">
              <div class="navbar-collapse justify-content-end px-lg-3 collapse" id="navbarCollapse" style="">
              <ul class="nav justify-content-end">
                      
                      <button class="btn btn-primary rounded-pill " type="button" href="dashSample1.php">Help</button>&nbsp;

                      <div class="nav-item dropdown show"> 
                        <a href="profile.html" data-toggle="dropdown" style="font-size:20px" class="nav-link dropdown-toggle user-action fa fa-user-circle " aria-expanded="false" > username</a>
                          <div class="dropdown-menu" style="display:false ">
                              <a href="#" class="dropdown-item"><i class="fa fa-user-check " aria-hidden="true"></i> Get Verified</a>
                              <a href="#" class="dropdown-item"><i class="fa fa-cog " aria-hidden="true"></i> Account Settings</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Sign Out</a>
                          </div>
                    </div>
                </ul>
                </div>
          </div>
  </div>
</nav>                
</div>


             <!-- Header End -->

  <!-- NavBar Start -->
 


  <div class="sidebar-container">
    <ul class="sidebar-navigation navbar-expand-lg  navbar-collapse">
  

      <li>
        <a href="Dashboard.php">
          <i class="fa fa-th-large" ><br> Dashboard </i>
        </a>
      </li>
      
      <li >
        <a href="ordersSample1.php"  >
        <i class="fa fa-box" > <br>Orders</i> 
        </a>
            <a href="AcceptedOrders.php">
              <ul>Accepted Orders</ul>
             </a>  

             <a href="TrackOrders.php">
              <ul aria-hidden="true">Track Orders</ul> 
             </a>
          
            <a href="TransactionHistory.php">
              <ul aria-hidden="true">Transaction History</ul> 
            </a>
      </li>

      <li >
        <a href="Shipments.php" >
          <i class="fa fa-truck-moving aria-hidden=true"  > <br>Shipments</i> 
        </a>
            <a href="InTransit.php">
              <ul aria-hidden="true">In-transit</ul> 
            </a> 
            <a href="Pending.php">
              <ul aria-hidden="true">Pending</ul> 
            </a>
            <a href="Delivered.php">
              <ul aria-hidden="true">Delivered</ul> 
            </a>
            <a href="Cancelled.php"> 
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

      <li >
        <a href="billing.php">
          <i class="fa fa-list-alt" > <br>Billing and Charges</i> 
        </a>
      </li>

      <li class="nav-item nav-link selected">
        <a href="Profile.php">
          <i class="fa fa-user aria-hidden=true" > <br>Profile</i> 
        </a>
      </li>
      
    </ul>
  </div>
</div>

   <!-- NavBar Ends -->
  

   <!-- Content Start -->
  <div class="content-container">
  
    <div class="container-fluid">

    <div class="container mt-3 ">
      <div class="page title" >
      <a class="fa fa-user fa-2x  text-decoration-none" href="Profile.php"> Profile</a> 
      
      </div>





<?php
  include 'database.php';
  ?>



<br>



<section>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 mt-1">
                    
                    <div class="row justify-content-between border shadow-lg mt-5 border-0" style="border-radius: 60px;">
                        
                        <div class="col-lg-12">
                            <div class="row justify-content-between">
                            <br><br>
                            <div class="form-group1">
                                <br>
                                    <h3 style="float:left"> Reset Password</h3>
                                   
                                </div>



       
      <div class="d-flex justify-content-center">
        <form action="passres.php" method="post">
          <br>  
            <div class="material-textfield">
              <input placeholder=" " type="password" name="password" id="password"  autocomplete="off" value="" size="30"></input>
              
              <label>Current Password</label>
            </div>

           

            <div class="material-textfield">
              <input placeholder=" " type="password" name="newpass" id="newpass"  autocomplete="off" value="" size="30"></input>
              <label>New Password</label>
             <!-- <i class="bi bi-eye-slash" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i> -->
            </div>

            

             <div class="material-textfield">
              <input placeholder=" " type="password" name="retypepass" id="retypepass"  autocomplete="off" value="" size="30"></input>
              <label>Retype New Password</label>
           
            </div>

            <input type="checkbox" onclick="myFunction()"> Show Password
            <br>
            <div><p id="NewPassStatus"></p></div>

                 
      </div>
                
     
   

        <div class="btnModal d-flex justify-content-center">

        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal" name="close" id="close">Back</button>
         &nbsp; &nbsp;
       
        <button type="submit" class="btn btn-warning rounded-pill" name="newpassSubmit" id="newpassSubmit">Save</button>
        </form>
      </div>

    </div>
  </div>
</div>

                  
                </div>
                
            </div>
        </div>

    </section>





<script>
function myFunction() {
  var x = document.getElementById('newpass');
  var y = document.getElementById('retypepass');
  var z = document.getElementById('password');
  if (x.type === "password") {
    x.type = "text";
     y.type = "text";
      z.type = "text";
  } else {
    x.type = "password";
     y.type = "password";
      z.type = "password";

  }
}
    </script>


<br><br><br>

<!-- end div for SEARCH AREA-->
</div>


<!-- end div for cards-->

<!-- end div for CONTENT-FLUID-->
    </div>






<!--------- CONTENT CONTAINER ENDS---------->
</div>





<script>
let input_element = document.querySelector("input");

input_element.addEventListener("keyup", () => {
    input_element.setAttribute("value", input_element.value);
})
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
           


            <!-- Contact Javascript File -->
          

            <!-- Template Javascript -->
          

</script>

</script>
</body>

</html>





<?php
}
else
{
header("Location: signinAll.php");
} ?>


 
