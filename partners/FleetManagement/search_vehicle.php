<?php
include 'database.php';
if(isset($_POST['vehicletype'])){
    
  $vehicletype= filter_var( mysqli_real_escape_string($conn,$_POST['vehicletype']), FILTER_SANITIZE_STRING);

    if(empty($vehicletype)){
                $query ="select* from vehicles";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<tr align="center"><td>' . $row["name"] . '</td><td>' . $row["type"] .'</td><td>' . $row["status"]. '</td><td>' . $row["conditionss"]. '</td></tr>';
                    }
                }else{
                        echo "</td></tr>No result</td></tr>";
                    }
                    $conn-> close();
    }else{
                $query ="select* from vehicles where type ='$vehicletype'";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<tr align="center"><td>' . $row["name"] . '</td><td>' . $row["type"] .'</td><td>' . $row["status"]. '</td><td>' . $row["conditionss"]. '</td></tr>';
                    }
                }else{
                        echo "</td></tr>No result</td></tr>";
                    }

                    $conn-> close();
    }
}
?> 



    <script>
      var table = document.getElementById("displaydataVehicle"),rIndex;
      
      for (var i = 0; i < table.rows.length; i++) {
        table.rows[i].onclick = function () {
          let myModal = new bootstrap.Modal(
          document.getElementById("vehicle_update_modal"),
          {}
        );myModal.show();

          rIndex = this.rowIndex;
          console.log(rIndex)   
         
          var value = this.cells[2].innerHTML;
          document.getElementById("vehicle_name").value = this.cells[0].innerHTML;
          document.getElementById("vehicle_type").value = this.cells[1].innerHTML;
          //document.getElementById("status").checked = true;
          console.log(value)
            if (value == 'Available'){
              document.getElementById("status1").checked = true;
            }else{
                document.getElementById("status1").checked = false;
            }
            if(value == 'On Transit'){
                document.getElementById("status2").checked = true;
            }else{
                document.getElementById("status2").checked = false;
            }
            if(value == 'Under Maintenance'){
                document.getElementById("status3").checked = true;
            }else{
                document.getElementById("status3").checked = false;
            }
        };
      }

        $(document).ready(function(){
            $('.get_value').click(function() {
                $('.get_value').not(this).prop('checked', false);
            });
        });

    </script>