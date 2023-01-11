<?php
include 'database.php';
if(isset($_POST['vehicle_name'])){

    $pickupvehicle_name_point= filter_var( mysqli_real_escape_string($conn,$_POST['vehicle_name']), FILTER_SANITIZE_STRING);

    $submitSuccess = false;

    if(empty($vehicle_name)){
        echo "<span style='color:red'>Please enter the ID</span>";
    }else{
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "DELETE FROM vehicles WHERE name='$vehicle_name'";

            //$sql = "DELETE FROM service_areas WHERE ID='$regionId'";
            
            if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            $submitSuccess = true;
            } else {
            echo "Error updating record: " . $conn->error;
            }
            $conn->close();      

    }
}     
?> 