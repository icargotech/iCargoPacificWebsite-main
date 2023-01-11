
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
<link rel="stylesheet" href="css/SideBarCollapses.css"> 
<link href="css/NewOrderCards.css" rel="stylesheet">

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
          

      
              <div class="mergeCon justify-content-center  ">
<!--starting div for all cards
  <div class="row flex-container justify-content-center" style="padding-left: 0px; color: #0d6efd" > -->


      <section>
        <div class="container">
            <div class="row justify-content-center mb-5  border shadow-sm mt-5 border-0" style="border-radius: 30px; background-color: #ffff">
            <div class="col">
                <div class="col-lg-12 mt-1">
                    <div class="row justify-content-between text-center" >
                        <div class="col-12 col-md-12 col-lg-12 offset-lg-0">
                              <br>
                              <br>
                              <br>


                  <div class="align-items-center px-4 px-sm-5 mb-3">
                    <form class="text-center">

                      <div class="justify-content-center">   
                          <div class="col-sm-10 mx-auto mt-1">   
                              <h6 class="text-left text-dark">Pickup Address</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Pickup Address" required="required" id="start" />
                              </div>

                              <h6 class="text-left text-dark">Destination Address</h6>
                              <div class="form-group text-center d-flex align-items-center">
                                  <input type="text" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-2 bg-secondary" placeholder="Destination Address" required="required" id="end"/>
                              </div>
                              <br>


                          </div>


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
                        </div>






                        <br>

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
                                          <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8.5rem;  border-radius: 20px; font-size: .9rem;">

                                                <p><span>&nbsp;&nbsp;Small Pickup</span></p>
                                                <img src="assets/Small-Pickup-icon.png" alt="Small-Pickup-icon" width="50" height="50">

                                            </div>
                                      </label>
                                    </div>
                                      
                                    <div class="col-md-auto  ">
                                      <label>
                                          <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8.5rem;  border-radius: 20px; font-size: .9rem;">

                                                <p><span>&nbsp;&nbsp;Closed Van</span></p>
                                                <br>
                                                <img src="assets/Van_Copy_2.png" alt="Van_Copy_2" width="50" height="50">
                                              </div>
                                      </label>
                                    </div>

                                    <div class="col-md-auto  ">
                                      <label>
                                          <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8.5rem;  border-radius: 20px; font-size: .9rem;">

                                                <p><span>&nbsp;&nbsp;Pickup Truck</span></p>
                                                <img src="assets/Pickup1.png" alt="Pickup1" width="50" height="50">

                                              </div>
                                      </label>
                                    </div> 

                                    <div class="col-md-auto  ">
                                      <label>
                                          <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8.5rem;  border-radius: 20px; font-size: .9rem;">

                                                <p><span>&nbsp;&nbsp;6w Fwd Truck</span></p>
                                                <img src="assets/6W_FWD-icon.png" alt="6W_FWD-icon" width="50" height="50">
                                              </div>
                                      </label>
                                    </div>   
                                

                              </div> 


                        
                            <form class=" col-12 mx-auto  justify-content-center"  id="wholevehicle">

                            </form>
                           


                            <div class="text-center mx-auto  mt-5 mb-5" id="wholevehicle">
                               
                                <a href="Details.php" class="btn btn-primary shadow p-3 mb-5 font-weight-bold" role="button">ㅤContinueㅤ</a>
                            </div> 


                            </div>
                        </div>  
                      </div>
                      <!--Whole Vehicle Type Dropdown End-->

                       
                          

                                

                          <!--Partial Load Input Start-->
                          <div class="col-12 mx-auto d-flex justify-content-center">
                            <div class="col-12 mx-auto collapse  align-items-center" id="loadpartial" >
                            <br>

                            <div class="col-12 mx-auto  justify-content-center  " id="loadpartial">
                                <form class=" mx-auto  justify-content-center d-flex">
                                    <input type="number" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-5 bg-secondary text-center" placeholder="L (cm)" required="required" id="length" />
                                    ㅤㅤ
                                    <input type="number" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-5 bg-secondary text-center" placeholder="W (cm)" required="required"  id="width"/>
                                    ㅤㅤ
                                    <input type="number" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-5 bg-secondary text-center" placeholder="H (cm)" required="required"  id="height"/>
                                    ㅤㅤ
                                    <input type="number" class="form-control border-0 p-4 bg-secondary shadow p-3 mb-5 bg-secondary text-center" placeholder="kg" required="required"  id="weight"/>
                                    ㅤㅤ
                                  </form>

                            </div>

                         


                                <div class="row mx-auto  justify-content-center"  id="loadpartial" >
                                    <div class="col-md-auto  ">
                                      <label>
                                          <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8rem;  border-radius: 20px; font-size: .9rem;">

                                                <p><span>&nbsp;&nbsp;Closed Box</span></p>
                                                <i class='bx bxs-package bx-md' ></i>

                                            </div>
                                      </label>
                                    </div>
                                      
                                    <div class="col-md-auto  ">
                                      <label>
                                          <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8rem;  border-radius: 20px; font-size: .9rem;">

                                                <p><span>&nbsp;&nbsp;Bag</span></p>
                                                <i class="fa fa-shopping-bag fa-2x"></i>
                                              </div>
                                      </label>
                                    </div>

                                    <div class="col-md-auto  ">
                                      <label>
                                          <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8rem;  border-radius: 20px; font-size: .9rem;">

                                                <p><span>&nbsp;&nbsp;Pallet</span></p>
                                                <i class="fa fa-pallet fa-2x  "></i>

                                              </div>
                                      </label>
                                    </div> 

                                    <div class="col-md-auto  ">
                                      <label>
                                          <input type="radio" name="demo" class="card-input-element d-none" id="do-call" data-toggle="" data-target="#wholevehicle" aria-expanded="false" aria-controls="">
                                            <div class="card  card-body justify-content-between align-items-center shadow" style="width: 8rem; height: 8rem;  border-radius: 20px; font-size: .9rem;">

                                                <p><span>&nbsp;&nbsp;Crate</span></p>
                                                <i class="fa fa-boxes fa-2x"></i>
                                              </div>
                                      </label>
                                    </div>   
                                

                              </div> 
                              <!--
                                          <select  name="vehicle" style="border-radius: 10px;" id="loadpartial" >
                                          Cargo Type </option>
                                          <i class="fa fa-box" aria-hidden="true"><option value="Closed Box" class="dropdown-item">   Closed Box</option></i>
                                              <option value="Bag" class="dropdown-item">Bag</option>
                                              <option value="Pallet" class="dropdown-item"> Pallet</option>
                                              <option value="Crate" class="dropdown-item">Crate</option>
                                              <option value="Other" class="dropdown-item">Other</option>
                                          </select>  </i>
                              -->     
                              <div class="text-center mx-auto  mt-5 mb-5" id="loadpartial">                        
                               <a href="Details.php" class="btn btn-primary shadow p-3 mb-5 font-weight-bold" role="button">ㅤContinueㅤ</a>
                              </div> 

                            </div> 
                          </div>     
                          <!--Partial Load Input End-->

                    </form>
                                
                              </div>
                              </div> 



                        <br> <br>



          </div>
       </div>

                        <!--
                          <div class="row flex-container">
                          <h3> <i class="fa fa-map-marker" aria-hidden="true"></i>  - - - - - - - - - - - - - - - - - - - - - </i> </h3>
                          </div>
                        -->
                     
                          </div>

      </div>
    </div>
  </div>
  <br> <br><br> 


                  

    </section>




            <!-- end div for mergeCon-->
            </div>
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