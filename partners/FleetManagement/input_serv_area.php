<?php
include 'database.php';
if(isset($_POST['pickup_point']) && isset($_POST['drop_offpoint']) && isset($_POST['region'])){

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
            $query ="select* from service_areas where point1 ='$pickup_point' AND point2 ='$drop_offpoint'";
            $result = $conn->query($query);   
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo"<span style='color:red'>Inputs already taken.</span>";    
                    }
                }else{ 
                    $query = "insert into service_areas (point1 ,point2 ,region) values 
                    ('$pickup_point' , '$drop_offpoint' , '$region')";
                    $run = mysqli_query($conn, $query) or die(mysqli_error());
                    if ($run) {
                        $submitSuccess = true;
                        echo "Serviceable Area added successfully";
                    } else {
                        echo "Something went wrong.";
                    }
                }
            $conn-> close();
    }
}
?>
<script>
    //for clear textbox
    var submitSuccess = "<?php echo $submitSuccess;?>";
        if (submitSuccess == true){
            document.getElementById('pickup_point').value='';
            document.getElementById('drop_offpoint').value='';
            document.getElementById('region').value='';
        }
</script>