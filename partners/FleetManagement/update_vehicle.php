<?php
include 'database.php';
if(isset($_POST['vehicle_name']) && isset($_POST['status'])){
    
    $vehicle_name = filter_var( mysqli_real_escape_string($conn,$_POST['vehicle_name']), FILTER_SANITIZE_STRING);
    $status = filter_var( mysqli_real_escape_string($conn,$_POST['status']), FILTER_SANITIZE_STRING);


    $submitSuccess = false;

    if(empty($status)){
        echo "<span style='color:red'>Please Select vehicle status.</span>";
    }else{

            $sql = "UPDATE vehicles SET status='$status' WHERE name='$vehicle_name'";

            if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            $submitSuccess = true;
            } else {
            echo "Error updating record: " . $conn->error;
            }

            $conn->close();  
    }
}
?> 

<script>
    //for clear textbox
    var submitSuccess = "<?php echo $submitSuccess; ?>";
        if (submitSuccess == true){
                
        }
</script>