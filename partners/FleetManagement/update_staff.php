<?php
include 'database.php';
if(isset($_POST['fname']) && isset($_POST['staffrole']) && isset($_POST['staffId']) && isset($_POST['countrynumber']) && isset($_POST['number'])){

    $fname= filter_var( mysqli_real_escape_string($conn,$_POST['fname']), FILTER_SANITIZE_STRING);
    $staffrole= filter_var( mysqli_real_escape_string($conn,$_POST['staffrole']), FILTER_SANITIZE_STRING);
    $staffId= filter_var( mysqli_real_escape_string($conn,$_POST['staffId']), FILTER_SANITIZE_STRING);
    $countrynumber= filter_var( mysqli_real_escape_string($conn,$_POST['countrynumber']), FILTER_SANITIZE_STRING);
    $number= filter_var( mysqli_real_escape_string($conn,$_POST['number']), FILTER_SANITIZE_STRING);

    $submitSuccess = false;

    if(empty($fname) && empty($staffrole) && empty($staffId)){
        echo "<span style='color:red'>Please fill all the field.</span>";
    }elseif(empty($fname)){
        echo "<span style='color:red'>Please enter full name.</span>";
    }elseif(empty($staffrole)){
        echo "<span style='color:red'>Please enter staff role.</span>";
    }elseif(empty($staffId)){
        echo "<span style='color:red'>Please enter staff ID.</span>";
    }elseif(empty($number)){
        echo "<span style='color:red'>Please enter mobile number.</span>";
    }else{
    function validate_phone_number($number)
    {
        // Allow +, - and . in phone number
        $filtered_phone_number = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
        // Remove "-" from number
        $phone_to_check = str_replace("-", "", $filtered_phone_number);
        // Check the lenght of number
        // This can be customized if you want phone number from a specific country
        if (strlen($phone_to_check) > 10 || strlen($phone_to_check) < 10) {
            return false;
        } else {
        return true;
        }
    }
            if (validate_phone_number($number) == false) {
            echo "<span style='color:red'>Phone number is invalid. +63 (0000000000).</span>";
            }elseif(!preg_match('/^[0-9 +-]*$/', $number)){
            echo "<span style='color:red'>Phone number is invalid. +63 (0000000000).</span>";
        } else {
            
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "UPDATE fleet_staff SET name ='$fname', role ='$staffrole', number = '$number', country_code ='$countrynumber' WHERE id='$staffId'";

            if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            $submitSuccess = true;
            } else {
            echo "Error updating record: " . $conn->error;
            }
            $conn->close();      
            }
        
    }   
}
?> 
<script>
    //for clear textbox
    var submitSuccess = "<?php echo $submitSuccess; ?>";
        if (submitSuccess == true){
            document.getElementById('fname').value='';
            document.getElementById('staffrole').value='';
            document.getElementById('staffId').value='';
        }
</script>