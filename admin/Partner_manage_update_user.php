<?php 
include "../admin/db_connect.php";
if(isset($_POST['update'])){
    $email = $_POST['email'];
    $verification = $_POST['verification'];
    $block_active = $_POST['block_active'];
    

    echo "Email: ". $email . " Verification: " . $verification ." Block/Active: " . $block_active ;

    if($verification == "Denied" || $verification == "Verified"){
        $sql = mysqli_query($conn, "UPDATE `partner_verify` SET verify='$verification' WHERE company_email = '$email'");
        header("Location: Partner_manage.php?success=update");
    }
    if($block_active == "1" || $block_active == "2"){
    $sql = mysqli_query($conn, "UPDATE `partner_verify` SET status='$block_active' WHERE company_email = '$email'");
     header("Location: Partner_manage.php?success=update");
    }

}
 ?>