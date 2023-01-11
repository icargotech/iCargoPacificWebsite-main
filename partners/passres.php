
<?php
//for session 
require_once('../admin/db_connect.php');
session_start();


if (isset($_SESSION['id'])) 
{
$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM signup_partners_users WHERE id = '$id'");
$rows = mysqli_fetch_assoc($sql);

?>


<?php 






if(isset($_POST['newpassSubmit']))
{
	$current_password= filter_var( mysqli_real_escape_string($conn,$_POST['password']), FILTER_SANITIZE_STRING);
	$new_password= filter_var( mysqli_real_escape_string($conn,$_POST['newpass']), FILTER_SANITIZE_STRING);
	$retype_pass= filter_var( mysqli_real_escape_string($conn,$_POST['retypepass']), FILTER_SANITIZE_STRING);
	$query='select * from signup_partners_users where id="'.$id.'"';
	$execute=mysqli_query($conn,$query);
	$result=mysqli_fetch_assoc($execute);
	$compare_pass=$result['password'];


		

		$uppercase = preg_match('@[A-Z]@', $new_password);
		$lowercase = preg_match('@[a-z]@', $new_password);
		$number    = preg_match('@[0-9]@', $new_password);
		$specialChars = preg_match('@[^\w]@', $new_password);

		if(empty($new_password)	&& empty($retype_pass) && empty($current_password) || empty($new_password) ||  empty($retype_pass) || empty($current_password) )
		{
		    echo "Enter your password";  
		}elseif(!$uppercase){
		    echo "Must contain upper case letter";  
		}elseif(!$lowercase){
		    echo "Must contain  low case letter";
		}elseif(!$number){
		    echo "Must contain number";
		}elseif(!$specialChars){
		    echo "Must contain special Character";
		}elseif(strlen($new_password) < 8){
		    echo "Must contain atleast 8 character";
		}
		else
		{
			if($compare_pass == $current_password)
			{
				if($new_password == $retype_pass)
				{
					
					$sql = "UPDATE signup_partners_users SET password='$new_password' WHERE id=$id";
					if (mysqli_query($conn, $sql)) 
					{
					  echo '<script>alert("Password updated successfully");</script>';
					  echo '<script>window.location.href = "Dashboard.php";</script>';
					} 
					//echo "$password";
				}
				else 
				{
					echo '<script>alert("new password does not match to retype password");</script>';
					echo '<script>window.location.href = "ResetPassword.php";</script>';
				}
			}
			else
			{
				echo '<script>alert("current password does not match to database");</script>';
				echo '<script>window.location.href = "ResetPassword.php";</script>';
			}

		}
		

}
?>



<?php
}
else
{
header("Location: signinAll.php");
} ?>