<?php 

include "db_connect.php";

      $sql = "SELECT * FROM partner_verify WHERE verify = 'In-progress' ORDER BY ID DESC LIMIT 10";
      $result = mysqli_query($conn,$sql);
      while ($row = mysqli_fetch_assoc($result)){
      echo '<li><a class="dropdown-item" href="Partner_verify.php">New request from:' . $row['company_name'] .'</a></li><hr>';
      }
 ?>