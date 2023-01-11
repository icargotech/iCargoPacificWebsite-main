<!-- ICON -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<!-- Sidebar CSS -->
<style type="text/css">
  .sidebar
{
position: fixed;
top: 0;
bottom: 0;
left: 0;
padding: 48px 0 0;
}

#sidehover:hover
{
background-color: gray;
}
p.error{
  color:red;
}
</style>


<nav id="sidebarmenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse rounded-end navbar-expand-lg">
      <div class="position-sticky pt-2">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a id="sidehover" href="Dashboard.php" class="nav-link border-bottom border-secondary text-white"><i class="bi bi-speedometer2"></i> Dashboard</a>
          </li>

          <li class="nav-item accordion accordion-flush">
             <div class="accordion-item border-bottom border-secondary">
              <p class="accordion-header" id="headingOne">
                <a class="nav-link accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="bi bi-people-fill"></i>&nbsp Icargo Partners
                </a>
              </p>
              <div id="collapseOne" class="accordion-collapse collapse show bg-dark" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a id="sidehover" href="Partner_verify.php" class="nav-link border-bottom border-secondary text-white mt-2 "><i class="bi bi-person-plus-fill"></i> Partner Verification</a>
                    </li>
                    
                    <li class="nav-item">
                      <a id="sidehover" href="Accounts.php" class="nav-link border-bottom border-secondary text-white mt-2 "><i class="bi bi-person-lines-fill"></i> Account List</a>
                    </li>

                    <li class="nav-item">
                      <a id="sidehover" href="Partner_manage.php" class="nav-link  text-white mt-2 "><i class="bi bi-shield-slash-fill"></i> Manage Partners</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item accordion accordion-flush">
             <div class="accordion-item border-bottom border-secondary">
              <p class="accordion-header" id="headingOne">
                <a class="nav-link accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne"><i class="bi bi-inboxes-fill"></i></i>&nbsp Orders
                </a>
              </p>
              <div id="collapseOne1" class="accordion-collapse collapse show bg-dark" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a id="sidehover" href="Order_history.php" class="nav-link border-bottom border-secondary text-white mt-2 "><i class="bi bi-receipt-cutoff"></i></i> Order History</a>
                    </li>
                    
                    <li class="nav-item">
                      <a id="sidehover" href="Reports.php" class="nav-link border-bottom border-secondary text-white mt-2 "><i class="bi bi-stickies-fill"></i> Reports</a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a id="sidehover" href="Charge_management.php" class="nav-link border-bottom border-secondary text-white mt-2"><i class="bi bi-box2-fill"></i> Charge Management</a>
          </li>

           
            <li class="nav-item">
            <a id="sidehover" href="Staff_list.php" class="nav-link border-bottom border-secondary text-white mt-2"><i class="bi bi-person-workspace"></i> Staff List</a>
          </li>

            <li class="nav-item">
            <a id="sidehover" href="Attendance_log.php" class="nav-link border-bottom border-secondary text-white mt-2"><i class="bi bi-calendar3"></i> Attendance Logs</a>
          </li>

          <li class="nav-item">
            <a id="sidehover" href="User_account.php" class="nav-link border-bottom border-secondary text-white mt-2"><i class="bi bi-gear-fill"></i> My Account</a>
          </li>

          <li class="nav-item">
            <a href="Logout.php" class="nav-link border-bottom border-secondary text-white mt-2"><i class="bi bi-arrow-bar-left"></i> Sign Out</a>
          </li>

        </ul>
      </div>
    </nav>