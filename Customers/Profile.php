
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

<!-- Customized Bootstrap Stylesheet
<link href="css/style.css" rel="stylesheet">  

<link rel="stylesheet" href="css/MaterialTextField.css"> -->
<link rel="stylesheet" href="css/SideBarCollapses.css"> 
<link href="css/landpage.css"  rel="stylesheet">
<!--
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
-->
  
<!--JQUERY-->
   <title>Profile</title>

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

   
                  <a href="NewOrder.php" class="nav_link "> <i class='fa fa-plus-square nav_icon'></i> <span class="nav_name " >New Order</span> </a> 
   
                  <a href="hannah-customerpanel/customerOngoingOrders.php" class="nav_link"> <i class='fa fa-box nav_icon'></i> <span class="nav_name">Orders</span> </a> 

                  <a href="Profile.php" class="nav_link active "> <i class='fa fa-user nav_icon'></i> <span class="nav_name">Profile</span> </a> 

                  <a href="hannah-customerpanel/customerHelpCenter.html" class="nav_link"> <i class='fa fa-question-circle nav_icon'> </i> <span class="nav_name">Help Center  ㅤㅤㅤ</span> </a> 
                
                 <br>
                 <br>
                 <br>
               
            </div> 

       
           
      
        </nav>
    </div>


    <!--Container Main start-->
    <div class="height-100 bg-light">
      <br>  <br>  
      
    
    <!--Container Main end-->
    


   <div class="content-container">
  
      <div class="container-fluid">


        <!-- Content Start -->

            <div class="page title " >
              <h2>
               <a href="Profile.php" class="text-decoration-none" > <i class="fa fa-user nav_icon fa-1x  "></i> <span>Profile</span> </a> 
              </h2>
             <!--  <a class="fa fa-th-large fa-2x  text-decoration-none " href="Dashboard.php"> New Order</a> -->
            </div>
          

      
              <div class="mergeCon justify-content-center  ">
<!--starting div for all cards  -->


      <section>

                <div class="col-lg-12 mt-1">
                    <div class="row justify-content-between " >
                        <div class="col-12 col-md-12 col-lg-12 offset-lg-0">
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
                            <div class=" col d-flex justify-content-between mt-5">
                        
                                  <div class="d-flex flex-start ">
                                    <h3 class="fw-bold fs-1  mt-3 " style="float:left; color:#0D7CFF"> User Details</h3>
                                
                                  </div>

                                  <div class="d-flex flex-end">
                                    <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-warning btn-lg float-right mt-2 
                                        rounded-pill shadow-sm text-light"  >Edit Profile</button>
                                  </div>

                                
                                   <!-----MODAL FOR UPDATE PROFILE  -->
                                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content" style="border-radius: 60px;">
                                        <div class="modal-body">

                                          <form action="Update_profile.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-header">
                                              <h2 class="modal-title text text-primary" id="exampleModalLabel" style="padding-left:20px;">User Details</h2>
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
                            <div class="row justify-content-between ms-4 mt-3">
                                <div class="col-sm-6">
                                <br>
                                     <h5 class=" text-tertiary-sender"> <b> Full Name </b> </p></h5></i> 
                                     <br>
                                    <h5 class=" text-tertiary-sender "> <b> About </b> </h5>
                                    
                                    <br>
                                    <br><h5 class=" text-tertiary-sender"> <b> Contact </b></p></h5></i> 
                                    <br><h5 class=" text-tertiary-sender"> <b> Email </b></p></h5></i>
                                      
                                    <br><h5 class=" text-tertiary-sender"> <b> Company 
                                        </b> </p></h5></i>
                                    

                                  </div>




                                  <div class="col-sm-6">
                                <br>
                                     <h5 class=" text-tertiary-sender"> 
                                        <?php echo $rows['firstname'] ?>  <?php echo $rows['lastname'] ?></p></h5></i> 
                                     <br>
                                    <h5 class=" text-tertiary-sender "> <b>  </b> 
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
                                    <br><h5 class=" text-tertiary-sender"> <b>  </b> 
                                         <?php echo $rows['conact_no'] ?></p></h5></i> 
                                    <br><h5 class=" text-tertiary-sender"> <b> </b>
                                          <?php echo $rows['email'] ?></p></h5></i>
                                      
                                    <br><h5 class=" text-tertiary-sender"> <b> </b>
                                       <?php echo $rows['company_name'] ?></p></h5></i>
                                    

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





                              </div> 



                        <br> <br>



          </div>
       </div>

                     
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
