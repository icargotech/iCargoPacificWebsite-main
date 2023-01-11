<?php

//remove spacing
$password = preg_replace("/\s+/", "", $_POST['passwordId']);
$oldpassword = preg_replace("/\s+/", "", $_POST['oldpassword']);

//$password = $_POST['passwordId'];

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(empty($password)){
    echo "Enter your password";  
}elseif($password == $oldpassword){
    echo "New password cannot be the same as your current password"; 
}elseif(!$uppercase){
    echo "Must contain upper case letter";  
}elseif(!$lowercase){
    echo "Must contain  low case letter";
}elseif(!$number){
    echo "Must contain number";
}elseif(!$specialChars){
    echo "Must contain special Character";
}elseif(strlen($password) < 8){     
    echo "Must contain 8 character";
}
?>