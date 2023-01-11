<?php 
include "../admin/db_connect.php";
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];

if(!empty($date1) && !empty($date2)){
    $sql = mysqli_query($conn, "SELECT SUM(total_amount)  FROM orders WHERE date_delivered BETWEEN '$date1' and '$date2'");
    $row1 = mysqli_fetch_assoc($sql);
    $total = $row1['SUM(total_amount)'];
    if($total !=""){
     echo "₱".$total;
    }else{
         echo "₱0";
    }
}else{
echo "₱0";
}

 ?>