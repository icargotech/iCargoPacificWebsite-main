<?php
    include_once 'database.php';

$emailInput = preg_replace("/\s+/", "", $_POST['emailId']);

//$emailInput = $_POST['emailId']
if(empty($emailInput)){
    echo "Email cannot be empty";
}elseif(strlen($emailInput) <= 5) {
    echo "Email atleast 6 character";

} elseif (!filter_var($emailInput, FILTER_VALIDATE_EMAIL)) {
    echo "Email format error";
    
} else {
    $query = "select email from signup_partners_users where email = '$emailInput'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        echo "This user already taken";
    }
}
?>

