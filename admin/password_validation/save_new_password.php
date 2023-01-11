<?php 
include '../partnerSignupValidation/database.php';

    $email= filter_var( mysqli_real_escape_string($conn,$_POST['email']), FILTER_SANITIZE_STRING);
    $oldpassword = preg_replace("/\s+/", "", $_POST['oldpassword']);
    $password = preg_replace("/\s+/", "", $_POST['passwordId']);
    $confirm = $_POST['confirmId'];

    $oldpassword_error = false;
    $password_error = false; 
    $confirm_error = false;

    $oldpassword_msg = null;
    $password_msg = null;
    $confirm_msg = null;
    // old password validation
    $sql = mysqli_query($conn, "SELECT password FROM staff_users WHERE email = '$email'");
    $rows = mysqli_fetch_assoc($sql);
        if($rows['password'] !== $oldpassword){
         $oldpassword_msg = "The password you entered doesn't match";
         $oldpassword_error = true;
        }
    // password validation
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if(empty($password)){
        $password_msg = "Enter your password";
        $password_error = true;  
    }elseif($password === $oldpassword){
        $password_msg = "New password cannot be the same as your current password";
        $password_error = true;  
    }elseif(!$uppercase){
        $password_msg = "Must contain upper case letter";
        $password_error = true;  
    }elseif(!$lowercase){
        $password_msg = "Must contain  low case letter";
        $password_error = true;
    }elseif(!$number){
        $password_msg = "Must contain number";
        $password_error = true;
    }elseif(!$specialChars){
        $password_msg = "Must contain special Character";
        $password_error = true;
    }elseif(strlen($password) < 8){     
        $password_msg = "Must contain 8 character";
        $password_error = true;
    }
    // confirm password validation
    if(empty($confirm)){
        $confirm_msg = "Confirm your password";
        $confirm_error = true;
    }
    elseif($password !== $confirm){
        $confirm_msg = "Those passwords didn’t match";
        $confirm_error = true;
    }

    if($oldpassword_error == false && $password_error == false && $confirm_error == false){
    $sql = mysqli_query($conn, "UPDATE `staff_users` SET `password`='$password' WHERE email ='$email'");
    echo "success";
    }
?>  

<script>
    var oldpassword_error ="<?php echo $oldpassword_error; ?>";
    var password_error ="<?php echo $password_error; ?>";
    var confirm_error ="<?php echo $confirm_error; ?>";

    $("#old_password_error, #password_error, #confirm_password_error").html('');
    if(oldpassword_error == true){
        $("#old_password_error").html("<?php echo $oldpassword_msg; ?>");
    }
    if(password_error == true){
        $("#password_error").html("<?php echo $password_msg; ?>");
    }
    if(confirm_error == true){
        $("#confirm_password_error").html("<?php echo $confirm_msg; ?>");
    } 
</script>