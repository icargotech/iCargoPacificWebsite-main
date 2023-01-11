<?php
include 'database.php';
if(isset($_POST['staffselect'])){

  $staffselect= filter_var( mysqli_real_escape_string($conn,$_POST['staffselect']), FILTER_SANITIZE_STRING);

  if(empty($staffselect)){
              $query ="select* from fleet_staff";
              $result = $conn->query($query);
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      echo '<tr align="center"><td>' . $row["ID"] . '</td><td>' . $row["name"] .'</td><td>' . $row["role"]. '</td><td>'  . $row["country_code"].''.$row["number"]. '</td></tr>';
                  }
              }else{
                      echo "</td></tr>No result</td></tr>";
                  }
                  $conn-> close();
  }else{
              $query ="select* from fleet_staff where role ='$staffselect'";
              $result = $conn->query($query);

              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                  echo '<tr align="center"><td>' . $row["ID"] . '</td><td>' . $row["name"] .'</td><td>' . $row["role"]. '</td><td>'  . $row["country_code"].''.$row["number"]. '</td></tr>';
                  }
              }else{
                      echo "</td></tr>No result</td></tr>";
                  }

                  $conn-> close();
  }
}
?> 

<!-- create row to become clickable and open modal -->
    <script>
      var table = document.getElementById("displaydata");
      for (var i = 0; i < table.rows.length; i++) {
        table.rows[i].onclick = function () {
          let myModal = new bootstrap.Modal(
          document.getElementById("staff_update_modal"),
          {}
        );myModal.show();
          document.getElementById("Update_staff_Id").value = this.cells[0].innerHTML;
          document.getElementById("update_staff_fname").value = this.cells[1].innerHTML;
          document.getElementById("update_staff_role").value = this.cells[2].innerHTML;
          document.getElementById("update_number").value = this.cells[3].innerHTML.slice(3);          
        };
      }

      // clear textboxs and error massage
  $(document).on("click", "#close_staff", function (e) {
        document.getElementById('Update_staff_Id').value='';
        document.getElementById('update_staff_fname').value='';
        document.getElementById('update_staff_role').value='';
        document.getElementById('update_number').value='';
        document.getElementById('staff_updated_Status').innerHTML='';
  });
   </script>


