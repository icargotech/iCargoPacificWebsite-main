<?php 
include_once '../admin/db_connect.php';

if(isset($_POST['update']))
{
// $stat=$_POST['status'];
// $time=$_POST['time'];
// $date=$_POST['date'];
// $id = $_POST['id'];


$stat=filter_var( mysqli_real_escape_string($conn,$_POST['status']), FILTER_SANITIZE_STRING);
$time=filter_var( mysqli_real_escape_string($conn,$_POST['time']), FILTER_SANITIZE_STRING);
$date=filter_var( mysqli_real_escape_string($conn,$_POST['date']), FILTER_SANITIZE_STRING);
$id = filter_var( mysqli_real_escape_string($conn,$_POST['id']), FILTER_SANITIZE_STRING);


if ($stat == 'Status') 
{
	header("Location : InTransit.php?error= Please select a Status");
}
else
{
$sql = "UPDATE orders set status = '$stat', time='$time', date='$date' where order_number = '$id'";

$result = mysqli_query($conn,$sql);
	
if($result)
{
	header("Location: InTransit.php?success= Updated successfully");
}

else
{
	header("Location: InTransit.php?error= Error Occur");
}
}
}

else
{
	echo "May mali talaga";
}

 ?>
