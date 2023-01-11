<?php
include '../partnerSignupValidation/database.php';

    $oldpassword = preg_replace("/\s+/", "", $_POST['oldpassword']);
    $email= filter_var( mysqli_real_escape_string($conn,$_POST['email']), FILTER_SANITIZE_STRING);

    $sql = mysqli_query($conn, "SELECT password FROM staff_users WHERE email = '$email'");
    $rows = mysqli_fetch_assoc($sql);
    if($rows['password'] !== $oldpassword){
            echo "The password you entered doesn't match";
        }


?>
