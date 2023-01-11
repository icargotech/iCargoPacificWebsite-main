<?php 

require_once '../admin/db_connect.php';

$id = $_GET['id'];

if (isset($_POST['update'])) 
{
    

    $firstname = filter_var( mysqli_real_escape_string($conn,$_POST['fn']), FILTER_SANITIZE_STRING);
    $lastname = filter_var( mysqli_real_escape_string($conn,$_POST['ln']), FILTER_SANITIZE_STRING);
 
    $contact = filter_var( mysqli_real_escape_string($conn,$_POST['contact']), FILTER_SANITIZE_STRING);
    $email = filter_var( mysqli_real_escape_string($conn,$_POST['email']), FILTER_SANITIZE_STRING);


    if (empty($firstname)) 
    {
        header("Location: Profile.php?Error= Missing Entity");
    }
    elseif (empty($lastname)) 
    {
        header("Location: Profile.php?Error= Missing Entity");
    }
    elseif (empty($contact)) 
    {
        header("Location: Profile.php?Error= Missing Entity");
    }
    elseif (empty($email)) 
    {
        header("Location: Profile.php?Error= Missing Entity");
    }
    else
    {   

        if(!empty($_FILES['file']['name']))
        {


        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png","JPG" => "image/JPG", "JPEG" => "image/JPEG", "GIF" => "image/GIF", "PNG" => "image/PNG");
        $filename = md5(time())."-". basename($_FILES["file"]["name"]);
        $filetype = $_FILES["file"]["type"];
        $filesize = $_FILES["file"]["size"];

        // Validate file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die(header("Location: Profile.php?Error= Pwede pero bawal"));
     
        // Validate file size - 10MB maximum
        $maxsize = 10 * 1024 * 1024;


        if($filesize > $maxsize) die(header("Location: Profile.php?Error= Medyo"));


        $fn = ($_FILES['file']['tmp_name']);
        $dbfname = rand(10,1000)."-".$_FILES["file"]["name"];
        $uploads_dir = "Images/";
        $target = $uploads_dir . $dbfname;
        move_uploaded_file($fn, $target);

         $sql = "
        UPDATE customer_info 
        SET first_name = '$firstname', last_name = '$lastname', contact_no = '$contact', email = '$email', Image = '$dbfname'
        WHERE id = '$id'";
        $result = mysqli_query ($conn , $sql);

        header("Location: Profile.php?Success= Profile updated successfully");
        
        }
        else
        {
        $sql = "
        UPDATE customer_info 
        SET first_name = '$firstname', last_name = '$lastname', contact_no = '$contact', email = '$email', Image = '$dbfname'
        WHERE id = '$id'";
        $result = mysqli_query ($conn , $sql);

        header("Location: Profile.php?Success= Profile updated successfully");

        }
        
    }
}
else
{
   header("Location: Profile.php?Error= Error Occur");
}


 ?>

