<?php 

session_start();

include "../admin/db_connect.php";


date_default_timezone_set('Asia/Manila');
$currentdate = date('M d, Y h:i A');
$id = $_POST['id'];

$sql = mysqli_query($conn, "SELECT * FROM staff_users WHERE id = '$id'");
$rows = mysqli_fetch_assoc($sql);

$email = $rows['email'];
$firstname = $rows['firstname'];
$lastname = $rows['lastname'];

$sql1 = mysqli_query($conn,"SELECT action FROM `attendance_log` WHERE email = '$email' ORDER BY timeid DESC LIMIT 1"); 
$rows = mysqli_fetch_assoc($sql1);

if(isset($_POST['timein']))
{
	if($rows['action'] !== "Time-in"){
		$in = "Time-in";

		$sql2 = "INSERT INTO attendance_log(email, first_name, last_name, action, date) 
		VALUES('$email', '$firstname', '$lastname', '$in', '$currentdate')";
		$result = mysqli_query($conn,$sql2);

		if($result)
		{
			header("Location: Dashboard.php?success= Time-in successfully!");
		}
		else
		{
			echo "error occur";
		}
	}else{
		header("Location: Dashboard.php?fail= Already Time-in");
	}
}
elseif(isset($_POST['timeout']))
{
	if($rows['action'] !== "Time-out"){
	$out = "Time-out";

	$sql2 = "INSERT INTO attendance_log(email, first_name, last_name, action, date) 
	VALUES('$email', '$firstname', '$lastname', '$out', '$currentdate')";
	$result = mysqli_query($conn,$sql2);
	if($result)
	{
		header("Location: Dashboard.php?success= Time-out successfully!");
	}
	else
	{
		echo "error occur";
	}
	}else{
		header("Location: Dashboard.php?fail= Already Time-out");
	}
}
?>