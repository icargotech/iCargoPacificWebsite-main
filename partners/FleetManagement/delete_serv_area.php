<?php
include 'database.php';
if(isset($_POST['regionId'])){   
    
    $regionId= filter_var( mysqli_real_escape_string($conn,$_POST['regionId']), FILTER_SANITIZE_STRING);

    $submitSuccess = false;

    if(empty($regionId)){
        echo "<span style='color:red'>Please enter the ID</span>";
    }else{


            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "DELETE FROM service_areas WHERE ID='$regionId'";
            
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

<script>
    //for clear textbox
    var submitSuccess = "<?php echo $submitSuccess; ?>";
        if (submitSuccess == true){
        document.getElementById('update_regionId').value='';
        document.getElementById('update_pickup_point').value='';
        document.getElementById('update_drop_offpoint').value='';
        document.getElementById('update_region').value='';
        }
</script>
