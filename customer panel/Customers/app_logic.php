<?php 

session_start();
$errors = [];
$user_id = "";
// connect to database
$db = mysqli_connect('localhost', 'root', '', 'icargopacific_db');





if (isset($_POST['reset-password'])) {





  $email = mysqli_real_escape_string($db, $_POST['email']);
  // ensure that the user exists on our system
  $query = "SELECT email FROM customer_info WHERE email='$email'";
  $results = mysqli_query($db, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
    echo'<script>alert("Your email is required"); </script>';
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
    echo'<script>alert("Sorry, no user exists on our system with that email"); </script>';
  }
  // generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql = "UPDATE customer_info set token='$token' where email='$email' ";
    $results = mysqli_query($db, $sql);

    // Send email to user with the token in a link they can click on

    $to = $email;
    $subject = "Reset your password on Icargopacific.com";

    $msg = "Hi there, \nYou are receiving this email because you or maybe someone else wanted to change your password. If you requested to change your
password, please go to the following link:  https://www.icargopacific.com/Customers/newpass/ResetPassword.php?token=" . $token . "
If you did not request this, please ignore this email and your password will not be changed";
    $msg = wordwrap($msg,70);
    $headers = "From: info@testting.com";
    mail($to, $subject, $msg, $headers);
    //header('location: pending.php?email=' . $email);
    echo '<script>alert("Successfuly Reseted Please check your email");</script>';
  }
}





// ENTER A NEW PASSWORD
if (isset($_POST['newpassSubmit'])) 
{


        
        $new_password= filter_var( mysqli_real_escape_string($db,$_POST['newpass']), FILTER_SANITIZE_STRING);
        $retype_pass= filter_var( mysqli_real_escape_string($db,$_POST['retypepass']), FILTER_SANITIZE_STRING);
        // $query='select * from signup_partners_users where id="'.$id.'"';
        // $execute=mysqli_query($conn,$query);
        // $result=mysqli_fetch_assoc($execute);
        // $compare_pass=$result['password'];
        $token = mysqli_real_escape_string($db,$_POST['token']);

          

          $uppercase = preg_match('@[A-Z]@', $new_password);
          $lowercase = preg_match('@[a-z]@', $new_password);
          $number    = preg_match('@[0-9]@', $new_password);
          $specialChars = preg_match('@[^\w]@', $new_password);

          if(empty($new_password) && empty($retype_pass) || empty($new_password) ||  empty($retype_pass) )
          {
              echo "Enter your password";  
          }elseif(!$uppercase){
              echo "Must contain upper case letter";  
          }elseif(!$lowercase){
              echo "Must contain  low case letter";
          }elseif(!$number){
              echo "Must contain number";
          }elseif(!$specialChars){
              echo "Must contain special Character";
          }elseif(strlen($new_password) < 8){
              echo "Must contain atleast 8 character";
          }
          else
          {
           
              if($new_password == $retype_pass)
              {

                  $sql = "SELECT email FROM customer_info WHERE token='$token' LIMIT 1";
                  $results = mysqli_query($db, $sql);
                  $email = mysqli_fetch_assoc($results)['email'];

                  if ($email) 
                  {
                    //$new_pass = $new_pass);
                    $sql = "UPDATE customer_info SET password='$new_password',token='' WHERE email='$email'";
                    $results = mysqli_query($db, $sql);
                    echo '<script>alert("Password updated successfully");</script>';
                          echo '<script>window.location.href = "../signinAll.php";</script>';
                    //header('location: index.php');
                  }
                
              }
              else 
              {
                echo '<script>alert("new password does not match to retype password");</script>';
                echo '<script>window.location.href = "ResetPassword.php";</script>';
              }
            
           
          }
          

  
  //qeqwewq
  // $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
  // $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);

  // $token = mysqli_real_escape_string($db,$_POST['token']);
  
  // // Grab to token that came from the email link

  // if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  // if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
  // if (count($errors) == 0) 
  // {
  //   // select email address of user from the password_reset table 
  //   $sql = "SELECT email FROM signup_partners_users WHERE token='$token' LIMIT 1";
  //   $results = mysqli_query($db, $sql);
  //   $email = mysqli_fetch_assoc($results)['email'];

  //   if ($email) 
  //   {
  //     //$new_pass = $new_pass);
  //     $sql = "UPDATE signup_partners_users SET password='$new_pass',token='' WHERE email='$email'";
  //     $results = mysqli_query($db, $sql);
  //     echo '<script>alert("Password updated successfully");</script>';
  //           echo '<script>window.location.href = "signinAll.php";</script>';
  //     //header('location: index.php');
  //   }
  // }



}
?>