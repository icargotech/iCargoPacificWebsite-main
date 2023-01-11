<?php
    include_once 'database.php';

 $firstname     = $_POST['firstname'];
 $lastname      = $_POST['lastname'];
 $email         =  preg_replace("/\s+/", "", $_POST['email']);
 $contact_no    = $_POST['contact_no'];
 $Password      = preg_replace("/\s+/", "", $_POST['Password']);
 $confirmpass   = $_POST['confirmpass'];

 $firstname_error     = false;
 $lastname_error      = false;
 $email_error         = false;
 $contact_no_error    = false;
 $Password_error      = false;
 $confirmpass_error   = false;
 $success             = false;

 $firstname_msg     = null;
 $lastname_msg      = null;
 $email_msg         = null;
 $contact_no_msg    = null;
 $Password_msg      = null;
 $confirmpass_msg   = null;

//firstname validation
if(empty($firstname)){
    $firstname_msg = "Name cannot be be empty";
    $firstname_error = true;
}elseif(!preg_match('/^[a-zA-Z\s \.]+$/', $firstname)){
    $firstname_msg = "First name must contain only letters";
    $firstname_error = true;
}
//lastname validation
if(!preg_match('/^[a-zA-Z\s \.]+$/', $lastname)){
    $lastname_msg = "Last name must contain only letters";
    $lastname_error = true;
}

//email validation

if(empty($email)){
    $email_error =true;
    $email_msg = "Email cannot be empty";
}elseif(strlen($email) <= 5) {
    $email_error =true;
    $email_msg = "Email atleast 6 character";

} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error =true;
    echo "Email format error submit";
    
} else {
    $query = "select email from signup_partners_users where email = '$email'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $email_error =true;
        $email_msg = "This user already taken";
    }
}

//contact number validation
function validate_phone_number($contact_no)
{
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($contact_no, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 12 || strlen($phone_to_check) > 13) {
        return false;
     } else {
       return true;
     }
}  
    if (validate_phone_number($contact_no) == false) {
        $contact_no_error = true;
        $contact_no_msg = "+63 000 000 0000";
    }

//password validation
// Validate password strength
$uppercase = preg_match('@[A-Z]@', $Password);
$lowercase = preg_match('@[a-z]@', $Password);
$number    = preg_match('@[0-9]@', $Password);
$specialChars = preg_match('@[^\w]@', $Password);

if(empty($Password)){
     $Password_error = true;
     $Password_msg = "Enter your password";  
}elseif(!$uppercase){
     $Password_error = true;
     $Password_msg = "Must contain upper case letter";  
}elseif(!$lowercase){
     $Password_error = true;
     $Password_msg = "Must contain  low case letter";
}elseif(!$number){
     $Password_error = true;
     $Password_msg = "Must contain number";
}elseif(!$specialChars){
     $Password_error = true;
     $Password_msg = "Must contain special Character";
}elseif(strlen($Password) < 8){
     $Password_error = true;     
     $Password_msg = "Must contain 8 character";
}

//comfirmation password validation
if(empty($confirmpass)){
    $confirmpass_error = true;
     $confirmpass_msg = "Confirm your password";
}
elseif($Password !== $confirmpass){
    $confirmpass_error = true;
     $confirmpass_msg = "Those passwords didn’t match";
}
// insert in database
if($firstname_error == false && $lastname_error == false && $email_error == false && $Password_error == false && $Password_error == false && $confirmpass_error == false){

    date_default_timezone_set('Asia/manila');
    $date = date("Y-m-d h:i:s", Time());
    echo  $firstname ." ". $lastname ." ". $email ." ". $contact_no ." ". $Password." ". $confirmpass ." ".$date; 
    $query = "insert into signup_partners_users (firstname, lastname, email, password, conact_no, date_created) values ('$firstname' , '$lastname' , '$email' , '$Password' , '$contact_no' , '$date')";

        $run = mysqli_query($conn, $query) or die(mysqli_error());

        if ($run) {
            echo "form submitted successfully";
        } else {
            echo "form not submitted";
        }
     $success = true;
}
?>
<script>
    var firstname_error ="<?php echo $firstname_error; ?>";
    var lastname_error ="<?php echo $lastname_error; ?>";
    var email_error ="<?php echo $email_error; ?>";
    var contact_no_error ="<?php echo $contact_no_error; ?>";
    var Password_error ="<?php echo $Password_error; ?>";
    var confirmpass_error ="<?php echo $confirmpass_error; ?>";
    var success ="<?php echo $success; ?>";
 

    //$("#firstname").removeClass("error");
    $("#firstnameStatus, #lastnameStatus, #emailStatus, #contactStatus, #passwordStatus, #confirmStatus").html('');
    if(firstname_error == true){
        $("#firstnameStatus").html('<?php echo $firstname_msg; ?>');
    }
    if(lastname_error == true){
        $("#lastnameStatus").html('<?php echo $lastname_msg; ?>');
    }
    if(email_error == true){
        $("#emailStatus").html('<?php echo $email_msg; ?>');
    }   
    if(contact_no_error == true){
        $("#contactStatus").html('<?php echo $contact_no_msg; ?>');
    }
    if(Password_error == true){
        $("#passwordStatus").html('<?php echo $Password_msg; ?>');
    }
    if(confirmpass_error == true){
        $("#confirmStatus").html('<?php echo $confirmpass_msg; ?>');
    } 
    if(success == true){
    window.location.href = "./signinAll.php";
    }
    
</script>