<?php
$hostname     = "sg2plzcpnl471121.prod.sin2.secureserver.net";
$username     = "icargo";
$password     = "root123";
$databasename = "icargopacific_db";
// Create connection
$conn = new mysqli($hostname, $username, $password, $databasename);
// Check connection
if ($conn->connect_error) {
    die("Unable to Connect database: " . $conn->connect_error);
}
?>
