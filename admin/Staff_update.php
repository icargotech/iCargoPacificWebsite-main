<?php

include "db_connect.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM staff_users WHERE id = '$id'");

foreach($result as $rows)
{
	$sts = $rows['status'];

	if ($sts == 1) 
	{
		$result = mysqli_query($conn,"UPDATE staff_users SET status = 0 WHERE id= '$id'");

		header("Location: Staff_list.php?success= Status change to Deactivated");
	}
	else
	{
		$result = mysqli_query($conn,"UPDATE staff_users SET status = 1 WHERE id= '$id'");

		header("Location: Staff_list.php?success= Status change to Active");
	}
}

  ?>