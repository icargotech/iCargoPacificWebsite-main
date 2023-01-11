<html>
    <head>
    <!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" rel="stylesheet">
<!-- Bootstrap Icon -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">



</head>

<style> .form-group1 {     font-size: 20px;    justify-content:center;    margin: auto;    text-align: center; } .text-primary-sender {     color: #0D7CFF !important;     font-weight: 200;     margin-right: 50px; } .text-secondary-sender {     color: #5C5C5C;     font-weight: 600;     text-align: center; } .text-tertiary-sender {     color: #5C5C5C;      } .text-primary-receipient {     color:#FBCD10 !important;     font-weight: 200;     margin-right: 50px; } .text-secondary-receipient {     color: #5C5C5C;     font-weight: 600;     text-align: center; } .col-lg-3 border border-rounded shadow-sm  {    margin: auto;    padding: 20px, 20px,20px,20px; } .p.btn-warning{     color:#707070;     font-size: 35px; } .btn btn close {     margin-right: 50px;     margin-top: auto; } .fa fa-map-marker {     color:#0D7CFF; } div.pickupPoint {     width:auto;      } .h6{     color:#5C5C5C !important; } .bodyContainer_modal {     width:auto;      } div.sender, .receipient, .package {     width: min-content;     padding:auto;     margin:auto;      padding-bottom:20px; } div.sender {     padding: 50px, 60px, 100px; } div.receipient {     padding:100px, 60px, 100px; } div.package {     padding: 200px, 60px,100px, ;      } * {   box-sizing: border-box; } /* Position the image container (needed to position the left and right arrows) */ .container {   position: relative; } /* Hide the images by default */ .mySlides {   display: none; } /* Add a pointer when hovering over the thumbnail images */ .cursor {   cursor: pointer; } /* Next & previous buttons */ .prev, .next {   cursor: pointer;   position: absolute;   top: 40%;   width: auto;   padding: 16px;   margin-top: -50px;   color: #5a5252;   font-weight: bold;   font-size: 20px;   border-radius: 0 3px 3px 0;   user-select: none;   -webkit-user-select: none; } /* Position the "next button" to the right */ .next {   right: 0;   border-radius: 3px 0 0 3px; } /* On hover, add a black background color with a little bit see-through */ .prev:hover, .next:hover {   background-color: rgba(0, 0, 0, 0.8); } /* Number text (1/3 etc) */ .numbertext {   color: #f2f2f2;   font-size: 12px;   padding: 8px 12px;   position: absolute;   top: 0; } /* Container for image text */ .caption-container {   text-align: center;   background-color: #222;   padding: 2px 16px;   color: white; } .row:after {   content: "";   display: table;   clear: both; } /* Six columns side by side */ .column {   float: left;   width: 16.66%; } /* Add a transparency effect for thumnbail images */ .demo {   opacity: 0.6; } .active, .demo:hover {   opacity: 1; }     </style>



    <?php
require_once('../admin/db_connect.php');


if(isset($_POST['id'])){

$id=$_POST['id'];
$sanitize_id = mysqli_real_escape_string($conn,$id);
$query='select * from orders where order_number="'.$sanitize_id.'"';
$execute=mysqli_query($conn,$query);

$result=mysqli_fetch_assoc($execute);
$ordnu=$result['order_number'];
$deliverd=$result['date_of_delivery'];
$modofpy=$result['mode_of_pay'];
$tot=$result['total_amount'];
$neym=$result['sender'];
$pup=$result['pick_up_point'];
$senum=$result['sender_no'];
$senote=$result['sender_note'];
$recname=$result['recipient'];
$dop=$result['drop_off_point'];
$rcpno=$result['recipient_no'];
$rcpnote=$result['recipient_note'];
$totdist=$result['distance'];
$wegh=$result['weight'];
$dim=$result['dimension'];
$cargtype=$result['cargo_type'];
$cargser=$result['cargo_service'];

$response='<form class="rounded">
                <div class="form-group1">
                    <label>Order Number:<b style="font-weight: 600"> '.$ordnu.'</b></label>
                     <label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDelivery Date: <b style="font-weight: 600"> '.$deliverd.'</b></label>
                     <label>&nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbspMode of Payment: <b style="font-weight: 600">'.$modofpy.' </b> </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  
                     &nbsp&nbsp&nbsp&nbsp  <p class="btn btn-warning rounded-pill totalAmount " style="font-size:1.5rem">Total Amount: &nbsp<span><b>'.$tot.' PHP</b></span></p></div>
                    
              
              
                </div>
 


         <div class="bodyContainer_modal">
         <!------------------------ SENDER ---------------------->
         <ul class="nav">    
         <div class="sender">
         <div class="card" style="width: 18rem; height: 21rem; border-color:#0D7CFF">
         
         <div class="card-body" style="border-color:#0D7CFF">
         <h6 class="text-primary-sender">&nbsp&nbspSender Details</h6>
                 <br>
                 <h5 class="text-secondary-sender">&nbsp '.$neym.'</h5>
                 <br>
                 <p>pick up point: </p>
                 <h6 class=" text-tertiary-sender"> <i class="fa fa-map-marker fa-lg" style="color:#0D7CFF; text-decoration:none"></i> '.$pup.'</h6></i>
            
                 <br>
                  <h6 class=" text-tertiary-sender"> <i class="fa fa-phone fa-flip-horizontal" style="color:#0D7CFF; text-decoration:none"></i> '.$senum.' </h6>
                 <br>
                 <p>Notes: <span>'.$senote.'</span></p><br><br>
         </div>
         </div>
         </div>

     
     <br><br>


     <!------------------------Receipient  ---------------------->
     <div class="receipient">
     <div class="card" style="width: 18rem; height: 21rem; border-color:#FBCD10">
             
     <div class="card-body" style="border-color:#FBCD10">
     <h6 class="text-primary-receipient">&nbsp&nbspReceipient Details</h6>
             <br>
             <h5 class="text-secondary-receipient">&nbsp '.$recname.'</h5>
             <br>
             <p>pick up point: </p>
             <h6 class=" text-tertiary-receipient"> <i class="fa fa-map-marker fa-lg" style="color:#FBCD10; text-decoration:none"></i> '.$dop.'</h6></i>
        
             <br>
              <h6 class=" text-tertiary-receipient"> <i class="fa fa-phone fa-flip-horizontal" style="color:#FBCD10; text-decoration:none"></i> '.$rcpno.' </h6>
             <br>
             <p>Notes: <span>'.$rcpnote.'</span></p>

             <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                <p class="form-check-label" for="flexCheckCheckedDisabled">
                    Responsible for payment
                </label>
                </div>

     </div>
    </div>
    </div>


    <br><br>
        <!------------------------ PACKAGE INFO ---------------------->
        <div class="package">
        <div class="cards" style="width: 30rem; height: 20rem;">
                    
        <div class="card-body" style="">
        <h6 style="color: #5C5C5C"><label style="font-weight: 600">&nbspPackage Info</label><h6>
                <br>
            
                <p class=" text-tertiary-sender"> <i class="fa fa-route fa-lg" style="color:#gray; text-decoration:none"></i> Total Distance:<b>&nbsp '.$totdist.'</b></p></p></i>
                <div>
                <ul class="nav justify-content style="color:#gray">
                    <p class=" text-tertiary-sender"> <i class="fa fa-weight-hanging fa-lg" style="color:#gray; text-decoration:none"></i> Weight:<b>&nbsp '.$wegh.' kg.</b></p></p></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <p class=" text-tertiary-sender"> <i class="fa fa-box-open fa-lg" style="color:#gray; text-decoration:none"></i> Dimension:<b>&nbsp '.$dim.'</b></p></p></i>
               </ul>
               <ul class="nav justify-content  style="color:#gray">
                    <p class=" text-tertiary-sender"> <i class="fa fa-box fa-lg" style="color:#gray; text-decoration:none"></i> Cargo Type:<b>&nbsp '.$cargtype.'</b></p></p></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   <p class=" text-tertiary-sender"> <i class="fa fa-truck fa-lg" style="color:#gray; text-decoration:none"></i> Cargo Service:<b>&nbsp '.$cargser.'</b></p></p></i>
                 </ul>
                </div>
                <br>

                <br> <br> <br> <br>

                <div class="container">

                <!-- Full-width images with number text -->
                <div class="mySlides">
                  <div class="numbertext">1 / 6</div>
                    <img src=".../partners/images/1.jpg" style="width:100%">
                </div>
              
                <div class="mySlides">
                  <div class="numbertext">2 / 6</div>
                    <img src=".../partners/images/2jpg" style="width:100%">
                </div>
              
                <div class="mySlides">
                  <div class="numbertext">3 / 6</div>
                    <img src=".../partners/images/3.jpg" style="width:100%">
                </div>
              
                
              
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              
                <!-- Image text -->
              
               
              </div>






               
        </div>
        </div>
        </div>
        </ul>
</div>




            </form>';

echo $response;
}

if(isset($_POST['acpt'])){
$accepted=$_POST['acpt'];
//$query='select * from orders where ac_dc_stat="'.$accepted.'"';
$query='update orders set ac_dc_stat="accepted" where order_number="'.$accepted.'"';
//$execute=mysqli_query($conn,$query);

if (mysqli_query($conn, $query)){
    //echo '<script>alert("success")</script>';
$response="<script>location.reload();</script>";
echo $response;
}else{

    //echo '<script>alert("error");';
    $response="<script>location.reload();</script>";
echo $response;
}

$response="<script>location.reload();</script>";
//$response="<script>alert($accepted);</script>";
echo $response;
}



if(isset($_POST['decc'])){
$accepted=$_POST['decc'];
//$query='select * from orders where ac_dc_stat="'.$accepted.'"';
$query='update orders set ac_dc_stat="declined" where order_number="'.$accepted.'"';
//$execute=mysqli_query($conn,$query);
//echo'<script>alert(1);</script>';
if (mysqli_query($conn, $query)){
   // echo '<script>alert("success")</script>';
$response="<script>location.reload();</script>";
echo $response;
}else{

    //echo '<script>alert("error");';
    $response="<script>location.reload();</script>";
echo $response;
}

$response="<script>location.reload();</script>";
//$response="<script>alert($accepted);</script>";
echo $response;
}

?>






</div>


<script>

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}





    </script>















</html>
