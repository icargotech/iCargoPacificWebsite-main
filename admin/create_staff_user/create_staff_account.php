            <?php
include '../partnerSignupValidation/database.php';

  $email= filter_var( mysqli_real_escape_string($conn,$_POST['email']), FILTER_SANITIZE_STRING);
  $fname= filter_var( mysqli_real_escape_string($conn,$_POST['fname']), FILTER_SANITIZE_STRING);
  $lname= filter_var( mysqli_real_escape_string($conn,$_POST['lname']), FILTER_SANITIZE_STRING);
  $password = preg_replace("/\s+/", "", $_POST['password']);
  $confirm_password = $_POST['confirm_password'];
  $select_role= filter_var( mysqli_real_escape_string($conn,$_POST['select_role']), FILTER_SANITIZE_STRING);

 $email_error              = false;
 $fname_error              = false;
 $lname_error              = false;
 $Password_error           = false;
 $confirm_password_error   = false;
 $select_role_error        = false;
 $success                  = false;

 $email_msg              = null;
 $fname_msg              = null;
 $lname_msg              = null;
 $Password_msg           = null;
 $confirm_password_msg   = null;
 $select_role_msg        = null;

//email validation
$emailInput = preg_replace("/\s+/", "", $email);
if(empty($emailInput)){
    $email_msg = "Email cannot be empty";
    $email_error = true;
}elseif(strlen($emailInput) <= 5) {
    $email_msg =  "Email atleast 6 character";
    $email_error = true;
} elseif (!filter_var($emailInput, FILTER_VALIDATE_EMAIL)) {
    $email_msg =  "Email format error";
    $email_error = true;
} else {
    $query = "select email from staff_users where email = '$emailInput'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $email_msg =  "This user already taken";
        $email_error = true;
    }
}
//firstname validation
if(empty($fname)){
    $fname_msg = "Name cannot be be empty";
    $fname_error = true;
}elseif(!preg_match('/^[a-zA-Z\s \.]+$/', $fname)){
    $fname_msg = "First name must contain only letters";
    $fname_error = true;
}
//lastname validation
if(empty($lname)){
    $lname_msg = "Last name cannot be be empty";
    $lname_error = true;
}elseif(!preg_match('/^[a-zA-Z\s \.]+$/', $lname)){
    $lname_msg = "Last name must contain only letters";
    $lname_error = true;
}
    // password validation
    $uppercase = preg_match('@[A-Z]@',$password);
    //$lowercase = preg_match('@[a-z]@', $password);
    //$number    = preg_match('@[0-9]@', $password);
    //$specialChars = preg_match('@[^\w]@', $password);

if(empty($password)){
    $Password_msg = "Enter your password";
    $Password_error = true;
}elseif(!preg_match('@[A-Z]@',$password)){
    $Password_msg = "Must contain upper case letter";
    $Password_error = true;
}elseif(!preg_match('@[a-z]@',$password)){
    $Password_msg = "Must contain  low case letter";
    $Password_error = true;
}elseif(!preg_match('@[0-9]@',$password)){
    $Password_msg = "Must contain number";
    $Password_error = true;
}elseif(!preg_match('@[^\w]@',$password)){
    $Password_msg = "Must contain special Character";
    $Password_error = true;
}elseif(strlen($password) < 8){
    $Password_msg = "Must contain 8 Character";
    $Password_error = true;
}


    // confirm password validation
    if(empty($confirm_password)){
        $confirm_password_msg = "Confirm your password";
        $confirm_password_error = true;
    }
    elseif($password !== $confirm_password){
        $confirm_password_msg = "Those passwords didn’t match";
        $confirm_password_error = true;
    }

    if($select_role == "Choose..."){
      $select_role_msg = "Select staff role";
      $select_role_error = true;
    }

    if($email_error == false && $fname_error == false && $lname_error == false  && $Password_error == false  && $confirm_password_error == false  && 
$select_role_error == false){
		$sql = "INSERT INTO `staff_users`( `firstname`, `lastname`, `email`, `password`, `role`, `status`) VALUES 
('$fname','$lname','$email','$password','$select_role','1')";
        $result = mysqli_query($conn,$sql);

		if($result)
		{
            $success = true;
		}
		else
		{
			echo "error occur";
		}
        
    }

?>  

<script>
    var email_error ="<?php echo $email_error; ?>";
    var fname_error ="<?php echo $fname_error; ?>";
    var lname_error ="<?php echo $lname_error; ?>";
    var Password_error ="<?php echo $Password_error; ?>";
    var confirm_password_error ="<?php echo $confirm_password_error; ?>";
    var select_role_error ="<?php echo $select_role_error; ?>";
    var success ="<?php echo $success; ?>";

    $("#email_error, #fname_error, #lname_error,#password_error , #confirm_password_error, #select_role_error").html('');
    if(email_error == true){
        $("#email_error").html("<?php echo $email_msg; ?>");
    }
    if(fname_error == true){
        $("#fname_error").html("<?php echo $fname_msg; ?>");
    }
    if(lname_error == true){
        $("#lname_error").html("<?php echo $lname_msg; ?>");
    } 
    if(Password_error == true){
        $("#password_error").html("<?php echo $Password_msg; ?>");
    } 
    if(confirm_password_error == true){
        $("#confirm_password_error").html("<?php echo $confirm_password_msg; ?>");
    } 
    if(select_role_error == true){
        $("#select_role_error").html("<?php echo $select_role_msg; ?>");    
    } 
    if(success == true){
        window.location.href = "./Staff_list.php?success=successfully_add";    
    }

</script>   
