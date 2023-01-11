
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


  
 <!-- Latest compiled and minified CSS 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
-->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
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
<!--<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">-->
<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">


<!--
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
-->
  
<!--JQUERY-->
   <title>Profile</title>

    <!--<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">-->



<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!--<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mdb.min.css">-->
<!-- Plugin file 
<link rel="stylesheet" href="./css/addons/datatables.min.css">-->
<link rel="stylesheet" href="css/style.css">


 <!---bootstrap rp-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
   
<!--JQUERY rp-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap4.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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




.card{
  background: #FFFFFF;
  box-shadow:  5px 5px 20px #b0b0b0,
              -10px -10px 50px #ffffff;
              border-radius:60px;
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


.table-hover > tbody > tr:hover  table table-hover table-responsive-xl{
  background-color: #D2D2D2;
}


.table{
    text-align:center;


}
tr:nth-child(even) {background-color: rgba(0, 6, 10, 0.1);}


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

.btnModal {
    float: left;
    margin-left: auto;
    margin-right: 180px;
    padding-bottom: 20px;
}






.material-textfield {
  position: relative;  
  width: max-content;
    float: right;
    margin-right: 18%;
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
{    font-size: 20px;   
justify-content:center;   
margin: auto;   
text-align: center;   
width: 90%;
margin-left: -10px;
}

.h6
{    
  color:#5C5C5C !important;}
  
  .text-primary-sender
  {    color: #0D7CFF 
!important;    
font-weight: 200;    
margin-right: 50px;}

.text-secondary-sender{    
  color: #5C5C5C;    
  font-weight: 600;    }
  
  .text-tertiary-sender{    
color:#6c757d;    
font-weight: 400;    }

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


                      <select class="btn btn-warning float-right mt-2 rounded-pill shadow-sm text-light" name="formal" onchange="javascript:handleSelect(this)">
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
                  <a href="Dashboard.php" class="nav_link "> <i class='fa fa-th-large nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                </div>


                <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                <a href="ordersSample1.php" class="nav_link " style="margin-bottom: 0px"> <i class='fa fa-box nav_icon'></i> <span >Orders</span> </a> 
                 
                      <a href="AcceptedOrders.php" class="nav_link_l"><ul >Accepted Orders</ul></a>
                      <a href="TrackOrders.php" class="nav_link_l"><ul>Track Orders</ul></a>
                      <a href="TransactionHistory.php" class="nav_link_l"><ul>Transaction History</ul></a>
                    
                </li>


           
                <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                <a href="Shipments.php" class="nav_link" style="margin-bottom: 0px"> <i class='fa fa-truck nav_icon'></i> <span class="nav_name">Shipment</span> </a> 
                
                      <a href="InTransit.php" class="nav_link_l"><ul >In-Transit</ul></a>
                      <a href="pending.php" class="nav_link_l"><ul>Pending</ul></a>
                      <a href="delivered.php" class="nav_link_l"><ul>Delivered</ul></a>
                      <a href="Cancelled.php" class="nav_link_l"><ul>Cancelled</ul></a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed  ">
                <a href="FleetManagement.php" class="nav_link " style="margin-bottom: 0px"> <i class='fa fa-clipboard nav_icon'></i> <span class="nav_name">Fleet Management</span> </a> 
                
                      <a href="Staffs.php" class="nav_link_l"><ul >Staffs</ul></a>
                      <a href="Vehicles.php" class="nav_link_l"><ul>Vehicles</ul></a>
                      <a href="ServiceableArea.php" class="nav_link_l"><ul>Serviceable Areas</ul></a>
                </li>
             

                <div class="nav_list"> 
                  <a href="billing.php" class="nav_link "> <i class='fa fa-list-alt  nav_icon'></i> <span class="nav_name">Billing and Charges</span> </a> 
                </div>


                <div>
                <a href="Profile.php" class="nav_link active"> <i class='fa fa-user nav_icon'></i> <span class="nav_name">Profile</span> </a> 
                
                 </div>
            </div> 
            
   
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
    <a class="fa fa-clipboard fa-2x  text-decoration-none" href="Profile.php"> Profile</a> 
          
          </div>
        


    <!--#################################### CLICKABLE ORDERS TABLE ###############################--->



<?php
  include 'database.php';
  ?>



<br>



<section>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-12 mt-1">
                    
                    <div class="row justify-content-between border shadow-lg mt-5 border-0" style="border-radius: 60px;">
                        <div class="col-lg-5 border-end text-center">

                      <br>  
                      

                            <?php 

                            if (!empty($rows['Image'])) 
                            {
                            ?>

                            <img class="rounded-pill mx-auto d-block mt-3" style="width: 250px; height: 300px;" src="Images/<?php echo $rows['Image'] ?>">
                            <br>

                           <?php
                            }
                            else
                            {
                            ?>

                             <i class="bi bi-person-circle text-primary" style="font-size: 250px;"></i>
                            <br>

                            <?php
                            }
                             ?>

                           
                            <h4 class=""><?php echo $rows['firstname'] ?>  <?php echo $rows['lastname'] ?></h4>
                            <h5 class="text-secondary-sender"><?php echo $rows['email'] ?></h5>
                            <br>
                            <h4 class="text-dark"><?php echo $rows['company_name'] ?></h4>
                            <br>
                            <h6 class="text-secondary-sender"><?php echo $rows['bio'] ?></h5>
                            <br>
                            
                            <br><br><br><br>
                        </div>
                        <div class="col-lg-7">
                            <div class="row justify-content-between">
                            <br><br>
                            <div class="form-group1">
                                <br>
                                    <h3 class="fw-bold fs-1  mt-3 " style="float:left; color:#0D7CFF"> User Details</h3>
                                    <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-warning btn-lg float-right mt-2 
                                        rounded-pill shadow-sm text-light"  >Edit Profile</button>
                                
                                </div>

                                

                                

                                   <!-----MODAL FOR UPDATE PROFILE  -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="border-radius: 60px;">
                                            <div class="modal-body">


                                                <form action="Update_profile.php?id=<?php echo $rows['id'] ?>" method="post" 
enctype="multipart/form-data">

                                                <div class="modal-header">
                                                  <h2 class="modal-title" id="exampleModalLabel" style="padding-left:20px; margin-top:15px">User 
Details</h2>
                                                  <i type="button" class="fa fa-times fa-lg" data-bs-dismiss="modal" style="margin-right: 30px; 
margin-top:15px; text-decoration:none;"></i>
                                                </div>

                                                <BR>
                                                <div class="row justify-content-between ms-4">
                                                    <div class="col-lg-6 border-end">
                                                      
                                                      
                                                        <div class="mb-3">
                                                            <div class="material-textfield">
                                                              <input placeholder=" "  type="text" name = "fn" id = " "   autocomplete="off" value="<?php 
echo $rows['firstname'] ?>" size="30"></input>
                                                              <label for="FN"> First Name</label>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <div class="material-textfield">
                                                                  <input placeholder=" "  type="text" name = "ln" id = " "   autocomplete="off" 
value="<?php echo $rows['lastname'] ?>" size="30"></input>
                                                                  <label for="LN"> Last Name</label>
                                                                  </br>
                                                              </div>     
                                                        </div>
                                                   
                                                            
                                                      
                                                        <div class="mb-3">

                                                            <div class=" mb-3 material-textfield">
                                                                  <input placeholder=" "  type="text" name = "bio" id = " "   autocomplete="off" 
value="<?php echo $rows['bio'] ?>" size="30"></input>
                                                                  <label for="bio">About</label>
                                                                  </br>
                                                            </div>
                                                            </div>

                                                        


                                                        <div class="mb-3">

                                                             <div class="material-textfield">
                                                                  <input placeholder=" "  type="num" name = "contact" id = " "   autocomplete="off" 
value="<?php echo $rows['conact_no'] ?>" size="30"></input>
                                                                  <label for="Contact">Contact Number</label>
                                                                  </br>
                                                            </div>
                                                        </div>



                                                        <div class="mb-3">

                                                            <div class="material-textfield">
                                                                <input placeholder=" "  type="email" name = "email" id = " "   autocomplete="off" 
value="<?php echo $rows['email'] ?>" size="30"></input>
                                                                <label for="email">Email</label>
                                                                </br>
                                                            </div>

                                                        </div>



                                                        <div class="mb-3">
                                                          <div class="material-textfield">
                                                                  <input placeholder=" "  type="text" name = "company" id = " "   autocomplete="off" 
value="<?php echo $rows['company_name'] ?>" size="30"></input>
                                                                  <label for="company">Company</label>
                                                                  </br>
                                                          </div>

                                                        </div>

                                                    </div>


                                                     <div class="col-lg-6 text-center">

                                                        <div  class="mb-3">
                                                            <img id="preview" class="rounded-pill mb-4" style="width: 250px; height:250px;" 
src="Images/<?php echo $rows['Image'] ?>" />
                                                            <input class="form-control form-control-lg" type="file" id="file" name="file" 
onchange="previewImage(event)">
                                                            <br>
                                                        </div>
                                                        <div class="mb-3">
                                                            <button type="button" class=" fw-bold btn btn-light btn-lg shadow-lg rounded-pill text-muted" 
data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" name="update" class="fw-bold btn btn-primary btn-lg shadow-lg 
rounded-pill ms-4">Save changes</button>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              

                            
                            </div>
                            <div class="row justify-content-between ms-4">
                                <div class="col-lg-12">
                                <br>
                                     <h5 class=" text-tertiary-sender"> <b> Full Name </b> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $rows['firstname'] ?>  <?php echo $rows['lastname'] ?></p></h5></i> 
                                     <br>
                                    <h5 class=" text-tertiary-sender "> <b> About </b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <?php 
                                      if (!empty($rows['bio'])) 
                                      {
                                        echo $rows['bio'];
                                      }  
                                      else
                                      {
                                          echo "<br>";
                                      }
                                      ?>
                                      </h5>
                                    
                                    <br>
                                    <br><h5 class=" text-tertiary-sender"> <b> Contact </b> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $rows['conact_no'] ?></p></h5></i> 
                                    <br><h5 class=" text-tertiary-sender"> <b> Email 
</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $rows['email'] 
?></p></h5></i>
                                    <br><h5 class=" text-tertiary-sender"> <b> Company 
</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $rows['company_name'] ?></p></h5></i>
                                    

                                  </div>

                                    <!---------- FROM ORIG DASHBOARD.PHP
                                <div class="col-lg-9">
                                    <p class=" fs-4 text-muted mt-3"><?php echo $rows['firstname'] ?>  <?php echo $rows['lastname'] ?></p>
                                    <br> <p class=" fs-4 text-muted mt-3">
                                     <?php 
                            if (!empty($rows['bio'])) 
                            {
                               echo $rows['bio'];
                            }  
                            else
                            {
                                echo "<br>";
                            }
                            ?></p>
                                    <br> <h5 class="text-tertiary-sender"><?php echo $rows['conact_no'] ?></h5>
                                    <br> <p class=" fs-4 text-muted mt-3"><?php echo $rows['email'] ?></p>
                                    <br> <p class=" fs-4 text-muted mt-3"><?php echo $rows['company_name'] ?></p>
                                </div>
                                  ------------------------------------->

                            </div>
                        </div>
                    </div>
                  
                </div>
                
            </div>
        </div>

    </section>


<script>
   const previewImage = e => {
      const reader = new FileReader();
      reader.readAsDataURL(e.target.files[0]);
      reader.onload = () => {
         const preview = document.getElementById('preview');
         preview.src = reader.result;
      };
   };
</script>

<script>
let input_element = document.querySelector("input");

input_element.addEventListener("keyup", () => {
    input_element.setAttribute("value", input_element.value);
})
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





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</script>



<!-- BOOTSTRAP 5, FOR SIDE NAVBAR -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>





</body>

</html>

<?php
}
else
{
header("Location: signinAll.php");
} ?>
 