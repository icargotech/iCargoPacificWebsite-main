<?php 

session_start();

include "../admin/db_connect.php";

if(isset($_POST['email']) && isset($_POST['password']))
{
	$email = $_POST['email'];
	$pwd = $_POST['password'];

	
	if(empty($email) || empty($pwd))
	{
		header("location: index.php?error= Incorrect Email or Password");
	}
	
		$sql = "SELECT * FROM staff_users WHERE email='$email' AND password='$pwd'";
		$result = mysqli_query($conn, $sql);

		$count = mysqli_num_rows($result);

		if ($count === 1)
		{
			$rows = mysqli_fetch_assoc($result);

			if($rows['password'] == $pwd)
			{
				if($rows['status'] == "0"){
					header("location: index.php?error= deactivated");
				}else{
					$_SESSION['id'] = $rows['id'];
					$_SESSION['role'] = $rows['role'];
					header("location: Dashboard.php");
				}
			}

		}
		else
		{
			header("location: index.php?error=error");
		}
 }
else
{
	header("location: index.php");
}


 ?>