<?php 
include "../admin/db_connect.php";
if(isset($_POST['accept'])){

    $email = $_POST['email'];
    
    $sql = mysqli_query($conn, "UPDATE `partner_verify` SET verify='Verified' WHERE company_email = '$email'");
    header("Location: Partner_verify.php?success=Verified");
  
}
if(isset($_POST['decline'])){

    $email = $_POST['email'];
    $sql = mysqli_query($conn, "UPDATE `partner_verify` SET verify='Denied' WHERE company_email = '$email'");
   header("Location: Partner_verify.php?success=Denied");
  
}
 ?>

