<?php 
require_once 'config.php';

if(isset($_POST['insert']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$pass = $_POST['pass'];


// echo $length.$width.$height.$weight.$id;


$sql = "INSERT INTO user set fname = '$fname', lname='$lname', email='$email', contact='$contact', pass = '$pass'";

$result = mysqli_query($con,$sql);
    
if($result)
{
    header("Location: signupCustomer.html?success= Updated successfully");
}

else
{
    header("Location: signupCustomer.html?error= Error Occur");
}
}

else
{
    echo "May mali talaga";
}

 ?>
