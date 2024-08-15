<?php
// Attempt to establish a connection to the MySQL database
$conn = mysqli_connect("localhost", "root", "", "logininfo");

// Check connection status
if (!$conn) {
    // Connection failed, display error message
    echo "Connection failed: " . mysqli_connect_error();
}
?>