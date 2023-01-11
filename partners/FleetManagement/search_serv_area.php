<?php
include 'database.php';
if(isset($_POST['region'])){
  
  $region= filter_var( mysqli_real_escape_string($conn,$_POST['region']), FILTER_SANITIZE_STRING);

  if(empty($region)){
              $query ="select ID, point1, point2, region from service_areas";
              $result = $conn->query($query);
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      echo '<tr align="center"><td>'. $row["ID"] . '</td><td>'  . $row["point1"] . '</td><td>' . $row["point2"] .  '</td><td>' . $row["region"] . '</td></tr>';
                  }
              }else{
                      echo "</td></tr>No result</td></tr>";
                  }
                  $conn-> close();
  }else{      
              $query ="select ID, point1, point2, region from service_areas where region ='$region'";
              $result = $conn->query($query);

              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      echo '<tr align="center"><td>'. $row["ID"] . '</td><td>'  . $row["point1"] . '</td><td>' . $row["point2"] .  '</td><td>' . $row["region"] . '</td></tr>';
                  }
              }else{
                      echo "</td></tr>No result</td></tr>";
                  }

                  $conn-> close();
  }
}
?> 

<!-- ----------------- For Serviceable areas -------------------- -->
    <script>
      var table = document.getElementById("displayServiceableArea");
      for (var i = 0; i < table.rows.length; i++) {
        table.rows[i].onclick = function () {
          let myModal = new bootstrap.Modal(
          document.getElementById("ServAreaModal"),
          {}
        );myModal.show();
          //fetch data from row and display in modal
          document.getElementById("update_regionId").value = this.cells[0].innerHTML;
          document.getElementById("update_pickup_point").value = this.cells[1].innerHTML;
          document.getElementById("update_drop_offpoint").value = this.cells[2].innerHTML;
          document.getElementById("update_region").value = this.cells[3].innerHTML;
        };
      }
        // cancel button clear textboxs and error massage
        $(document).on("click", "#servAreaCancel", function (e) {
        document.getElementById('update_regionId').value='';
        document.getElementById('update_pickup_point').value='';
        document.getElementById('update_drop_offpoint').value='';
        document.getElementById('update_region').value='';
        document.getElementById('update_servareaStatus').innerHTML='';
        });

    </script>
