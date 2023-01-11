<?php 

session_start();

include "../admin/db_connect.php";

if(isset($_POST['email']) && isset($_POST['password']))
{
	$email = $_POST['email'];
	$pwd = $_POST['password'];

	$sanitized_email = mysqli_real_escape_string($conn,$email);
	$sanitized_pwd = mysqli_real_escape_string($conn,$pwd);
	
	if(empty($email) || empty($pwd))
	{
		header("location: signinAll.php?error= Incorrect Email or Password");
	}
	
		$sql = "SELECT * FROM customer_info WHERE email='$sanitized_email' AND password='$sanitized_pwd'";
		$result = mysqli_query($conn, $sql);

		$count = mysqli_num_rows($result);

		if ($count === 1)
		{
			$rows = mysqli_fetch_assoc($result);

			if($rows['password'] == $pwd)
			{
				$_SESSION['id'] = $rows['ID'];
				// $_SESSION['Image'] = $rows['Image'];
				// $_SESSION['bio'] = $rows['bio'];
				// $_SESSION['firstname'] = $rows['firstname'];
				// $_SESSION['lastname'] = $rows['lastname'];
				// $_SESSION['email'] = $rows['email'];
				// $_SESSION['password'] = $rows['password'];
				// $_SESSION['company_name'] = $rows['company_name'];
				// $_SESSION['company_addr'] = $rows['company_addr'];
				// $_SESSION['contact_no'] = $rows['contact_no'];
				// $_SESSION['date_created'] = $rows['date_created'];

				header("location: Dashboard.php");
			}

		}
		else
		{
			header("location: signinAll.php?error= Incorrect Email or Password");
		}
}
else
{
	header("location: signinAll.php");
}


 ?>