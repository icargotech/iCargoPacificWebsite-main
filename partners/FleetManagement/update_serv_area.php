<?php
include 'database.php';
if(isset($_POST['regionId']) && isset($_POST['pickup_point']) && isset($_POST['drop_offpoint']) && isset($_POST['region'])){

    $regionId= filter_var( mysqli_real_escape_string($conn,$_POST['regionId']), FILTER_SANITIZE_STRING);
    $pickup_point= filter_var( mysqli_real_escape_string($conn,$_POST['pickup_point']), FILTER_SANITIZE_STRING);
    $drop_offpoint= filter_var( mysqli_real_escape_string($conn,$_POST['drop_offpoint']), FILTER_SANITIZE_STRING);
    $region= filter_var( mysqli_real_escape_string($conn,$_POST['region']), FILTER_SANITIZE_STRING);
    
    $submitSuccess = false;
 
    if(empty($pickup_point) && empty($drop_offpoint) && empty($region)){
        echo "<span style='color:red'>Please fill all the field.</span>";
    }elseif(empty($pickup_point)){
        echo "<span style='color:red'>Please enter pick-up point.</span>";
    }elseif(empty($drop_offpoint)){
        echo "<span style='color:red'>Please enter drop-off point.</span>";
    }elseif(empty($region)){
        echo "<span style='color:red'>Please select region.</span>";
    }else{
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql = "UPDATE service_areas SET point1 ='$pickup_point', point2 ='$drop_offpoint', region='$region' WHERE id='$regionId'";

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
        document.getElementById('update_regionId').value='';
        document.getElementById('update_pickup_point').value='';
        document.getElementById('update_drop_offpoint').value='';
        document.getElementById('update_region').value='';
        }
</script>
