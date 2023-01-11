<?php 
include "../admin/db_connect.php";

session_start();

if(isset($_SESSION['id'])) {
$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM staff_users WHERE id = '$id'");
$rows = mysqli_fetch_assoc($sql);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>




  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- BS5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- BS5 Popper and JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- ICON latest -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>


<body class="" style="background-color: #d4d4d4;" >




<!-- NAVIGATION BAR -->

<header class="navbar  navbar-dark sticky-top bg-dark flex-md-nowrap border-bottom border-secondary">
   <button type="button" class="btn btn-outline-warning mx-2" onclick="window.location.href='Dashboard.php';"><i class="bi bi-house-door-fill"></i> Icargo Pacific</button>

<button class="navbar-toggler d-md-none collapsed" 
type="button" 
data-bs-toggle="collapse"
data-bs-target="#sidebarmenu" 
aria-contols="sidebarmenu" 
area-expanded="false" 
aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>


</header>

<div class="row justify-content-between">


<?php if ($_SESSION['role'] == 1) 
{
    include "Admin_sidebar.php";
  }elseif($_SESSION['role'] == 2 || $_SESSION['role'] == 3)
{
  include "Staff_sidebar.php";
}
 ?>



    <div class="col-md-3 col-lg-2"></div>

    <!-- Main -->
    <div class="col-lg-10 col-md-9 ">
      <div class="container-fluid">
        <h2 class="fw-bold text-center my-3">CHARGE MANAGEMENT</h2>
        <hr>
        <div class="col-12">
          <div class="col-12">
            <button class="btn btn-outline-primary float-end px-3 mx-3 mb-3" data-bs-toggle="modal" data-bs-target="#rate"><i class="bi bi-plus-circle"></i> ADD RATE</button>
          </div>
				<div class="row alert alert-success" id="success-alert">
					<div class="d-flex justify-content-center">
						<strong id="msg"></strong>
					</div>
				</div>
 
            <div class="modal fade" id="rate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog ">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">ADD RATE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="billing.php" method="post">
                    <label for="service">Type of Service</label>
                     <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="service">
                   
                    <option value="Standard shipping">Standard shipping</option>
                    <option value="Trucks">Trucks</option>
                    <option value="Containers">Containers</option>
                    <option value="Crate">Crate</option>
                    <option value="Aircraft">Aircraft</option>
                    <option value="other">Other</option>
                    </select>
                    <br>
                      <label for="cargo">Type of Cargo</label>
                       <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="cargo">
                     
                      <option value="box">box</option>
                      <option value="bag">bag</option>
                      <option value="pallet">pallet</option>
                      <option value="create">create</option>
                      <option value="roll">roll</option>
                      <option value="other">other</option>
                      </select>
                      <br>
                       <label for="vehicle">Type of Vehicle</label>
                       <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="vehicle">
                      <option value="Small Pickup">Small Pickup</option>
                      <option value="Closed Van">Closed Van</option>
                      <option value="Pickup Truck">Pickup Truck</option>
                      <option value="6w Fwd Truck">6w Fwd Truck</option>
                      </select>
                        <br>
                        <label class="form-label" for="kilokim">Kilo Per Kilometer(Kg/Km):</label>
                        <br>
                        <input type="number" name="kilokim" id="kilometer_kilo" value="">
                        <br>
                        <p><strong> Rate:</strong> <span class="text-muted">1(Weight/kg) * 1(Weight/km)</span></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>                              
                    <button type="submit" class="btn btn-primary" name="add">ADD</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>




          <table class="table table-striped table-hover table-responsive table-light">
             <thead class="">
                <tr>
                  <th scope="col-3">Biling ID</th>
                  <th scope="col-2">Service type</th>
                  <th scope="col-1">Cargo type</th>
                  <th scope="col-1">Vehicle type</th>
                  <th scope="col-1">Kilometer per kilo</th>    
                 <th scope="col-1">Action</th>
                </tr>
              </thead>
              <?php $sql = mysqli_query($conn,"SELECT * FROM billing"); while($rows = mysqli_fetch_assoc($sql)){ ?>
                 <tbody>
                <td><?php echo $rows['billing_id'] ?></td>
                <td><?php echo $rows['service'] ?></td>
                <td><?php echo $rows['cargo_type'] ?></td>
                <td><?php echo $rows['vehicle_type'] ?></td>
                <td><?php echo $rows['kilometer_kilo'] ?></td>
                <td><button data-bs-toggle="modal" data-bs-target="#update_rate<?php echo $rows['billing_id'] ?> ">View</button></td>
              </tbody>

           <div class="modal fade" id="update_rate<?php echo $rows['billing_id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog ">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">UPDATE RATE</h5>
                    <form action="billing.php" method="post">
                    <button type="submit" class="btn btn-danger" name="Delete">DELETE</button>
                    
                  </div>
                  <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $rows['billing_id'] ?>">
                    <label for="service">Type of Service</label>
                     <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="service">
                   
                    <option value="Standard shipping" <?php if($rows['service'] == "Standard shipping"){echo"selected";}?>>Standard shipping</option>
                    <option value="Trucks" <?php if($rows['service'] == "Trucks"){echo"selected";}?>>Trucks</option>
                    <option value="Containers" <?php if($rows['service'] == "Containers"){echo"selected";}?>>Containers</option>
                    <option value="Crate" <?php if($rows['service'] == "Crate"){echo"selected";}?>>Crate</option>
                    <option value="Aircraft" <?php if($rows['service'] == "Aircraft"){echo"selected";}?>>Aircraft</option>
                    <option value="other" <?php if($rows['service'] == "other"){echo"selected";}?>>Other</option>
                    </select>
                    <br>
                      <label for="cargo">Type of Cargo</label>
                       <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="cargo">
                     
                      <option value="box" <?php if($rows['cargo_type'] == "box"){echo"selected";}?>>box</option>
                      <option value="bag" <?php if($rows['cargo_type'] == "bag"){echo"selected";}?>>bag</option>
                      <option value="pallet" <?php if($rows['cargo_type'] == "pallet"){echo"selected";}?>>pallet</option>
                      <option value="create" <?php if($rows['cargo_type'] == "create"){echo"selected";}?>>create</option>
                      <option value="roll" <?php if($rows['cargo_type'] == "roll"){echo"selected";}?>>roll</option>
                      <option value="other" <?php if($rows['cargo_type'] == "other"){echo"selected";}?>>other</option>
                      </select>
                      <br>
                       <label for="vehicle">Type of Vehicle</label>
                       <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="vehicle">
                      <option value="Small Pickup" <?php if($rows['vehicle_type'] == "Small Pickup"){echo"selected";}?>>Small Pickup</option>
                      <option value="Closed Van" <?php if($rows['vehicle_type'] == "Closed Van"){echo"selected";}?>>Closed Van</option>
                      <option value="Pickup Truck" <?php if($rows['vehicle_type'] == "Pickup Truck"){echo"selected";}?>>Pickup Truck</option>
                      <option value="6w Fwd Truck" <?php if($rows['vehicle_type'] == "6w Fwd Truck"){echo"selected";}?>>6w Fwd Truck</option>
                      </select>
                        <br>
                        <label class="form-label" for="kilokim">Kilo Per Kilometer(Kg/Km):</label>
                        <br>
                        <input type="number" name="kilokim" id="kilometer_kilo" value="<?php echo $rows['kilometer_kilo'] ?>">
                        <br>
                        <p><strong> Rate:</strong> <span class="text-muted">1(Weight/kg) * 1(Weight/km)</span></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>                              
                    <button type="submit" class="btn btn-primary" name="Update">UPDATE</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <?php  } ?>
          </table>
        </div>
      </div>
    </div>
  </div>


</body>
</html>

<?php 

}else{
  header("Location: signinAll.php");
}


 ?>
 <script>
 $("#success-alert").hide();
 </script>

<script>
    if("<?php echo $_GET['record'] ?>" =="added"){
      alert();
      $("#msg").html("Record Successfully Added"); 
    }
    if("<?php echo $_GET['record'] ?>" =="delete"){
      alert();
      $("#msg").html("Record Successfully Deleted");
    }
    if("<?php echo $_GET['record'] ?>" =="update"){
      alert();
      $("#msg").html("Record Successfully Update");
    }
    
    function alert() {
      $("#success-alert").show();
      //$("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
         // $("#success-alert").slideUp(500);
      //});
    }
    
</script>