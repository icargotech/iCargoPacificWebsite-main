<?php
include "../admin/db_connect.php";


if(isset($_POST['sortBy'])){   
    $sortBy= filter_var( mysqli_real_escape_string($conn,$_POST['sortBy']), FILTER_SANITIZE_STRING);

    if ($sortBy !== "Choose..."){
        $query ="SELECT * FROM `attendance_log` where email = '$sortBy' ORDER BY `attendance_log`.`timeid` DESC";
            $result = $conn->query($query);

        if ($result->num_rows > 0) {    
            while($rows = $result->fetch_assoc()) {
            echo 
            '<tr></tr><td>'. $rows['email'] .'</td> 
            <td>'. $rows['first_name'] .'</td> 
            <td>'. $rows['last_name'] .'</td> 
            <td>'. $rows['action'] .'</td> 
            <td>'. $rows['date'] .'</td></tr>';
            }
        }
    }else{
        //$query ="SELECT * FROM `attendance_log` ORDER BY date , email ,timeid DESC";
        $query ="SELECT * FROM `attendance_log` ORDER BY `attendance_log`.`timeid` DESC";
            $result = $conn->query($query);

        if ($result->num_rows > 0) {    
            while($rows = $result->fetch_assoc()) {
            echo 
            '<tr></tr><td>'. $rows['email'] .'</td> 
            <td>'. $rows['first_name'] .'</td> 
            <td>'. $rows['last_name'] .'</td> 
            <td>'. $rows['action'] .'</td> 
            <td>'. $rows['date'] .'</td></tr>';
            }
        }
    }

}

?>