<?php 
include_once '../admin/db_connect.php';

if(isset($_POST['update']))
{

	$stat= filter_var( mysqli_real_escape_string($conn,$_POST['status']), FILTER_SANITIZE_STRING);
    $vehicle= filter_var( mysqli_real_escape_string($conn,$_POST['vehicle']), FILTER_SANITIZE_STRING);
    $drive= filter_var( mysqli_real_escape_string($conn,$_POST['driver']), FILTER_SANITIZE_STRING);
    $id= filter_var( mysqli_real_escape_string($conn,$_POST['id']), FILTER_SANITIZE_STRING);

// $stat=$_POST['status'];
// $vehicle=$_POST['vehicle'];
// $drive=$_POST['driver'];
// $id = $_POST['id'];


if ($stat == 'Status') 
{
	header("Location : Pending.php?error= Please select a Status");
}
else
{
$sql = "UPDATE orders set status = '$stat', vehicle='$vehicle', driver='$drive' where order_number = '$id'";

$result = mysqli_query($conn,$sql);
	
if($result)
{
	header("Location: Pending.php?success= Updated successfully");
}

else
{
	header("Location: Pending.php?error= Error Occur");
}
}
}

else
{
	echo "May mali talaga";
}

 ?>
