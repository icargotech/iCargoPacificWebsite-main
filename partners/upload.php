<?php
include_once '../admin/db_connect.php';
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    /*if(isset($_FILES["anyfile"]) && $_FILES["anyfile"]["error"] == 0)
    {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = md5(time())."-". basename($_FILES["anyfile"]["name"]);
        $filetype = $_FILES["anyfile"]["type"];
        $filesize = $_FILES["anyfile"]["size"];

        $com_name = $_POST['com_name'];
        $com_email = $_POST['com_ema'];
         $com_addr = $_POST['com_addr'];
        $com_contactno = $_POST['com_cont'];
        $uplidtype = $_POST['uplidtype'];
        $idnumber = $_POST['idnumber'];
        $buspermnum = $_POST['buss_perm_num'];
       
        // Validate file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
     
        // Validate file size - 10MB maximum
        $maxsize = 10 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
     
        // Validate type of the file
        if(in_array($filetype, $allowed))
        {

            // Check whether file exists before uploading it
            if(file_exists("uploads/" . $filename))
            {
                echo $filename . " is already exists.";
            } 
            else
            {

                if(move_uploaded_file($_FILES["anyfile"]["tmp_name"], "uploads/" . $filename))
                {
 
                    //$sql="INSERT INTO partner_verify(pic_path,type,size) VALUES('$filename','$filetype','$filesize')";
                     // $sql="INSERT INTO partner_verify(picpath,company_name,company_email,company_no,uplidtype,id_no,permit_no) VALUES('$filename','$com_name','$com_email','$com_contactno','$uplidtype','$idnumber','$buspermnum')";
                                          
                    mysqli_query($conn,$sql);
 
                    //echo "Your file was uploaded successfully.";
                }else
                {
 
                   //echo "File is not uploaded";
                }
                 
            } 
        } 
        else
        {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } 
    else
    {
        echo "Error: " . $_FILES["anyfile"]["error"];
    }*/

    if(isset($_FILES["business_perm"]) && $_FILES["business_perm"]["error"] == 0){

        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png","JPG" => "image/JPG", "JPEG" => "image/JPEG", "GIF" => "image/GIF", "PNG" => "image/PNG");
        $filename = md5(time())."-". basename($_FILES["business_perm"]["name"]);
        $filetype = $_FILES["business_perm"]["type"];
        $filesize = $_FILES["business_perm"]["size"];


    

        $sanitize_com_name = filter_var( mysqli_real_escape_string($conn,$_POST['com_name']), FILTER_SANITIZE_STRING); 
        $sanitize_com_email = filter_var( mysqli_real_escape_string($conn,$_POST['com_ema']), FILTER_SANITIZE_STRING); 
         $sanitize_com_addr = filter_var( mysqli_real_escape_string($conn,$_POST['com_addr']), FILTER_SANITIZE_STRING);
        $sanitize_com_contactno = filter_var( mysqli_real_escape_string($conn,$_POST['com_cont']), FILTER_SANITIZE_STRING);  
         $sanitize_uplidtype = filter_var( mysqli_real_escape_string($conn,$_POST['uplidtype']), FILTER_SANITIZE_STRING);
        $sanitize_idnumber = filter_var( mysqli_real_escape_string($conn,$_POST['idnumber']), FILTER_SANITIZE_STRING); 
        
         $sanitize_buspermnum = filter_var( mysqli_real_escape_string($conn,$_POST['buss_perm_num']), FILTER_SANITIZE_STRING);  //mysqli_real_escape_string($conn,$buspermnum);
       
        // Validate file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
     
        // Validate file size - 10MB maximum
        $maxsize = 10 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
     
        // Validate type of the file
        if(in_array($filetype, $allowed)){

            // Check whether file exists before uploading it
            if(file_exists("uploads/" . $filename)){
                echo $filename . " is already exists.";
            } else{

                if(move_uploaded_file($_FILES["business_perm"]["tmp_name"], "uploads/" . $filename)){
 
                    //$sql="INSERT INTO partner_verify(pic_path,type,size) VALUES('$filename','$filetype','$filesize')";
                      $sql="INSERT INTO partner_verify(picpath,company_name,company_email,company_no,uplidtype,id_no,permit_no,comp_addr) VALUES('$filename','$sanitize_com_name','$sanitize_com_email','$sanitize_com_contactno','$sanitize_uplidtype','$sanitize_idnumber','$sanitize_buspermnum','$sanitize_com_addr')";
                                          
                    mysqli_query($conn,$sql);
 
                    echo "Your file was uploaded successfully.";
                }else{
 
                   echo "File is not uploaded";
                }
                 
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["business_perm"]["error"];
    }
}
?>