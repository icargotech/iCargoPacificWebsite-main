<?php
 include_once '../admin/db_connect.php';
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
   <title>Billing</title>

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
  /*  float: left; */
    float: right;
    margin-left: auto;
    margin-right: 180px;
    padding-bottom: 20px;
}







.material-textfield {
  position: relative;  
  width: 30%;
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
  width: max-content;
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


.container_button  { display:flex; justify-content:right; align-items:right; }
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
                      <a href="Pending.php" class="nav_link_l"><ul>Pending</ul></a>
                      <a href="Delivered.php" class="nav_link_l"><ul>Delivered</ul></a>
                      <a href="Cancelled.php" class="nav_link_l"><ul>Cancelled</ul></a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                <a href="FleetManagement.php" class="nav_link" style="margin-bottom: 0px"> <i class='fa fa-clipboard nav_icon'></i> <span class="nav_name">Fleet Management</span> </a> 
                
                      <a href="Staffs.php" class="nav_link_l"><ul >Staffs</ul></a>
                      <a href="Vehicles.php" class="nav_link_l"><ul>Vehicles</ul></a>
                      <a href="ServiceableArea.php" class="nav_link_l"><ul>Serviceable Areas</ul></a>
                </li>
             

                <div class="nav_list active"> 
                  <a href="Billing.php" class="nav_link active "> <i class='fa fa-list-alt  nav_icon'></i> <span class="nav_name">Billing and Charges</span> </a> 
                </div>


                <div>
                <a href="Profile.php" class="nav_link"> <i class='fa fa-user nav_icon'></i> <span class="nav_name">Profile</span> </a> 
                
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



   <!-- NavBar Ends -->


   <!-- Content Start -->
   <div class="content-container">
  
  <div class="container-fluid">

  <div class="container mt-3 ">
    <div class="page title" >
    <a class="fa fa-clipboard fa-2x  text-decoration-none" href="Billing.php"> Billing and Charges</a> 
          
          </div>
        

<!-- ##################################### Add modal #########################################------------------>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"  style="border-radius: 60px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="padding-left:20px; margin-top:15px"><strong>Add a Rate</strong></h5>
        <i type="button" class="fa fa-times fa-lg" data-bs-dismiss="modal" style="margin-right: 30px; margin-top:15px; text-decoration:none;"></i>
      </div>

      
      <div class="modal-body">
      <section>
  

      
       
    <form action="billing.php" method="post">
      <!--------------------id--------------->
    


   <!--------------------Service--------------->
   <div class="mb-3"> 
   <br>

    <div class="material-textfield">
        <select class="countryNum" aria-label="Default select example" name="service" id=" " style="width: 200%; float: right;">
          <option value="UNSET">Type of Service</option>
          <option value="Standard shipping">Standard shipping</option>
          <option value="Trucks">Trucks</option>
          <option value="Containers">Containers</option>
          <option value="Crate">Crate</option>
          <option value="Aircraft">Aircraft</option>
          <option value="other">Other</option>
        </select>
        </div>
        <br>
   <br>
   <br>

   <!--------------------Cargo--------------->
   <div class="mb-3"> 
     <br>
     <div class="material-textfield">
        <select class="countryNum" aria-label="Default select example" name="cargo" id=" " style="width: 200%; float: right;">
          <option value="UNSET">Type of Cargo</option>
          <option value="Box">Box</option>
          <option value="Bag">Bag</option>
          <option value="Pallet">Pallet</option>
          <option value="Create">Create</option>
          <option value="Roll">Roll</option>
          <option value="Other">Other</option>
        </select>
    </div>
    <br>
   <br>
   <br>

   <!--------------------Vehicle--------------->
   <div class="mb-3"> 
   <br>
   <div class="material-textfield">
        <select class="countryNum" aria-label="Default select example" name="vehicle" id=" " style="width: 200%; float: right;">
          <option value="UNSET">Type of Vehicle</option>
          <option value="Small Pickup">Small Pickup</option>
          <option value="Closed Van">Closed Van</option>
          <option value="Pickup Truck">Pickup Truck</option>
          <option value="6w Fwd Truck">6w Fwd Truck</option>
        </select>
        </div>
   <br>
   <br>
   <br>
   <!--------------------kilo/kilometer--------------->
   <div class="mb-3">
   <br>
   <div class="material-textfield ">
             <input placeholder=" "  type="number" name="kilokim" id="kilometer_kilo"  autocomplete="off" value=" " 
                   size="30" style="font-weight: bold; margin-left: -100%; width: 200%"></input>
             <label style="  float: right;  margin-left: -95%; ">Kilo Per Kilometer(Kg/Km):</label>
        </div>

   <br>
   <br>
  
      <div style="text-align:center">
        <br><br>
        <p ><strong> Rate:</strong> <span class="emphasized">1(Weight/kg) * 1(Weight/km)</p>
      </div>
 
    
  
  </form>


  
    <div class="btnModal">
        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
        <input type = "submit" name = "insert" id = "submit_btn" value = "Add" class="btn btn-warning rounded-pill">
    </div>


                    
    </section>


      </div>
     
    </div>
  </div>
</div>



    <div class="container_button">
<button class="btn btn-warning rounded-pill" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning">
<i class="fas fa-plus-circle"></i> Add a Rate
</button>
</div>





<!--#################################### CLICKABLE ORDERS TABLE ###############################--->
      
<div class="searchArea">
<div class="panel panel-primary filterable">
<nav class="navbar  navbar-light bg-light shadow   bg-body rounded"><span class="pageDetails"> Billing & Charges History</span >

<div class="titleSearch">
    <input type="type" name = "ordernum" id = "search_input" value = "" onkeyup="myFunction()" placeholder=" Search ID" style="padding: 0px;">  
      </div>
  

</nav>

</div> </div>

          
           
<!-- php --->
 

<?php
 include_once '../admin/db_connect.php';


if(isset($_POST['close'])){
  echo"<script>document.location='billing.php';</script>";
        exit;


}

   //insert data 
 if(isset($_POST['insert']))
 {    
      $id=0;
      $service = filter_var( mysqli_real_escape_string($conn,$_POST['service']), FILTER_SANITIZE_STRING);
      $cargo = filter_var( mysqli_real_escape_string($conn,$_POST['cargo']), FILTER_SANITIZE_STRING);
      $vehicle = filter_var( mysqli_real_escape_string($conn,$_POST['vehicle']), FILTER_SANITIZE_STRING);
      $kilokim = filter_var( mysqli_real_escape_string($conn,$_POST['kilokim']), FILTER_SANITIZE_STRING);

      if($kilokim==""){
    
   echo("<script>






   alert('Please fill out all the fields');
   
   </script>");
   echo "<meta http-equiv='refresh' content='0'>";

        } else{

      $sql ="INSERT INTO `billing`(`billing_id`, `service`, `cargo_type`, `vehicle_type`, `kilometer_kilo`) VALUES ('','$service','$cargo','$vehicle','$kilokim')";
      if (mysqli_query($conn, $sql)) {


        echo"<script language='javascript'>alert('Biiling inserted successfully')</script>";
        echo"<script>document.location='billing.php';</script>";
        exit;
        
      } else {
         echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
      mysqli_close($conn);
 }
  //display on table
}    if($_SERVER["REQUEST_METHOD"] == "GET"){

          echo'<table class="table" id="myTable">
          <thead class="thead-light">
        <tr>
          <th scope="col">Billing ID </th>
          <th scope="col">Service Type</th>
          <th scope="col">Cargo Type</th>
          <th scope="col">Vehicle Type</th>
          <th scope="col">Kilometer per Kilo</th>
         <th scope="col">Action</th>
         </tr>
          </thead> 
        
          ';
        
          
            $sql = "select * from billing";               
                $res = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($res)){
                
              
                    echo'<tr>
                 
                    <td>'.$row["billing_id"].'</td>
                    <td>'.$row["service"].'</td>
                    <td>'.$row["cargo_type"].'</td>
                    <td>'.$row["vehicle_type"].'</td>
                    <td>'.$row["kilometer_kilo"].'</td>
               
                    <td>
                    <form method="post">
                    <a style="border-radius:5px" href="billing.php?edit='.$row["billing_id"].'" class="btn btn-success"><i class="fas fa-edit"></i>
                    </a>
                    <a style="border-radius:5px" href="billing.php?delete='.$row["billing_id"].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                    </a>
             
                  </form>
                    </td>
              
                </tr>
                
                
                ';}
                
                          echo"</table>";
              
             
              }       
        //getting ID 
              if (isset($_GET['edit'])) {
                $id = filter_var( mysqli_real_escape_string($conn,$_GET['edit']), FILTER_SANITIZE_STRING);
       
              echo('
              <script>
      $(document).ready(function(){
 
    $("#editModal").modal("show");
  });
  </script>');
  //fetch Data from database
  $sql = "select * from billing where billing_id=$id";               
  $res = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($res)){
    $edit_service=$row["service"];
     $edit_cargo=$row["cargo_type"];
    $edit_kilokm=$row["kilometer_kilo"];
    $edit_vehicle=$row["vehicle_type"];
       } 
              }

            //Saver update data
              if(isset($_POST['save']))
              {  
                $updated_id=filter_var( mysqli_real_escape_string($conn,$_POST["a"]), FILTER_SANITIZE_STRING);
                $updated_service=filter_var( mysqli_real_escape_string($conn,$_POST["Updateservice"]), FILTER_SANITIZE_STRING);
                $updated_kilokm=filter_var( mysqli_real_escape_string($conn,$_POST["Updatekilokim"]), FILTER_SANITIZE_STRING);
                $updated_cargo=filter_var( mysqli_real_escape_string($conn,$_POST["Updatecargo"]), FILTER_SANITIZE_STRING);
                $updated_vehicle=filter_var( mysqli_real_escape_string($conn,$_POST["Updatevehicle"]), FILTER_SANITIZE_STRING); 
                if($updated_kilokm==" "){
    
             
                  header("location:billing.php");
                     } else{
                $sql="UPDATE `billing` SET `service`='$updated_service',`cargo_type`='$updated_cargo',`vehicle_type`='$updated_vehicle',`kilometer_kilo`='$updated_kilokm' WHERE `billing_id`=$updated_id";
                if (mysqli_query($conn, $sql)) {
          
                  echo"<script language='javascript'>alert('Billing updated succesfully')</script>";
                  echo"<script>document.location='billing.php';</script>";
                
                  exit;
                  header("location:billing.php");
                } else {
                   echo "Error: " . $sql . ":-" . mysqli_error($conn);
                }
                mysqli_close($conn);
           }
              }

              //delete
              if (isset($_GET['delete'])) {

                $del_id = filter_var( mysqli_real_escape_string($conn,$_GET['delete']), FILTER_SANITIZE_STRING); 
              
                $sql ="DELETE FROM `billing` WHERE `billing_id`=$del_id";
                if (mysqli_query($conn, $sql)) {
                  echo"<script language='javascript'>alert('Billing deleted')</script>";
                  echo"<script>document.location='billing.php';</script>";
                
                  exit;
                  header("location:billing.php");
                  exit;
                  
                } else {
                   echo "Error: " . $sql . ":-" . mysqli_error($conn);
                }
                mysqli_close($conn);
              
                exit;
                header("location:billing.php");
       } 


  ?>







</body>






<!---------------edit modal------>

<!-- Modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"  style="border-radius: 60px;">
      <div class="modal-header">
        <h5 class="modal-title" id="editModal" style="padding-left:20px; margin-top:15px"><strong>Update Rates</strong></h5>
        <i type="button" class="fa fa-times fa-lg" data-bs-dismiss="modal" style="margin-right: 30px; margin-top:15px; text-decoration:none;"></i>
      </div>



      <div class="modal-body">
      <section>
  

      
       
  <form action="billing.php" method="post">
    <!--------------------id--------------->
  
    <input type = "input" name = "a" id = "kilometer_kilo" value = "<?php echo($id);?>" style="display:none">

 <!-------------------- Edit Service--------------->

 <br>

 <div class="mb-3"> 

      <div class="material-textfield">
        <select class="countryNum" aria-label="Default select example" name="Updateservice" id=" " style="width: 200%; float: right;">
              <option value="Standard shipping"<?php if($edit_service=="Standard shipping") echo 'selected="selected"'; ?>>Standard shipping</option>
              <option value="Trucks"<?php if($edit_service=="Trucks") echo 'selected="selected"'; ?>>Trucks</option>
              <option value="Containers"<?php if($edit_service=="Containers") echo 'selected="selected"'; ?>>Containers</option>
              <option value="Crate"<?php if($edit_service=="Crate") echo 'selected="selected"'; ?>>Crate</option>
              <option value="Aircraft"<?php if($edit_service=="Aircraft") echo 'selected="selected"'; ?>>Aircraft</option>
              <option value="other"<?php if($edit_service=="other") echo 'selected="selected"'; ?>>Other</option>
        </select>

      </div>
      <br> 
      <br>
      <br>
      <br>
 <!-------------------- Edit Cargo--------------->

 
 <div class="mb-3"> 
   
   <div class="material-textfield">
        <select class="countryNum" aria-label="Default select example" name="Updatecargo" id=" " style="width: 200%; float: right;">
          <option value="box"<?php if($edit_cargo=="box") echo 'selected="selected"'; ?>>Box</option>
          <option value="bag"<?php if($edit_cargo=="bag") echo 'selected="selected"'; ?>>Bag</option>
          <option value="pallet"<?php if($edit_cargo=="pallet") echo 'selected="selected"'; ?>>Pallet</option>
          <option value="create"<?php if($edit_cargo=="create") echo 'selected="selected"'; ?>>Create</option>
          <option value="roll"<?php if($edit_cargo=="Sroll") echo 'selected="selected"'; ?>>Roll</option>
          <option value="other" <?php if($edit_cargo=="other") echo 'selected="selected"'; ?>>Other</option>
        </select>
  </div>


  <br>
   <br>
   <br>
   <br>
  
  
 <!--------------------Edit Vehicle--------------->
 <div class="mb-3"> 
 <div class="material-textfield">
        <select class="countryNum" aria-label="Default select example" name="Updatevehicle" id=" " style="width: 200%; float: right;">
<option value="Small Pickup"<?php if($edit_vehicle=="Small Pickup") echo 'selected="selected"'; ?>>Small Pickup</option>
<option value="Closed Van"<?php if($edit_vehicle=="Closed Van") echo 'selected="selected"'; ?>>Closed Van</option>
<option value="Pickup Truck"<?php if($edit_vehicle=="Pickup Truck") echo 'selected="selected"'; ?>>Pickup Truck</option>
<option value="6w Fwd Truck"<?php if($edit_vehicle=="6w Fwd Truck") echo 'selected="selected"'; ?>>6w Fwd Truck</option>
</select>
</div>

    <br>
   <br>
   <br>
   <br> 
 
        <div class="material-textfield ">
             <input placeholder=" "  type="number" name="Updatekilokim" id="kilometer_kilo"  autocomplete="off" value="<?php echo($edit_kilokm);?>" 
                   size="30" style="font-weight: bold; margin-left: -100%; width: 200%"></input>
             <label style="  float: right;  margin-left: -95%; ">Kilo Per Kilometer(Kg/Km):</label>
        </div>
 <!--------------------Edit kilo/kilometer--------------->
 



<br>        <br> 
  <div style="text-align:center">
<br><br>
<p ><strong> Rate:</strong> <span class="emphasized">1(Weight/kg) * 1(Weight/km)</p>
</div>

  


</form>




<div class="btnModal">
<button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
<input type = "submit" name = "save" id = "submit_btn" value = "Save" class="btn btn-warning rounded-pill">


        </div>
             
     
  </section>


      </div>
    </div>
  </div>
</div>




<!---- SHOW modal 2-->
<script>
      $(document).ready(function(){
  $("#edit_btn").click(function(){
    $('#editModal').modal('show');
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







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>




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





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


<!-- BOOTSTRAP 5, FOR SIDE NAVBAR -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</html>


<?php
}

else
{
header("Location: signinAll.php");
} ?>

