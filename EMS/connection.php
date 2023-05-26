<?php
$hostname = "Localost";
$username = "root";
$password = "";
$database = "EMS";

$conn = mysqli_connect($hostname , $username, $password , $database );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close the connection
$conn->close();

?>
