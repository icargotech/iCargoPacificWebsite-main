<?php
include 'database.php';
if(isset($_POST['Update_staff_Id'])){

    $Update_staff_Id= filter_var( mysqli_real_escape_string($conn,$_POST['Update_staff_Id']), FILTER_SANITIZE_STRING);

    if(empty($Update_staff_Id)){
        echo "<span style='color:red'>Please enter the ID</span>";
    }else{

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "DELETE FROM fleet_staff WHERE ID ='$Update_staff_Id'";

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
