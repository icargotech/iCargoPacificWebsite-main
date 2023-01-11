<?php
$password = $_POST['passwordId'];
$confirm = $_POST['confirmId'];

if(empty($confirm)){
    echo "<span style='color:red'>Confirm your password</span>";
}
elseif($password !== $confirm){
    echo "<span style='color:red'>Those passwords didn’t match.</span>";
}

?>