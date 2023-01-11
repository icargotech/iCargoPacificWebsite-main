<?php 
include "../admin/db_connect.php";
$id = $_POST['id'];
$service = $_POST['service'];
$cargo = $_POST['cargo'];
$vehicle = $_POST['vehicle'];
$kilokim = $_POST['kilokim'];

if(isset($_POST['add'])){
    if(empty($kilokim)){
        header("Location: Charge_management.php?error=no value");
    }else{
        $sql ="INSERT INTO `billing`( `service`, `cargo_type`, `vehicle_type`, `kilometer_kilo`) VALUES ('$service','$cargo','$vehicle','$kilokim')";
      if (mysqli_query($conn, $sql)) {
         header("Location: Charge_management.php?record=added");

      } else {
         echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
      mysqli_close($conn);
      
    }
}elseif(isset($_POST['Delete'])){
    $sql ="DELETE FROM `billing` WHERE `billing_id`=$id";
      if (mysqli_query($conn, $sql)) {
         header("Location: Charge_management.php?record=delete");

      } else {
         echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
      mysqli_close($conn);
}elseif(isset($_POST['Update'])){
    $sql="UPDATE `billing` SET `service`='$service',`cargo_type`='$cargo',`vehicle_type`='$vehicle',`kilometer_kilo`='$kilokim' WHERE `billing_id`=$id";
      if (mysqli_query($conn, $sql)) {
         header("Location: Charge_management.php?record=update");

      } else {
         echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
      mysqli_close($conn);
    
   
}
    
 ?>