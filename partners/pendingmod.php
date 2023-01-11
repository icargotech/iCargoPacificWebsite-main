 <!-- Modal -->
 <?php

<div class="modal fade" id="staticBackdrop<?php echo $row['order_number'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-body">
       <form action="update.php" method="POST">
                    <div class="col-lg-6">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
            </div>
        <h4 class="fw-bold text-secondary"><?php echo $row['status'] ?> Orders Details </h4>
        <br>
        <div class="row justify-content-evenly">
            <div class="col-lg-3"><p>Order Number: <span class="fw-bold text-secondary"><?php echo $row['order_number'] ?></span></p></div>
            <div class="col-lg-3">Delivery date: <span class="fw-bold text-secondary"><?php echo $row['date_of_delivery'] ?></div>
            <div class="col-lg-3">Mode of payment: <span class="fw-bold text-secondary"><?php echo $row['MOP'] ?></div>
            <div class="col-lg-3"><p class="btn btn-warning rounded-pill">Total Amount: &nbsp<span><?php echo $row['total_amount'] ?></span></p></div>
        </div>
        <div class="row justify-content-evenly">
            <div class="col-lg-3 border border-rounded shadow-sm">
                <h6 class="text-primary">Sender Details</h6>
                <br>
                <h5 class="text-secondary">&nbsp <?php echo $row['sender'] ?></h5>
                <br>
                <p>pick up point: <h6><?php echo $row['pick_up_point'] ?></h6></p>
                <br>
                <h6><?php echo $row['sender_no'] ?> </h6>
                <br>
                <p>Note: <span><?php echo $row['sender_note'] ?></span></p>
            </div>

            <div class="col-lg-3 border border-rounded shadow-sm">
                <h6 class="text-primary">Recipient Details</h6>
                <br>
                <h5 class="text-secondary">&nbsp <?php echo $row['recipient'] ?></h5>
                <br>
                <p>pick up point: <br> <h6><?php echo $row['drop_off_point'] ?></h6></p>
                <br>
                <h6><?php echo $row['recipient_no'] ?> </h6>
                <br>
                <p>Note: <span><?php echo $row['recipient_note'] ?></span></p>
            </div>

            <div class="col-lg-4 ">
                <h5 class="text-primary">Package Info</h5>
                <p>Total Distance:<span><?php echo $row['distance'] ?></span></p>
                <p>Weight: <span><?php echo $row['weight'] ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Cargo Type: <span><?php echo $row['cargo_type'] ?></span></span></p>
                <p>Dimension: <span><?php echo $row['dimension'] ?>&nbsp&nbsp&nbsp&nbsp&nbspCargo Service: <span><?php echo $row['cargo_service'] ?></span></span></p>
                
                <input type="hidden" name="id" value="<?php echo $row['order_number'] ?>">
            
                <h5 class="text-primary">Update Info</h5>
                <p>Set Status to:<span>
                <select name="status" >
                <option value="Status" selected disabled>Status</option>
                <option value="In-transit">In-Transit</option>
                <option value="Delivered">Delivered</option>
                <option value="Cancelled">Cancelled</option>
                </select>


                <p>Assign Vehicle:<span>
                <select name="vehicle" >
                <?php
                while($rows=$resultSettt->fetch_assoc())
                {
                    $vehicle=$rows['name'];
                    echo"<option value='$vehicle'>$vehicle</option>";
                }
                ?>
            </select>

                <p>Assign Driver:<span>
                <select name="driver" >
                <?php
                while($rows=$resultSetttt->fetch_assoc())
                {
                    $driver=$rows['name'];
                    echo"<option value='$driver'>$driver</option>";
                }
                ?>
            </select>
            <br>
                <button type="submit" name="update" class="btn btn-secondary" >Update</button>
                </form>
            </div>


        </div>
      </div>
    </div>
  </div>
</div>
<?php
    }

?>
?>

        
</body>