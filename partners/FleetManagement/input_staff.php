<?php
include 'database.php';
if(isset($_POST['fname']) && isset($_POST['staffrole']) && isset($_POST['staffId']) && isset($_POST['countrynumber']) && isset($_POST['number'])){

    $fname= filter_var( mysqli_real_escape_string($conn,$_POST['fname']), FILTER_SANITIZE_STRING);
    $staffrole= filter_var( mysqli_real_escape_string($conn,$_POST['staffrole']), FILTER_SANITIZE_STRING);
    $staffId= filter_var( mysqli_real_escape_string($conn,$_POST['staffId']), FILTER_SANITIZE_STRING);
    $countrynumber= filter_var( mysqli_real_escape_string($conn,$_POST['countrynumber']), FILTER_SANITIZE_STRING);
    $number= filter_var( mysqli_real_escape_string($conn,$_POST['number']), FILTER_SANITIZE_STRING);

    $submitSuccess = false;

    if(empty($fname) && empty($staffrole) && empty($staffId)  && empty($number)){
        echo "<span style='color:red'>Please fill all the field.</span>";
    }elseif(empty($fname)){
        echo "<span style='color:red'>Please enter full name.</span>";
    }elseif(empty($staffrole)){
        echo "<span style='color:red'>Please select staff role.</span>";
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
            } else{
            

            $query ="select ID from fleet_staff where ID ='$staffId'";
            $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo"<span style='color:red'>Employee ID already taken.</span>";
                    }

                }else{
                    $CPnumber = $countrynumber." ".$number;

                    $query = "insert into fleet_staff(name,role,ID, number, country_code) values 
                    ('$fname' , '$staffrole' , '$staffId', '$number' ,'$countrynumber')";

                    $run = mysqli_query($conn, $query) or die(mysqli_error());

                    if ($run) {
                        echo "Staff added successfullysuccessfully";
                        $submitSuccess = true;
                    } else {
                        echo "Something went wrong.";
                    }
                }
            $conn-> close();
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
            document.getElementById('number').value='';
        }
</script>