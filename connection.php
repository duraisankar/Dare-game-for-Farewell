<?php
$servername = "localhost";
$username = "root";
$password = "";

global $con;
$con=mysqli_connect($servername, $username, $password);

mysqli_select_db($con,"dare");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);

}
?>