<?php

include("connection.php");

//RETRIVE DATA

$employeeId = $_POST['Uname'];
$password = $_POST['password'];

$employeeId = mysqli_real_escape_string($conn, $employeeId);
$password = mysqli_real_escape_string($conn, $employeeId);

//query for te informaton
$sql = "SELECT * FROM users WHERE employee_id = '$employeeId' AND password = '$password' ";
$results = mysqli_query($conn, $sql);

//Check if the query was succesful
if (!$results) {
    die('Query Failed: ' .mysqli_error($conn));

}

if (mysqli_num_rows($results) == 1) {
    //Redirect to dashboard page
    header('Location: employeePage.html');
} else {
    //dispaly error message
    echo 'Invalid ID or password';
}

?>