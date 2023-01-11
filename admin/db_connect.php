<?php
                $servername = "sg2plzcpnl471121.prod.sin2.secureserver.net";
                $username = "icargo";
                $password = "root123";
                $dbname = "icargopacific_db";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
?>