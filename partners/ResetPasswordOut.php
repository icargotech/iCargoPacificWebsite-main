<?php 
include "../admin/db_connect.php";
include 'app_logic.php';

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


  
<!--JQUERY-->
   <title>Reset Password</title>

    



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

<link rel="stylesheet" href="css/style.css">


<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>
 <!-- CSS--> <style>   .title{     width:70%;     height:fit-content;       } .titleSearch{ right:0px; } #nav h5 {    display: inline-block;    text-align:center;  } .table-hover > tbody > tr:hover  table table-hover table-responsive-xl  {   background-color: #D2D2D2 !important; } .table{     text-align:center; } tr:nth-child(even) {background-color: rgba(0, 6, 10, 0.1);} body {   margin: 0;   font-family: "Roboto";   font-size: 1rem;   font-weight: 300;   line-height: 1.5;   color: #757575;   text-align: left;   background-color: #fff; }  .btnModal  {    float:left;    margin-left: auto;     margin-right: 180px;     padding-bottom: 20px; } .material-textfield {   position: relative;    /*   width: max-content;   float: right;     margin-right: 18%; */     margin-bottom: 5%; } label {   position: absolute;   font-size: 1rem;   left: 0;   top: 50%;   transform: translateY(-50%);   background-color: white;   color: gray;   padding: 0 0.3rem;   margin: 0 0.5rem;   transition: .1s ease-out;   transform-origin: left top;   pointer-events: none; } input, .countryNum {   font-size: 1rem;   outline: none;   border: 1px solid gray;   border-radius: 5px;     padding: 1rem 0.7rem;   color: gray;   transition: 0.1s ease-out; } input:focus {   border-color: #2E85EB;   } input:focus + label {   color: #2E85EB;   top: 0;   transform: translateY(-50%) scale(.9); } input:not(:placeholder-shown) + label {   top: 0;   transform: translateY(-50%) scale(.9); } .form-group1 {     font-size: 20px;    justify-content:center;    margin: auto;    text-align: center;    width: 90%; } .h6{     color:#5C5C5C !important; } .text-primary-sender {     color: #0D7CFF !important;     font-weight: 200;     margin-right: 50px; } .text-secondary-sender {     color: #5C5C5C;     font-weight: 600;      } .text-tertiary-sender {     color:#6c757d;     font-weight: 400;      } </style>



<body>


  <div class="content-container">
  
    <div class="container-fluid">

    <div class="container mt-3 ">
      

<br>



<section>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 mt-1">
                    
                    <div class="row justify-content-between border shadow-lg mt-5 border-0" style="border-radius: 60px;">
                        
                     
                            <div class="form-group1">
                                <br>
                                   <!-- <h3 style="float:left"> Reset Password</h3> -->
                                   
                                </div>



       
 
      <div class="container-fluid ">
      <div class=" d-flex justify-content-center">
            <a class="navbar-brand icargo-navbar" href=""><h2 style=""><img src="assets/icargologo.png" width="70" height="50" alt=""><font color="#0D7CFF"> iCargo</font> <font color="#FBCD10">Pacific</font></h2></a>
            </div>  
          <br>
                  <div class="d-flex justify-content-center ">
                      <h5>Forgor your password?</h5><br>
                  </div>

                  <div class="d-flex justify-content-center " style="text-align: center; padding: 1rem;">
                      <p> Enter your email address below and we'll send you instructions to reset our password</p>
                  </div>

               

              </div>
       
        <div class="d-flex justify-content-center ">
        <form  action="ResetPasswordOut.php" method="post">
           
            <div class="material-textfield">
              <input placeholder=" " type="text" name="email" id="email"  autocomplete="off" value="" size="30"></input>
              <label>Email Address</label>
</div>

<!--
            <div class="d-flex justify-content-center "><a href="#" > Back to Sign In Page</a></div>
-->
                 
      </div>
       
 
      <br> <br> <br> 
        <div class="btnModal d-flex justify-content-center">
        <br>
        <a href="signinAll.php" class="btn btn-warning rounded-pill">Back</a>
         
          &nbsp; &nbsp;
          <button type="submit" class="btn btn-warning rounded-pill" name="reset-password" id="Submit">Submit</button>
        </div>
        </form> 
    </div>
  </div>
</div>

                  
                </div>
                
            </div>
        </div>

    </section>







<br><br><br>

<!-- end div for SEARCH AREA-->
</div>


<!-- end div for cards-->

<!-- end div for CONTENT-FLUID-->
    </div>




<br> 

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
           

         




</script>

</script>
</body>

</html>



