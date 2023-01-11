<?php
include 'database.php';
if(isset($_POST['vname']) && isset($_POST['vtype']) && isset($_POST['condition'])){

    $vname= filter_var( mysqli_real_escape_string($conn,$_POST['vname']), FILTER_SANITIZE_STRING);
    $vtype= filter_var( mysqli_real_escape_string($conn,$_POST['vtype']), FILTER_SANITIZE_STRING);
    $condition= filter_var( mysqli_real_escape_string($conn,$_POST['condition']), FILTER_SANITIZE_STRING);

    if(empty($vname) && empty($vtype) && empty($condition)){
        echo "<span style='color:red'>Please fill all the field.</span>";
    }elseif(empty($vname)){
        echo "<span style='color:red'>Please enter vehicle name.</span>";
    }elseif(empty($vtype)){
        echo "<span style='color:red'>Please select vehicle type.</span>";
    }elseif(empty($condition)){
        echo "<span style='color:red'>Please enter vehicle condition.</span>";
    }else{

            $query ="select name from vehicles where name ='$vname'";
            $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    
                    echo"<span style='color:red'>Vehicle name already taken.";
                }else{
                    $query = "insert into vehicles(name,type,conditionss) values 
                    ('$vname' , '$vtype' , '$condition')";

                    $run = mysqli_query($conn, $query) or die(mysqli_error());

                    if ($run) {
                        echo "Vehicle added successfully";
                        $submitSuccess = true;
                    } else {
                        echo "Something went wrong.";
                    }
                }
    }
}
?>
<script>
    //for clear textbox
    var submitSuccess = "<?php echo $submitSuccess; ?>";
        if (submitSuccess == true){
            document.getElementById('vname').value='';
            document.getElementById('vtype').value='';
            document.getElementById('condition').value='';
        }
</script>

