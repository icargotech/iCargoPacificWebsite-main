<?php 



include "db_connect.php";

$sql = "SELECT * FROM partner_verify WHERE verify = 'In-progress'";

$result = mysqli_query($conn,$sql);
$ctr = mysqli_num_rows($result);

echo $ctr;




 ?>